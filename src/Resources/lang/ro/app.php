<?php

return [
    'admin' => [
        'config' => [
            'title' => 'Analiză și urmărire',
            'info' => 'Google Tag Manager, GA4 și Meta Pixel. Etichetele se încarcă în tot magazinul; evenimentul de achiziție se trimite o dată per comandă.',
            'status' => 'Stare',
            'gtm-id' => 'ID Google Tag Manager',
            'gtm-id-info' => 'ID container, ex. GTM-ABCD123. Lasă gol dacă nu folosești Tag Manager.',
            'ga4-id' => 'ID de măsurare GA4',
            'ga4-id-info' => 'Ex. G-ABCD123456. Setează doar dacă GA4 NU este deja în Tag Manager.',
            'meta-pixel-id' => 'ID Meta Pixel',
            'meta-pixel-id-info' => 'ID-ul numeric al pixelului din Managerul de evenimente Meta.',
            'track-purchase' => 'Urmărește achizițiile',
            'track-purchase-info' => 'Trimite evenimentul de achiziție cu totalul și produsele comenzii.',
        ],
    ],
];
