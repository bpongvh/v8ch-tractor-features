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
        add_action('plugins_loaded', [$assets, 'register'], 100);
    }

    public function registerBlocks()
    {
        $blocks = new RegisterBlocks();
        add_action('plugins_loaded', [$blocks, 'register'], 100);
    }

    public function registerApps()
    {
        $apps = new RegisterRenderApps();
        add_action('plugins_loaded', [$apps, 'enqueue'], 100);
    }

    public function run()
    {
        $this->registerAssets();
        $this->registerBlocks();
        $this->registerApps();
    }
}
