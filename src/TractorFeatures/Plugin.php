<?php
/**
 *
 * @since   1.0.0
 * @package v8ch-tractor-features
 */

namespace V8CH\WordPress\TractorFeatures;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

class Plugin
{

    // public $apps;
    public $assets;
    public $blocks;
    public $restApi;
    public $taxonomies;

    public function __construct()
    {
        // $this->apps = new RegisterRenderApps();
        $this->assets = new RegisterAssets();
        $this->blocks = new RegisterBlocks();
        $this->postTypes = new RegisterPostTypes();
        $this->restApi = new RestApi();
        $this->taxonomies = new RegisterTaxonomies();
    }

    public function registerAssets()
    {
        add_action('plugins_loaded', [$this->assets, 'register']);
    }

    public function registerBlocks()
    {
        add_action('plugins_loaded', [$this->blocks, 'register']);
    }

    public function registerPostTypes()
    {
        add_action('init', [$this->postTypes, 'register']);
    }

    public function registerRestApi()
    {
        add_action('rest_api_init', [$this->restApi, 'addBlocks']);
    }

    public function registerTaxonomies()
    {
        add_action('init', [$this->taxonomies, 'register']);
    }

    public function run()
    {
        $this->registerAssets();
        $this->registerBlocks();
        $this->registerPostTypes();
        $this->registerRestApi();
        $this->registerTaxonomies();
    }
}
