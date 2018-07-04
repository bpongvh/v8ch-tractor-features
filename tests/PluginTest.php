<?php
/**
 * Class SampleTest
 *
 * @package V8ch_Tractor_Blocks
 */

namespace V8CH\WordPress\TractorBlocks\Tests;

use V8CH\WordPress\TractorBlocks\Plugin;
use V8CH\WordPress\TractorBlocks\RegisterAssets;
use WP_Mock;
use WP_Mock\Tools\TestCase;

class PluginTest extends TestCase
{

    public $plugin;

    public function setUp()
    {
        WP_Mock::setUp();
        $this->plugin = new Plugin();
    }

    public function tearDown()
    {
        WP_Mock::tearDown();
    }

    /**
     * Test that registerAssets adds an action to "plugins_loaded"
     *
     * @test
     */
    public function registerAssetsAddsCorrectAction()
    {
        WP_Mock::expectActionAdded(
            'plugins_loaded',
            [$this->plugin->assets, 'register'],
            100
        );

        $this->plugin->registerAssets();
    }

    /**
     * Test that registerBlocks adds an action to "plugins_loaded"
     *
     * @test
     */
    public function registerBlocksAddsCorrectAction()
    {
        WP_Mock::expectActionAdded(
            'plugins_loaded',
            [$this->plugin->blocks, 'register'],
            100
        );

        $this->plugin->registerBlocks();
    }

    /**
     * Test that registerRenderApps adds an action to "plugins_loaded"
     *
     * @test
     */
    public function registerRenderAppsAddsCorrectAction()
    {
        WP_Mock::expectActionAdded(
            'plugins_loaded',
            [$this->plugin->apps, 'register'],
            100
        );

        $this->plugin->registerApps();
    }
}
