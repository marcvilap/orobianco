<?php
/**
 * Template Name: Bonos
 *
 * @package WordPress
 */

get_header();
?>
<main class="overflow-clip">
  <div class="container pb-20 pt-8 lg:pb-24 lg:pt-14 2xl:pb-44">
    <div class="reveal-group mb-20 grid items-center gap-x-8 gap-y-20 lg:mb-32 lg:grid-cols-2 xl:gap-x-24">

      <div class="lg:mx-20 md:mr-[10rem]">
        <h1 class="mb-8 text-4xl font-semibold uppercase xl:text-5xl reveal-fade-up"><?php the_field( 'title' ); ?></h1>
        <div class="prose reveal-fade-up reveal-delay-500"><?php the_field( 'content' ); ?></div>
      </div>
      <div class="md:grid md:grid-cols-2 md:gap-8 md:ml-[10rem] lg:ml-0 ">
        <div class="parallax-down relative max-md:pr-32 reveal-fade-up reveal-delay-1000">
          <?php echo wp_get_attachment_image( get_field( 'image1' ), 'medium_large', false, array( 'class' => 'mx-auto' ) ); ?>
        </div>
        <div class="parallax-up max-md:-mt-32 max-md:pl-32 md:pt-20 lg:pt-32 reveal-fade-up reveal-delay-1500">
          <?php echo wp_get_attachment_image( get_field( 'image2' ), 'medium_large', false, array( 'class' => 'mx-auto' ) ); ?>
        </div>
      </div>
    </div>
    <div class="mx-auto mb-20 grid max-w-2xl items-start gap-4 md:grid-cols-2 md:gap-8 lg:mb-32 xl:mb-44">

      <?php foreach ( get_field( 'menu' ) as $item ) : ?>
      <article class="group md:[&:nth-child(2n)]:pt-16 lg:[&:nth-child(2n)]:pt-24">
        <a class="parallax-zoom block border border-current p-4 transition-colors hover:border-neutral-800 hover:bg-neutral-800 hover:text-white"
          target="_blank" href="<?php echo esc_url( $item['link'] ); ?>">
          <?php echo wp_get_attachment_image( $item['image'], 'medium_large', false, array( 'class' => 'mb-4 aspect-[4/3] w-full object-cover' ) ); ?>
          <h3 class="mb-2 text-2xl font-semibold uppercase"><?php echo esc_html( $item['title'] ); ?></h3>
          <p class="mb-4 text-lg"><?php echo esc_html( $item['description'] ); ?></p>
          <p class="mb-4 flex items-center gap-2 text-neutral-500 transition-colors group-hover:text-white">
            <span class="flex size-4 items-center justify-center rounded-full border border-current text-sm">!</span>
            <em><?php echo esc_html( $item['label'] ); ?></em>
          </p>
          <p class="mb-8 text-2xl font-semibold"><?php echo esc_html( $item['price'] ); ?></p>
          <p class="inline-flex items-center gap-2 self-center font-semibold uppercase hover:underline">
            <span><?php esc_html_e( 'Ver oferta', 'wp' ); ?></span>
            <svg class="w-6 transition-transform group-hover:translate-x-4" viewBox="0 0 960 538" fill="currentColor">
              <path d="m691 538 269-269-15-15L691 0l-30 30 218 218H0v42h879L661 508z"></path>
            </svg>
          </p>
        </a>
      </article>
      <?php endforeach; ?>

    </div>
    <div class="relative reveal-group">
      <?php echo wp_get_attachment_image( get_field( 'image3' ), 'medium_large', false, array( 'class' => 'parallax-down relative w-1/2 object-cover max-md:ml-8 md:max-md:ml-4 md:w-1/4 z-10' ) ); ?>
      <?php echo wp_get_attachment_image( get_field( 'image4' ), 'full', false, array( 'class' => 'mx-auto -mt-[10%] aspect-video object-cover max-md:-mb-[10%] max-md:-mt-[5%]  md:w-3/4 relative z-1 reveal-zoom-in' ) ); ?>
      <?php echo wp_get_attachment_image( get_field( 'image5' ), 'medium_large', false, array( 'class' => 'parallax-up aspect-[3/2] w-1/2 object-cover max-md:ml-auto max-md:mr-4 md:absolute md:bottom-[-19%] lg:bottom-[10%] md:right-0 md:w-1/3 z-10' ) ); ?>
    </div>
  </div>
</main>
<?php
get_footer();