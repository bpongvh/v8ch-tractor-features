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

class RegisterBlocks
{

    public function register()
    {
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
    }
}
