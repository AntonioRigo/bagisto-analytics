<?php

return [
    'admin' => [
        'config' => [
            'title' => 'Analyse en tracking',
            'info' => 'Google Tag Manager, GA4 en Meta Pixel. Tags laden op elke winkelpagina; het aankoopevenement wordt één keer per bestelling verzonden.',
            'status' => 'Status',
            'gtm-id' => 'Google Tag Manager-ID',
            'gtm-id-info' => 'Container-ID, bijv. GTM-ABCD123. Laat leeg als je Tag Manager niet gebruikt.',
            'ga4-id' => 'GA4-meet-ID',
            'ga4-id-info' => 'Bijv. G-ABCD123456. Alleen instellen als GA4 nog NIET in Tag Manager staat, anders worden aankopen dubbel geteld.',
            'meta-pixel-id' => 'Meta Pixel-ID',
            'meta-pixel-id-info' => 'De numerieke pixel-ID uit Meta Gebeurtenisbeheer.',
            'track-purchase' => 'Aankopen bijhouden',
            'track-purchase-info' => 'Verstuurt het aankoopevenement met ordertotaal en artikelen.',
        ],
    ],
];
