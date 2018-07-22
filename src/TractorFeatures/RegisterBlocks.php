<?php // phpcs:ignore
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
        // register_block_type(
        //     'v8ch/v8ch-contact',
        //     [
        //         'editor_script'   => 'v8ch/block-v8ch-contact',
        //         'editor_style'    => 'v8ch-tractor-blocks',
        //         'render_callback'    => [$this, 'renderV8chContact'],
        //     ]
        // );
        // register_block_type(
        //     'v8ch/v8ch-hero',
        //     [
        //         'editor_script'   => 'v8ch/block-v8ch-hero',
        //         'editor_style'    => 'v8ch-tractor-blocks',
        //         'render_callback'    => [$this, 'renderV8chHero'],
        //     ]
        // );
        // register_block_type(
        //     'v8ch/v8ch-projects',
        //     [
        //         'editor_script'   => 'v8ch/block-v8ch-projects',
        //         'editor_style'    => 'v8ch-tractor-blocks',
        //         'render_callback'    => [$this, 'renderV8chProjects'],
        //     ]
        // );
        // register_block_type(
        //     'v8ch/v8ch-skills',
        //     [
        //         'editor_script'   => 'v8ch/block-v8ch-skills',
        //         'editor_style'    => 'v8ch-tractor-blocks',
        //         'render_callback'    => [$this, 'renderV8chSkills'],
        //     ]
        // );
    }

    // public function renderV8chContact()
    // {
    //     return "          <div id=\"v8ch-contact-mount\"></div>\n";
    // }

    // public function renderV8chHero()
    // {
    //     return '<div id="v8ch-hero-mount"></div>';
    // }

    // public function renderV8chProjects($attributes)
    // {
    //     ob_start();
        /*
        ?>
          <div
            data-projects='<?php echo $attributes['projects'] ?>'
            id="v8ch-projects-mount"
          ></div>
        <?php
        */
    //     $html = ob_get_clean();
    //     ob_flush();

    //     return $html;
    // }

    // public function renderV8chSkills()
    // {
    //     return '          <div id="v8ch-skills-mount"></div>';
    // }
}
