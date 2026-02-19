<footer class="l-footer">
  <div class="l-footer__inner">
    <div class="l-footer__top">
      <div class="l-footer__brand">
        <a href="<?php echo home_url(); ?>" class="l-footer__logo">
          NexRise
        </a>
        <p class="l-footer__lead">
          中小企業のDXを、実行まで伴走する。<br>
          戦略立案から開発・運用までワンストップで支援します。
        </p>
      </div>
      <nav class="l-footer__nav">
        <ul class="l-footer__list">
          <li><a href="<?php echo home_url('/service/'); ?>">サービス</a></li>
          <li><a href="<?php echo home_url('/case/'); ?>">導入事例</a></li>
          <li><a href="<?php echo home_url('/company/'); ?>">会社情報</a></li>
          <li><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
        </ul>
      </nav>
    </div>
    <div class="l-footer__bottom">
      <p class="l-footer__copy">
        © <?php echo date('Y'); ?> NexRise Inc.
      </p>
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
