<?php get_header(); ?>
<main>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="p-case-detail__fv">
    <div class="inner">
      <p class="p-case-detail__fv__category">
        <?php
        $terms = get_the_terms(get_the_ID(), 'case_category');
        if ($terms) {
          foreach ($terms as $term) {
            echo esc_html($term->name);
          }
        }
        ?>
      </p>
      <h2 class="p-case-detail__fv__ttl">
        <?php the_title(); ?>
      </h2>
    </div>
  </section>
  <section class="p-case-detail__sec">
    <div class="inner">
      <h3 class="p-case-detail__sec__ttl">
        課題
      </h3>
      <div class="p-case-detail__sec__content">
        <?php the_field('challenge'); ?>
      </div>
    </div>
  </section>
  <section class="p-case-detail__sec bg-gray">
    <div class="inner">
      <h3 class="p-case-detail__sec__ttl">
        施策
      </h3>
      <div class="p-case-detail__sec__content">
        <?php the_field('solution'); ?>
      </div>
    </div>
  </section>
  <?php
    $result_txt = get_field('result_txt');
    $result_number = get_field('result_number');
    $result_unit   = get_field('result_unit');
  ?>
  <section class="p-case-detail__sec">
    <div class="inner">
      <h3 class="p-case-detail__sec__ttl">
        成果
      </h3>
      <div class="p-case-detail__result">
        <?php if($result_txt) : ?>
        <span>
          <?php echo $result_txt; ?>
        </span>
        <?php endif; ?>
        <span class="p-case-detail__result__number" data-number="<?php echo esc_attr($result_number); ?>">
          0
        </span>
        <span class="result-unit">
          <?php echo $result_unit; ?>
        </span>
      </div>
      <?php if (get_field('result')): ?>
      <div class="p-case-detail__sec__content">
        <?php the_field('result'); ?>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <?php
    $services = get_field('related_services');
    if ($services):
  ?>
  <section class="p-case-detail__sec bg-gray">
    <div class="inner">
      <h3 class="p-case-detail__sec__ttl">
        導入サービス
      </h3>
      <div class="p-case-detail__grid">
        <?php foreach ($services as $post): setup_postdata($post); ?>
          <article class="c-card1">
            <a href="<?php the_permalink(); ?>" class="c-card1__link">
              <div class="c-card1__img">
                <?php if($fv = get_field('service_fv')) : ?>
                  <img src="<?php echo $fv; ?>" alt="<?php the_title(); ?>">
                <?php else: ?>
                  <img src="/wp-content/themes/wp/assets/images/service/card_img.png" alt="<?php the_title(); ?>">
                <?php endif; ?>
              </div>
              <p class="c-card1__ttl">
                <?php the_title(); ?>
              </p>
            </a>
          </article>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <!-- CTA -->
  <section class="c-cta1">
    <div class="inner">
      <p class="c-cta1__ttl">
        同様の支援をご希望ですか？
      </p>
      <a href="<?php echo home_url('/contact/'); ?>" class="c-cta1__btn">
        お問い合わせはこちら
      </a>
    </div>
  </section>
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>