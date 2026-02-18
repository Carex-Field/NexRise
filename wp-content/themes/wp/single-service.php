<?php get_header(); ?>
<main>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!-- FV -->
  <section class="p-service-detail__fv">
    <div class="inner">
      <h1 class="p-service-detail__fv__ttl"><?php the_title(); ?></h1>
      <?php if ($lead = get_field('service_lead')) : ?>
        <p class="p-service-detail__fv__lead">
          <?php echo $lead; ?>
        </p>
      <?php endif; ?>
    </div>
  </section>
  <!-- 課題 -->
  <section class="p-service-detail__sec1">
    <div class="inner">
      <h2 class="p-service-detail__sec__ttl">このようなお悩みはありませんか？</h2>
      <ul class="p-service-detail__sec1__list">
        <?php $problems = get_field("service_problems");
          for ($i = 1; $i <= 4; $i++) :
          $problem = $problems['service_problem0'.$i];
          if ($problem) : ?>
            <li class="p-service-detail__sec1__item">
              <?php echo $problem; ?>
            </li>
        <?php endif; endfor; ?>
      </ul>
    </div>
  </section>
  <!-- サービス詳細 -->
  <section class="p-service-detail__sec2">
    <div class="inner">
      <h2 class="p-service-detail__sec__ttl">サービス内容</h2>
      <div class="p-service-detail__sec2__content">
        <?php for ($i = 1; $i <= 3; $i++) :
          $content = get_field("service_content0".$i);
          $ttl = $content["content_ttl"];
          $txt  = $content["content_txt"];
          if ($ttl || $txt) : ?>
            <div class="p-service-detail__sec2__block">
              <?php if ($ttl) : ?>
                <h3 class="p-service-detail__sec2__block__ttl">
                  <?php echo $ttl; ?>
                </h3>
              <?php endif; ?>
              <?php if ($txt) : ?>
                <p class="p-service-detail__sec2__block__txt">
                  <?php echo $txt; ?>
                </p>
              <?php endif; ?>
            </div>
        <?php endif; endfor; ?>
      </div>
    </div>
  </section>
  <!-- 支援の流れ -->
  <section class="p-service-detail__sec3">
    <div class="inner">
      <h2 class="p-service-detail__sec__ttl">ご支援の流れ</h2>
      <ol class="p-service-detail__sec3__list">
        <?php $flow = get_field("service_flow");
          for ($i = 1; $i <= 4; $i++) :
          $txt = $flow['service_flow0'.$i];
          if ($txt) : ?>
            <li class="p-service-detail__sec3__item">
              <?php echo $txt; ?>
            </li>
        <?php endif; endfor; ?>
      </ol>
    </div>
  </section>
  <!-- 得られる成果 -->
  <section class="p-service-detail__sec4">
    <div class="inner">
      <h2 class="p-service-detail__sec__ttl">得られる成果</h2>
      <ul class="p-service-detail__sec4__list">
        <?php $benefits = get_field("service_benefits");
          for ($i = 1; $i <= 4; $i++) :
          $benefit = $benefits['service_benefit0'.$i];
          if ($benefit) : ?>
            <li class="p-service-detail__sec4__item">
              <?php echo $benefit; ?>
            </li>
        <?php endif; endfor; ?>
      </ul>
    </div>
  </section>
  <!-- 関連事例 -->
  <?php
  $related_cases = get_field('related_cases');
  if ($related_cases) :
  ?>
    <section class="p-service-detail__sec5">
      <div class="inner">
        <h2 class="p-service-detail__sec__ttl">関連事例</h2>
        <div class="p-service-detail__sec5__list">
          <?php foreach ($related_cases as $post) :
            setup_postdata($post); ?>
            <article class="p-service-detail__sec5__card">
              <a href="<?php the_permalink(); ?>" class="p-service-detail__sec5__card__link">
                <h3 class="p-service-detail__sec5__card__ttl">
                  <?php the_title(); ?>
                </h3>
                <p class="p-service-detail__sec5__card__txt">
                  詳しく見る
                </p>
              </a>
            </article>
          <?php endforeach;
          wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <!-- CTA -->
  <section class="c-cta1">
    <div class="inner">
      <h3 class="c-cta1__txt">
        まずはお気軽にご相談ください
      </h3>
      <a href="<?php echo home_url('/contact/'); ?>" class="c-cta1__btn">
        お問い合わせはこちら
      </a>
    </div>
  </section>
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>