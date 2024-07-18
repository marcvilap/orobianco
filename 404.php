<?php
/**
 * 404
 *
 * @package WordPress
 */

get_header();
$error = get_field('404','option');

?>
<main class="py-24">
  <div class="container">
    <div class="grid items-center gap-8 lg:grid-cols-2">
      <div class="text-center lg:text-left">
        <h1 class="mb-8 text-4xl font-semibold uppercase xl:text-5xl"><?php echo $error['title_404']; ?></h1>
        <?php echo $error['content_404']; ?>

        <a class="button" href="/">Ir a la home</a>
      </div>
      <div>
        <img src="<?php echo $error['img_404']; ?>" alt="" srcset="">
      </div>
    </div>
  </div>
</main>
<?php
get_footer();