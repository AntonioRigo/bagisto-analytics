<?php

return [
    'admin' => [
        'config' => [
            'title' => 'Аналітика та відстеження',
            'info' => 'Google Tag Manager, GA4 і Meta Pixel. Теги завантажуються на всіх сторінках; подія купівлі надсилається раз на замовлення.',
            'settings-title' => 'Settings',
            'settings-info' => 'The identifiers for each service, and what the store reports.',
            'status' => 'Статус',
            'gtm-id' => 'Ідентифікатор Google Tag Manager',
            'gtm-id-info' => 'ID контейнера, напр. GTM-ABCD123. Залиште порожнім, якщо не використовуєте Tag Manager.',
            'ga4-id' => 'Ідентифікатор GA4',
            'ga4-id-info' => 'Напр. G-ABCD123456. Вказуйте, лише якщо GA4 ще НЕ налаштовано в Tag Manager.',
            'meta-pixel-id' => 'Ідентифікатор Meta Pixel',
            'meta-pixel-id-info' => 'Числовий ID пікселя з Meta Events Manager.',
            'track-purchase' => 'Відстежувати купівлі',
            'track-purchase-info' => 'Надсилає подію купівлі із сумою та товарами замовлення.',
        ],
    ],
];
