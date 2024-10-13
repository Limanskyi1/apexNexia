<?php
/* Template Name: About-us
*/
get_header();  ?>

<? _e('[:ru][:en][:]'); ?>

<main class="content about-page">
    <section class="about">
        <div class="container">
            <div class="wrapper">
                <div class="about__img _anim-items">
                    <img src="<?= get_template_directory_uri() . '/assets/img/about/about_logo.png'?>" alt="">
                </div>
                <div class="about__info">
                    <h2 class="_anim-items">
                        <? _e('[:ru]
                               [:en]About Us
                               [:]'); ?>
                    </h2>
                    <p class="_anim-items">
                        <? _e('[:ru]
                               [:en]Our company was created with one simple goal: to provide investors with a reliable tool for effective trading on the stock market.
                               Over the course of 5 years, we have gone from a small startup to one of the key players on the stock market. At each stage of our development we set ambitious goals, and thanks to a team of professionals, loyalty to our principles and the desire for innovation, we have reached the current heights.
                               [:]'); ?>
                    </p>
                    <a href="" class="btn-common _anim-items" data-link="reg">
                        <? _e('[:ru]
                               [:en]Join now
                               [:]'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <? get_template_part( 'part-templates/part_tapes' ); ?>
    <section class="desc">
        <div class="container">
            <div class="wrapper">
                <div class="desc__info">
                    <h3 class="_anim-items">
                        <? _e('[:ru]
                               [:en]Welcome to Apex Nexia
                               [:]'); ?>
                    </h3>
                    <div class="desc__item _anim-items">
                        <img src="<?= get_template_directory_uri() . '/assets/img/home/yes.svg'?>" alt="">
                        <p>
                            <? _e('[:ru]
                                       [:en]It’s all about trading. Because that’s what we do. Trading is at the core of our business. We are dedicated to providing traders with the tools, resources, and support they need to navigate the dynamic world of financial markets.
                                       [:]'); ?>
                        </p>
                    </div>
                    <div class="desc__item _anim-items">
                        <img src="<?= get_template_directory_uri() . '/assets/img/home/yes.svg'?>" alt="">
                        <p>
                            <? _e('[:ru]
                                       [:en]We facilitate a one stop trading experience for retail and institutional clients, providing access to global markets and a broad range of asset classes and tradeable instruments. 
                                       [:]'); ?>
                        </p>
                    </div>
                </div>
                <div class="desc__img">
                    <img class="" src="<?= get_template_directory_uri() . '/assets/img/about/desc__img.webp'?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="mission">
        <div class="container">
            <h2 class="mission__title">
                <? _e('[:ru]
                       [:en]Our Mission and Vision
                       [:]'); ?>
            </h2>
            <div class="wrapper">
                <div class="mission__item">
                    <h3>
                        <? _e('[:ru]
                               [:en]Mission
                               [:]'); ?>
                    </h3>
                    <p>
                        <? _e('[:ru]
                               [:en]At Apex Nexia, our core mission is to empower every trader, regardless of their experience level. We strive to democratize the trading landscape by providing advanced tools, comprehensive educational resources, and unwavering support.
                               [:]'); ?>
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 481 228" fill="none">
                        <path d="M1 8C1 3.85787 4.35787 0.5 8.5 0.5H472.5C476.642 0.5 480 3.85786 480 8V208.964C480 213.119 476.621 216.482 472.466 216.464L262.052 215.512C260.29 215.504 258.568 216.044 257.126 217.057L245.193 225.442C242.661 227.222 239.296 227.263 236.721 225.546L223.809 216.939C222.402 216 220.747 215.503 219.056 215.511L8.53394 216.464C4.37858 216.482 1 213.119 1 208.964V8Z" stroke="#B080FF"/>
                    </svg>
                </div>
                <div class="mission__item">
                    <h3>
                        <? _e('[:ru]
                               [:en]Vision
                               [:]'); ?>
                    </h3>
                    <p>
                        <? _e('[:ru]
                               [:en]We envision a future where trading is not just reserved for the elite but is accessible and rewarding for everyone. As we continue to innovate and evolve, our focus remains on fostering an inclusive trading community. 
                               [:]'); ?>
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="480" height="228" viewBox="0 0 480 228" fill="none">
                        <path d="M479.5 220C479.5 224.142 476.142 227.5 472 227.5L8 227.5C3.85788 227.5 0.5 224.142 0.5 220L0.5 19.0363C0.5 14.8809 3.87857 11.5176 8.03394 11.5364L218.448 12.4885C220.21 12.4964 221.932 11.9564 223.374 10.9432L235.307 2.55766C237.839 0.77829 241.204 0.737 243.779 2.45372L256.691 11.0615C258.098 11.9996 259.753 12.4966 261.444 12.489L471.966 11.5364C476.121 11.5176 479.5 14.8809 479.5 19.0363L479.5 220Z" stroke="#B080FF"/>
                    </svg>
                </div>
                <div class="mission__item">
                    <h3>
                        <? _e('[:ru]
                               [:en]Goal
                               [:]'); ?>
                    </h3>
                    <p>
                        <? _e('[:ru]
                               [:en]Our primary goal is to consistently elevate the trading experience, ensuring that our platform remains cutting-edge, reliable, and user-friendly. 
                               [:]'); ?>
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 481 228" fill="none">
                        <path d="M1 8C1 3.85787 4.35787 0.5 8.5 0.5H472.5C476.642 0.5 480 3.85786 480 8V208.964C480 213.119 476.621 216.482 472.466 216.464L262.052 215.512C260.29 215.504 258.568 216.044 257.126 217.057L245.193 225.442C242.661 227.222 239.296 227.263 236.721 225.546L223.809 216.939C222.402 216 220.747 215.503 219.056 215.511L8.53394 216.464C4.37858 216.482 1 213.119 1 208.964V8Z" stroke="#B080FF"/>
                    </svg>
                </div>
                <span class="border gsap-anim"></span>
            </div>
        </div>
        <img class="mission_bg thumbnail" src="<?= get_template_directory_uri() . '/assets/img/about/mission_bg.svg'?>" alt="">
    </section>
    <? get_template_part( 'part-templates/part_adv' ); ?>
    <? get_template_part( 'part-templates/part_steps' ); ?>
</main>

<? get_footer(); ?>
