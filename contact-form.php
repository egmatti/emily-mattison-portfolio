<!-- ==========================================
CONTACT FORM
========================================== -->

<section class="contact-section">

  <div class="left-column">
    <form class="contact-form" action="mail.php" method="post">
      <h3>Get In Touch</h3>
      <div class="input-container">
        <input class="input__contact" id="first-name" type="text" name="first_name" required>
        <label for="first-name">First Name</label>
      </div>
      <div class="input-container">
        <input class="input__contact" id="last-name" type="text" name="last_name" required>
        <label for="last-name">Last Name</label>
      </div>
      <div class="input-container--last">
        <input class="input__contact--last" id="email-address" type="text" name="email_address" required>
        <label for="email-address">Email Address</label>
      </div>
      <div class="textarea-container">
        <textarea class="input__contact--message" id="message" type="textarea" name="message" required></textarea>
        <label for="message">Message</label>
      </div>
      <input type="submit" value="Send">
    </form>
  </div>

  <div class="right-column button-div">
    <div class="button-container">
      <div class="button button-send">
        <span>Send</span>
      </div>
    </div>
  </div>

</section>
