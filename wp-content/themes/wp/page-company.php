<?php include(get_template_directory().'/includes/meta.php');
$pageid = "company"; ?>

<?php get_header(); ?>
<main>
  <section class="c-fv1">
    <div class="inner">
      <h2 class="c-fv1__ttl">
        <?php the_title(); ?>
      </h2>
      <p class="c-fv1__lead">
        デジタルの力で、企業の成長を支援する<br class="sp-only">パートナーであり続けます。
      </p>
    </div>
  </section>
  <section class="p-company2 p-company__sec">
    <div class="inner">
      <h3 class="p-company__sec__ttl">
        代表メッセージ
      </h3>
      <div class="p-company2__content">
        <p class="p-company2__content__ttl">
          - DXを“構想”で終わらせない。
        </p>
        <p>
          DXという言葉が広がる一方で、<br>
          実行まで辿り着けていない企業も少なくありません。
        </p>
        <p>
          特に中小企業にとって、DXは決して簡単な取り組みではないと感じています。<br>
          人材不足、時間不足、情報不足——<br>
          課題は複雑に絡み合っています。
        </p>
        <p>
          だからこそ私たちは、<br>
          戦略立案だけで終わらない「実行まで伴走するDX支援」を掲げています。
        </p>
        <p>
          現状を整理し、あるべき姿を描き、<br>
          必要な仕組みを設計し、開発し、運用まで支える。
        </p>
        <p>
          Web改善、システム開発、クラウド導入。<br>
          それぞれを単体で提供するのではなく、<br>
          企業の成長に必要な要素をワンストップで支援すること。
        </p>
        <p>
          成果につながるDXとは、<br>
          “理想論”ではなく“現場で動く仕組み”だと考えています。
        </p>
        <p>
          私たちは、企業の挑戦に伴走し続ける<br>
          デジタルパートナーでありたいと考えています。
        </p>
      </div>
    </div>
  </section>
  <section class="p-company3 p-company__sec bg-gray">
    <div class="inner">
      <h3 class="p-company__sec__ttl">
        会社概要
      </h3>
      <table class="p-company3__table">
        <tr>
          <th>会社名</th>
          <td>株式会社NexRise</td>
        </tr>
        <tr>
          <th>設立</th>
          <td>2024年4月</td>
        </tr>
        <tr>
          <th>代表者</th>
          <td>代表取締役 〇〇 〇〇</td>
        </tr>
        <tr>
          <th>所在地</th>
          <td>東京都〇〇区〇〇 1-2-3</td>
        </tr>
        <tr>
          <th>事業内容</th>
          <td>
            ・Web制作<br>
            ・システム開発<br>
            ・クラウド導入支援
          </td>
        </tr>
      </table>
    </div>
  </section>
  <section class="p-company4 p-company__sec">
    <div class="inner">
      <h3 class="p-company__sec__ttl">
        アクセス
      </h3>
      <div class="p-company4__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8317691474035!2d139.7644864757561!3d35.681144129978804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1771412486971!5m2!1sja!2sjp" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
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

<?php get_footer(); ?>