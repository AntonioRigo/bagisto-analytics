<?php

return [
    'admin' => [
        'config' => [
            'title' => 'Analitik dan pelacakan',
            'info' => 'Google Tag Manager, GA4, dan Meta Pixel. Tag dimuat di semua halaman toko; event pembelian dikirim sekali per pesanan.',
            'settings-title' => 'Settings',
            'settings-info' => 'The identifiers for each service, and what the store reports.',
            'status' => 'Status',
            'gtm-id' => 'ID Google Tag Manager',
            'gtm-id-info' => 'ID kontainer, mis. GTM-ABCD123. Kosongkan jika tidak memakai Tag Manager.',
            'ga4-id' => 'ID pengukuran GA4',
            'ga4-id-info' => 'Mis. G-ABCD123456. Isi hanya jika GA4 BELUM ada di Tag Manager.',
            'meta-pixel-id' => 'ID Meta Pixel',
            'meta-pixel-id-info' => 'ID piksel numerik dari Meta Events Manager.',
            'track-purchase' => 'Lacak pembelian',
            'track-purchase-info' => 'Mengirim event pembelian dengan total dan item pesanan.',
        ],
    ],
];
