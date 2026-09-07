<?php

return [
    'admin' => [
        'config' => [
            'title' => 'Analítica i seguiment',
            'info' => 'Google Tag Manager, GA4 i Meta Pixel. Les etiquetes es carreguen a tota la botiga; l’esdeveniment de compra s’envia un cop per comanda.',
            'status' => 'Estat',
            'gtm-id' => 'ID de Google Tag Manager',
            'gtm-id-info' => 'ID del contenidor, ex. GTM-ABCD123. Deixa-ho buit si no fas servir Tag Manager.',
            'ga4-id' => 'ID de mesurament GA4',
            'ga4-id-info' => 'Ex. G-ABCD123456. Configura-ho només si GA4 NO és ja dins de Tag Manager.',
            'meta-pixel-id' => 'ID de Meta Pixel',
            'meta-pixel-id-info' => 'L’ID numèric del píxel al Gestor d’esdeveniments de Meta.',
            'track-purchase' => 'Registra compres',
            'track-purchase-info' => 'Envia l’esdeveniment de compra amb el total i els articles.',
        ],
    ],
];
