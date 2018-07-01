<?php // phpcs:ignore
/**
 *
 * @since   0.0.1
 * @package v8ch-tractor-blocks
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme-specific Gutenberg block assets
 */
add_action(
    'init',
    function () {
        wp_register_script(
            'v8ch/block-v8ch-hero',
            plugins_url('/dist/scripts/block-v8ch-hero.js', dirname(__FILE__)),
            array( 'wp-blocks', 'wp-element')
        );
        wp_register_script(
            'v8ch/block-v8ch-projects',
            plugins_url('/dist/scripts/block-v8ch-projects.js', dirname(__FILE__)),
            array( 'wp-blocks', 'wp-element')
        );
        wp_register_script(
            'v8ch/block-v8ch-skills',
            plugins_url('/dist/scripts/block-v8ch-skills.js', dirname(__FILE__)),
            array( 'wp-blocks', 'wp-element')
        );
        wp_register_style(
            'v8ch/tractor-blocks',
            plugins_url('/dist/styles/tractor-blocks.css', dirname(__FILE__)),
            array( 'wp-edit-blocks' )
        );
        register_block_type(
            'v8ch/v8ch-hero',
            array(
            'editor_script' => 'v8ch/block-v8ch-hero',
            'editor_style'  => 'v8ch/tractor-blocks'
            )
        );
        register_block_type(
            'v8ch/v8ch-projects',
            array(
            'editor_script' => 'v8ch/block-v8ch-projects',
            'editor_style'  => 'v8ch/tractor-blocks'
            )
        );
        register_block_type(
            'v8ch/v8ch-skills',
            array(
            'editor_script' => 'v8ch/block-v8ch-skills',
            'editor_style'  => 'v8ch/tractor-blocks'
            )
        );
    },
    100
);
