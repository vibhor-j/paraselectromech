<?php
session_start();
?>
<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == 'true') {
    $count     = 0;
    $countFail = 0;
    foreach ($_FILES['files']['name'] as $key => $val) {
        $target_dir  = "../files/";
        $target_file = $target_dir . $_FILES['files']['name'][$key];
        
        if (!is_uploaded_file($_FILES['files']['tmp_name'][$key])) {
            echo $_FILES['files']['name'][$key] . " failed to uplaod.";
        }
        
        if (move_uploaded_file($_FILES['files']['tmp_name'][$key], $target_file)) {
            $count++;
        } else {
            $countFail++;
        }
        
    }
    
    echo $count . " files uploaded successfully.";
    if ($countFail > 0) {
        echo "\n" . $countFail . " files failed to upload.";
    }
    
    //header('Location:../pages/');
    
}
?>
