<?

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;

?>
<? $this->params['breadcrumbs'][] = ['template' => "<li class='breadcrumb_item'>{link}</li>", 'label' => $compcatname->title, 'url' => ['/category/' . $compcatname->id],]; ?>
<? $this->params['breadcrumbs'][] = ['template' => "<li class='breadcrumb_item'>{link}</li>", 'label' => $model->title]; ?>

<div class="container">
    <div class="ad_main">
        <div class="panel">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>

        <div class="ad_images">
            <img src="<?= '/admin' . \Yii::$app->imagemanager->getImagePath($model->image, '200', '200', 'inset'); ?>"
                 class="img-format__img" alt="">
        </div>

        <div class="u-toolbar u-no-print u-ml16">
            <div class="u-overflow-hidden" style="display: flex;">
                <div class="u-mt4" data-controller="favoriteHeartReact"
                     data-base-resource-url="https://www.finn.no/favorittliste/podium-resource/favorittlistePodlet/favorite-api"
                     data-ad-id="152159801" data-render-as-button="true">
                    <div class="u-display-inline-block"><span style="display: flex; flex-direction: column;"><button
                                    class="button button--has-icon u-ph16" title="Lagre som favoritt"
                                    aria-label="Hjertemerke" aria-haspopup="dialog" aria-pressed="false"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32"
                                        class="u-mr4"><path fill="currentColor" fill-rule="evenodd"
                                                            d="M11.683 6.006c1.432 0 2.865.71 4.309 1.929C17.394 6.74 18.877 6 20.278 6c1.806 0 3.34.65 4.679 1.96a6.738 6.738 0 0 1 .006 9.66 6386.518 6386.518 0 0 0-5.793 5.928l-1.093 1.118a3.875 3.875 0 0 0-.135.142l-.196.215c-.607.656-1.04.977-1.753.977-.733-.017-1.158-.334-1.754-.977l-.197-.215a4.81 4.81 0 0 0-.164-.172l-.295-.31-.779-.819c-.805-.847-1.611-1.693-2.365-2.484-1.896-1.989-3.145-3.29-3.397-3.537a6.74 6.74 0 0 1 0-9.666c1.26-1.233 2.816-1.814 4.64-1.814zM15.993 24l.075-.082.195-.218c.09-.1.158-.174.211-.227l1.114-1.166a64484.614 64484.614 0 0 1 6.037-6.313 4.662 4.662 0 0 0 0-6.613C22.677 8.433 21.678 8 20.434 8c-.958 0-2.317.818-3.597 2.121l-.824.839-.836-.825c-1.373-1.354-2.661-2.129-3.651-2.129-1.298 0-2.313.387-3.15 1.226a4.662 4.662 0 0 0 0 6.613c.292.294 1.567 1.652 3.559 3.788a2936.768 2936.768 0 0 1 3.28 3.523l.276.298c.071.071.14.145.23.245l.195.219.076.082z"></path></svg>Legg til favoritt</button></span>
                    </div>
                </div>

                <button class="button button--has-icon button--pill icon icon--mail u-pa8" title="Tips en venn"
                        aria-label="Tips en venn" data-controller="trackShareTipAFriend toggleContent"
                        data-select="data-tip-a-friend-form"></button>


                <a class="button button--has-icon button--pill icon icon--facebook" title="Del på Facebook"
                   aria-label="Del på Facebook"
                   href="https://www.facebook.com/sharer/sharer.php?u=https://www.finn.no/152159801?taid%3DShare_ad_facebook"
                   data-controller="trackShareOnFacebook" rel="external nofollow" target="_blank"></a>

                <a class="button button--has-icon button--pill icon icon--twitter" title="Del på Twitter"
                   aria-label="Del på Twitter"
                   href="https://twitter.com/intent/tweet?hashtags=VolkswagenTouran&amp;related=FINN_no&amp;via=FINN_no&amp;url=https://www.finn.no/152159801?taid%3DShare_ad_twitter&amp;text=Volkswagen%20Touran%20TOURAN%201.9-105%20D%202005,%20258%C2%A0000%20km,%20kr%2010%C2%A0618,-"
                   data-controller="trackShareOnTwitter" rel="external nofollow" target="_blank"></a>
            </div>
        </div>


        <h1 class="ad_images"><?= $model->title; ?></h1>
        <p><?= $model->content; ?></p>
        <p><?= $userinfo = $model->user; ?></p>
        <p><? //print_r($userinfo); ?></p>


        <div>

            <p><?= $model->description; ?></p>
            <?php $form = ActiveForm::begin(['action' => '/cart/addAjax/' . $model->id, 'options' => ['class' => 'form-to-cart']]); ?>
            <?= Html::submitButton('В корзину'); ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>


    <div class="ad_sidebar">
        <div class="panel">
            <div data-controller="showPhoneNumber userProfileWidget">
                <dl class="definition-list">
                    <div class="trust-identity-container-spaden">
                        <div data-trust-identity-widget=""
                             data-finn-trust-identity-widget-user-id="sdrn:finn:user:874685534">
                            <div class="scc_tr-identity">
                                <div role="heading" aria-level="2" class="scc_tr-screenreader-visible-only">
                                    Profilinformasjon om selgeren
                                </div>

                                <a href="/user/profile/profile.html?id=874685534&amp;search=car/used"
                                   class="scc_tr-identity-avatar" aria-hidden="true">
                                    <img class="scc_tr-identity-avatar_img"
                                         src="https://images.finncdn.no/dynamic/220x220c/2019/7/profilbilde/08/4/874/685/534_276133828.jpg"
                                         alt="Profilbilde for Amin">
                                </a>

                                <div class="scc_tr-identity-about">
                                    <div class="scc_tr-identity-username">
                                        <a href="/user/profile/profile.html?id=874685534&amp;search=car/used"
                                           class="scc_tr-link">
                                            <?= $userinfo['0']['username']; ?>
                                        </a>
                                        <a href="https://www.finn.no/eid/verification.html">
                                            <div class="scc_tr-identity-verified-user"
                                                 aria-label="Brukeren er verifisert gjennom Bank ID" role="img"></div>
                                        </a>
                                    </div>

                                    <div class="scc_tr-identity-age">På FINN siden 2010</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <ul class="list">
                        <li class="u-mt16">
                            <a class="button button--cta u-size1of1"
                               href="https://www.finn.no/authorizemessaging.html?ci=0&amp;canonicalUrl=https%3A%2F%2Fwww.finn.no%2Fcar%2Fused%2Fad.html%3Ffinnkode%3D152159801&amp;finnkode=152159801"
                               rel="nofollow" data-controller="trackSendMessage">Send melding</a>
                        </li>
                    </ul>
                    <p data-trust-communication-widget="" class="mvn u-mt8">
                    <div class="scc_tr-communication">
                        Svarer vanligvis innen ti minutter
                    </div>
                    </p>
                    <p class="private-profile-phone-widget">
                        <a data-hidden-number="" data-phone-type="mobile" data-hash="4bbf626e5ff6fa5f7f8a33e66de2ba8f"
                           data-controller="trackShowPhoneNumberClick" href="#" role="button">Vis mobilnummer</a>
                    </p>
                </dl>
                <div data-showphonenumber-result=""></div>
            </div>
            <p>
                <a class="button button--destructive u-size1of1"
                   href="/trygg-handel/bil?finnkode=152159801&amp;track=ad_page">Opprett digital kjøpekontrakt</a>
            </p>
            <ul class="list list--bullets">
                <li>Ferdig utfylt kontrakt</li>
                <li>1 måned bilforsikring til kr 0,-</li>
                <li>Digital signering</li>
                <li>Godkjent av Forbrukerrådet</li>
            </ul>
            <p></p>
            <ul class="list u-mt16">
            </ul>
        </div>
        <section class="panel">
            <h2 class="u-t3">Prestebråtveien 21, 3055 Krokstadelva</h2>
            <div class="u-text-centered" style="max-width: 295px;margin:auto">
                <a href="https://kart.finn.no/?finnkode=152159801&amp;lat=59.760506&amp;lng=10.015868&amp;mapType=finnvector&amp;showPin=1&amp;bl=1"
                   rel="external" class="u-display-block" data-controller="trackMap">
                    <img src="https://maptiles.finncdn.no/staticmap?lat=59.760506&amp;lng=10.015868&amp;zoom=14&amp;size=400x300&amp;maptype=norwayVector&amp;showPin=true"
                         alt="Kart" style="max-width: 100%">
                </a>
            </div>
            <p class="u-mt4">
                <a href="https://kart.finn.no/?finnkode=152159801&amp;lat=59.760506&amp;lng=10.015868&amp;mapType=finnvector&amp;showPin=1&amp;bl=1"
                   rel="external" data-controller="trackMap" class="u-mr8">Stort kart</a>
                <a href="https://kart.finn.no/?finnkode=152159801&amp;lat=59.760506&amp;lng=10.015868&amp;mapType=finnhybrid&amp;showPin=1&amp;bl=1"
                   rel="external" data-controller="trackMap" class="u-mr8">Hybridkart</a>
                <a href="https://kart.finn.no/?finnkode=152159801&amp;lat=59.760506&amp;lng=10.015868&amp;mapType=norortho&amp;showPin=1&amp;bl=1"
                   rel="external" data-controller="trackMap" class="u-mr8">Flyfoto</a>
            </p>
        </section>
        <div id="contentboard" class="panel" aria-hidden="true" data-astbanner-name="contentboard"
             data-controller="appNexusShowBanner" data-inscreen-threshold="0" data-troika="" data-banner-root="">
        </div>

        <div class="panel u-hide-gt768">
            <p>
                <a href="/reportad.html?finnkode=152159801" class="u-strong" data-controller="trackReportAdClick"
                   rel="external">Rapporter annonse</a>
            </p>
            <dl class="definition-list">
                <dt>FINN-kode:</dt>
                <dd><span data-adid="152159801">152159801</span></dd>
            </dl>
            <p class="u-d1">
                Annonsen kan være mangelfull. Fullstendig salgsinformasjon og opplysninger iht. opplysningsplikt kan fås
                direkte fra selger.
            </p>
        </div>
    </div>
</div>
