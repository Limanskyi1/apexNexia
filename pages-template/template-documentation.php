<?php
/*
    Template Name: Documentation
*/

get_header();

?>

<main class="docs-page" style="overflow: hidden;">

    <? get_template_part( 'part-templates/part_subheader' ); ?>

    <!-- docs-section -->
    <section class="docs">
        <div class="container">
            <div class="docs__inner">
                <div class="tabs">
                    <div class="tabs__nav">
                        <div class="tabs-nav__item is-active" data-tab-name="legal">
                            <?= _e('[:ru]Юридическая Информация[:en]Legal Information[:]'); ?></div>
                        <div class="tabs-nav__item" data-tab-name="disclaimer">
                            <?= _e('[:ru]Отказ от Ответственности[:en]Disclaimer[:]'); ?></div>
                        <div class="tabs-nav__item" data-tab-name="client-agreements">
                            <?= _e('[:ru]Клиентское соглашение [:en]Client Agreements[:]'); ?></div>
                        <div class="tabs-nav__item" data-tab-name="regulations">
                            <?= _e('[:ru]Регламент осуществления неторговых операций[:en]Regulations for Non-Trading Operations[:]'); ?>
                        </div>
                        <div class="tabs-nav__item" data-tab-name="privacy-policy">
                            <?= _e('[:ru]Политика конфиденциальности[:en]Privacy Policy[:]'); ?></div>
                        <div class="tabs-nav__item" data-tab-name="refund-policy">
                            <?= _e('[:ru]Политика возврата денежных средств[:en]Refund Policy[:]'); ?></div>
                        <div class="tabs-nav__item" data-tab-name="aml-kyc-policy">
                            <?= _e('[:ru]Политика AML и KYC[:en]AML and KYC policy[:]'); ?></div>
                    </div>
                    <div class="tabs__content">
                        <div class="tab legal is-active">
                            <div class="tab__title">
                                <?= _e('[:ru]Юридическая Информация[:en]Legal Information[:]'); ?>
                            </div>
                            <?php _e('[:ru]
                                <p>
                                    Мы ценим каждого нашего клиента, независимо от типа его счета. Во всех случаях вы
                                    получите максимальный и профессиональный сервис. Но, компания <span>'. get_option('custom_field_value_company_name') .'</span> (далее —
                                    «Компания») не
                                    торгует с Вами, за Вас, вместо Вас и не управляет Вашими финансами, а также не дает
                                    прямые
                                    указания по рынку.
                                </p>
                                <p>
                                    Компания предоставляет вам полный и исключительный сервис и, в случае, если уровень
                                    Вашего Торгового счета позволяет, и Вы выражаете желание, Компания может потратить время
                                    на
                                    разъяснение механизмов Биржевой Торговли или основ, позволяющих Вам получить навык
                                    прочтения технических индикаторов или их возможные сочетания, а также Вы можете получить
                                    от
                                    Компании разъяснения о наиболее значимых факторах, оказывающих наибольшее влияние на
                                    финансовые
                                    рынки в данный момент времени, т.е. на азбуку финансовых рынков.
                                    Любые «Сигналы», «Стратегии», «Подсказки», «Обучение», «Обучающие видеокурсы»,
                                    «Вебинары» и другие рекомендации носят информационный характер, Вы самостоятельно
                                    принимаете решения,
                                    в которых мы не являемся вашим советчиком или фидуциарием.
                                </p>
                                <br>
                                <br>
                                <div class="tab__title">
                                    Юридические аспекты
                                </div>
                                <p>
                                    Открывая на нашем Веб-сайте торговый счет, Вы обязаны согласиться с Клиентским
                                    соглашением,
                                    Политикой конфиденциальности, а также другими политиками и условиями, размещенными на
                                    Веб-сайте и именуемыми Условиями ведения бизнеса, являющимися по своей сути Безотзывной
                                    офертой, представленной в соответствие законодательством <span>'. get_option('custom_field_value_country_company') .'</span>.
                                </p>
                                <p>Вы обязаны подтвердить Ваш торговый счет, т.е. пройти процедуру верификации.</p>
                                <p>
                                    В случае необходимости по итогам Ваших Торгов, Вы можете запросить у нас отчет об
                                    операциях
                                    по Вашему Торговому счету для предоставления налоговой отчетности в стране Вашего
                                    проживания.
                                </p>

                                <p>
                                    Данный сайт является собственностью компании <span>'. get_option('custom_field_value_company_name') .'</span>.
                                </p>
                                <p>Местонахождение: <span>'. get_option('custom_field_value_address') .'</span>.</p>
                                <p>Контакты Компании:</p>
                                <!-- <p>Тел. <span>'. get_option('custom_field_value_phone') .'</span></p> -->
                                <p>Электронная почта:  <span>'. get_option('custom_field_value_email') .'</span></p>
                                [:en]
                                <p>At ApexNexia we abide and uphold a standard while providing our services, giving you a safe and secure environment to trade.</p>
                                <p>License & Regulations <br/>For transparency, you can view exactly what regulations we uphold for the safety, protection, and integrity of our clients. ApexNexia is operated by UKUCHUMA FINANCIAL SERVICES (PTY) LTD (Registration no.: 2020/735868/07) a South Africa Investment Firm, authorized and regulated by the Financial Sector Conduct Authority (FSCA) of South Africa, with FSP License Number 32535.</p>
                                <p>We value each of our clients, regardless of the type of his
                                        account. In all cases, you will receive the upmost professional service. But,
                                        the company <span>'. get_option('custom_field_value_company_name') .'</span> (hereinafter – the Company) does not trade with
                                        you, for you, instead of you and do not manage your finances, and also does not
                                        give direct instructions about the market.</p>
                                    <p>The company provides you with a complete and exceptional service and, if the
                                        level of your Trading Account allows, and you express a desire, the Company can
                                        spend time explaining the mechanisms of the Exchange Trading or the basics
                                        allowing you to gain skills of reading technical indicators or their possible
                                        combinations, and You can get explanations from the Company about the most
                                        significant factors that have the greatest impact on financial markets at a
                                        given point of time, i.e. the ABC of financial markets.</p>
                                    <p>Any «Signals», «Strategies», «Tips», «Training», «Training video courses»,
                                        «Webinars» and other recommendations are informational, you make decisions on
                                        your own, in which we are not your advisor or fiduciary.</p>
                                        <br>
                                        <br>
                            <div class="tab__title">Legal aspects</div>
                                    <p>By opening a Trading Account on our Website, you must agree to the Client
                                        Agreement, privacy policy, as well as other policies and conditions posted on
                                        the Website, which are in essence an Irrevocable Offer submitted in accordance
                                        with the laws of <span>'. get_option('custom_field_value_country_company') .'</span>.</p>
                                    <p>You must confirm your Trading Account, i.e. go through the verification
                                        procedure.</p>
                                    <p>If necessary, based on the results of your trading, you can request a report from
                                        us on the operations of your trading account to provide tax reports in your
                                        country of residence.</p>
                                    <p>This website is property of <span>'. get_option('custom_field_value_company_name') .'</span>.
                                        Location: <span>'. get_option('custom_field_value_address') .'</span>.</p>
                                    <p><strong>Company Contacts:</strong></p>
                                    <p>Tel. <span>'. get_option('custom_field_value_phone') .'</span></p>
                                    <p>Tel. <span>'. get_option('custom_field_value_phone2') .'</span></p>
                                    <p>Email:  <span>'. get_option('custom_field_value_email') .'</span></p>
                                [:]'); ?>
                        </div>
                        <div class="tab disclaimer">
                            <div class="tab__title">
                                <?= _e('[:ru]Отказ от Ответственности[:en]Disclaimer[:]'); ?>
                            </div>
                            <?php _e('[:ru]
                                <p>
                                    <span>'. get_option('custom_field_value_company_name') .'</span> не предлагает торговлю бинарными опционами.
                                    При торговле иностранной валютой и инвестировании в срочный рынок (в том числе маржевые
                                    контракты (CFD)) и совершении операций на рынке Форекс, как и любыми финансовыми
                                    активами,
                                    существует вероятность частичной либо полной потери ваших инвестиционных средств.
                                    Соответственно, настоятельно рекомендуется удерживаться от инвестирования и торговли
                                    теми
                                    средствами, потерю которых в случае неблагоприятного исхода таких торгов Вы не можете
                                    себе
                                    позволить.
                                </p>
                                <p>
                                    В торговле иностранной валютой и совершении операций на рынке Форекс риски потерь весьма
                                    реальны. Пожалуйста, убедитесь, что Вы внимательно ознакомились с нашими условиями и
                                    положениями, прежде чем приступить к инвестированию в цифровые опционы и рынок Форекс.
                                </p>
                                <p>
                                    Принимая условия Договора, Вы тем самым подтверждаете, что осведомлены о рисках,
                                    присущих
                                    деятельности в области CFD и рынка Форекс, включая частичную и/или полную потерю
                                    инвестируемых средств. Компания <span>'. get_option('custom_field_value_company_name') .'</span> (далее — «Компания») считает, что, начиная
                                    торговлю на рынке Форекс или CFD, Вы инвестируете суммы только в том объёме, который
                                    можете
                                    себе позволить. Перед началом операций просим Вас подробно ознакомиться с условиями
                                    Клиентского соглашения, политики конфиденциальности, а также всеми приложениями к ним.
                                </p>
                                <p>
                                    Компания предупреждает, что данное уведомление не может, не раскрывает и не разъясняет
                                    все
                                    возможные риски и другие важные аспекты, связанные с торговлей иностранной валюты и
                                    совершением операций на рынке Форекс. Данный документ только в общих чертах поясняет
                                    характер возможных рисков, возникающих при работе c CFD и совершением операций на рынке
                                    Форекс.
                                </p>
                                <p>
                                    Доводим до Вашего сведения, что курсы валют на Веб-сайте аналогичны установленным
                                    Компанией
                                    на продажу CFD клиентам. При этом Компания не несёт ответственности за их несовпадение с
                                    курсами на рынке в реальном времени продаж опциона.
                                </p>
                                <p>
                                    Компания оставляет за собой право досрочно закрывать сделки в случае невозможности
                                    обновления котировок в течение 30 секунд. В этом случае Клиент автоматически
                                    уведомляется об
                                    отмене сделки электронным письмом, а инвестированные в сделку средства возвращаются на
                                    Счет
                                    Клиента.
                                </p>
                                <p>
                                    Принимая условия Договора, Вы берёте на себя полную ответственность за взаимодействие с
                                    Компанией в установленных законом рамках, включая соответствие этого взаимодействия
                                    законам
                                    и иным правовым актам страны Вашего проживания. Просим Вас заранее, до принятия условий
                                    Договора, ознакомиться с возможностью налоговых взысканий на прибыль с подобных операций
                                    в
                                    Вашей стране.
                                </p>
                                <p>
                                    Компания не несет финансовой ответственности за результаты операций, совершенных
                                    Клиентом.
                                    Компания также не несет ответственности за потери, связанные с сервисом по копированию
                                    сделок других лиц.
                                </p>
                                <p>
                                    Каждый клиент имеет право на открытие только одного торгового аккаунта на платформе.
                                    Прибыль, полученная по счетам, открытым на вымышленное имя, или по нескольким счетам,
                                    открытым одним и тем же лицом, будет аннулирована и недоступна для вывода. Если один
                                    клиент
                                    открыл несколько торговых счетов, то прибыль будет аннулирована по всем открытым счетам,
                                    и
                                    доступ ко всем счетам будет закрыт для дальнейшего разбирательства. По договоренности с
                                    Компанией, возможно восстановление доступа только к одному из счетов и перевод средств с
                                    оставшихся заблокированных счетов, в случае отсутствия незаконных действий со стороны
                                    клиента по получению прибыли с использованием нескольких счетов.
                                </p>
                                <p>
                                    В случае нанесения Компании неправомерного финансового ущерба, Компания вправе удержать
                                    со
                                    счета Клиента суммы, равные суммам издержек (судебных, операционных и т.д.), вызванных
                                    неправомерными действиями Клиента, в том числе издержкам, вызванным оспариванием
                                    поступивших
                                    от Клиента платежей с привлечением третьих лиц.
                                </p>
                                <p>
                                    Компания подразумевает, что Вы ознакомлены с бизнес-моделью осуществляемой деятельности,
                                    результат которой полностью подчинен выбору конкретного направления движения цен активов
                                    от
                                    изначальной цены исполнения до заданной даты истечения.
                                </p>
                                <p>
                                    До совершения сделки Вам предоставляется полная информация о сделке: название актива,
                                    цена
                                    исполнения, выбранное направление изменения цены, а также сумма инвестиций, определяемая
                                    трейдером для конкретной сделки.
                                </p>
                                <p>
                                    Любые «Сигналы», «Идеи для торгов», «Подсказки», «Коучинг» и другие рекомендации носят
                                    информационный характер, Вы всегда самостоятельно принимаете решения, в которых Компания
                                    не
                                    является Вашим советчиком или доверенным лицом.
                                </p>
                                <p>
                                    Рекомендации, которые мы предоставляем, не являются прямым предложением купли/продажи
                                    или
                                    приглашением делать оферты в торговле CFD, совершении операций на рынке Форекс. Каждое
                                    решение, которое Вы принимаете с нами – это Ваше самостоятельное решение. Мы не
                                    выступаем в
                                    качестве вашего советчика или доверенного лица. Вы соглашаетесь с тем, что мы не имеем
                                    перед
                                    Вами никаких фидуциарных обязательств и не несем никакой ответственности за любые
                                    претензии,
                                    убытки, затраты и расходы, включая судебные сборы, которые Вы можете понести, следуя
                                    торговым рекомендациям компании, а также любые Ваши действия или бездействия, вызваны
                                    нашими
                                    рекомендациями или предоставленной нами информацией.
                                </p>
                                <p>
                                    Рекомендации основаны на личных суждениях и не являются гарантией.
                                </p>
                                <p>
                                    Наши рыночные рекомендации основаны исключительно на мнении нашего персонала. Они могут
                                    в
                                    равной степени быть созвучны или нет с рыночными позициями или намерениями Компании, ее
                                    филиалов и сотрудников. Мы предоставляем свои рекомендации исходя из информации, которая
                                    считается надежной, но ни в коей мере не гарантируем их точность и полноту и не
                                    утверждаем,
                                    что следования данным рекомендациям способны снизить или устранить риск, присущий
                                    торговле
                                    иностранной валютой и инвестирование в срочный рынок (например, маржевые контракты
                                    (CFD)) и
                                    рынку Форекс.
                                </p>
                                <p>
                                    Посетители нашего Веб-сайта обязаны предварительно убедиться в том, что их
                                    взаимодействие с
                                    Компанией происходит строго в рамках закона, действующего в стране их пребывания и
                                    ограничений, налагаемых в ней. Также Клиенты должны быть осведомлены о своих
                                    обязательствах
                                    по уплате налогов с прироста капитала в своей стране.
                                </p>
                                <p>
                                    В максимально допустимой мере Компания отказывается от всех гарантий любого вида, явных
                                    или
                                    подразумеваемых, относящихся к Веб-сайту, платформе, содержанию Веб-сайта и услугам, в
                                    том
                                    числе включая (без ограничений) право собственности, рыночного спроса, пригодности для
                                    определенной цели, не нарушения прав собственности в ходе проведения операций или
                                    выполнения.
                                </p>
                                <p>
                                    Компания отказывается от любых гарантий, прямых (direct guarantee), так и непрямых
                                    (indirect
                                    guarantee), относительно:
                                </p>
                                <p>
                                    • безопасности, точности, надежности, своевременности и работоспособности Веб-сайта, его
                                    содержания, платформы, услуг;
                                </p>
                                <p>
                                    • бесперебойной работы данного Веб-айта, платформы и сервиса, отсутствия ошибок или
                                    того,
                                    что любые ошибки будут исправлены;
                                </p>
                                <p>
                                    • производительности и точности, качества, сроков действия, полноты и полезности любой
                                    информации, предоставляемой на Веб-сайте, платформе и сервисах.
                                </p>
                                [:en]
                                <p><span>'. get_option('custom_field_value_company_name') .'</span> don’t offer trading in binary options.</p>
                                <p>When trading CFD and operating in the Forex market, as well as trading any financial
                                    assets, there is a possibility of partial or complete loss of your investment funds.
                                    Therefore, it is strongly recommended to refrain from investing and trading funds
                                    that you cannot afford to lose in the event of an unfavorable outcome of such
                                    trading.</p>
                                <p>In CFD and Forex trading, the risks of loss are very real. Please make sure to read
                                    our terms and conditions carefully before you start investing in digital options and
                                    the Forex market.</p>
                                <p>By accepting the terms of the Agreement, you confirm that you are aware of the risks
                                    inherent in the activities in the field of CFD and the Forex market, including the
                                    partial or total loss of invested funds. The company <span>'. get_option('custom_field_value_company_name') .'</span> (hereinafter
                                    – the Company) believes that when starting trading in the Forex market or CFD, you
                                    invest only in the amount that you can afford. Before starting operations, we ask
                                    you to familiarize yourself with the terms of the Client’s Agreement, the privacy
                                    policy, as well as all annexes to them.</p>
                                <p>The company warns that this notice cannot, does not disclose and does not explain all
                                    possible risks and other important aspects related to trading in CFD and modernizing
                                    operations in the Forex market. This document explains the nature of possible risks
                                    arising when working with CFD and performing trades in the Forex market in general
                                    terms.</p>
                                <p>Please be advised that the exchange rates on the Website are similar to those
                                    established by the Company for the sale of CFD to customers. At the same time, the
                                    Company is not responsible for their discrepancy with the rates on the market in
                                    real-time option sales.</p>
                                <p>The company reserves the right to close the deal ahead of schedule if it is
                                    impossible to update the rates within 30 seconds. In this case, the client is
                                    automatically notified of the cancellation of the trade via e-mail, and the funds
                                    invested in the trade are returned to the client’s account.</p>
                                <p>By accepting the terms of the Agreement, you assume full responsibility for
                                    interacting with the Company within the limits established by law, including
                                    compliance of this interaction with the laws and other legal acts of your country of
                                    residence. We ask you in advance, before accepting the terms of the Agreement,
                                    to<br>familiarize yourself with the possibility of tax penalties for profits from
                                    similar operations in your country.</p>
                                <p>The company does not bear financial responsibility for the results of operations
                                    performed by the Client. The company is also not responsible for losses associated
                                    with the service of copying trades of other persons.</p>
                                <p>Each client has the right to open only one trading account on the platform. Profits
                                    received on accounts opened under a fictitious name, or on several accounts opened
                                    by the same person will be canceled and unavailable for withdrawal. If one client
                                    opened several trading accounts, then the profit will be canceled on all of the
                                    opened accounts, and access to all accounts will be closed for further proceedings.
                                    By making an<br>agreement with the Company, it is possible to restore access to only
                                    one of the accounts and transfer funds from the remaining blocked accounts, in the
                                    absence of illegal actions on the side of the client when gaining profits using
                                    several accounts.</p>
                                <p>In the event of improper financial damage to the Company, the Company has the right
                                    to withhold the amount equal to the costs of such damage (legal, operational, etc.)
                                    from the client’s account caused by the improper actions of the Client, including
                                    the costs caused by the dispute of payments received from client involving third
                                    parties.</p>
                                <p>The company assumes that You are familiar with the business model of the activity
                                    being carried out, the result of which is completely subordinate to the choice of a
                                    specific direction of asset price movement from the initial strike price to the
                                    specified expiration date.</p>
                                <p>Before making a trade, you are provided with full information about the trade: name
                                    of the asset, price of execution, chosen direction of price change, as well as the
                                    amount of investment determined by the trader<br>for the specific trade.</p>
                                <p>Any «Signals», «Ideas for trading», «Tips», «Coaching» and other recommendations are
                                    informational in nature, you always make decisions independently in which the
                                    Company is not your adviser or confidant.</p>
                                <p>Recommendations that we provide are not a direct offer of purchase/sale or an
                                    invitation to make offers in trading CFD, trading in the Forex market.</p>
                                <p>Every decision you make with us is YOUR independent decision.</p>
                                <p>We do not act as your advisor or trustee. You agree that we do not have any fiduciary
                                    obligations to you and accept no responsibility for any claims, losses, costs and
                                    expenses, including court fees, which you may incur by following the company’s trade
                                    recommendations, as well as any of your actions or omissions, caused by our
                                    recommendations or information provided by us.</p>
                                <p>Recommendations are based on personal judgment and are not a guarantee.</p>
                                <p>Our market recommendations are based solely on the opinion of our staff. They can be
                                    equally consonant or not with the market positions or intentions of the Company, its
                                    branches and employees. We provide our recommendations based on information that is
                                    believed to be reliable, but in no way guarantee their accuracy and completeness and
                                    do not claim that following these recommendations can reduce or eliminate the risk
                                    inherent in trading CFD and the Forex market.</p>
                                <p>Visitors to our site are required to pre-verify that their interaction with the
                                    Company takes place strictly within the framework of the law in force in their
                                    country of residence and the restrictions imposed in it. Clients should also be
                                    aware of their obligations to pay taxes on capital gains in their country.</p>
                                <p>As much as possible, the company disclaims all warranties of any kind, express or
                                    implied, relating to the site, platform, site content and services, including
                                    (without limitation) the right of ownership, market demand, suitability for a
                                    particular purpose, no violation of rights property during operations or
                                    performance.</p>
                                <p>The company disclaims all warranties, express or implied, regarding:</p>
                                <p>&nbsp; &nbsp; &nbsp;– security, accuracy, reliability, timeliness and efficiency of
                                    the site, its content, platform, services;</p>
                                <p>&nbsp; &nbsp; &nbsp;– smooth operation of the site, platform and service, the absence
                                    of errors or the fact that any errors will be corrected;</p>
                                <p>&nbsp; &nbsp; &nbsp;– performance and accuracy, quality, timing, completeness and
                                    usefulness of any information<br>provided on the site, platform and services.</p>
                                [:]'); ?>
                        </div>
                        <div class="tab client-agreements">
                            <div class="tab__title">
                                <?= _e('[:ru]Клиентское соглашение [:en]Client Agreements[:]'); ?>
                            </div>
                            <?= _e('[:ru]<p>1. Введение</p>
                                    <p>1.1. <span>'. get_option('custom_field_value_company_name') .'</span> (далее по тексту — «Компания»), которая зарегистрирована по
                                        адресу <span>'. get_option('custom_field_value_address') .'</span>, предоставляет доступ к данному веб-сайту и к другим вспомогательным
                                        услугам (далее – «Услуги») на условиях настоящей публичной оферты (далее —
                                        «Соглашение») любому физическому или юридическому лицу (кроме лиц без гражданства;
                                        лиц, не достигших 18 лет; а также граждан и юридических лиц стран, в которых
                                        Компания не предоставляет указанные услуги) (далее — «Клиент»).</p>
                                    <p>1.2. Неотъемлемой частью настоящего Соглашения являются следующие регламентирующие
                                        документы:</p>
                                    <p>а) Декларация (Уведомление) о рисках;</p>
                                    <p>б) Регламент осуществления неторговых операций;</p>
                                    <p>в) Политика конфиденциальности;</p>
                                    <p>г) Политика возврата денежных средств;</p>
                                    <p>д) Политика AML и KYC;</p>
                                    <p>е) все другие применимые документы, размещенные на Веб-сайте Компании и связанные с
                                        ними материалы.</p>
                                    <p>1.3. Настоящее Соглашение и, все перечисленные выше, регламентирующие документы,
                                        будут далее совместно именоваться как «Условия ведения бизнеса».</p>
                                    <p>1.4. Условия ведения бизнеса должны быть внимательно прочитаны Клиентом, так как они
                                        определяют все условия, на которых Клиент совершает торговые и неторговые операции.
                                        Пользуюсь данным Веб-сайтом Принимая условия настоящего Соглашения, Клиент принимает
                                        Условиями ведения бизнеса, которые перечислены выше.</p>
                                    <p>1.5. Безусловным принятием (акцептом) условий настоящего Соглашения и всех
                                        неотъемлемых его частей является внесением авансового платежа Клиентом согласно
                                        настоящего Соглашения.</p>
                                    <p>1.6. С момента внесения авансового платежа Клиентом, каждая операция, совершенная
                                        Клиентом в Личном кабинете или на соответствующей торговой платформе (-ах),
                                        становится предметом Условий ведения бизнеса.</p>
                                    <p>1.7. В отношении любой операции в Личном кабинете или в соответствующей торговой
                                        платформе Клиент и Компания выступают как принципалы, и Компания не действует как
                                        агент от имени Клиента. Это означает, что Клиент несет полную и прямую
                                        ответственность за выполнение любых своих обязательств по совершенным операциям в
                                        Личном кабинете или в соответствующей торговой платформе. Если Клиент действует от
                                        чьего-либо имени, то, независимо от того, идентифицировано ли это лицо или нет,
                                        Компания не принимает его как Клиента и не несет перед ним никакой ответственности,
                                        за исключением тех случаев, когда это отдельно согласовано и оговорено.</p>
                                    <p>1.8. Термины и определения.</p>
                                    <p>В настоящем Соглашении и других Регламентирующих документах используются следующие
                                        термины и определения:</p>
                                    <p>1.8.1. <b>«Платеж»</b> — внесение денежных средств путем осуществления платежа
                                        Клиентом Компании в счет оплаты будущих расходов.</p>
                                    <p>1.8.2. <b>«Базовая валюта»</b> — первая валюта в обозначении валютной пары, которую
                                        Клиент может купить или продать за валюту котировки.</p>
                                    <p>1.8.3. <b>«Баланс»</b> — совокупный финансовый результат всех полных законченных
                                        транзакций и операций внесения/снятия денежных средств с торгового счета.</p>
                                    <p>1.8.4. <b>«Банковская карта»</b> — пластиковое идентификационное средство, с помощью
                                        которого держателю банковской карты предоставляется возможность осуществлять
                                        операции оплаты за товары, услуги, а также получать наличные средства.</p>
                                    <p>1.8.5. <b>«Валютная пара»</b> — объект торговой операции, в основе которого лежит
                                        изменение стоимости одной валюты по отношению к другой валюте.</p>
                                    <p>1.8.6. <b>«Веб-сайт»</b> — веб-сайт Компании, который находится по ссылке [company site]
                                        или любой другой веб-сайт, который Компания признает официальным и вправе
                                        периодически поддерживать для доступа Клиентов.</p>
                                    <p>1.8.7. <b>«Внешний счет Клиента»</b> — банковский и/или цифровой счет Клиента.</p>
                                    <p>1.8.8. <b>«Длинная позиция»</b> — покупка инструмента в расчете на повышение курса.
                                        Применительно к валютным парам — покупка базовой валюты за валюту котировки.</p>
                                    <p>1.8.9. <b>«Идентификационные данные»</b> — для физических лиц: паспортные данные,
                                        указываемые в Анкете регистрации Клиента; для юридических лиц: данные
                                        регистрационных и учредительных документов.</p>
                                    <p>1.8.10. <b>«Инструмент»</b>&nbsp;— валютная пара, криптовалютная пара, металлы спот,
                                        контракты на разницу цен и другие финансовые.</p>
                                    <p>1.8.11. <b>«Клиентский счет»</b> — любой счет, открытый Клиентом в Компании.</p>
                                    <p>1.8.12. <b>«Короткая позиция»</b> — продажа инструмента в расчете на понижение курса.
                                        Применительно к валютным парам: продажа базовой валюты за валюту котировки.</p>
                                    <p>1.8.13. <b>«Курс»</b> — стоимость единицы базовой валюты, выраженная в валюте
                                        котировки.</p>
                                    <p>1.8.14. <b>«Личный кабинет»</b> — кабинет Клиента на Веб-сайте, предоставляемый
                                        Компанией Клиенту на основании Клиентского соглашения, заключенного между Клиентом и
                                        Компанией, который является индивидуальным пространством Клиента на Веб-сайте,
                                        доступ к которому защищен и открывается после введения уникальных логина и пароля.
                                    </p>
                                    <p>1.8.15. <b>«Маржинальная торговля»</b> — проведение торговых операций с
                                        использованием кредитного плеча, когда Клиент имеет возможность совершать сделки на
                                        суммы, значительно превышающие размер средств на торговом счете.</p>
                                    <p>1.8.16. <b>«Неактивный торговый счет»</b> — торговый счет Клиента, на котором в
                                        течение 3-х (трех) календарных месяцев подряд не было открыто ни одной позиции, не
                                        было выставлено ни одного отложенного ордера и не было совершено ни одной неторговой
                                        операции.</p>
                                    <p>1.8.17. <b>«Операции Клиента»</b> — распоряжения и запросы Клиента в адрес Компании в
                                        отношении его торговых и неторговых операций в Личном кабинете и в торговых
                                        платформах.</p>
                                    <p>1.8.18. <b>«Открытая позиция»</b> — результат первой части полной законченной
                                        транзакции. В результате открытия позиции у Клиента возникают обязательства:</p>
                                    <p>а) произвести противоположную сделку того же объема;</p>
                                    <p>б) поддерживать средства не ниже уровня необходимой маржи (уровень может изменяться в
                                        зависимости от типа счета, актуальную информацию можно найти на Веб-сайте Компании)а
                                    </p>
                                    <p>1.18.19. <b>«Письменное уведомление»</b> — электронный документ (включая e-mail,
                                        внутреннюю почту клиентского терминала и т. д.), объявление в разделе «Новости
                                        компании» на Веб-сайте. Письменное уведомление считается полученным Клиентом:</p>
                                    <p>a) спустя один час после отправки на электронный адрес Клиента;б) через час после
                                        размещения объявления на Веб-сайте.</p>
                                    <p>1.18.20. <b>«Распоряжение»</b> — инструкция Клиента Компании на открытие/закрытие
                                        позиции, размещение, удаление или изменение уровня отложенного ордера.</p>
                                    <p>1.18.21. <b>«Распоряжение на вывод денежных средств» </b>— распоряжение, переданное
                                        через Личный кабинет Клиента с Веб-сайта Компании, целью которого является списание
                                        средств со счета Клиента и вывод их на внешний счет Клиента.</p>
                                    <p>1.8.22. <b>«Сервер»</b> — все программы и технические средства, которые используются
                                        для обработки инструкций Клиентов, исполнения клиентских распоряжений и для
                                        предоставления торговой информации в реальном времени (содержание информации
                                        определяется Компанией), с учетом взаимных обязательств между Клиентом и Компанией
                                        согласно соответствующему Регламентирующему документу.</p>
                                    <p>1.8.23. <b>«Спред»</b> — выраженная в пунктах разница между котировками Ask и Bid.
                                    </p>
                                    <p>1.8.24. <b>«Торговая платформа»</b> — все программы и технические средства, которые
                                        предоставляют котировки в реальном времени, позволяют
                                        разместить/модифицировать/исполнить ордера и высчитать все взаимные обязательства
                                        между Клиентом и Компанией. В упрощенном виде для целей настоящего Регламента
                                        торговая платформа состоит из сервера и клиентского терминала.</p>
                                    <p>1.8.25. <b>«Уполномоченное лицо Клиента»</b>:</p>
                                    <p>a) физическое лицо, достигшее 18 лет, являющееся гражданином и/или налоговым
                                        резидентом любой страны, за исключением стран, в которых Компания не предоставляет
                                        указанный сервис, уполномоченное от имени Клиента осуществить или получить
                                        безналичный (банковский и/или цифровой) перевод с целью зачисления платежа на счет
                                        Клиента или списания средств со счета Клиента;<br>b) юридическое лицо или лицо иной
                                        организационно-правовой формы, созданное в соответствии с законодательством любой
                                        страны, за исключением стран, в которых Компания не предоставляет указанный сервис,
                                        уполномоченное от имени Клиента осуществить или получить безналичный (банковский
                                        и/или цифровой) перевод с целью зачисления платежа на счет Клиента.</p>
                                    <p>1.8.26. <b>«Чрезвычайная ситуация»</b> — несоответствие условий Компании условиям
                                        контрагента, текущей рыночной ситуации, возможностям программного или аппаратного
                                        обеспечения Компании, другие ситуации, которые нельзя предвидеть.</p>
                                    <p>2. Сервисы</p>
                                    <p>2.1. В случае исполнения Клиентом всех обязательств по настоящему Соглашению и других
                                        Правил Компании, Компания предоставит Клиенту возможность совершать операции,
                                        предусмотренные возможностями Личного кабинета и Условиями ведения бизнеса.</p>
                                    <p>2.2. Компания осуществляет только исполнение Компания предоставляет Клиенту
                                        технологическую платформу и в отношении операций Клиента Компания осуществляет
                                        только исполнение, не предоставляя доверительное управление и каких-либо
                                        рекомендаций. Компания может исполнить распоряжение или запрос Клиента, даже
                                        несмотря на то, что такая операция может быть невыгодной для самого Клиента.
                                        Компания не обязана, за исключением случаев, указанных в настоящем Соглашении и
                                        Условиях ведения бизнеса, отслеживать и извещать Клиента о статусе его торговой
                                        операции; присылать запросы о внесении дополнительной маржи; принудительно закрывать
                                        любую открытую позицию Клиента. Если другое специально не согласовано, Компания не
                                        обязана предпринимать попытки исполнить распоряжение Клиента по котировкам более
                                        выгодным, чем предложенные Клиенту через торговую платформу.</p>
                                    <p>2.3. Клиент не имеет права требовать у Компании инвестиционные / торговые
                                        рекомендации, а также иную информацию, способную мотивировать Клиента на совершение
                                        торговых операций.</p>
                                    <p>2.4. Клиент признает, что Компания по собственному усмотрению может предоставлять
                                        информацию, рекомендации и советы Клиенту, но в данном случае она не будет нести
                                        никакой ответственности за последствия и прибыльность таких рекомендаций и советов
                                        для Клиента.</p>
                                    <p>Клиент признает, что при отсутствии мошенничества, умышленного невыполнения
                                        обязательств или грубой халатности, Компания не несет ответственности за какие-либо
                                        потери, расходы, затраты и убытки Клиента, полученные вследствие неточности
                                        информации, предоставленной Клиенту, включая, но не ограничиваясь, информацией о
                                        торговых операциях Клиента. Сохраняя за Компанией право отменить или закрыть любую
                                        позицию Клиента при определенных условиях, описанных в данном Соглашении или
                                        Условиях ведения бизнеса, все операции, совершенные Клиентом вследствие такой
                                        неточной информации или ошибки, тем не менее, остаются в силе и являются
                                        обязательными к исполнению как со стороны Клиента, так и со стороны Компании.</p>
                                    <p>2.5. Компания не должна осуществлять или выполнять физическую доставку валюты при
                                        исполнении любой торговой операции. Доходы или убытки по торговым операциям
                                        начисляются/списываются с баланса торгового счета Клиента сразу же после закрытия
                                        позиции.</p>
                                    <p>2.6. Компания, ее партнеры или любые другие ее аффилированные лица могут иметь
                                        материальную выгоду, правоотношение или договоренность в отношении какой-либо
                                        операции в Личном кабинете или в торговой платформе; либо материальную выгоду,
                                        правоотношение или договоренность, которые вступают в конфликт с интересами Клиента.
                                        В качестве примера Компания может:</p>
                                    <p>a) выступать в качестве принципала в отношении любого инструмента и на собственном
                                        счете путем продажи или покупки инструмента у Клиента;</p>
                                    <p>b) предложить в качестве контрагента по торговой операции другого Клиента Компании;
                                    </p>
                                    <p>c) покупать или продавать инструмент, который Компания предлагает Клиенту;</p>
                                    <p>d) консультировать и предоставлять другие услуги своим партнерам или другим Клиентам
                                        Компании по инструментам или базисным активам, в которых они заинтересованы несмотря
                                        на то, что это вступает в конфликт с интересами Клиента.</p>
                                    <p>Клиент соглашается и предоставляет Компании полномочия действовать в отношении
                                        Клиента и для Клиента так, как Компания считает целесообразным, невзирая на
                                        возможный конфликт интересов или на существование какого-то материального интереса в
                                        отношении любой операции в Личном кабинете или в торговой платформе, без
                                        предварительного уведомления Клиента. Наличие конфликта интересов или материальной
                                        выгоды в отношении любой операции в Личном кабинете или в торговой платформе не
                                        должно оказывать влияние на обслуживание Клиента сотрудниками Компании.</p>
                                    <p>2.7. Компания время от времени может действовать от лица Клиента с теми, с кем у
                                        Компании или у любой другой ее аффилированной стороны есть договор на получение
                                        товаров или услуг. Компания гарантирует, что такие соглашения заключаются по мере
                                        возможности в лучших интересах Клиента, например, такие соглашения позволяют
                                        получить доступ к информации или каким-либо другим сервисам, которые иначе были бы
                                        недоступны.</p>
                                    <p>2.8. Если Компания подключает опцию Swap-free для счетов по запросу Клиента, Клиент
                                        принимает условия настоящего Соглашения и то, что для любого торгового счета не
                                        будет взиматься своп. Тем не менее если Компания выявит какие-либо мошеннические
                                        действия, манипуляции, своп-арбитраж или другие формы обманной или мошеннической
                                        деятельности в рамках какой-либо торговой операции или всех торговых операций на
                                        каком-либо счете Клиента с опцией Swap-free или нескольких счетах, то Компания
                                        оставляет за собой право по своему усмотрению закрыть все открытые позиции на
                                        торговом счете Клиента и списать или начислить штраф (эквивалентный свопу и/или
                                        размеру прибыли) по всем сделкам, открытым на счете в текущий момент и/или ранее
                                        совершенным на счете, и отклонить последующие запросы Клиента на отмену начисления
                                        свопов.</p>
                                    <p>Запросить опцию Swap-free можно для любого торгового счета или всех торговых счетов.
                                        Компания оставляет за собой право отключить опцию Swap-free для любого счета или
                                        всех счетов без предварительного уведомления Клиента.</p>
                                    <p>2.9. Компания стремится предоставить передовые услуги Клиентам, а Клиент, в свою
                                        очередь, обязуется, что он будет пользоваться Услугами справедливо и честно.
                                        Компания ведет политику обнаружения и выявления мошенничества, или другие
                                        манипуляции, включая, среди прочего, латентные арбитражные решения, нечестный
                                        скальпинг и другие подобные операции. Компания оставляет за собой право в
                                        одностороннем порядке приостановить учетную запись Клиента и пересчитать все
                                        открытые и закрытые позиции для отражения рыночных условий. В этом случае Компания
                                        оставляет за собой право вносить / снимать средства со счета Клиента.</p>
                                    <p>3. Запросы и распоряжения Клиента</p>
                                    <p>3.1. Компания обрабатывает запросы и распоряжения Клиента согласно соответствующим
                                        Условиям ведения бизнеса.</p>
                                    <p>3.2. Компания имеет право отклонить запрос или распоряжение Клиента, если какое-то
                                        требование Условий ведения бизнеса не было выполнено на момент окончания обработки
                                        такого запроса или распоряжения Компанией. Однако Компания, по своему усмотрению,
                                        несмотря на несоблюдение положений Условий ведения бизнеса, может принять и
                                        исполнить такой запрос или распоряжение Клиента.</p>
                                    <p>Если Компания исполнила запрос или распоряжение Клиента, а потом обнаружила, что
                                        какое-то положение Условий ведения бизнеса было нарушено, то Компания вправе
                                        действовать согласно соответствующему документу Условий ведения бизнеса.</p>
                                    <p>4. Неттинг</p>
                                    <p>4.1. При проведении операций между Клиентом и Компанией конвертация производится по
                                        актуальным курсам, установленным в соответствии с Условиями ведения бизнеса.</p>
                                    <p>4.2. Если общая сумма задолженности Клиента перед Компанией согласно Условиям ведения
                                        бизнеса равна общей сумме задолженности Компании перед Клиентом, то происходит
                                        взаимное погашение данных обязательств.</p>
                                    <p>4.3 Если начисленная сумма, причитающаяся одной из сторон в соответствии с Условиями
                                        ведения бизнеса, превышает начисленную сумму, причитающуюся другой стороне, то
                                        сторона с большей начисленной суммой выплачивает избыток другой стороне и после чего
                                        все обязательства по оплате будут автоматически удовлетворены и проведены.</p>
                                    <p>4.4. Клиент обязан выплачивать все подлежащие к оплате суммы, включая комиссию и
                                        другие издержки, установленные Компанией.</p>
                                    <p>4.5. Клиент не может переуступать свои права, возлагать свои обязанности или
                                        осуществлять какой-либо другой акт передачи прав или обязанностей согласно Условиям
                                        ведения бизнеса, без предварительного письменного уведомления Компании. Если данное
                                        условие нарушено, то любая такая переуступка, возложение или передача будут
                                        считаться недействительной.</p>
                                    <p>5. Платежи</p>
                                    <p>5.1. Клиент может перевести денежные средства на Клиентский счет в любое время.</p>
                                    <p>5.2. Операции по зачислению средств на счет и списанию со счета Клиента регулируются
                                        Условиями ведения бизнеса для неторговых операций.</p>
                                    <p>5.3. Если Клиент должен выплатить Компании сумму, превышающую средства его счета, то
                                        такая сумма должна быть выплачена им в течение 2-х (двух) рабочих дней с момента
                                        возникновения у Клиента данного обязательства.</p>
                                    <p>5.4. Клиент соглашается и признает, что (без ущерба для других прав Компании
                                        закрывать открытые позиции Клиента и использовать другие средства защиты от
                                        невыполнения обязательств Клиентом согласно Условиям ведения бизнеса), если у
                                        Клиента возникло денежное обязательство перед Компанией согласно настоящему
                                        Соглашению или Условиям ведения бизнеса, а достаточные денежные средства не были
                                        зачислены на счета Клиента, Компания вправе считать, что Клиент не выполнил платеж,
                                        и Компания вправе реализовать свои права согласно настоящему Соглашению и/или в
                                        соответствии с Условиями ведения бизнеса.</p>
                                    <p>5.5. Клиент несет полную ответственность за точность выполняемых платежей. Если
                                        реквизиты банка Компании изменились, Клиент несет полную ответственность за любые
                                        платежи, выполненные по устаревшим банковским реквизитам, с момента публикации новых
                                        сведений в Личном кабинете.</p>
                                    <p>5.6. Прием денежных средств от клиентов Компании посредством оплаты картами
                                        международных платежных систем на Веб-сайте может также осуществляться официальными
                                        партнерами Компании, информация о которых находится в Условиях ведения бизнеса для
                                        неторговых операций и в Личном кабинете.</p>
                                    <p><b>6. Денежные средства Клиента и проценты.</b></p>
                                    <p>6.1. Денежные средства Клиента хранятся на счетах Компании, в том числе
                                        сегрегированных счетах, открытых на имя Компании, для хранения денежных средств
                                        Клиентов отдельно от средств Компании.</p>
                                    <p>6.2. Клиент признает и согласен с тем, что Компания не будет выплачивать Клиенту
                                        проценты с денежных средств, размещенных на счетах Клиента. Компания имеет право
                                        выплачивать проценты на денежные средства Клиента в случаях и размерах,
                                        устанавливаемых Компанией.</p>
                                    <p>6.3. Использование бонусных средств Компания может начислять бонусы на торговый счет
                                        Клиента.</p>
                                    <p>Величина бонуса зависит от размера депозита Клиента, либо от условий персонального
                                        предложения от Компании для Клиента, в рамках которого Клиенту начисляются бонусные
                                        средства.</p>
                                    <p>Бонусные средства, зачисленные на торговый счет Клиента, не являются финансовым
                                        обязательством Компании перед Клиентом.</p>
                                    <p>Средства на торговом счете Клиента становятся доступны для снятия только после того,
                                        как Клиент совершит на своем счете обязательный торговый оборот.</p>
                                    <p>Размер обязательного торгового оборота равен сумме бонуса, умноженной на его плечо.
                                        Плечо бонуса равно 35, а для бонусов, размер которых составляет 50% и более от
                                        общего объема торгового депозита Клиента, плечо равно 40.</p>
                                    <p>Бонусные предложения могут быть ограничены по сроку своего действия.</p>
                                    <p>Сделки с результатом «без дохода» (в случае если страйк-цена актива равна цене
                                        экспирации) не засчитываются при вычислении обязательного торгового оборота, который
                                        совершил Клиент.</p>
                                    <p>Отказ от бонуса или его отмена возможны только при условии отсутствия каких-либо
                                        торговых операций на счете с момента начисления бонусных средств.</p>
                                    <p>По истечении срока действия бонусного предложения, начисленный в его рамках бонус,
                                        может быть списан с торгового счёта Клиента.</p>
                                    <p>Бонус обнуляется, если баланс торгового счета Клиента становится ниже минимально
                                        допустимого размера сделки.</p>
                                    <p>7. Жалобы и споры</p>
                                    <p>7.1. Все жалобы и споры рассматриваются согласно соответствующим Условиям ведения
                                        бизнеса.</p>
                                    <p>8. Коммуникации</p>
                                    <p>8.1. Правила коммуникации между Клиентом и Компанией определены Условиями ведения
                                        бизнеса.</p>
                                    <p>8.2. Клиент обязан давать торговые распоряжения только посредством клиентского
                                        терминала. Для определенного типа счетов может быть предусмотрена резервная
                                        возможность подачи инструкций и распоряжений по телефону.</p>
                                    <p>8.3. Клиент обязан подавать запросы на зачисление и списание средств только
                                        посредством Личного кабинета согласно Условиям ведения бизнеса для неторговых
                                        операций.</p>
                                    <p>8.4. Принимая условия настоящего Соглашения, Клиент также соглашается получать
                                        электронные письма от Компании на личный адрес электронной почты и SMS- сообщения, а
                                        номер мобильного телефона, зарегистрированного в Личном кабинете.</p>
                                    <p>9. Существенность сроков исполнения обязательств</p>
                                    <p>9.1. Временные сроки исполнения Клиентом и Компанией своих обязательств являются
                                        существенным условием для всех Условий ведения бизнеса.</p>
                                    <p>10. Случаи неисполнения обязательств</p>
                                    <p>10.1. Каждое из следующих событий является случаем неисполнения обязательств:</p>
                                    <p>а) невыполнение Клиентом оплаты по какому-либо обязательству согласно Условиям
                                        ведения бизнеса;</p>
                                    <p>б) невыполнение Клиентом какого-либо обязательства по отношению к Компании;</p>
                                    <p>в) возбуждение третьей стороной судебного процесса в отношении банкротства Клиента
                                        или ликвидации компании (если Клиент — юридическое лицо); или назначение судебного
                                        исполнителя или управляющего в отношении Клиента или активов Клиента (если Клиент —
                                        юридическое лицо); или (если Клиент — юридическое или физическое лицо) если Клиент
                                        заключает соглашение о погашении долгов со своими кредиторами; или любая другая
                                        похожая или аналогичная вышеупомянутым процедурам, инициированная в отношении
                                        Клиента;</p>
                                    <p>г) предоставление Клиентом гарантий или заявлений в соответствии с пунктом 11
                                        настоящего Соглашения, не соответствующих действительности;</p>
                                    <p>д) неспособность Клиента оплатить свой долг при наступлении срока платежа;</p>
                                    <p>е) смерть Клиента или признание Клиента недееспособным;</p>
                                    <p>ё) любые другие обстоятельства, когда Компания обоснованно предполагает, что
                                        необходимо или желательно принять меры в соответствии с п. 10.2 настоящего
                                        Соглашения.</p>
                                    <p>10.2. В случае неисполнения обязательств Компания вправе по своему усмотрению в любое
                                        время, без предварительного письменного уведомления Клиента предпринять следующие
                                        действия:</p>
                                    <p>а) закрыть все или любую открытую позицию Клиента по текущей котировке;</p>
                                    <p>б) списать со счетов Клиента те суммы, которые Клиент должен Компании;</p>
                                    <p>в) закрыть любой счет Клиента, открытый в Компании;</p>
                                    <p>г) отказать Клиенту в открытии новых счетов.</p>
                                    <p>11. Заявления и гарантии</p>
                                    <p>11.1. Клиент заявляет и гарантирует Компании, что:</p>
                                    <p>а) Вся информация, предоставленная согласно настоящему Соглашению, Условиям ведения
                                        бизнеса и информация, предоставленная Клиентом в Анкете регистрации в Личном
                                        кабинете Клиента, является правдивой, точной и полной во всех аспектах;<br>б)
                                        понимает и принимает, что к нему относятся как к Профессиональному клиенту в
                                        соответствии с определениями MIFID I и MIFID II. В результате Компания будет
                                        рассматривать Клиента как профессионального участника, и Клиент явно отказывается от
                                        каких-либо прав или защиты, возникающих в связи с отказом от розничного статуса в
                                        Компании;</p>
                                    <p>в) прямо признает, что Компания не регулируется в каких-либо юрисдикциях кроме
                                        территории <span>'. get_option('custom_field_value_country_company') .'</span>. Как следствие, Клиент признает, что
                                        Компания не может предложить ему такой же уровень защиты, как и другие регулируемые
                                        организации;</p>
                                    <p>г) должным образом уполномочен заключать настоящее Соглашение, выдавать инструкции и
                                        запросы и выполнять свои обязательства в соответствии с Условиями ведения бизнеса;
                                    </p>
                                    <p>д) Клиент выступает как принципал;</p>
                                    <p>е) если Клиент — физическое лицо, то именно он заполнил Анкету регистрации клиента, а
                                        если Клиент — юридическое лицо, то лицо, заполнившее Анкету регистрации клиента от
                                        имени Клиента, имело все полномочия для этого;</p>
                                    <p>ё) все действия, осуществляемые согласно Условиям ведения бизнеса, не нарушают
                                        никакого закона, постановления, права, уставных норм и правил, применяемых по
                                        отношению к Клиенту или в юрисдикции, резидентом которой является Клиент, или любого
                                        другого соглашения, условиями которого связан Клиент, или которое затрагивает любые
                                        активы Клиента;</p>
                                    <p>ж) все торговые системы, применяемые Клиентом, не нацелены на использование возможной
                                        уязвимости программного обеспечения Компании;</p>
                                    <p>з) НЕ является резидентом США, Канады Японии, Австралии и Новой Зеландии или любой
                                        другой страны, в которой Компания не предоставляет услуги.</p>
                                    <p>и) признает, что Компания не действует в качестве налогового агента в любой
                                        юрисдикции, поэтому любые доходы, прибыль или убытки, возникающие в результате
                                        торговой деятельности Клиента, сообщаются Клиентом в соответствующие налоговые
                                        органы (если таковые имеются) самостоятельно.</p>
                                    <p>11.2. Компания имеет право признать любую позицию Клиента недействительной или
                                        закрыть одну, или несколько позиций Клиента по текущей цене в любое время, по своему
                                        усмотрению в случае нарушения Клиентом п. 11.1 настоящего Соглашения.</p>
                                    <p>12. Регулирующее законодательство и юрисдикция</p>
                                    <p>12.1. Данное Соглашение регулируется законодательством <span>'. get_option('custom_field_value_country_company') .'</span>.</p>
                                    <p>12.2. Клиент безоговорочно:</p>
                                    <p>а) соглашается, что суды<span>'. get_option('custom_field_value_country_company') .'</span> имеют право исключительной
                                        юрисдикции, которая определяет любые процессуальные действия в отношении настоящего
                                        Соглашения&nbsp;</p>
                                    <p>б) подчиняется юрисдикции судов<span>'. get_option('custom_field_value_country_company') .'</span>;</p>
                                    <p>в) отказывается от любого протеста в отношении судебного разбирательства в любом из
                                        таких судов;</p>
                                    <p>г) соглашается никогда не предъявлять претензий касательно того, что такое место
                                        судебного разбирательства неудобно или что оно не имеет юридической силы в отношении
                                        Клиента.</p>
                                    <p>12.3. Клиент безотзывно и в максимальной степени, допускаемой законодательством
                                       <span>'. get_option('custom_field_value_country_company') .'</span>, отказывается как в отношении себя, так и в
                                        отношении своих доходов и активов вне зависимости от их использования или
                                        предполагаемого использования от иммунитета на основании суверенитета или любых
                                        других аналогичных оснований от (a) привлечения к суду, (b) юрисдикции суда, (c)
                                        судебного предписания, предписания об исполнении обязательства в натуре или
                                        возвращении имущества, (d) наложения ареста на активы до или после судебного решения
                                        и (e) исполнения или принудительного исполнения любого судебного решения, вынесенных
                                        в отношении Клиента или его доходов, или его активов в суде любой юрисдикции.</p>
                                    <p>Клиент безотзывно и в максимальной степени, допускаемой законодательством <span>'. get_option('custom_field_value_country_company') .'</span>, соглашается с тем, что он не будет требовать такого иммунитета
                                        при любых исках. Клиент соглашается на удовлетворение требований и предписаний суда,
                                        в том числе, но не ограничиваясь этим, в отношении любых активов Клиента.</p>
                                    <p>12.4. При возникновении разногласий английская версия настоящего Соглашения и Условий
                                        ведения бизнеса обладает приоритетом по сравнению с версиями настоящего Соглашения и
                                        Условий ведения бизнеса на других языках.</p>
                                    <p>12.5. Компания связывается с Клиентом на английском, русском или других языках по
                                        взаимному соглашению, однако, соглашения, которые заключены между Компанией и
                                        Клиентом на английском языке имеют преимущественную силу перед соглашениями, которые
                                        заключены на других языках.</p>
                                    <p>13. Ограничение ответственности</p>
                                    <p>13.1. Клиент обязуется гарантировать Компании защиту от возникновения любых
                                        обязательств, расходов, претензий, ущерба, которые могут возникнуть как прямо, так и
                                        косвенно по причине неспособности Клиента выполнить свои обязательства согласно
                                        Условиям ведения бизнеса.</p>
                                    <p>13.2. Компания не несет ответственности перед Клиентом за какие-либо убытки, потери,
                                        неполученную прибыль, упущенные возможности (из-за возможных движений рынка),
                                        расходы или ущерб в соответствии с условиями настоящего Соглашения, если иное не
                                        оговорено с соответствующими Условиями ведения бизнеса.</p>
                                    <p>13.3. Клиент не вправе передавать третьим лицам пароли от торговой платформы и
                                        Личного кабинета, а также обязуется обеспечивать их сохранность и
                                        конфиденциальность. Все действия, осуществленные в отношении исполнения Условий
                                        ведения бизнеса и/или с использованием логина и пароля, считаются осуществленными
                                        данным Клиентом. Компания не несет ответственности за несанкционированное
                                        использование регистрационных данных третьими лицами.</p>
                                    <p>13.4. Клиент подтверждает и соглашается с тем, что маржинальная торговля является
                                        весьма спекулятивной, как указано в Декларации (Уведомлении) о рисках на Веб-сайте
                                        Компании. Если Клиент не понимает раскрытие информации о рисках; Компания
                                        рекомендует Клиенту обратиться за независимой консультацией или обратиться к своему
                                        представляющему лицу. Клиент подтверждает и соглашается с тем, что маржинальная
                                        торговля может иметь значительные риски, включая, но не ограничиваясь, юридические и
                                        финансовые риски в степени причинения неограниченных убытков без каких-либо гарантий
                                        сохранения капитала, вложенного или генерирующего прибыль. Клиент подтверждает и
                                        соглашается с тем, что маржинальные или не связанные с оборотом продукты подходят
                                        только для профессиональных лиц, которые могут нести финансовые убытки, рискуя
                                        своими первоначальными депозитами, и у которых есть финансовая обеспеченность
                                        понести существенные убытки, не влияя на их уровень жизни.</p>
                                    <p>14. Обстоятельства непреодолимой силы (форс-мажор)</p>
                                    <p>14.1. Компания, имея для этого достаточные основания, вправе констатировать
                                        наступление обстоятельств непреодолимой силы (форс-мажорных обстоятельств). Компания
                                        должным образом предпримет соответствующие шаги для информирования Клиента о
                                        наступлении обстоятельств непреодолимой силы. Обстоятельства непреодолимой силы
                                        включают (но ограничиваясь):</p>
                                    <p>а) любое действие, событие или явление (включая, но не ограничиваясь этим: любую
                                        забастовку, массовые беспорядки или гражданские волнения, террористические акты,
                                        войны, стихийные бедствия, аварии, пожары, наводнения, штормы, перебои
                                        электропитания, коммуникационного, программного и/или электронного оборудования,
                                        гражданские беспорядки), которое по обоснованному мнению Компании привело к
                                        дестабилизации рынка или одного, или нескольких инструментов;</p>
                                    <p>б) приостановка работы, ликвидация или закрытие какого-либо рынка; или введение
                                        ограничений, или специальных, или нестандартных условий торговли на любом рынке; или
                                        в отношении любого такого события.</p>
                                    <p>14.2. Если Компания установила наступление обстоятельств непреодолимой силы, Компания
                                        имеет право (без ущемления других прав Компании согласно Условиям ведения бизнеса)
                                        без предварительного письменного уведомления и в любое время предпринять любой из
                                        следующих шагов:</p>
                                    <p>а) увеличить маржинальные требования;</p>
                                    <p>б) закрыть любую или все открытые позиции Клиента по такой цене, которую Компания
                                        обоснованно считает справедливой;</p>
                                    <p>в) приостановить или изменить применение одного или всех положений Условий ведения
                                        бизнеса, пока наличие обстоятельства непреодолимой силы делает невозможным
                                        соблюдение этих положений Компанией;</p>
                                    <p>г) предпринять или, наоборот, не предпринимать какие-либо действия в отношении
                                        Компании, Клиента и других клиентов, если Компания на достаточных основаниях считает
                                        это целесообразным при данных обстоятельствах.</p>
                                    <p>14.3. Компания не несет ответственности за невыполнение (ненадлежащее выполнение)
                                        обязательств, если исполнению препятствовали обстоятельства непреодолимой силы.</p>
                                    <p>15. Разное</p>
                                    <p>15.1. В случае получения Компанией отзыва платежа по сделке, Компания сохраняет за
                                        собой право заморозить текущий баланс клиента на сумму отозванного платежа до
                                        окончания разбирательства по данному вопросу.</p>
                                    <p>15.2. При отсутствии торговой активности на счете Клиента в течение более чем 30
                                        (тридцати дней), с момента закрытия последней активной позиции, Компания имеет право
                                        взимать плату за содержание такого торгового счета в размере 50 долларов в месяц.
                                    </p>
                                    <p>15.3. При отсутствии торговой активности на счете Клиента в течение более 3 (трех)
                                        месяцев или отсутствия денежных средств на счету Клиента на протяжении более
                                        1(одного) месяца, Компания имеет право признать такой счет неактивным, закрыть его и
                                        перенести в архив.</p>
                                    <p>15.4. Компания имеет право приостановить обслуживание Клиента в любое время, имея для
                                        этого достаточные основания (предварительное уведомление Клиента об этом
                                        необязательно).</p>
                                    <p>15.5. При возникновении ситуаций, не описанных в Условиях ведения бизнеса, Компания
                                        будет действовать в соответствии с принятой рыночной практикой, основываясь на
                                        принципах честности и справедливости.</p>
                                    <p>15.6. Полное или частичное применение Компанией любого права, равно как и его
                                        неприменение (в соответствии с настоящим Соглашением или действующим
                                        законодательством), не может служить причиной отказа в дальнейшем применении
                                        Компанией подобных или иных прав согласно соответствующим Регламентирующим
                                        документам или закону.</p>
                                    <p>15.7. Компания вправе принять решение о полном или частичном освобождении Клиента от
                                        ответственности перед Компанией за нарушения Клиентом положений Условий ведения
                                        бизнеса в период его действия либо принять иное компромиссное решение. При этом
                                        принимаются к рассмотрению все нарушения, независимо от давности их совершения, в
                                        связи с чем Компания вправе предъявить претензии Клиенту в любое время.
                                        Вышеназванные обстоятельства не препятствуют Компании реализовывать иные свои права,
                                        предусмотренные Условиями ведения бизнеса.</p>
                                    <p>15.8. Права Компании, согласно Условиям Ведения бизнеса, являются дополнительными к
                                        правам, установленным Законодательством<span>'. get_option('custom_field_value_country_company') .'</span>.</p>
                                    <p>15.9. Компания имеет право передать права и обязанности целиком или частично третьей
                                        стороне, при условии должного уведомления Клиента и согласия правопреемника с
                                        условиями настоящего Соглашения и применимого регламентирующего документа.</p>
                                    <p>15.10. Если какое-либо положение Условий ведения бизнеса (либо любая часть любого
                                        положения) признается судом надлежащей юрисдикции, не имеющим законную силу, то
                                        такое положение будет рассматриваться как отдельная часть Соглашения или Условий
                                        ведения бизнеса, и это не отразится на законной силе оставшейся части настоящего
                                        Соглашения.</p>
                                    <p>16. Поправки и прекращение действия</p>
                                    <p>16.1. Клиент признает, что Компания имеет право внести поправки и изменения:</p>
                                    <p>а) в положения настоящего Соглашения или любого Условия ведения бизнеса в любое
                                        время, уведомив Клиента об изменениях;</p>
                                    <p>б) в значения спредов, свопов и дивидендов, указанных в спецификации контрактов без
                                        предварительного уведомления Клиента;</p>
                                    <p>в) в иные торговые условия с письменным уведомлением Клиента минимум за 1 (один)
                                        календарный день.</p>
                                    <p>Поправки вступают в силу с даты, указанной в уведомлении. В случае наступления
                                        обстоятельств непреодолимой силы на рынках Клиент признает право Компании внести
                                        поправки и изменения в Условиях ведения бизнеса немедленно, без предварительного
                                        уведомления.</p>
                                    <p>16.2. Клиент соглашается с тем, что при введении Компанией новых продуктов и услуг
                                        предварительное уведомление Клиента не требуется.</p>
                                    <p>16.3. Клиент может приостановить или прекратить действие данного Соглашения при
                                        условии письменного уведомления Компании.</p>
                                    <p>16.4. Компания может приостановить или прекратить действия настоящего Соглашения
                                        немедленно, уведомив Клиента о своем намерении.</p>
                                    <p>16.5. Компания оставляет за собой право отказать Клиенту в предоставлении сервиса
                                        Личный кабинет без указания причин.</p>
                                    <p>16.6. Прекращение действия Соглашения не аннулирует обязательства со стороны Компании
                                        и со стороны Клиента, которые уже возникли согласно данному Соглашению или
                                        соответствующему Регламентирующему документу, в том числе в отношении открытых
                                        позиций или операций по снятию/поступлению денежных средств на счет Клиента.</p>
                                    <p>16.7. При расторжении данного Соглашения задолженность Клиента перед Компанией должна
                                        быть погашена незамедлительно, включая, но не ограничиваясь:</p>
                                    <p>а) задолженность по любым платежам и комиссиям;</p>
                                    <p>Задолженность Клиента перед Компанией должна быть погашена незамедлительно, включая,
                                        но не ограничиваясь:</p>
                                    <p>б) задолженность по любым платежам и комиссиям;</p>
                                    <p>в) любые расходы, связанные с расторжением данного Соглашения;</p>
                                    <p>г) любые иные потери и расходы в связи с закрытием позиции или в связи с какими-либо
                                        другими обязательствами Компании, возникшими по инициативе или по вине Клиента.</p>
                             
                            [:en]
                            <p>1. Introduction</p>
                            <p>1.1. <span>'. get_option('custom_field_value_company_name') .'</span> (hereinafter, the Company), whose registered office is located at
                                <span>'. get_option('custom_field_value_address') .'</span>, provides clients with access to its proprietary client portal gateway and
                                other ancillary services (hereinafter, the Services) under the terms of this agreement
                                (hereinafter, Agreement) to any individual or legal entity (hereinafter, Client)
                                (defined individuals over 18 years of age and legal entities of non-prohibited countries
                                in which the Services are not offered).</p>
                            <p>1.2. The following documents are an integral part of this Agreement:</p>
                            <p>a) Risk Disclosures;&nbsp;<br>b) Regulations for Non-Trading Operations;&nbsp;<br>c) Any
                                other applicable documents as included on the Company Website(s) and associated
                                materials.</p>
                            <p>1.3. This Agreement and the documents listed above are collectively referred to as the
                                “Terms of Business”.</p>
                            <p>1.4. The Terms of Business should be carefully read by the Client, as it governs all the
                                Client’s trading and non-trading operations. By accepting the terms of this Agreement,
                                the Client also accepts the Terms of Business as listed below.</p>
                            <p>1.5. The terms of this Agreement shall be considered as accepted unconditionally by the
                                Client upon the Company’s receipt of an advance payment made by the Client in accordance
                                with this Agreement.</p>
                            <p>1.6. As soon as the Company receives the Client’s advance payment, every operation made
                                by the Client in the Client Portal or with associated trading platform(s) shall be
                                subject to the Terms of Business.</p>
                            <p>1.7. The Client and the Company entering into each operation in the client portal or in
                                the associated trading platform as principals, and the Company DOES not act as an agent
                                on the Client’s behalf. The Client shall be directly and fully responsible for
                                fulfilling all of his/her obligations regarding his/her operations within the client
                                portal or on the associated trading platform. If the Client acts on behalf of someone
                                else, regardless of whether that individual is identified, the Company shall not view
                                that individual as a Client and shall not bear any responsibility to him/her unless
                                otherwise specifically agreed.</p>
                            <p>1.8. The terms used in this&nbsp;<br>Agreement are defined in Clause 17.</p>
                            <p>1.8.1.&nbsp;<strong>«Payment»</strong> shall mean the deposit of funds by the Client to
                                pay for future expenses.</p>
                            <p>1.8.2.&nbsp;<strong>«Base Currency»</strong> shall mean the first currency in the
                                currency pair, against which the Client buys or sells the quote currency.</p>
                            <p>1.8.3.&nbsp;<strong>«Balance»</strong> shall mean the total financial result of all
                                completed transactions and deposit/withdrawal operations on the trading account.</p>
                            <p>1.8.4.&nbsp;<strong>«Credit/Debit Card»</strong> shall mean a thin plastic card that
                                contains identification information, with the help of which the cardholder can pay for
                                purchases and services, as well as withdraw cash from the account.</p>
                            <p>1.8.5.&nbsp;<strong>«Currency Pair»</strong> shall mean the object of a transaction,
                                based on the change in value of one currency against another.</p>
                            <p>1.8.6.&nbsp;<strong>«Website»</strong> shall mean Company’s website at <span>'. get_option('custom_field_value_company_name') .'</span></p>
                            <p>1.8.7.&nbsp;<strong>«Client’s External Account»</strong> shall mean the bank and/or
                                electronic account of the Client or the Client’s Authorized Person.</p>
                            <p>1.8.8.&nbsp;<strong>«Long Position»</strong> shall mean a Buy position that appreciates
                                in value if market prices increase. Regarding currency pairs: buying the base currency
                                against the quote currency.</p>
                            <p>1.8.9.&nbsp;<strong>«Identification Information»</strong> shall mean, for an individual –
                                the passport/ID information specified in the Client Registration Form, and for a legal
                                entity – the information from registration and founding documents specified while
                                registering.</p>
                            <p>1.8.10.&nbsp;<strong>«Instrument»</strong> shall mean any currency pair, cryptocurrency
                                pair, spot metal, contract for difference and other financial instruments offered by the
                                Company.</p>
                            <p>1.8.11.&nbsp;<strong>«Client Account»</strong> shall mean any account opened by the
                                Client at the Company including transitory accounts, trading accounts, partner accounts,
                                manager’s accounts, investor’s accounts and other account types.</p>
                            <p>1.8.12.&nbsp;<strong>«Short Position»&nbsp;</strong>shall mean a Sell position that
                                appreciates in value if market prices fall. Regarding currency pairs: selling the base
                                currency against the quote currency.</p>
                            <p>1.8.13.&nbsp;<strong>«Rate»</strong> shall mean the value of the base currency in the
                                terms of the quote currency.</p>
                            <p>1.8.14.&nbsp;<strong>«Client portal gateway»</strong> shall mean the Client’s personal
                                page on the Company’s website, access to which is secured by a login and password. This
                                service is provided to the Client by the Company on the basis of the Client Agreement
                                concluded between the Company and Client.</p>
                            <p>1.8.15.&nbsp;<strong>«Margin Trading»</strong> shall mean trading using leverage, where
                                the Client may make transactions of a certain size, while having significantly less
                                funds on their trading account.</p>
                            <p>1.8.16.&nbsp;<strong>«Inactive Trading Account»</strong> shall mean a Client’s trading
                                account which has not had an open position, pending order, or non- trading operation in
                                a 3 month period.</p>
                            <p>1.8.17.&nbsp;<strong>«Client Transactions»</strong> shall mean instructions and requests
                                by the Client to the Company in relation to their trading and non-trading operations in
                                Clients Portal and trading platforms.</p>
                            <p>1.8.18.&nbsp;<strong>«Open Position»&nbsp;</strong>shall mean the result of the first
                                part of a completed transaction. In this case the Client shall be obliged to:</p>
                            <p>a) make a counter transaction of the same volume&nbsp;<br>b) maintain equity no lower
                                than the necessary margin level (this level may vary depending on an account type. For
                                more information, please refer to the Company’s Website).</p>
                            <p>1.18.19. «Written Notification» shall mean an electronic document (including emails,
                                internal mail on the client terminal etc.) or an announcement on the “Company News” page
                                on the Website. A written notice is considered to be received by the Client:</p>
                            <p>a) an hour once it has been sent to the Client’s email address;&nbsp;<br>b) an hour after
                                the news has been published on the Website.</p>
                            <p>1.18.20.&nbsp;<strong>«Instruction»</strong> shall mean the Client’s instruction to the
                                Company to open/close a position, place, remove or change the level of the pending
                                order.</p>
                            <p>1.18.21.&nbsp;<strong>«Withdrawal Request»</strong> shall mean an instruction given via
                                the Clients Portal account on the Company website to withdraw funds from the trading
                                account and transfer them to the Client’s external account.</p>
                            <p>1.8.22.&nbsp;<strong>«Server»</strong> shall mean all programs and technology used to
                                make and carry out the Client’s instructions, as well as presenting trading information
                                in real-time, with consideration of the mutual obligations of the Client and Company in
                                correspondence with the relevant Regulation.</p>
                            <p>1.8.23.&nbsp;<strong>«Spread»</strong> shall mean the difference between the Ask and Bid
                                prices.</p>
                            <p>1.8.24.&nbsp;<strong>«Trading Platform»&nbsp;</strong>shall mean all programs and
                                technology that present quotes in real- time, allows placement/modification/ deletion of
                                orders and calculate all mutual obligations of the Client and the Company. For the
                                purposes of simplification for this Agreement, a trading platform consists of a server
                                and client terminal.</p>
                            <p>1.8.25.&nbsp;<strong>«Client’s Authorised Person»</strong> shall mean:</p>
                            <p>a) an individual over 18 years of age, citizen and/or tax resident of any country, except
                                for those countries in which the Company does not offer the given service, authorized to
                                perform or receive non-cash (bank and/or electronic) transfers on behalf of the Client,
                                for the purpose of crediting funds to the Client’s account or withdrawing funds from the
                                Client’s account;<br>b) a legal body or entity of another business legal structure,
                                organized under the existing laws of any country, except for those countries in which
                                the Company does not offer the given service, authorized to perform or receive a
                                non-cash (bank or/and electronic) transfer on behalf of the Client for the purpose of
                                crediting funds to the Client’s account or withdrawing funds from the Client’s account.
                            </p>
                            <p>1.8.26.&nbsp;<strong>«Force Majeure»</strong> shall mean lack of conformity of the terms
                                and conditions of the Company and the terms and conditions of the counterparty, current
                                market situation, possibilities of software or hardware of the Company or other
                                situations which cannot be foreseen.</p>
                            <p>2. Services</p>
                            <p>2.1. Subject to the Client fulfilling the obligations under this Agreement and the
                                Regulations, the Company shall provide the Client with the ability to make operations
                                offered within the client portal and the Terms of Business.</p>
                            <p>2.2. The Company is merely providing a technological platform to the Client and process
                                the transactions on an execution- only basis, neither managing the account nor advising
                                the Client. The Company shall process the Client’s transactions even if the transactions
                                shall result in a loss for the Client. The Company is under no obligation, unless
                                otherwise agreed in this Agreement and the Terms of Business, to monitor or advise the
                                Client on the status of any Client transaction, to make margin calls, or to close out
                                any of the Client’s open positions. Unless otherwise specifically agreed, the Company is
                                not obligated to make an attempt to execute the Client’s order using quotes more
                                favorable than those offered through the trading platform.</p>
                            <p>2.3. The Client shall not be entitled to demand the Company to provide investment or
                                trading advice or any information intended to encourage the Client to make any
                                particular transaction.</p>
                            <p>2.4. In the event that the Company does provide advice, information or provide advice,
                                information or recommendations to the Client, the Company shall not be held responsible
                                for the consequences or result received from using these recommendations or advice.</p>
                            <p>The Client acknowledges that the Company shall not, in the absence of fraud, intentional
                                failure to carry out its responsibilities or gross negligence, be liable for any losses,
                                costs, expenses or damages suffered by the Client arising from any inaccuracy or mistake
                                in any information given to the Client including, but not limited to, information
                                regarding any Client transactions. Though the Company has the right to void or close any
                                transaction in the specific circumstances set out in this Agreement or Terms of
                                Business, any transaction the Client carries out following such an inaccuracy or mistake
                                shall nonetheless remain valid and binding in all respects both on the side of the
                                Company and of the Client.</p>
                            <p>2.5. The Company shall not execute or process physical delivery of currency in the
                                settlement of any trading operation. Profit or loss in the deposit currency is deposited
                                to/withdrawn from the Client’s trading account immediately after a position is
                                closed.</p>
                            <p>2.6. The Company, partners of the Company or other affiliated parties may have material
                                interest, a legal relationship or arrangement concerning a specific transaction in
                                Clients Portal or in the trading platform or interests, relationships, or arrangements
                                that may be in conflict with the interests of the Client. By way of example, the Company
                                may:</p>
                            <p>a) act as Principal concerning any instrument on the Company’s own account by selling to
                                or buying the instrument from the Client;&nbsp;<br>b) combine the Client’s transaction
                                with that of another Client;&nbsp;<br>c) buy or sell an instrument the Company offers to
                                the Client;&nbsp;<br>d) advise and provide other services to partners or other clients
                                of the Company who may have interests in instruments or underlying assets which conflict
                                with the Client’s interests.</p>
                            <p>The Client consents to and grants the Company authority to deal with or for the Client in
                                any manner which the Company considers appropriate, notwithstanding any conflict of
                                interest or the existence of any material interest in any transaction in the client
                                portal or in the trading platform, without prior notification of the Client. The
                                Company’s employees are required to comply with a policy of impartiality and to
                                disregard any material interests or conflicts of interest when advising the Client.</p>
                            <p>2.7. The Company may periodically act on a Client’s behalf in relations with parties with
                                whom the Company or another affiliated party has an agreement permitting the Company to
                                receive goods or services. The Company ensures that such arrangements shall operate in
                                the best interest of Clients, for example, arrangements granting access to information
                                or other benefits/services which would not otherwise be available.</p>
                            <p>2.8. Should the Company provide Swap-free accounts upon the Client’s request, the Client
                                accepts the terms and conditions of the Agreement and agrees, amongst other things, not
                                to be charged for swaps on any trading account. However, if the Company suspects any
                                fraud, manipulation, swap- arbitrage or other forms of deceitful or fraudulent activity
                                related or connected to any/all of the transactions on one/several Client’s account(s)
                                with the Company, the Company reserves the right to decide, at its sole discretion, to
                                close all open positions on the Client’s trading account and recover costs (equivalent
                                to the swap and/or any profit amount) for all transactions currently and/or previously
                                made on the account, whilst declining any further requests from the Client to be
                                exempted from any swap charges.</p>
                            <p>Swap-free requests made apply to all of the Client’s trading accounts. The Company
                                reserves the right to discontinue the provision of the Swap-free accounts without any
                                prior notice.</p>
                            <p>2.9. The Company aims to provide cutting- edge Services to Clients and Client warrants
                                that it will make use of Services in fairness and with honestly. Shall the Company
                                detect or suspect fraud or other manipulation including, amongst others, latency
                                arbitrages, dishonest scalping or others, the Company reserves the right to unilaterally
                                suspend the account of the Client and to recalculate all open and close positions to
                                reflect market conditions. In such event, the Company reserves the right to
                                deposit/withdrawn fund from the Client’s account.</p>
                            <p>3. Client Requests and Instructions</p>
                            <p>3.1. The Company processes and executes Client requests and instructions in accordance
                                with the Terms of Business.</p>
                            <p>3.2. The Company is entitled to decline a Client’s request or instruction if any of the
                                conditions set out in the Terms of Business have not been satisfied before the request
                                or instruction is processed by the Company. However, the Company may, at its sole
                                discretion, accept and execute the Client request or instruction, notwithstanding the
                                lack of compliance with Terms of Business.</p>
                            <p>If the Company executes the Client request or instruction and subsequently becomes aware
                                of a breach of the conditions of the Terms of Business, the Company may act in
                                accordance with the Terms of Business.</p>
                            <p>4. Netting</p>
                            <p>4.1. For transactions between the Client and the Company, a conversion will take place
                                using the current exchange rates in accordance with the Terms of Business.</p>
                            <p>4.2. If the accrued amount owed the Company by the Client under the Terms of Business is
                                equal to the accrued amount owed the Client by the Company, the obligations of both
                                sides will be canceled out.</p>
                            <p>4.3 If the accrued amount owed by one party under the Terms of Business exceeds the
                                accrued amount owed by the other party, then the party with the larger accrued amount
                                shall pay the excess to the other party and following which all obligations to pay will
                                be automatically satisfied and discharged.</p>
                            <p>4.4. The Client is obligated to pay any amount due, including all commissions, charges
                                and other costs determined by the Company.</p>
                            <p>4.5. The Client may not transfer rights, vest responsibilities, or otherwise transfer or
                                purport to assign rights or obligations under the Terms of Business without the
                                Company’s written notice. Any purported assignment or transfer in violation of this
                                condition shall be considered void.</p>
                            <p>5. Payments</p>
                            <p>5.1. The Client may deposit funds to a Client account at any time.</p>
                            <p>5.2. Fund deposit to and withdrawal from the Client’s account shall be governed by the
                                Terms of Business for Non-Trading Operations.</p>
                            <p>5.3. If the Client is under the obligation to pay any amount to the Company which exceeds
                                the Equity of the account, the Client shall pay the excess within 2 business days of the
                                obligation arising.</p>
                            <p>5.4. The Client acknowledges and agrees that (without prejudice to any of the Company’s
                                other rights to close out the Client’s open positions and exercise other default
                                remedies against the Client in accordance with the Regulations) where a sum is due and
                                payable to the Company in accordance with the Terms of Business and sufficient cleared
                                funds have not yet been credited to the Client’s account, the Company shall be entitled
                                to treat the Client as having failed to make a payment to the Company and to exercise
                                its rights under the Terms of Business.</p>
                            <p>5.5. The Client shall hold full responsibility for the accuracy of payments executed. If
                                the Company bank details change, the Client shall bear full responsibility for any
                                payments carried out to the outdated bank details from the moment the new details are
                                published in client portal gateway.</p>
                            <p>5.6. Acceptance of payments by clients of the Company by means of international card
                                payment systems can also be carried out by official partners of the Company, information
                                about which is provided in the Terms of Business for Non-trading Operations and in
                                Clients Portal.</p>
                            <p>6. Client Funds and Interest</p>
                            <p>6.1. Client funds are held on Company accounts including segregated accounts opened in
                                the Company’s name for holding Client funds separate from the Company’s funds.</p>
                            <p>6.2. The Client acknowledges and agrees that the Company will not pay interest to the
                                Client on funds located on Client accounts. The Company reserves the right to establish
                                when and how much interest it will pay on Client funds.</p>
                            <p>6.3. Using of bonuses the Company may add a bonus to a trading account.</p>
                            <p>The amount of the bonus depends on the size of the Client’s deposit or the conditions of
                                the personal offer made by the Company to the Client, under which bonus funds are
                                credited to the Client.</p>
                            <p>Bonus funds credited to the Client’s trading account are not a financial obligation from
                                the side of the Company to the Client.</p>
                            <p>The funds in the Client’s trading account are available for withdrawal only after the
                                Client completes the required trading turnover on his account.</p>
                            <p>The size of the mandatory turnover is equal to the amount of the bonus multiplied by his
                                leverage. The bonus leverage is equal to 35, and for bonuses, the size of which is more
                                then 50% of the total deposit of the Client, the leverage equals 40.</p>
                            <p>Bonus offers may be limited in duration.<br>Trades with a “no income” result (in case the
                                strike price of an asset is equal to the expiration price) are not counted when
                                calculating the mandatory trading turnover made by the Client.<br>Refusal from the bonus
                                or its cancellation is possible only if there were no trading operations on the account
                                starting from the moment the bonus funds were credited.</p>
                            <p>Upon expiration of the bonus offer, the bonus accrued within its framework may be debited
                                from the Client’s trading account.<br>The bonus is cleared if the balance of the
                                Client’s trading account falls below the minimum allowable trade’s size.</p>
                            <p>7. Complaints and Disputes</p>
                            <p>7.1. The procedure for handling complaints and disputes is described in the corresponding
                                Terms of Business.</p>
                            <p>8. Communications</p>
                            <p>8.1. The rules for communication between the Client and the Company are set out in the
                                Terms of Business.</p>
                            <p>8.2. The Client shall submit all trading instructions through the trading platforms. For
                                specific account types, the Client may get phone support.</p>
                            <p>8.3. The Client shall submit requests to debit or credit funds only via the client portal
                                gateway and in accordance with the Terms of Business for Non-trading Operations.</p>
                            <p>8.4. By accepting the terms of this Agreement, the Client also agrees to receive emails
                                from the Company to the Client’s personal email address and SMS messages to the mobile
                                telephone number registered in client portal.</p>
                            <p>9. Time of Essence</p>
                            <p>9.1. The time periods of fulfillment by the Client and the Company of their obligations
                                shall be an essential condition of all Terms of Business.</p>
                            <p>10. Events of Default</p>
                            <p>10.1. Each of the following circumstances constitutes an event of default:</p>
                            <p>a) Client’s failure to pay any due amount under the corresponding Terms of Business;&nbsp;<br>b)
                                Client’s failure to fulfill any obligation to the Company;&nbsp;<br>c) the initiation of
                                proceedings by a third party for the Client’s bankruptcy or for the company’s
                                liquidation (if the Client is a legal entity), or for the appointment of an
                                administrator or receiver in respect of the Client or any of the Client’s assets (if the
                                Client is a legal entity), or (for both legal entities and individuals) if the Client
                                makes a contract or an arrangement with their creditors concerning the settlement of
                                their debt or any other analogous procedure is initiated regarding the Client;&nbsp;<br>d)
                                any representation or warranty made by the Client in Clause 11 hereof is or becomes
                                false;&nbsp;<br>e) Client’s inability to pay debts when they fall due;&nbsp;<br>f) if
                                the Client dies or becomes legally incompetent;&nbsp;<br>g) any other circumstance where<br>the
                                Company reasonably believes that it is necessary or desirable to take any action set out
                                in Clause 10.2 hereof.</p>
                            <p>10.2. In cases of events of default by the Client, the Company may, at its sole
                                discretion, at any time and without prior written notice to the Client, take one or more
                                of the following steps:</p>
                            <p>a) close out all or any of the Client’s open positions at the current quote;&nbsp;<br>b)
                                debit the Client’s account for amounts owed to the Company;&nbsp;<br>c) close any or all
                                of the Client’s accounts held within the Company;&nbsp;<br>d) refuse to open new
                                accounts under the Client’s name.</p>
                            <p>11. Representations and Warranties</p>
                            <p>11.1. The Client shall represent and warrant that:</p>
                            <p>a) all information presented in this Agreement, the Terms of Business and the Client
                                Registration Form is true, complete and accurate in all material respects;&nbsp;<br>b)
                                the Client warrants that he shall be treated as a Professional Client as per MIFID I and
                                MIFID II definitions. As a result, the Company will treat the Client as a professional
                                client and the Client explicitly waive any rights or protection arising from opting out
                                the retail status with the Company;&nbsp;<br>c) the Client explicitly acknowledges that
                                the Company is not regulated in any jurisdictions and that the Services offered are not
                                regulated within the territory of <span>'. get_option('custom_field_value_country_company') .'</span>. As a consequence, the Client acknowledge that
                                the Company cannot offer him the same level of protection as other regulated entities;&nbsp;<br>d)
                                the Client is duly authorized to enter into this Agreement, to issue instructions and
                                requests and to fulfill his/her obligations in accordance with the Terms of Business;&nbsp;<br>e)
                                the Client acts as principal;&nbsp;<br>f) the Client is the individual who submitted the
                                Client Registration Form or if the Client is a legal entity, the person who provided the
                                Client Registration Form on the Client’s behalf is duly authorized to do so;&nbsp;<br>g)
                                all actions performed under the Regulations will not violate any law, ordinance,
                                charter, by-law or rule applicable to the Client or in the jurisdiction in which the
                                Client is resident, or any agreement by which the Client is bound or that concerns any
                                of the Client’s assets;&nbsp;<br>h) any trading systems used by the Client are not
                                targeted at exploiting any weakness in the Company’s software;&nbsp;<br>i) the Client
                                warrants that he is NOT a USA resident, resident of Canada, of Japan, Australia and New
                                Zealand.<br>j) the Client acknowledges that the Company is not acting as a Tax Agent in
                                any jurisdictions, therefore any revenues, profit or loss arising from the Client’s
                                trading activities shall be duly reported by the Client to the relevant tax authorities
                                (if any).</p>
                            <p>11.2. If the Client breaches clause 11.1 of this Agreement, the Company has the right to
                                void any position or close out any or all of the Client’s positions at the current price
                                at any time, at its sole discretion.</p>
                            <p>12. Governing Law and Jurisdiction</p>
                            <p>12.1. This Agreement is governed by the laws of <span>'. get_option('custom_field_value_country_company') .'</span>.</p>
                            <p>12.2. With respect to any proceedings, the Client irrevocably:</p>
                            <p>a) agrees that the courts of <span>'. get_option('custom_field_value_country_company') .'</span> shall have exclusive jurisdiction to settle any
                                proceedings regarding this Agreement;&nbsp;<br>b) submits to the jurisdiction of the
                                courts of <span>'. get_option('custom_field_value_country_company') .'</span>;&nbsp;<br>c) waives any objection which the Client may have at any time
                                to the laying of any proceedings brought in any such court;&nbsp;<br>d) agrees not to
                                claim that such proceedings have been brought in an inconvenient forum or that such
                                court does not have jurisdiction over the Client.</p>
                            <p>12.3. The Client irrevocably waives to the fullest extent permitted by applicable laws of
                                <span>'. get_option('custom_field_value_country_company') .'</span>, with respect to the Client and the Client’s revenues and assets (regardless of
                                their use or intended use), all immunity (on the grounds of sovereignty or other similar
                                grounds) from (a) suit, (b) jurisdiction of any courts, (c) relief by way of injunction,
                                order for specific performance or for recovery of property, (d) attachment of assets
                                (whether before or after judgement) and (e) execution or enforcement of any judgement to
                                which the Client or the Client’s revenues or assets might otherwise be entitled in any
                                proceedings in the courts of any jurisdiction and irrevocably agrees to the extent
                                permissible by the law of <span>'. get_option('custom_field_value_country_company') .'</span> not claim any such immunity in any proceedings.</p>
                            <p>The Client consents to satisfying all requirements and court orders in connection with
                                such proceedings, particularly, but not limited to, those regarding any of the Client’s
                                assets.</p>
                            <p>12.4. Where this Agreement and the Regulations are issued in a language other than
                                English, the English language version shall prevail in the event of any conflict.</p>
                            <p>12.5. The Company will communicate with the Client in English, Russian or other languages
                                as per mutual agreement, however agreements the Company concludes with the Client shall
                                be in English.</p>
                            <p>13. Limitation of Liability</p>
                            <p>13.1. The Client will indemnify the Company for all liabilities, costs, claims, demands
                                and expenses of any nature which the Company suffers or incurs as a direct or indirect
                                result of any failure by the Client to fulfill any of the obligations under the Terms of
                                Business.</p>
                            <p>13.2. The Company shall in no circumstances be liable to the Client for any consequential
                                direct or indirect losses, loss of profits, missed opportunities (due to subsequent
                                market movement), costs, expenses or damages the Client may suffer in relation to this
                                Agreement, unless otherwise agreed in the Terms of Business.</p>
                            <p>13.3. The Client does not have the right to give third parties access passwords to the
                                trading platform or client portal gateway and agrees to keep them secure and
                                confidential. All actions related to the fulfillment of the Terms of Business and/or the
                                usage of logins and passwords are considered executed by the Client. The Company does
                                not bear responsibility for the unauthorized use of registration data by third
                                parties.<br>13.4. The Client acknowledges and accepts that trading in leveraged or
                                non-leveraged products is highly speculative as specified in the Risk Disclosure on the
                                Company’s Website. Shall the Client does not understand the Risk Disclosures; the
                                Company recommend the Client to seek independent advice or contact his customer
                                representative. The Client acknowledges and accepts that leveraged or non-leveraged
                                products may bring significant risks, including, but not limited to, legal and financial
                                risks to the extent of causing unlimited losses, without any guarantee of retaining the
                                capital invested or generating any profits. The Client acknowledges and accepts that
                                trading leveraged or non- leveraged products are suitable only for professional
                                individuals who are able to bear financial losses risking their initial deposits and who
                                have the financial comfort to suffer substantial losses without an impact on their
                                living standard.</p>
                            <p>14. Force Majeure</p>
                            <p>14.1. КThe Company may, having just cause, determine that a Force Majeure event
                                (uncontrollable circumstances) exists, in which case the Company will, in due course,
                                take reasonable steps to inform the Client. Force Majeure circumstances includes without
                                limitation:</p>
                            <p>a) any act, event or occurrence (including, without limitation, any strike, riot or civil
                                commotion, terrorism, war, act of God, accident, fire, flood, storm, interruption of
                                power supply, communication equipment or supplier failure, hardware or software failure,
                                civil unrest, government sanction, blockage, embargo, lockouts) which, in the Company’s
                                reasonable opinion, prevents the Company from maintaining market stability in one or
                                more of the instruments;&nbsp;<br>b) the suspension, liquidation or closure of any
                                market or the imposition of limits or special or unusual terms on trading on any such
                                market or on any such event.</p>
                            <p>14.2. If the Company determines with just cause that a Force Majeure event exists
                                (without infringing any other rights under the Terms of Business), the Company may at
                                any time and without giving prior written notification take any of the following
                                steps:</p>
                            <p>a) increase margin requirements;&nbsp;<br>b) close any or all open Client positions at
                                prices the Company reasonably considers fair;&nbsp;<br>c) suspend or modify the
                                application of any or all terms of the Terms of Business to the extent that the Force
                                Majeure event makes it impossible or impractical for the Company to comply with them;&nbsp;<br>d)
                                take or not take action concerning the Company, the Client and other clients as the
                                Company deems to be reasonably appropriate in the circumstances.</p>
                            <p>14.3. The Company does not bear responsibility for not fulfilling (improperly fulfilling)
                                its obligations when prevented from doing so by force major circumstances.</p>
                            <p>15. Miscellaneous</p>
                            <p>15.1. In the case that the Company receives a request for a refund of the transaction,
                                the Company reserves the right to freeze the current balance of the client for the
                                refund amount until the end of proceedings on this issue.</p>
                            <p>15.2. In the absence of trading activity on the Client’s account for more than 30
                                (thirty) days, since the last active position is closed, the Company has the right to
                                charge a fee for maintaining this trading account at the rate of $50 per month.</p>
                            <p>15.3. In the absence of trading activity on the Client’s account for more than 3 (three)
                                months or in the absence of money on the Client’s account for more than 1 (one) month,
                                the Company has the right to consider this account to be inactive, close it and transfer
                                it to the archive.</p>
                            <p>15.4. The Company has the right to suspend service to the Client at any time for any
                                justified reason (notification of the Client is not required).</p>
                            <p>15.5. In the event that a situation arises that is not covered under the Terms of
                                Business, the Company will resolve the matter on the basis of good faith and fairness
                                and, when appropriate, by taking action consistent with market practice.</p>
                            <p>15.6. No single or partial exercise or failure or delay in exercising any right, power or
                                privilege (under this Agreement or at law) by the Company shall constitute a waiver by
                                the Company of, or impair or preclude any exercise or further exercise of that or any
                                other right, power or remedy arising under the Regulations or applicable law.</p>
                            <p>15.7. The Company may in whole or in part release the Client from liability stemming from
                                the latter’s violation of the conditions of the Terms of Business during the period of
                                it being in force or, alternatively, may reach a compromise decision. In this case, all
                                violations, regardless of how long ago they were committed and in connection with which
                                the Company may file a grievance with the Client at any time, are taken into
                                consideration. The above stated conditions do not prevent the Company from exercising
                                its other rights in accordance with the Regulations.</p>
                            <p>15.8. The rights and remedies provided to the Company under the Terms of Business are
                                cumulative and are not exclusive of any rights or remedies provided under the law of
                                <span>'. get_option('custom_field_value_country_company') .'</span>.</p>
                            <p>15.9. The Company may transfer its rights and obligations to a third party in whole or in
                                part, subject to due notification to the Client and consent of the assignee to the terms
                                hereof and of the applicable Regulations.</p>
                            <p>15.10. If any term of the Terms of Business (or any part of any term) shall be held by a
                                court оf competent jurisdiction to be unenforceable for any reason, then such term shall
                                be deemed severable and not form part of this Agreement and the Terms of Business, but
                                the remainder of the Agreement shall continue to be valid and enforceable.</p>
                            <p>16. Amendment and Termination</p>
                            <p>16.1. The Client acknowledges that the Company shall have the right to amend:</p>
                            <p>a) any part of this Agreement or the Terms of Business at any time, having provided to
                                the Client the notice of such amendments;&nbsp;<br>b) the value of a spread, swap and
                                dividend specified in the Contract Specifications without prior notification to the
                                Client;&nbsp;<br>c) other trading conditions with written notification to the Client of
                                a minimum of 1 (one) calendar day.</p>
                            <p>Amendments come into force from the date specified in the notice. In event of force major
                                circumstances at the markets the Client recognizes the right of the Company to make
                                amendments to the Terms of Business immediately, without prior notification.</p>
                            <p>16.2. The Client acknowledges that the Company may introduce new products and services
                                without providing prior notification.</p>
                            <p>16.3. The Client may suspend or terminate this Agreement by giving the Company written
                                notification.</p>
                            <p>16.4. The Company may suspend or terminate this Agreement immediately by giving the
                                Client notification.</p>
                            <p>16.5. The Company retains the right to refuse the Client for providing service of Clients
                                Portal without explanation.</p>
                            <p>16.6. Termination of this Agreement will not abrogate any obligations held by either the
                                Client or the Company regarding any outstanding transaction or any legal rights or
                                obligations which may already have arisen under this Agreement or the Regulations,
                                particularly relating to any open positions and deposit/withdrawal operations made on
                                the Client’s account.</p>
                            <p>16.7. Upon termination of this Agreement, all amounts owed by the Client to the Company
                                must be settled immediately, including, but not limited to:</p>
                            <p>a) all outstanding fees, charges and commissions;&nbsp;<br>b) any expenses incurred by
                                terminating this Agreement;&nbsp;<br>c) any losses and expenses sustained by the Company
                                in closing out any transactions or in connection with any other of the Company’s
                                obligations initiated or caused by the Client.</p>

                            [:]')?>
                        </div>

                        <div class="tab regulations">
                            <div class="tab__title">
                                <?= _e('[:ru]Регламент осуществления неторговых операций[:en]Regulations for Non-Trading Operations[:]'); ?>
                            </div>
                            <?php _e('[:ru]
                                <p>1. Общие положения</p>
                                <p>1.1. Настоящий Регламент осуществления неторговых операций (далее — «Регламент»)
                                    разработан в рамках мер международного сотрудничества, направленных на борьбу с
                                    финансовыми злоупотреблениями, выявление и предупреждение нарушений законодательства, и
                                    закрепляет порядок проведения неторговых операций на счете Клиента в компании <b><span>'. get_option('custom_field_value_company_name') .'</span>
                                    </b>(далее — «Компания»).</p>
                                <p>1.2. Неторговая операция — любая операция Клиента по внесению средств на счет Клиента,
                                    снятию средств со счета Клиента или внутреннему переводу средств между счетами Личного
                                    кабинета Клиента.</p>
                                <p>Термины и определения, применимые к настоящему Регламенту, указаны в п. 1.8 Клиентского
                                    соглашения, расположенного на Веб-сайте Компании. В случае возникновения несоответствия
                                    отдельных положений настоящего Регламента отдельным положениям Клиентского соглашения и
                                    Условий ведения бизнеса в целом, касающихся неторговых операций, преобладающее значение
                                    имеют положения настоящего Регламента. Данное обстоятельство не влечет
                                    недействительности остальных положений перечисленных документов.</p>
                                <p>1.3. Распоряжения (заявки) на неторговые операции могут быть поданы Клиентом Компании
                                    только посредством Личного кабинета. Все остальные средства коммуникации, указанные в п.
                                    3 настоящего Регламента, предназначены для взаимодействия между Компанией и Клиентом, а
                                    также для уведомлений Клиента Компанией.</p>
                                <p>1.4. При регистрации учетной записи (Личного кабинета) на Веб-сайте Компании Клиент
                                    обязуется предоставить корректную и достоверную информацию для идентификации личности в
                                    соответствии с требованиями формы регистрации Клиента на Веб-сайте Компании и настоящего
                                    Регламента. Клиент обязан своевременно проинформировать Компанию об изменении своих
                                    идентификационных данных.</p>
                                <p>1.5. Для верификации идентификационных данных Клиента — физического лица Компания имеет
                                    право в любое время запросить у Клиента следующие документы:</p>
                                <p>а) Документ, удостоверяющий личность. Скан либо фотокопия страниц паспорта и/или другого
                                    национального документа, удостоверяющего личность, в хорошо читаемом формате, с
                                    указанием фамилии и имени (имен), даты и места рождения, номера паспорта, даты выдачи и
                                    срока действия паспорта, кем выдан паспорт, и подпись Клиента.</p>
                                <p>б) Документ, подтверждающий место проживания Клиента. Скан либо фотокопия следующих
                                    документов в высоком разрешении: счет за коммунальные услуги (не старше трех месяцев);
                                    справка из банка, подтверждающая наличие открытого счета на имя Клиента и с указанием
                                    движения денежных средств за последние шесть месяцев.</p>
                                <p>1.6. Для верификации идентификационных данных Клиента — юридического лица Компания имеет
                                    право в любое время запросить указанные документы:</p>
                                <p>а) регистрационные, учредительные документы и документы, подтверждающие правоспособный
                                    статус Компании и полномочия подписанта по счету Клиента.</p>
                                <p>1.7. Компания оставляет за собой право приостановить проведение неторговых операций по
                                    счету Клиента, если выявлено, что идентификационные данные Клиента являются
                                    некорректными или недостоверными, а также если Клиент не предоставил запрашиваемые
                                    документы.</p>
                                <p>1.8. Компания осуществляет сбор сведений, позволяющих определить принадлежность вновь
                                    обратившегося лица или существующего Клиента к лицам, на которых распространяются
                                    требования FATCA. В связи с этим Компания может попросить Клиента заполнить один из
                                    вопросников по самосертификации по форме Компании, форму W-8, а также запросить
                                    дополнительные документы и информацию. Компания не может предоставлять услуги лицам, на
                                    которых распространяются требования FATCA о налогообложении их иностранных счетов.</p>
                                <p>1.9. Клиент гарантирует легальное происхождение, законное владение и право на
                                    использование перечисляемых им на счета Клиента средств.</p>
                                <p>1.10. Компания имеет право внести поправки в положения данного Регламента в одностороннем
                                    порядке в любое время, за 3 (три) рабочих дня уведомив Клиента о планируемых изменениях
                                    одним или несколькими способами, описанными в п. 3.1 настоящего Регламента. Такие
                                    поправки вступают в силу с даты, указанной в соответствующем уведомлении.</p>
                                <p>1.11. Настоящий Регламент носит открытый характер и является неотъемлемой частью любого
                                    договора, заключенного между Компанией и Клиентом. Содержание настоящего Регламента
                                    раскрывается без ограничений по запросу любых заинтересованных лиц.</p>
                                <p>2. Сомнительные неторговые операции</p>
                                <p>2.1. Неторговая операция может быть признана Компанией сомнительной в случаях, которые
                                    включают в себя, не ограничиваясь, следующие:</p>
                                <p>а) злоупотребление переводами средств без использования непосредственных услуг Компании
                                    (без совершения торговых операций по торговому счету, без использования инвестиционных
                                    сервисов);</p>
                                <p>б) необычный характер операций, не имеющий очевидного экономического смысла или очевидной
                                    законной цели;</p>
                                <p>в) обстоятельства, дающие основания полагать, что операции осуществляются в целях
                                    легализации (отмывания) доходов, полученных преступным путем, или финансирования
                                    терроризма;</p>
                                <p>г) непредоставление Клиентом сведений для собственной идентификации и документов для
                                    верификации, равно как предоставление недостоверных сведений;</p>
                                <p>д) отсутствие возможности осуществления связи с клиентом по указанным им регистрационным
                                    e-mail и телефону;</p>
                                <p>е) непредоставление Клиентом сведений для идентификации выгодоприобретателя, то есть
                                    лица, к выгоде которого действует Клиент (в частности, на основании агентского договора,
                                    договоров поручения, комиссии и доверительного управления, при проведении неторговых
                                    операций);</p>
                                <p>ё) предоставления поддельных или недействительных документов.</p>
                                <p>2.2. Неторговая операция может быть признана Компанией сомнительной на основе анализа
                                    характера операции, ее составляющих, сопутствующих обстоятельств и взаимодействия с
                                    Клиентом или его представителем.</p>
                                <p>2.3. Компания оставляет за собой право расследовать характер сомнительных неторговых
                                    операций, изложенных в п. 2.1 настоящего Регламента, вследствие чего приостановить такие
                                    операции до выяснения причин их возникновения и окончания расследования.</p>
                                <p>2.4. В ходе проведения расследования, согласно п. 2.3 настоящего Регламента, Компания
                                    вправе запросить у Клиента документы, удостоверяющие личность Клиента, платежные, а
                                    также другие документы, подтверждающие законное владение и легальное происхождение
                                    денежных средств, поступивших в пополнение счета Клиента.</p>
                                <p>2.5. При выявлении сомнительных неторговых операций Компания вправе:</p>
                                <p>a) отказать Клиенту в их проведении путем отклонения соответствующей заявки;</p>
                                <p>b) ограничить ввод и/или вывод средств на счете Клиента любым способом на усмотрение
                                    Компании;</p>
                                <p>c) произвести возврат средств, ранее зачисленных на счета Клиента, на тот же источник
                                    платежа, с которого пополнялся счет Клиента;</p>
                                <p>d) произвести списание со счета Клиента возмещенных ему комиссий и бонусов, зачисленных
                                    за операции Клиента;</p>
                                <p>e) расторгнуть отношения с Клиентом.</p>
                                <p>2.6. Отказ от проведения сомнительных неторговых операций, а также расторжение отношений
                                    с Клиентом при выявлении сомнительных неторговых операций не являются основанием для
                                    возникновения гражданско-правовой ответственности Компании за нарушение условий по
                                    заключенным с Клиентом договорам.</p>
                                <p>3. Коммуникации</p>
                                <p>3.1. Компания может использовать для связи с Клиентом:</p>
                                <p>а) внутреннюю почту торговой платформы;</p>
                                <p>б) электронную почту;</p>
                                <p>в) телефон;</p>
                                <p>г) почтовые отправления;</p>
                                <p>д) объявление на Веб-сайте Компании;</p>
                                <p>е) уведомление в Личном кабинете.</p>
                                <p>3.2. Для оперативной связи с Клиентом по решению вопросов по неторговым операциям
                                    Компания будет использовать контактную информацию Клиента, указанную при регистрации
                                    Клиента или измененную в соответствии с п. 3.4 настоящего Регламента. Клиент соглашается
                                    принимать сообщения от Компании в любое время.</p>
                                <p>3.3. Любая корреспонденция (документы, уведомления, подтверждения, объявления, отчеты и
                                    др.) считается полученной Клиентом:</p>
                                <p>а) спустя 1 (один) час с момента ее отправки на электронный адрес (e-mail);</p>
                                <p>б) сразу после ее отправки по внутренней почте торговой платформы;</p>
                                <p>в) сразу после завершения телефонного разговора;</p>
                                <p>г) через 7 (семь) календарных дней с момента почтового отправления;</p>
                                <p>д) сразу после размещения объявления на Веб-сайте Компании;</p>
                                <p>е) сразу после размещения уведомления в Личном кабинете.</p>
                                <p>3.4. Клиент обязуется своевременно информировать Компанию об изменениях в контактной
                                    информации путем внесения соответствующих изменений в Личном кабинете или любым другим
                                    способом, предложенным Компанией.</p>
                                <p>3.5. Клиент понимает и соглашается с тем, что, в случае некорректного поведения Клиента в
                                    общении с сотрудником Компании, Компания оставляет за собой право в одностороннем
                                    порядке расторгнуть отношения с Клиентом.</p>
                                <p>3.6. Каждая неторговая операция Клиента подтверждается записью в Личном кабинете в
                                    разделе «История платежей». Если Клиент обнаружил ошибку в записи в отношении неторговой
                                    операции, то он обязан сформулировать претензию согласно разделу 7 настоящего
                                    Регламента.</p>
                                <p>3.7. Если Клиент обнаружил ошибку в записи свою пользу, он обязан оповестить об ошибке
                                    сотрудника Компании в максимально короткие сроки, используя контактную информацию на
                                    Веб-сайте Компании.</p>
                                <p>4. Платежная политика</p>
                                <p>4.1. Пополнение счета Клиента и вывод средств со счета Клиента производятся с
                                    использованием только тех способов перевода, которые доступны в Личном кабинете. Размер
                                    комиссий и прочие издержки по каждому способу перевода средств публикуются в Личном
                                    кабинете и на Веб-сайте Компании и могут периодически изменяться Компанией.</p>
                                <p>4.2. Клиент понимает и соглашается с тем, что все комиссионные и прочие издержки(К ним
                                    относятся комиссионные и прочие издержки (согласно тарифам) электронных платежных систем
                                    или процессинговых центров, посредством которых происходит осуществление и прохождение
                                    выбранного Клиентом способа перевода.), связанные с осуществлением и прохождением
                                    выбранного им способа перевода, оплачиваются за счет Клиента.</p>
                                <p>Компания обязуется не взимать никаких дополнительных комиссий с суммы перевода Клиента,
                                    за исключением комиссий и прочих издержек, предусмотренных данным Регламентом.</p>
                                <p>4.3. Зачисление средств на счет Клиента производится на основании заявки на пополнение
                                    счета. Вывод средств со счета Клиента производится на основании заявки на вывод средств.
                                    Внутренний перевод средств на другой счет Клиента производится на основании заявки на
                                    внутренний перевод средств. Все неторговые заявки исполняются Компанией в течение 1
                                    (одного) операционного дня, но не позднее конца операционного дня, следующего за днем
                                    получения заявки (или следующего за днем поступления денежных средств на счет Компании,
                                    если это заявка на пополнение счета).</p>
                                <p>4.4. Заявки на неторговые операции, такие как заявка на пополнение счета, заявка на вывод
                                    средств и заявка на внутренний перевод средств, создаются Клиентом в Личном кабинете и
                                    считаются принятыми Компанией, если они отображаются в Личном кабинете Клиента в разделе
                                    «История платежей», а также в системе учета клиентских заявок Компании.</p>
                                <p>4.5. Компания зачисляет на счет Клиента сумму, поступившую на счет Компании.</p>
                                <p>4.6. Зачисление средств на счет Клиента производится в валюте счета Клиента, вне
                                    зависимости от валюты, в которой был сделан перевод. Если валюта счета Клиента
                                    отличается от валюты перевода, то сумма перевода конвертируется по курсу в Личном
                                    кабинете, который действует на момент поступления платежа на счет Компании.</p>
                                <p>4.7. Списание средств со счета Клиента производится в валюте счета Клиента. Если валюта
                                    счета Клиента отличается от валюты перевода, то сумма конвертируется в соответствующую
                                    валюту по курсу Личного кабинета на момент списания средств со счета Клиента.</p>
                                <p>4.8. Курсы конвертации валют публикуются в Личном кабинете и периодически обновляются
                                    Компанией.</p>
                                <p>4.9. Валюта, в которой Компания принимает переводы к зачислению, а также валюта, в
                                    которой Компания осуществляет переводы на внешний счет Клиента, в зависимости от способа
                                    перевода средств указывается в Личном кабинете Клиента.</p>
                                <p>4.10. Компания оставляет за собой право вводить ограничения по минимальным и максимальным
                                    суммам перевода средств, дифференцированные в зависимости от направления перевода,
                                    способа и валюты перевода.</p>
                                <p>4.11. Компания оставляет за собой право вводить ограничения по максимальному количеству
                                    заявок на вывод средств и заявок на внутренний перевод средств, созданных в Личном
                                    кабинете Клиента в течение суток. Данные ограничения публикуются в Личном кабинете и
                                    могут периодически заменяться Компанией.</p>
                                <p>4.12. Если на счет Компании поступает возврат средств, ранее перечисленных Клиенту на
                                    основании заявки на вывод средств, то на счет Клиента зачисляется сумма возврата,
                                    которая поступила на счет Компании, при этом сопутствующие комиссионные и прочие
                                    издержки оплачиваются за счет Клиента путем их удержания c суммы зачисляемого возврата.
                                </p>
                                <p>4.13. Если средства, отправленные в пополнение счета Клиента банковским переводом, не
                                    поступили на счет Клиента в течение 5-ти (пяти) рабочих дней с даты осуществления
                                    оплаты, Клиент вправе обратиться в Компанию с просьбой провести расследование по
                                    переводу согласно п. 7.4. Клиент понимает, что расследование может повлечь за собой
                                    комиссионные издержки (согласно тарифам платежной системы или процессингового центра),
                                    которые будут оплачены за счет Клиента. Способ оплаты издержек решается в индивидуальном
                                    порядке и может проводиться как посредством перечисления необходимой суммы на счета
                                    Компании, так и посредством списания суммы со счета Клиента.</p>
                                <p>4.14. Если средства, отправленные в пополнение счета Клиента переводом через электронную
                                    платежную систему или переводом с банковской карты, не поступили на счет Клиента в
                                    течение 2-х (двух) рабочих дней с даты осуществления оплаты, Клиент вправе обратиться в
                                    Компанию с просьбой провести расследование по переводу согласно п. 7.5.</p>
                                <p>4.15. Если средства, отправленные на внешний счет Клиента на основании заявки на вывод
                                    банковским переводом, не были зачислены Клиенту в течение 5-ти (пяти) рабочих дней с
                                    момента перехода заявки на вывод средств в статус «Исполнено», Клиент может обратиться в
                                    Компанию с просьбой провести расследование по переводу. Компания может предоставить
                                    Клиенту документ, подтверждающий факт отправки денежных средств:</p>
                                <p>а) при валютном банковском переводе — копию документа СВИФТ (SWIFT), подтверждающего факт
                                    перевода в иностранной валюте.</p>
                                <p>4.16. Если средства, отправленные на внешний счет Клиента на основании заявки на вывод
                                    средств через электронную платежную систему, не были зачислены Клиенту в течение 2-х
                                    (двух) рабочих дней с момента перехода заявки на вывод средств в статус «Исполнено»,
                                    Клиент может обратиться в Компанию с просьбой провести расследование по переводу.
                                    Компания может предоставить Клиенту скриншот, подтверждающий факт отправки денежных
                                    средств на внешний счет Клиента.</p>
                                <p>4.17. Клиент понимает и соглашается с тем, что расследование и заказ документов, согласно
                                    пунктам 4.14, 4.15 и 4.16 настоящего Регламента, могут повлечь за собой комиссионные
                                    издержки (согласно тарифам банка-отправителя или Электронной платежной системы), которые
                                    будут оплачены за счет Клиента. Способ оплаты издержек решается в индивидуальном порядке
                                    и может проводиться как посредством перечисления необходимой суммы на счета Компании,
                                    так и посредством списания суммы со счета Клиента.</p>
                                <p>4.18. Клиент может активировать услугу «Ограничение вывода денежных средств только на
                                    банковский счет Клиента». Для активации данного ограничения Клиент должен направить
                                    письмо на соответствующий электронный адрес:</p>
                                <p>а) на банковский счет, зарегистрированный на имя Клиента;</p>
                                <p>б) внутренним переводом на другой счет Клиента, открытый в рамках Личного кабинета
                                    Клиента, при условии, что на счет, на который переводятся средства, будут наложены
                                    аналогичные ограничения на вывод средств только на банковский счет Клиента.</p>
                                <p>4.19. Для снятия «Ограничения вывода денежных средств только на банковский счет Клиента»
                                    Клиенту необходимо воспользоваться следующей процедурой: обратиться к Компании с
                                    удостоверением личности и заполнить в произвольной форме заявление на снятие такого
                                    ограничения.</p>
                                <p>4.20. Если при отправке средств сотрудник Компании допустил ошибку, повлекшую за собой не
                                    зачисление денежных средств на внешний счет Клиента, комиссионные издержки по разрешению
                                    сложившейся ситуации будут оплачены за счет Компании.</p>
                                <p>4.21. Если при оформлении заявки на вывод средств Клиентом в реквизитах была допущена
                                    ошибка, повлекшая за собой не зачисление денежных средств на внешний счет Клиента,
                                    комиссионные издержки по разрешению сложившейся ситуации будут оплачиваться за счет
                                    Клиента.</p>
                                <p>4.22. Клиент признает, что в случае возникновения задолженности на его счете, Компания
                                    имеет право погасить эту задолженность в одностороннем порядке путем списания средств,
                                    доступных на иных счетах Клиента в рамках Личного кабинета, а также на счетах иного
                                    Личного кабинета, если Компания считает, что существует связь этого Личного кабинета с
                                    Клиентом.</p>
                                <p>4.23. Выполняемые Клиентом переводы в пополнение счета Клиента и вывод средств со счета
                                    Клиента должны соответствовать требованиям и учитывать ограничения, установленные
                                    настоящим Регламентом, а также действующими законами и иными правовыми актами стран, под
                                    юрисдикцию которых данные переводы попадают.</p>
                                <p>4.24. Компания имеет право ограничить возможность проведения неторговых операций в Личном
                                    кабинете Клиента (равно как и приостановить исполнение уже созданных заявок Клиента) на
                                    неопределенный срок до выяснения ситуации в следующих случаях:</p>
                                <p>а) при нарушении Клиентом п. 11.1 Клиентского соглашения;</p>
                                <p>б) при устранении последствий нерыночных котировок по торговым инструментам;</p>
                                <p>c) при технических сбоях, возникших у Компании и/или у уполномоченного агента Компании.
                                </p>
                                <p>4.25. В случае возникновения задолженности на счете Клиента, Компания имеет право
                                    приостановить исполнение заявок на вывод средств Клиентом и внутренние переводы между
                                    счетами Клиента, в том числе уже созданных до момента возникновения задолженности, до
                                    момента полного погашения возникшей задолженности Клиентом.</p>
                                <p>5. Способы перевода средств</p>
                                <p><b>5.1. Банковский перевод</b></p>
                                <p>5.1.1. Клиент может воспользоваться банковским переводом для пополнения счета Клиента и
                                    вывода средств со счета Клиента, если на момент перевода Компания работает с данным
                                    способом перевода средств.</p>
                                <p>5.1.2. Клиент может использовать данный способ перевода средств только после
                                    предоставления подписанной Анкеты регистрации клиента и копии паспорта (клиент должен
                                    предоставить Сотруднику Компании скан-копию своего паспорта/удостоверения личности и
                                    подписанную им Регистрационную форму клиента).</p>
                                <p>5.1.3. Клиент может осуществить банковский перевод на счет Компании только с банковского
                                    счета, зарегистрированного на имя Клиента, либо совершить перевод без открытия
                                    банковского счета.</p>
                                <p>5.1.4. Перед осуществлением банковского перевода для пополнения счета Клиент в Личном
                                    кабинете создает заявку на пополнение счета и скачивает инвойс на оплату (при выборе
                                    валютного банковского перевода). Параметры инвойса, такие как банковские реквизиты
                                    Компании, назначение платежа и срок оплаты должны внимательно соблюдаться Клиентом при
                                    формировании перевода. Если Клиент не может осуществить перевод с использованием
                                    указанного в инвойсе назначения платежа, необходимо связаться с сотрудником Компании для
                                    решения вопроса в индивидуальном порядке.</p>
                                <p>5.1.5. Компания оставляет за собой право отказать в зачислении денежных средств,
                                    поступивших банковским переводом на счет Компании, с назначением платежа, отличающимся
                                    от указанного в инвойсе, а также если перевод был осуществлен третьим лицом от имени
                                    Клиента. В таком случае Компания отправляет денежные средства обратно на банковский
                                    счет, с которого они были перечислены. Все расходы, связанные с возвратом подобного
                                    перевода, оплачиваются за счет Клиента.</p>
                                <p>5.1.6. Клиент может оформить заявку на вывод средств банковским переводом только на
                                    банковский счет, зарегистрированный на имя Клиента.</p>
                                <p>5.1.7. Компания обязуется отправить денежные средства на банковский счет Клиента в
                                    соответствии с реквизитами, указанными в заявке на вывод средств, если соблюдены условия
                                    п. 5.1.2 настоящего Регламента.</p>
                                <p>5.1.8. При переводе денежных средств банковским переводом Компания указывает назначение
                                    платежа, представленное в Личном кабинете. Если назначение платежа меняется, Компания
                                    незамедлительно информирует Клиента о новом назначении платежа путем его публикации в
                                    Личном кабинете.</p>
                                <p>5.1.9. Клиент понимает и соглашается с тем, что Компания не несет ответственности за
                                    условия и сроки исполнения банковского перевода (стандартные сроки прохождения
                                    банковского перевода составляют 2–5 рабочих дней) банком Клиента.</p>
                                <p><b>5.2. Перевод с помощью банковской карты</b></p>
                                <p>5.2.1. Для пополнения счета Клиента и вывода средств со счета Клиента, Клиент может
                                    воспользоваться переводом с помощью банковской карты международной платежной системы,
                                    тип которой указан в Личном кабинете Клиента, в любое время, если на момент исполнения
                                    Компанией соответствующей заявки Клиента Компания работает с данным способом перевода
                                    денежных средств.</p>
                                <p>5.2.2. Прием денежных средств от клиентов Компании при переводах картами международных
                                    платежных систем через Личный кабинет технически осуществляются официальными партнерами
                                    Компании.</p>
                                <p>5.2.3. Клиент может осуществить перевод с помощью банковской карты, зарегистрированной
                                    только на свое имя. Переводы с использованием банковских карт третьих лиц Компанией не
                                    принимаются и не исполняются. В случае поступления платежа на счет Клиента с банковской
                                    карты третьего лица возврат средств осуществляется на ту же банковскую карту, с которой
                                    производилось пополнение счета. Все расходы, связанные с данным возвратом, оплачиваются
                                    за счет Клиента или такого третьего лица.</p>
                                <p>5.2.4. При осуществлении перевода с помощью банковской карты Компания вправе запросить у
                                    Клиента следующие документы:</p>
                                <p>а) скан либо фотокопию паспорта в высоком разрешении;</p>
                                <p><span class="Apple-converted-space">&nbsp;</span>б) скан или фото банковской карты
                                    (лицевую и обратную сторону) в высоком разрешении. На скане / фото лицевой стороны карты
                                    должны быть видны первые 6 и последние 4 цифры номера карты, полное имя держателя
                                    банковской карты, банк-эмитент, а также срок действия карты. На скане / фото оборотной
                                    стороны должна стоять подпись держателя банковской карты, а CVC2 / CVV2 код должен быть
                                    закрыт. Скан/фото каждой используемой банковской карты предоставляется единоразово;</p>
                                <p>в) для неименных или виртуальных банковских карт необходимо предоставить скан
                                    официального письма (подтверждения), выданного банком-эмитентом и подтверждающего имя
                                    держателя банковской карты. В документе должны быть указаны номер банковской карты, имя
                                    (имена) и фамилия Клиента и проставлена печать банка, выдавшего банковскую карту.</p>
                                <p>5.2.5. Клиент понимает и соглашается с тем, что при использовании данного способа
                                    пополнения на счет Клиента накладываются следующие ограничения:</p>
                                <p>а) вывод средств и внутренний перевод средств со счета Клиента будет возможен только
                                    спустя 30 календарных дней (ограничение из п. 5.2.5 (а) снимается досрочно в случае
                                    предоставления Клиентом документов, указанных в п. 5.2.4 настоящего Регламента, и после
                                    их обработки Компанией);</p>
                                <p>б) вывод средств со счета Клиента будет возможен только банковским переводом на счет,
                                    зарегистрированный на имя Клиента, либо на банковскую карту, которая была использована
                                    при пополнении счета Клиента, при условии, что на момент обработки соответствующей
                                    заявки Компания работает с данным способом переводов.</p>
                                <p>5.2.6. Клиент понимает и соглашается с тем, что Компания не несет ответственности за
                                    сроки исполнения перевода, условия исполнения переводов банком-эмитентом банковской
                                    карты и за обстоятельства, повлекшие за собой технический сбой при переводе, если они
                                    возникли не по вине Компании, а по вине банка-эмитента, процессингового центра или
                                    международной платежной системы.</p>
                                <p>5.2.7. После того как денежные средства, переведенные Клиентом с помощью банковской
                                    карты, были успешно зачислены на счет Клиента в Компании, обязательство Компании по
                                    оказанию услуги по зачислению суммы платежа является исполненным в полном объеме и не
                                    может быть оспорено.</p>
                                <p>5.2.8. В исключительных случаях Компания может осуществить возврат платежа, поступившего
                                    с банковской карты. В данном случае возврат средств осуществляется на ту же банковскую
                                    карту, с которой производилось пополнение счета.</p>
                                <p><b>5.3. Внутренний перевод средств</b></p>
                                <p>5.3.1. Клиент может подать заявку на внутренний перевод средств в любое время, если на
                                    момент перевода Компания работает с данным способом перевода средств.</p>
                                <p>5.3.2. Клиент может оформить заявку на внутренний перевод средств на другой счет Клиента,
                                    открытый в Личном кабинете. Заявки на внутренний перевод средств на счета третьих лиц
                                    Компанией не принимаются.</p>
                                <p>5.3.3. При осуществлении внутреннего перевода средств со счета Клиента, который
                                    пополнялся с банковской карты, ограничения на вывод средств переносятся на тот счет
                                    Клиента, на который осуществляется внутренний перевод.</p>
                                <p>5.3.4. Если при внутреннем переводе средств между счетами Клиента сотрудник Компании
                                    допустил ошибку, повлекшую за собой зачисление средств на некорректный счет, сумма
                                    заявки возмещается Клиенту за счет Компании.</p>
                                <p>5.3.5. Если при оформлении заявки на внутренний перевод средств в реквизитах счета
                                    Клиентом была допущена ошибка, повлекшая за собой зачисление средств на некорректный
                                    счет, сумма заявки Клиенту не возмещается.</p>
                                <p>6. Правила пользования Личным кабинетом</p>
                                <p>6.1. Клиент соглашается со всеми пунктами настоящего Регламента по использованию Личного
                                    кабинета.</p>
                                <p>6.2. Вход в Личный кабинет защищен паролем.</p>
                                <p>6.3. Клиент подтверждает и соглашается с тем, что доступ к Личному кабинету будет
                                    производиться по паролю.</p>
                                <p>6.4. Клиент полностью берет на себя ответственность по сохранению пароля и обеспечению
                                    его сохранности от несанкционированного доступа третьих лиц.</p>
                                <p>6.5. Все распоряжения, выполненные через Личный кабинет с вводом пароля, считаются
                                    выполненными лично Клиентом.</p>
                                <p>6.6. Любое лицо, получившее доступ к Личному кабинету путем ввода пароля, отождествляется
                                    с Клиентом.</p>
                                <p>6.7. Компания не несет ответственности за все потери, которые Клиент может понести в
                                    случае кражи, утери или разглашения пароля третьим лицам.</p>
                                <p>6.8. Клиент вправе самостоятельно изменить пароль доступа в Личный кабинет либо
                                    воспользоваться процедурой восстановления пароля.</p>
                                <p>Для восстановления пароля для доступа в Личный кабинет Клиенту необходимо прислать на
                                    почтовый адрес Компании следующие документы:</p>
                                <p>а) копию паспорта Клиента;</p>
                                <p>б) заявление установленного образца на изменение пароля.</p>
                                <p>Если документы Клиента изданы не на английском языке, то такие документы по запросу
                                    Компании должны быть сначала переведены на английский язык любым официальным
                                    переводчиком, и эта переведенная копия должна быть должным образом легализирована и
                                    предоставлена вместе с другими необходимыми соответствующими документами и фотографиями
                                    Клиента.</p>
                                <p>6.9. Заявки на пополнение счета, заявки на вывод средств и заявки на внутренний перевод
                                    средств отображаются в Личном кабинете Клиента в разделе «История платежей».</p>
                                <p>6.10. Клиент может видеть следующие статусы Заявки на пополнение счета в разделе «История
                                    платежей» Личного кабинета:</p>
                                <p>а) Статус «В обработке» означает, что ожидается поступление средств на счёт Компании.</p>
                                <p>бb) Статус «Исполнено» означает, что средства зачислены на счёт Клиента.</p>
                                <p>в) Статус «Отклонено» означает, что заявка отклонена. В детальной информации по платежу
                                    указывается причина отклонения заявки.</p>
                                <p>6.11. Клиент может видеть следующие статусы заявки на вывод средств со счета, а также
                                    заявки на внутренний перевод средств в разделе «История платежей» Личного кабинета:</p>
                                <p>а) Статус «В обработке» означает, что заявка принята Компанией.</p>
                                <p>б) Статус «Исполнено» означает, что средства отправлены на внешний счет Клиента,
                                    указанный в заявке, либо зачислены на другой счет Клиента в Компании при внутреннем
                                    переводе средств.</p>
                                <p>в) Статус «Отклонено» означает, что заявка отклонена. В детальной информации по платежу
                                    указывается причина отклонения заявки.</p>
                                <p>6.12. Заявка на пополнение счета, заявка на вывод средств и заявка на внутренний перевод
                                    средств могут быть аннулированы Клиентом (в разделе «Истории платежей» Личного кабинета)
                                    до момента их исполнения Компанией.</p>
                                <p>6.13. Заявка на пополнение счета, заявка на вывод средств и заявка на внутренний перевод
                                    средств могут быть отклонены Компанией с указанием причины отклонения.</p>
                                <p>7. Порядок проведения расследований по переводам и урегулирования спорных ситуаций</p>
                                <p>7.1. В случае возникновения спорной ситуации Клиент имеет право предъявить Компании
                                    претензию или направить запрос на проведение расследования по переводу. Претензии и
                                    запросы принимаются в течение 5-ти (пяти) рабочих дней с момента возникновения спорной
                                    ситуации.</p>
                                <p>7.2. Моментом возникновения спорной ситуации для оформления претензии следует считать
                                    время записи в разделе «История платежей» в Личном кабинете Клиента. Моментом
                                    возникновения спорной ситуации для оформления запроса следует считать время наступления
                                    случая, описанного в пп. 4.13, 4.14, 4.15 и 4.16.</p>
                                <p>7.3. Для оформления запроса на проведение расследования по банковскому переводу Клиенту
                                    необходимо:</p>
                                <p>а) корректно заполнить стандартную форму в разделе «История платежей» Личного
                                    кабинета.<br>б) в случае валютного банковского перевода прикрепить копию документа СВИФТ
                                    (SWIFT), подтверждающего факт перевода в иностранной валюте.</p>
                                <p>7.4. Для проведения расследования по переводу с банковской карты Клиенту необходимо:</p>
                                <p>а) корректно заполнить стандартную форму в разделе «История платежей» Личного кабинета.
                                    Все запросы, направленные иным образом (на форуме, по e-mail, по телефону и т. д.), к
                                    расследованию не принимаются.<br>б) в случае перевода с банковской карты: копию
                                    документа, удостоверяющего личность, копию банковской карты.</p>
                                <p>7.5. Для оформления претензии по неторговым операциям Клиент должен корректно заполнить
                                    стандартную форму в разделе оформления претензий Личного кабинета.</p>
                                <p>7.6. Запросу или претензии, оформленным согласно пп. 7.3, 7.4 и 7.5, автоматически
                                    присваивается уникальный номер (TID), при этом Клиенту высылается соответствующее
                                    подтверждение с электронного адреса Компании ( <span>'. get_option('custom_field_value_email') .'</span>).</p>
                                <p>7.7. Претензия не должна содержать:</p>
                                <p>а) эмоциональную оценку спорной ситуации;</p>
                                <p>б) оскорбительные высказывания;</p>
                                <p>в) ненормативную лексику.</p>
                                <p>7.8. Для проведения расследования по переводу и рассмотрения претензии Компания вправе
                                    запросить у Клиента дополнительные документы.</p>
                                <p>7.9. Компания вправе отклонить претензию Клиента по неторговой операции в следующих
                                    случаях:</p>
                                <p>а) претензия не была оформлена в соответствии с пунктами 7.3 и 7.4;</p>
                                <p>б) претензия была направлена Компании иным образом, чем через раздел «История платежей» в
                                    Личном кабинете (на форуме, по e-mail, по телефону и т. д.);</p>
                                <p>в) Клиент начал осуществление неторговых операций по внутреннему переводу средств на свои
                                    другие торговые и иные счета в Личном Кабинете с использованием средств, зачисленных на
                                    счет Клиента посредством оспариваемой неторговой операции, а также начал осуществление
                                    торговых операций с использованием средств, зачисленных на счет Клиента посредством
                                    оспариваемой неторговой операции;</p>
                                <p>г) в иных случаях, предусмотренных настоящим Регламентом, Клиентским соглашением и
                                    другими Условиями ведения бизнеса, расположенными на Веб-сайте Компании.</p>
                                <p>7.10. В случае отсутствия удовлетворительного итога рассмотрения Компанией претензии в
                                    соответствии с настоящим Регламентом, Клиент вправе передать ее на дальнейшее
                                    рассмотрение в уполномоченные органы в соответствии с действующим законодательством
                                   <span>'. get_option('custom_field_value_country_company') .'</span>.</p>
                                <p><span>'. get_option('custom_field_value_company_name') .'</span></p>
                                [:]
                                [:en]<p aria-level="2"><strong>1. General Terms</strong><br>1.1. These Regulations for Non-Trading
                                    Operations (hereinafter, “Regulations”) have been developed within the framework of International cooperation
                                    measures aimed to combat financial irregularities, expose and prevent law violations, and set principles for
                                    performing non-trading operations on a Client’s Account with <span>'. get_option('custom_field_value_company_name') .'</span> (hereinafter, “Company”).</p>
                                <p aria-level="2">1.2. “Non-Trading Operation” shall mean any operation of the Client for deposit of funds to their
                                    Client’s Account, withdrawal of funds from their Client’s Account or internal transfers of funds between
                                    Client’s Accounts in client portal.<br>The terms and interpretations applicable to these Regulations are
                                    specified in clause 17 of the Client Agreement which can be found in the Company Website. In cases where certain
                                    clauses of these Regulations do not correspond to certain clauses of the Client Agreement or the Terms of
                                    Business, concerning non-trading operations, the clauses of these Regulations shall prevail. This circumstance
                                    shall not render other terms of the aforementioned documents invalid.</p>
                                <p aria-level="2">1.3. The instruction of a non-trading operation can be sent by the Client to the Company only
                                    through client portal. All other means of communication specified in Clause 3 hereof are for further supporting
                                    correspondence between the Company and the Client and notifications of the Client by the Company.</p>
                                <p aria-level="2">1.4. When registering for client portal on the Company Website, the Client shall provide accurate
                                    and valid information to identify themselves in accordance with the requirements of the Client Registration Form
                                    on the Company Website and these Regulations. The Client shall inform the Company about changes in
                                    identification data in due time.</p>
                                <p aria-level="2">1.5. The Company shall have the right at any time to request the following documents in order to
                                    verify the Client’s identity of the physical person:</p>
                                <p aria-level="2">a) Proof of identity. A high-resolution scanned copy or photo of pages of a passport or any other
                                    national ID, indicating family name and name(s), date and place of birth, passport number, issue and expiry
                                    dates, country of issue and Client’s signature.&nbsp;<br>b) Proof of address. A high-resolution copy of a:
                                    utility bill (water, electricity, phone bill) issued within the last 3 months; bank statement (for a current
                                    account, deposit account or credit card account); bank reference letter, confirming the address of the Client.
                                </p>
                                <p aria-level="2">1.6. The Company shall have the right at any time to request the following documents in order to
                                    verify the identity of a client as a legal entity:</p>
                                <p aria-level="2">a) incorporation, foundational documents and documents confirming the good standing status of the
                                    Company and the authority of the signatory to the Client’s Account.</p>
                                <p aria-level="2">1.7. The Company reserves the right to suspend execution of non-trading operations on the Client’s
                                    Account if it is discovered that the Client’s identification information is incorrect or false, as well as in
                                    cases where the Client does not provide the required documents.</p>
                                <p aria-level="2">1.8. The Company carries out collection of data, allowing it to define the identity of new and
                                    existing Clients as those people to whom the requirements according to FATCA apply. In this regard the Company
                                    may request the Client complete one of questionnaires on self-certification in a form from the Company, the W- 8
                                    form as well as to request additional documents and information. The Company cannot provide services to those
                                    people to whom the requirements of FATCA regarding their foreign accounts apply.</p>
                                <p aria-level="2">1.9. The Client shall guarantee the legal source, lawful possession and right to use the funds
                                    being transferred to the Client’s Account.</p>
                                <p aria-level="2">1.10. The Company shall have the right to amend the terms of these Regulations at its sole
                                    discretion and at any time, giving the Client 3 (three) business day’s prior notification in one or several ways
                                    described in clause 3.1 of these Regulations. Such amendments will become effective on the date specified in the
                                    notification.</p>
                                <p aria-level="2">1.11. These Regulations are transparent and are an integral part of any agreement concluded
                                    between the Company and the Client. The content of these Regulations shall be disclosed without limitation upon
                                    the request of any interested party.</p>
                                <p aria-level="2"><strong>2. Suspicious Non-Trading Operations</strong><br>2.1. The Company may declare a
                                    non-trading operation suspicious in following cases, including, but not limited to:</p>
                                <p aria-level="2">a) abuse of fund transfers without using the services of the Company (without completing trading
                                    operations on the trading account; without using investment services);&nbsp;<br>b) unusual nature of operations
                                    that do not have obvious economic substance or obvious legal purpose;&nbsp;<br>c) circumstances implying that
                                    the operations are performed for the purpose of money laundering or financing terrorism;&nbsp;<br>d) failure of
                                    the Client to provide identification information and verification documents, as well as submission a
                                    misrepresentation of information;&nbsp;<br>e) the impossibility to contact the Client by the specified
                                    registered e-mail address and telephone number;&nbsp;<br>f) failure of the Client to provide identification
                                    information for the beneficiary, i.e. a person for the benefit of whom the Client acts (in particular, on the
                                    basis of an agent contract, commission and trust management contracts, while carrying out non-trading
                                    operations);&nbsp;<br>g) submission of false or invalid documents.</p>
                                <p aria-level="2">2.2. The Company can declare a non-trading operation suspicious on the basis of analysis of the
                                    nature of a non-trading operation, its components, attending circumstances and interaction with the Client or
                                    the Client’s representative.</p>
                                <p aria-level="2">2.3. The Company reserves the right to investigate the nature of any suspicious non-trading
                                    operations listed in clause 2.1 of these Regulations for Non-Trading Operations, whereupon such operations will
                                    be suspended until the reasons for their occurrence are clarified and the investigation is completed.</p>
                                <p aria-level="2">2.4. During the course of an investigation, in accordance with clause 2.3 of these Regulations,
                                    the Company shall have the right to request that the Client provide proof of identity, payment and other
                                    documents confirming the lawful possession and legal source of the funds transferred to Client’s Account.</p>
                                <p aria-level="2">2.5. If suspicious non-trading operations should be exposed, the Company shall have the right
                                    to:</p>
                                <p aria-level="2">a) refuse to perform these operations, by rejecting the respective request;&nbsp;<br>b) limit fund
                                    deposit and/or fund withdrawal from the Client’s Account through any method at the Company’s
                                    discretion;&nbsp;<br>c) return funds, previously deposited to the Client’s Account, to the same source of
                                    payment from which the deposit to Client’s Account was made;&nbsp;<br>d) write off any compensated commissions
                                    or bonuses credited to the Client for operations of the Client;&nbsp;<br>e) terminate relations with the Client.
                                </p>
                                <p aria-level="2">2.6. Refusal to perform suspicious non-trading operations or termination of relations with the
                                    Client as a result of suspicious non-trading operations performed by the Client shall not impose civil liability
                                    on the Company for breach of any agreement with the Client.</p>
                                <p aria-level="2"><strong>3. Communications</strong><br>3.1. In order to communicate with the Client, the Company
                                    may use:</p>
                                <p aria-level="2">a) trading platform internal mail;&nbsp;<br>b) email;&nbsp;<br>c) telephone;&nbsp;<br>d) post;<br>e)
                                    news in the Company Website;&nbsp;<br>f) notifications in client portal.</p>
                                <p aria-level="2">3.2. The Company will use the Client’s contact details, specified when registering or updated in
                                    accordance with clause 3.4 of these Regulations. The Client shall agree to accept any notifications from the
                                    Company at any time.</p>
                                <p aria-level="2">3.3. Any communications sent to the Client (documents, notifications, confirmations, news,
                                    statements, etc.) are deemed to be received:</p>
                                <p aria-level="2">a) if sent by email, within 1 (one) hour after emailing it;&nbsp;<br>b) if sent by trading
                                    platform internal mail, immediately after sending it;&nbsp;<br>c) if by telephone, once the telephone
                                    conversation has been finished;&nbsp;<br>d) if sent by post, 7 (seven) calendar days after posting it;&nbsp;<br>e)
                                    if posted in the Company Website, immediately after the notification is published;&nbsp;<br>f) if posted in
                                    client portal, immediately after the notification is published.</p>
                                <p aria-level="2">3.4. The Client shall notify the Company in due time of any change in the Client’s contact details
                                    either by updating the information in client portal or through any other method offered by the Company.</p>
                                <p aria-level="2">3.5. The Client understands and accepts that the Company reserves the right to terminate relations
                                    with the Client unilaterally shall the Client behave inappropriately in communications with a Company
                                    employee.</p>
                                <p aria-level="2">3.6. Every non-trading operation of a Client shall be confirmed by a log in the “Transfer History”
                                    of client portal. If the Client has reason to believe that the log is inconsistent, the Client shall have the
                                    right to lodge a complaint in accordance with clause 7 of these Regulations.</p>
                                <p aria-level="2">3.7. If the Client finds an error in the record in his favor, he is obliged to notify the employee
                                    of the Company as soon as possible using the contact information on the Company’s Website.</p>
                                <p aria-level="2"><strong>4. Payments Policy</strong><br>4.1. Fund deposits to Client’s Account and fund withdrawals
                                    from Client’s Account shall be performed via those deposit and withdrawal options which are available in client
                                    portal. Fees as well as other charges for each deposit and withdrawal option are published in client portal and
                                    on the Company Website and may be changed by the Company from time to time.</p>
                                <p aria-level="2">4.2. The Client understands and accepts that any commissions or other charges (Commissions and
                                    other charges (in accordance with the table of charges) of online payment systems or processing centers,
                                    involved in the transfer of funds) incurred by the transfer of funds shall be at the Client’s expense.<br>The
                                    Company shall be obliged to not charge any additional commission for funds transfer, except for the commissions
                                    and other expenses described in these Regulations.</p>
                                <p aria-level="2">4.3. Funds shall be credited to the Client’s Account on the basis of the funds deposit request.
                                    Funds shall be withdrawn from the Client’s Account on the basis of the funds withdrawal request. Funds shall be
                                    transferred to another of the Client’s Account on the basis of the internal fund transfer request. These
                                    requests shall be processed by the Company within 1 (one) business day, but not later than at the end of the
                                    business day following the day of submitting the request (or following the day after funds were credited to the
                                    Company Account, in case it is funds deposit).</p>
                                <p aria-level="2">4.4. Requests for Non-trading operations such as deposit requests, withdrawal requests and
                                    internal fund transfer requests shall be submitted by the Client in client portal and shall be considered
                                    accepted by the Company if they are displayed in the “Transfer History” of client portal and in the Company
                                    records of Client requests.</p>
                                <p aria-level="2">4.5. The Company will credit the sum received on the Company Account to the Client’s Account.</p>
                                <p aria-level="2">4.6. Funds shall be credited to the Client’s Account in the currency of the Client’s Account,
                                    regardless of the currency the funds were initially transferred in. If the transfer currency differs from the
                                    Client’s Account currency, the transfer amount shall be converted at the exchange rate as published in client
                                    portal at the moment the payment is received on the Company Account.</p>
                                <p aria-level="2">4.7. Funds withdrawals from the Client’s Account shall be performed in the currency of the
                                    Client’s Account. If the Client’s Account currency differs from the transfer currency, the transfer amount shall
                                    be converted into the transfer currency at the exchange rate as published in client portal at the moment the
                                    funds are debited from the Client’s Account.</p>
                                <p aria-level="2">4.8. Exchange rates are published in client portal and are updated by the Company from time to
                                    time.</p>
                                <p aria-level="2">4.9. Currencies accepted by the Company for crediting the Client’s Account, as well as currencies
                                    available for transfer to the Client’s External Account, dependent on the funds transfer method, are indicated
                                    in client portal.</p>
                                <p aria-level="2">4.10. The Company shall have the right to set restrictions on minimum and maximum transfer
                                    amounts, differentiated by the Deposit and Withdrawal options and transfer currency.</p>
                                <p aria-level="2">4.11. The Company shall have the right to set restrictions on maximum number of withdrawal
                                    requests and internal fund transfer requests, submitted in one Client’s client portal within 24 hours. These
                                    restrictions are published in client portal and may be changed by the Company from time to time.</p>
                                <p aria-level="2">4.12. In case funds are returned to the Company Account, after being transferred to the Client on
                                    the basis of their withdrawal request, the funds shall be credited to the Client’s Account in the amount, which
                                    has been received on the Company Account, while any commissions or other charges incurred by funds eturning
                                    shall be at the Client’s expense and shall be paid by deducting them from the amount re-credited to Client’s
                                    Account.</p>
                                <p aria-level="2">4.13. ЕIf funds transferred as a deposit to the Client’s Account through bank transfer are not
                                    credited to the Client’s Account within 5 (five) business days from the date of payment, the Client shall have
                                    the right to request that the Company make inquiry on the transfer according to clause 7.4. The Client
                                    understands that the inquiry may involve paying commission (in accordance with the tariffs of the payment system
                                    or processing center), which shall be at the Client’s expense. The payment method for such expenses shall be
                                    determined on an individual basis and may be carried out by transferring the necessary amount to the Company
                                    Account or by deducting the amount from the Client’s Account.</p>
                                <p aria-level="2">4.14. If funds transferred as a deposit to the Client’s Account through an Online Payment System
                                    are not credited to the Client’s Account within 2 (two) business days from the date of payment, the Client shall
                                    have the right to request that the Company make inquiry on the transfer according to clause 7.5.</p>
                                <p aria-level="2">4.15. If funds transferred to Client’s External Account through bank transfer were not credited to
                                    the Client within 5 (five) business days since the date the withdrawal request acquired the “Processed” status,
                                    the Client shall have the right to request that the Company make an inquiry on the transfer. The Company may
                                    provide the Client with a document to confirm the transfer of funds:</p>
                                <p aria-level="2">a) for an inquiry on a bank transfer in currency other than RUR: a SWIFT copy confirming the bank
                                    transfer’s execution.</p>
                                <p aria-level="2">4.16. If funds transferred to the Client’s External Account through an Online Payment System were
                                    not credited to the Client within 2 (two) business days from the date the withdrawal request acquired the
                                    “Processed” status, the Client shall have the right to request the Company to make an inquiry on the transfer.
                                    The Company may provide the Client with a screenshot confirming the transfer of funds to the Client’s External
                                    Account.</p>
                                <p aria-level="2">4.17. The Client understands and accepts that the inquiry and request for documents, in accordance
                                    to clauses 4.13, 4.14, 4.15 and 4.16 of these Regulations, may involve paying commission (in accordance with the
                                    tariffs of the remitting bank or Online Payment System), which shall be at the Client’s expense. The payment
                                    method for such expenses shall be determined on an individual basis and may be carried out through transferring
                                    the necessary amount to the Company Account or by deducting the amount from the Client’s Account.</p>
                                <p aria-level="2">4.18. The Client may activate the “Withdrawal only through bank transfer” restriction. The Client
                                    shall submit an email [sv slug=”email-legal-en”]. Once this service has been confirmed, funds withdrawal from
                                    the Client’s Account shall only be available through:</p>
                                <p aria-level="2">a) the bank transfer to account registered under the name of the Client;<br>b) the internal fund
                                    transfer to another of the Client’s Accounts within client portal, provided that the same restriction shall be
                                    placed on the Account to which the funds have been transferred.</p>
                                <p aria-level="2">4.19. A Client may remove the “Withdrawal only through bank transfer” restriction through the
                                    following procedure: by visiting the nearest Company office with an identification document and by submitting an
                                    application letter (in no particular format) for removing the restriction.</p>
                                <p aria-level="2">4.20. If a Company employee should make a mistake when carrying out a transfer which results in
                                    funds not being credited to the Client’s External Account, the sum of the request shall be indemnified to the
                                    Client at the Company’s expense.</p>
                                <p aria-level="2">4.21. If the Client should indicate invalid payment details when filling out the withdrawal
                                    request which results in funds not being credited to the Client’s External Account, the sum of the fees and
                                    other charges applied to resolve the issue shall be at the Client’s expense.</p>
                                <p aria-level="2">4.22. The Client consents to the Company having the right to unilaterally collect arrears on a
                                    Client’s Account out of funds held on other Client’s Accounts within client portal, or from another client
                                    portal account if the Company believes that there is a connection between this client portal account and the
                                    Client.</p>
                                <p aria-level="2">4.23. The transfer of funds to the Company Account and fund withdrawals from the Client’s Account
                                    shall meet the requirements and take into account restrictions established by these Regulations, by the laws in
                                    force and other legal acts of countries within the jurisdiction of which the fund transfer takes place.</p>
                                <p aria-level="2">4.24. The Company has the right to restrict the availability of the Client to conduct Non-trading
                                    operations (as well as to suspend the execution of submitted Requests of the Client), until the moment the
                                    situation shall be solved, in the following cases:</p>
                                <p aria-level="2">a) in case the Client breaches clause 11.1 of the Client Agreement;<br>b) in case of an
                                    elimination of consequences caused by a Spike;<br>c) in case of a technical failure occurring at the Company or
                                    at an authorized Company Agent.</p>
                                <p aria-level="2">4.25. Where the Client’s Account with the Company is in arrears, the Company retains the right to
                                    suspend any of the Client’s withdrawal and internal account-to-account transfer requests – including requests
                                    which were already made before the Client’s Account fell into arrears – until the Client has paid off the
                                    arrears in full.</p>
                                <p aria-level="2"><strong>5. Funds Transfer Options</strong><br><strong>5.1. Bank Transfer</strong></p>
                                <p aria-level="2">5.1.1. The Client may use bank transfer to deposit funds to the Client’s Account and withdraw
                                    funds from the Client’s Account, provided that this payment method is supported by the Company at the moment the
                                    transfer is executed.</p>
                                <p aria-level="2">5.1.2. This transfer method shall be available for the Client’s use once the Company has been
                                    provided the signed Client Registration Form and a copy of the Client’s passport (the Client shall provide
                                    Company Employee with a scanned copy of their passport/ID and their signed Client Registration Form).</p>
                                <p aria-level="2">5.1.3. The Client may only deposit funds through bank transfer to the Company Account from a bank
                                    account registered in the Client’s name or may execute the bank transfer without opening a bank account.</p>
                                <p aria-level="2">5.1.4. Before carrying out a bank transfer to deposit funds, the Client shall submit a deposit
                                    request in client portal and download a payment invoice. Invoice parameters such as the Company bank details,
                                    purpose of payment and the invoice due date should be observed carefully by the Client. In case the Client
                                    cannot make a transfer with the specified purpose of payment in the invoice, the Client must contact the
                                    employee of the Company to address this issue on an individual basis.</p>
                                <p aria-level="2">5.1.5. The Company shall have the right to reject the deposit of funds transferred by bank
                                    transfer to the Company Account in cases where the specified purpose of payment has been changed or in cases
                                    where funds have been transferred by a third person on the behalf of the Client. In such cases the Company shall
                                    return the funds back to the bank account from which they were transferred. All costs incurred by returning of
                                    such transfers shall be at the Client’s expense.</p>
                                <p aria-level="2">5.1.6. The Client may submit the withdrawal request through bank transfer only to bank accounts
                                    registered in the Client’s name.</p>
                                <p aria-level="2">5.1.7. The Company shall transfer money to the bank account of the Client in accordance with the
                                    details provided in the withdrawal request, provided that the conditions in clause 5.1.2 of these Regulations
                                    are satisfied.</p>
                                <p aria-level="2">5.1.8. When transferring funds, the Company shall use the purpose of payment as provided in client
                                    portal. In the case that the purpose of payment is changed, the Company shall be obliged to inform the Client
                                    about the new purpose of payment immediately by publishing it in client portal.</p>
                                <p aria-level="2">5.1.9. The Client understands and accepts that the Company shall not bear responsibility for the
                                    terms and time of execution of a bank transfer (usually bank transfers take around 2-5 business days) by the
                                    Client’s bank.</p>
                                <p aria-level="2"><strong>5.2. Credit/Debit Card Transfer</strong></p>
                                <p aria-level="2">5.2.1. The Client may make a deposit to their Account with accepted types of Credit/Debit Card
                                    specified in client portal at any time, provided that this method is supported by the Company at the moment the
                                    transfer is executed.</p>
                                <p aria-level="2">5.2.2. Acceptance of payments by Clients of the Company through client portal by means of
                                    international card payment systems are carried out by official partners of the Company.</p>
                                <p aria-level="2">5.2.3. The Client may only carry out a transfer from a Credit/Debit Card issued in the Client’s
                                    Account name. Transfers from Credit/Debit Cards of third parties are not accepted by the Company. In cases where
                                    the Company receives a payment to the Client’s Account from Credit/Debit Card of a third party, the Company
                                    shall perform a refund to the Credit/Debit Card from which they were transferred. All costs incurred by such
                                    refund shall be at the expense of the Client or such other third party.</p>
                                <p aria-level="2">5.2.4. When making a deposit with Credit/Debit Card the Company shall have the right to request
                                    the Client the following documents:</p>
                                <p aria-level="2">a) a high resolution scanned copy or photo of passport;&nbsp;<br>b) a high resolution scanned copy
                                    or photo of a Credit/Debit Card where the scan or photo of the front of the card should show: the first 6 and
                                    last 4 digits of the card number, the full name of the cardholder, the name of the issuing bank and the
                                    expiration date. The scan or photo of the back side should show the cardholder’s signature, but the CVC2 or CVV2
                                    code should be concealed. The Client will need to provide a scan or photo for each card used only
                                    once;&nbsp;<br>c) in case of transferring funds from a prepaid or virtual credit card (one where the
                                    cardholder’s name is not shown), the Client will need to provide a scan of the official confirmation letter from
                                    the issuing bank, verifying that the Client is the genuine cardholder. The document must contain the card
                                    number, the Client’s full name and bear the stamp of the bank that issued the card.</p>
                                <p aria-level="2">5.2.5. The Client understands and accepts that when using this type of transfer, the following
                                    restrictions shall be applied on Client’s Account:</p>
                                <p aria-level="2">a) Fund withdrawals and internal funds transfer will only be available after 30 calendar days (the
                                    restriction under clause 5.2.5 (a) shall be removed in the case that the Client provides the documents specified
                                    in clause 5.2.4 of these Regulations, and after such documents have been accepted by the Company);&nbsp;<br>b)
                                    Fund withdrawals will only be available through bank transfer to a bank account registered in the Client’s name
                                    or to the Credit/Debit card which was used upon deposit, provided that this payment method is supported by the
                                    Company at the moment the transfer is executed.</p>
                                <p aria-level="2">5.2.6. The Client understands and accepts that the Company shall not be held responsible for the
                                    time required to execute transfers, nor for the terms of payments execution by the issuing bank of Credit/Debit
                                    Card or for circumstances which result in a technical failure during the execution of transfer when they are not
                                    the fault of the Company, but the fault of the issuing bank, processing center or international payment
                                    system.</p>
                                <p aria-level="2">5.2.7. After the funds transferred by the Client using a Credit/Debit Card have been credited to
                                    the Client’s Account with the Company, the obligation of the Company to render the service of crediting the
                                    amount is fully performed and not subject to dispute.</p>
                                <p aria-level="2">5.2.8. In certain exceptional circumstances, the Company may refund payments made by Credit/Debit
                                    Card. In this case, the funds will be refunded to the card that was used for the deposit.</p>
                                <p aria-level="2"><strong>5.3. Internal Fund Transfer</strong></p>
                                <p aria-level="2">5.3.1. The Client may submit an internal fund transfer request at any time, provided this method
                                    is supported by the Company at the moment the transfer is executed.</p>
                                <p aria-level="2">5.3.2. The Client may submit an internal fund transfer request to another Client’s Account within
                                    client portal. Internal fund transfer request to the accounts of third parties shall not be accepted by the
                                    Company.</p>
                                <p aria-level="2">5.3.3. When performing the internal transfer of funds from the Client’s Account which previously
                                    received a deposit via a Credit/Debit Card, the restrictions shall be applied to the Client’s Account to which
                                    funds are being transferred.</p>
                                <p aria-level="2">5.3.4. If a Company employee should make a mistake when carrying out an internal transfer that
                                    results in funds being credited to the wrong account, the sum of the request shall be indemnified to the Client
                                    at the Company’s expense.</p>
                                <p aria-level="2">5.3.5. If the Client should make a mistake when filling out the internal fund transfer request
                                    which results in funds being credited to the wrong account, the sum of the request shall not be indemnified to
                                    the Client.</p>
                                <p aria-level="2"><strong>6. Client portal</strong><br>6.1. The Client agrees with the clauses of these Regulations
                                    concerning the usage of client portal.</p>
                                <p aria-level="2">6.2. Client portal access is password-protected.</p>
                                <p aria-level="2">6.3. The Client confirms and agrees that client portal is accessible only by using a password.</p>
                                <p aria-level="2">6.4. The Client shall take full responsibility for the security of their password and its
                                    protection from unauthorized access by third parties.</p>
                                <p aria-level="2">6.5. All instructions completed through client portal after entering the password are considered
                                    to be executed by the Client.</p>
                                <p aria-level="2">6.6. Any party who has gained access to client portal by entering the password shall be considered
                                    to be the Client.</p>
                                <p aria-level="2">6.7. The Company shall not be responsible for any losses endured by the theft, loss or disclosure
                                    of the password to third parties.</p>
                                <p aria-level="2">6.8. The Client shall have the right to change the password to client portal individually or
                                    follow the password recovery procedure.<br>To restore the password for access to the client portal, the Customer
                                    must send the following documents to the Company’s postal address:</p>
                                <p aria-level="2">a) a copy of the Client’s passport/ID;&nbsp;<br>b) a completed, signed and notarized password
                                    change application.</p>
                                <p aria-level="2">6.9. Deposit requests, withdrawal requests and internal fund transfer requests are displayed in
                                    the “Transfer History” section of client portal.</p>
                                <p aria-level="2">6.10. The Client shall see the following statuses of the deposit request in the client portal
                                    “Transfer History” section:</p>
                                <p aria-level="2">a) The “Processing” status means that the funds are expected to be transferred to the Company
                                    Account;&nbsp;<br>b) The “Successful” status means that the funds have been deposited to the Client’s Account;&nbsp;<br>c)
                                    The “Denied” status means that the request has been denied. The reason the request has been denied is shown in
                                    the details of the transfer.</p>
                                <p aria-level="2">6.11. The Client shall see the following statuses of the withdrawal request and internal fund
                                    transfer request in the client portal “Transfer History” section:</p>
                                <p aria-level="2">a) The “Processing” status means that the request has been received by the Company;&nbsp;<br>b)
                                    The “Successful” status means that the funds have been transferred to the Client’s External Account that was
                                    specified in the instruction or that the funds have been deposited to another of the Client’s accounts if it was
                                    an Internal funds transfer;&nbsp;<br>c) The “Denied” status means that the request has been denied. The reason
                                    the request has been denied is shown in the details of the transfer.</p>
                                <p aria-level="2">6.12. The deposit request, withdrawal request and internal fund transfer request may be canceled
                                    by the Client (in the “Transfer History” section of client portal) before they are executed.</p>
                                <p aria-level="2">6.13. The deposit request, withdrawal request and internal fund transfer request may be rejected
                                    by the Company, specifying the reason for rejection.</p>
                                <p aria-level="2"><strong>7. Inquiries on transfers and Dispute Resolution</strong><br>7.1. If any dispute should
                                    arise, the Client shall have the right to lodge a complaint with the Company or send a request for an inquiry.
                                    Complaints and requests should be received by the Company within 5 (five) business days of the grievance
                                    arising.</p>
                                <p aria-level="2">7.2. To lodge a complaint, the time when the dispute arises shall be considered the moment when
                                    the log appears in the “Transfer History” of client portal. To send a request, the time when the dispute arises
                                    shall be considered the moment as described in clauses 4.13, 4.14, 4.15 and 4.16.</p>
                                <p aria-level="2">7.3. To file a request to make an inquiry regarding a bank transfer to the Client, the Client
                                    shall:</p>
                                <p aria-level="2">a) complete the standard form in the “Payment History” of client portal.<br>b) for an inquiry on a
                                    bank transfer in currency other than RUR: attach a SWIFT copy confirming the bank transfer’s execution.</p>
                                <p aria-level="2">7.4. To make an inquiry on a Credit/Debit Card transfer, the Client shall:</p>
                                <p aria-level="2">a) complete the standard form in the “Payment History” of client portal. All requests filed
                                    through any other method (forum, email, telephone, etc.) will not be taken under consideration.&nbsp;<br>b) for
                                    an inquiry on a Credit/Debit Card transfer: attach proof of identity and a copy of the Credit/Debit Card.</p>
                                <p aria-level="2">7.5. To file a complaint on non-trading operations, the Client should complete the standard form
                                    in client portal.</p>
                                <p aria-level="2">7.6. Any complaint or request filed in accordance with clauses 7.3, 7.4 and 7.5 is automatically
                                    assigned a unique number (TID). The Client shall receive this confirmation in an email sent from [sv
                                    slug=”email-legal-en”].</p>
                                <p aria-level="2">7.7. The complaint must not include:</p>
                                <p aria-level="2">a) emotional description/appraisal of the dispute;&nbsp;<br>b) offensive language;&nbsp;<br>c)
                                    obscenities or expletives.</p>
                                <p aria-level="2">7.8. The Company shall have the right to request that the Client provide additional documents to
                                    make an inquiry.</p>
                                <p aria-level="2">7.9. The Company shall have the right to refuse a Client complaint regarding non-trading
                                    operations in the following circumstances:</p>
                                <p aria-level="2">a) where the complaint was not made in accordance with clauses 7.3 and 7.4 of these Regulations;&nbsp;<br>b)
                                    where the complaint was not made to the Company via the “Payment History” section of client portal (but by
                                    e-mail, telephone, on the forum, etc.).&nbsp;<br>c) where the Client initiates non-trading operations by way of
                                    internal account-to-account transfers to other trading or different accounts in the Client’s client portal using
                                    the funds credited to the Client’s Account as part of a disputed non-trading operation, or where the Client
                                    initiates trading operations using funds which have been credited to the Client’s Account by way of a disputed
                                    non-trading operation.&nbsp;<br>d) in other cases, provided for by these Regulations, the Client Agreement and
                                    other Business Conditions on the Company’s Website.</p>
                                <p aria-level="2">7.10. If the Client is not satisfied with the result of the Company’s review of a disputed
                                    situation, the Client may appeal to the relevant authorities in <span>'. get_option('custom_field_value_country_company') .'</span> in accordance with the laws of
                                    <span>'. get_option('custom_field_value_country_company') .'</span>.</p>
                                <p aria-level="2"><span>'. get_option('custom_field_value_company_name') .'</span></p>

                            [:]'); ?>
                        </div>
                        <div class="tab privacy-policy">
                            <div class="tab__title">
                                <?= _e('[:ru]Политика конфиденциальности[:en]Privacy Policy[:]'); ?>
                            </div>
                            <?php _e('[:ru]
                                <p><strong>Основные положения:</strong></p>
                                <ul>
                                    <li style="list-style-type: none;">
                                        <ul>
                                            <li>Настоящая Политика Конфиденциальности является неотъемлемой частью Условий
                                                ведения бизнеса, размещенного на данном Веб-сайте, а также иных заключаемых
                                                с Клиентом соглашений и вступает в силу вместе с Клиентским соглашением.
                                            </li>
                                            <li>Компания предпринимает все необходимые меры, чтобы обеспечить безопасность,
                                                конфиденциальность и защиту персональных данных и другой информации,
                                                обрабатываемой на данном Веб-сайте.</li>
                                            <li>Посещая данный Веб-сайт и/или пользуясь информацией и/или услугами,
                                                предоставляемыми Компанией, Клиент и иные третьи лица принимают условия
                                                данной Политики Конфиденциальности и соглашаются, что они ознакомлены с
                                                данной Политикой Конфиденциальности и дают свое согласие на сбор,
                                                регистрацию, накопление, хранение, адаптирование, изменение, обновление,
                                                использованием и распространение (реализация, передача), обезличение,
                                                уничтожение сведений о физическом лице и другой информации в соответствии с
                                                Политикой Конфиденциальности. Компания сохраняет право изменить положения
                                                настоящей Политики по своему собственному усмотрению и, следовательно,
                                                Клиенту и иным третьим лицам настоятельно рекомендуется ознакомиться с
                                                последней версией данной Политики Конфиденциальности перед посещением
                                                данного Веб-сайта.</li>
                                        </ul>
                                    </li>
                                </ul>
                                <p><b>Определение терминов:</b></p>
                                <ul>
                                    <li style="list-style-type: none;">
                                        <ul>
                                            <li>В данной политике применены термины, имеющие следующее значение:</li>
                                        </ul>
                                    </li>
                                </ul>
                                <p><b>«Клиент и / или связанные с ним лица (или Вы)»</b> — любое юридическое или физическое
                                    лицо, которое выразило заинтересованность в использовании наших услуг, использует их или
                                    ранее использовало, или иным образом связано с услугами, предоставляемыми Компанией,
                                    т.е. является членом семьи, бенефициарным собственником, представителем Компании и т.д.
                                </p>
                                <p><b>«Логотип»</b> — зарегистрированная торговая марка (товарный знак), которая является
                                    объектом авторских прав, на законных основаниях принадлежит Компании и охраняется
                                    национальным законодательством.</p>
                                <p><b>«Cookies» </b>– небольшой фрагмент данных, отправляемый веб-сервером для хранения на
                                    компьютере Клиента и / или пользователя в виде файла, чтобы при следующем Вашем
                                    обращении веб-сайт мог извлечь эту информацию. Этот файл каждый раз пересылается
                                    веб-серверу в http-запросе при попытке открыть страницу соответствующего сайта. Cookies
                                    могут использоваться на некоторых страницах веб-сайта, чтобы предоставить Вам более
                                    быстрый и удобный доступ.<span class="Apple-converted-space">&nbsp;</span></p>
                                <p><b>«Privacy Shield»</b> – требования Рамок защиты конфиденциальности ЕС-США и
                                    Швейцарии-США согласно сертификату Privacy Shield, установленных Министерством торговли
                                    США в отношении сбора, использования и хранения личной информации, передаваемой из
                                    Европейского Союза (включая страны Европейской экономической зоны) и Соединенное
                                    Королевство, а также Швейцария, в зависимости от обстоятельств, в Соединенные Штаты
                                    Америки, полагаясь на Privacy Shield.</p>
                                <ul>
                                    <li style="list-style-type: none;">
                                        <ul>
                                            <li>Вышеуказанные термины Вы можете встретить и на сторонних ссылках веб-сайта
                                                Компании.</li>
                                        </ul>
                                    </li>
                                </ul>
                                <p>2.3. В данной политике наименование Компании и все местоимения «мы», «нас», «наш» будут
                                    относиться к Компании, включая её основателей, разработчиков, директоров, инвесторов,
                                    сотрудников и лиц, указанных в настоящей политике.&nbsp;</p>
                                <p>2.4. Термины, не определенные в данной политике, имеют значения, указанные в Клиентском
                                    соглашении.</p>
                                <p><b>3. Распоряжение персональными данными</b></p>
                                <p>3.1. Компания ведет деятельность, при которой производится сбор личной информации,
                                    предоставляемой Клиентом и/или иными третьими лицами.<span
                                            class="Apple-converted-space">&nbsp;</span></p>
                                <p>3.2. Компания осуществляет обработку персональных данных Клиентов и может получать
                                    вышеуказанную информацию следующими способами:<span
                                            class="Apple-converted-space">&nbsp;</span></p>
                                <p>3.2.1. Непосредственно запрашивая ее у Клиента (с помощью регистрационной формы).</p>
                                <p>3.2.2. Путем автоматической записи информации о посещении Клиентом данного
                                    Веб-сайта.<span class="Apple-converted-space">&nbsp;</span></p>
                                <p>3.2.3. При посещении данного Веб-сайта Компания может получать и записывать техническую
                                    информацию из браузера: IP адрес, cookies и адрес запрашиваемой страницы.<span
                                            class="Apple-converted-space">&nbsp;</span></p>
                                <p>3.2.4. Связываясь с нами по телефону, электронной почте или иным способом.</p>
                                <p>3.2.5. Используя информацию, которая находится в общем доступе. Такая информация может
                                    считаться персональными данными и, следовательно, может использоваться и обрабатываться
                                    Компанией в соответствии с действующим законодательством, международными соглашениями,
                                    правилами и нормами соответствующих организаций, положениями данной Политики
                                    Конфиденциальности.</p>
                                <p>3.3. Клиент может посещать данный Веб-сайт без предоставления какой-либо информации о
                                    себе, однако, если Клиент имеет намерение использовать услуги, предлагаемые на Веб-сайте
                                    Компании, Клиент обязан предоставить Компании следующие сведения: адрес регистрации
                                    компании Клиента и фактическое местонахождение такой компании, номер контактного
                                    телефона, наименование компании Клиента; фамилия, имя и отчество должностных лиц
                                    (заявителей) компании Клиента; адрес электронной почты и другую информацию.</p>
                                <p>3.4. Компания распоряжается следующими персональными данными: фамилия, имя и отчество
                                    физического лица; место рождение; дата рождения; гражданство, место жительства
                                    (местонахождение); реквизиты документа, удостоверяющего физическое лицо; персональный
                                    код; идентификационный номер налогоплательщика; номер контактного телефона; адрес
                                    электронной почты; фотографии; подпись; владение недвижимым / движимым имуществом и
                                    правами на него; информация о текущих и/ или прошлых финансовых и / или имущественных
                                    обязательств, сроками исполнения, данными об исполнении этих обязательств и другой
                                    информацией, имеющей отношение к оценке Вашей кредитоспособности и финансового
                                    положения; запись телефонных разговоров и данные, предоставленные во время разговора,
                                    иная информация и сведения, позволяющая идентифицировать физическое лицо, в отношении
                                    которого делается запрос и предоставляется Компании. Компания может запрашивать иную
                                    информацию согласно действующему законодательству, положений данной Политики
                                    конфиденциальности и других условий и положений Компании по своему собственному
                                    усмотрению.</p>
                                <p>3.5. Персональные данные, предоставляемые Клиентом, обрабатываются для следующих
                                    целей:<span class="Apple-converted-space">&nbsp;</span></p>
                                <p>3.5.1. Чтобы правильно идентифицировать Вас и поддерживать деловые отношения с Вами.</p>
                                <p>3.5.2. Для оценки Вашей платежеспособности, кредитоспособности, риска исполнения
                                    обязательств и, если у вас есть задолженность, для управления вашим долгом.</p>
                                <p>3.5.3. Для предотвращения отмывания денег и финансирования терроризма или другой
                                    незаконной деятельности.</p>
                                <p>3.5.4. Для обеспечения Вашей безопасности и безопасности сотрудников Компании, а также
                                    общественного порядка.</p>
                                <p>3.5.5. Для защиты прав и интересов Компании.</p>
                                <p>3.6. Клиент и другие физические лица могут изменить свои настройки браузера таким
                                    образом, чтобы cookies не принимались, но в этом случае некоторые функции на Веб-сайте
                                    могут стать недоступными, а информация может отображаться некорректно.</p>
                                <p>3.7. Как и большинство менеджеров веб-сайтов, Компания контролирует посещение веб-сайтов
                                    и собирает информацию следующего характера: количество людей, посетивших веб-сайты,
                                    домен сервера, интернет-сервис провайдера, локальную информацию (GPS-сигнал устройства
                                    или информация о ближайших точках Wi-Fi и башнях мобильной связи, которая может быть
                                    передана соответствующему оператору сотовой сети при использовании посетителем контента
                                    данного Веб-сайта) и др. Эта информация используется для улучшения качества
                                    предоставляемых Компанией услуг.</p>
                                <p>3.8. Компания обязуется без согласия владельца Персональных данных и других сведений не
                                    разглашать личные данные третьим лицам, за исключением, когда такое раскрытие информации
                                    или ее части необходимо согласно действующему законодательству, и когда это требуется по
                                    причинам, указанным в пункте 3 настоящей Политики.</p>
                                <p>3.9. Согласно вышеуказанному Компания может передавать информацию о Вас следующим лицам:
                                </p>
                                <p>Банки, финансовые и платежные учреждения или другие поставщики платежных услуг (включая
                                    услуги по инициированию платежей и предоставлению информации о счете), страховые
                                    компании (в том числе страховые посредники, страховые брокеры);</p>
                                <p>Обработчики персональных данных или менеджеры, обрабатывающие совместные файлы данных
                                    должника или чья деятельность связана с восстановлением, администрированием или
                                    использованием долгов;</p>
                                <p>Банк Литвы, банки-корреспонденты или другие посредники (например, клиринговые палаты,
                                    расчетные агенты, брокерские фирмы, коллективные инвестиционные предприятия, управляющие
                                    компании, предоставляющие инвестиционные услуги и т. д.), участвующие в выполнении
                                    систем платежей или расчетов по ценным бумагам, и/или участвующие в управлении этими
                                    операциями;</p>
                                <p>Правоохранительные органы, суды, другие органы разрешения споров;</p>
                                <p>Третьи лица, которые устанавливают, администрируют или иным образом управляют программным
                                    обеспечением, используемым Компанией;</p>
                                <p>Поставщики услуг печати и/или почтовых услуг в связи с печатью и/или пересылкой сообщений
                                    Компании;</p>
                                <p>Лица, занимающиеся архивированием и хранением договоров и других документов;</p>
                                <p>Лица, которые предоставляют Компании услугу подписи ЭЦП;</p>
                                <p>Нотариусы, судебные приставы, юристы, адвокаты, консультанты, аудиторы, поставщики других
                                    услуг, которыми Компания пользуется для предоставления Клиентам необходимых услуг;</p>
                                <p>Другие третьи стороны (посредники), обрабатывающие Персональные данные от имени Компании
                                    или в соответствии с соглашениями, заключенными с Компанией;</p>
                                <p>Потенциальные или существующие правопреемники деятельности Компании или его части, или их
                                    уполномоченные консультанты или лица.</p>
                                <p>3.10. Для предоставления определенных услуг Персональные данные могут передаваться и
                                    обрабатываться за пределами этих территорий (например, посредством процессов взыскания
                                    задолженности) при условии сохранения уровня защиты личных данных, а именно:<span
                                            class="Apple-converted-space">&nbsp;</span></p>
                                <p>Данные передаются в США (США), которая следует принципам Privacy Shield;</p>
                                <p>Договор передачи данных был заключен Компанией с получателями данных в соответствии со
                                    стандартными договорными условиями, утвержденными Европейской комиссией, требованиями
                                    GDPR;</p>
                                <p>Получатель данных принадлежит государству, которое включено в список стран Европейской
                                    комиссии, которые обеспечивают адекватный уровень защиты данных.</p>
                                <p>3.11. Компания сохраняет за собой право нанимать третьих лиц по своему единоличному
                                    усмотрению для осуществления определенных функций согласно данной Политики и других
                                    положений Компании от имени Компании.</p>
                                <p>3.12. Владелец персональных данных считается информированным и соглашается, что Компания
                                    не несет ответственности за ущерб, возникший в результате использования таких данных
                                    третьими лицами в пределах, разрешенных законодательством. Во всех остальных случаях
                                    личные данные могут быть раскрыты третьим лицам только в порядке, предусмотренном
                                    действующим законодательством.<span class="Apple-converted-space">&nbsp;</span></p>
                                <p>3.13. Персональные данные хранятся не более, чем необходимо для достижения целей
                                    обработки Персональных данных, или в течение периода, определенного или разрешенного
                                    законом. Компания хранит информацию о Вас до тех пор, пока Вы пользуетесь услугами
                                    Компании, и еще 5 лет после того, как вы перестали пользоваться услугами Компании. По
                                    нашему усмотрению мы можем хранить личную информацию в течение разумного периода
                                    времени, необходимого для выполнения юридических обязательств. Кроме того, Компания
                                    отдельно хранит или удаляет личную информацию пользователей, которые согласились вести
                                    учет в течение оговоренного периода времени.</p>
                                <p>В целях прямого маркетинга (в форме рекламы или других специальных предложений) мы храним
                                    ваши личные данные до момента Вашего явного неодобрения.</p>
                                <p><b>4. Доступ к персональным данным. изменение и обновление персональных данных. отказ от
                                        обработки персональных данных третьими лицами</b></p>
                                <p>4.1. Субъект персональных данных имеет право запросить информацию о своих персональных
                                    данных, которые хранятся в Компани, и ознакомиться с процессом их обработки. Такие
                                    данные могут предоставляться бесплатно один раз в год, в других случаях за
                                    предоставление таких данных дополнительно может взиматься сумма, не превышающая цену
                                    поставки данных.</p>
                                <p>4.2. Владелец персональных данных обязан предоставить достоверную и исчерпывающую
                                    информацию согласно условиям и положениям Компании. В случае предоставления неверных
                                    и/или неполных персональных данных субъект несет ответственность согласно действующему
                                    законодательству.</p>
                                <p>4.3. У субъекта, предоставляющего свои персональные данные, есть возможность внести
                                    исправления при наличии ошибок или неточностей, данная услуга предоставляется Компанией
                                    на бесплатной основе.<span class="Apple-converted-space">&nbsp;</span></p>
                                <p>4.4. В случае возникновения каких-либо изменений в предъявленной субъектом персональных
                                    данных информации последний обязуется незамедлительно на протяжении дня, в котором
                                    произошли такие изменения, уведомить Компанию.</p>
                                <p>4.5. Запрос на доступ, исправление и отказ, а также уведомления об изменениях
                                    отправляются на адрес электронной почты:  <span>'. get_option('custom_field_value_email') .'</span>. В таких сообщениях
                                    необходимо указывать свою фамилию, имя и отчество и имя заявителя согласно
                                    регистрационным данным.</p>
                                <p>4.6. Не позднее чем через 1 месяц после получения вашего запроса Компания предоставляет
                                    (даже с отрицательным ответом) информацию о действиях, которые Компания предприняла
                                    после получения Вашего запроса на реализацию прав, или информацию с указанием причины
                                    неисполнения действия. Срок предоставления запрашиваемой информации может, при
                                    необходимости, быть продлен еще на два месяца в зависимости от сложности и объема
                                    обрабатываемых данных и количества предоставляемых услуг.</p>
                                <p>Компания может отказаться от обработки запроса на реализацию прав от Вас, или может
                                    запросить соответствующую плату, если запрос является явно необоснованным или
                                    чрезмерным, а также в других случаях, предусмотренных законодательством.</p>
                                <p><b>5. Обработка персональных данных в целях уведомления лица</b></p>
                                <p>5.1. Регистрируясь в сервисах Компании, субъект персональных данных соглашается на
                                    обработку своих персональных данных Компанией и добровольно дает свое согласие на
                                    получение уведомлений, сообщений и других предупреждений насчет сервисов и услуг, а
                                    также насчет соглашений, заключенных между Компанией и Клиентом.</p>
                                <p>5.2. Также, при регистрации на Веб-сайте Компании, Клиент подтверждает свое согласие на
                                    получение информационной, коммерческой и других рассылок.</p>
                                <p><b>6. Безопасность в сети интернет<span class="Apple-converted-space">&nbsp;</span></b>
                                </p>
                                <p>6.1. К сожалению, передача информации по сетям Интернет не является полностью защищенной.
                                    Несмотря на то, что мы делаем все возможное, чтобы защитить личные данные Клиентов,
                                    Компания не может гарантировать безопасность передачи информации через данный Веб-сайт.
                                    Владелец личных данных берет этот риск на себя. При получении информации мы используем
                                    жесткие процедуры и правила безопасности, чтобы предотвратить несанкционированный
                                    доступ.</p>
                                <p><b>7. Сохранность конфиденциальных данных на стороннем веб-сайте</b></p>
                                <p>7.1. Компания не несет ответственности за сохранность конфиденциальных данных, в случае
                                    использования сторонних веб-сайтов, даже если эти веб-сайты доступны через ссылки,
                                    размещенные на данном Веб-сайте Компании. Компания рекомендует Вам самостоятельно
                                    ознакомиться с условиями предоставления услуг и другой информацией на таком веб-сайте.
                                </p>
                                <p><b>8. Интеллектуальная собственность. Использование логотипа</b></p>
                                <p>8.1. Если не указано иное, программное обеспечение, необходимое для обслуживания
                                    Компании, доступно и/или используется на Веб-сайте Компании, а права на интеллектуальную
                                    собственность (включая авторские права) на содержание и информацию веб-сайта принадлежат
                                    Компании. Запрещается воспроизводить, переводить, адаптировать и/или иным способом
                                    использовать любую часть веб-сайта Компании (любой контент, логотип, программное
                                    обеспечение, продукты, услуги и т. Д.) в коммерческой деятельности третьего лица.</p>
                                <p>8.2. В течение срока действия соглашения, заключенного между Компанией и Клиентом
                                    (согласно действующему законодательству), Компания предоставляет Клиенту, использующему
                                    услуги Компании, возможность демонстрировать на Веб-сайте Компании описание своих
                                    предоставляемых услуг и продаваемых товаров бесплатно. Но в этом случае Компания имеет
                                    право без предупреждения удалить такое описание и/или логотип компании Клиента из
                                    сервисов Компании и не рекламировать его без указания причин удаления или полностью
                                    отказаться от такой рекламы в любой момент времени без объяснения причин.</p>
                                <p>7.3. Клиент, пользующийся услугами Компании, дает свое согласие на использование
                                    Компанией своего имени и/или логотипа в целях прямого маркетинга (например, указать, что
                                    Клиент пользуется услугами, поставляемыми Компанией).</p>
                                <p><b>9. Защита конфиденциальных данных <span
                                                class="Apple-converted-space">&nbsp;</span></b></p>
                                <p>9.1. Мы гарантируем сохранность и защиту конфиденциальных данных, полученных от Клиента,
                                    а также файлов публичных данных (если это не противоречит законодательству). В целях
                                    защиты такой информации от незаконного доступа, использования, копирования или
                                    разглашения Компания использует различные административные, технические и прочие
                                    инструменты обеспечения безопасности таких данных.</p>
                                <p><b>10. Заключительные положения</b></p>
                                <p>10.1. Данная Политика Конфиденциальности не противоречит действующему законодательству.
                                    Все споры в отношении данной политики разрешаются посредством переговоров и, в случае
                                    невозможности достичь соглашения, такие споры разрешаются согласно действующего
                                    законодательства.</p>
                                <p>10.2. Условия Политики Конфиденциальности могут быть изменены в любое время по усмотрению
                                    Компании. Соглашаясь с условиями данной политики, Вы соглашаетесь с тем, что Вы берете
                                    на себя ответственность время от времени проверять Политику и её условия, а также
                                    получать уведомления об изменениях.</p>
                                <p>10.3. Если Вы отказываетесь принимать изменения в Политике, Вы не должны продолжать
                                    пользоваться услугами Компании. Дальнейшее использование услуг и сервисов после внесения
                                    изменений и вступления их в силу подразумевает автоматическое принятие условий.<span
                                            class="Apple-converted-space">&nbsp;</span></p>
                                <p>11. Контактная информация</p>
                                <p>11.1. Если у Вас возникли какие-то вопросы, связанные с настоящей Политикой, мы будем
                                    рады ответить на них по следующему e-mail:  <span>'. get_option('custom_field_value_email') .'</span></p>
                                <p><span>'. get_option('custom_field_value_company_name') .'</span></p>
                                [:en]
                                <p aria-level="2"><strong>1. Obligations of the company</strong></p>
                                    <p aria-level="2">1.1. <span>'. get_option('custom_field_value_company_name') .'</span> (the Company) places a high priority on the privacy and integrity of the
                                        personal information of our Clients, both present and future and other visitors to the site. The Company strives
                                        to ensure the safety and confidentiality of all information received from the Client. This Privacy Policy (the
                                        Policy) describes how the Company collects, uses and protects the personal information of the Client. This
                                        Policy does not require you to submit any more information than you have already provided to the company if you
                                        are our client, and in the case of changes to the service by authorized representatives of the company.</p>
                                    <p aria-level="2"><strong>2. The Client’s Personal Data</strong></p>
                                    <p aria-level="2">2.1. To open an account, the Company will need certain information (Personal Data) about the
                                        Client. This data will also provide you with a better understanding of your needs and will help us provide you
                                        with information about products and services that are most suitable and convenient for you. This data will also
                                        be used to improve the quality of advising our Clients on all emerging issues.</p>
                                    <p aria-level="2"><strong>3. The Personal Data received from the Client</strong></p>
                                    <p aria-level="2">3.1. Information provided on applications and other Company forms, such as name, address, date of
                                        birth, passport data, occupation and personal mobile phone number.</p>
                                    <p aria-level="2">3.2. Financial information such as income, assets, investment experience.</p>
                                    <p aria-level="2">3.3. Documents provided to confirm identity, such as passport, utility bills, and/or bank
                                        statements or company incorporation information.</p>
                                    <p aria-level="2">3.4. Payment documents: money transfer orders, bank statements, bank card copies, etc.</p>
                                    <p aria-level="2"><strong>4. Use of Personal Data</strong></p>
                                    <p aria-level="2">4.1. The Company may use a Client’s Personal Data for one or more of the following purposes:<br>a)
                                        to confirm the Client’s identity;&nbsp;<br>b) to process trading and non-trading operations;&nbsp;<br>c) carry
                                        out the company’s anti-money laundering policy;&nbsp;<br>d) to inform the Client of Company products or services
                                        that may be of interest to the Client;&nbsp;<br>e) to provide other services that are relevant to the Client’s
                                        business relationship with the Company;&nbsp;<br>f) to keep a correct database of the Client’s account data;&nbsp;<br>g)
                                        to analyze statistical data to provide Clients with the most suitable products and services.</p>
                                    <p aria-level="2"><strong>5. Cookies</strong></p>
                                    <p aria-level="2">5.1. Cookies are small text files sent by a web server and stored on a visitor’s browser which are
                                        read later by the server when the visitor returns to the site. Cookies store information such as passwords
                                        (encrypted), usernames, shopping cart, certain preferences, etc. allowing visitors to visit sites repeatedly
                                        without having to enter the same information over and over. Cookies are not used to determine the personal
                                        identity of anyone visiting the site.</p>
                                    <p aria-level="2"><strong>6. Third Parties</strong></p>
                                    <p aria-level="2">6.1. The Company may convey the Client’s Personal Data to associated or affiliated companies,
                                        auditors, agents (including payment agents), banks or other authorized organizations or persons (Authorized
                                        Persons) for the sole purpose of processing the Client’s trading and non-trading instructions.<br>The Company
                                        guarantees that all Authorized Persons will adhere to the terms of this Policy and take all necessary steps to
                                        protect the Client’s Personal Data. The Company may provide Personal Data to third parties who are not the
                                        Company’s partners, agents or affiliates only when requested by representatives of legal or administrative
                                        authorities.</p>
                                    <p aria-level="2"><strong>7. Use of Information</strong></p>
                                    <p aria-level="2">7.1. By registering an account with the Company, you consent to the use of your personal details,
                                        and their processing: collection, recording, classification, aggregation, storage (updating, changing)
                                        extraction, use, transfer (distribution, provision of access) anonymization, blocking, deletion, and destruction
                                        of any information relating directly or indirectly to you, your trade transactions and payments, in accordance
                                        with this Privacy Policy.</p>
                                    <p aria-level="2"><strong>8. Security and Protection</strong></p>
                                    <p aria-level="2">8.1. The Company takes the issue of security very seriously and takes all possible measures to
                                        ensure the safety of your confidential information, including adhering to strict standards for the internal use
                                        of confidential information and using leading data storage technology.</p>
                                    <p aria-level="2">8.2. The company uses the Transport Layer Security (TLS) cryptographic protocol version 1.2. for
                                        the protection of Customer information.</p>
                                    <p aria-level="2">8.3. To make a payment from a plastic card, you fill out the form on the website of the processing
                                        center. To exclude the possibility of using these data, they are transferred to the Company in a reduced version
                                        (PSI / DSS standard) via a secure connection (see 8.2.). The company does not store full information about bank
                                        cards of customers.</p>
                                    <p aria-level="2"><strong>9. Contacts</strong></p>
                                    <p aria-level="2">9.1. If you have any questions about this Policy do not hesitate to contact us:</p>
                                    <p aria-level="2"> <span>'. get_option('custom_field_value_email') .'</span></p>
                                    <p aria-level="2"><span>'. get_option('custom_field_value_company_name') .'</span></p>
                                [:]'); ?>
                        </div>

                        <div class="tab refund-policy">
                            <div class="tab__title">
                                <?= _e('[:ru]Политика возврата денежных средств[:en]Refund Policy[:]'); ?>
                            </div>

                            <?= _e('[:ru]
                                <p><span>'. get_option('custom_field_value_company_name') .'</span> (далее «Компания») стремится, чтобы каждый Клиент остался доволен
                                    качеством предоставляемых услуг. Поэтому мы создали настоящую Политику возврата денежных
                                    средств, которая является неотъемлемой частью Клиентского соглашения, чтобы
                                    предотвратить разногласия с нашими Клиентами:</p>
                                <p>1. Открывая Счет Клиента на Веб-сайте Компании, Клиенты обязуются не подавать заявку на
                                    отзыв в свой банк или поставщику кредитной/депозитной карты уже зачисленного платежа на
                                    Счет Клиента как во время, так и после завершения пользования услугами Компании в
                                    соответствии с положениями Клиентского Соглашения и другими правилами и условиями,
                                    размещенными на Веб-сайте, которые являются неотъемлемой частью Клиентского соглашения.
                                    Любая попытка Клиента относительно упомянутого возврата может рассматриваться как
                                    нарушение Клиентского соглашения.</p>
                                <p>2. Если Компания получает запрос на возврат денежных средств по какой-либо транзакции,
                                    Компания оставляет за собой право заблокировать текущий баланс Клиента на сумму возврата
                                    до окончания разбирательства по этому вопросу и переслать денежные средства обратно
                                    после оплаты всех необходимых сборов и комиссий. Любые расходы, сборы и комиссий,
                                    связанные с возвратом денежных средств оплачиваются за счет Клиента.</p>
                                <p>3. Компания оставляет за собой право по собственному усмотрению производить возврат
                                    платежей Клиенту, полученных через любую платежную систему, включая кредитные/дебетовые
                                    карты с предварительным уведомлением Клиента за один день. В этом случае средства будут
                                    возвращены обратно на тот же источник платежа, с которого они были получены.</p>
                                <p>4. Если Клиент использовал банковский перевод для пополнения Счета Клиента, Компания
                                    оставляет за собой право отказать в зачислении денежных средств, поступивших банковским
                                    переводом на Счет Компании, с назначением платежа, отличающимся от указанного в инвойсе
                                    Компании, а также если перевод был осуществлен третьим лицом от имени Клиента. В таком
                                    случае Компания отправляет денежные средства обратно на банковский счет, с которого они
                                    были перечислены. Все расходы, связанные с возвратом подобного перевода, оплачиваются за
                                    счет Клиента.</p>
                                <p>5. В случае поступления платежа на счет Клиента с банковской карты третьего лица возврат
                                    средств осуществляется на ту же банковскую карту, с которой производилось пополнение
                                    счета. Все расходы, связанные с данным возвратом, оплачиваются за счет Клиента или
                                    такого третьего лица.</p>
                                <p>6. Если есть разумные основания полагать или подозревать, что происхождение средств
                                    Клиента и или всей деятельности Клиента в целом противоречит Политике AML и KYC или
                                    любым условиям Клиентского cоглашения и всех его неотъемлемых частей или любых
                                    требований законодательства и т.п., Компания оставляет за собой право в одностороннем
                                    порядке отказать в зачислении/снятии денежных средств со Счетов Клиента в системах
                                    Компании, заморозить данные активы, заблокировать Счет Клиента, отменить любые
                                    произведенные платежи и/или вернуть эти средства обратно. Клиент возмещает прямые и
                                    косвенные убытки/ущерб, которые Компания понесла в результате вышеупомянутого.</p>
                                <p>7. В случае если Компания обоснованно классифицирует какие-либо действия Клиента как
                                    подозрительные, неуместные и/или противоречащие обычной цели использования услуг
                                    Компании, где имеет место прямое или косвенное, неправомерное или недобросовестное
                                    намерение, Компания оставляет за собой право действовать в соответствии с настоящей
                                    Политикой Возврата Денежных средств без предварительного уведомления Клиента. В таких
                                    случаях Клиент возмещает прямые и косвенные убытки/ущерб Компании, а также расходы,
                                    понесенные Компанией в результате указанных действий Клиента.</p>
                                <p>8. Компания не будет возмещать любые убытки Клиента по каким-либо причинам.</p>
                                <p>9. Клиент может отправить письменный запрос на возврат денежных средств, которые были
                                    зачислены на счет Клиента, при условии, что Клиент вообще не совершал никаких торговых
                                    операций или других операций с момента зачисления денежных средств на Счет Клиента в
                                    течение более, чем 14 дней. Компания произведет возврат любых денежных средств на тот же
                                    источник платежа, с которого пополнялся счет Клиента, в течение разумного периода
                                    времени. Возврат может быть осуществлен непосредственно Клиенту, который внес денежные
                                    средства на свой Счет Клиента. Все расходы, связанные с таким возвратом, оплачиваются за
                                    счет Клиента. Возврат денежных средств будет на всю сумму, если не будет других
                                    договоренностей. Все остальные запросы будут рассматриваться как запрос на вывод средств
                                    и будут обрабатываться с использованием обычных методов и процедур.</p>
                                <p>10. В случае выявления любых злоупотреблений или мошеннических действий со стороны
                                    Клиента в отношении любой политики Компании, Компания оставляет за собой право отклонить
                                    запрос Клиента на возврат денежных средств.</p>
                                <p>11. Запрос на возврат денежных средств должен быть отправлен Клиентом на
                                     <span>'. get_option('custom_field_value_email') .'</span> включая следующие данные:</p>
                                <p>1. ФИО.</p>
                                <p>2. Номер Счета.</p>
                                <p>3. Страна проживания.</p>
                                <p>4. Используемая валюта.</p>
                                <p>5. Сумма запрашиваемого возврата денежных средств.</p>
                                <p>6. Способ оплаты.</p>
                                <p>12. Данная политика возврата денежных средств предназначена для информирования Клиентов о
                                    том, что Компания производит возврат денежных средств только в вышеперечисленных
                                    случаях.</p>
                                <p>13. Компания оставляет за собой право изменять Политику возврата денежных средств по
                                    своему усмотрению, без предварительного уведомления.</p>
                                    
                                    [:en]
                                    <p aria-level="2"><span>'. get_option('custom_field_value_company_name') .'</span> (hereinafter, the «Company») strives to make every Client happy with
                                        the pro-vided service. We have therefore created this Refund Policy, which is an integral part of the Client
                                        Agreements, in order to prevent disagreements with our Clients:</p>
                                    <p aria-level="2">1. By opening a Client Account on the Company’s Website, the Clients agree not to request or
                                        demand a refund or chargeback from their bank or credit/debit card provider at any time while or after using
                                        Company’s services under the terms of the Client Agreements and other polices and conditions posted on the
                                        Website, which are an integral part of the Client Agreements. Any attempt by the Clients regarding the mentioned
                                        refund/chargeback may be considered as a breach of the Client Agreements.</p>
                                    <p aria-level="2">2. If the Company receives the refund or chargeback for any transaction the Company reserves the
                                        rights to freeze the current balance of the Client for the refund amount until the end of pro-ceedings on this
                                        issue and send the funds back after all required fees have been charged. The Clients are responsible for
                                        covering any reversed payments and/or chargeback fees.</p>
                                    <p aria-level="2">3. The Company reserves the right, at its sole discretion, to refund payments to the Clients, made
                                        by any payment system including credit/debit cards, with one day prior notification to the Cli-ent. In this case
                                        the funds will be refunded back to the same payment system from which the funds were originally received.</p>
                                    <p aria-level="2">4. If the Client used a bank transfer to deposit funds to the Client’s Account, the Company shall
                                        have the right to reject the deposit of funds transferred by bank transfer to the Company Ac-count in cases
                                        where the specified purpose of payment has been changed or in cases where funds have been transferred by a third
                                        person on the behalf of the Client. In such cases the Company shall return the funds back to the bank account
                                        from which they were transferred. All costs incurred by returning of such transfers shall be at the Client’s
                                        expense.</p>
                                    <p aria-level="2">5. In cases where the Company receives a payment to the Client’s Account from credit/debit card of
                                        a third party, the Company shall perform a refund to the credit/debit card from which they were transferred. All
                                        costs incurred by such refund shall be at the expense of the Client or such other third party.</p>
                                    <p aria-level="2">6. If there is a reasonable basis to believe or suspect that the origins of Client’s funds and/or
                                        Cli-ent’s entire activities are contrary to Company’s Anti-Money Laundering Policy (AML policy) or any terms of
                                        the Client Agreement and all its integral parts or any law, regulations etc, the Company reserves unilateral
                                        rights to deny fund deposit/withdrawal to/from Client’s accounts within Company’s systems, freeze such funds,
                                        block the Client’s Account, cancel any payments made and/or return such funds back. The Client shall indemnify
                                        for and against the Company’s direct and indirect losses/damages which the Company suffers as the result of
                                        aforementioned.</p>
                                    <p aria-level="2">7. In case the Company reasonably classifies any of Client’s activities as suspicious,
                                        inappropriate and/or contradicting the usual purpose of the Company’s services usage, with the presence of
                                        direct or indirect illegal intent of the Client or without a good faith, the Company reserves the rights to act
                                        under this Policy and return funds without giving any prior notification to the Cli-ent. In such cases the
                                        Client shall indemnify for and against the Company’s direct and indirect losses/damages, expenses which the
                                        Company suffers as the result of the Client’s actions.</p>
                                    <p aria-level="2">8. The Company will not provide any refunds for the Client’s losses due to any reasons.</p>
                                    <p aria-level="2">9. The Client may send a written refund request if the Client’s account had been deposited into,
                                        provided that the Client has not performed any trading operations or other transactions for more than 14 days.
                                        The Company will refund any funds with the same method of deposited payment within a reasonable time. The refund
                                        can only be carried out to the Client, who has deposited funds into particular Client’s Account. All costs
                                        incurred by such refund shall be at the expense of the Client. The refund will be for the full amount, unless
                                        other arrangements have been made. All other requests will be considered as withdrawal and will be processed
                                        using the usual meth-ods and procedures.</p>
                                    <p aria-level="2">10. In case of detecting any abuses or fraudulent activities by the Client against the Company’s
                                        pol-icies, the Company reserves the right to decline the Client’s request of refund.</p>
                                    <p aria-level="2">11. The refund request should be sent by the Client to [sv slug=”email-legal-en”] with the
                                        following details:</p>
                                    <p aria-level="2">1. Full Name</p>
                                    <p aria-level="2">2. Account Number</p>
                                    <p aria-level="2">3. Country of Residence</p>
                                    <p aria-level="2">4. Currency Used</p>
                                    <p aria-level="2">5. Amount of Requested Refund</p>
                                    <p aria-level="2">6. Payment Method</p>
                                    <p aria-level="2">12. This Refund Policy is for informing the Clients that the Company does not provide any refunds
                                        unless any of the above occurred.</p>
                                    <p aria-level="2">13. The Company reserves rights to modify the Refund Policy at its discretion, without notice.</p>

                            [:]'); ?>
                        </div>
                        <div class="tab aml-kyc-policy">
                            <div class="tab__title">
                                <?= _e('[:ru]Политика AML и KYC[:en]AML and KYC policy[:]'); ?>
                            </div>
                            <?php _e('
                                [:ru]
                                <p>Политика AML и KYC распространяется на Компанию, ее партнеров и Клиентов и имеет цель
                                    воспрепятствовать и предотвратить отмывание денежных средств и любую другую
                                    деятельность, облегчающую отмывание денежных средств и/или финансирование
                                    террористической, или преступной деятельности. Компания требует от своих руководителей,
                                    сотрудников и филиалов следовать принципам данной Политики с тем, чтобы не допустить
                                    использование своих услуг в целях отмывания денег.</p>
                                <p>1. Определения терминов</p>
                                <ul>
                                    <li style="list-style-type: none;">
                                        <ul>
                                            <li>В данной Политике AML и KYC приведены и использованы следующие термины,
                                                которые Вы можете встретить и на сторонних ссылках данного Веб-сайта:</li>
                                        </ul>
                                    </li>
                                </ul>
                                <p><b>«Политика AML (AML CFT CWMDF) и KYC и / или Политика»</b> — anti-money laundering and
                                    counter-terrorist financing and counter-weapons of mass destruction financing
                                    (противодействие отмыванию денег, полученных преступным путем, противодействие
                                    финансированию терроризма и финансированию создания оружия массового уничтожения).
                                    Данная политика призвана противодействовать легализации доходов, добытых преступных
                                    путем и предназначена для предотвращения и снижения возможных рисков Компании быть
                                    вовлеченной в какую-либо незаконную деятельность.</p>
                                <p><b>«KYC»</b> —<b> </b>Know Your Customer (Знай своего клиента). Это принцип деятельности
                                    финансовых институтов, обязывающий их идентифицировать личность клиента, прежде чем
                                    проводить финансовую операцию.<span class="Apple-converted-space">&nbsp;</span></p>
                                <p><b>«CIP» </b>— Customer Identification Program (программа идентификации клиента).
                                    Требования условий данной программы для финансовых компаний при идентификации лиц,
                                    которые хотят использовать свои услуги для проведения финансовых операций. Данная
                                    программа регулируется Министерством юстиции США.</p>
                                <p><b>«Клиент и / или связанные с ним лица (или Вы)»</b> — любое юридическое или физическое
                                    лицо, которое выразило заинтересованность в использовании наших услуг, использует их или
                                    ранее использовало или иным образом связано с услугами, предоставляемыми Компанией, т.е.
                                    является членом семьи, бенефициарным собственником, представителем компании Клиента и
                                    т.д.</p>
                                <p><b>«Запрещенное поведение»</b> — подразумевается любое проявление незаконного поведения,
                                    которому присущи признаки мошенничества, коррупции, отмывания&nbsp;денежных средств,
                                    сговора, финансирования&nbsp;терроризма, а также&nbsp;любые другие акты и действия
                                    противоправные с точки зрения законодательства.</p>
                                <p><b>«Мошенничество»</b> – термин, подразумевающий использование обманных деяний или слов с
                                    намерением преследовать личные мотивы и интересы, тем самым причиняя ущерб интересам
                                    других пользователей и Компании.</p>
                                <p><b>«Коррупция»</b> – это действие, проявленное в виде предложения, вымогательства,
                                    убеждения или получения чего-либо ценного для ненадлежащего влияния на действия и права
                                    другой стороны.</p>
                                <p><b>«Отмывание денежных средств»</b> – это схема финансовых транзакций, основная цель
                                    которой заключается в сокрытии личности, источника и/или назначения незаконно полученных
                                    денежных средств.</p>
                                <p><b>«Сговор» </b>– это договоренность между двумя&nbsp;и более лицами, цель которого
                                    заключается в достижении ненадлежащего влияния на действия и права другой стороны и лиц,
                                    в том числе Компании.</p>
                                <p><b>«Финансирование терроризма»</b> – это сбор или предоставление средств любыми методами,
                                    которые прямо или косвенно будут влиять на противоправные действия согласно действующему
                                    законодательству.</p>
                                <p><b>«Преступное поведение»</b> – это преступление, совершенное в любой части мира.</p>
                                <p><b>«Уполномоченное лицо по борьбе с мошенничеством»</b> – это уполномоченное лицо, задача
                                    которого заключается в отслеживании, предотвращении и, при необходимости, проведении
                                    расследования для выявления случаев Запрещенного поведения. Вышеуказанное лицо несет
                                    прямую ответственность за надлежащее исполнение политики всех подозреваемых лиц.</p>
                                <p>1.2. Вышеуказанные термины Вы можете встретить и на сторонних ссылках Веб-сайта Компании.
                                </p>
                                <p>1.3. Термины, не определенные в данной политике, имеют значения, указанные в Клиентском
                                    соглашении.</p>
                                <p>1.4. В данной Политике AML и KYC<span class="Apple-converted-space">&nbsp;
                                </span>наименование Компании и все местоимения «мы», «нас», «наш» будут относиться к
                                    компании <span>'. get_option('custom_field_value_company_name') .'</span>, включая её основателей, разработчиков, директоров,
                                    инвесторов, сотрудников и лиц, указанных в настоящей Политике.</p>
                                <p>1.5. По контексту компания <span>'. get_option('custom_field_value_company_name') .'</span> может делать отсылки на сервисы и продукты,
                                    веб-сайты и другие материалы, предоставляемые Компанией.</p>
                                <p>2. Правовая основа</p>
                                <p>2.1. Данная Политика противодействия отмыванию денег основана на нормах следующих
                                    законодательных актов: национального законодательство, рекомендациях FATF, которое
                                    включает следующие нормативные акты, но не ограничивается ими:</p>
                                <p>2.1.1. Директива (ЕС) 2015/849 Европейского парламента и Совета от 20 мая 2015 года о
                                    предотвращении использования финансовой системы в целях отмывания денег или
                                    финансирования терроризма.</p>
                                <p>2.1.2. Международная конвенция о борьбе с финансированием терроризма (1999 год).</p>
                                <p>2.1.3. Сорок рекомендаций FATF.</p>
                                <p>2.1.4. Другие международные документы, регулирующие меры по предотвращению отмывания
                                    денег и финансированию терроризма.</p>
                                <p>2.2. Следование и принятие политики AML и KYC Компании автоматически подразумевает
                                    соблюдение всех нормативных и законодательных актов.</p>
                                <p>3. Процедура KYC</p>
                                <p>3.1. Процедура KYC реализует рекомендации FATF (Группы разработки финансовых мер борьбы
                                    с&nbsp;отмыванием денег). Согласно вышеуказанным рекомендациям, лицо, осуществляющее
                                    финансовые операции, обязано подтвердить свою личность.</p>
                                <p>3.2. KYC направлена на установление и проверку личности Клиента. В процессе сбора
                                    информации о Клиенте Компания должна убедиться, что лицо, обратившееся в Компанию, имеет
                                    реальный адрес проживания, не было судимо или не причастно к деятельности, которая бы
                                    ставила под сомнение законность происхождения его средств.</p>
                                <p>3.3. В отношении Клиента, с целью его идентификации может проводиться процедура CIP,
                                    которая состоит из сбора таких данных, как:</p>
                                <p>3.3.1. Для юридических лиц:</p>
                                <p>— Регистрационный номер компании в официальном реестре юридических лиц страны, в которой
                                    зарегистрирована компания.</p>
                                <p>—<span class="Apple-converted-space">&nbsp; </span>Наименование компании.</p>
                                <p>— Адрес регистрации и&nbsp;адрес ведения деятельности компании.</p>
                                <p>—<span class="Apple-converted-space">&nbsp; </span>Список уполномоченных лиц.</p>
                                <p>—<span class="Apple-converted-space">&nbsp; </span>Корпоративная структура.</p>
                                <p>— Сведения о бизнес-партнерах и предстоящих транзакциях (в т.ч. и контракты).</p>
                                <p>— Данные о UBO (собственнике и&nbsp;выгодоприобретателе) и прохождение ими процедур
                                    KYC/AML (оценка рисков отмывания средств клиентом).<span
                                            class="Apple-converted-space">&nbsp;</span></p>
                                <p>3.3.2. Для физических лиц:<span class="Apple-converted-space">&nbsp;</span></p>
                                <p>— Фамилия, имя и отчество.</p>
                                <p>— Дата и место рождения.<span class="Apple-converted-space">&nbsp;</span></p>
                                <p>— Национальность.</p>
                                <p>— Адрес проживания.</p>
                                <p>— Профессия, занимаемая должность и / или имя работодателя.</p>
                                <p>— Налоговый номер.<span class="Apple-converted-space">&nbsp;</span></p>
                                <p>3.4. Клиент обязан предоставить Компании документы, подтверждающие данные о нем, а
                                    именно:</p>
                                <p>— Международный или внутринациональный паспорт.</p>
                                <p>— Подтверждение адреса проживания и прописки.</p>
                                <p>— Счета за телефон.</p>
                                <p>— Выписки из банков.</p>
                                <p>— Копии счетов за коммунальные услуги.</p>
                                <p>— Прочие документы, подтверждающие данные, которые предоставлены Клиентом для прохождения
                                    процедуры идентификации.<span class="Apple-converted-space">&nbsp;</span></p>
                                <p>Если документы Клиента изданы не на английском языке, то такие документы по запросу
                                    Компании должны быть сначала переведены на английский язык любым официальным
                                    переводчиком, и эта переведенная копия должна быть должным образом легализирована и
                                    предоставлена вместе с другими необходимыми соответствующими документами и фотографиями
                                    Клиента.</p>
                                <p>3.5. Компания имеет право запросить дополнительные документы, необходимые для
                                    идентификации Клиента на свое усмотрение.</p>
                                <p><b>4. Идентификация пользователей </b></p>
                                <p>4.1. Компания сохраняет за собой право принимать всевозможные меры, включая
                                    принудительный запрос на идентификацию пользователя с целью предотвращения отмывания
                                    денег, финансирования терроризма и прочих противоправных действий посредством
                                    отслеживания подозрительной деятельности Клиента. Имеется в виду деятельность, которая
                                    подозревается или имеет какие-то признаки Запрещенного поведения, указанного в Политике.
                                </p>
                                <p>4.2. Компания не отслеживает каждого пользователя лично, но тем не менее, Компания
                                    проверяет Клиентов, уличенных в подозрительной и/или незаконной деятельности.</p>
                                <p>4.3. Мы можем запрашивать по своему усмотрению дополнительные доказательства
                                    идентификации, если у Компании по какой-либо причине возникают подозрения в деятельности
                                    Клиента.<span class="Apple-converted-space">&nbsp;</span></p>
                                <p>4.4. Компания оставляет за собой право без предупреждения заморозить учетную запись,
                                    связанную с подозрительной деятельностью и потребовать от владельца данной записи в
                                    обязательном порядке пройти верификацию пользователя KYC.</p>
                                <ul>
                                    <li>5. Использование и обработка личных данных</li>
                                </ul>
                                <p>5.1. Все персональные данные клиентов, пользователей и иных лиц, подозреваемых в
                                    финансировании терроризма, отмывании денег или мошеннической деятельности, будут
                                    использоваться и охраняться в соответствии с политиками Компании.</p>
                                <p>6. Отслеживание операций</p>
                                <p>6.1. Компания тщательно отслеживает все транзакции Клиента в случае подозрения его в
                                    мошенничестве или противоправных действиях. Если такая деятельность обнаруживается,
                                    Клиент в обязательном порядке должен пройти процесс верификации личности KYC. В случае
                                    отказа или игнорирования обращения Компании сохраняет за собой право заморозить аккаунт
                                    Клиента и закрыть доступ к нему до момента решения конфликта.</p>
                                <p>7. Изменения и правки</p>
                                <p>7.1. Политика AML и KYC может быть видоизменена в любое время по желанию и личному
                                    усмотрению Компании. Клиент принимает тот факт, что это в его интересах периодически
                                    самостоятельно отслеживать и проверять изменения в Политике AML и KYC, и тщательно
                                    знакомиться с уведомлениями касательно изменений и дополнений в данной Политике.</p>
                                <p>7.2. В случае, если Клиент отказывается принимать Политику AML и<span
                                            class="Apple-converted-space">&nbsp; </span>KYC, он не должен продолжать
                                    пользоваться услугами Компании. Дальнейшее использование веб-сайта Компании и сервисов
                                    Компании после вступивших в силу изменений данной Политики будет автоматически
                                    расцениваться как принятие Клиентом этих изменений.</p>
                                <p>8. Политика борьбы с мошенничеством</p>
                                <p>8.1. Политика борьбы с мошенничеством является неотъемлемой частью Клиентского
                                    соглашения, суть которой заключается в предотвращении или частичном сдерживании
                                    мошенничества, коррупционной деятельности, сговоров, отмывания денежных средств,
                                    финансирования терроризма и прочих противоправных действий в деятельности Клиента.</p>
                                <p>8.2. Компания является приверженцем высоких юридических, этических и моральных
                                    стандартов, в связи с чем, Клиенты, партнеры Компании имеют полное право ожидать от
                                    Компании реализацию защиты от любых незаконных и противоправных действий на высоком
                                    уровне.</p>
                                <p>8.3. Политика была интегрирована в соответствии с международным и местным
                                    законодательством.</p>
                                <p>9. Расследование мошенничества</p>
                                <p>9.1. В случае аргументированного и обоснованного подозрения лица в том, что последний
                                    связан прямо или косвенно с терроризмом, его финансированием, отмыванием денег или
                                    мошенничеством, Компания оставляет за собой право тщательно исследовать личность,
                                    используя все законные методы и способы, указанные в законодательстве и в Условиях
                                    ведения бизнеса, а также в других неотъемлемых частях (приложениях) Клиентского
                                    соглашения.</p>
                                <p>9.2. Уполномоченное лицо по борьбе с мошенничеством является лицом, которое занимается
                                    обнаружением, расследованием и защитой с целью предотвращения противоправных действий.
                                </p>
                                <p>9.3. В отдельных случаях Компания оставляет за собой право привлекать сторонние
                                    организации для исследования личностей с целью сбора достаточного количества улик или
                                    доказательств для передачи их соответствующим органам.</p>
                                <p>9.4. Также уполномоченное лицо несет ответственность за:</p>
                                <p>9.4.1. Сбор и хранения любой информации по делу предполагаемого&nbsp;подозреваемого,
                                    включая информацию о клиентах, сделках и транзакциях;</p>
                                <p>9.4.2. Сообщение о своих выводах Компании и соответствующим органам, а также третьим
                                    лицам в случае необходимости предоставления этой информации для расследования.</p>
                                <p>Уполномоченное лицо по борьбе с мошенничеством имеет полное право преследовать, открывать
                                    и закрывать расследования, а также сообщать о любом расследовании по делу Запрещенного
                                    поведения в пределах его компетентности без предварительного предупреждения, согласия
                                    и/или вмешательства со стороны подозреваемого лица или организации. Все расследования
                                    происходят строго объективно и конфиденциально.</p>
                                <p>9.5. Компания оставляет за собой право заблокировать счет Клиента и все его средства до
                                    момента выяснения обстоятельств с целью обеспечения оперативной и полной процедуры
                                    такого расследования.</p>
                                <p>Все Клиенты согласно настоящим Условиям ведения бизнеса, включая его неотъемлимые части
                                    обязаны максимально оперативно и эффективно сотрудничать с уполномоченным лицом, в том
                                    числе предоставлять соответствующую информацию и документации, если вышеупомянутое лицо
                                    потребует этого.</p>
                                <p>9.6. Вся документация и материалы, собранные и созданные в процессе расследования
                                    Запрещенной деятельности подозреваемого лица, должны быть строго конфиденциальны.
                                    Секретность информации сохраняется в интересах лиц, ответственных за нарушение, третьих
                                    лиц и в отношении расследования.&nbsp;</p>
                                <p>9.7. Уполномоченное лицо по борьбе с мошенничеством должен раскрывать конфиденциальную
                                    информацию только тем лицам или компаниям, которые уполномочены получать их в случае
                                    необходимости с целью проведения расследования или оказания помощи в расследовании.</p>
                                <p>10. Ответственность сторон</p>
                                <p>10.1. Уполномоченное лицо по борьбе с мошенничеством несет ответственность за
                                    отслеживание, расследование и предотвращение случаев Запрещенного поведения или
                                    противоправных действий.</p>
                                <p>10.2. Согласно вышеуказанному изложению, Компания оставляет за собой право выполнить
                                    идентификацию личности любого пользователя или транзакции в соответствии с политикой KYC
                                    с целью выявления доказательств запрещенного поведения.</p>
                                <p>10.3. Компания несет ответственность:</p>
                                <p>10.3.1. Принятие надлежащих мер в отношении лиц, подозреваемых в преступлении или
                                    совершивших преступление;</p>
                                <p>10.3.2. Обеспечение и создание эффективного контроля в целях предотвращения
                                    противоправных действий;</p>
                                <p>10.3.3. Проведение оперативных расследований в случае обнаружения запрещенного поведения
                                    или противоправных действий;</p>
                                <p>10.3.4. Сообщения о любых подозрениях и личностях в соответствующие государственные
                                    органы и компетентные структуры;</p>
                                <p>10.3.5. Обеспечение того, чтобы Уполномоченное лицо по борьбе с мошенничеством сообщал о
                                    любых внутренних или внешних подозрениях и случаях, связанных с противоправными актами.
                                </p>
                                <p>11. Заявление пользователя</p>
                                <p>11.1. Используя сервис Компании, Вы гарантируете, что не имеете намерения совершать
                                    какие-либо запрещенные действия, описанные выше. Кроме того, вы соглашаетесь на любые
                                    проверки в связи с расследованием в соответствии с Политикой, и Вы соглашаетесь на
                                    полное и быстрое сотрудничество с Уполномоченным лицом по борьбе с мошенничеством в
                                    рамках расследования.</p>
                                <p>12. Изменения и дополнения</p>
                                <p>12.1. Условия Политики AML и KYC могут быть изменены в любое время по усмотрению
                                    Компании. Соглашаясь с условиями данной политики, Вы соглашаетесь с тем, что Вы берете
                                    на себя ответственность время от времени проверять Политику и её условия, а также
                                    получать уведомления об изменениях.</p>
                                <p>12.2. Если Вы отказываетесь принимать изменения в Политике, Вы не должны продолжать
                                    пользоваться услугами Компании. Дальнейшее использование услуг и сервисов после внесения
                                    изменений и вступления их в силу подразумевает автоматическое принятие условий.</p>
                                <p>В случае, если у Вас есть информация о незаконной деятельности или подозрительных
                                    личностях, обращайтесь в нашу службу поддержки по e-mail:  <span>'. get_option('custom_field_value_email') .'</span>.</p>
                                <p><span>'. get_option('custom_field_value_company_name') .'</span></p>
                                [:en]
                                <p>AML and KYC policy is applicable to the Company, its partners and Clients and is intended to
                                    hinder and actively prevent money laundering and any other activity facilitating money laundering, financing of
                                    terrorism or criminal activity. The company demands from its executives, employees and affiliates to follow the
                                    principles of this Policy in order to prevent use of its services for the purposes of money laundering.</p>
                                <p>The Company determines money laundering as the process by means of which true origin and ownership to the
                                    revenues obtained from criminal activity are concealed in such a way that they could be used without any
                                    suspicion. It may take many forms, including:</p>
                                <p>– efforts to transform money received by illegal means into lawfully obtained money;</p>
                                <p>– making profit from lucrative crime, such as theft, fraud and evasion of taxes;</p>
                                <p>– be directly related to any property, money, received by illegal means or connected with terrorist activity;</p>
                                <p>– investment of revenues obtained from criminal activity into full range of financial products.</p>
                                <p>The essence of AML and KYC policy includes the necessity to provide the potential clients of the Company with the
                                    package of documents containing regulated data on its identity.</p>
                                <p>This system performs simultaneously several functions. On the one hand, KYC enables the Company:</p>
                                <p>– to verify identity of the client;</p>
                                <p>– enables the security service to evaluate the risk of involvement of the client into the illegal activity;</p>
                                <p>– enables to establish a filter regulating the type and number of transactions for the particular client in order
                                    to manage its risks;</p>
                                <p>– enables to monitor unusual client transactions and, if needed, to initiate their investigation.</p>
                                <p>– The minimal requirements for identification in order to open new account are listed below. If the client
                                    refuses or is unable to provide the required information for opening its account, the account shall be
                                    closed:</p>
                                <p>– official name and any other used names (for example, a maiden name);</p>
                                <p>– correct permanent address, proved by one of the official documents – utility bill, tax assessment, bank
                                    statement. The date of issue of such document shall not exceed 3 months;</p>
                                <p>– telephone number, fax number and e-mail address;</p>
                                <p>– date and place of birth;</p>
                                <p>– nationality;</p>
                                <p>– profession, job title and/or name of the employer;</p>
                                <p>– official personal identification number or other unique identifier, contained in the up-to-date official
                                    document (for example, passport, identity card, residence permit, driving license), having the photo of the
                                    customer;</p>
                                <p>– personally signed application.</p>
                                <p>If the documents of the Client are issued not in English, such documents at the request of the Company shall at
                                    first be translated into English by any official translator, and such translated copy shall be duly signed and
                                    affixed by this translator and forwarded with other relevant documents and photos of the Client.</p>
                                <p>The Client undertakes the following obligations within the framework of the AML and KYC policy:</p>
                                <p>– to uphold legal standards, including international, intended to fight against illegal trade, financial fraud,
                                    money laundering and legalization of proceeds, received by illegal means;</p>
                                <p>– to eliminate direct or indirect aiding illegal financial activity and any other illegal transactions using the
                                    Website.</p>
                                <p>The Client guarantees non-criminal origin, lawful ownership and right to use money transferred by it to the
                                    Accounts of the Company.</p>
                                <p>In case of suspicious or fraudulent money adding, including use of the stolen credit cards and/or any other
                                    fraudulent activity (including any repayment or annulments of payments), the Company reserves the right to block
                                    the account of the Client and annul any performed payments, as well as to investigate the nature of suspicious
                                    transactions on the Account of the Client, and therefore to suspend such transactions till clarification of the
                                    reasons of arising thereof and termination of the investigation.</p>
                                <p>During the investigation, the Company reserves the right to require from the Client the copies of the identity
                                    cards and bank card used for deposits, payment, as well as other documents, proving the legal ownership and
                                    non-criminal origin of the funds.</p>
                                <p>The Client is prohibited to use services and/or software for any illegal or fraudulent action, or for any illegal
                                    or fraudulent transaction (including money laundering) pursuant to the legislation of the state of the
                                    jurisdiction of the Client.</p>
                                <p>The refusal of the Company to execute suspicious transactions shall not serve the ground for arising of the legal
                                    liability of the Company for the failure to fulfil obligations with regard to the Client.</p>
                                <p>When depositing funds, the name of the sender shall coincide with the name of the client, stated in the account
                                    of the Company. In this case third-party mediation shall be prohibited.<br>The Client may withdraw funds in the
                                    same manner by online transfer through the same system of online transfer to the same account, from which they
                                    were transferred.</p>
                                <p>The Company strives to implement strict policy of anti-money laundering in order to guarantee that its clients
                                    will be identified as such suspicions to a certain standard in order to minimize the procedural obstacles for
                                    actual and legal clients. In order to fulfil its obligation to provide comprehensive assistance to the
                                    government, fighting against such illegal financial transactions, the Company has the electronic system, which
                                    completely verifies the identity of its client and may maintain the detailed report on all previous financial
                                    transactions.</p>
                                <p>The Company allows monitoring all suspicious actions and timely providing the law enforcement agencies with
                                    detailed information. That is why complete legal defence is provided to the clients, who provide the
                                    confidential financial data of the Company.</p>
                                <p>The Company also adheres to compliance with AML and KYC policy in order to fulfil its official legal
                                    obligations.</p>
                                <p>Considering new normative guiding principles, the procedure of due diligence will also include the verification
                                    of potential employees on the list of terrorists/individuals/organizations. The role of the employees in
                                    realization of any structure of AML is essential, the employees will have to perform effectively the specified
                                    procedures. The employees shall keep strict confidentiality regarding KYC and other AML procedures. If any kind
                                    of activity is transferred to any agency private person, it will be guaranteed that they follow the principles
                                    specified in this Policy.</p>
                                <p>The Company also ensures regular update of its platform according to current rules and provisions developed to
                                    monitor money laundering and other criminal financial practices on site.</p>
                                <p>Each subdivision of the Company shall apply AML and KYC policy, executed pursuant to the requirements of local
                                    legislation.</p>
                                <p>All personal and service documentation will be kept within minimum period of time, determined by local
                                    legislation.</p>
                                <p>All new employees obligatory undergo training concerning AML and KYC. The existing employees undergo training
                                    annually. Participation in additional training programs is obligatory for all employees related to AML and
                                    KYC.</p>
                                <p><span>'. get_option('custom_field_value_company_name') .'</span></p>
                                [:]') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start  part_aside_bottom -->
    <? get_template_part('part-templates/part_aside_bottom'); ?>
    <!-- end  part_aside_bottom -->

    
</main>

<? get_footer() ?>