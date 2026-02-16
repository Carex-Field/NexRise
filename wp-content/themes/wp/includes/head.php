<?php include(get_template_directory().'/includes/meta.php');?>

<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="none" />

  <title><?php echo $title ?></title>
  <meta name="description" content="<?php echo $description ?>">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/common/index.js" defer></script>
  <?php if($scripts){ ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/pages/<?php echo $pageid ?>/index.js" defer></script>
  <?php } ?>
  <?php wp_head(); ?>
</head>