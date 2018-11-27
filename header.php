<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title> <?php the_title(); ?></title>
</head>
<body id="top">
    <header>
			<div class="overlay"></div>
        <nav class="navbar justify-content-lg-center fixed-top-md">
            <nav class="navbar navbar-expand-lg bg-transparent">
                <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
                    <i class="fas fa-bars"></i>
                </button>
                <div id="my-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#services">Услуги</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#works">Наши работы</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#clients">Клиенты</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#pricelist">Прайслист</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#testimonials">Отзывы</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#news">Новости</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#contactus">Контакты</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </nav>
        <div class="title text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="" class="logo">
        </div>
        <div class="social-links d-flex justify-content-center">
            <ul class="social-container d-flex">
                <li><a target="_blank" href="https://www.instagram.com/nervrecords/"><i class="fab fa-instagram"></i></a></li>
                <li><a target="_blank" href="https://www.facebook.com/groups/530014390474618/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a target="_blank" href="http://vk.com/nervrecords"><i class="fab fa-vk"></i></a></li>
            </ul>
        </div>
    </header>