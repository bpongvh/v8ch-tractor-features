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

class RegisterPostTypes
{

    public function register()
    {
        $this->registerFeaturedLink();
    }

    public function registerFeaturedLink()
    {
        $labels = [
            'name'                  => _x('Featured Links', 'Post Type General Name', 'v8ch-tractor-features'),
            'singular_name'         => _x('Featured Link', 'Post Type Singular Name', 'v8ch-tractor-features'),
            'menu_name'             => __('Featured Links', 'v8ch-tractor-features'),
            'name_admin_bar'        => __('Featured Link', 'v8ch-tractor-features'),
            'archives'              => __('Featured Link Archives', 'v8ch-tractor-features'),
            'attributes'            => __('Featured Link Attributes', 'v8ch-tractor-features'),
            'all_items'             => __('All Featured Links', 'v8ch-tractor-features'),
            'add_new_item'          => __('Add New Featured Link', 'v8ch-tractor-features'),
            'add_new'               => __('Add New', 'v8ch-tractor-features'),
            'new_item'              => __('New Featured Link', 'v8ch-tractor-features'),
            'edit_item'             => __('Edit Featured Link', 'v8ch-tractor-features'),
            'update_item'           => __('Update Featured Link', 'v8ch-tractor-features'),
            'view_item'             => __('View Featured Link', 'v8ch-tractor-features'),
            'view_items'            => __('View Featured Links', 'v8ch-tractor-features'),
            'search_items'          => __('Search Featured Links', 'v8ch-tractor-features'),
            'not_found'             => __('Not found', 'v8ch-tractor-features'),
            'not_found_in_trash'    => __('Not found in Trash', 'v8ch-tractor-features'),
            'items_list'            => __('Featured Links list', 'v8ch-tractor-features'),
            'items_list_navigation' => __('Featured Links list navigation', 'v8ch-tractor-features'),
            'filter_items_list'     => __('Filter Featured Links list', 'v8ch-tractor-features'),
        ];
        $args = [
            'label'                 => __('Featured Link', 'v8ch-tractor-features'),
            'description'           => __('Link Object with description, href and title', 'v8ch-tractor-features'),
            'labels'                => $labels,
            'supports'              => ['editor', 'page-attributes', 'revisions', 'title'],
            'taxonomies'            => ['featured_link_tag'],
            'hierarchical'          => true,
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
            'capability_type'       => 'page',
            'show_in_rest'          => true,
            'rest_base'             => 'featured-links',
            'template'              => [['v8ch/featured-link']],
            'template_lock'         => 'all',
        ];
        register_post_type('featured_link', $args);
        register_meta(
            'post',
            'v8ch-featured-link-description',
            [
                'description' => 'Description of the featured link',
                'single' => true,
                'show_in_rest' => true,
                'type' => 'string',
            ]
        );
        register_meta(
            'post',
            'v8ch-featured-link-href',
            [
                'description' => 'Link URL',
                'single' => true,
                'show_in_rest' => true,
                'type' => 'string',
            ]
        );
    }
}
