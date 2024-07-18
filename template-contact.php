<?php
/**
 * Template Name: Contacto
 *
 * @package WordPress
 */

get_header();
?>
<main class="overflow-clip">
  <div class="container pb-20 pt-8 lg:pb-24 lg:pt-14 2xl:pb-44">
    <div class="reveal-group mb-20 lg:mb-28 ">
      <h1 class="reveal-fade-up mb-8 text-center text-4xl font-semibold uppercase xl:text-5xl"><?php the_title(); ?>
      </h1>
      <p class="reveal-fade-up reveal-delay-100 text-center text-lg text-neutral-800">
        <?php the_field( 'description' ); ?></p>
    </div>

    <iframe class="parallax-zoom mb-10 h-96 w-full bg-neutral-100 lg:mb-8"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3115.228744390869!2d0.04202307529875955!3d38.66661076028959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x129e008e56c780d5%3A0xeadcd56283174d64!2sOrobianco%20Ristorante!5e0!3m2!1ses-419!2smx!4v1718373050889!5m2!1ses-419!2smx"
      loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>


    <div class="bg-neutral-800 text-white p-4 px-6 flex justify-between items-center mb-12 md:max-w-[25rem] mx-auto ">
      <div>
        Partida Colina del Sol, 49A,<br>03710 Calpe, Alicante
      </div>
      <div>
        N 38.6666260<br>E 0.0445600
      </div>
    </div>




    <?php if( have_rows('contact_blocks') ): ?>
    <div class="lg:mt-64">
      <?php while( have_rows('contact_blocks') ) : the_row(); ?>
      <div
        class="parallax-zoom mx-auto grid gap-8 border-y border-current py-8 text-lg font-semibold md:grid-cols-2 xl:max-w-5xl">
        <h2 class="text-2xl font-semibold uppercase md:col-span-2"><?php the_sub_field('title'); ?>
        </h2>
        <div>
          <?php the_sub_field('block_1'); ?>
        </div>
        <div>
          <?php the_sub_field('block_2'); ?>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>


    <div class="mt-20 grid items-center gap-x-8 gap-y-20 lg:mt-32 lg:grid-cols-2 xl:mt-44 xl:gap-x-24">
      <div class="max-lg:mx-auto max-lg:max-w-lg reveal-group md:ml-[10rem] lg:ml-0">
        <?php echo wp_get_attachment_image( get_field( 'image1' ), 'large', false, array( 'class' => 'parallax-down relative aspect-square w-2/5 object-cover z-10' ) ); ?>
        <?php echo wp_get_attachment_image( get_field( 'image2' ), 'large', false, array( 'class' => '-my-[20%] mx-auto aspect-[4/5] w-3/4 object-cover relative reveal-zoom-in z-1' ) ); ?>
        <?php echo wp_get_attachment_image( get_field( 'image3' ), 'large', false, array( 'class' => 'parallax-up ml-auto aspect-video w-3/5 object-cover z-10 relative' ) ); ?>
      </div>
      <div class="lg:ml-12">
        <p class="mb-8"><?php esc_html_e( 'Los campos con * son obligatorios', 'wp' ); ?></p>
        <?php echo do_shortcode(get_field( 'form' )); ?>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();