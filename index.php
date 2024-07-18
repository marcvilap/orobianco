<?php
/**
 * Page
 *
 * @package WordPress
 */

get_header();
?>
<main class="overflow-clip">
	<div class="container pb-20 pt-8 lg:pb-24 lg:pt-14 2xl:pb-44">
		<h1 class="mb-8 text-center text-4xl font-semibold uppercase lg:mb-16 xl:text-5xl"><?php the_title(); ?></h1>
		<div class="prose mx-auto xl:max-w-5xl">
			<?php
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
			?>
		</div>
	</div>
</main>
<?php
get_footer();
