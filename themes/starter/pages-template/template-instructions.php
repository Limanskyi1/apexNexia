<?php
// Template Name: Instructions
?>
<?php get_header(); ?>
<!-- part subheader-section(_subheader-section.scss)-->
    <? get_template_part( 'part-templates/subheader-section' ); ?>
 <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            let query = new URLSearchParams(location.search)
            let instruction = query.get('inst');
            instruction = instruction.replace(/[^a-zа-я0-9]+/g,'');
            let json = {
                pointcalculator:[{
                    "Инструкция — Калькулятор пунктов": "https://test2.t247.win/manual-point-calculator"
                }],
                positioncalculator:[{
                    "Инструкция – Калькулятор позиций": "https://test2.t247.win/manual-position-calendar"
                }],
                forexcalculator:[{
                    "Инструкция — Калькулятор Forex": "https://test2.t247.win/manual-forex-calculator"
                }],
                tradingsessions:[{
                    "Инструкция — Расписание торговых сессий": "https://test2.t247.win/manual-trading-sessions"
                }],
                coursetable:[{
                    "Инструкция — Таблица курсов": "https://test2.t247.win/manual-course-table"
                }],
                referencelevels:[{
                    "Инструкция — Опорные уровни": "https://test2.t247.win/manual-reference-levels"
                }],
                signals:[{
                    "Инструкция — Сигналы": "https://test2.t247.win/manual-signals"
                }],
                santimentswfx:[{
                    "Инструкция — Индекс рыночных настроений SWFX": "https://test2.t247.win/manual-santiment-swfx"
                }],
                santimentindex:[{
                    "Инструкция — Исторический индекс настроений": "https://test2.t247.win/manual-historical-santiment-index"
                }],
                moversshakers:[{
                    "Инструкция — Дневные Movers & Shakers": "https://test2.t247.win/manual-daily-movers-shakers"
                }],
                marketreview:[{
                    "Инструкция — Обзор рынка": "https://test2.t247.win/manual-market-review"
                }],
                economiccalendar:[{
                    "Инструкция — Экономический календарь": "https://test2.t247.win/widgets-manuals/manual-economic-calendar"
                }],
                interestratecalendar:[{
                    "Инструкция — Календарь процентных ставок": "https://test2.t247.win/widgets-manuals/manual-interest-rate-calendar"
                }],
                holidayscalendar:[{
                    "Инструкция — Календарь государственных праздников": "https://test2.t247.win/widgets-manuals/manual-public-holidays-calendar"
                }]

            };
            console.log(json[instruction][0]);
            let framecontainer = document.getElementById('iframe-container');
            for (let iframe in json[instruction][0]) {
                console.log(iframe, json[instruction][0][iframe]);
                let iframe_html = document.createElement("div");
                iframe_html.innerHTML = `<iframe id="my_iframe" src=${json[instruction][0][iframe]} style="border:none;width:100%;" height="3718">`;
                framecontainer.insertAdjacentElement('beforeend', iframe_html);
            }
        });
    </script>
    <div class="instructions">
        <div class="container" id="iframe-container">

        </div>
    </div>
    

    <style>
        .instructions {
            margin: 100px 0 0;
            background-color: #fff;
        }
    </style>
<?php get_footer() ?>