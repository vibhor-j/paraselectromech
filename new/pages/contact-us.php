<div id="contact">
   <div class="line">
      <h2 class="section-title">Contact Us</h2>
      <div class="margin">
         <!-- <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
            <img src="./img/contact.jpg" alt="">
            </div> -->
         <div class="s-12 m-12 l-4 margin-bottom right-align">
            <h3>Paras Electromech</h3>
            <address>
               <p><strong>Adress:</strong> UG-5, Parmesh Business Center II<br>Karkardooma, Delhi</p>
               <p><strong>Country:</strong> India</p>
               <p><strong>E-mail:</strong> paras_electromech@yahoo.com</p>
            </address>
            <br />
            <h3>Social</h3>
            <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/pages/Vision-Design-graphic-ZOO/154664684553091">Vision Design - graphic zoo</a></p>
            <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/myresponsee">Responsee</a></p>
            <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="https://twitter.com/MyResponsee">Responsee</a></p>
         </div>
         <div class="s-12 m-12 l-5">
            <h3>Fill your details below and we will contact you</h3>
            <form class="customform" name="contactform" id="contactform" method="post" action="./pages/send_form_email.php">
               <div class="s-12">
                  <label for="first_name">Name *</label>
                  <input  type="text" name="first_name" maxlength="50" size="30">
               </div>
               <div class="s-12">
                  <label for="email">Email Address *</label>
                  <input  type="text" name="email" maxlength="80" size="30">
               </div>
               <div class="s-12">
                  <label for="telephone">Telephone Number</label>
                  <input  type="text" name="telephone" maxlength="30" size="30">
               </div>
               <div class="s-12">
                  <label for="comments">Comments *</label>
                  <textarea  name="comments" maxlength="1000" cols="25" rows="3"></textarea>
               </div>
               <div class="s-12 m-12 l-4">
                  <input id="contact_form_submit" type="button" value="Submit">
               </div>
               <div class="s-12 contacting" style="display:none;">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
$(document).ready(function () {
  $('#contact_form_submit').on('click', function () {
    $('#contactform').ajaxForm({
      beforeSubmit: function (e) {
        $('.contacting').show();
        $('.contacting').html('<label>&nbsp;</label><img src=\'./img/uploading.gif\'/>');
      },
      success: function (e) {
        $('.contacting').html(e);
      },
      error: function (e) {
        $('.contacting').html('Error sending mail from server. You can call the contact person. Sorry for the inconvenience caused.');
      }
    }).submit();
  });
});

</script>

<!-- MAP -->
<div id="map-block">
   <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d56011.31730395664!2d77.25254870761859!3d28.66848059146528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sparmesh+business+center+ii+karkardooma!5e0!3m2!1sen!2sin!4v1460210679642" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
   <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1247814.3661917313!2d16.569872019090596!3d48.23131953825178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8cbf758ecb9f%3A0xddeb1d26bce5eccf!2sGallayova+2150%2F19%2C+841+02+D%C3%BAbravka!5e0!3m2!1ssk!2ssk!4v1440344568394" width="100%" height="450" frameborder="0" style="border:0"></iframe>-->
</div>
