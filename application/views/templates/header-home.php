<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <title><?php if(isset($page_title)) echo $page_title; ?></title>
      <link rel="shortcut icon" href="<?= asset_base_url()?>/images/favicon.png">

      <!--reset styles-->
      <link rel="stylesheet" href="<?= asset_base_url()?>/css/style.css" type="text/css">
      <link rel="stylesheet" href="<?= asset_base_url()?>/libs/bootstrap.min.css" type="text/css">
      <script>var site_url = "<?php echo site_url() ?>";</script>
   </head>
   <body class="<?php if(isset($body_class)) echo $body_class; ?>">
<!-- header end -->