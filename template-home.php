<?php
/*
Этот комментарий не стирать, он необходим для работы шаблона.
Template Name: Шаблон главной страницы
*/
get_header();
?>

    <main class="main">
        <section class="hero">
            <div class="hero__left">
                <header class="header" data-header>
                    <div class="header__inner">
                        <div class="header__logo">
                            <a href="/" class="header__logo-link">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/svg/logo.svg"
                                     alt="Логотип компании">
                            </a>
                        </div>

                        <div class="header__location">
                            <p class="header__city">Москва</p>
                            <span>Большая Дмитровка 16к1, 11:00 — 22:00</span>
                        </div>

                        <button class="header__burger" aria-label="Открыть меню">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <nav class="header__menu">
                            <ul class="header__menu-list">
                                <li class="header__menu-item"><a href="#"><span class="menu-text"><span
                                                    data-text="Услуги">Услуги</span></span></a>
                                </li>
                                <li class="header__menu-item"><a href="#"><span class="menu-text"><span
                                                    data-text="Тарифы">Тарифы</span></span></a>
                                </li>
                                <li class="header__menu-item"><a href="#"><span class="menu-text"><span
                                                    data-text="Работы">Работы</span></span></a>
                                </li>
                                <li class="header__menu-item"><a href="#"><span class="menu-text"><span
                                                    data-text="Отзывы">Отзывы</span></span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </header>

                <div class="hero__left-inner">
                    <h1 class="hero__title">
                        <?php the_field('hero__title') ?>
                    </h1>
                    <button class="btn hero__btn btn--main" data-request>
                        <?php the_field('hero__btn-text') ?>
                        <span><img src="<?php echo get_template_directory_uri() ?>/assets/images/svg/arrow-right.svg"
                                   alt="стрелка вправо"></span>
                    </button>
                </div>

                <div class="hero__socials">
                    <ul class="hero__socials-list">
                        <li class="hero__socials-item">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/svg/tg.svg"
                                     alt="иконка телеграм">
                                <span>Telegram</span>
                            </a>
                        </li>
                        <li class="hero__socials-item">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/svg/wa.svg"
                                     alt="иконка вотсап">
                                <span>WhatsApp</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="hero__right hero__compare">
                <div class="hero__compare-before">
                    <img src="<?php the_field('image__before') ?>">
                </div>
                <div class="hero__compare-after">
                    <img src="<?php the_field('image__after') ?>">
                </div>
                <div class="hero__compare-divider" data-divider>
                    <span class="hero__compare-arrow"><img
                                src="<?php echo get_template_directory_uri() ?>/assets/images/svg/divider-icon.svg"
                                alt="иконка разделителя"></span>
                </div>
            </div>
        </section>

        <div class="logos">
            <div class="logos-slide">
                <?php
                if (have_rows('logos__repeater')) {
                    while (have_rows('logos__repeater')) : the_row(); ?>
                        <div class="ticker__item">
                            <span><?php the_sub_field('repeater__subtitle'); ?></span>
                        </div>
                    <?php endwhile;
                } ?>

            </div>
        </div>
        <section class="services">
            <div class="container">
                <header class="services__header">
                    <h2 class="services__title title"><?php the_field('services__title') ?></h2>
                    <p class="services__description"><?php the_field('services__description') ?></p>
                </header>
                <div class="services__inner">
                    <?php
                    if (have_rows('services__list')) {
                        while (have_rows('services__list')) : the_row(); ?>

                            <div class="services__item div1">
                                <a href="<?php the_sub_field('service__link'); ?>"><img
                                            src="<?php the_sub_field('service__image'); ?>" alt="услуга 1"></a>
                                <a href="<?php the_sub_field('service__link'); ?>" class="services__button">
                                    <span><?php the_sub_field('service__title'); ?></span>
                                    <span class="services__icon">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.715 7.9015L6.12724 12.7245L7.34064 14L14 6.99966L7.34095 0L6.12734 1.27515L10.7153 6.09788L0 6.09785L0.000126009 7.90165L10.715 7.9015Z"
                                      fill="#111111"/>
                            </svg>
                            </span>
                                </a>
                            </div>
                        <?php
                        endwhile;
                    }
                    ?>

                </div>
            </div>
        </section>
        <section class="results">
            <div class="results__column--left">
                <div class="results__content">
                    <div class="results__inner">
                        <h2 class="results__title title"><?php the_field('results__title'); ?>
                        </h2>
                        <p class="results__text"><?php the_field('results__subtitle'); ?></p>
                    </div>
                    <div class="results__controls">
                        <button class="swiper-button-prev">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M4.22362 10.1591L10.1221 16.3601L8.56204 18L0 8.99957L8.56163 0L10.122 1.63948L4.2232 7.84014L18 7.8401L17.9998 10.1593L4.22362 10.1591Z"
                                      fill="#BBBBBB"/>
                            </svg>
                        </button>
                        <div class="slide-counter">
                            <span class="current-slide">1</span>/<span class="total-slides"></span>
                        </div>
                        <button class="swiper-button-next">
                            <svg width="18" height="18" viewBox="0 0 14 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.715 7.9015L6.12724 12.7245L7.34064 14L14 6.99966L7.34095 0L6.12734 1.27515L10.7153 6.09788L0 6.09785L0.000126009 7.90165L10.715 7.9015Z"
                                      fill="#111111"/>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>

            <div class="results__column--right">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <?php
                        if (have_rows('results__image-array')) {
                            while (have_rows('results__image-array')) : the_row(); ?>
                                <div class="swiper-slide"><img
                                            src="<?php the_sub_field('results__image'); ?>"
                                            alt="<?php the_sub_field('results__alt'); ?>"></div>
                            <?php
                            endwhile;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div id="overlay" class="overlay"></div>

    <div id="offCanvas" class="off-canvas">
        <button id="closeOffCanvas" class="off-canvas__close">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.5455 6.30002e-07L16 1.45455L1.45455 16L0 14.5455L14.5455 6.30002e-07Z" fill="#111111"/>
                <path d="M16 14.5455L14.5455 16L6.93582e-07 1.45455L1.45455 0L16 14.5455Z" fill="#111111"/>
            </svg>
        </button>
        <h2 class="off-canvas__title"><?php the_field('offcanvas__title'); ?></h2>
        <form id="offCanvasForm" class="off-canvas__form">
            <input type="text" id="name" name="name" class="off-canvas__input" placeholder="Ваше имя" required>
            <input type="tel" id="phone" name="phone" class="off-canvas__input" placeholder="Ваш телефон" required>
            <button type="submit" class="off-canvas__submit">Заказать услугу</button>
        </form>
        <p class="off-canvas__policy">
            Нажимая кнопку вы соглашаетесь<br>
            с правилами обработки персональных данных
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script defer src="<?php echo get_template_directory_uri() ?>/assets/scripts/index.bundle.js"></script>

<?php get_footer(); ?>