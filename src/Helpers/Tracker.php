<?php

namespace Tapstar\Analytics\Helpers;

class Tracker
{
    /**
     * Every id is validated against the shape its vendor issues before it
     * reaches a script tag. A config field an admin can type into is
     * untrusted input, and these values are interpolated into JavaScript.
     */
    const PATTERNS = [
        'gtm_id'        => '/^GTM-[A-Z0-9]{4,12}$/i',
        'ga4_id'        => '/^G-[A-Z0-9]{6,14}$/i',
        'meta_pixel_id' => '/^[0-9]{10,20}$/',
    ];

    /**
     * Whether tracking is switched on for the current channel.
     */
    public function isEnabled(): bool
    {
        return (bool) core()->getConfigData('general.analytics.settings.active');
    }

    /**
     * A validated id, or null when unset or malformed.
     */
    public function id(string $field): ?string
    {
        if (! $this->isEnabled()) {
            return null;
        }

        $value = trim((string) core()->getConfigData('general.analytics.settings.'.$field));

        if ($value === '') {
            return null;
        }

        return preg_match(self::PATTERNS[$field], $value) ? $value : null;
    }

    /**
     * Whether any tag is configured at all.
     */
    public function hasAnyTag(): bool
    {
        return (bool) ($this->id('gtm_id') || $this->id('ga4_id') || $this->id('meta_pixel_id'));
    }

    /**
     * Whether the purchase event should be emitted on the success page.
     */
    public function tracksPurchase(): bool
    {
        return $this->hasAnyTag()
            && (bool) core()->getConfigData('general.analytics.settings.track_purchase');
    }

    /**
     * The order as the analytics vendors want to receive it.
     *
     * @param  \Webkul\Sales\Contracts\Order  $order
     */
    public function purchasePayload($order): array
    {
        $items = [];

        foreach ($order->items as $item) {
            $items[] = [
                'item_id'   => (string) ($item->sku ?? $item->product_id),
                'item_name' => (string) $item->name,
                'price'     => round((float) $item->price, 2),
                'quantity'  => (int) $item->qty_ordered,
            ];
        }

        return [
            'transaction_id' => (string) $order->increment_id,
            'value'          => round((float) $order->grand_total, 2),
            'currency'       => (string) ($order->order_currency_code ?: core()->getBaseCurrencyCode()),
            'tax'            => round((float) $order->tax_amount, 2),
            'shipping'       => round((float) $order->shipping_amount, 2),
            'items'          => $items,
        ];
    }

    /**
     * JSON safe to inline inside a script tag.
     */
    public function json(array $payload): string
    {
        return json_encode(
            $payload,
            JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE
        );
    }
}
