<script type="text/javascript">
  $(document).ready(function(){

    $("#email, #message, #sender_name").click(function(){
      $(".email-sent").css("visibility", "hidden");
    });

    $('#submit').click(function()
    {
      var email_address = $("#email").val();
      var message = $("#message").val();
      var sender = $("#sender_name").val();

      if((email_address)&&(message)&&(sender))
      {

        $.ajax({
          url: "sendComment.php",
          type:'POST',
          data:
          {
            email: email_address,
            sender: sender,
            message: message
          },
          success: function(msg)
          {
                              $(".email-sent").css("visibility", "visible");
                              $(':input','#email_form')
                              .not(':button, :submit, :reset, :hidden')
                              .val('')
                              .removeAttr('checked')
                              .removeAttr('selected');
                            }
                          });
      }
    });
  });
</script>


<div class="col-sm-8 col-sm-offset-2 contact-box">
  <form id="email_form" class="form-horizontal" role="form" method="post" action="index.php">
    <div class="form-group">
      <label for="name" class="col-sm-1 control-label">Name</label>
      <div class="col-sm-11">
        <input type="text" class="form-control" id="sender_name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
        <?php echo "<p class='text-danger'>$errName</p>";?>
      </div>
    </div>
    <div class="form-group">
      <label for="email" class="col-sm-1 control-label">Email</label>
      <div class="col-sm-11">
        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
        <?php echo "<p class='text-danger'>$errEmail</p>";?>
      </div>
    </div>
    <div class="form-group">
      <label for="message" class="col-sm-1 control-label">Message</label>
      <div class="col-sm-11">
        <textarea class="form-control" id="message" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
        <?php echo "<p class='text-danger'>$errMessage</p>";?>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-10 col-sm-offset-1">
        <input id="submit" name="submit" type="button" value="Send" class="btn btn-primary">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="email-sent alert alert-success">Thank You! I will be in touch</div>
      </div>
    </div>
  </form>
</div><!--contact-box-->
