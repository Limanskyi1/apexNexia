document.addEventListener('DOMContentLoaded', () => {
    const getPageLangCode = () => {
        const htmlLangAttr = document.getElementsByTagName('html')[0].getAttribute('lang');
        const langCodes = {
            'ru-RU': 'ru',
            'en-US': 'en',
            'de-DE': 'de',
            'it-IT': 'it',
            'cs-CZ': 'cs',
            'pl-PL': 'pl'
        };
        return langCodes[htmlLangAttr];
    };
    const LOG_TRADE_LINK = `https://trade.${document.location.hostname}/auth/login?lang=${getPageLangCode()}`;
    const REG_TRADE_LINK = `https://trade.${document.location.hostname}/auth/register?lang=${getPageLangCode()}`;
    const logElemenets = document.querySelectorAll("a[data-link='log']");
    logElemenets.forEach((item) => {
        item.href = LOG_TRADE_LINK;
    });
    const regElemenets = document.querySelectorAll("a[data-link='reg']");
    regElemenets.forEach((item) => {
        item.href = REG_TRADE_LINK;
    });
});

