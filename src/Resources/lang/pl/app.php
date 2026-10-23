<?php

return [
    'admin' => [
        'config' => [
            'title' => 'Analityka i śledzenie',
            'info' => 'Google Tag Manager, GA4 i Meta Pixel. Tagi ładują się w całym sklepie; zdarzenie zakupu wysyłane jest raz na zamówienie.',
            'settings-title' => 'Settings',
            'settings-info' => 'The identifiers for each service, and what the store reports.',
            'status' => 'Status',
            'gtm-id' => 'Identyfikator Google Tag Manager',
            'gtm-id-info' => 'ID kontenera, np. GTM-ABCD123. Zostaw puste, jeśli nie używasz Tag Managera.',
            'ga4-id' => 'Identyfikator GA4',
            'ga4-id-info' => 'Np. G-ABCD123456. Ustaw tylko, jeśli GA4 NIE jest już w Tag Managerze.',
            'meta-pixel-id' => 'Identyfikator Meta Pixel',
            'meta-pixel-id-info' => 'Numeryczny identyfikator piksela z Menedżera zdarzeń Meta.',
            'track-purchase' => 'Śledź zakupy',
            'track-purchase-info' => 'Wysyła zdarzenie zakupu z sumą i pozycjami zamówienia.',
        ],
    ],
];
