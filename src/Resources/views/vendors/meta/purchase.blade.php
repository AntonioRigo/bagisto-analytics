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
