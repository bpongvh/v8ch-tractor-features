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

class RegisterBlocks
{

    public function register()
    {
        register_block_type(
            'v8ch/featured-link',
            [
                'editor_script'   => 'v8ch/block-featured-link',
                'editor_style'    => 'v8ch-tractor-features'
            ]
        );
    }
}
