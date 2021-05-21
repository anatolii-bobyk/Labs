<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://wordpress.loc
 * @since             1.0.0
 * @package           Studentwp
 *
 * @wordpress-plugin
 * Plugin Name:       StudentWp
 * Plugin URI:        http://wordpress.loc
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Anatolii
 * Author URI:        http://wordpress.loc
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       studentwp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'STUDENTWP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-studentwp-activator.php
 */
function activate_studentwp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-studentwp-activator.php';
	Studentwp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-studentwp-deactivator.php
 */
function deactivate_studentwp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-studentwp-deactivator.php';
	Studentwp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_studentwp' );
register_deactivation_hook( __FILE__, 'deactivate_studentwp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-studentwp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_studentwp() {

	$plugin = new Studentwp();
	$plugin->run();

}
run_studentwp();



register_activation_hook(__FILE__, function()

{

    global $wpdb;

    require_once(ABSPATH.'wp-admin/includes/upgrade.php');

    dbDelta("CREATE TABLE IF NOT EXISTS `{$wpdb -> prefix}diploma_theme` (  `id` INT(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    
    `name` VARCHAR(255) NOT NULL,

`group` VARCHAR(255) NOT NULL,

`year_of_protection` INT(10) UNSIGNED NOT NULL,
    
`theme` VARCHAR(255) NOT NULL,
    
`leader_of_diploma` VARCHAR(255) NOT NULL



  ) {$wpdb -> get_charset_collate()};");

});

?>

<?php
function DBP_add_front_Page() {
	include_once ("C:\OpenServer\OpenServer\domains\wordpress\wp-content\plugins\studentwp\admin\partials\studentwp-admin-display.php");
	DBP_insert_data();
}

