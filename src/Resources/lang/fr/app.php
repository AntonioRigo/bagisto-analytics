<?php

return [
    'admin' => [
        'config' => [
            'title' => 'Analytique et suivi',
            'info' => 'Google Tag Manager, GA4 et Meta Pixel. Les balises se chargent sur toute la boutique ; l’événement d’achat est envoyé une fois par commande.',
            'status' => 'Statut',
            'gtm-id' => 'ID Google Tag Manager',
            'gtm-id-info' => 'ID du conteneur, ex. GTM-ABCD123. Laissez vide si vous n’utilisez pas Tag Manager.',
            'ga4-id' => 'ID de mesure GA4',
            'ga4-id-info' => 'Ex. G-ABCD123456. À définir uniquement si GA4 n’est PAS déjà dans Tag Manager, sinon les achats seront comptés deux fois.',
            'meta-pixel-id' => 'ID Meta Pixel',
            'meta-pixel-id-info' => 'L’ID numérique du pixel dans le Gestionnaire d’événements Meta.',
            'track-purchase' => 'Suivre les achats',
            'track-purchase-info' => 'Envoie l’événement d’achat avec le total et les articles de la commande.',
        ],
    ],
];
