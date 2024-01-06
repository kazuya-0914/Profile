<?php get_header(); ?>

<main>
  <div id="mainvisual">
    <img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual.jpg')); ?>" alt="テキストテキストテキスト">
  </div>

  <section id="about" class="wrapper">
    <h2 class="section-title">About</h2>
    <div class="content">
      <img src="<?php echo esc_url(get_theme_file_uri('img/about.jpg')); ?>" alt="テキストテキストテキスト">
      <div class="text">
        <h3 class="content-title">KAKERU MIYAICHI</h3>
        <p>
          テキストテキストテキストテキストテキストテキストテキスト<br>
          テキストテキストテキストテキストテキストテキストテキスト<br>
          テキストテキストテキストテキストテキストテキストテキスト
        </p>
      </div>
    </div>
  </section>

  <section id="bicycle" class="wrapper">
    <h2 class="section-title">Bicycle</h2>

      <?php
        $args = [
          'post_type' => 'post',
          'category_name' => 'news',
          'posts_per_page' => 3,
        ];
        $posts = get_posts($args);
      ?>
      <div class="bicycle-box">
        <ul>

        <?php foreach($posts as $post): ?>
          <?php setup_postdata($post); ?>
          <li>
            <a href="<?php the_permalink();?>">
              <img src="<?php the_post_thumbnail_url('full');?>" alt="">
              <h3 class="content-title"><?php the_title(); ?></h3>
              <p>
              <?php
                $content = wp_trim_words( get_the_content(),30,'...');
                echo $content
              ?>
              </p>
            </a>
          </li>
        <?php endforeach;?>
        <?php wp_reset_postdata();?>
        </ul>
  </section>
</main>

<?php get_footer(); ?>