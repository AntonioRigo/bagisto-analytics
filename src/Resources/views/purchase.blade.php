@inject('analytics', 'Tapstar\Analytics\Helpers\Tracker')

@if ($analytics->tracksPurchase() && isset($order))
    @php
        $purchase = $analytics->purchasePayload($order);
        $gtmId = $analytics->id('gtm_id');
        $ga4Id = $analytics->id('ga4_id');
        $metaPixelId = $analytics->id('meta_pixel_id');
    @endphp

    <script>
        (function () {
            var purchase = {!! $analytics->json($purchase) !!};

            /**
             * The success page survives a refresh and a back-button return, and
             * either would bill the same order to the ad platforms twice. One
             * marker per transaction keeps the conversion count honest.
             */
            var marker = 'analytics_purchase_' + purchase.transaction_id;

            try {
                if (window.sessionStorage && sessionStorage.getItem(marker)) {
                    return;
                }

                window.sessionStorage && sessionStorage.setItem(marker, '1');
            } catch (e) {
                /** Private mode and blocked storage still get one event per page load. */
            }

            @include('analytics::vendors.google.purchase')

            @include('analytics::vendors.meta.purchase')
        })();
    </script>
@endif
