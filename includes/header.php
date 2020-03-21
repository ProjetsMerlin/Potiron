<?php include('config.php');?>
<!DOCTYPE html>
<html lang="<?= $config['lang'];?>">
<head>
  <meta charset="UTF-8">
  <title><?= $config['title'];?></title>
  <meta name="viewport" content="width=device-width, initial-scale=0.9,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="description" content="<?= $config['description'];?>">
  <meta name="robots" content="<?= $config['robots'];?>">
  <meta name="author" content="<?= $config['author'];?>">
  <!--Balises OG-->
  <meta property="og:title" content="<?= $config['title'];?>">
  <meta property="og:type" content="<?= $config['type'];?>">
  <meta property="og:url" content="<?= $config['url'];?>">
  <meta property="og:image" content="<?= $config['favicon'];?>">
  <!---->
  <link rel="shortcut icon" type="image/x-icon" href="<?=$config['url'];?><?= $config['favicon'];?>">
  <!--LIBRAIRIRES-->
  <?php if($config['fontawesome'] === true) : ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <?php endif;?>
  <link rel="stylesheet" type="text/css" href="<?=$config['url'];?>css/style.min.css">
</head>
<body>
  <?php
  if(!empty($config['ga'])) : ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', '<?=$config['ga'];?>', 'auto');
      ga('send', 'pageview');
    </script>
  <?php endif;?>