<?php

return [
    'admin' => [
        'config' => [
            'title' => 'アナリティクスとトラッキング',
            'info' => 'Google タグ マネージャー、GA4、Meta ピクセル。タグは全ページで読み込まれ、購入イベントは注文ごとに1回送信されます。',
            'status' => 'ステータス',
            'gtm-id' => 'Google タグ マネージャー ID',
            'gtm-id-info' => 'コンテナ ID（例: GTM-ABCD123）。タグ マネージャーを使わない場合は空欄に。',
            'ga4-id' => 'GA4 測定 ID',
            'ga4-id-info' => '例: G-ABCD123456。GA4 がタグ マネージャー内に未設定の場合のみ入力してください。',
            'meta-pixel-id' => 'Meta ピクセル ID',
            'meta-pixel-id-info' => 'Meta イベントマネージャの数値ピクセル ID。',
            'track-purchase' => '購入をトラッキング',
            'track-purchase-info' => '注文合計と商品を含む購入イベントを送信します。',
        ],
    ],
];
