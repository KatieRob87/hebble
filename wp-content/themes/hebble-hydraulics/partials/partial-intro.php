<section class="Partial-intro-sidebar Partial-intro-sidebar--inner">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      	<?php if(is_single()) :  ?>
      		<h1><?php the_title(); ?></h1>
      	<?php endif; ?>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>
<!-- /.Partial-intro-sidebar -->