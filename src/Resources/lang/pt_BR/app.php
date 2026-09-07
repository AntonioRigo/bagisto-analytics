<?php

return [
    'admin' => [
        'config' => [
            'title' => 'Análise e rastreamento',
            'info' => 'Google Tag Manager, GA4 e Meta Pixel. As tags carregam em toda a loja; o evento de compra é enviado uma vez por pedido.',
            'status' => 'Status',
            'gtm-id' => 'ID do Google Tag Manager',
            'gtm-id-info' => 'ID do contêiner, ex. GTM-ABCD123. Deixe vazio se não usar o Tag Manager.',
            'ga4-id' => 'ID de medição GA4',
            'ga4-id-info' => 'Ex. G-ABCD123456. Defina apenas se o GA4 NÃO estiver no Tag Manager, ou as compras serão contadas duas vezes.',
            'meta-pixel-id' => 'ID do Meta Pixel',
            'meta-pixel-id-info' => 'O ID numérico do pixel no Gerenciador de Eventos da Meta.',
            'track-purchase' => 'Rastrear compras',
            'track-purchase-info' => 'Envia o evento de compra com o total e os itens do pedido.',
        ],
    ],
];
