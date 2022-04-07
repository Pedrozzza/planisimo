<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Řešení plánování výroby a simulace výrobních a logistických procesů">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- favicon -->
        @include('inc.favicon')

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Cookies -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.8.0/dist/cookieconsent.css">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv

        <!-- Cookies -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.8.0/dist/cookieconsent.js"></script>
        <script>
            window.addEventListener('load', function(){
                var cc = initCookieConsent();
                cc.run({
                    current_lang: 'cs',
                    autoclear_cookies: true,
                    theme_css: '',
                    page_scripts: true,
                    onFirstAction: function(user_preferences, cookie){
                    },
                    onAccept: function (cookie) {
                    },
                    onChange: function (cookie, changed_categories) {
                    },
                    languages: {
                        cs: {
                            consent_modal: {
                                title: 'Používáme soubory cookies!',
                                description: ''
                                    + ' S cílem zlepšit služby,'
                                    + ' které nabízíme.'
                                    + ' <button type="button" data-cc="c-settings" class="cc-link">Více možností</button>',
                                primary_btn: {
                                    text: 'Přijmout vše',
                                    role: 'accept_all', // 'accept_selected' or 'accept_all'
                                },
                                secondary_btn: {
                                    text: 'Odmítnout vše',
                                    role: 'accept_necessary', // 'settings' or 'accept_necessary'
                                },
                            },
                            settings_modal: {
                                title: 'Předvolby souborů cookies',
                                save_settings_btn: 'Uložit nastavení',
                                accept_all_btn: 'Vybrat vše',
                                reject_all_btn: 'Odmítnout vše',
                                close_btn_label: 'Zavřít',
                                cookie_table_headers: [
                                    { col1: 'Název' },
                                    { col2: 'Doména' },
                                    { col3: 'Expirace' },
                                    { col4: 'Popis' },
                                ],
                                blocks: [
                                    {
                                        title: 'Používání souborů cookies 📢',
                                        description: 'Soubory cookie používáme k zajištění základních funkcí webu a '
                                            + 'ke zlepšení vašeho online zážitku. Pro každou kategorii si můžete vybrat, zda '
                                            + 'se chcete přihlásit/odhlásit, kdykoli budete chtít.',
                                    }, {
                                        title: 'Nezbytně nutné cookies',
                                        description: 'Tyto soubory cookie jsou nezbytné pro správné fungování '
                                            + 'našich webových stránek. Bez těchto cookies by web nefungoval správně',
                                        toggle: {
                                            value: 'necessary',
                                            enabled: true,
                                            readonly: true, // cookie categories with readonly=true are all
                                            // treated as "necessary cookies"
                                        },
                                    }, {
                                        title: 'Preferenční cookies',
                                        description: 'Tyto soubory cookies umožňují webové stránce zapamatovat si informace, '
                                            + 'které mění způsob, jakým se webová stránka chová nebo vypadá. Například jako je váš '
                                            + 'preferovaný jazyk nebo region, ve kterém se nacházíte.',
                                        toggle: {
                                            value: 'preference', // your cookie category
                                            enabled: false,
                                            readonly: false,
                                        },
                                    }, {
                                        title: 'Analytické cookies',
                                        description: 'Tyto soubory cookies se používají ke shromažďování informací pro analýzu provozu '
                                            + 'na našich webových stránkách a sledování používání našich webových stránek uživateli. '
                                            + 'Tyto soubory cookies mohou například sledovat věci jako je doba kterou na webu trávíte, '
                                            + 'nebo stránky, které navštěvujete, což nám pomáhá pochopit, jak pro vás můžeme vylepšit '
                                            + 'náš web. '
                                            + 'Informace shromážděné prostřednictvím těchto analytických cookies '
                                            + 'neidentifikují žádné osoby.',
                                        toggle: {
                                            value: 'analytics', // your cookie category
                                            enabled: false,
                                            readonly: false,
                                        },
                                    }, {
                                        title: 'Reklamní cookies',
                                        description: 'Tyto soubory cookie shromažďují informace o tom, jak'
                                            + ' web používáte, které stránky jste navštívili a na které odkazy jste klikli. '
                                            + 'Všechna data jsou anonymizována a nelze je použít k vaší identifikaci',
                                        toggle: {
                                            value: 'marketings',
                                            enabled: false,
                                            readonly: false,
                                        },
                                    }, {
                                        title: 'Více informací',
                                        description: 'Máte-li jakékoli dotazy týkající se našich zásad týkajících se'
                                            + ' souborů cookie a vašich voleb, prosím <a class="cc-link" href="/contact">'
                                            + 'kontaktujte nás</a>.',
                                    },
                                ],
                            },
                        },
                    }
                });
            });
        </script>
    </body>
</html>
