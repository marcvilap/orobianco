<?php
/**
 * Template Name: Inicio
 *
 * @package WordPress
 */

get_header();
?>

<main class="overflow-clip">
  <div class="container pb-20 pt-8 lg:pb-24 lg:pt-14 2xl:pb-44">
    <div class="reveal-group grid gap-4 md:grid-cols-2 lg:gap-8">
      <div
        class="reveal-fade-up max-lg:mb-6 md:col-span-2 lg:col-span-1 md:max-w-xl reveal-delay-500 duration-very-slow">
        <h1 class="mb-8 text-4xl font-semibold uppercase xl:text-5xl"><?php the_field( 'title' ); ?></h1>
        <div class="prose"><?php the_field( 'description' ); ?></div>
      </div>
      <a class="reveal-fade-up <?php if(pll_current_language() === 'en') {echo 'xl:cursor-restaurant-en'; }  else{echo'xl:cursor-restaurant';}  ?> group relative h-72 overflow-clip md:col-span-2 lg:-order-1 lg:col-span-1 lg:row-span-3 lg:h-auto"
        href="<?php the_permalink( pll_get_post( 13 ) ); ?>">
        <?php echo wp_get_attachment_image( get_field( 'image_restaurant' ), 'medium_large', false, array( 'class' => 'absolute left-0 top-0 size-full object-cover' ) ); ?>
        <video
          class="invisible lg:visible absolute left-0 top-0 size-full object-cover opacity-0 transition-opacity group-hover:opacity-100"
          src="<?php the_field( 'video_restaurant' ); ?>" autoplay loop muted playsinline></video>
        <div
          class="absolute inset-0 flex flex-col items-center bg-black/75 p-8 text-white transition-opacity lg:justify-center xl:opacity-0 xl:group-hover:opacity-100">
          <svg class="my-auto max-w-md transition-transform lg:mb-0 xl:translate-y-8 xl:group-hover:translate-y-0"
            viewBox="0 0 3001 320" fill="currentColor">
            <path
              d="M1359 320H669V0h690zM1175 64l-39-1v1q-7-1-7 6l1 144v41l4 1h23l69-1q21 0 39-9c25-14 32-48 15-70l-14-13-7-6 3-3a65 65 0 0 0 15-23c10-33-14-66-50-67zm-148 90q-1-12-12-13-12 1-13 13 1 11 13 12 11-1 12-12m-93 1c0-55-44-96-100-96-57 1-98 44-97 101 1 55 44 96 99 96 58-1 99-44 98-101m1659 42a62 62 0 0 1-55 34c-34 2-62-17-71-48q-5-20-2-40 4-38 39-53 38-17 72 7l11 11 5 5 22-10-1-1-3-5a98 98 0 0 0-122-28 88 88 0 0 0-48 68q-8 43 15 79c37 55 118 50 153 3l7-10 3-5-11-5-12-6v1zM0 157c0-56 42-98 99-98s99 42 99 99c0 56-43 98-99 98-57 0-99-42-99-99m166 32 6-27c1-29-8-53-35-68a75 75 0 0 0-77 0 67 67 0 0 0-35 59q3 70 67 78c32 2 62-12 74-42m348-13q42-16 39-60c-4-31-28-52-59-53l-69-1h-31l-1 1v190h25v-71h56q8 0 12 6l40 65 20 1h7l-26-44-19-32 3-2zm-35-18h-60V87h2l4-1h12l61 2q34 11 28 44-6 20-28 24zm1735 54 3 4V63h26v191h-26q-4-1-6-6l-79-106-15-20-16-22v154h-25V63h25q4 1 7 6l63 85 14 19 4 6 3 3v1h1l18 25zm687-153c-57 0-99 42-99 98 0 57 42 99 99 99 56 0 99-42 99-98 0-57-42-99-99-99m2 172c-47-1-75-28-75-74 0-44 30-73 74-73 43 0 73 31 73 76 0 40-33 72-72 71m-1062-90 13 31 32 76 1 1v1l2 4h-26l-4-6-18-42q-3-7-10-7h-79q-7 0-9 7l-18 42q-3 7-10 6h-21l10-22 12-28 57-133c4-9 4-9 13-9h13q9 0 11 7zm-68-5-1 1-16 39h71l-35-84zm-264 118h-24V63h24zm-246-47q3-21-16-30-11-5-23-5h-68v60h26l58-2q21-3 23-23m-361-82c13 32 9 67-18 89a78 78 0 0 1-105-6 75 75 0 0 1-18-49l2-8 4-19q13-41 57-48c33-5 67 12 78 41m327 22q18-2 23-20c6-22-7-39-30-39h-66v59z" />
          </svg>
          <p
            class="mb-24 mt-8 max-w-md text-center text-lg transition-transform max-lg:hidden lg:mb-auto xl:translate-y-8 xl:group-hover:translate-y-0 delay-75">
            <?php the_field( 'description_restaurant' ); ?></p>
          <span class="flex size-16 items-center justify-center self-end rounded-full border border-current lg:hidden">
            <svg class="w-6" viewBox="0 0 960 538" fill="currentColor">
              <path d="m691 538 269-269-15-15L691 0l-30 30 218 218H0v42h879L661 508z" />
            </svg>
          </span>
        </div>
      </a>
      <a class="reveal-fade-up <?php if(pll_current_language() === 'en') {echo 'xl:cursor-rooftop-en'; }  else{echo'xl:cursor-rooftop';}  ?> group relative h-72 overflow-clip xl:ml-auto xl:aspect-video reveal-delay-750"
        href="<?php the_permalink( pll_get_post( 25 ) ); ?>">
        <?php echo wp_get_attachment_image( get_field( 'image_rooftop' ), 'medium_large', false, array( 'class' => 'absolute left-0 top-0 size-full object-cover' ) ); ?>
        <video
          class="absolute invisible lg:visible left-0 top-0 size-full object-cover opacity-0 transition-opacity group-hover:opacity-100"
          src="<?php the_field( 'video_rooftop' ); ?>" autoplay loop muted playsinline></video>
        <div
          class="absolute inset-0 flex flex-col items-center bg-black/75 p-8 text-white transition-opacity xl:justify-center xl:opacity-0 xl:group-hover:opacity-100">
          <svg class="my-auto w-28 transition-transform xl:my-0 xl:translate-y-8 xl:group-hover:translate-y-0"
            viewBox="0 0 675 324" fill="currentColor">
            <path
              d="M675 0H0v323h675zM233 228a91 91 0 0 1-70 29q-43 1-70-29a98 98 0 0 1-26-70q0-41 26-69 27-29 70-29 42-1 70 29 27 28 27 69 0 42-27 70m105-62q-11-1-12-12 1-12 12-13 12 1 13 13-1 11-13 12m231 86q-12 4-28 4h-91V63h86q30 0 47 17 14 14 14 35 0 30-22 42v1a49 49 0 0 1 31 46q0 36-37 48" />
          </svg>
          <p
            class="mt-8 text-center text-lg transition-transform max-xl:hidden xl:translate-y-8 xl:group-hover:translate-y-0 delay-75">
            <?php the_field( 'description_rooftop' ); ?></p>
          <span class="flex size-16 items-center justify-center self-end rounded-full border border-current xl:hidden">
            <svg class="w-6" viewBox="0 0 960 538" fill="currentColor">
              <path d="m691 538 269-269-15-15L691 0l-30 30 218 218H0v42h879L661 508z" />
            </svg>
          </span>
        </div>
      </a>

      <a class="reveal-fade-up  <?php if(pll_current_language() === 'en') {echo 'xl:cursor-events-en'; }  else{echo'xl:cursor-events';}  ?> group relative h-72 overflow-clip xl:aspect-video reveal-delay-1000"
        href="<?php the_permalink( pll_get_post( 29 ) ); ?>">
        <?php echo wp_get_attachment_image( get_field( 'image_events' ), 'medium_large', false, array( 'class' => 'absolute left-0 top-0 size-full object-cover' ) ); ?>
        <video
          class="invisible lg:visible absolute left-0 top-0 size-full object-cover opacity-0 transition-opacity group-hover:opacity-100"
          src="<?php the_field( 'video_events' ); ?>" autoplay loop muted playsinline></video>
        <div
          class="absolute inset-0 flex flex-col items-center bg-black/75 p-8 text-white transition-opacity xl:justify-center xl:opacity-0 xl:group-hover:opacity-100">
          <svg class="my-auto w-56 transition-transform xl:my-0 xl:translate-y-8 xl:group-hover:translate-y-0 "
            viewBox="0 0 971 229" fill="currentColor">
            <path
              d="m108 92-9 34-1 4-6-4H0v-1q14-5 14-13V13Q14 5 0 3V2h96l6 29h-1q-6-10-11-14-4-5-11-8-7-4-17-4H32v58h25q14 0 20-4 6-3 9-14v39q-3-11-9-14-6-4-20-4H32v58h34l13-2 10-6 9-10zM264 2h33v1q-6 1-10 6t-9 15l-42 97-17 11 1-3-46-113-9-14h45v1l-8 2q-3 0-5 3-3 3-2 6-1 4 2 10l37 92 40-92 3-10q0-3-2-5l-4-4-7-2zm197 90 1 1-9 34-1 4-6-4h-93v-1q14-5 14-13V13q0-8-14-10V2h97l6 29h-1l-11-14q-4-5-12-8-6-4-17-4h-30v58h25q15 0 20-4 6-3 9-14v39q-3-11-9-14-5-4-20-4h-25v58h34l13-2q6-2 11-6l8-10zM613 2h31v1l-5 2-4 3q-3 3-3 8l-1 14v102L537 21v74q0 17 3 24 4 6 10 7v1h-31v-1l6-1 4-4 3-8 1-14V16L517 2h30q3 7 7 10l73 86V34q0-17-4-23-3-7-10-8zm206 0-11 37h-1q3-34-26-34h-14v110q0 6 5 8l13 3v1h-53v-1l13-3q4-3 4-8V5h-4q-13 0-22 4-8 3-13 10l-10 20h-1l6-37zm111 54q41 9 41 36 0 17-13 27-12 10-35 10-30 0-47-16l15-25q-2 16 10 28 13 10 30 10 14 0 20-7t6-18l-2-11q-2-5-8-8l-11-5-14-4q-24-5-33-16-10-11-10-23 0-15 13-25 12-9 33-9 27 0 44 16l-16 25q1-17-9-28-10-9-27-10-12 0-17 6-6 7-6 16 0 7 3 13 3 5 8 9a68 68 0 0 0 25 9M494 211a2 2 0 0 1-4 0q0-3 2-2zm40 4q-1-3-5-5 4-2 4-7l-2-6q-3-3-9-3h-15v33h21q7-2 7-9zm-22-17h11l4 2 1 1 1 3-1 2q-1 3-6 3h-10zm17 24-5 1h-12v-10h11l6 1 1 4zm-57-23q-5-5-12-5a16 16 0 0 0-17 17 16 16 0 0 0 17 16q8 0 12-4 5-6 5-12 0-7-5-12m-3 21q-3 3-9 3t-9-3l-3-9q0-6 3-9 3-4 9-4t9 4q4 3 4 9 0 5-4 9m-122-20q-6-5-12-5a16 16 0 0 0-17 17 16 16 0 0 0 17 16q6 0 12-5 4-5 4-11 0-8-4-12m-3 20q-4 4-9 4a12 12 0 0 1-13-12q0-6 4-9 3-4 9-4a12 12 0 0 1 12 13q0 5-3 8m59-5 2-1q6-2 6-8 0-5-3-8l-8-2h-16v32h4v-12h11l7 12h5zm-15-3v-12h11l5 1q3 2 2 5v3q-3 3-7 3zm179-16h4v32h-4zm55 0h-5l-14 32h4l4-9h16l4 9h4zm-9 19 6-14 6 14zm54-19h4l19 26v-26h5v32h-5l-19-26v26h-4zm65 27q-4-5-4-11 0-7 4-12t11-5q6 0 10 3l4 4-4 2a10 10 0 0 0-9-5l-5 1-4 3q-3 3-3 9 0 5 3 8 3 4 9 4a10 10 0 0 0 10-6l4 1-5 6q-4 3-10 3-7 0-11-5m85-23q-4-5-12-5a16 16 0 0 0-16 17 16 16 0 0 0 16 16q8 0 12-5 5-5 5-11 0-7-5-12m-3 20q-3 4-9 4a12 12 0 0 1-12-12q0-6 3-9 3-4 9-4a12 12 0 0 1 12 13q0 5-3 8m-588-9 10-15h5l-13 20v12h-4v-12l-13-20h5zm-49 4-5-5q3-2 3-7 1-3-2-6t-8-3h-16v33h22q6-2 6-9zm-23-17h11l5 2 1 1v3l-1 2q-1 3-5 3h-11zm17 24-5 1h-12v-10h11l6 1 2 4z" />
          </svg>
          <p
            class="mt-8 text-center text-lg transition-transform max-xl:hidden xl:translate-y-20 xl:group-hover:translate-y-0 delay-75">
            <?php the_field( 'description_events' ); ?></p>
          <span class="flex size-16 items-center justify-center self-end rounded-full border border-current xl:hidden">
            <svg class="w-6" viewBox="0 0 960 538" fill="currentColor">
              <path d="m691 538 269-269-15-15L691 0l-30 30 218 218H0v42h879L661 508z" />
            </svg>
          </span>
        </div>
      </a>
    </div>
  </div>
</main>

<?php
get_footer();