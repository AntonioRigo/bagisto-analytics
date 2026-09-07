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
            var marker = 'tapstar_purchase_' + purchase.transaction_id;

            try {
                if (window.sessionStorage && sessionStorage.getItem(marker)) {
                    return;
                }

                window.sessionStorage && sessionStorage.setItem(marker, '1');
            } catch (e) {
                /** Private mode and blocked storage still get one event per page load. */
            }

            @if ($gtmId)
                window.dataLayer = window.dataLayer || [];

                window.dataLayer.push({ ecommerce: null });

                window.dataLayer.push({
                    event: 'purchase',
                    ecommerce: purchase
                });
            @endif

            @if ($ga4Id)
                if (typeof gtag === 'function') {
                    gtag('event', 'purchase', purchase);
                }
            @endif

            @if ($metaPixelId)
                if (typeof fbq === 'function') {
                    fbq('track', 'Purchase', {
                        value: purchase.value,
                        currency: purchase.currency,
                        content_type: 'product',
                        contents: purchase.items.map(function (item) {
                            return {
                                id: item.item_id,
                                quantity: item.quantity,
                                item_price: item.price
                            };
                        })
                    }, { eventID: 'purchase.' + purchase.transaction_id });
                }
            @endif
        })();
    </script>
@endif
