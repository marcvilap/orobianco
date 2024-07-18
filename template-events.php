<?php
/**
 * Template Name: Events
 *
 * @package WordPress
 */

 $button = get_field( 'button' );

if ($button['button_type'] && $button['button_type']=='link') {
	$letter = $button['link'];

	
}
elseif($button['button_type'] && $button['button_type']=='document'){
	$letter = $button['document'];
}

get_header();
?>
<main class="overflow-clip">
  <div class="container pb-20 pt-8 lg:pb-24 lg:pt-14 2xl:pb-44">
    <div class="reveal-group mb-20 grid items-center gap-x-8 gap-y-20 lg:mb-32 lg:grid-cols-2 xl:gap-x-24">

      <div class="lg:mx-20 md:mr-[10rem]">
        <svg class="mb-8 text-neutral-500 w-56" viewBox="0 0 971 229" fill="currentColor">
          <path
            d="m108 92-9 34-1 4-6-4H0v-1q14-5 14-13V13Q14 5 0 3V2h96l6 29h-1q-6-10-11-14-4-5-11-8-7-4-17-4H32v58h25q14 0 20-4 6-3 9-14v39q-3-11-9-14-6-4-20-4H32v58h34l13-2 10-6 9-10zM264 2h33v1q-6 1-10 6t-9 15l-42 97-17 11 1-3-46-113-9-14h45v1l-8 2q-3 0-5 3-3 3-2 6-1 4 2 10l37 92 40-92 3-10q0-3-2-5l-4-4-7-2zm197 90 1 1-9 34-1 4-6-4h-93v-1q14-5 14-13V13q0-8-14-10V2h97l6 29h-1l-11-14q-4-5-12-8-6-4-17-4h-30v58h25q15 0 20-4 6-3 9-14v39q-3-11-9-14-5-4-20-4h-25v58h34l13-2q6-2 11-6l8-10zM613 2h31v1l-5 2-4 3q-3 3-3 8l-1 14v102L537 21v74q0 17 3 24 4 6 10 7v1h-31v-1l6-1 4-4 3-8 1-14V16L517 2h30q3 7 7 10l73 86V34q0-17-4-23-3-7-10-8zm206 0-11 37h-1q3-34-26-34h-14v110q0 6 5 8l13 3v1h-53v-1l13-3q4-3 4-8V5h-4q-13 0-22 4-8 3-13 10l-10 20h-1l6-37zm111 54q41 9 41 36 0 17-13 27-12 10-35 10-30 0-47-16l15-25q-2 16 10 28 13 10 30 10 14 0 20-7t6-18l-2-11q-2-5-8-8l-11-5-14-4q-24-5-33-16-10-11-10-23 0-15 13-25 12-9 33-9 27 0 44 16l-16 25q1-17-9-28-10-9-27-10-12 0-17 6-6 7-6 16 0 7 3 13 3 5 8 9a68 68 0 0 0 25 9M494 211a2 2 0 0 1-4 0q0-3 2-2zm40 4q-1-3-5-5 4-2 4-7l-2-6q-3-3-9-3h-15v33h21q7-2 7-9zm-22-17h11l4 2 1 1 1 3-1 2q-1 3-6 3h-10zm17 24-5 1h-12v-10h11l6 1 1 4zm-57-23q-5-5-12-5a16 16 0 0 0-17 17 16 16 0 0 0 17 16q8 0 12-4 5-6 5-12 0-7-5-12m-3 21q-3 3-9 3t-9-3l-3-9q0-6 3-9 3-4 9-4t9 4q4 3 4 9 0 5-4 9m-122-20q-6-5-12-5a16 16 0 0 0-17 17 16 16 0 0 0 17 16q6 0 12-5 4-5 4-11 0-8-4-12m-3 20q-4 4-9 4a12 12 0 0 1-13-12q0-6 4-9 3-4 9-4a12 12 0 0 1 12 13q0 5-3 8m59-5 2-1q6-2 6-8 0-5-3-8l-8-2h-16v32h4v-12h11l7 12h5zm-15-3v-12h11l5 1q3 2 2 5v3q-3 3-7 3zm179-16h4v32h-4zm55 0h-5l-14 32h4l4-9h16l4 9h4zm-9 19 6-14 6 14zm54-19h4l19 26v-26h5v32h-5l-19-26v26h-4zm65 27q-4-5-4-11 0-7 4-12t11-5q6 0 10 3l4 4-4 2a10 10 0 0 0-9-5l-5 1-4 3q-3 3-3 9 0 5 3 8 3 4 9 4a10 10 0 0 0 10-6l4 1-5 6q-4 3-10 3-7 0-11-5m85-23q-4-5-12-5a16 16 0 0 0-16 17 16 16 0 0 0 16 16q8 0 12-5 5-5 5-11 0-7-5-12m-3 20q-3 4-9 4a12 12 0 0 1-12-12q0-6 3-9 3-4 9-4a12 12 0 0 1 12 13q0 5-3 8m-588-9 10-15h5l-13 20v12h-4v-12l-13-20h5zm-49 4-5-5q3-2 3-7 1-3-2-6t-8-3h-16v33h22q6-2 6-9zm-23-17h11l5 2 1 1v3l-1 2q-1 3-5 3h-11zm17 24-5 1h-12v-10h11l6 1 2 4z">
          </path>
        </svg>
        <h1 class="mb-8 text-4xl font-semibold uppercase xl:text-5xl reveal-fade-up"><?php the_field( 'title1' ); ?>
        </h1>
        <div class="prose reveal-fade-up reveal-delay-500"><?php the_field( 'content1' ); ?></div>
      </div>
      <div class="md:grid md:grid-cols-2 md:gap-8 md:ml-[10rem]  lg:ml-0 ">
        <div class="parallax-down relative max-md:pr-32 reveal-fade-up reveal-delay-1000">
          <?php echo wp_get_attachment_image( get_field( 'image1' ), 'medium_large', false, array( 'class' => 'mx-auto' ) ); ?>
        </div>
        <div class="parallax-up max-md:-mt-32 max-md:pl-32 md:pt-20 lg:pt-32 reveal-fade-up reveal-delay-1500">
          <?php echo wp_get_attachment_image( get_field( 'image2' ), 'medium_large', false, array( 'class' => 'mx-auto' ) ); ?>
        </div>
      </div>
    </div>
    <button
      class="parallax-zoom xl:cursor-play relative mb-20 block bg-neutral-800 max-md:-mx-4 lg:mb-32 lg:w-full xl:mb-44"
      popovertarget="video">
      <?php echo wp_get_attachment_image( get_field( 'image_video' ), 'full', false, array( 'class' => 'aspect-square object-cover opacity-60 md:aspect-video xl:aspect-[2/1]' ) ); ?>
      <svg class="absolute left-1/2 top-1/2 z-10 -ml-16 -mt-16 w-32 xl:hidden" viewBox="0 0 128 128" width="128"
        height="128" fill="#fff">
        <path
          d="M64 0c35.32 0 64 28.68 64 64s-28.68 64-64 64S0 99.32 0 64 28.68 0 64 0m0 8.49A55.54 55.54 0 0 0 8.49 64 55.54 55.54 0 0 0 64 119.51 55.54 55.54 0 0 0 119.51 64 55.54 55.54 0 0 0 64 8.49m0 1A54.54 54.54 0 0 1 118.51 64 54.54 54.54 0 0 1 64 118.51 54.54 54.54 0 0 1 9.49 64 54.54 54.54 0 0 1 64 9.49m12.94 51.33h1.47v-3.86l3.95-5.94h-1.63l-3 4.61-3.02-4.6H73l3.93 5.9zm-9.82 16h7.28v-1.28h-5.81V72.5h3.77v-1.25h-3.77V68.3h5.75v-1.29h-7.22zm12.6.16a5 5 0 0 0 3.63-1.47 5 5 0 0 0 1.48-3.59 5 5 0 0 0-5.1-5.05 5 5 0 0 0-3.62 1.46 5 5 0 0 0-1.48 3.6 5 5 0 0 0 5.1 5.05m.01-1.36a3.6 3.6 0 0 1-2.56-1.06 4 4 0 0 1-.77-1.18 4 4 0 0 1-.27-1.46 3.8 3.8 0 0 1 1.03-2.63 3.5 3.5 0 0 1 2.57-1.07 3.55 3.55 0 0 1 3.33 2.24q.27.67.27 1.46a4 4 0 0 1-1.04 2.64 3.5 3.5 0 0 1-2.56 1.06M57.1 60.82h7.11v-1.3h-5.64v-8.5H57.1zm8.08 0h1.53l1.15-2.87h4.38l1.14 2.87h1.6l-4.02-9.8h-1.73zm3.16-4.08 1.72-4.31 1.7 4.3zM47.17 76.82h1.73l4.06-9.8h-1.51l-3.38 8.35-3.32-8.35h-1.58zm9.68 0h3.46q1.1 0 2.05-.36A5 5 0 0 0 64 75.43a4.6 4.6 0 0 0 1.47-3.5 4.8 4.8 0 0 0-1.48-3.5 5 5 0 0 0-1.63-1.04 6 6 0 0 0-2.05-.37h-3.46zm1.47-1.31v-7.17h2a3.7 3.7 0 0 1 2.6 1.03 3.5 3.5 0 0 1 1.04 2.56 3.6 3.6 0 0 1-1.04 2.55 3.5 3.5 0 0 1-2.6 1.03zM48 60.82h1.47v-3.94h3.05q.95 0 1.68-.38.72-.37 1.13-1.03.4-.65.4-1.52t-.4-1.53a3 3 0 0 0-1.12-1.03 4 4 0 0 0-1.69-.37H48zm1.47-5.2v-3.3h2.9a2 2 0 0 1 1.38.44q.5.45.5 1.2 0 .77-.5 1.22-.51.45-1.37.45zm4.15 21.2h1.47v-9.8H53.6z">
        </path>
      </svg>
    </button>
    <div class="popup peer w-full max-w-5xl p-0" id="video" popover="">
      <iframe class="aspect-video w-full" id="youtube-video"
        src="https://www.youtube.com/embed/<?php the_field( 'youtube_id' ); ?>"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
    </div>
    <button
      class="invisible fixed inset-0 z-20 bg-neutral-800/95 opacity-0 transition-all peer-[:popover-open]:visible peer-[:popover-open]:opacity-100"
      popovertarget="video" id="closeButton">
      <svg class="fixed right-8 top-8 w-8 cursor-pointer text-white" viewBox="0 0 960 960" fill="currentColor">
        <path d="M431 487 13 906l45 45 418-419 426 428 45-45-426-428L960 45 915 0 476 441 45 9 0 54z"></path>
      </svg>
    </button>

    <div class="grid items-center gap-x-8 gap-y-20 lg:grid-cols-2 xl:gap-x-24 ">
      <div class="lg:order-2 lg:mx-20 md:mr-[10rem] ">
        <h2 class="mb-8 text-4xl font-semibold uppercase xl:text-5xl"><?php the_field( 'title2' ); ?></h2>
        <div class="prose"><?php the_field( 'content2' ); ?></div>
        <a class="group mt-8 inline-flex items-center uppercase transition-colors hover:text-neutral-500 xl:mt-20"
          <?php if ($button['blank']){echo "target='_blank'"; }?> href="<?php echo $letter; ?>">
          <span class="size-16 rounded-full border border-current"></span>
          <span class="relative -ml-11 flex w-6 items-center border-t border-current transition-all group-hover:w-10">
            <span class="absolute right-0 size-2 rotate-45 border-r border-t border-current"></span>
          </span>
          <span class="bg-white pl-4"><?php echo $button['button_name']; ?></span>
        </a>
      </div>
      <div class="max-lg:mx-auto max-lg:max-w-lg md:ml-[10rem] lg:ml-0 reveal-group  ">
        <?php echo wp_get_attachment_image( get_field( 'image3' ), 'medium_large', false, array( 'class' => 'parallax-down relative ml-auto aspect-square w-2/5 object-cover z-10' ) ); ?>
        <?php echo wp_get_attachment_image( get_field( 'image4' ), 'medium_large', false, array( 'class' => '-my-[20%] mx-auto aspect-[4/5] w-3/4 object-cover reveal-zoom-in relative z-1' ) ); ?>
        <?php echo wp_get_attachment_image( get_field( 'image5' ), 'medium_large', false, array( 'class' => 'parallax-up aspect-video w-3/5 object-cover relative z-10' ) ); ?>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();