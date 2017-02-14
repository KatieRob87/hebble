<section class="Partial-contact">
  <div class="container">
    <h2>Enquire Online</h2>
    <div class="row">
      <div class="col-sm-4">
        <?php echo do_shortcode('[contact-form-7 id="78" title="Contact Form"]'); ?>
      </div>
      <div class="col-sm-4">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15463.835192754756!2d-1.876246219420121!3d53.627884470801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bc4a4daecd94d%3A0xcc98888a5a1a1c9f!2sHebble+Hydraulic+Services+Ltd!5e0!3m2!1sen!2suk!4v1480427499988" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-sm-4">
        <h3>Hebble Hydraulics</h3>
        <p><?php the_field('address', 'option'); ?></p>
        <ul class="list list--no-pad list--no-bullet" style="padding-left: 0px !important;">
          <li><?php the_field('phone_number', 'option'); ?></li>
          <li><?php the_field('email_address', 'option'); ?></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /.Partial-contact -->