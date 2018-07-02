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

class Plugin
{
    public function registerAssets()
    {
        $assets = new RegisterAssets();
        add_action('init', [$assets, 'register'], 100);
    }

    public function registerBlocks()
    {
        $blocks = new RegisterBlocks();
        add_action('init', [$blocks, 'register'], 100);
    }

    public function enqueueApps()
    {
        $apps = new EnqueueRenderApps();
        add_action('wp_enqueue_scripts', [$apps, 'enqueue'], 100);
    }

    public function run()
    {
        $this->registerAssets();
        $this->registerBlocks();
        $this->enqueueApps();
    }
}
