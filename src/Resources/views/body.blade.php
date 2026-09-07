@inject('analytics', 'Tapstar\Analytics\Helpers\Tracker')

@php
    $gtmId = $analytics->id('gtm_id');
    $metaPixelId = $analytics->id('meta_pixel_id');
@endphp

@if ($gtmId)
    <noscript>
        <iframe
            src="https://www.googletagmanager.com/ns.html?id={{ $gtmId }}"
            height="0"
            width="0"
            style="display:none;visibility:hidden"
        ></iframe>
    </noscript>
@endif

@if ($metaPixelId)
    <noscript>
        <img
            height="1"
            width="1"
            style="display:none"
            alt=""
            src="https://www.facebook.com/tr?id={{ $metaPixelId }}&ev=PageView&noscript=1"
        >
    </noscript>
@endif
