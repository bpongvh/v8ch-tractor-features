<?php // phpcs:ignore
/**
 * Author:      Robert Pratt
 * Author URI:  https://www.v8ch.com/
 * Description: Custom features and Gutenberg blocks to complement the V8CH Tractor theme.
 * License:     MIT
 * License URI: https://opensource.org/licenses/MIT
 * Plugin Name: V8CH Tractor Features
 * Plugin URI:  https://github.com/V8CH/v8ch-tractor-features
 * Text Domain: v8ch-tractor-features
 * Version:     1.0.0
 *
 * @category Theme Support
 * @package  Declaration
 * @author   Robert Pratt <bpong@v8ch.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/V8CH/v8ch-tractor-features
 */

// Exit if accessed directly.
if (! defined('ABSPATH')) {
    exit;
}

use V8CH\WordPress\TractorFeatures\Plugin;

require_once 'vendor/autoload.php';

$plugin = new Plugin();
$plugin->run();
