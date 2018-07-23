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

class RestApi
{

    public function addBlocks()
    {
        register_rest_field(
            'featured_link',
            'data',
            [
                'get_callback' => [$this, 'formatFeaturedLink'],
            ]
        );
    }

    public function formatFeaturedLink(array $post)
    {
        $parsed = gutenberg_parse_blocks($post['content']['raw']);
        $block = array_shift($parsed);

        return [
            'description' => $block['attrs']['description'],
            'href' => $block['attrs']['href'],
        ];
    }
}
