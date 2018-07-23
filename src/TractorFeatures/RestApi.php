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
        $post_types = get_post_types_by_support(['editor']);
        foreach ($post_types as $post_type) {
            if (gutenberg_can_edit_post_type($post_type)) {
                register_rest_field(
                    $post_type,
                    'data',
                    [
                        'get_callback' => [$this, 'getBlockData'],
                    ]
                );
            }
        }
    }

    public function getBlockData(array $post)
    {
        $blocks = gutenberg_parse_blocks($post['content']['raw']);
        $processed= array_reduce(
            $blocks,
            function ($carry, $block) {
                switch ($block['blockName']) {
                    case 'v8ch/featured-link':
                        $formatted = $this->formatFeaturedLink($block);
                        array_push($carry, $formatted);
                        return $carry;
                    default:
                        return $carry;
                }
            },
            []
        );

        return $processed;
    }

    public function formatFeaturedLink($block)
    {
        return [
            'description' => $block['attrs']['description'],
            'href' => $block['attrs']['href'],
        ];
    }
}
