<?php
/* Template Name: TH
Template Post Type: post, page, cinema
*/
get_header();
?>

<? get_template_part( 'part-templates/part_subheader' ); ?>
<style>
body {
    position: relative;
    background: #ffffff;
}

.th-field {
    background-color: #fff;
    padding: 50px 0;
}

.subheader {
    /* padding-bottom: 80px;
    background: #100F0F; */
    padding-top:96px ;
}
@media (max-width: 1399.98px) {
}
.calc-wrapper {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 0 30px;
}

.th__button {
    /* display: none !important; */
    cursor: pointer;
    box-sizing: border-box;
    max-width: 160px;
    width: 100%;
    padding: 10px 32px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: 600;
    font-size: 15px;
    line-height: 22px;
    color: #FFFFFF;
    background-color: #26B985;
    border-radius: 7px;
    border: 2px solid #26B985;
    transition: all 0.3s ease-in-out;
    margin: 25px 0 60px 0;
}

.th__button:hover {
    background-color: transparent;
    color: #26B985;
}

.th__title {
    font-size: 24px;
    font-weight: 600;
    line-height: 1.2em;
    text-align: center;
    margin: 60px 0 20px 0;
    color: #000;
}

@media (max-width: 1200px) {
    .calc-wrapper {
        grid-template-columns: 1fr;
        grid-gap: 50px 0;
    }
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function(event) {
    let parts = location.href.split('/'),
        lastSegment = parts.pop() || parts.pop(); // handle potential trailing slash
    lastSegment = lastSegment.replace(/[^a-zа-я0-9]+/g, '');

    let json = {
        signals: [{
                "blank": [{
                    "url": "https://test2.t247.win/widgets/tehnicheskie-indikatory/",
                    "height": "450",
                    "instruction": "signals"
                }]
            },
            {
                "blank": [{
                    "url": "https://test2.t247.win/en/widgets/tehnicheskie-indikatory/",
                    "height": "450"
                }]
            }
        ],

        calendars: [{
                "Экономический календарь": [{
                    "url": "https://test2.t247.win/widgets/ekonomicheskij-kalendar/",
                    "height": "800",
                    "instruction": "economiccalendar"
                }],
                "Календарь процентных ставок": [{
                    "url": "https://test2.t247.win/widgets/kalendar-proczentnyh-stavok/",
                    "height": "680",
                    "instruction": "interestratecalendar"
                }],
                "Календарь государственных праздников": [{
                    "url": "https://test2.t247.win/widgets/kalendar-gosudarstvennyh-prazdnikov/",
                    "height": "600",
                    "instruction": "holidayscalendar"
                }]
            },
            {
                "Economic calendar": [{
                    "url": "https://test2.t247.win/en/widgets/ekonomicheskij-kalendar/",
                    "height": "800"
                }],
                "Interest rate calendar": [{
                    "url": "https://test2.t247.win/en/widgets/kalendar-proczentnyh-stavok/",
                    "height": "680"
                }],
                "Public holidays calendar": [{
                    "url": "https://test2.t247.win/en/widgets/kalendar-gosudarstvennyh-prazdnikov/",
                    "height": "600"
                }]
            }
        ],
        economiccalendar: [{
                "Экономический календарь": [{
                    "url": "https://test2.t247.win/widgets/ekonomicheskij-kalendar/",
                    "height": "800",
                    "instruction": "economiccalendar"
                }],
            },
            {
                "Economic calendar": [{
                    "url": "https://test2.t247.win/en/widgets/ekonomicheskij-kalendar/",
                    "height": "800"
                }],
            }
        ],
        informers: [{
                "Расписание торговых сессий Forex": [{
                    "url": "https://test2.t247.win/widgets/raspisanie-torgovyh-sessij-forex/",
                    "height": "650",
                    "instruction": "tradingsessions"
                }],
                "Таблица курсов": [{
                    "url": "https://test2.t247.win/widgets/tablicza-kursov/",
                    "height": "650",
                    "instruction": "coursetable"
                }],
                "Обзор рынка": [{
                    "url": "https://test2.t247.win/widgets/obzor-rynka/",
                    "height": "650",
                    "instruction": "marketreview"
                }],
                "Опорные уровни": [{
                    "url": "https://test2.t247.win/widgets/opornye-urovni/",
                    "height": "320",
                    "instruction": "referencelevels"
                }],
                "Исторический индекс рыночных настроений": [{
                    "url": "https://test2.t247.win/widgets/istoricheskij-indeks-rynochnyh-nastroenij/",
                    "height": "340",
                    "instruction": "santimentindex"
                }],
                "blank": [{
                    "url": "https://test2.t247.win/widgets/dnevnye-movers-shakers/",
                    "height": "600",
                    "instruction": "moversshakers"
                }],
                "blank": [{
                    "url": "https://test2.t247.win/widgets/indeks-rynochnyh-nastroenij/",
                    "height": "800",
                    "instruction": "santimentswfx"
                }]
            },
            {
                "Forex Market Hours": [{
                    "url": "https://test2.t247.win/en/widgets/raspisanie-torgovyh-sessij-forex/",
                    "height": "650"
                }],
                "Forex Cross Rates": [{
                    "url": "https://test2.t247.win/en/widgets/tablicza-kursov/",
                    "height": "650"
                }],
                "Market Summary": [{
                    "url": "https://test2.t247.win/en/widgets/obzor-rynka/",
                    "height": "650"
                }],
                "Pivot points": [{
                    "url": "https://test2.t247.win/en/widgets/opornye-urovni/",
                    "height": "320"
                }],
                "Historical sentiment index": [{
                    "url": "https://test2.t247.win/en/widgets/istoricheskij-indeks-rynochnyh-nastroenij/",
                    "height": "240"
                }],
                "blank": [{
                    "url": "https://test2.t247.win/en/widgets/dnevnye-movers-shakers/",
                    "height": "600"
                }],
                "blank": [{
                    "url": "https://test2.t247.win/en/widgets/indeks-rynochnyh-nastroenij/",
                    "height": "800"
                }]
            }
        ],
        calculators: [{
                "Калькулятор позиций": [{
                    "url": "https://test2.t247.win/widgets/position-size-calculator/",
                    "height": "400",
                    "instruction": "positioncalculator"
                }],
                "Калькулятор пунктов": [{
                    "url": "https://test2.t247.win/widgets/kalkulyator-punktov/",
                    "height": "220",
                    "instruction": "pointcalculator"
                }],
                "Калькулятор Forex": [{
                    "url": "https://test2.t247.win/widgets/foreks-kalkulyator/",
                    "height": "700",
                    "instruction": "forexcalculator"
                }]
            },
            {
                "Position size calculator": [{
                    "url": "https://test2.t247.win/en/widgets/position-size-calculator/",
                    "height": "400"
                }],
                "Pip calculator": [{
                    "url": "https://test2.t247.win/en/widgets/kalkulyator-punktov/",
                    "height": "220"
                }],
                "Forex calculator": [{
                    "url": "https://test2.t247.win/en/widgets/foreks-kalkulyator/",
                    "height": "700"
                }]
            }
        ],

        news: [{
                "blank": [{
                    "url": "https://test2.t247.win/publication-category/novosti/",
                    "height": "1900"
                }]
            },
            {
                "blank": [{
                    "url": "https://test2.t247.win/en/publication-category/novosti/",
                    "height": "1900"
                }]
            }
        ],
        fundamentalanalysis: [{
                "blank": [{
                    "url": "https://test2.t247.win/publication-category/fundamentalnyj-analiz/",
                    "height": "1900"
                }]
            },
            {
                "blank": [{
                    "url": "https://test2.t247.win/en/publication-category/fundamentalnyj-analiz/",
                    "height": "1900"
                }]
            }
        ],
        technicalanalysis: [{
                "blank": [{
                    "url": "https://test2.t247.win/publication-category/tehnicheskij-analiz/",
                    "height": "1900"
                }]
            },
            {
                "blank": [{
                    "url": "https://test2.t247.win/en/publication-category/tehnicheskij-analiz/",
                    "height": "1900"
                }]
            }
        ],
        determiningtrendpotential: [{
                "blank": [{
                    "url": "https://test2.t247.win/publication-category/opredelenie-potenciala-trenda/",
                    "height": "1797"
                }]
            },
            {
                "blank": [{
                    "url": "https://test2.t247.win/en/publication-category/opredelenie-potenciala-trenda/",
                    "height": "1797"
                }]
            }
        ],

        beginnersguide: [{
                "blank": [{
                    "url": "https://test2.t247.win/",
                    "height": "6031"
                }]
            },
            {
                "blank": [{
                    "url": "https://test2.t247.win/en",
                    "height": "6031"
                }]
            }
        ],
        advancedguide: [{
                "blank": [{
                    "url": "https://test2.t247.win/znakomstvo-s-fundamentalnym-analizom/",
                    "height": "3694"
                }]
            },
            {
                "blank": [{
                    "url": "https://test2.t247.win/en/znakomstvo-s-fundamentalnym-analizom/",
                    "height": "3694"
                }]
            }
        ],
        beginnersvods: [{
                "blank": [{
                    "url": "https://test2.t247.win/video-category/nachinayushhim/",
                    "height": "2922"
                }]
            },
            {
                "blank": [{
                    "url": "https://test2.t247.win/en/video-category/beginners/",
                    "height": "2632"
                }]
            }
        ],
        advancedvods: [{
                "blank": [{
                    "url": "https://test2.t247.win/video-category/prodvinutym/",
                    "height": "2647"
                }]
            },
            {
                "blank": [{
                    "url": "https://test2.t247.win/en/video-category/advanced/",
                    "height": "2352"
                }]
            }
        ],
        cryptocurrencyvods: [{
                "blank": [{
                    "url": "https://test2.t247.win/video/kriptovalyuty/",
                    "height": "1010"
                }]

            },
            {
                "blank": [{
                    "url": "https://test2.t247.win/en/video/cryptocurrencies/",
                    "height": "1008"
                }]
            }
        ],
        mt4: [{
                "blank": [{
                    "url": "https://test2.t247.win/video/metatrader-4-en",
                    "height": "1316"
                }]
            },
            {
                "blank": [{
                    "url": "https://test2.t247.win/video/metatrader-4",
                    "height": "1316"
                }]
            }
        ]
    }

    window.test = json;
    let framecontainer = document.getElementById('iframe-container');
    // lang param
    let lang = 0;
    style = "display:block;",
        style_iframe = "border:none;";

 /*
    if (document.documentElement.lang == 'en-US') {
        lang = 1;
        style = "display:none;";
        style_iframe = "border:none;margin-bottom:55px;";
    }
    */ 

    if (document.documentElement.lang != 'ru-RU') {
        lang = 1;
        style = "display:none;";
        style_iframe = "border:none;margin-bottom:55px;";
    }

    for (let iframe in json[lastSegment][lang]) {
        console.log(iframe);
        if (iframe != 'blank') {
            if (iframe == 'Position size calculator' || iframe == 'Pip calculator' || iframe ==
                'Калькулятор позиций' || iframe == 'Калькулятор пунктов') {
                const calcWrapper = document.querySelector('.calc-wrapper');
                let iframe_html = document.createElement("div");

                iframe_html.innerHTML = `<h2 class="th__title">${iframe}</h2>
                                                <iframe src=${json[lastSegment][lang][iframe][0].url} width="100%" height="${json[lastSegment][lang][iframe][0].height}" style="border:none;">
                                                    Ваш браузер не поддерживает плавающие фреймы!
                                                </iframe>
                                                <a class="th__button" style=${style} href=${ '/instructions/?inst=' + json[lastSegment][lang][iframe][0].instruction}>Инструкция</a>
                                                `;
                calcWrapper.insertAdjacentElement('beforeend', iframe_html);
            } else {
                let iframe_html = document.createElement("div");
                iframe_html.innerHTML = `<h2 class="th__title">${iframe}</h2>
                                                <iframe src=${json[lastSegment][lang][iframe][0].url} width="100%" height="${json[lastSegment][lang][iframe][0].height}" style="border:none;">
                                                    Ваш браузер не поддерживает плавающие фреймы!
                                                </iframe>
                                                <a class="th__button" style=${style} href=${ '/instructions/?inst=' + json[lastSegment][lang][iframe][0].instruction}>Инструкция</a>
    
                                                `;
                framecontainer.insertAdjacentElement('beforeend', iframe_html);
            }
        } else {
            let iframe_html = document.createElement("div");
            iframe_html.innerHTML = `<iframe style=${style_iframe} src=${json[lastSegment][lang][iframe][0].url} width="100%" height=${json[lastSegment][lang][iframe][0].height} style="border:none;"></iframe>
                                            `;
            // iframe_html.innerHTML = `<iframe style=${style_iframe} src=${json[lastSegment][lang][iframe][0].url} width="100%" height=${json[lastSegment][lang][iframe][0].height} style="border:none;"></iframe>
            //                                 <a class="th__button" style=${style} href=${ '/instructions/?inst=' + json[lastSegment][lang][iframe][0].instruction}>Инструкция</a>
            //                                 `;
            framecontainer.insertAdjacentElement('beforeend', iframe_html);
        }
    }
});
</script>
<style>

</style>

<div class="th-field ">
    <div class="container iframe-container" id="iframe-container">
        <?
            $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $path_url = parse_url($url, PHP_URL_PATH);

            if ($path_url == "/en/calculators/" || $path_url == "/calculators/" ) {
        ?>
        

        <div class="calc-wrapper"></div>

        <?
            }
        ?>
    </div>
</div>


<div class="th-field ">
    <div class="container iframe-container" id="iframe-container">
        <?
            $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $path_url = parse_url($url, PHP_URL_PATH);

            if ($path_url == "/ru/calculators/" || $path_url == "/calculators/" ) {
        ?>
        

        <div class="calc-wrapper"></div>

        <?
            }
        ?>
    </div>
</div>

<?php get_footer() ?>
