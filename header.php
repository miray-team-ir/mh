<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&family=Markazi+Text:wght@500&family=Roboto&display=swap" rel="stylesheet">
    <title> Bootstrap 02-01 </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owlcarousel/owl.theme.default.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media-style.css">
</head>
<body class=" " data-spy="scroll" data-target="#list-example" data-offset="200" class="scrollspy-example">
    <nav class="navbar navbar-expand-lg navbar navbar-light fixed-top py-4 px-5" >
        <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
            <span class="navbar-toggler-icon "></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php dynamic_sidebar( 'navbar' ); ?>



            

        </div>
    </nav>
