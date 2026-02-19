<?php include(get_template_directory().'/includes/meta.php');
$pageid = "service"; ?>

<?php get_header() ?>
<main>
  <!-- FV -->
  <section class="c-fv1">
    <div class="inner">
      <h2 class="c-fv1__ttl">サービス一覧</h2>
      <p class="c-fv1__lead">
        課題の本質を捉え、持続的な改善へと<br class="sp-only">導く支援を行います。
      </p>
    </div>
  </section>
  <!-- 一覧 -->
  <section class="p-service__list">
    <div class="inner">
      <!-- フィルター -->
      <?php
        $terms = get_terms([
          'taxonomy' => 'service_category',
          'hide_empty' => true,
        ]);
      ?>
      <div class="p-service__filter">
        <button class="p-service__filter__btn is-active" data-filter="all">すべて</button>
        <?php foreach ($terms as $term) : ?>
        <button
          class="p-service__filter__btn"
          data-filter="<?php echo esc_attr($term->slug); ?>">
          <?php echo esc_html($term->name); ?>
        </button>
        <?php endforeach; ?>
      </div>
      <div class="p-service__grid">
        <?php if (have_posts()) : while (have_posts()) : the_post();
        $term_slugs = wp_get_post_terms(get_the_ID(), 'service_category', ['fields' => 'slugs']);
        ?>
          <article class="p-service__card c-card1" data-category="<?php echo esc_attr(implode(' ', $term_slugs)); ?>">
            <a href="<?php the_permalink(); ?>" class="c-card1__link">
              <div class="c-card1__img">
                <?php if($fv = get_field('service_fv')) : ?>
                  <img src="<?php echo $fv; ?>" alt="<?php the_title(); ?>">
                <?php else: ?>
                  <img src="/wp-content/themes/wp/assets/images/service/card_img.png" alt="<?php the_title(); ?>">
                <?php endif; ?>
              </div>
              <h3 class="c-card1__ttl">
                <?php the_title(); ?>
              </h3>
              <?php if ($lead = get_field('service_lead')) : ?>
                <p class="c-card1__lead">
                  <?php echo $lead; ?>
                </p>
              <?php endif; ?>
              <p class="c-card1__txt">
                詳しく見る →
              </p>
            </a>
          </article>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
  <!-- CTA -->
  <section class="c-cta1">
    <div class="inner">
      <p class="c-cta1__txt">
        まずはお気軽にご相談ください
      </p>
      <a href="<?php echo home_url('/contact/'); ?>" class="c-cta1__btn">
        お問い合わせはこちら
      </a>
    </div>
  </section>
</main>
<?php get_footer() ?>