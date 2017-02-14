<div class="container">
  <?php

  $images = get_field('gallery');

  if( $images ): ?>
      <ul style="list-style-type: none; margin: 0px !important; padding: 0px; display: flex; justify-content: space-between; flex-wrap: wrap;">
          <?php foreach( $images as $image ): ?>
              <li style="flex-basis: 20%; text-align: center;">
                  <a href="<?php echo $image['url']; ?>" data-lightbox="image-1" data-title="<?php $image['caption']; ?>">
                       <img style="border: 3px solid #e9e9e9;" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                       <p style="background: #e9e9e9; padding: 6px; text-align: center;"><?php echo $image['title']; ?></p>
                  </a>
              </li>
          <?php endforeach; ?>
      </ul>

  <?php endif; ?>
</div>
