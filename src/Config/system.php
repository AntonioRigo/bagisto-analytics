<?php

return [
    [
        'key'  => 'general.analytics',
        'name' => 'analytics::app.admin.config.title',
        'info' => 'analytics::app.admin.config.info',
        'sort' => 6,
        'fields' => [
            [
                'name'          => 'active',
                'title'         => 'analytics::app.admin.config.status',
                'type'          => 'boolean',
                'channel_based' => true,
                'locale_based'  => false,
            ], [
                'name'          => 'gtm_id',
                'title'         => 'analytics::app.admin.config.gtm-id',
                'info'          => 'analytics::app.admin.config.gtm-id-info',
                'type'          => 'text',
                'depends'       => 'active:1',
                'validation'    => 'nullable|regex:/^GTM-[A-Za-z0-9]{4,12}$/',
                'channel_based' => true,
                'locale_based'  => false,
            ], [
                'name'          => 'ga4_id',
                'title'         => 'analytics::app.admin.config.ga4-id',
                'info'          => 'analytics::app.admin.config.ga4-id-info',
                'type'          => 'text',
                'depends'       => 'active:1',
                'validation'    => 'nullable|regex:/^G-[A-Za-z0-9]{6,14}$/',
                'channel_based' => true,
                'locale_based'  => false,
            ], [
                'name'          => 'meta_pixel_id',
                'title'         => 'analytics::app.admin.config.meta-pixel-id',
                'info'          => 'analytics::app.admin.config.meta-pixel-id-info',
                'type'          => 'text',
                'depends'       => 'active:1',
                'validation'    => 'nullable|regex:/^[0-9]{10,20}$/',
                'channel_based' => true,
                'locale_based'  => false,
            ], [
                'name'          => 'track_purchase',
                'title'         => 'analytics::app.admin.config.track-purchase',
                'info'          => 'analytics::app.admin.config.track-purchase-info',
                'type'          => 'boolean',
                'depends'       => 'active:1',
                'channel_based' => true,
                'locale_based'  => false,
            ],
        ],
    ],
];
