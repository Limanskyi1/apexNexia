<? _e('[:ru][:en][:]'); ?>
<!-- section-footer -->
<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__logo">
                <img src="<?= get_template_directory_uri() . '/assets/img/home/logo.svg'?>" alt="header logo">
            </div>
            <div class="footer__links">
                <h3><? _e('[:ru]Контакты[:en]Contacts[:]'); ?></h3>
                <div class="footer__contacts">
                <div class="contacts__item">
                        <img src="<?= get_template_directory_uri() . '/assets/img/footer/location.svg'?>">
                        <a href=""><?php echo get_option('custom_field_value_address'); ?></a>
                </div>
                <div class="contacts__item">
                        <img src="<?= get_template_directory_uri() . '/assets/img/footer/phone.svg'?>">
                        <div class="contacts__item-numbers">
                            <a href="tel:<?php echo get_option('custom_field_value_phone'); ?>">
                                <?php echo get_option('custom_field_value_phone'); ?>
                            </a> 
                        </div>
                </div>
                <div class="contacts__item">
                        <img src="<?= get_template_directory_uri() . '/assets/img/footer/phone.svg'?>">
                        <div class="contacts__item-numbers">
                            <a href="tel:<?php echo get_option('custom_field_value_phone2'); ?>">
                                WhatsApp:
                                <br>
                                <?php echo get_option('custom_field_value_phone2'); ?>
                            </a> 
                        </div>
                </div>
                <div class="contacts__item">
                        <img src="<?= get_template_directory_uri() . '/assets/img/footer/mail.svg'?>">
                        <a href="mailto:<?php echo get_option('custom_field_value_email'); ?>">
                            <?php echo get_option('custom_field_value_email'); ?>
                        </a>
                </div>
                <p class="footer__copywrite">© 2023 <span>Apex Nexia</span></p>
                <div class="footer__contacts-logo">
                    <img src="<?= get_template_directory_uri() . '/assets/img/footer/footer__logo.png'?>">
                </div>
                </div>
            </div>
            <div class="footer__risks">
                <h3>
                <? _e('[:ru]Уведомление о риске:[:en]Risk Notification:[:]'); ?></h3>
                <p><? _e('[:ru]Операции, предлагаемые на данном сайте, могут совершать только совершеннолетние дееспособные лица (не моложе 18 лет). Операции с финансовыми инструментами, предлагаемые на данном сайте, могут рассматриваться как операции с повышенным риском.
                          [:en]Transactions offered on this site may only be carried out by fully capable adults (at least 18 years of age). Transactions with financial instruments offered by this website may be considered high-risk transactions.[:]'); ?></p>
                <p><? _e('[:ru]Существуют риски частичной или полной потери средств при таких операциях. Соответственно, настоятельно рекомендуется не инвестировать и не торговать средствами, потерю которых в случае неблагоприятного исхода таких сделок вы не можете себе позволить.
                          [:en]There are risks of partial or complete loss of funds in such transactions. Accordingly, you are strongly advised not to Accordingly, you are strongly advised not to invest or trade funds, the loss of which, in the case of an unfavourable outcome of such trades, you cannot afford.[:]'); ?></p>
                <p><? _e('[:ru]Мы рекомендуем Вам внимательно ознакомиться с нашим Заявлением о рисках (Уведомлением о рисках), Клиентским соглашением и другими регламентирующими документами, прежде чем приступать к совершению операций на данном Веб-сайте.
                          [:en]We recommend you to carefully read our Risk Disclosure Statement (Risk Notice), the Client Agreement and other governing documents before proceeding with transactions on this Website.[:]'); ?></p>
                <p>
                    <? _e('[:ru]
                           [:en]Company Information: This website is operated by UKUCHUMA FINANCIAL SERVICES (PTY) LTD a South Africa Investment Firm, authorized and regulated by the Financial Sector Conduct Authority (FSCA) of South Africa,
with FSP License Number 32535.
                           [:]'); ?>
                </p>
                <p>
                    <? _e('[:ru]
                           [:en]UKUCHUMA FINANCIAL SERVICES (PTY) LTD registration number is 2020 / 735868 / 07 with a registered address at Office 1-14 1ST Floor Workshop17, 138 West Street, Sandown Sandton Gauteng 2196, South Africa.
                           [:]'); ?>
                </p>
                <p>
                    <? _e('[:ru]
                           [:en]FINALSTATION TRADING LIMITED is incorporated under the Laws of Cyprus with registration number HE 416783 and acts as the payment agent for UKUCHUMA FINANCIAL SERVICES (PTY) LTD. FINALSTATION
                           [:]'); ?>
                </p>
                <p>
                    <? _e('[:ru]
                           [:en]TRADING LIMITED has its registered address at Andrea Kariolou 38, Ground Floor, Agios Athanasios, 4102 Limassol, Cyprus.
UKUCHUMA FINANCIAL SERVICES (PTY) LTD and IGM Forex Ltd belong to the same group of Companies. IGM Forex Ltd, with business address at 1 Agias Zonis, No. 504, Block B, 5th Floor, Nikolaou Pentadromos Center
Building, 3026 Limassol, is regulated by the Cyprus Securities and Exchange Commission with CIF license number as: 309/16.
Risk warning: Contracts for Difference (CFDs\') are a complex financial product, with speculative character, the trading of which involves significant risks of loss of capital. Trading CFDs, which are a marginal product, may
result in the loss of your entire balance. Remember that leverage in CFDs can work both to your advantage and disadvantage. CFDs traders do not own or have any rights to the underlying assets. Trading CFDs is not
appropriate for all investors. Past performance does not constitute a reliable indicator of future results. Future forecasts do not constitute a reliable indicator of future performance. Before deciding to trade, you should carefully
consider your investment objectives, level of experience and risk tolerance. You should not deposit more than you are prepared to lose. Please ensure you fully understand the risk associated with the product envisaged and
seek independent advice, if necessary.
                           [:]'); ?>
                </p>
                <p>
                    <? _e('[:ru]
                           [:en]Regional Restrictions: UKUCHUMA FINANCIAL SERVICES (PTY) LTD does not offer services within the USA, Iran, North Korea, Myanmar, Israel and certain EU member states. The Company reserves
the right, at its discretion, to decline registration from other regions, such as FATF high-risk jurisdictions or countries that are subject to sanctions.
                           [:]'); ?>
                </p>
                <p>
                    <? _e('[:ru]
                           [:en]Nationality Restrictions: UKUCHUMA FINANCIAL SERVICES (PTY) LTD does not offer services to residents of Turkey.
                           [:]'); ?>
                </p>
                <p>
                    <? _e('[:ru]
                           [:en]Marketing Communication: UKUCHUMA FINANCIAL SERVICES (PTY) LTD does not issue advice, recommendations or opinions in relation to acquiring, holding or disposing of any financial product. UKUCHUMA
FINANCIAL SERVICES (PTY) LTD is not a financial adviser.
                           [:]'); ?>
                </p>
        
                <div class="partners">
                     <img src="<?= get_template_directory_uri() . '/assets/img/footer/footer_icon-1.png'?>">
                     <img src="<?= get_template_directory_uri() . '/assets/img/footer/footer_icon-2.svg'?>">
                     <img src="<?= get_template_directory_uri() . '/assets/img/footer/footer_icon-3.svg'?>">
                     <img src="<?= get_template_directory_uri() . '/assets/img/footer/footer_icon-4.svg'?>">
                     <img src="<?= get_template_directory_uri() . '/assets/img/footer/footer_icon-5.png'?>">
                 </div>
            </div>
        </div>
    </div>
</footer>
<? get_template_part( 'part-templates/part_scroller_top' )?>

<?php
wp_footer();
?>
</body>

</html>
