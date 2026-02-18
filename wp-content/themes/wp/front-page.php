<?php get_header() ?>
<main>
  <section class="p-top__fv">
    <div class="p-top__fv__inner">
      <div class="p-top__fv__content">
        <p class="p-top__fv__ttl">
          中小企業のDXを、<br>
          実行まで伴走する。
        </p>
        <p class="p-top__fv__lead">
          戦略立案から開発・運用まで、
          成果につながるDX支援をワンストップで提供します。
        </p>
        <div class="p-top__fv__btn">
          <a href="<?php echo home_url('/service/'); ?>" class="c-btn1 c-btn1--primary">
            サービスを見る
          </a>
          <a href="<?php echo home_url('/contact/'); ?>" class="c-btn1 c-btn1--outline">
            無料相談はこちら
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="p-top1 p-top__sec">
    <div class="p-top__inner">
      <div class="p-top__head">
        <h2 class="p-top__head__ttl">
          こんなお悩み<br class="sp-only">ありませんか？
        </h2>
      </div>
      <ul class="p-top1__list">
        <li class="p-top1__item">
          <div class="p-top1__icon">
            <img src="/wp-content/themes/wp/assets/images/top/worries1.svg" alt="">
          </div>
          <p class="p-top1__txt">
            業務が属人化している
          </p>
        </li>
        <li class="p-top1__item">
          <div class="p-top1__icon">
            <img src="/wp-content/themes/wp/assets/images/top/worries2.svg" alt="">
          </div>
          <p class="p-top1__txt">
            アナログ管理が多い
          </p>
        </li>
        <li class="p-top1__item">
          <div class="p-top1__icon">
            <img src="/wp-content/themes/wp/assets/images/top/worries3.svg" alt="">
          </div>
          <p class="p-top1__txt">
            システム導入に不安がある
          </p>
        </li>
      </ul>
      <div class="p-top1__arrows">
        <img src="/wp-content/themes/wp/assets/images/top/arrows-down.svg" alt="">
      </div>
      <p class="p-top1__end">
        NexRiseが<br class="sp-only">解決します
      </p>
    </div>
  </section>
  <section class="p-top2 p-top__sec">
    <div class="p-top__inner">
      <div class="p-top__head">
        <h2 class="p-top__head__ttl">サービス</h2>
        <p class="p-top__head__lead">
          戦略立案から開発・運用まで、<br class="sp-only">ワンストップで支援します。
        </p>
      </div>
      <div class="p-top__grid">
        <?php
          $args = array(
            'post_type' => 'service',
            'posts_per_page' => 3
          );
          $service_query = new WP_Query($args);
          if ($service_query->have_posts()) :
            while ($service_query->have_posts()) :
              $service_query->the_post();
        ?>
        <article class="c-card1">
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
        <?php
          endwhile;
            wp_reset_postdata();
          endif;
        ?>
      </div>
    </div>
  </section>
  <section class="p-top3 p-top__sec">
    <div class="p-top__inner">
      <div class="p-top__head">
        <h2 class="p-top__head__ttl">導入事例</h2>
        <p class="p-top__head__lead">
          業界ごとの課題に合わせた<br class="sp-only">DX支援の実績をご紹介します。
        </p>
      </div>
      <div class="p-top__grid">
        <?php
          $args = array(
            'post_type' => 'case',
            'posts_per_page' => 3
          );
          $case_query = new WP_Query($args);
          if ($case_query->have_posts()) :
          while ($case_query->have_posts()) :
            $case_query->the_post();
            $term_slugs = wp_get_post_terms(get_the_ID(), 'case_category', ['fields' => 'slugs']);
        ?>
        <article class="p-case__card c-card2" data-category="<?php echo esc_attr(implode(' ', $term_slugs)); ?>">
          <a href="<?php the_permalink(); ?>" class="c-card2__link">
            <div class="c-card2__img">
              <img src="/wp-content/themes/wp/assets/images/case/card_img.png" alt="<?php the_title(); ?>">
            </div>
            <div class="c-card2__body">
              <div class="c-card2__category">
                <?php
                $terms = get_the_terms(get_the_ID(), 'case_category');
                if ($terms && !is_wp_error($terms)) :
                  foreach ($terms as $term) :
                    echo '<span>' . esc_html($term->name) . '</span>';
                  endforeach;
                endif;
                ?>
              </div>
              <h3 class="c-card2__ttl">
                <?php the_title(); ?>
              </h3>
                <?php $result_number = get_field('result_number'); ?>
                <div class="c-card2__result">
                  <?php if($result_txt = get_field('result_txt')) :
                    echo $result_txt;
                  endif; ?>
                  <span class="c-card2__result__number" data-number="<?php echo esc_attr($result_number); ?>">
                    0
                  </span>
                  <?php echo get_field('result_unit'); ?>
                </div>
            </div>
          </a>
        </article>
        <?php
          endwhile;
            wp_reset_postdata();
          endif;
        ?>
      </div>
    </div>
  </section>
  <section class="p-top4 p-top__sec">
    <div class="p-top__inner">
      <div class="p-top__head">
        <h2 class="p-top__head__ttl">
          選ばれる理由
        </h2>
      </div>
      <div class="p-top4__grid">
        <ul class="p-top4__list">
          <li class="p-top4__item">
            <h3 class="p-top4__item__ttl">
              <span>01</span>
              現場理解から始める改善設計
            </h3>
            <p class="p-top4__item__txt">
              業務の実態を把握し、<br>
              本質的な課題を整理します。
            </p>
          </li>
          <li class="p-top4__item">
            <h3 class="p-top4__item__ttl">
              <span>02</span>
              成果から逆算する戦略立案
            </h3>
            <p class="p-top4__item__txt">
              ゴールを明確にし、<br>
              KPIベースで改善を設計します。
            </p>
          </li>
          <li class="p-top4__item">
            <h3 class="p-top4__item__ttl">
              <span>03</span>
              定着まで伴走する支援体制
            </h3>
            <p class="p-top4__item__txt">
              実行だけでなく、<br>
              現場に根付く仕組みを構築します。
            </p>
          </li>
          <li class="p-top4__item">
            <h3 class="p-top4__item__ttl">
              <span>04</span>
              ワンストップ対応
            </h3>
            <p class="p-top4__item__txt">
              戦略策定から運用改善まで、<br>
              責任を持って対応します。
            </p>
          </li>
        </ul>
        <div class="p-top4__img">
          <img src="/wp-content/themes/wp/assets/images/top/cycle.png" alt="Plan, Excecute, Optimize">
        </div>
      </div>
    </div>
  </section>
  <section class="c-cta1">
    <div class="inner">
      <p class="c-cta1__ttl">
        その悩み、今日で<br class="sp-only">終わらせましょう。
      </p>
      <a href="<?php echo home_url('/contact/'); ?>" class="c-cta1__btn">
        無料相談はこちら
      </a>
    </div>
  </section>
</main>
<?php get_footer() ?>