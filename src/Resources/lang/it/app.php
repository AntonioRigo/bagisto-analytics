<?php

return [
    'admin' => [
        'config' => [
            'title' => 'Analisi e tracciamento',
            'info' => 'Google Tag Manager, GA4 e Meta Pixel. I tag si caricano su tutto il negozio; l’evento di acquisto viene inviato una volta per ordine.',
            'status' => 'Stato',
            'gtm-id' => 'ID Google Tag Manager',
            'gtm-id-info' => 'ID del contenitore, es. GTM-ABCD123. Lascia vuoto se non usi Tag Manager.',
            'ga4-id' => 'ID di misurazione GA4',
            'ga4-id-info' => 'Es. G-ABCD123456. Impostalo solo se GA4 NON è già in Tag Manager, altrimenti gli acquisti saranno contati due volte.',
            'meta-pixel-id' => 'ID Meta Pixel',
            'meta-pixel-id-info' => 'L’ID numerico del pixel in Gestione eventi di Meta.',
            'track-purchase' => 'Traccia gli acquisti',
            'track-purchase-info' => 'Invia l’evento di acquisto con totale e articoli dell’ordine.',
        ],
    ],
];
