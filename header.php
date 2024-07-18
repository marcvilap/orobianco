<?php
/**
 * Header
 *
 * @package WordPress
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-T42RGHXB');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T42RGHXB" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php wp_body_open(); ?>

  <header
    class="sticky top-0 z-20 bg-white/90 backdrop-blur transition-all group-[-open-menu]:bg-transparent group-[-open-menu]:backdrop-blur-0">
    <div class="container flex h-20 items-center gap-4">
      <a class="mr-auto" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <svg class="w-20 md:hidden" viewBox="0 0 680 320" fill="currentColor">
          <path
            d="M680 320H0V0h680zm-226-66h95q21 0 38-10c25-13 33-47 15-69q-8-10-21-19l10-12q6-6 8-15c11-32-13-65-48-66l-90-1q-8 0-7 7zm-289 2c56-1 97-44 96-101 0-55-43-96-99-96-56 1-96 44-95 101 0 55 43 96 98 96m188-103q-1-12-12-13-12 1-13 12 1 12 13 13 11-1 12-12m210 75c13 0 22-11 23-22q3-22-16-31-11-3-23-4l-62-1-5 1v60zm-11-82q18-3 23-20c5-22-7-39-30-40h-65v60zm-443 62c26 29 72 32 103 6 27-22 30-57 18-89a70 70 0 0 0-77-41q-44 7-57 48l-5 27q1 29 17 49" />
        </svg>
        <svg class="w-56 max-md:hidden" viewBox="0 0 3001 320" fill="currentColor">
          <path
            d="M1359 320H669V0h690zM1175 64l-39-1v1q-7-1-7 6l1 144v41l4 1h23l69-1q21 0 39-9c25-14 32-48 15-70l-14-13-7-6 3-3a65 65 0 0 0 15-23c10-33-14-66-50-67zm-148 90q-1-12-12-13-12 1-13 13 1 11 13 12 11-1 12-12m-93 1c0-55-44-96-100-96-57 1-98 44-97 101 1 55 44 96 99 96 58-1 99-44 98-101m1659 42a62 62 0 0 1-55 34c-34 2-62-17-71-48q-5-20-2-40 4-38 39-53 38-17 72 7l11 11 5 5 22-10-1-1-3-5a98 98 0 0 0-122-28 88 88 0 0 0-48 68q-8 43 15 79c37 55 118 50 153 3l7-10 3-5-11-5-12-6v1zM0 157c0-56 42-98 99-98s99 42 99 99c0 56-43 98-99 98-57 0-99-42-99-99m166 32 6-27c1-29-8-53-35-68a75 75 0 0 0-77 0 67 67 0 0 0-35 59q3 70 67 78c32 2 62-12 74-42m348-13q42-16 39-60c-4-31-28-52-59-53l-69-1h-31l-1 1v190h25v-71h56q8 0 12 6l40 65 20 1h7l-26-44-19-32 3-2zm-35-18h-60V87h2l4-1h12l61 2q34 11 28 44-6 20-28 24zm1735 54 3 4V63h26v191h-26q-4-1-6-6l-79-106-15-20-16-22v154h-25V63h25q4 1 7 6l63 85 14 19 4 6 3 3v1h1l18 25zm687-153c-57 0-99 42-99 98 0 57 42 99 99 99 56 0 99-42 99-98 0-57-42-99-99-99m2 172c-47-1-75-28-75-74 0-44 30-73 74-73 43 0 73 31 73 76 0 40-33 72-72 71m-1062-90 13 31 32 76 1 1v1l2 4h-26l-4-6-18-42q-3-7-10-7h-79q-7 0-9 7l-18 42q-3 7-10 6h-21l10-22 12-28 57-133c4-9 4-9 13-9h13q9 0 11 7zm-68-5-1 1-16 39h71l-35-84zm-264 118h-24V63h24zm-246-47q3-21-16-30-11-5-23-5h-68v60h26l58-2q21-3 23-23m-361-82c13 32 9 67-18 89a78 78 0 0 1-105-6 75 75 0 0 1-18-49l2-8 4-19q13-41 57-48c33-5 67 12 78 41m327 22q18-2 23-20c6-22-7-39-30-39h-66v59z" />
        </svg>
      </a>
      <ul class="font-semibold uppercase max-md:hidden">
        <li class="group relative">
          <span
            class="button border-transparent group-hover:border-neutral-500 group-hover:bg-neutral-500 group-hover:text-white">
            <span><?php echo pll_current_language(); ?></span>
            <svg class="ml-2 w-2 transition-transform duration-300 transform group-hover:rotate-90"
              viewBox="0 0 558 960" fill="currentColor">
              <path d="M78 960 0 882l402-402L0 78 78 0l480 480z" />
            </svg>
          </span>
          <ul
            class="hover-links-underline invisible absolute right-0 top-full grid min-w-full gap-2 whitespace-nowrap bg-neutral-800 p-4 text-center text-white opacity-0 transition-all group-hover:visible group-hover:opacity-100">
            <?php pll_the_languages( [ 'display_names_as' => 'slug' ] ); ?>
          </ul>
        </li>
      </ul>

      <ul class="font-semibold uppercase">
        <li class="group relative">
          <span
            class="button group-hover:border-neutral-500 group-hover:bg-neutral-500 group-hover:text-white"><?php esc_html_e( 'Reservas', 'wp' ); ?></span>
          <ul
            class="invisible absolute right-0 top-full grid min-w-full gap-2 whitespace-nowrap bg-neutral-800 p-4 text-right text-white opacity-0 transition-all group-hover:visible group-hover:opacity-100">
            <li><a class="hover:underline" target="_blank"
                href="https://widget.thefork.com/es/54d00a58-3687-4339-ae54-36bb01c81a55"><?php esc_html_e( 'Orobianco Ristorante', 'wp' ); ?></a>
            </li>
            <li><a class="hover:underline" target="_blank"
                href="https://widget.thefork.com/es/7945172c-93ca-4e31-b50a-b21b5c73667b"><?php esc_html_e( 'O·B Rooftop', 'wp' ); ?></a>
            </li>
          </ul>
        </li>
      </ul>
      <button
        class="toggle-menu group relative ml-4 inline-flex size-10 items-center transition-colors hover:text-neutral-500">
        <span
          class="absolute w-full -translate-y-3 border-t-2 border-current transition-transform group-[-open-menu]:translate-y-0 group-[-open-menu]:rotate-45"></span>
        <span class="absolute w-full border-t-2 border-current transition-opacity group-[-open-menu]:opacity-0"></span>
        <span
          class="absolute w-full translate-y-3 border-t-2 border-current transition-transform group-[-open-menu]:translate-y-0 group-[-open-menu]:-rotate-45"></span>
      </button>
    </div>
  </header>