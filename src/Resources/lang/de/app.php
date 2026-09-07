<?php

return [
    'admin' => [
        'config' => [
            'title' => 'Analyse und Tracking',
            'info' => 'Google Tag Manager, GA4 und Meta Pixel. Tags laden im gesamten Shop; das Kaufereignis wird einmal pro Bestellung gesendet.',
            'status' => 'Status',
            'gtm-id' => 'Google-Tag-Manager-ID',
            'gtm-id-info' => 'Container-ID, z. B. GTM-ABCD123. Leer lassen, wenn Sie den Tag Manager nicht nutzen.',
            'ga4-id' => 'GA4-Mess-ID',
            'ga4-id-info' => 'z. B. G-ABCD123456. Nur setzen, wenn GA4 NICHT bereits im Tag Manager konfiguriert ist, sonst werden Käufe doppelt gezählt.',
            'meta-pixel-id' => 'Meta-Pixel-ID',
            'meta-pixel-id-info' => 'Die numerische Pixel-ID aus dem Meta-Ereignismanager.',
            'track-purchase' => 'Käufe erfassen',
            'track-purchase-info' => 'Sendet das Kaufereignis mit Bestellsumme und Artikeln.',
        ],
    ],
];
