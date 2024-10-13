 <?
/* Template Name: Home Page
Template Post Type: post, page, cinema
*/

get_header();

?>
<? _e('[:ru][:en][:]'); ?>

<main class="content home-page">
     <section class="intro">
        <div class="container">
            <div class="wrapper">
                <div class="intro__info">
                    <h1 class="_anim-items">
                        <? _e('[:ru]
                               [:en]Unlock the Future of Investments
                               [:]'); ?>
                    </h1>
                    <p class="_anim-items">
                        <? _e('[:ru]
                               [:en]Dive into a world where cryptocurrency meets traditional trading. Experience the best of both worlds with Apex Nexia.
                               [:]'); ?>
                    </p>
                    <a href="" class="btn-common _anim-items" data-link="reg">
                        <? _e('[:ru]
                               [:en]Join now
                               [:]'); ?>
                    </a>
                </div>
                 <div class="intro__mockups">
                    <div class="intro__circle _anim-items">
                        <div class="rotate-wrap">
                            <svg viewBox="0 0 480 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="239.921" cy="240" rx="221.61" ry="240" fill="url(#paint0_linear_7_2)" fill-opacity="0.6"/>
                                <path d="M279.992 176.689C334.927 213.462 380.466 253.985 409.692 289.734C424.31 307.616 434.79 324.235 440.348 338.536C445.921 352.872 446.436 364.562 441.661 372.927C436.887 381.292 427.002 386.021 412.669 387.033C398.372 388.043 379.961 385.322 358.655 379.156C316.061 366.831 262.23 340.836 207.295 304.063C152.359 267.289 106.82 226.767 77.5945 191.017C62.9758 173.135 52.4964 156.517 46.9378 142.216C41.3654 127.88 40.8504 116.189 45.6246 107.824C50.3988 99.4592 60.2846 94.7309 74.617 93.7187C88.9139 92.7089 107.325 95.4297 128.631 101.595C171.225 113.921 225.056 139.916 279.992 176.689Z" stroke="#B080FF" stroke-width="3"/>
                                <path d="M207.463 174.361C264.474 141.506 319.741 119.33 362.979 110.009C384.607 105.346 403.14 103.919 417.346 105.926C431.585 107.938 441.173 113.347 445.443 122.036C449.712 130.725 448.498 142.36 442.084 156.273C435.685 170.154 424.238 186.004 408.584 202.826C377.29 236.456 329.432 273.709 272.42 306.563C215.408 339.418 160.142 361.594 116.904 370.915C95.2762 375.578 76.7425 377.005 62.5368 374.998C48.298 372.986 38.7094 367.577 34.4399 358.888C30.1704 350.199 31.3847 338.564 37.7987 324.651C44.1977 310.77 55.645 294.92 71.2984 278.098C102.592 244.468 150.451 207.215 207.463 174.361Z" stroke="#B080FF" stroke-width="3"/>
                                <defs>
                                <linearGradient id="paint0_linear_7_2" x1="18.3104" y1="240" x2="461.531" y2="240" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FDFBFB"/>
                                <stop offset="1" stop-color="#EBEDEE"/>
                                </linearGradient>
                                </defs>
                            </svg>
                            <img data-start-position="0" class="planet" src="<?= get_template_directory_uri() . '/assets/img/home/planet-icon-1.svg'?>" alt="">
                            <img data-start-position="60" class="planet" src="<?= get_template_directory_uri() . '/assets/img/home/planet-icon-2.svg'?>" alt="">
                            <img data-start-position="120" class="planet" src="<?= get_template_directory_uri() . '/assets/img/home/planet-icon-3.svg'?>" alt="">
                            <img data-start-position="180" class="planet" src="<?= get_template_directory_uri() . '/assets/img/home/planet-icon-4.svg'?>" alt="">
                            <img data-start-position="240" class="planet" src="<?= get_template_directory_uri() . '/assets/img/home/planet-icon-2.svg'?>" alt="">
                            <img data-start-position="300" class="planet" src="<?= get_template_directory_uri() . '/assets/img/home/planet-icon-6.svg'?>" alt="">
                            <img class="bitcoin" src="<?= get_template_directory_uri() . '/assets/img/home/bitcoin.svg'?>" alt="">
                        </div>
                    </div>
                    <div class="hand _anim-items">
                        <img src="<?= get_template_directory_uri() . '/assets/img/home/hand.png'?>" alt="">
                    </div>
                 </div>
            </div>
        </div>
     </section>
     <? get_template_part( 'part-templates/part_tapes' ); ?>
     <? get_template_part( 'part-templates/part_adv' ); ?>
    <section class="numbers">
        <div class="container">
            <div class="wrapper">
                <h2 class="numbers__title">
                    <? _e('[:ru]
                           [:en]Numbers That Speak for Us
                           [:]'); ?>
                </h2>
                <div class="numbers__item">
                    <span class="numbers__item-count">
                        <? _e('[:ru]
                               [:en]><span class="income-value" data-end-value="60">60</span>k
                               [:]'); ?>
                    </span>
                    <p>
                        <? _e('[:ru]
                               [:en]Active traders
                               [:]'); ?>
                    </p>
                </div>
                <div class="numbers__item">
                    <span class="numbers__item-count">
                        <? _e('[:ru]
                               [:en]<span class="income-value" data-end-value="100">0</span>
                               [:]'); ?>
                    </span>
                    <p>
                        <? _e('[:ru]
                               [:en]Countries
                               [:]'); ?>
                    </p>
                </div>
                <div class="numbers__item">
                    <span class="numbers__item-count">
                        <? _e('[:ru]
                               [:en]><span class="income-value" data-end-value="60">60</span>k
                               [:]'); ?>
                    </span>
                    <p>
                        <? _e('[:ru]
                               [:en]Active traders
                               [:]'); ?>
                    </p>
                </div>
                <div class="numbers__item">
                    <span class="numbers__item-count">
                        <? _e('[:ru]
                               [:en]><span class="income-value" data-end-value="750">0</span>
                               [:]'); ?>
                    </span>
                    <p>
                        <? _e('[:ru]
                               [:en]Assets
                               [:]'); ?>
                    </p>
                </div>
                <div class="numbers__item">
                    <span class="numbers__item-count">
                        <? _e('[:ru]
                               [:en]<span class="income-value" data-end-value="12">0</span>
                               [:]'); ?>
                    </span>
                    <p>
                        <? _e('[:ru]
                               [:en]Years of experience
                               [:]'); ?>
                    </p>
                </div>
            </div>
        </div>
        <img class="world thumbnail" src="<?= get_template_directory_uri() . '/assets/img/home/world.svg'?>" alt="">
    </section>
    <section class="assets">
        <div class="container">
            <div class="wrapper">
                <div class="assets__info _anim-items">
                    <h2>
                        <? _e('[:ru]
                               [:en]All Popular Assets On One Platform
                               [:]'); ?>
                    </h2>
                    <p>
                        <? _e('[:ru]
                               [:en]A full range of services to meet the needs and goals of every trader. You get access to a variety of trading instruments and market assets to expand your opportunities and diversify your portfolio.
                               [:]'); ?>
                    </p>
                    <a href="" class="btn-common" data-link="reg">
                        <? _e('[:ru]
                               [:en]Join now
                               [:]'); ?>
                    </a>
                </div>
                <div class="assets__cards">
                    <div class="assets__card _anim-items">
                        <div class="assets__card-top">
                            <img src="<?= get_template_directory_uri() . '/assets/img/home/flags.png'?>" alt="">
                            <div class="assets__card-info">
                                <p class="lable">
                                    <? _e('[:ru]
                                           [:en]EUR/USD
                                           [:]'); ?>
                                </p>
                                <p class="statistics">1.08817 <span class="currency">USD</span> <span class="green">+0.34%</span></p>
                            </div>
                        </div>
                        <div class="assets__card-bottom">
                            <h3>
                                <? _e('[:ru]
                                       [:en]Forex
                                       [:]'); ?>
                            </h3>
                            <img src="<?= get_template_directory_uri() . '/assets/img/home/statistics-1.svg'?>" alt="">
                        </div> 
                    </div>
                    <div class="assets__card _anim-items">
                        <div class="assets__card-top">
                            <img src="<?= get_template_directory_uri() . '/assets/img/home/bitcoin.svg'?>" alt="">
                            <div class="assets__card-info">
                                <p class="lable">
                                    <? _e('[:ru]
                                           [:en]Bitcoin
                                           [:]'); ?>
                                </p>
                                <p class="statistics">36862 <span class="currency"> USD</span> <span class="red"> -2.70%</span></p>
                            </div>
                        </div>
                        <div class="assets__card-bottom">
                            <h3>
                                <? _e('[:ru]
                                       [:en]Cryptocurrency
                                       [:]'); ?>
                            </h3>
                            <img src="<?= get_template_directory_uri() . '/assets/img/home/statistics-2.svg'?>" alt="">
                        </div> 
                    </div>
                    <div class="assets__card _anim-items">
                        <div class="assets__card-top">
                            <img src="<?= get_template_directory_uri() . '/assets/img/home/dax.svg'?>" alt="">
                            <div class="assets__card-info">
                                <p class="lable">
                                    <? _e('[:ru]
                                           [:en]DAX
                                           [:]'); ?>
                                </p>
                                <p class="statistics">15832 <span class="currency">EUR</span> <span class="green"> +0.54%</span></p>
                            </div>
                        </div>
                        <div class="assets__card-bottom">
                            <h3>
                                <? _e('[:ru]
                                       [:en]Indices
                                       [:]'); ?>
                            </h3>
                            <img src="<?= get_template_directory_uri() . '/assets/img/home/statistics-3.svg'?>" alt="">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="adv">
        <div class="container">
            <div class="wrapper">
                <div class="adv__mockups _anim-items">
                    <img class="phone" src="<?= get_template_directory_uri() . '/assets/img/home/adv-mockup-12.png'?>" alt="">
                    <img class="phone" src="<?= get_template_directory_uri() . '/assets/img/home/adv-mockup-21.webp'?>" alt="">
                    <div class="adv-card">
                        <div class="adv-card-lable">
                            <img src="<?= get_template_directory_uri() . '/assets/img/home/adv-card-icon-1.svg'?>" alt="">
                            <span>
                                <? _e('[:ru]
                                       [:en]Assets
                                       [:]'); ?>
                            </span>
                        </div>
                        <span>>
                            <span class="income-value" data-end-value="750">0</span>
                        </span>
                    </div>
                    <div class="adv-card">
                        <div class="adv-card-lable">
                            <img src="<?= get_template_directory_uri() . '/assets/img/home/adv-card-icon-2.svg'?>" alt="">
                            <span>
                                <? _e('[:ru]
                                       [:en]Users
                                       [:]'); ?>
                            </span>
                        </div>
                        <span>>
                            <span class="income-value" data-end-value="60">0</span>k
                        </span>
                    </div>
                    <div class="adv-card">
                        <div class="adv-card-lable">
                            <img src="<?= get_template_directory_uri() . '/assets/img/home/adv-card-icon-3.svg'?>" alt="">
                            <span>
                                <? _e('[:ru]
                                       [:en]BTC
                                       [:]'); ?>
                            </span>
                        </div>
                        <img src="<?= get_template_directory_uri() . '/assets/img/home/lines.svg'?>" alt="">
                    </div>
                </div>
                <div class="adv__items">
                    <div class="adv__item">
                        <img src="<?= get_template_directory_uri() . '/assets/img/home/yes.svg'?>" alt="">
                        <div class="adv__item-info">
                            <h3>
                                <? _e('[:ru]
                                       [:en]High speed of execution
                                       [:]'); ?>
                            </h3>
                            <p>
                                <? _e('[:ru]
                                       [:en]With our platform, you can expect instant trade execution, minimizing sliding and preventing losses.
                                       [:]'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="adv__item">
                        <img src="<?= get_template_directory_uri() . '/assets/img/home/yes.svg'?>" alt="">
                        <div class="adv__item-info">
                            <h3>
                                <? _e('[:ru]
                                       [:en]Flexible settings
                                       [:]'); ?>
                            </h3>
                            <p>
                                <? _e('[:ru]
                                       [:en]With our platform, you can expect instant trade execution, minimizing sliding and preventing losses.
                                       [:]'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="adv__item">
                        <img src="<?= get_template_directory_uri() . '/assets/img/home/yes.svg'?>" alt="">
                        <div class="adv__item-info">
                            <h3>
                                <? _e('[:ru]
                                       [:en]Safety
                                       [:]'); ?>
                            </h3>
                            <p>
                                <? _e('[:ru]
                                       [:en]Our servers provide a high level of protection for your data and funds using advanced encryption methods and two-factor authentication.
                                       [:]'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <? get_template_part( 'part-templates/part_steps' ); ?>
</main>

<? get_footer(); ?>
