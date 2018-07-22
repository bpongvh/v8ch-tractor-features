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

class RegisterTaxonomies
{

    public function register()
    {
        $this->registerFeaturedLinkTag();
    }

    public function registerFeaturedLinkTag()
    {

        $labels = [
            'name'                       => _x('Featured Link Tags', 'Taxonomy General Name', 'v8ch_tractor_blocks'),
            'singular_name'              => _x('Featured Link Tag', 'Taxonomy Singular Name', 'v8ch_tractor_blocks'),
            'menu_name'                  => __('Featured Link Tags', 'v8ch_tractor_blocks'),
            'all_items'                  => __('All Featured Link Tags', 'v8ch_tractor_blocks'),
            'new_item_name'              => __('New Featured Link Tag', 'v8ch_tractor_blocks'),
            'add_new_item'               => __('Add New Featured Link Tag', 'v8ch_tractor_blocks'),
            'edit_item'                  => __('Edit Featured Link Tag', 'v8ch_tractor_blocks'),
            'update_item'                => __('Update Featured Link Tag', 'v8ch_tractor_blocks'),
            'view_item'                  => __('View Featured Link Tag', 'v8ch_tractor_blocks'),
            'separate_items_with_commas' => __('Separate Featured Link Tags with commas', 'v8ch_tractor_blocks'),
            'add_or_remove_items'        => __('Add or remove Featured Link Tags', 'v8ch_tractor_blocks'),
            'choose_from_most_used'      => __('Choose from the most used', 'v8ch_tractor_blocks'),
            'popular_items'              => __('Popular Featured Link Tags', 'v8ch_tractor_blocks'),
            'search_items'               => __('Search Featured Link Tags', 'v8ch_tractor_blocks'),
            'not_found'                  => __('Not Found', 'v8ch_tractor_blocks'),
            'no_terms'                   => __('No Featured Link Tags', 'v8ch_tractor_blocks'),
            'items_list'                 => __('Featured Link Tags list', 'v8ch_tractor_blocks'),
            'items_list_navigation'      => __('Featured Link Tags list navigation', 'v8ch_tractor_blocks'),
        ];
        $args = [
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'show_in_rest'               => true,
            'rest_base'                  => 'featured-link-tags',
        ];
        register_taxonomy('featured_link_tag', ['featured_link'], $args);
    }
}
