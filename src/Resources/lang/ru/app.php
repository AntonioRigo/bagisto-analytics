<?php

return [
    'admin' => [
        'config' => [
            'title' => 'Аналитика и отслеживание',
            'info' => 'Google Tag Manager, GA4 и Meta Pixel. Теги загружаются на всех страницах; событие покупки отправляется один раз на заказ.',
            'status' => 'Статус',
            'gtm-id' => 'Идентификатор Google Tag Manager',
            'gtm-id-info' => 'ID контейнера, напр. GTM-ABCD123. Оставьте пустым, если не используете Tag Manager.',
            'ga4-id' => 'Идентификатор GA4',
            'ga4-id-info' => 'Напр. G-ABCD123456. Указывайте, только если GA4 ещё НЕ настроен в Tag Manager.',
            'meta-pixel-id' => 'Идентификатор Meta Pixel',
            'meta-pixel-id-info' => 'Числовой ID пикселя из Meta Events Manager.',
            'track-purchase' => 'Отслеживать покупки',
            'track-purchase-info' => 'Отправляет событие покупки с суммой и товарами заказа.',
        ],
    ],
];
