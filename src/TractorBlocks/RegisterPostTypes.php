<?php
/**
 *
 * @since   1.0.0
 * @package v8ch-tractor-blocks
 */

namespace V8CH\WordPress\TractorBlocks;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

class RegisterPostTypes
{

    public function register()
    {
        $this->registerFeaturedLink();
    }

    public function registerFeaturedLink()
    {
        $labels = [
            'name'                  => _x('Featured Links', 'Post Type General Name', 'v8ch-tractor-blocks'),
            'singular_name'         => _x('Featured Link', 'Post Type Singular Name', 'v8ch-tractor-blocks'),
            'menu_name'             => __('Featured Links', 'v8ch-tractor-blocks'),
            'name_admin_bar'        => __('Featured Link', 'v8ch-tractor-blocks'),
            'archives'              => __('Featured Link Archives', 'v8ch-tractor-blocks'),
            'attributes'            => __('Featured Link Attributes', 'v8ch-tractor-blocks'),
            'all_items'             => __('All Featured Links', 'v8ch-tractor-blocks'),
            'add_new_item'          => __('Add New Featured Link', 'v8ch-tractor-blocks'),
            'add_new'               => __('Add New', 'v8ch-tractor-blocks'),
            'new_item'              => __('New Featured Link', 'v8ch-tractor-blocks'),
            'edit_item'             => __('Edit Featured Link', 'v8ch-tractor-blocks'),
            'update_item'           => __('Update Featured Link', 'v8ch-tractor-blocks'),
            'view_item'             => __('View Featured Link', 'v8ch-tractor-blocks'),
            'view_items'            => __('View Featured Links', 'v8ch-tractor-blocks'),
            'search_items'          => __('Search Featured Links', 'v8ch-tractor-blocks'),
            'not_found'             => __('Not found', 'v8ch-tractor-blocks'),
            'not_found_in_trash'    => __('Not found in Trash', 'v8ch-tractor-blocks'),
            'items_list'            => __('Featured Links list', 'v8ch-tractor-blocks'),
            'items_list_navigation' => __('Featured Links list navigation', 'v8ch-tractor-blocks'),
            'filter_items_list'     => __('Filter Featured Links list', 'v8ch-tractor-blocks'),
        ];
        $args = [
            'label'                 => __('Featured Link', 'v8ch-tractor-blocks'),
            'description'           => __('Link Object with description, href and title', 'v8ch-tractor-blocks'),
            'labels'                => $labels,
            'supports'              => ['editor', 'revisions'],
            'taxonomies'            => ['featured_link_tag'],
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-admin-links',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'show_in_rest'          => true,
            'rest_base'             => 'featured-links',
        ];
        register_post_type('featured_link', $args);
    }
}
