<?php
/**
 * Template Name: Restaurante
 *
 * @package WordPress
 */

$team    = get_field( 'team' );
$gallery = get_field( 'gallery' );
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

      <div class="md:mr-[10rem] lg:mx-20">
        <h1 class="reveal-fade-up mb-8 text-4xl font-semibold uppercase xl:text-5xl"><?php the_field( 'title1' ); ?>
        </h1>
        <div class="reveal-fade-up reveal-delay-500 prose"><?php the_field( 'content1' ); ?></div>
      </div>
      <div class="md:grid md:grid-cols-2 md:gap-8 md:ml-[10rem] lg:ml-0 lg:order-2">
        <div class="reveal-fade-up reveal-delay-1000 parallax-down relative max-md:pr-32">
          <?php echo wp_get_attachment_image( get_field( 'image1' ), 'medium_large', false, array( 'class' => 'mx-auto' ) ); ?>
        </div>
        <div class="reveal-fade-up reveal-delay-1500 parallax-up max-md:-mt-32 max-md:pl-32 md:pt-20 lg:pt-32">
          <?php echo wp_get_attachment_image( get_field( 'image2' ), 'medium_large', false, array( 'class' => 'mx-auto' ) ); ?>
        </div>
      </div>
    </div>
    <button
      class="parallax-zoom xl:cursor-play relative mb-20 block bg-neutral-800 max-md:-mx-4 lg:mb-32 lg:w-full xl:mb-44"
      popovertarget="video">
      <?php echo wp_get_attachment_image(get_field('image_video'), 'full', false, array('class' => 'aspect-square object-cover opacity-60 md:aspect-video xl:aspect-[2/1]')); ?>
      <svg class="absolute left-1/2 top-1/2 z-10 -ml-16 -mt-16 w-32 xl:hidden" viewBox="0 0 128 128" width="128"
        height="128" fill="#fff">
        <path
          d="M64 0c35.32 0 64 28.68 64 64s-28.68 64-64 64S0 99.32 0 64 28.68 0 64 0m0 8.49A55.54 55.54 0 0 0 8.49 64 55.54 55.54 0 0 0 64 119.51 55.54 55.54 0 0 0 119.51 64 55.54 55.54 0 0 0 64 8.49m0 1A54.54 54.54 0 0 1 118.51 64 54.54 54.54 0 0 1 64 118.51 54.54 54.54 0 0 1 9.49 64 54.54 54.54 0 0 1 64 9.49m12.94 51.33h1.47v-3.86l3.95-5.94h-1.63l-3 4.61-3.02-4.6H73l3.93 5.9zm-9.82 16h7.28v-1.28h-5.81V72.5h3.77v-1.25h-3.77V68.3h5.75v-1.29h-7.22zm12.6.16a5 5 0 0 0 3.63-1.47 5 5 0 0 0 1.48-3.59 5 5 0 0 0-5.1-5.05 5 5 0 0 0-3.62 1.46 5 5 0 0 0-1.48 3.6 5 5 0 0 0 5.1 5.05m.01-1.36a3.6 3.6 0 0 1-2.56-1.06 4 4 0 0 1-.77-1.18 4 4 0 0 1-.27-1.46 3.8 3.8 0 0 1 1.03-2.63 3.5 3.5 0 0 1 2.57-1.07 3.55 3.55 0 0 1 3.33 2.24q.27.67.27 1.46a4 4 0 0 1-1.04 2.64 3.5 3.5 0 0 1-2.56 1.06M57.1 60.82h7.11v-1.3h-5.64v-8.5H57.1zm8.08 0h1.53l1.15-2.87h4.38l1.14 2.87h1.6l-4.02-9.8h-1.73zm3.16-4.08 1.72-4.31 1.7 4.3zM47.17 76.82h1.73l4.06-9.8h-1.51l-3.38 8.35-3.32-8.35h-1.58zm9.68 0h3.46q1.1 0 2.05-.36A5 5 0 0 0 64 75.43a4.6 4.6 0 0 0 1.47-3.5 4.8 4.8 0 0 0-1.48-3.5 5 5 0 0 0-1.63-1.04 6 6 0 0 0-2.05-.37h-3.46zm1.47-1.31v-7.17h2a3.7 3.7 0 0 1 2.6 1.03 3.5 3.5 0 0 1 1.04 2.56 3.6 3.6 0 0 1-1.04 2.55 3.5 3.5 0 0 1-2.6 1.03zM48 60.82h1.47v-3.94h3.05q.95 0 1.68-.38.72-.37 1.13-1.03.4-.65.4-1.52t-.4-1.53a3 3 0 0 0-1.12-1.03 4 4 0 0 0-1.69-.37H48zm1.47-5.2v-3.3h2.9a2 2 0 0 1 1.38.44q.5.45.5 1.2 0 .77-.5 1.22-.51.45-1.37.45zm4.15 21.2h1.47v-9.8H53.6z">
        </path>
      </svg>
    </button>
    <div class="popup peer w-full max-w-5xl p-0" id="video" popover="">
      <iframe id="youtube-video" class="aspect-video w-full"
        src="https://www.youtube.com/embed/<?php the_field('youtube_id'); ?>"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
    </div>
    <button
      class="invisible fixed inset-0 z-20 bg-neutral-800/95 opacity-0 transition-all peer-[:popover-open]:visible peer-[:popover-open]:opacity-100"
      popovertarget="video">
      <svg class="fixed right-8 top-8 w-8 cursor-pointer text-white" viewBox="0 0 960 960" fill="currentColor">
        <path d="M431 487 13 906l45 45 418-419 426 428 45-45-426-428L960 45 915 0 476 441 45 9 0 54z"></path>
      </svg>
    </button>

    <div class="mb-20 grid items-center gap-x-8 gap-y-20 lg:mb-32 lg:grid-cols-2 xl:gap-24">
      <div class="lg:order-2 lg:mx-20">
        <div class="mb-10 grid grid-cols-4 gap-4 text-center text-neutral-500 md:gap-8">
          <a class="transition will-change-transform hover:-translate-y-2 hover:text-neutral-800" target="_blank"
            href="https://guide.michelin.com/es/es/comunidad-valenciana/calp/restaurante/orobianco">
            <svg class="mx-auto mb-4 size-16" viewBox="0 0 963 1040" fill="#d3072b">
              <path
                d="M477 0h8q41 1 78 18c42 21 73 60 86 104q7 30 7 61v45q20-18 43-31c32-19 71-26 108-24q34 3 64 20a196 196 0 0 1 92 157v5q-1 32-14 60-19 37-51 62-33 25-73 43 39 16 71 39 38 27 56 71 10 25 11 52v8q0 34-13 66-19 44-56 75-22 20-50 29-32 10-65 7-40-6-75-25-25-13-48-29v49q-1 53-26 98-21 37-57 57-40 22-87 22h-9q-47 0-89-24a168 168 0 0 1-80-129q-2-36 1-73-42 34-95 49-57 14-112-9-46-25-75-69-26-44-27-93v-6q1-33 15-63 21-39 57-64 31-23 66-38-27-12-53-27-42-25-66-66-18-32-19-69v-8q1-34 15-66 19-47 60-78 26-19 58-28 39-10 77 0 54 17 99 50l-1-21-1-16q-1-44 13-85 18-49 62-79 44-26 95-26zm-31 59q-32 8-54 31-9 12-16 26-16 37-13 77 2 35 11 68 17 66 49 128l-28 14q-31-46-70-88-37-41-85-68-39-22-84-18-34 4-58 29-30 29-40 68-8 39 9 75 18 31 49 49 35 20 74 31 72 19 146 24v30l-65 8q-65 8-125 32-30 13-55 35-20 17-29 42-11 33-3 68c7 30 27 56 52 74q23 16 52 18 36 2 68-14 48-23 83-62 46-46 81-100l27 15q-36 72-53 150-8 35-6 70 2 37 22 67 10 17 27 28c27 17 61 20 92 16q28-2 52-18 17-11 26-29 15-26 17-54 5-58-13-114-18-60-46-116l27-15q46 70 109 126 36 32 82 45 31 9 62 2c28-8 50-29 65-52 19-28 27-64 18-96q-10-36-40-59-41-29-90-42-72-20-148-25v-30q42-4 84-11 62-9 119-35 31-14 53-39 19-21 24-47 5-29-3-56-9-27-28-48-17-20-39-32-21-10-44-9-35 1-67 18-46 25-81 63-42 44-76 94l-27-15q17-34 30-69 24-60 29-124 2-36-7-70-9-28-31-47-26-18-59-22-28-3-57 3z">
              </path>
            </svg>
            <p>Michelin 2024</p>
          </a>
          <a class="transition will-change-transform hover:-translate-y-2 hover:text-neutral-800" target="_blank"
            href="https://www.guiarepsol.com/es/fichas/restaurante/orobianco-9226/">
            <svg class="mx-auto mb-4 size-16" viewBox="0 0 971 1024" fill="#ff8300">
              <path
                d="M438 3c46-4 94-6 140 5 63 14 127 23 188 47 22 11 46 20 64 38 30 29 61 58 82 95 22 45 46 90 51 140q7 46 8 91c-1 60 4 120-12 178-8 28-12 58-23 85-15 36-37 67-56 101q-42 73-99 135-32 31-72 52-65 27-132 48c-33 6-69 10-102-2q-63-17-123-41c-42-21-88-40-120-76-44-38-78-88-114-133-26-33-54-63-73-100-10-23-24-43-32-66-16-31-14-66-11-99q12-76 31-151c6-27 23-49 36-73 30-56 74-103 111-155 25-35 62-59 100-77q77-29 157-42z">
              </path>
            </svg>
            <p>1 Sol Repsol 2024</p>
          </a>
          <a class="transition will-change-transform hover:-translate-y-2 hover:text-neutral-800" target="_blank"
            href="https://lexquisit.comunitatvalenciana.com/lexquisit-mediterrani">
            <svg class="mx-auto mb-4 size-16" viewBox="0 0 984 961">
              <path fill="#201e1f"
                d="m453 1 25-1 2 45 2 70-24 1zm71 22 33 6-16 90 25 5 16-90 9 1 26 5 3-23-56-11-37-6zM342 81c16 7 34 0 51 5 6 3 7 13 1 17-13 10-31 6-46 0l-10 21c24 11 55 11 75-7 16-15 12-47-10-54-17-7-36 1-52-7q-2-6 0-12l10-7q15-2 32 4l7-22q-15-6-33-5c-13 2-28 7-36 18-12 15-6 41 11 49m-42 84 22-12-55-101-22 13zm-92-19q12 11 21 26c0 6 2 12-2 17q-7 13-21 15-16-1-25-15-21-21-40-44l-19 17 45 50q12 12 30 17c25 3 47-16 56-38 6-17-1-34-12-47l-46-50-18 18zm494-8c7-4 9-14 3-19-3-6-10-4-15-4q-7 4-6 13c-1 9 11 14 18 10m108 40q-9 10-21 18c-11 6-20 15-32 19l-7-7h-6q11 19 24 36c10 0-3-13 3-16q16-13 33-24c12-9 30-3 37 11q2 9-3 16-14 14-31 24c-5 3-10 8-16 7l-11-7q-1 6 2 10l20 28 4-1c-1-5-6-12 0-16q15-13 33-24c12-8 33 0 36 15 2 10-6 17-13 22q-16 13-32 22c-6 3-10-2-13-5l-6 1 24 35 6-3-5-7 4-8c14-12 31-20 44-33 6-6 4-15 4-22-7-14-20-26-36-27q5-11 1-24c-6-14-21-24-36-25q6-4 11-12l-18-16-5 2q4 6 4 11zM46 296a59 59 0 0 0 76 54c20-6 36-24 42-45l2-22 15-6-8-22-15 5a60 60 0 0 0-67-28c-27 8-46 36-44 64zm57-40q19 0 31 13-3 4-7 4l-16 6 9 23 23-10c-2 12-8 25-19 30-19 10-44 0-52-19-8-21 8-47 31-47m754 165q5 5 12 5v-5q-17-8-17-26c-1-16 14-26 28-30l8-1 14 56q18-4 26-20c5-17-3-36-17-46-21-14-54-7-66 17-8 16-2 38 12 50m56-52q10 9 7 22-4 8-15 10l-10-37q10-1 18 5M12 394l32 28-40 19-4 29 61-30 52 47 4-28-35-31 42-20 4-29-63 31-50-46q-3 15-3 29zm842 108q3 12 13 20l-15-1 1 26h5q-1-12 11-12l115 3-4-32-5-1c-1 6-1 14-7 16h-39q7-9 10-20c2-16-4-33-18-41-15-9-34-9-48-1-15 8-23 27-19 43m63-27q13 5 16 19c0 13-10 26-24 26q-17 1-32-3c-13-2-19-17-16-29q4-11 16-14 21-6 40 1m-815 94-23 3-9-52-21 3 8 53-22 4-10-53q1-4-2-7l-21 4 15 85 28-5 85-15-15-85-22 3 10 62zm734 39 11-11q7-2 13 1 31 7 61 17l3-32-6-1-3 10q-12 3-24-2-20-4-39-12v-15l-5-1q-8 22-11 46m-571 17a313 313 0 0 0 309 79q76-22 132-79l-38-37a257 257 0 0 1-365 0zm681-6c2 6 10 6 15 4l3-5v-7q-5-8-15-6c-2 4-7 9-3 14m-131 55 5-2q-3-9 1-19l5-2h3q19 7 36 16l20 9-9 20 7 2 8-18 21 8-6-12q-5-9-5-20l-5-2-4 9-43-21q-8-5-18-6c-9 0-15 9-18 16q-4 11 2 22M34 658l10 25 25-10-4-11q13-2 21 9l8-4q-3-13-16-19-10-3-20 1zm125 44 7 12-75 50 14 21 95-63-46-69-19 13zm605 49 7-1q-1-12 3-23 6-10 16-14 22-1 37 16l-30 39q-4 3-3 7c8 6 19 11 29 7 17-6 28-25 27-43-3-21-22-39-43-41-17-1-33 11-40 26q-4 14-3 27m69-17q6 7 7 16c1 13-14 26-25 19-5-1-5-7-2-10zm-110 50c14 15 31 34 26 57q-10 2-18 8v10q6 3 12 2c13-7 14-24 13-37l14 15 17-22-3-4c-4 1-7 5-11 4q-7-4-11-10l-21-27q-5-5-6-11l7-9-3-4-34 26c5 8 13-4 18 2m-86 44 13-3q13 19 18 43 3 12-5 22c-6 2-13 0-17 5-6 5 1 15 8 13 15-3 20-20 20-33l10 17 23-17c-1-8-9-2-14-2q-6-7-10-15l-17-38 5-7c3-1 7-7 1-7l-35 17zm-387 14c6 0 14-2 16-8 4-10-8-21-17-16-10 4-8 19 1 24m109-2 2 12-20 65 21 2 10 1 1-5c-4-2-11-3-11-9l7-28q3-14 10-26c3-5 10-3 15-3l2-5-39-12q-6-2-7 4zm194 25q-1-10-9-14c-9-2-22 3-23 14 5-1 10-7 14-3q5 7 7 15l8 39c2 7 8 15 16 15q22 2 38-10 9-9 4-19h-11l-6 17c-4 6-14 6-20 3q-8-8-8-20c12-10 27-18 37-31 6-8 3-21-5-27q-13-6-27 2-10 7-15 19m35-5v10q-11 15-27 25c-3-12-6-28 4-38 7-7 18-5 23 3m-178-4q7 0 10 5 2 14 0 29c0 13-5 27 2 39 7 8 20 10 30 9q15-3 25-13l1 16 25-4 1-4-12-4 2-58 4-7c5-1 11 0 12-6l-20-2-23-1v4l11 4q1 22-1 45c-2 16-20 28-35 21-9-6-9-19-8-28 2-13 0-25 4-37 2-7 12-3 13-10l-42-3zm-80 98c2 6 12 8 16 3 7-7 0-19-9-16-6 1-9 8-7 13">
              </path>
              <path fill="#0081c5"
                d="M362 254h57q-18 33-23 69-4 33 6 65c11 34 34 62 41 97 6 32-7 64-24 91h-56c15-25 28-54 24-84-2-22-12-41-21-60q-21-33-26-73-4-27 3-54 7-26 20-51z">
              </path>
              <path fill="#d44825"
                d="M457 254h56c-8 19-18 39-21 60q-8 46 11 89c12 29 30 55 35 87 4 30-8 60-24 86h-56c15-26 28-56 23-86-2-21-12-41-21-59-16-29-29-61-27-94q3-44 24-83">
              </path>
              <path fill="#ffc353"
                d="M552 254h56c-16 32-27 69-22 105 2 30 17 57 30 83q15 27 17 56c2 28-10 54-24 77h-56c11-20 22-41 24-65 2-28-9-53-21-77-16-28-28-58-28-90-1-31 10-61 24-89">
              </path>
            </svg>
            <p>L'Exquisit Mediterrani</p>
          </a>
          <a class="transition will-change-transform hover:-translate-y-2 hover:text-neutral-800" target="_blank"
            href="https://www.50topitaly.it/it/referenza/orobianco-3">
            <svg class="mx-auto mb-4 size-16" viewBox="0 0 969 831">
              <path fill="#008f40" d="M607 546h120v17H607z"></path>
              <path fill="#fff" d="M728 546h120v17H728z"></path>
              <path fill="#cd2b39" d="M848 546h120l1 16h-89l-32 1z"></path>
              <path fill="#0f1e4a"
                d="M37 23Q96 2 159 0q52-2 100 15c32 12 63 27 97 31 28 3 57 5 82-7 13-6 25-18 27-33h5q0 47-17 91-18 45-58 74c-33 21-74 27-113 24-36-4-69-21-104-26-20-3-42-5-60 4-27 14-44 41-58 67q-26 58-40 120l-9 52-4 1Q38 219 37 23m741 299h19v72h10v-72h19v-8h-48zm54 25q-2 11 2 22c6 16 24 27 41 26 21 0 39-18 40-39q1-23-18-36-17-11-36-6c-15 4-27 18-29 33m74 6c1 20-20 38-39 33a33 33 0 0 1 0-65c19-4 39 12 39 32m21 41h9v-36q13 3 25-4c12-9 10-30-3-37-10-5-21-3-31-3zm27-70c8 5 8 17 2 23q-9 5-20 3v-28q9-1 18 2M679 499l9-22h35l9 22h10q-19-41-36-84l-38 84zm27-62 13 31h-27zm-97 62h9v-80h-8zm18-71h20v71h9v-71h20v-9h-48zm123 71h31v-8h-22v-72h-9zm51-34v34h9v-35l26-45h-10l-21 36-20-35-11-1z">
              </path>
              <path fill="#af986e"
                d="M700 312q16-5 30 5 14 13 15 32 2 21-11 38a31 31 0 0 1-47-2 56 56 0 0 1-9-45c3-12 10-24 22-28m7 18q-7 5-8 14-3 14 2 27 3 6 10 7c6 1 10-6 11-11q5-16-2-32-4-8-13-5m-87-15-7 42q11-5 23-2 10 4 9 14-3 10-14 10-12-2-21-9l-3 20c15 7 34 10 48 1 17-10 16-37 0-47q-11-6-23-4l1-9h29v-17h-42zM38 456C2 512-9 583 8 647c24 88 100 162 190 181l4-3c-27-4-47-28-57-52-18-41-21-87-23-131q-2-53-1-106 2-51 13-103c6-25 15-51 35-69q27-21 62-20c24 0 48-3 70 6q30 13 44 43 18 41 22 85a1047 1047 0 0 1-7 257c-6 27-15 54-36 73a88 88 0 0 1-62 21c-20 0-40 2-60-3l1 3 8 1 39 1 34-2c55-7 105-37 142-77a244 244 0 0 0-14-347c-42-39-100-65-159-63q-21-1-42 1c-72 8-136 53-173 113">
              </path>
            </svg>
            <p>50 Top Italy</p>
          </a>
        </div>
        <div class="md:mr-[10rem] lg:mr-0">
          <h2 class="mb-8 text-4xl font-semibold uppercase xl:text-5xl"><?php the_field( 'title2' ); ?></h2>
          <div class="prose"><?php the_field( 'content2' ); ?></div>
        </div>
      </div>
      <div class="md:ml-[10rem] lg:ml-0 reveal-group">
        <?php echo wp_get_attachment_image( get_field( 'image3' ), 'medium_large', false, array( 'class' => 'parallax-down relative  w-2/5 object-cover z-10' ) ); ?>
        <?php echo wp_get_attachment_image( get_field( 'image4' ), 'medium_large', false, array( 'class' => '-my-[20%] mx-auto aspect-[4/5] w-3/4 object-cover relative reveal-zoom-in z-1' ) ); ?>
        <?php echo wp_get_attachment_image( get_field( 'image5' ), 'medium_large', false, array( 'class' => 'parallax-up ml-auto aspect-video w-3/5 object-cover relative z-10' ) ); ?>
      </div>
    </div>
    <div class="mb-12 xl:mb-32 md:mr-[10rem] lg:mr-[50%]">
      <h2 class="mb-8 text-4xl font-semibold uppercase xl:text-5xl"><?php the_field( 'title3' ); ?></h2>
      <div class="prose"><?php the_field( 'content3' ); ?></div>
    </div>
    <div class="mx-auto mb-20 grid max-w-5xl gap-y-8 md:gap-0 lg:mb-32">
      <?php foreach ( get_field( 'team' ) as $key => $item ) : ?>
      <article
        class="group relative w-64 odd:mr-auto odd:pr-8 even:ml-auto even:pl-8 md:w-1/2 xl:odd:pr-24 xl:even:pl-24 md:[&:nth-child(2)]:-mt-32 lg:[&:nth-child(2)]:-mt-64 md:[&:nth-child(3)]:mt-24 md:[&:nth-child(4)]:-mt-32 lg:[&:nth-child(4)]:-mt-64">
        <?php echo wp_get_attachment_image( $item['image'], 'medium_large', false, array( 'class' => 'mx-auto ' . ( $key % 2 == 0 ? 'parallax-down' : 'parallax-even' ) ) ); ?>
        <div
          class="mt-4 md:absolute md:group-odd:left-full md:group-odd:top-6 md:group-even:bottom-6 md:group-even:right-full xl:group-odd:-ml-16 xl:group-even:-mr-16">
          <h3 class="text-2xl font-semibold uppercase md:whitespace-nowrap"><?php echo esc_html( $item['name'] ); ?>
          </h3>
          <p class="text-neutral-500"><?php echo esc_html( $item['job'] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="mb-20 grid grid-cols-2 gap-4 md:grid-cols-12 lg:mb-32">
      <div class="col-span-2 max-md:aspect-video md:col-span-12 lg:col-span-5">
        <?php echo wp_get_attachment_image( $gallery[0], 'medium_large', false, array( 'class' => 'parallax-zoom size-auto md:size-full object-cover' ) ); ?>
      </div>
      <div class="aspect-square max-md:aspect-[2/3] md:col-span-7 lg:col-span-4">
        <?php echo wp_get_attachment_image( $gallery[1], 'medium_large', false, array( 'class' => 'parallax-zoom size-full object-cover' ) ); ?>
      </div>
      <div class="max-md:aspect-[2/3] md:col-span-5 lg:col-span-3">
        <?php echo wp_get_attachment_image( $gallery[2], 'medium_large', false, array( 'class' => 'parallax-zoom size-full object-cover' ) ); ?>
      </div>
      <div class="col-span-2 md:max-md:order-2 md:max-md:aspect-[2/3] md:col-span-5 lg:col-span-3">
        <?php echo wp_get_attachment_image( $gallery[3], 'medium_large', false, array( 'class' => 'parallax-zoom md:size-full object-cover' ) ); ?>
      </div>
      <div class="col-span-2 md:aspect-square md:max-md:order-3 md:max-md:aspect-[2/3] md:col-span-7 lg:col-span-4">
        <?php echo wp_get_attachment_image( $gallery[4], 'medium_large', false, array( 'class' => 'parallax-zoom md:size-full object-cover' ) ); ?>
      </div>
      <div class="col-span-2 max-md:aspect-video md:col-span-12 lg:col-span-5">
        <?php echo wp_get_attachment_image( $gallery[5], 'medium_large', false, array( 'class' => 'parallax-zoom md:size-full object-cover' ) ); ?>
      </div>
    </div>

    <div class="grid items-center gap-x-8 gap-y-20 lg:grid-cols-2 xl:mt-44 xl:gap-24">
      <div class="md:mr-[20rem] lg:mx-20 ">
        <h2 class="mb-8 text-4xl font-semibold uppercase xl:text-5xl"><?php the_field( 'title4' ); ?></h2>
        <div class="prose"><?php the_field( 'content4' ); ?></div>

        <a class="group mt-8 inline-flex items-center uppercase transition-colors hover:text-neutral-500 xl:mt-20"
          <?php if ($button['blank']){echo "target='_blank'"; }?> href="<?php echo $letter; ?>">
          <span class="size-16 rounded-full border border-current"></span>
          <span class="relative -ml-11 flex w-6 items-center border-t border-current transition-all group-hover:w-10">
            <span class="absolute right-0 size-2 rotate-45 border-r border-t border-current"></span> </span>
          <span class="bg-white pl-4"><?php echo $button['button_name']; ?></span>
        </a>

      </div>
      <div class="md:ml-[10rem] lg:ml-0 reveal-group">
        <?php echo wp_get_attachment_image( get_field( 'image6' ), 'medium_large', false, array( 'class' => 'parallax-down relative ml-auto aspect-video w-3/5 object-cover z-10' ) ); ?>
        <?php echo wp_get_attachment_image( get_field( 'image7' ), 'medium_large', false, array( 'class' => '-my-[20%] mx-auto aspect-[4/5] w-3/4 object-cover reveal-zoom-in' ) ); ?>
        <?php echo wp_get_attachment_image( get_field( 'image8' ), 'medium_large', false, array( 'class' => 'parallax-up aspect-square w-2/5 object-cover relative z-10' ) ); ?>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();