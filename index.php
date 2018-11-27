<?php get_header(); ?>
<main>
    <section class="section-block services" id="services">
        <div class="container">
            <h3 class="section-title">Наши услуги </h3>
            <hr class="divider">
            <div class="section-content">
                <div class="row">
                    <?php foreach(getServiceList() as $service): ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 record-sevice service">
                        <div class="icon"></div>
                        <h3 class="title"><?php echo $service->post_title; ?></h3>
                        <div class="description">
                            <p><?php echo $service->post_excerpt; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
            </section>
            <section class="section-block gallery" id="gallery">
        <div class="row">
            <div class="photo col-md-4 p-0">
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/T01A1778.jpg" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/T01A1778.jpg" alt="" class="photo"></a>
            </div>
            <div class="photo col-md-4 p-0">
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/T01A1905.jpg" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/T01A1905.jpg" alt="" class="photo"></a>
            </div>
            <div class="photo col-md-4 p-0">
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/T01A1837.jpg" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/T01A1837.jpg" alt="" class="photo"></a>
            </div>
            <div class="photo col-md-4 p-0">
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/T01A1910.jpg" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/T01A1910.jpg" alt="" class="photo"></a>
            </div>
            <div class="photo col-md-4 p-0">
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/T01A1795.jpg" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/T01A1795.jpg" alt="" class="photo"></a>
            </div>
            <div class="photo col-md-4 p-0">
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/T01A1797.jpg" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/T01A1797.jpg" alt="" class="photo"></a>
            </div>
        </div>
    </section>
    <section><?php echo do_shortcode('[gallery size="large" ids="18,19,20,21,22,23"]');?></section>
    <section class="section-block how-we-work" id="works">
        <h3 class="section-title">Наши работы</h3>
        <hr class="divider">
        <div class="row">
                <div class="col-md-12 p-0 audio-container">
                        <div class="row">
                                <div class="col-md-3 p-0 track">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/tracks/bahroma-kamen.jpg" alt="" class="logo">
                                        <div class="play-container d-flex align-items-center justify-content-center">
                                                <button class="play-btn animated"><i class="fas fa-play"></i></button>
                                                <button class="stop-btn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <audio src="<?php echo get_template_directory_uri(); ?>/assets/tracks/BAHROMA - Камень.mp3"></audio>
                                </div>
                                <div class="col-md-3 p-0 track">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/tracks/Kate Aduhkina.jpg" alt="" class="logo">
                                        <div class="play-container d-flex align-items-center justify-content-center">
                                                <button class="play-btn animated"><i class="fas fa-play"></i></button>
                                                <button class="stop-btn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <audio src="<?php echo get_template_directory_uri(); ?>/assets/tracks/Катя Адушкина - Beauty Bomb.mp3"></audio>
                                </div>
                                <div class="col-md-3 p-0 track">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/tracks/kristian kostov - the one.jpg" alt="" class="logo">
                                        <div class="play-container d-flex align-items-center justify-content-center">
                                                <button class="play-btn animated"><i class="fas fa-play"></i></button>
                                                <button class="stop-btn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <audio src="<?php echo get_template_directory_uri(); ?>/assets/tracks/Kristian Kostov - The One.mp3"></audio>
                                </div>
                                <div class="col-md-3 p-0 track">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/tracks/Lacky4-nadojelo.jpg" alt="" class="logo">
                                        <div class="play-container d-flex align-items-center justify-content-center">
                                                <button class="play-btn animated"><i class="fas fa-play"></i></button>
                                                <button class="stop-btn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <audio src="<?php echo get_template_directory_uri(); ?>/assets/tracks/ Lucky4 - Надоело.mp3"></audio>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-3 p-0 track">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/tracks/Machete - krepche menja derzhi.jpg" alt="" class="logo">
                                        <div class="play-container d-flex align-items-center justify-content-center">
                                                <button class="play-btn animated"><i class="fas fa-play"></i></button>
                                                <button class="stop-btn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <audio src="<?php echo get_template_directory_uri(); ?>/assets/tracks/МАЧЕТЕ - Крепче меня держи.mp3"></audio>
                                </div>
                                <div class="col-md-3 p-0 track">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/tracks/Max barskih - vspominats.jpg" alt="" class="logo">
                                        <div class="play-container d-flex align-items-center justify-content-center">
                                                <button class="play-btn animated"><i class="fas fa-play"></i></button>
                                                <button class="stop-btn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <audio src="<?php echo get_template_directory_uri(); ?>/assets/tracks/MAX BARSKIH - Вспоминать.mp3"></audio>
                                </div>
                                <div class="col-md-3 p-0 track">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/tracks/O.Torvald.jpg" alt="" class="logo">
                                        <div class="play-container d-flex align-items-center justify-content-center">
                                                <button class="play-btn animated"><i class="fas fa-play"></i></button>
                                                <button class="stop-btn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <audio src="<?php echo get_template_directory_uri(); ?>/assets/tracks/O.Torvald - TIME.mp3"></audio>
                                </div>
                                <div class="col-md-3 p-0 track">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/tracks/radiovolna.jpg" alt="" class="logo">
                                        <div class="play-container d-flex align-items-center justify-content-center">
                                                <button class="play-btn animated"><i class="fas fa-play"></i></button>
                                                <button class="stop-btn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <audio src="<?php echo get_template_directory_uri(); ?>/assets/tracks/РАДИОВОЛНА - Поздно.mp3"></audio>
                                </div>
                        </div>
                </div>
                <div class="col-md-12 p-0 video-container">
                        <div class="youtube-container" id="player"></div>
                </div>
        </div>
    </section>
    <section class="section-block our-clients" id="clients">
        <div class="container">
            <h3 class="section-title">Наши клиенты</h3>
            <hr class="divider">
                            <div class="row">
                                <div class="client col-md-4 client-2 main-client">
                                    <div class="name">
                                        <span>Макс Барских</span>
                                        <svg height="40" width="30" class="triangle-on">
                                                <polygon points="0,0 0,44 30,0" style="fill:rgb(60,60,60);"></polygon>
                                                Sorry, your browser does not support inline SVG.
                                        </svg>
                                    </div>
                                    <p class="description">Обладатель премии "Лучший украинский исполнитель" по версии MTV EMA 2010 и МУЗ-ТВ в категории "Прорыв года" (2012)</p>
                                </div>
                                <div class="d-flex flex-md-column col-md-2 align-items-stretch p-0">
                                    <div class="client">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/fraiz.jpg" alt="">
                                        <div class="name">
                                            <span class="title">Knights Move</span>
                                            <span class="description">(Германия)</span>
                                            <svg height="25" width="30" class="triangle-on">
                                                    <polygon points="0,0 0,26 20,0" style="fill:rgb(60,60,60);"></polygon>
                                                    Sorry, your browser does not support inline SVG.
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="client">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/lucky4.jpg" alt="">
                                        <div class="name">
                                            <span class="title">Lucky4</span>
                                            <span class="description">(Киев)</span>
                                            <svg height="25" width="30" class="triangle-on">
                                                    <polygon points="0,0 0,26 20,0" style="fill:rgb(60,60,60);"></polygon>
                                                    Sorry, your browser does not support inline SVG.
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="client col-lg-4 col-md-4 client-1 main-client">
                                        <div class="name">
                                            <span>Мачете</span>
                                            <svg height="40" width="30" class="triangle-on">
                                                    <polygon points="0,0 0,44 30,0" style="fill:rgb(60,60,60);"></polygon>
                                                    Sorry, your browser does not support inline SVG.
                                            </svg>
                                        </div>
                                        <p class="description">Номинант на премию MTV EMA в категории «Лучший российский артист 2011»</p>
                                </div>
                                <div class="d-flex flex-md-column col-md-2  align-items-stretch p-0">
                                    <div class="client">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/aloecolor.jpg" alt="">
                                        <div class="name">
                                            <span class="title">Цвет алоэ</span>
                                            <span class="description">(Минск)</span>
                                            <svg height="25" width="30" class="triangle-on">
                                                    <polygon points="0,0 0,26 20,0" style="fill:rgb(60,60,60);"></polygon>
                                                    Sorry, your browser does not support inline SVG.
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="client">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/BAHROMA.jpg" alt="">
                                        <div class="name">
                                            <span class="title">Bahroma</span>
                                            <span class="description">(Киев)</span>
                                            <svg height="25" width="30" class="triangle-on">
                                                    <polygon points="0,0 0,26 20,0" style="fill:rgb(60,60,60);"></polygon>
                                                    Sorry, your browser does not support inline SVG.
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-md-column col-md-2  align-items-stretch p-0">
                                    <div class="client">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/p22.jpg" alt="">
                                        <div class="name">
                                            <span class="title">P22</span>
                                            <span class="description">(Москва)</span>
                                            <svg height="25" width="30" class="triangle-on">
                                                    <polygon points="0,0 0,26 20,0" style="fill:rgb(60,60,60);"></polygon>
                                                    Sorry, your browser does not support inline SVG.
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="client">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/Patlis.jpg" alt="">
                                        <div class="name">
                                            <span class="title">Александр Патлис</span>
                                            <span class="description">(Минск)</span>
                                            <svg height="25" width="30" class="triangle-on">
                                                    <polygon points="0,0 0,26 20,0" style="fill:rgb(60,60,60);"></polygon>
                                                    Sorry, your browser does not support inline SVG.
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="client col-md-4 client-3 main-client">
                                        <div class="name">
                                            <span>КРИСТИАН КОСТОВ</span>
                                            <svg height="40" width="30" class="triangle-on">
                                                    <polygon points="0,0 0,44 30,0" style="fill:rgb(60,60,60);"></polygon>
                                                    Sorry, your browser does not support inline SVG.
                                            </svg>
                                        </div>
                                        <p class="description">II место на EUROVISION 2О17, финалист телепроекта «Голос. Дети 2014»</p>
                                </div>
                                <div class="d-flex flex-md-column  align-items-stretch col-md-2 p-0">
                                    <div class="client">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/nuteki.jpg" alt="">
                                        <div class="name">
                                            <span class="title">Nuteki</span>
                                            <span class="description">(Минск)</span>
                                            <svg height="25" width="30" class="triangle-on">
                                                    <polygon points="0,0 0,26 20,0" style="fill:rgb(60,60,60);"></polygon>
                                                    Sorry, your browser does not support inline SVG.
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="client">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/people inside.jpg" alt="">
                                        <div class="name">
                                            <span class="title">People inside</span>
                                            <span class="description">(Киев)</span>
                                            <svg height="25" width="30" class="triangle-on">
                                                    <polygon points="0,0 0,26 20,0" style="fill:rgb(60,60,60);"></polygon>
                                                    Sorry, your browser does not support inline SVG.
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="client col-md-4 client-4 main-client">
                                    <div class="name">
                                        <span>O.TORVALD</span>
                                        <svg height="40" width="30" class="triangle-on">
                                                <polygon points="0,0 0,44 30,0" style="fill:rgb(60,60,60);"></polygon>
                                                Sorry, your browser does not support inline SVG.
                                        </svg>
                                    </div>
                                    <p class="description">Представители Украины на Eurovision 2017.</p>
                                </div>
                            </div>
        </div>
    </section>
    <section class="section-block prices" id="pricelist">
        <div class="container">
            <h3 class="section-title">Прайслист</h3>
            <hr class="divider">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 service-price p-0">
                    <div class="price-container">
                            <h4 class="service-title">ЗАПИСЬ</h4>
                        <div class="service-content d-flex flex-column">
                                <span class="content-item">
                                    <h6>Запись голоса</h6>
                                    <small>30 р/час</small>
                                </span>
                                <span class="content-item"><h6>
                                    Запись струнных/духовых инструментов</h6>
                                    <small>30 р/час</small>
                                </span>
                                <span class="content-item"><h6>
                                    Запись клавишных инструментов</h6>
                                    <small>25 р/час</small>
                                </span>
                                <span class="content-item"><h6>
                                    Запись барабанов</h6>
                                    <small>40 р. за первый час и по 30 р. за последующие часы</small>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 service-price p-0">
                    <div class="price-container">
                            <h4 class="service-title">СВЕДЕНИЕ</h4>
                        <div class="service-content d-flex flex-column">
                            <span class="content-item">
                                <h6>Сведение голоса с минусовкой</h6>
                                <small>40 р.</small>
                            </span>
                            <span class="content-item">
                                <h6>Чистка и тюн голоса</h6>
                                <small>30 р.</small>
                            </span>
                            <span class="content-item">
                                <h6>Выравнивание стандартного комплекта живых инструментов</h6>
                                <small>60 р.</small>
                            </span>
                            <span class="content-item">
                                <h6>Сведение полноценного мультитрека с ровными инструментами и почищенным голосом</h6>
                                <small>200 р.</small>
                            </span>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 service-price p-0">
                    <div class="price-container">
                            <h4 class="service-title">МАСТЕРИНГ</h4>
                        <div class="service-content d-flex flex-column">
                            <span class="content-item">
                                <h6>Стандартный мастеринг трека</h6>
                                <small>50 р.</small>
                            </span>
                            <span class="content-item">
                                <h6>Мастеринг STEMS дорожек (до 10 групп инструментов/голоса)</h6>
                                <small>100 р.</small>
                            </span>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 service-price p-0">
                    <div class="price-container">
                            <h4 class="service-title">АРАНЖИРОВКА</h4>
                        <div class="service-content d-flex flex-column">
                            <span class="content-item">
                                <h6>Написание аранжировок</h6>
                                <small>от 400 р.</small>
                            </span>
                            <span class="content-item">
                                <h6>Написание песни под ключ</h6>
                                <small>от 800 р.</small>
                            </span>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-block testimonials" id="testimonials">
        <div class="container">
            <h3 class="section-title">Отзывы</h3>
            <hr class="divider">
            <div id="testimonials-slider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" id="slider-controls">
                </ol>
                <div class="carousel-inner" id="slider-container"></div>
            </div>
        </div>
    </section>
    <section class="section-block news-section" id="news">
        <div class="container">
            <h3 class="section-title">Наш блог</h3>
            <hr class="divider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active news-item">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 d-none d-md-block news-image" style="background:url(<?php echo get_template_directory_uri(); ?>/img/news/news-1.png); background-size:cover; background-position:center;">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 news-content">
                            <h3>Аналоговое суммирование</h3>
                            <p>В студии Nerv-R появилась новая услуга - аналоговое суммирование для вашего аудио-микса с помощью DANGEROUS MUSIC 2-BUS
                                Преимущества сумматора:
                                16 каналов наилучшего активного аналогового суммирования.
                                Невероятно точное представление звуковой картины.
                                Микс получается более плотным и детальным.
                                Вы услышите разницу
                                Прибор уже успешно прошел испытание при сведении треков для Макса Барских и O.TORVALD</p>
                        </div>
                    </div>
                    </div>
                    <div class="carousel-item news-item">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 d-none d-md-block news-image" style="background:url(<?php echo get_template_directory_uri(); ?>/img/news/news-2.png); background-size:cover; background-position:center;">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 news-content">
                            <h3>Старый DSP - UAD-2 SOLO заменен на новый, мощный Universal Audio UAD-2 Satellite Thunderbolt - OCTO Core.</h3>
                            <p>В студии Nerv-Records очередное глобальное обновление!
                                    На смену старой DSP-обработке UAD-2 SOLO приобретена новая Universal Audio UAD-2 Satellite Thunderbolt - OCTO Core на 8 процессоров.
                                    Итак, что же это такое?... </p>
                        </div>
                    </div>
                    </div>
                    <div class="carousel-item news-item">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 d-none d-md-block news-image" style="background:url(<?php echo get_template_directory_uri(); ?>/img/news/news-3.png); background-size:cover; background-position:center;">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 news-content">
                            <h3>МАЧЕТЕ (Моше Пинхас) в студии Nerv-R</h3>
                            <p>Привет, давно ничего не писал, но это не значит, что студия бездействует ;)

                                    Напротив, через студию Nerv-R прокачивается много треков для Беларуси, Украины, России, и некоторыми особенно хочется поделиться, хоть и с небольшим опозданием от релиза!
                                    
                                    Представляю песню, для которой я делал сведение стемс и мастеринг - "Крепче меня держи" от группы "МАЧЕТЕ". Сразу же был отснят клип, который и предлагаю вам посмотреть.</p>
                        </div>
                    </div>
                    </div>
                </div>
                <a class="news-button prev-btn" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="news-button next-btn" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
        </div>
    </section>
    <section class="section-block contacts" id="contactus">
        <h3 class="section-title">Где нас найти</h3>
        <hr class="divider">
        <div id="map" class="map-container"></div>
    </section>
    <section class="section-block contact-form">
        
        <div class="container">
            <h3 class="section-title">Свяжитесь с нами</h3>
            <hr class="divider">
            <form action="" class="mx-auto">
                                    <a href="tel:+375298055369" class="phone-number"><span class="number">+375 (29) 805-53-69</span> 
                                        <span class="fab fa-telegram-plane"></span>
                                        <span class="fab fa-viber"></span>
                                        <span class="fab fa-whatsapp"></span>
                                    </a>
                <div class="row">
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 pl-0 pr-md-2 pr-0">
                        <label for="name">Имя</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 pr-0 pl-md-2 pl-0">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject">Тема</label>
                    <input type="text" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Сообщение</label>
                    <textarea class="form-control" name="message" id="message" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Отправить" class="btn btn-default">
                </div>
            </form>
        </div>
        
    </section>
</main>
<?php get_footer(); ?>