<?php

return [
    'admin' => [
        'config' => [
            'title' => '分析与跟踪',
            'info' => 'Google 跟踪代码管理器、GA4 和 Meta Pixel。代码在所有店铺页面加载；购买事件每个订单发送一次。',
            'settings-title' => 'Settings',
            'settings-info' => 'The identifiers for each service, and what the store reports.',
            'status' => '状态',
            'gtm-id' => 'Google 跟踪代码管理器 ID',
            'gtm-id-info' => '容器 ID，例如 GTM-ABCD123。若不使用跟踪代码管理器请留空。',
            'ga4-id' => 'GA4 衡量 ID',
            'ga4-id-info' => '例如 G-ABCD123456。仅当 GA4 尚未配置在跟踪代码管理器中时才填写。',
            'meta-pixel-id' => 'Meta Pixel ID',
            'meta-pixel-id-info' => '来自 Meta 事件管理工具的数字像素 ID。',
            'track-purchase' => '跟踪购买',
            'track-purchase-info' => '在确认页发送含订单金额与商品的购买事件。',
        ],
    ],
];
