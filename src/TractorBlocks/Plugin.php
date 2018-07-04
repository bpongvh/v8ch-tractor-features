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

    public $apps;
    public $assets;
    public $blocks;

    public function __construct()
    {
        $this->apps = new RegisterRenderApps();
        $this->assets = new RegisterAssets();
        $this->blocks = new RegisterBlocks();
    }

    public function registerAssets()
    {
        add_action('plugins_loaded', [$this->assets, 'register'], 100);
    }

    public function registerBlocks()
    {
        add_action('plugins_loaded', [$this->blocks, 'register'], 100);
    }

    public function registerApps()
    {
        add_action('plugins_loaded', [$this->apps, 'register'], 100);
    }

    public function run()
    {
        $this->registerAssets();
        $this->registerBlocks();
        $this->registerApps();
    }
}
