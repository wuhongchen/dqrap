<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
  <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Base scripts -->
    <script type="text/javascript" src="<?php echo JS_PATH;?>/rap/jquery.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>/rap/modernizr-latest.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>/rap/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>/rap/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>/rap/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>/rap/flexslider.css" />

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>/rap/font-awesome.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>/rap/plugin.css">

    <script type="text/javascript" src="<?php echo JS_PATH;?>/rap/plugin/jquery-jplayer/jquery.jplayer.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>/rap/plugin/ttw-music-player-min.js"></script>
    <!-- <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'> -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->

    <!-- IE -->
    <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>/rap/ie.css" />
    <![endif]-->
    <!--[if lt IE 10]>
        <script type="text/javascript" src="js/PIE.js"></script>
    <![endif]-->

</head>