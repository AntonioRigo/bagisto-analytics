# Analytics for Bagisto

Google Tag Manager, GA4 and Meta Pixel for [Bagisto](https://bagisto.com) 2.x —
with the part that usually gets skipped: a **server-rendered purchase event**
carrying real order data, deduplicated so a page refresh cannot bill the same
order twice.

Bagisto ships no analytics support of its own. Its generic custom-JavaScript
field renders inside `<body>`, which is too late for a tag manager and carries
no ecommerce data, so a pixel installed that way can measure pageviews but
never optimise on conversions.

## Why one package instead of `bagisto-meta` + `bagisto-google`

Because the vendors are the small part. Of `Tracker.php`'s 99 lines, four are
vendor-specific; the rest — reading config, validating ids, building the order
payload, JSON-encoding it safely — is shared, as are the admin config section,
the three layout hooks, the refresh-dedupe and 22 locale files.

Splitting by vendor would mean duplicating that in every package, or publishing
a third "core" package for two thin consumers to depend on. Neither is worth it
at this size. Nothing is lost by bundling: a store that configures only a Meta
pixel emits **zero** Google markup, because each vendor renders only when its
id is present.

Internally the vendors *are* separate — `Resources/views/vendors/<vendor>/`
holds one file per injection point. Adding TikTok or Pinterest is three small
files, one validation pattern and one config field, in one repository.

## Requirements

- Bagisto `>= 2.4`
- PHP `>= 8.3`

## Installation

```bash
composer require tapstar/analytics
php artisan optimize:clear
```

The service provider is auto-discovered.

## Configuration

**Admin → Configure → General → Analytics & Tracking.** Settings are
channel-based, so staging and production configure independently, and the
whole thing is **off by default**.

| Field | Notes |
|---|---|
| Status | Master switch; off renders nothing at all |
| Google Tag Manager ID | `GTM-XXXXXXX` |
| GA4 Measurement ID | `G-XXXXXXXXXX` |
| Meta Pixel ID | numeric, from Meta Events Manager |
| Track purchases | Emits the purchase event on the success page |

> **Set the GA4 field only if GA4 is not already configured inside your Tag
> Manager container.** Doing both counts every purchase twice.

## What gets emitted

- **Every page** — GTM container and/or `gtag.js`, Meta Pixel `init` +
  `PageView`, in `<head>`, with `<noscript>` fallbacks at the top of `<body>`.
- **Success page** — `purchase` with transaction id, value, currency, tax,
  shipping and line items: to GA4 via `gtag`, to GTM via a `dataLayer` push,
  and to Meta as `Purchase` with `contents` and an `eventID` (ready for
  Conversions API deduplication).

## Security

Ids are validated against their vendor's format on save *and* again before
reaching a script tag. These are admin-typed values interpolated into
JavaScript; a malformed one is dropped rather than rendered.

## Consent

Tags fire on page load with no consent gate. Where a consent regime applies
(GDPR, Ecuador's LOPDP), gate the master switch or front this with a CMP.

## License

Proprietary — © Tapstar. All rights reserved. Published for reference; reuse
requires permission.
