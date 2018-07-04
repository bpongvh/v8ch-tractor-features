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

class RegisterRenderApps
{

    public function register()
    {
        $this->registerStyle();
        $this->registerV8chContactApp();
        $this->registerV8chHeroApp();
        $this->registerV8chProjectsApp();
        $this->registerV8chSkillsApp();
    }

    public function registerStyle()
    {
        wp_register_style(
            'v8ch-tractor-blocks',
            plugins_url('/dist/styles/tractor-blocks.css', dirname(__FILE__, 2)),
            ['wp-blocks', 'wp-element']
        );
    }

    public function registerV8chContactApp()
    {
        wp_register_script(
            'v8ch_contact_app',
            plugins_url('/dist/scripts/app-v8ch-contact.js', dirname(__FILE__, 2)),
            ['wp-element'],
            false,
            true
        );
    }

    public function registerV8chHeroApp()
    {
        wp_register_script(
            'v8ch_hero_app',
            plugins_url('/dist/scripts/app-v8ch-hero.js', dirname(__FILE__, 2)),
            ['wp-element'],
            false,
            true
        );
    }

    public function registerV8chProjectsApp()
    {
        wp_register_script(
            'v8ch_projects_app',
            plugins_url('/dist/scripts/app-v8ch-projects.js', dirname(__FILE__, 2)),
            ['wp-element'],
            false,
            true
        );
    }

    public function registerV8chSkillsApp()
    {
        wp_register_script(
            'v8ch_skills_app',
            plugins_url('/dist/scripts/app-v8ch-skills.js', dirname(__FILE__, 2)),
            ['wp-element'],
            false,
            true
        );
    }
}
