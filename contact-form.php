<!-- ==========================================
CONTACT FORM
========================================== -->

<?php

  //response generation function
  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }


  // Response messages
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  // User posted variables
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email_address = $_POST['email_address'];
  $message = $_POST['message'];

  // PHP mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";


  // Validate email
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    my_contact_form_generate_response("error", $email_invalid);
  else {
    // Validate presence of name and message
    if(empty($name) || empty($message)){
      my_contact_form_generate_response("error", $missing_content);
    }
    else {
      // Send email
      $sent = wp_mail($to, $subject, strip_tags($message), $headers);
      if($sent) my_contact_form_generate_response("success", $message_sent);
      else my_contact_form_generate_response("error", $message_unsent);
    }
  }

?>


<section class="contact-section">

  <div class="left-column">
    <form class="contact-form" action="<?php the_permalink(); ?>" method="post">
      <h3>Get In Touch</h3>
      <div class="input-container">
        <input class="input__contact" id="first-name" type="text" name="first_name" value="<?php echo esc_attr($_POST['first_name']); ?>" required></input>
        <label for="first-name">First Name</label>
      </div>
      <div class="input-container">
        <input class="input__contact" id="last-name" type="text" name="last_name" value="<?php echo esc_attr($_POST['last_name']); ?>" required></input>
        <label for="last-name">Last Name</label>
      </div>
      <div class="input-container--last">
        <input class="input__contact--last" id="email-address" type="text" name="email_address" value="<?php echo esc_attr($_POST['email_address']); ?>" required></input>
        <label for="email-address">Email Address</label>
      </div>
      <div class="textarea-container">
        <textarea class="input__contact--message" id="message" type="textarea" name="message" required><?php echo esc_textarea($_POST['message']); ?></textarea>
        <label for="message">Message</label>
      </div>
      <p><input type="submit"></p>
    </form>
    <?php echo $response; ?>
  </div>

  <div class="right-column button-div">
    <div class="button-container">
      <div class="button button-send">
        <span>Send</span>
      </div>
    </div>
  </div>

</section>
