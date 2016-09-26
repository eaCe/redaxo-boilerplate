<?php
if (rex_addon::get('yrewrite')->isAvailable())
{
    $seo = new rex_yrewrite_seo();
    $seoTitleTag = $seo->getTitleTag();
    $seoDescriptionTag = $seo->getDescriptionTag();
    $seoRobotsTag = $seo->getRobotsTag();
    $seoHreflangTags = $seo->getHreflangTags();
}
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php echo $seoTitleTag; ?>

        <?php echo $seoDescriptionTag; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo $seoRobotsTag; ?>

        <base href="" />
        <?php echo $seoHreflangTags; ?>

        <link rel="apple-touch-icon" href="touch-icon-iphone.png">
        <link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png">
        <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png">

        <meta property="og:description" content="" />
        <meta property="og:image" content="">
        <meta property="og:site_name" content="" />          
        <meta property="og:title" content="" />     
        <meta property="og:type" content="website" />         
        <meta property="og:url" content="" />        

        <meta property="twitter:card" content="summary">
        <meta property="twitter:description" content="">
        <meta property="twitter:image" content="">
        <meta property="twitter:site" content="">
        <meta property="twitter:title" content="">
        <meta property="twitter:url" content="">

        <link rel="stylesheet" href="<?php print rex_url::base('css/main.css'); ?>">
    </head>