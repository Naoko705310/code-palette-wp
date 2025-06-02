<?php
/*
Template Name: Contact Thanks English
*/
?>
<!-- contact/thanks Contact Form Completion -->
<?php get_header(); ?>
<main>
  <!-- Lower Content -->
  <div class="page-contact-thanks page-layout">
    <div class="page-contact-thanks__inner inner">
      <div class="page-contact-thanks__contents-wrapper">
        <h2 class="page-contact-thanks__heading">
          Thank you<br>
          for your inquiry.
        </h2>
        <p class="page-contact-thanks__text">
          We sincerely appreciate your contact.<br>
          We will review your message and get back to you<br class="u-mobile">
          within 3 business days.<br>
          An automatic confirmation email has been sent<br class="u-mobile">
          to the email address you provided.
        </p>
        <!-- Return to Top -->
        <div class="page-contact-thanks__btn">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="button">
            <span>Return to the Top page</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>