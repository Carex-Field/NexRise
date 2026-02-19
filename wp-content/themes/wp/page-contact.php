<?php include(get_template_directory().'/includes/meta.php');
$pageid = "contact"; ?>

<?php get_header(); ?>
<main>
  <section class="c-fv1">
    <div class="inner">
      <h2 class="c-fv1__ttl">
        <?php the_title(); ?>
      </h2>
      <p class="c-fv1__lead">
        サービスに関するご相談・お見積りなど、<br>
        お気軽にお問い合わせください。
      </p>
    </div>
  </section>
  <section class="p-contact__form">
    <div class="inner">
      <div class="p-contact__content">
        <?php echo do_shortcode('[contact-form-7 id="c94c22a" title="お問い合わせ"]'); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>