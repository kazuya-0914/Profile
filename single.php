<?php get_header(); ?>

<main class="wrapper">
  <article>
    <div id="mainvisual">
      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
    </div>

    <h1 class="title"><?php the_title(); ?></h1>

    <div class="content">
      <?php the_content(); ?>
    </div>
  </article>

  <a href="<?php echo esc_url(home_url()); ?>">トップに戻る</a>
</main>

<?php get_footer(); ?>