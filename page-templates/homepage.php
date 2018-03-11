<?php
/* Template Name: Homepage */
// THIS IS A COMMENT FOR maranatha-joyful
// No direct access
if ( ! defined( 'ABSPATH' ) ) exit;

// Header
get_header();

// Start loop
while ( have_posts() ) : the_post();

// Show sections
get_sidebar( 'home-sections' );

// End loop
endwhile;
?>

<!-- <div id="maranatha-home-section-media">
  <div class="maranatha-home-section-inner">
    <div class="maranatha-home-section-content">
      <h2>죠이플 미디어</h2>
      <p>교회행사 사진 및 특별영상을 공유해드립니다.</p>
        <ul class="maranatha-circle-buttons-list">
          <li><a href="/photos/">사진앨범</a></li>
          <li><a href="/videos/">특별영상</a></li>
        </ul>
     </div>
    // Masterslider shortcode
  </div>
</div> -->


<?php
// Footer
get_footer();
