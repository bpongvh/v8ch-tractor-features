<?php
/**
 * Class RegisterAssetsTest
 *
 * @package v8ch-tractor-features
 */

namespace V8CH\WordPress\TractorFeatures\Tests;

use V8CH\WordPress\TractorFeatures\RegisterAssets;
use WP_Mock;
use WP_Mock\Tools\TestCase;

class RegisterAssetsTest extends TestCase
{

    public $registerAssets;

    public function setUp()
    {
        WP_Mock::setUp();
        $this->registerAssets = new RegisterAssets();
    }

    public function tearDown()
    {
        WP_Mock::tearDown();
    }

    /**
     * Test that register points to correct asset files
     *
     * @test
     */
    public function registerPointsToCorrectAssetFiles()
    {
        WP_Mock::userFunction(
            'plugins_url',
            [
                'args'  => ['/dist/scripts/block-v8ch-hero.js', '*'],
                'times' => 1,
            ]
        );
        WP_Mock::userFunction(
            'plugins_url',
            [
                'args'  => ['/dist/scripts/block-v8ch-projects.js', '*'],
                'times' => 1,
            ]
        );
        WP_Mock::userFunction(
            'plugins_url',
            [
                'args'  => ['/dist/scripts/block-v8ch-skills.js', '*'],
                'times' => 1,
            ]
        );
        WP_Mock::userFunction(
            'plugins_url',
            [
                'args'  => ['/dist/styles/tractor-blocks.css', '*'],
                'times' => 1,
            ]
        );
        WP_Mock::userFunction('wp_register_script');
        WP_Mock::userFunction('wp_register_style');

        $this->registerAssets->register();
    }

    /**
     * Test that register sets correct handles and dependencies
     *
     * @test
     */
    public function registerSetsCorrectHandlesAndDependencies()
    {
        WP_Mock::userFunction('plugins_url');
        WP_Mock::userFunction(
            'wp_register_script',
            [
                'args'  => [
                    'v8ch/block-v8ch-hero',
                    '*',
                    ['wp-blocks', 'wp-element']
                ],
                'times' => 1,
            ]
        );
        WP_Mock::userFunction(
            'wp_register_script',
            [
                'args'  => [
                    'v8ch/block-v8ch-projects',
                    '*',
                    ['wp-blocks', 'wp-element']
                ],
                'times' => 1,
            ]
        );
        WP_Mock::userFunction(
            'wp_register_script',
            [
                'args'  => [
                    'v8ch/block-v8ch-skills',
                    '*',
                    ['wp-blocks', 'wp-element']
                ],
                'times' => 1,
            ]
        );
        WP_Mock::userFunction(
            'wp_register_style',
            [
                'args'  => [
                    'v8ch-tractor-blocks',
                    '*',
                    ['wp-edit-blocks']
                ],
                'times' => 1,
            ]
        );

        $this->registerAssets->register();
    }
}
