<!-- Load header -->
<?php get_header(); ?>
    <body <?php body_class(''); ?>
        <main>
            <section class="hero">
                <!-- Policy and cookies popup START -->
                <div class="hero__policy-container">
                    <p class="hero__policy-txt">Przemeklegierski.pl korzysta z plików cookies. Korzystając ze strony wyrażasz zgodę na używanie cookies oraz na: <a href="https://przemeklegierski.pl/polityka-prywatnosci/" class="hero__policy-link">Politykę Prywatności.</a><i class="fas fa-window-close hero__policy-btn"></i></p>
                    
                </div>
                <!-- Policy and cookies popup END -->

                <!-- HAMBURGER MENU -->
                <!-- RWD FULL SCRN MENU  -->
                <div class="rwd__menu" id="menu">
                <i class="fas fa-times rwd__close" id="close"></i>
                <nav class="rwd__nav">
                    <ul class="rwd__ul">
                    <li class="rwd__li-first">
                        <a href="https://przemeklegierski.pl#omnie" class="rwd__a" id="link1">O mnie</a>
                    </li>
                    <li class="rwd__li">
                        <a href="#" class="rwd__a" id="slubne">Ślubne</a>
                        <!-- Dropdown -->
                        <ul class="hamburger__dropdown1__ul" id="slubneDropdown">
                                <li class="hamburger__dropdown1__li hamburger__dropdown1__li-first">
                                    <a class="hamburger__dropdown1__li-link" href="https://przemeklegierski.pl/slubne-koscielne/">Kościelne</a>
                                </li>
                                <li class="hamburger__dropdown1__li">
                                    <a class="hamburger__dropdown1__li-link" href="https://przemeklegierski.pl/slubne-cywilne/">Cywilne</a>
                                </li>
                                <li class="hamburger__dropdown1__li">
                                    <a class="hamburger__dropdown1__li-link" href="https://przemeklegierski.pl/slubne-narzeczenskie/">Narzeczeńskie</a>
                                </li>
                                <li class="hamburger__dropdown1__li">
                                    <a class="hamburger__dropdown1__li-link" href="https://przemeklegierski.pl/slubne-wideo/">Wideo</a>
                                </li>
                            </ul>
                            <!-- Dropdown END -->
                    </li>
                    <li class="rwd__li">
                        <a href="#" class="rwd__a" id="dlafirm">Dla firm</a>
                        <!-- Dropdown -->
                        <ul class="hamburger__dropdown2__ul" id="dlafirmDropdown">
                                <li class="hamburger__dropdown2__li hamburger__dropdown2__li-first">
                                <a class="hamburger__dropdown2__li-link" href="https://przemeklegierski.pl/dlafirm-konferencje/">Konferencje</a>
                                </li>
                                <li class="hamburger__dropdown2__li">
                                    <a class="hamburger__dropdown2__li-link" href="https://przemeklegierski.pl/dlafirm-wnetrza/">Wnętrza</a>
                                </li>
                                <li class="hamburger__dropdown2__li">
                                    <a class="hamburger__dropdown2__li-link" href="https://przemeklegierski.pl/dlafirm-biznesowe/">Biznesowe</a>
                                </li>
                                <li class="hamburger__dropdown2__li">
                                    <a class="hamburger__dropdown2__li-link" href="https://przemeklegierski.pl/dlafirm-wideo/">Wideo</a>
                                </li>
                            </ul>
                        <!-- Dropdown END -->
                    </li>
                    <li class="rwd__li">
                        <a href="#" class="rwd__a" id="okazjonalne">Okazjonalne</a>
                        <!-- Dropdown -->
                        <ul class="hamburger__dropdown3__ul" id="okazjonalneDropdown">
                                <li class="hamburger__dropdown3__li hamburger__dropdown3__li-first">
                                <a class="hamburger__dropdown3__li-link" href="https://przemeklegierski.pl/okazjonalne-wydarzenia/">Wydarzenia</a>
                                </li>
                                <li class="hamburger__dropdown3__li">
                                    <a class="hamburger__dropdown3__li-link" href="https://przemeklegierski.pl/okazjonalne-studniowki/">Studniówki</a>
                                </li>
                                <li class="hamburger__dropdown3__li">
                                    <a class="hamburger__dropdown3__li-link" href="https://przemeklegierski.pl/okazjonalne-rodzinne/">Rodzinne</a>
                                </li>
                            </ul>
                        <!-- Dropdown END -->
                    </li>
                    <li class="rwd__li">
                        <a href="#" class="rwd__a" id="wideo">Wideo</a>
                        <!-- Dropdown -->
                        <ul class="hamburger__dropdown4__ul" id="wideoDropdown">
                                <li class="hamburger__dropdown4__li hamburger__dropdown4__li-first">
                                <a class="hamburger__dropdown4__li-link" href="https://przemeklegierski.pl/wideo-teledyski/">Teledyski</a>
                                </li>
                                <li class="hamburger__dropdown4__li">
                                    <a class="hamburger__dropdown4__li-link" href="https://przemeklegierski.pl/wideo-montaz/">Montaż</a>
                                </li>
                            </ul>
                        <!-- Dropdown END -->
                    </li>
                    <li class="rwd__li">
                    <a href="https://przemeklegierski.pl#kontakt" class="rwd__a" id="link2">Kontakt</a>
                    </li>
                    </ul>
                </nav>
                </div>

                <!-- RWD FULL SCRN MENU  -->
                <i class="fas fa-bars rwd__open" id="open"></i>
                <!-- RWD FULL SCRN MENU  -->

                <!-- HAMBURGER MENU END-->


                <!-- The video -->
                <!-- autoplay muted loop -->
                <div class="video__container">
                    <video autoplay muted loop id="myVideo">
                        <source src="<?php echo get_template_directory_uri(); ?>/img/wideo/bg_movie_compressed.mp4" type="video/mp4">
                    </video>
                </div>
                
                <!-- The video END-->

                <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/loga/logo.png" alt="Przemysław Legierski Logo" class="hero__logo"> -->

                <div class="hero__logo">
                    <h1 class="hero__logo-up">Przemek Legierski</h1>
                    <span class="hero__logo-down">Film i Fotografia</span>
                </div>
                
                <nav class="hero__nav">
                    <ul class="hero__ul">
                        <li class="hero__li hero__li-first">
                           <a class="hero__li-link" href="https://przemeklegierski.pl#omnie">O mnie</a>
                        </li>
                        <li class="hero__li">
                            <a class="hero__li-link" href="https://przemeklegierski.pl#weddings">Ślubne</a>
                             <!-- Dropdown -->
                            <ul class="hero__dropdown__ul">
                                <li class="hero__dropdown__li hero__dropdown__li-first">
                                <a class="hero__dropdown__li-link" href="https://przemeklegierski.pl/slubne-koscielne/">Kościelne</a>
                                </li>
                                <li class="hero__dropdown__li">
                                    <a class="hero__dropdown__li-link" href="https://przemeklegierski.pl/slubne-cywilne/">Cywilne</a>
                                </li>
                                <li class="hero__dropdown__li">
                                    <a class="hero__dropdown__li-link" href="https://przemeklegierski.pl/slubne-narzeczenskie">Narzeczeńskie</a>
                                </li>
                                <li class="hero__dropdown__li">
                                    <a class="hero__dropdown__li-link" href="https://przemeklegierski.pl/slubne-wideo/">Wideo</a>
                                </li>
                            </ul>
                            <!-- Dropdown END -->
                        </li>
                        <li class="hero__li">
                            <a class="hero__li-link" href="https://przemeklegierski.pl#business">Dla firm</a>
                             <!-- Dropdown -->
                             <ul class="hero__dropdown__ul">
                                <li class="hero__dropdown__li hero__dropdown__li-first">
                                <a class="hero__dropdown__li-link" href="https://przemeklegierski.pl/dlafirm-konferencje/">Konferencje</a>
                                </li>
                                <li class="hero__dropdown__li">
                                    <a class="hero__dropdown__li-link" href="https://przemeklegierski.pl/dlafirm-wnetrza/">Wnętrza</a>
                                </li>
                                <li class="hero__dropdown__li">
                                    <a class="hero__dropdown__li-link" href="https://przemeklegierski.pl/dlafirm-biznesowe/">Biznesowe</a>
                                </li>
                                <li class="hero__dropdown__li">
                                    <a class="hero__dropdown__li-link" href="https://przemeklegierski.pl/dlafirm-wideo/">Wideo</a>
                                </li>
                            </ul>
                            <!-- Dropdown END -->
                        </li>
                        <li class="hero__li">
                            <a class="hero__li-link" href="https://przemeklegierski.pl#occasional">Okazjonalne</a>
                            <!-- Dropdown -->
                            <ul class="hero__dropdown__ul">
                                <li class="hero__dropdown__li hero__dropdown__li-first">
                                <a class="hero__dropdown__li-link" href="https://przemeklegierski.pl/okazjonalne-wydarzenia/">Wydarzenia</a>
                                </li>
                                <li class="hero__dropdown__li">
                                    <a class="hero__dropdown__li-link" href="https://przemeklegierski.pl/okazjonalne-studniowki/">Studniówki</a>
                                </li>
                                <li class="hero__dropdown__li">
                                    <a class="hero__dropdown__li-link" href="https://przemeklegierski.pl/okazjonalne-rodzinne/">Rodzinne</a>
                                </li>
                            </ul>
                            <!-- Dropdown END -->
                        </li>
                        <li class="hero__li">
                            <a class="hero__li-link" href="https://przemeklegierski.pl#wideo_offer">Wideo</a>
                            <!-- Dropdown -->
                            <ul class="hero__dropdown__ul">
                                <li class="hero__dropdown__li hero__dropdown__li-first">
                                <a class="hero__dropdown__li-link" href="https://przemeklegierski.pl/wideo-teledyski/">Teledyski</a>
                                </li>
                                <li class="hero__dropdown__li">
                                    <a class="hero__dropdown__li-link" href="https://przemeklegierski.pl/wideo-montaz/">Montaż</a>
                                </li>
                            </ul>
                            <!-- Dropdown END -->
                        </li>
                        <li class="hero__li">
                            <a class="hero__li-link" href="https://przemeklegierski.pl#kontakt">Kontakt</a>
                        </li>
                    </ul>
                </nav>
            </section>

            <section class="about" id="omnie">
                <div class="about__pattern"></div>
                <div class="about__square"></div>

                <div class="about__left">
                    <h2 class="about__h2">Przemysław <span class="h2-color">Legierski</span></h2>
                    <p class="about__paragraph">Moja przygoda z filmem i fotografią zaczęła się już w okresie licealnym. Początkowo uwieczniałem majestat przyrody, jednak chciałem opowiadać bardziej złożone historie. Pokazać w nich człowieka i
                    piękno jego emocji.</p>
                    <p class="about__paragraph">Dlatego od paru lat zajmuję się fotografią ślubną, narzeczeńską i plenerową. Pojawiam się też na koncertach, konferencjach i wszędzie tam, gdzie mogę uchwycić was w waszych najcudowniejszych chwilach; z uśmiechem na ustach i radością w sercu.</p>
                    <a href="#contact" class="about__paragraph about__paragraph-last">Zapraszam serdecznie do kontaktu!</a>
                    <div class="about__socialm">
                        <a target="_blank" class="about__social-link about__social-link--first" href="https://www.youtube.com/user/PredalienCA">
                            <i class="about__icon fab fa-youtube"></i>
                        </a>
                        <a target="_blank" class="about__social-link" href="https://www.facebook.com/PrzemekLegierskiFotografia/">
                            <i class="about__icon fab fa-facebook-square"></i>
                        </a>
                        <a target="_blank" class="about__social-link" href="https://www.instagram.com/przemeklegierski/">
                            <i class="about__icon fab fa-instagram-square"></i>
                        </a>
                    </div>
                </div>

                <div class="about__right">
                    <!-- Responsive Images -->
                    <picture>
                            <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4K/przemek_legierski_omnie.jpg">
                            <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/przemek_legierski_omnie.png">
                            <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                            Poniżej to *smartfony* -->
                            <img class="about__img" src="<?php echo get_template_directory_uri(); ?>/img/fhd/przemek_legierski_omnie.png" alt="Zdjęcie Przemka Legierskiego">
                    </picture>
                    <!-- Responsive Images -->
                </div>
            </section>

            <section class="coop">
                <div class="coop__ornament"></div>
                <h2 class="coop__h2">Współpracuję <span class="h2-color">z:</span></h2>

                <div class="coop__logo-container">
                    <a target="_blank" href="https://www.facebook.com/karolinabetterfly/" class="coop__logo-link coop__logo-link-first">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/loga/betterfly__new.png" alt="Logo firmowe" class="coop__logo-img">
                    </a>
                    <a target="_blank" href="https://cyberwolfdesign.com/" class="coop__logo-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/loga/cyberwolfdesign.png" class="coop__logo-img">
                    </a>
                    <a target="_blank" href="https://www.facebook.com/issueartworks/" class="coop__logo-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/loga/issue__new.png" alt="Logo firmowe" class="coop__logo-img">
                    </a>
                    <a target="_blank" href="https://infobeskidy.eu/" class="coop__logo-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/loga/beskidy_new.png" alt="Logo firmowe" class="coop__logo-img">
                    </a>
                </div>
            </section>

            <section class="weddings" id="weddings">
                <div class="weddings__pattern"></div>
                <div class="weddings__ornament"></div>

                <div class="weddings__left">
                    <h2 class="weddings__h2">Usługi <span class="h2-color">Ślubne</span></h2>
                    <p class="weddings__paragraph">Reportaż wykonuję od przygotowań aż po oczepiny. Sesja może się odbyć w dniu ślubu bądź w innym, ustalonym wcześniej terminie. Obsługuję śluby plenerowe, cywilne i tradycyjne.</p>
                </div>

                <div class="weddings__right">
                    <div class="weddings__gallery-1">
                        <!-- Zmienic na proodukcji do: href="/uslugi-slubne-cywilne/" -->
                        <a href="https://przemeklegierski.pl/slubne-cywilne/" class="weddings__cywilne">
                            <!-- Responsive Images -->
                            <picture>
                                    <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4K/4k__cywilne.png">
                                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__cywilne.png">
                                    <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                                    Poniżej to *smartfony* -->
                                    <img class="weddings__img-small" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__cywilne.png" alt="Usługi Cywilne">
                            </picture>
                            <!-- Responsive Images -->
                            <h3 class="weddings__h3">Cywilne</h3>
                        </a>

                        <a href="https://przemeklegierski.pl/slubne-narzeczenskie/" class="weddings__narzeczenskie">
                            <!-- Responsive Images -->
                            <picture>
                                    <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4K/4k__narzeczenskie.png">
                                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__narzeczenskie.png">
                                    <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                                    Poniżej to *smartfony* -->
                                    <img class="weddings__img-big" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__narzeczenskie.png" alt="Usługi Narzeczeńskie">
                            </picture>
                            <!-- Responsive Images -->
                            <h3 class="weddings__h3">Narzeczeńskie</h3>
                        </a>
                    </div>

                    <div class="weddings__gallery-2">
                        <a href="https://przemeklegierski.pl/slubne-koscielne/" class="weddings__koscielne">
                            <!-- Responsive Images -->
                            <picture>
                                    <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4K/4k__koscielne.png">
                                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__koscielne.png">
                                    <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                                    Poniżej to *smartfony* -->
                                    <img class="weddings__img-big" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__koscielne.png" alt="Usługi Kościelne">
                            </picture>
                            <!-- Responsive Images -->
                            <h3 class="weddings__h3">Kościelne</h3>
                        </a>

                        <a href="https://przemeklegierski.pl/slubne-wideo/" class="weddings__wideo">
                            <!-- Responsive Images -->
                            <picture>
                                    <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4K/4k__wideo.png">
                                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__wideo.png">
                                    <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                                    Poniżej to *smartfony* -->
                                    <img class="weddings__img-small" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__wideo.png" alt="Usługi Wideo">
                            </picture>
                            <!-- Responsive Images -->
                            <h3 class="weddings__h3">Wideo</h3>
                        </a>
                    </div>
                </div>
            </section>

            <section class="business" id="business">
                <div class="business__pattern"></div>
                <div class="business__ornament"></div>

                <div class="business__right">
                    <h2 class="business__h2">Usługi <span class="h2-color">Dla Firm</span></h2>
                    <p class="business__paragraph">Zdjęcia wnętrz, sesje biznesowe na twoją stronę bądź portale społecznościowe, relacje z konferencji i dużo więcej.</p>
                </div>

                <div class="business__left">
                    <div class="business__gallery-1">
                        <a href="https://przemeklegierski.pl/dlafirm-konferencje/" class="business__cywilne">
                            <!-- Responsive Images -->
                            <picture>
                                    <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4K/4k_konferencje.png">
                                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd_konferencje.png">
                                    <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                                    Poniżej to *smartfony* -->
                                    <img class="business__img-small" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd_konferencje.png" alt="Konferencje">
                            </picture>
                            <!-- Responsive Images -->
                            <h3 class="business__h3">Konferencje</h3>
                        </a>

                        <a href="https://przemeklegierski.pl/dlafirm-biznesowe/" class="business__narzeczenskie">
                            <!-- Responsive Images -->
                            <picture>
                                    <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4K/4k_biznesowe.png">
                                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd_biznesowe.png">
                                    <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                                    Poniżej to *smartfony* -->
                                    <img class="business__img-big" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd_biznesowe.png" alt="Usługi Biznesowe">
                            </picture>
                            <!-- Responsive Images -->
                            <h3 class="business__h3">Biznesowe</h3>
                        </a>
                    </div>

                    <div class="business__gallery-2">
                        <a href="https://przemeklegierski.pl/dlafirm-wnetrza/" class="business__koscielne">
                            <!-- Responsive Images -->
                            <picture>
                                    <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4K/4k_wnetrza.png">
                                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd_wnetrza.png">
                                    <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                                    Poniżej to *smartfony* -->
                                    <img class="business__img-big" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd_wnetrza.png" alt="Wnętrza">
                            </picture>
                            <!-- Responsive Images -->
                            <h3 class="business__h3">Wnętrza</h3>
                        </a>

                        <a href="https://przemeklegierski.pl/dlafirm-wideo/" class="business__wideo">
                            <!-- Responsive Images -->
                            <picture>
                                    <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4K/4k_wideo2.png">
                                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd_wideo2.png">
                                    <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                                    Poniżej to *smartfony* -->
                                    <img class="business__img-small" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd_wideo2.png" alt="Wideo dla firm">
                            </picture>
                            <!-- Responsive Images -->
                            <h3 class="business__h3">Wideo</h3>
                        </a>
                    </div>
                </div>
            </section>

            <section class="occasional" id="occasional">

                <div class="occasional__up">
                    <div class="occasional__ornament"></div>
                    <div class="occasional__pattern"></div>
                    <div class="occasional__pattern-empty">
                        <h2 class="occasional__h2">Usługi <span class="h2-color">Okazjonalne</span></h2>
                        <p class="occasional__paragraph">Biegi terenowe, występy regionalne, chrzty, komunie i każde inne wydarzenie, które waszym zdaniem jest warte uwiecznienia.
                        </p>
                    </div>
                </div>

                <div class="ocassional__gallery">
                    <a href="https://przemeklegierski.pl/okazjonalne-wydarzenia/" class="ocassional__link ocassional__link-first">
                        <!-- Responsive Images -->
                        <picture>
                                    <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4K/4k__wydarzenia.png">
                                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__wydarzenia.png">
                                    <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                                    Poniżej to *smartfony* -->
                                    <img class="occasional__img" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__wydarzenia.png" alt="Wydarzenia">
                        </picture>
                        <!-- Responsive Images -->
                        <h3 class="occasional__h3">Wydarzenia</h3>
                    </a>
                    <a href="https://przemeklegierski.pl/okazjonalne-studniowki/" class="ocassional__link">
                        <!-- Responsive Images -->
                        <picture>
                                    <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4K/4k__studniowki.png">
                                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__studniowki.png">
                                    <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                                    Poniżej to *smartfony* -->
                                    <img class="occasional__img" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__studniowki.png" alt="Studniówki">
                        </picture>
                        <!-- Responsive Images -->
                        <h3 class="occasional__h3-2">Studniówki</h3>
                    </a>
                    <a href="https://przemeklegierski.pl/okazjonalne-rodzinne/" class="ocassional__link">
                        <!-- Responsive Images -->
                        <picture>
                                    <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4K/4k__rodzinne.png">
                                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__rodzinne.png">
                                    <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                                    Poniżej to *smartfony* -->
                                    <img class="occasional__img" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__rodzinne.png" alt="Sesje rodzinne">
                        </picture>
                        <!-- Responsive Images -->
                        <h3 class="occasional__h3-3">Rodzinne</h3>
                    </a>
                </div>
            </section>

            <section class="wideo_offer" id="wideo_offer">
                <div class="wideo_offer__pattern"></div>
                <div class="wideo_offer__ornament"></div>
                <div class="wide_offer__separator"></div>

                <div class="wideo_offer__left">
                    <h2 class="wideo_offer__h2">Nagrania <span class="h2-color">Wideo</span></h2>
                    <p class="wideo_offer__paragraph">Oferuję produkcję teledysków ślubnych i muzycznych, filmów krótkometrażowych, reklamowych, oraz montaż dostarczonego przez klienta materiału.</p>
                </div>

                <div class="wideo_offer__right">
                    <a href="https://przemeklegierski.pl/wideo-teledyski/" class="wideo_offer__link">
                        <!-- Responsive Images -->
                        <picture>
                                    <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4K/4k__teledyski2.png">
                                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__teledyski2.png">
                                    <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                                    Poniżej to *smartfony* -->
                                    <img class="wideo__img" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__teledyski2.png" alt="Teledyski">
                        </picture>
                        <!-- Responsive Images -->
                        <h3 class="wideo_offer__h3">Teledyski</h3>
                    </a>
                    <a href="https://przemeklegierski.pl/wideo-montaz/" class="wideo_offer__link">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__montaz.png" alt="Usługi Wideo" class="wideo__img"> -->
                        <!-- Responsive Images -->
                        <picture>
                                    <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4K/4k__montaz.png">
                                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__montaz.png">
                                    <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                                    Poniżej to *smartfony* -->
                                    <img class="wideo__img" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__montaz.png" alt="Montaż">
                        </picture>
                        <!-- Responsive Images -->
                        <h3 class="wideo_offer__h3-2 wideo_offer__h3-last">Montaż</h3>
                    </a>
                </div>
            </section>

            <section class="contact" id="kontakt">
                <div class="contact__pattern"></div>
                <div class="contact__ornament"></div>

                <div class="contact__left">
                    <h2 class="contact__h2">Kontakt</h2>
                    <div class="contact__phone-mail">
                        <div class="contact__phone">
                            <span class="phone-left">Telefon:</span>
                            <span class="phone-right">728-048-873</span>
                        </div>
                        <div class="contact__mail">
                            <span class="mail-left">E-mail:</span>
                            <span class="mail-right">kontakt@przemeklegierski.pl</span>
                        </div>
                    </div>

                    <div class="wideo__socialm">
                        <a target="_blank" class="wideo__social-link wideo__social-link--first" href="https://www.youtube.com/user/PredalienCA">
                            <i class="wideo__icon fab fa-youtube"></i>
                        </a>
                        <a target="_blank" class="wideo__social-link" href="https://www.facebook.com/PrzemekLegierskiFotografia/">
                            <i class="wideo__icon fab fa-facebook-square"></i>
                        </a>
                        <a target="_blank" class="wideo__social-link" href="https://www.instagram.com/przemeklegierski/">
                            <i class="wideo__icon fab fa-instagram-square"></i>
                        </a>
                    </div>
                </div>

                <div class="contact__right">
                    <!-- Contact form in PHP START -->
                    <?php echo do_shortcode( '[contact-form-7 id="261" title="Formularz 1"]' ); ?>
                </div>

                <p class="contact__copy">
                © <?php echo date("Y"); ?> Przemysław Legierski. Wszelkie prawa zastrzeżone. | Zaprojektowane przez <a target="_blank" href="https://cyberwolfdesign.com/" class="contact__copy-link">Cyber Wolf Design.</a>
                </p>
            </section>


        </main>


<!-- Load footer  -->
<?php get_footer(); ?>
