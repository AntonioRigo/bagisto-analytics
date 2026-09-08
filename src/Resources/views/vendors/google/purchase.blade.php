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
