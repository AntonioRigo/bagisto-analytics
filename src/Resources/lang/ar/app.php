<?php

return [
    'admin' => [
        'config' => [
            'title' => 'التحليلات والتتبع',
            'info' => 'Google Tag Manager وGA4 وMeta Pixel. تُحمَّل الوسوم في كل صفحات المتجر، ويُرسَل حدث الشراء مرة واحدة لكل طلب.',
            'settings-title' => 'Settings',
            'settings-info' => 'The identifiers for each service, and what the store reports.',
            'status' => 'الحالة',
            'gtm-id' => 'معرّف Google Tag Manager',
            'gtm-id-info' => 'معرّف الحاوية، مثل GTM-ABCD123. اتركه فارغًا إن لم تستخدم Tag Manager.',
            'ga4-id' => 'معرّف قياس GA4',
            'ga4-id-info' => 'مثل G-ABCD123456. اضبطه فقط إذا لم يكن GA4 مُعدًّا داخل Tag Manager.',
            'meta-pixel-id' => 'معرّف Meta Pixel',
            'meta-pixel-id-info' => 'المعرّف الرقمي للبكسل من مدير أحداث Meta.',
            'track-purchase' => 'تتبع عمليات الشراء',
            'track-purchase-info' => 'يرسل حدث الشراء مع إجمالي الطلب ومنتجاته.',
        ],
    ],
];
