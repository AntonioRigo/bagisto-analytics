<?php

return [
    'admin' => [
        'config' => [
            'title' => 'Analítica y seguimiento',
            'info' => 'Google Tag Manager, GA4 y Meta Pixel. Las etiquetas cargan en toda la tienda; el evento de compra se envía una vez por pedido en la página de confirmación.',
            'status' => 'Estado',
            'gtm-id' => 'ID de Google Tag Manager',
            'gtm-id-info' => 'ID del contenedor, ej. GTM-ABCD123. Déjalo vacío si no usas Tag Manager.',
            'ga4-id' => 'ID de medición GA4',
            'ga4-id-info' => 'Ej. G-ABCD123456. Configúralo solo si GA4 NO está ya dentro de Tag Manager, o las compras se contarán dos veces.',
            'meta-pixel-id' => 'ID de Meta Pixel',
            'meta-pixel-id-info' => 'El ID numérico del píxel en el Administrador de eventos de Meta.',
            'track-purchase' => 'Registrar compras',
            'track-purchase-info' => 'Envía el evento de compra con el total y los productos del pedido en la página de confirmación.',
        ],
    ],
];
