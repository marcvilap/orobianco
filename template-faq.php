<?php
/**
 * Template Name: FAQ
 *
 * @package WordPress
 */

get_header();
?>
<main class="overflow-clip">
  <div class="container pb-20 pt-8 lg:pb-24 lg:pt-14 2xl:pb-44">
    <div class="reveal-group group">
      <div class="reveal-group mb-20 lg:mb-28">
        <h1 class="reveal-fade-up mb-8 text-center text-4xl font-semibold uppercase xl:text-5xl"><?php the_title(); ?>
        </h1>
        <p class="reveal-fade-up reveal-delay-100 mx-auto max-w-2xl text-center text-lg text-neutral-500">
          <?php the_field( 'description' ); ?></p>
      </div>
      <nav
        class="reveal-fade-up reveal-delay-200 mb-16 flex justify-center gap-8 text-center text-lg uppercase tracking-widest lg:text-2xl">
        <label
          class="cursor-pointer text-neutral-500 decoration-1 underline-offset-8 transition-colors hover:text-neutral-800 group-has-[#tab1:checked]:text-current group-has-[#tab1:checked]:underline"
          for="tab1">Robianco</label>
        <label
          class="cursor-pointer text-neutral-500 decoration-1 underline-offset-8 transition-colors hover:text-neutral-800 group-has-[#tab2:checked]:text-current group-has-[#tab2:checked]:underline"
          for="tab2">Rooftop</label>
      </nav>
      <div class="reveal-fade-up reveal-delay-300 mx-auto xl:max-w-5xl">
        <input class="peer hidden" type="radio" name="tabs" id="tab1" checked="" />
        <div class="hidden border-t border-current peer-checked:block">
          <?php foreach ( get_field( 'tab1') as $tab  ) : ?>
          <details class="group border-b border-current open:bg-neutral-50">
            <summary
              class="flex cursor-pointer items-baseline justify-between gap-4 px-4 py-4 text-lg uppercase lg:items-center lg:text-xl xl:text-2xl">
              <span><?php echo esc_html( $tab['title'] ); ?></span>
              <svg class="ml-auto w-5 shrink-0 transition-transform group-open:rotate-180" viewBox="0 0 968 525"
                fill="currentColor">
                <path d="M0 41 41 0l443 443L927 0l41 41-484 484z"></path>
              </svg>
            </summary>
            <div class="prose px-4 pb-8 pt-4"><?php echo $tab['description']; ?></div>
          </details>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="reveal-fade-up reveal-delay-300 mx-auto xl:max-w-5xl">
        <input class="peer hidden" type="radio" name="tabs" id="tab2" />
        <div class="hidden border-t border-current peer-checked:block">
          <?php foreach ( get_field( 'tab2') as $tab  ) : ?>
          <details class="group border-b border-current open:bg-neutral-50">
            <summary
              class="flex cursor-pointer items-baseline justify-between gap-4 px-4 py-4 text-lg uppercase lg:items-center lg:text-xl xl:text-2xl">
              <span><?php echo esc_html( $tab['title'] ); ?></span>
              <svg class="ml-auto w-5 shrink-0 transition-transform group-open:rotate-180" viewBox="0 0 968 525"
                fill="currentColor">
                <path d="M0 41 41 0l443 443L927 0l41 41-484 484z"></path>
              </svg>
            </summary>
            <div class="prose px-4 pb-8 pt-4"><?php echo $tab['description']; ?></div>
          </details>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();