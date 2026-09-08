@inject('analytics', 'Tapstar\Analytics\Helpers\Tracker')

@php
    $gtmId = $analytics->id('gtm_id');
    $metaPixelId = $analytics->id('meta_pixel_id');
@endphp

@include('analytics::vendors.google.body')
@include('analytics::vendors.meta.body')
