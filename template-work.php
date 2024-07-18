<?php
/**
 * Template Name: Trabaja con Nosotros
 *
 * @package WordPress
 */

get_header();
?>
<main class="overflow-clip">
  <div class="container pb-20 pt-8 lg:pb-24 lg:pt-14 2xl:pb-44">
    <div class="reveal-group mb-20 lg:mb-32">
      <h1 class="reveal-fade-up mb-8 text-center text-4xl font-semibold uppercase xl:text-5xl"><?php the_title(); ?>
      </h1>
      <p class="reveal-fade-up reveal-delay-100 text-center text-lg text-neutral-500">
        <?php the_field( 'description' ); ?></p>
    </div>
    <div class="flex flex-col-reverse lg:grid gap-x-8 gap-y-20 lg:grid-cols-2 xl:gap-x-24">
      <div class="max-lg:mx-auto max-lg:max-w-lg reveal-group">
        <?php echo wp_get_attachment_image( get_field( 'image1' ), 'large', false, array( 'class' => 'parallax-down relative ml-auto aspect-video w-3/5 object-cover z-10' ) ); ?>
        <?php echo wp_get_attachment_image( get_field( 'image2' ), 'large', false, array( 'class' => '-my-[20%] mx-auto aspect-[4/5] w-3/4 object-cover z-1 reveal-zoom-in' ) ); ?>
        <?php echo wp_get_attachment_image( get_field( 'image3' ), 'large', false, array( 'class' => 'parallax-up aspect-square w-2/5 object-cover z-10' ) ); ?>
      </div>

      <div>
        <?php echo do_shortcode(get_field( 'form' )); ?>
      </div>

    </div>
  </div>
</main>
<?php
get_footer();