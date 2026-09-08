@inject('analytics', 'Tapstar\Analytics\Helpers\Tracker')

@php
    $gtmId = $analytics->id('gtm_id');
    $ga4Id = $analytics->id('ga4_id');
    $metaPixelId = $analytics->id('meta_pixel_id');
@endphp

@include('analytics::vendors.google.head')
@include('analytics::vendors.meta.head')
