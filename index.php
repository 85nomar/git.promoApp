<?php require('inc/layout.php');

$Layout->title = 'Sellingform';

$Layout->start(); ?>

<script>
    $(document).ready(function() {

        var share = $('.share-buttons.promo .share');

        share.each(function ShareButtons(){

            function PromoUrl(variant, itemID, context) {
                url = 'https://ricardo.sellaround.net/?app_data=%7B%22variant%22%3A%22'+variant+'%22%2C%22itemId%22%3A%22'+itemID+'%22%2C%22context%22%3A%22'+context+'%22%7D';
                return url;
            };

            try {
                var url_match = window.location.pathname.match(/an(\d+)/)[1];
            }catch (e) {}

            var data_id = $('.share-buttons.promo').data('itemid');
            var itemID =  url_match == undefined ? data_id : '';

            variant = $(this).attr('class').split(' ')[1];
            context = "std";

            $(this).attr('href', PromoUrl(variant, itemID, context));
            $(this).attr('data-fancybox-type','iframe');

            $(this).fancybox({
                width: '830',
                height: '1000'
            });

        });

    });
</script>

<section id="container" class="container confirmPage">
    <div class="wrap">
        <div class="span12 title-page-separate">
            <h1>Ihr Angebot wurde ergolgreich erfasst!</h1>
            <p>...und wird zum vordefinierten Zeitpunkt veröffentlicht</p>
        </div>
        <div class="boxed row">
            <div class="span6 boxed-gray">
                <div class="title">
                    <h4>Teilen Sie jetzt Ihre angebote mit ihren Freunden und steigern Sie Ihre Verkaufschancen.</h4>
                </div>
                <div class="share-buttons promo" data-itemid="700265754">
                    <ul class="inline">
                        <li><a class="share facebook" href="#"><i class="icon-facebook"></i><span>Teilen</span></a></li>
                        <li><a class="share twitter" href="#"><i class="icon-twitter"></i><span>Tweet</span></a></li>
                        <li><a class="share pinterest" href="#"><i class="icon-pinterest"></i><span>Pint it</span></a></li>
                        <li><a class="share embed" href=""><i class="icon-angle-left"></i><i class="icon-angle-right"></i><span>Einbinden</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="span6">
                <div class="title">
                    <h4>Was möchten Sie als nächstes tun?</h4>
                    <div>
                        <ul>
                            <li><a class="ric-iconed" href="#"><i class="icon-alt-sell"></i><span>Ein weiterer Angebot publizieren</span></a></li>
                            <li><a class="ric-iconed" href="#"><i class="icon-alt-myricardo"></i><span>Zu Meinen offenen Angeboten</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $Layout->end(); ?>