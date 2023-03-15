<div id="employment">
   <div class="line">
      <h2 class="section-title">Employment</h2>
      <div class="margin">
         <table>
            <thead>
               <tr>
                  <th>File Name</th>
                  <th>File Size (KB)</th>
                  <th>Download</th>
                  <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'true'){ ?>
                  <th>Delete</th>
                  <?php }?>
               </tr>
            </thead>
            <tbody>
               <?php
                  $dirToUpload = "./files/";
                  $myDirectory = opendir($dirToUpload);
                  
                  // get each entry
                  while($entryName = readdir($myDirectory)) {
                     $dirArray[] = $entryName;
                  }
                  
                  // close directory
                  closedir($myDirectory);
                  
                  // count elements in array
                  $indexCount = count($dirArray);
                  
                  
                  // sort 'em
                  sort($dirArray);
                  
                  // print 'em
                  // loop through the array of files and print them all
                  for($index=0; $index < $indexCount; $index++) {
                          if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
                        print("<TR><TD>$dirArray[$index]</td>");
                        print("<td style='text-align:right;'>");
                        print(round(filesize($dirToUpload.$dirArray[$index])/1024,2));
                        print("</td>");
                        print("<td style='text-align:center;'><a href=\"".$dirToUpload.$dirArray[$index]."\" style='color:#92C500;font-size: x-large;' class='icon icon-download'></a></td>");
                        if(isset($_SESSION['login']) && $_SESSION['login'] == 'true'){
                           print("<td style='text-align:center;'><i data-file='$dirArray[$index]' style='color:#E80000;font-size: x-large;cursor:pointer;' class='icon icon-cancel_circle'></i></td>");
                        }
                        print("</TR>\n");
                     }
                  }
                  
                  //}
                  ?>
            </tbody>
         </table>
         <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'true'){ ?>
         &nbsp;
         <form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="./filemanagement/upload.php">
            <label>Choose Files</label>
            <input type="file" name="files[]" id="files" multiple >
            <div class="uploading" style="display:none;">
               <label>&nbsp;</label>
               <img src="./img/uploading.gif"/>
            </div>
         </form>
         <?php } ?>
      </div>
   </div>
</div>
<?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'true'){ ?>
<script type="text/javascript">
$(document).ready(function () {
  $('.icon-cancel_circle').on('click', function () {
    var ele = $(this);
    filename = $(this).attr('data-file');
    $.ajax({
      type: 'POST',
      url: './filemanagement/delete.php',
      data: {
        'filename': filename
      },
      success: function (data) {
        if (data == 'success') {
          ele.closest('tr').remove();
        } else {
          alert('Error deleting file. Please contact system admin.');
        }
      }
    });
  })
  $('#files').on('change', function () {
    $('#multiple_upload_form').ajaxForm({
      beforeSubmit: function (e) {
        $('.uploading').show();
      },
      success: function (e) {
        $('.uploading').hide();
        alert(e);
        location.reload();
      },
      error: function (e) {
        alert('Failed to upload files.');
        location.reload();
      }
    }).submit();
  });
});
</script>
<?php } ?>
