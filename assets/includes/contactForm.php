<div id="containerForm">
<!-- <?php if ($_GET['post']==='success') { ?>

  <div id="formResponse">
    Thank you.<br><br> Your message has been successfully posted.
  </div>
<?php } else { ?>     -->
      <div id="formHead">call / text<span class="f4">&nbsp; 07905 311 408</span><br>
      or send a message:</div>
      <div id="formContact">
        <form action="https://johnwalton.photography/forms/formmail_johnwalton.php" method="POST" name="form1"  class="f1">
          <input type="hidden" name="recipients" value="webmanager">
          <input type="hidden" name="realname" value="" />
          <input type="hidden" name="mail_options" value="Exclude=realname,HTMLTemplate=form_contact_email.php,KeepLines" />
          <input type="hidden" name="derive_fields" value="ip=REMOTE_ADDR,referrer=HTTP_REFERER," />
          <input type=hidden name="subject" value="Website Enquiry - John Walton Photography">
          <input type=hidden name="good_url" value="https://johnwalton.photography/current/contact.php?post=success">
          <div>name*</div>
          <div><input name="name" type="text" class="f2" id="name" required='required'></div>      
          <div>email*</div>
          <div><input name="email" type="text" class="f2" id="email" required='required'></div>
          <div>telephone</div>
          <div><input name="telephone" type="text" class="f2" id="telephone"></div>
          <div>message*</div>
          <div><textarea class="f5" name="message" cols="45" rows="5" wrap="soft" id="message" required='required'></textarea></div><br>
          <div id="button"><input class="f3" type="submit" onclick="javascript:playAudio()" value="Send"></div>
          <div class="f4">required*</div>
        </form>
      </div>
<!-- <?php } ?> -->

</div>