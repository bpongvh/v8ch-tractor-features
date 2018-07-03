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
            [
                'editor_script'   => 'v8ch/block-v8ch-hero',
                'editor_style'    => 'v8ch-tractor-blocks',
                'render_callback'    => [$this, 'renderV8chHero'],
            ]
        );
        register_block_type(
            'v8ch/v8ch-projects',
            [
                'editor_script'   => 'v8ch/block-v8ch-projects',
                'editor_style'    => 'v8ch-tractor-blocks',
                'render_callback'    => [$this, 'renderV8chProjects'],
            ]
        );
        register_block_type(
            'v8ch/v8ch-skills',
            [
                'editor_script'   => 'v8ch/block-v8ch-skills',
                'editor_style'    => 'v8ch-tractor-blocks',
                'render_callback'    => [$this, 'renderV8chSkills'],
            ]
        );
    }

    public function renderV8chHero()
    {
        return '<div id="v8ch-hero-mount"></div>';
    }

    public function renderV8chProjects()
    {
        return '<div id="v8ch-projects-mount"></div>';
    }

    public function renderV8chSkills()
    {
        return '<div id="v8ch-skills-mount"></div>';
    }
}