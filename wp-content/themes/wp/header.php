<?php include(get_template_directory().'/includes/head.php');?>
<body class="p-<?php echo $pageid ?>">
<div class="l-wrapper">
<header class="l-header is-visible">
  <div class="l-header__inner">
    <div class="l-header__logo">
      <a href="<?php echo home_url(); ?>">
        <img src="/wp-content/themes/wp/assets/images/common/logo.png" alt="<?php bloginfo('name'); ?>">
      </a>
    </div>
    <nav class="l-header__nav">
      <?php
        wp_nav_menu([
          'theme_location' => 'global',
          'container' => false,
          'menu_class' => 'l-header__list'
        ]);
      ?>
    </nav>
    <button class="sp-menu" id="sp-menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</header>