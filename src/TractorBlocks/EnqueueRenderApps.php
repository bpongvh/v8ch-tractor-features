<?php // phpcs:ignore
/**
 *
 * @since   0.0.1
 * @package v8ch-tractor-blocks
 */

namespace V8CH\WordPress\TractorBlocks;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

class EnqueueRenderApps
{
    public function enqueue()
    {
        wp_enqueue_script(
            'v8ch_hero_app',
            plugins_url('/dist/scripts/app-v8ch-hero.js', dirname(__FILE__, 2)),
            ['wp-element'],
            false,
            true
        );
    }
}
