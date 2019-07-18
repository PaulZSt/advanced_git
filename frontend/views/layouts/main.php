<?php

use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\ListView;
use yii\helpers\Html;

?>

<!DOCTYPE html>

<html lang="nb-NO">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>TaBort.se</title>
    <meta name="description"
          content="Skal du kjøpe eller selge, stort eller smått, så er FINN.no stedet. Vi er der for deg når du skal selge hytta di, finne en pent brukt sofa, fly billigst mulig til Praha, eller finne drømmebilen.">

    <link media="all" rel="stylesheet" type="text/css" href="/normalize.css">
    <link media="all" rel="stylesheet" type="text/css" href="/core.css">
    <link media="all" rel="stylesheet" type="text/css" href="/utilities.css">
    <link media="all" rel="stylesheet" type="text/css"
          href="/6a32498b985b06e89d0040c8202cbab1936c4fb86d4316aba02ae76d4f2f5cad.css">

    <body>
    <div id="frontpage-content">
        <header class="top-bar">
            <span role="img"></span>
            <nav class="top-bar__nav notranslate">
                <a href="/" class="top-bar__home">
                        <span class="top-bar__home__logo-small">
                            <svg focusable="false" width="62" height="32" viewBox="0 0 124 64">
                                <title>
                                    FINN.no
                                </title>
                                <path fill="#06bffc" d="M119.8 58V6c0-1-.8-1.9-1.9-1.9H66c-1 0-1.9.8-1.9 1.9v53.8H118c1 0 1.8-.8 1.8-1.8"></path>
                                <path fill="#0063fc"
                                      d="M22.5 4.2H6C5 4.2 4.2 5 4.2 6v52c0 1 .8 1.9 1.9 1.9H60V41.5C59.9 20.9 43.2 4.2 22.5 4.2"></path>
                                <path fill="#fff"
                                      d="M118 0H66c-3.3 0-6 2.7-6 6v17.4C53.2 9.6 38.9 0 22.5 0H6C2.7 0 0 2.7 0 6v52c0 3.3 2.7 6 6 6h112c3.3 0 6-2.7 6-6V6c0-3.3-2.7-6-6-6m1.8 58c0 1-.8 1.9-1.9 1.9H64.1V6c0-1 .8-1.9 1.9-1.9h52c1 0 1.9.8 1.9 1.9v52zM4.2 58V6C4.2 5 5 4.2 6 4.2h16.5c20.6 0 37.4 16.8 37.4 37.4v18.3H6c-1-.1-1.8-.9-1.8-1.9"></path>
                            </svg>
                        </span>
                    <span class="top-bar__home__logo">
                        <svg focusable="false" width="92" height="32" viewBox="0 0 184 64">
                            <title>
                                FINN.no
                            </title>
                            <path fill="#06bffc" d="M179.8 58V6c0-1-.8-1.9-1.9-1.9H66c-1 0-1.9.8-1.9 1.9v53.8H178c1 0 1.8-.8 1.8-1.8"></path>
                            <path fill="#0063fc"
                                  d="M22.5 4.2H6C5 4.2 4.2 5 4.2 6v52c0 1 .8 1.9 1.9 1.9H60V41.5C59.9 20.9 43.2 4.2 22.5 4.2"></path>
                            <path fill="#fff"
                                  d="M178 0H66c-3.3 0-6 2.7-6 6v17.4C53.2 9.6 38.9 0 22.5 0H6C2.7 0 0 2.7 0 6v52c0 3.3 2.7 6 6 6h172c3.3 0 6-2.7 6-6V6c0-3.3-2.7-6-6-6m1.8 58c0 1-.8 1.9-1.9 1.9H64.1V6c0-1 .8-1.9 1.9-1.9h112c1 0 1.9.8 1.9 1.9v52zM4.2 58V6C4.2 5 5 4.2 6 4.2h16.5c20.6 0 37.4 16.8 37.4 37.4v18.3H6c-1-.1-1.8-.9-1.8-1.9"></path>
                            <path fill="#fff"
                                  d="M110.1 21.1h-4.2c-.7 0-1.2.5-1.2 1.2v19.3c0 .7.5 1.2 1.2 1.2h4.2c.7 0 1.2-.5 1.2-1.2V22.3c0-.6-.6-1.2-1.2-1.2m-12 0H83c-.7 0-1.2.5-1.2 1.2v19.3c0 .7.5 1.2 1.2 1.2h4.2c.7 0 1.2-.5 1.2-1.2v-4h7.7c.7 0 1.2-.5 1.2-1.2v-3.2c0-.7-.5-1.2-1.2-1.2h-7.7v-4.9h9.7c.7 0 1.2-.5 1.2-1.2v-3.7c0-.5-.6-1.1-1.2-1.1m62.8 0h-4.2c-.7 0-1.2.5-1.2 1.2v9.5l-6.6-10c-.3-.4-.8-.7-1.3-.7h-3.2c-.7 0-1.2.5-1.2 1.2v19.3c0 .7.5 1.2 1.2 1.2h4.2c.7 0 1.2-.5 1.2-1.2v-9.4l6.5 9.8c.3.4.8.7 1.3.7h3.4c.7 0 1.2-.5 1.2-1.2V22.3c-.1-.6-.6-1.2-1.3-1.2m-25.4 0h-4.2c-.7 0-1.2.5-1.2 1.2v9.5l-6.6-10c-.3-.4-.8-.7-1.3-.7H119c-.7 0-1.2.5-1.2 1.2v19.3c0 .7.5 1.2 1.2 1.2h4.2c.7 0 1.2-.5 1.2-1.2v-9.4l6.5 9.8c.3.4.8.7 1.3.7h3.4c.7 0 1.2-.5 1.2-1.2V22.3c-.1-.6-.6-1.2-1.3-1.2"></path>
                        </svg>
                    </span>
                <span class="top-bar__home__title">Mulighetenes marked</span>
            </a>

                <a href="/site/about" class=" top-bar__menu-item" title="Varslinger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <g fill="none" fill-rule="evenodd">
                            <path fill="currentColor" fill-rule="nonzero" d="M20.001 16.998v.004h-2v-.004H18v-2H18V6.502l-8.5 8.5H12v-.004h2v.004H14v2H14v8.496l8.5-8.5H20zm0-2h7.331L12 30.33V17.002H4.668L20 1.67v13.329z"></path>
                        </g>
                    </svg>
                    <span class="top-bar__menu-item__title translate">Varslinger</span>
                </a>

            <a href="/site/contact" class=" top-bar__menu-item" title="Varslinger">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <g fill="none" fill-rule="evenodd">
                        <path fill="currentColor" fill-rule="nonzero" d="M20.001 16.998v.004h-2v-.004H18v-2H18V6.502l-8.5 8.5H12v-.004h2v.004H14v2H14v8.496l8.5-8.5H20zm0-2h7.331L12 30.33V17.002H4.668L20 1.67v13.329z"></path>
                    </g>
                </svg>
                <span class="top-bar__menu-item__title translate">Varslinger</span>
            </a>

            <a href="/site/add/" class=" top-bar__menu-item"
               title="Ny annonse">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M0 0h32v32H0z"></path>
                        <path fill="currentColor" fill-rule="nonzero" d="M17 15V4h-2v11H4v2h11v11h2V17h11v-2z"></path>
                    </g>
                </svg>

                <span class="top-bar__menu-item__title translate">Ny annonse</span>
            </a>
            <a href="/site/login" class=" top-bar__menu-item" title="Meldinger">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <path fill="currentColor" fill-rule="evenodd" d="M12.259 20.997a10.015 10.015 0 0 1 7.006-10.887c-1.162-2.987-4.058-5.108-7.455-5.108a8.007 8.007 0 0 0-8.005 8.009c0 1.251.188 2.078.692 3.252l.252.587-.67 3.112 2.894-.511.664.438c.912.6 2.703 1.13 4.173 1.13.15 0 .3-.013.449-.022zm.467 1.98c-.302.027-.606.045-.916.045-2.028 0-4.172-.735-5.273-1.46l-5.042.89 1.164-5.399c-.533-1.241-.856-2.352-.856-4.042C1.803 7.48 6.283 3 11.81 3c4.373 0 8.08 2.81 9.442 6.72.306-.027.616-.042.93-.042 5.526 0 10.006 4.482 10.006 10.011 0 1.69-.323 2.8-.856 4.042l1.163 5.398-5.041-.89c-1.102.726-3.245 1.461-5.273 1.461-4.375 0-8.095-2.81-9.455-6.723zm16.515.551l.252-.587c.505-1.175.693-2 .693-3.252a8.007 8.007 0 0 0-8.005-8.009 8.007 8.007 0 0 0-8.005 8.01 8.007 8.007 0 0 0 8.005 8.008c1.47 0 3.26-.53 4.172-1.131l.665-.438 2.894.51-.67-3.11zm-9.908-2.838a1 1 0 1 1 0-2.002 1 1 0 0 1 0 2.002zm3.002 0a1 1 0 1 1 0-2.002 1 1 0 0 1 0 2.002zm3.002 0a1 1 0 1 1 0-2.002 1 1 0 0 1 0 2.002z"></path>
                </svg>
                <span class="top-bar__menu-item__title translate">Meldinger</span>
            </a>

            <?
            echo '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>';

            ?>

            <a href="/site/login" class=" top-bar__menu-item" aria-current="false"
               title="Logg inn" onclick="trackEventLogin();">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <g fill="none" fill-rule="evenodd">
                        <path fill="currentColor" fill-rule="nonzero" d="M12.08 18.226a8 8 0 1 1 7.84 0c5.116 1.263 9.32 4.95 11.08 9.89l-1.874.63c-1.919-5.385-7.16-9.07-13.125-9.07-5.967 0-11.21 3.687-13.126 9.074L1 28.121c1.758-4.94 5.964-8.63 11.08-9.895zM16 17.25a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"></path>
                    </g>
                </svg>
                <span class="top-bar__menu-item__title translate">Logg inn</span>
            </a>
        </nav>
    </header>
    <div class="top-bar__spacer"></div>
    <!-- / HEADER -->


    <!-- /AD BANNERS -->
    <main class="pageholder" data-replace-main-section="">
        <h1 class="u-screen-reader-only">FINN.no, mulighetenes marked</h1>
        <div id="broadcast" role="alert" aria-atomic="false" data-replace-broadcast=""></div>
        <div class="grid">

            <?= Alert::widget() ?>

            <!-- GLOBAL SEARCH -->

            <div class="panel">
                <form class="frontpage-search frontpage-search--overlay" id="global-search"
                      action="https://www.finn.no/globalsearchlander" role="search" data-base-url="https://www.finn.no"
                      data-beta="REGULAR" data-where="FRONTPAGE" data-is-mobile="false" data-search-keys=""
                      data-is-dropdown="">
                    <div class="frontpage-search__form">
                        <input type="hidden" name="searchKeys" value="">
                        <input class="frontpage-search__input" id="search" type="search" name="q"
                               placeholder="Søk etter puddel, Playstation eller FINN-kode" aria-label="Søk"
                               autocomplete="off" autocapitalize="off" role="combobox" aria-autocomplete="list"
                               aria-expanded="false">
                        <button class="frontpage-search__submit" aria-label="Søk">
                            <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" height="32" width="32">
                                <path fill="currentColor" fill-rule="evenodd" d="M22.412 21.198l-.558.656-.656.558a10.449 10.449 0 0 1-6.754 2.476C8.685 24.888 4 20.203 4 14.444 4 8.685 8.685 4 14.444 4c5.759 0 10.445 4.685 10.445 10.444 0 2.473-.88 4.872-2.477 6.754zm1.524 1.294a12.393 12.393 0 0 0 2.953-8.048C26.889 7.571 21.317 2 14.444 2 7.572 2 2 7.571 2 14.444c0 6.873 5.572 12.444 12.444 12.444 3.069 0 5.878-1.11 8.048-2.952L28.556 30 30 28.555l-6.064-6.063z"></path>
                            </svg>
                        </button>
                    </div>
                    <div data-dropdown-insertion=""></div>
                    <div data-fullscreen-search-focus="" tabindex="-1"></div>
                </form>
            </div>

            <!-- /GLOBAL SEARCH -->


            <?= $content ?>



    </main>

    <!-- FOOTER -->

    <footer class="footer noprint">
        <div class="footer__pageholder" data-some-footer-tracking="">
            <nav aria-label="Bunntekst" class="footer__link-list">
                <a href="#" data-some-provider="jobbifinn">Jobbe i FINN</a>
                <a href="#" data-some-provider="bedriftskunde">Bli bedriftskunde</a>
                <a href="#" data-some-provider="admin">Admin for bedrifter</a>
                <a href="#" data-some-provider="omfinn">Om FINN.no</a>
                <a href="#" data-some-provider="personvern">Personvernerklæring</a>
                <a href="#" data-some-provider="innstillinger_personvern">Innstillinger for personvern</a>
                <a href="#" data-some-provider="cookie">Cookies</a>
                <a href="#" class="footer__link-list__help" data-some-provider="hjelp">Kundeservice</a>
            </nav>

            <nav class="footer__social">
                <a href="#" title="FINN på Facebook" target="_blank" rel="noopener" data-some-provider="facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <path fill="currentColor" fill-rule="evenodd"
                              d="M25.786 27H6.214C5.544 27 5 26.456 5 25.786V6.214C5 5.544 5.543 5 6.214 5h19.572C26.456 5 27 5.544 27 6.214v19.572c0 .67-.544 1.214-1.214 1.214zm-5.609-.002v-8.52h2.86l.428-3.32h-3.288v-2.12c0-.961.267-1.617 1.646-1.617h1.758V8.45a23.53 23.53 0 0 0-2.562-.13c-2.535 0-4.27 1.547-4.27 4.388v2.449h-2.867v3.32h2.867v8.52h3.428z"></path>
                    </svg>
                </a>
                <a href="#" title="FINN på Twitter" target="_blank" rel="noopener" data-some-provider="twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <path fill="currentColor" fill-rule="evenodd"
                              d="M12.225 25.818c8.679 0 13.428-7.242 13.428-13.511 0-.204 0-.408-.01-.612A9.648 9.648 0 0 0 28 9.232c-.847.38-1.758.63-2.715.75a4.773 4.773 0 0 0 2.08-2.63 9.353 9.353 0 0 1-3 1.148A4.697 4.697 0 0 0 20.922 7c-2.604 0-4.721 2.13-4.721 4.75 0 .371.046.732.12 1.084-3.921-.194-7.4-2.093-9.729-4.963a4.772 4.772 0 0 0-.635 2.389 4.77 4.77 0 0 0 2.099 3.954 4.751 4.751 0 0 1-2.136-.592v.064c0 2.297 1.63 4.223 3.783 4.659-.396.11-.81.166-1.242.166-.304 0-.599-.027-.884-.083a4.723 4.723 0 0 0 4.409 3.297 9.429 9.429 0 0 1-5.863 2.037c-.378 0-.755-.018-1.123-.065a13.364 13.364 0 0 0 7.225 2.121"></path>
                    </svg>

                </a>
                <a href="https://www.instagram.com/finn_no/" title="FINN på Instagram" target="_blank" rel="noopener" data-some-provider="instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <path fill="currentColor" fill-rule="evenodd"
                              d="M16 5c-2.987 0-3.362.013-4.535.066-1.171.054-1.97.24-2.67.512a5.392 5.392 0 0 0-1.949 1.268 5.392 5.392 0 0 0-1.269 1.949c-.271.7-.457 1.499-.51 2.67C5.012 12.638 5 13.013 5 16s.013 3.362.066 4.535c.054 1.171.24 1.97.511 2.67a5.392 5.392 0 0 0 1.27 1.949 5.392 5.392 0 0 0 1.948 1.269c.7.271 1.499.457 2.67.51 1.173.054 1.548.067 4.535.067s3.362-.013 4.535-.066c1.171-.054 1.97-.24 2.67-.511a5.392 5.392 0 0 0 1.949-1.27 5.391 5.391 0 0 0 1.268-1.948c.272-.7.458-1.499.512-2.67.053-1.173.066-1.548.066-4.535s-.013-3.362-.066-4.535c-.054-1.171-.24-1.97-.512-2.67a5.392 5.392 0 0 0-1.268-1.949 5.391 5.391 0 0 0-1.949-1.268c-.7-.272-1.499-.458-2.67-.512C19.362 5.013 18.987 5 16 5m0 1.982c2.937 0 3.285.011 4.445.064 1.072.049 1.655.228 2.042.379.514.2.88.438 1.265.823.385.385.624.751.823 1.265.15.387.33.97.379 2.042.053 1.16.064 1.508.064 4.445 0 2.937-.011 3.285-.064 4.445-.05 1.072-.228 1.655-.379 2.042-.2.514-.438.88-.823 1.265a3.408 3.408 0 0 1-1.265.823c-.387.15-.97.33-2.042.379-1.16.053-1.508.064-4.445.064-2.937 0-3.285-.011-4.445-.064-1.072-.049-1.655-.228-2.043-.379-.513-.2-.88-.438-1.264-.823a3.409 3.409 0 0 1-.823-1.265c-.15-.387-.33-.97-.379-2.042-.053-1.16-.064-1.508-.064-4.445 0-2.937.011-3.285.064-4.445.049-1.072.228-1.655.379-2.042.2-.514.438-.88.823-1.265a3.408 3.408 0 0 1 1.264-.823c.388-.15.97-.33 2.043-.379 1.16-.053 1.508-.064 4.445-.064m0 12.685a3.667 3.667 0 1 1 0-7.334 3.667 3.667 0 0 1 0 7.334m0-9.316a5.649 5.649 0 1 1 0 11.298 5.649 5.649 0 0 1 0-11.298zm7.192-.223a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0z"></path>
                    </svg>

                </a>
                <a href="https://www.youtube.com/user/finn" title="FINN på YouTube" target="_blank" rel="noopener" data-some-provider="youtube">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <path fill="currentColor" fill-rule="evenodd"
                              d="M15.749 8c-.994.003-4.796.031-7.451.23-.43.053-1.368.057-2.205.964-.66.69-.874 2.258-.874 2.258S5.017 13.14 5 14.898v2.198c.017 1.759.219 3.446.219 3.446s.214 1.568.874 2.258c.837.907 1.937.878 2.427.972 1.61.16 6.533.22 7.36.228h.41c1.059-.006 4.793-.04 7.411-.236.43-.053 1.368-.057 2.205-.964.66-.69.874-2.258.874-2.258S27 18.7 27 16.86v-1.726c0-1.842-.22-3.682-.22-3.682s-.214-1.568-.874-2.258c-.837-.907-1.775-.911-2.205-.964-2.656-.199-6.457-.227-7.452-.23h-.5zm-2.022 4.56l5.945 3.208-5.944 3.187-.001-6.395z"></path>
                    </svg>

                </a>
            </nav>

            <div class="footer__copyright">
                <p>Innholdet er beskyttet etter åndsverkloven. Regelmessig, systematisk eller kontinuerlig innhenting,
                    lagring, indeksering, distribusjon og all annen form for bruk av data fra FINN.no til andre enn rent
                    personlige formål tillates ikke uten eksplisitt, skriftlig tillatelse fra FINN.no.</p>
                <p>© 2019 bort.se</p>
            </div>
        </div>
    </footer>
    <!-- / FOOTER -->

</div>

</div>

</body>
</html>