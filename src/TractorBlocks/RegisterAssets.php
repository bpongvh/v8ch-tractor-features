<?php
/**
 *
 * @since   1.0.0
 * @package v8ch-tractor-features
 */

namespace V8CH\WordPress\TractorBlocks;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

class RegisterAssets
{

    public function register()
    {
        wp_register_script(
            'v8ch/block-featured-link',
            plugins_url('/dist/scripts/block-featured-link.js', dirname(__FILE__, 2)),
            ['wp-blocks', 'wp-element']
        );
        wp_register_style(
            'v8ch-tractor-features',
            plugins_url('/dist/styles/tractor-features.css', dirname(__FILE__, 2)),
            ['wp-edit-blocks']
        );
        // wp_register_script(
        //     'v8ch/block-v8ch-contact',
        //     plugins_url('/dist/scripts/block-v8ch-contact.js', dirname(__FILE__, 2)),
        //     ['wp-blocks', 'wp-element']
        // );
        // wp_register_script(
        //     'v8ch/block-v8ch-hero',
        //     plugins_url('/dist/scripts/block-v8ch-hero.js', dirname(__FILE__, 2)),
        //     ['wp-blocks', 'wp-element']
        // );
        // wp_register_script(
        //     'v8ch/block-v8ch-projects',
        //     plugins_url('/dist/scripts/block-v8ch-projects.js', dirname(__FILE__, 2)),
        //     ['wp-blocks', 'wp-element']
        // );
        // wp_register_script(
        //     'v8ch/block-v8ch-skills',
        //     plugins_url('/dist/scripts/block-v8ch-skills.js', dirname(__FILE__, 2)),
        //     ['wp-blocks', 'wp-element']
        // );
    }
}
