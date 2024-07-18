<?php
/**
 * Template Name: Menu
 *
 * @package WordPress
 */

get_header();
?>
<main class="overflow-clip">
  <div class="container pb-20 pt-8 lg:pb-24 lg:pt-14 2xl:pb-44">
    <div class="reveal-group mb-20 grid items-center gap-x-8 gap-y-20 lg:mb-32 lg:grid-cols-2 xl:gap-x-24 ">
      <div class="md:grid md:grid-cols-2 md:gap-8 md:ml-[10rem] lg:ml-0 ">
        <div class="parallax-down relative max-md:pr-32 reveal-fade-up reveal-delay-1000">
          <?php echo wp_get_attachment_image( get_field( 'image1' ), 'medium_large', false, array( 'class' => 'mx-auto' ) ); ?>
        </div>
        <div class="parallax-up max-md:-mt-32 max-md:pl-32 md:pt-20 lg:pt-32 reveal-fade-up reveal-delay-1500">
          <?php echo wp_get_attachment_image( get_field( 'image2' ), 'medium_large', false, array( 'class' => 'mx-auto' ) ); ?>
        </div>
      </div>
      <div class=" lg:mx-20 md:mr-[10rem]">
        <h1 class="mb-8 text-4xl font-semibold uppercase xl:text-5xl reveal-fade-up"><?php the_field( 'title' ); ?></h1>
        <div class="prose reveal-fade-up reveal-delay-500"><?php the_field( 'content' ); ?></div>
      </div>
    </div>
    <div
      class="mx-auto mb-20 grid md:flex md:flex-col lg:grid max-w-[75rem] items-start justify-center gap-4 gap-y-4 md:gap-8 lg:mb-32 lg:grid-cols-3 xl:mb-44">
      <?php foreach ( get_field( 'menu' ) as $item ) : ?>
      <article class="lg:[&:nth-child(2n)]:pt-24 lg:[&:nth-child(3n)]:pt-48 w-full">
        <a class="parallax-zoom group flex flex-col md:flex-row lg:flex-col md: justify-between border border-current p-8 transition-colors hover:border-neutral-800 hover:bg-neutral-800 hover:text-white lg:text-center"
          target="_blank" href="<?php echo esc_url( $item['file'] ); ?>">
          <div>
            <p class="lg:text-lg"><?php esc_html_e( 'Menú', 'wp' ); ?></p>
            <h3 class="my-2 text-4xl font-semibold uppercase lg:text-5xl"><?php echo esc_html( $item['title'] ); ?></h3>
            <p class="mb-8 md:mb-0 lg:mb-8 max-lg:text-sm lg:mb-16"><?php echo esc_html( $item['description'] ); ?></p>

          </div>
          <div class="flex flex-col">
            <p class="mb-4 mt-auto flex items-center gap-2 font-semibold uppercase lg:mb-8 lg:self-center">
              <span><?php esc_html_e( 'Ver menú', 'wp' ); ?></span>
              <svg class="w-6 transition-transform group-hover:translate-x-4" viewBox="0 0 960 538" fill="currentColor">
                <path d="m691 538 269-269-15-15L691 0l-30 30 218 218H0v42h879L661 508z"></path>
              </svg>
            </p>
            <em
              class="text-neutral-500 transition-colors group-hover:text-white max-lg:text-sm"><?php echo esc_html( $item['label'] ); ?></em>
          </div>
        </a>
      </article>
      <?php endforeach; ?>
    </div>
    <div class="relative reveal-group">
      <?php echo wp_get_attachment_image( get_field( 'image3' ), 'medium_large', false, array( 'class' => 'parallax-down relative ml-auto aspect-square w-1/3 object-cover max-md:mr-4 md:w-1/4 z-10' ) ); ?>
      <?php echo wp_get_attachment_image( get_field( 'image4' ), 'large', false, array( 'class' => 'mx-auto -mt-[10%] aspect-video object-cover max-md:-mb-[10%] md:-mt-[20%] md:w-3/4 relative z-1 reveal-zoom-in' ) ); ?>
      <?php echo wp_get_attachment_image( get_field( 'image5' ), 'medium_large', false, array( 'class' => 'parallax-up aspect-[3/2] w-1/2 object-cover max-md:ml-4 md:absolute md:bottom-[10%] md:left-0 md:w-1/3 relative z-10' ) ); ?>
    </div>
  </div>
</main>
<?php
get_footer();