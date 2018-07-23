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
            'name'                       => _x('Featured Link Locations', 'Taxonomy General Name', 'v8ch-tractor-features'),
            'singular_name'              => _x('Featured Link Location', 'Taxonomy Singular Name', 'v8ch-tractor-features'),
            'menu_name'                  => __('Featured Link Locations', 'v8ch-tractor-features'),
            'all_items'                  => __('All Featured Link Locations', 'v8ch-tractor-features'),
            'new_item_name'              => __('New Featured Link Location', 'v8ch-tractor-features'),
            'add_new_item'               => __('Add New Featured Link Location', 'v8ch-tractor-features'),
            'edit_item'                  => __('Edit Featured Link Location', 'v8ch-tractor-features'),
            'update_item'                => __('Update Featured Link Location', 'v8ch-tractor-features'),
            'view_item'                  => __('View Featured Link Location', 'v8ch-tractor-features'),
            'separate_items_with_commas' => __('Separate Featured Link Locations with commas', 'v8ch-tractor-features'),
            'add_or_remove_items'        => __('Add or remove Featured Link Locations', 'v8ch-tractor-features'),
            'choose_from_most_used'      => __('Choose from the most used', 'v8ch-tractor-features'),
            'popular_items'              => __('Popular Featured Link Locations', 'v8ch-tractor-features'),
            'search_items'               => __('Search Featured Link Locations', 'v8ch-tractor-features'),
            'not_found'                  => __('Not Found', 'v8ch-tractor-features'),
            'no_terms'                   => __('No Featured Link Locations', 'v8ch-tractor-features'),
            'items_list'                 => __('Featured Link Locations list', 'v8ch-tractor-features'),
            'items_list_navigation'      => __('Featured Link Locations list navigation', 'v8ch-tractor-features'),
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
