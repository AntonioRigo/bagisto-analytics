<?php

return [
    'admin' => [
        'config' => [
            'title' => 'Analytics & Tracking',
            'info' => 'Google Tag Manager, GA4 and Meta Pixel. Tags load on every storefront page; the purchase event fires once per order on the success page.',
            'settings-title' => 'Settings',
            'settings-info' => 'The identifiers for each service, and what the store reports.',
            'status' => 'Status',
            'gtm-id' => 'Google Tag Manager ID',
            'gtm-id-info' => 'Container ID, e.g. GTM-ABCD123. Leave empty if you do not use Tag Manager.',
            'ga4-id' => 'GA4 Measurement ID',
            'ga4-id-info' => 'e.g. G-ABCD123456. Only set this when GA4 is NOT already configured inside Tag Manager, or purchases will be counted twice.',
            'meta-pixel-id' => 'Meta Pixel ID',
            'meta-pixel-id-info' => 'The numeric pixel ID from Meta Events Manager.',
            'track-purchase' => 'Track purchases',
            'track-purchase-info' => 'Send the purchase event with order total and items on the success page.',
        ],
    ],
];
