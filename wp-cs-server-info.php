<?php
/*
Plugin Name: WP CS SERVER INFO
Plugin URI: http://www.martin-gardner.co.uk/wordpress/
Description: CounterStrike Server Information Widget for your website.
Version: 1.0 Beta
Author: Martin Gardner
Author URI: http://www.martin-gardner.co.uk
*/

/*  Copyright 2009 Martin Gardner (email : marty@martin-gardner.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


global $wp_version;


define('WPCSI_VERSION', '1.0');
define('WPCSI_ABSPATH', WP_PLUGIN_DIR . '/' . plugin_basename( dirname(__FILE__) ).'/' );
define('WPCSI_URLPATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ).'/' );

// I like to keep my lines short :| "to do" get a bigger monitor
$exit_msg  = 'WP CS Server Info requires Wordpress 2.8 or newer. ';
$exit_msg .= '<a href="http://codex.wordpress.org/Upgrading_Wordpress">!UPDATE NOW!</a>';

// Check our Current Wordpress version
if (version_compare($wp_version,"2.8","<"))
{
	exit ($exit_msg);
}


// BUILD OUR WIDGET
function WP_CS_Server_Info_Widget( $args = array() )
{
	// extract the paramerters
	extract($args);

	//get options
	$options = get_option('wp_cs_server_info');
	
	// Server Info
	$wp_cs_server_info_widget_title 	 = $options['wp_cs_server_info_widget_title'];
	$wp_cs_server_info_widget_serverip 	 = $options['wp_cs_server_info_widget_serverip'];
	$wp_cs_server_info_widget_serverport = $options['wp_cs_server_info_widget_serverport'];
	
	// Options
	$wp_cs_server_info_widget_mapname		= $options['wp_cs_server_info_widget_mapname'];
	$wp_cs_server_info_widget_server_ip		= $options['wp_cs_server_info_widget_server_ip'];
	$wp_cs_server_info_widget_server_port	= $options['wp_cs_server_info_widget_server_ip'];
	
	$wp_cs_server_info_widget_type		 	= $options['wp_cs_server_info_widget_type'];
	$wp_cs_server_info_widget_version		= $options['wp_cs_server_info_widget_version'];
	$wp_cs_server_info_widget_server_name	= $options['wp_cs_server_info_widget_server_name'];
	$wp_cs_server_info_widget_map			= $options['wp_cs_server_info_widget_map'];
	$wp_cs_server_info_widget_game_dir		= $options['wp_cs_server_info_widget_game_dir'];
	$wp_cs_server_info_widget_game_desc		= $options['wp_cs_server_info_widget_game_desc'];
	$wp_cs_server_info_widget_app_id		= $options['wp_cs_server_info_widget_app_id'];
	$wp_cs_server_info_widget_player_count	= $options['wp_cs_server_info_widget_player_count'];
	$wp_cs_server_info_widget_bots			= $options['wp_cs_server_info_widget_bots'];
	$wp_cs_server_info_widget_dedicated		= $options['wp_cs_server_info_widget_dedicated'];
	$wp_cs_server_info_widget_system		= $options['wp_cs_server_info_widget_system'];
	$wp_cs_server_info_widget_password		= $options['wp_cs_server_info_widget_password'];
	$wp_cs_server_info_widget_secure		= $options['wp_cs_server_info_widget_secure'];
	$wp_cs_server_info_widget_game_version	= $options['wp_cs_server_info_widget_game_version'];	
	
	
	//print the theme compatibility code
	echo $before_widget;
	echo $before_title . $wp_cs_server_info_widget_title. $after_title;

	//include our widget
	include('wp_cs_server_info_widget.php');
	
	//print the theme compatibility code
	echo $after_widget;
}


// BUILD OUR WIDGET CONTROL 
function WP_CS_Server_Info_WidgetControl()
{
	// GET SAVED OPTIONS
	$options = get_option('wp_cs_server_info');
	
	// HANDLE USER INPUT
	if ($_POST['wp_cs_server_info_widget_submit'])
	{
		// Show Server Info
		$options['wp_cs_server_info_widget_title'] 			= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_title'] ));
		$options['wp_cs_server_info_widget_serverip'] 		= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_serverip'] ));
		$options['wp_cs_server_info_widget_serverport'] 	= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_serverport'] ));
		
		// Show Options
		$options['wp_cs_server_info_widget_server_ip'] 		= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_server_ip'] ));
		$options['wp_cs_server_info_widget_server_port'] 	= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_server_port'] ));
		$options['wp_cs_server_info_widget_mapname'] 		= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_mapname'] ));
		$options['wp_cs_server_info_widget_type'] 			= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_type'] ));
		$options['wp_cs_server_info_widget_server_name']	= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_server_name'] ));
		$options['wp_cs_server_info_widget_map'] 			= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_map'] ));
		$options['wp_cs_server_info_widget_game_dir'] 		= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_game_dir'] ));
		$options['wp_cs_server_info_widget_game_desc'] 		= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_game_desc'] ));
		$options['wp_cs_server_info_widget_player_count'] 	= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_player_count'] ));
		$options['wp_cs_server_info_widget_bots'] 			= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_bots'] ));
		$options['wp_cs_server_info_widget_dedicated'] 		= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_dedicated'] ));
		$options['wp_cs_server_info_widget_system'] 		= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_system'] ));
		$options['wp_cs_server_info_widget_password'] 		= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_password'] ));
		$options['wp_cs_server_info_widget_secure'] 		= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_secure'] ));
		$options['wp_cs_server_info_widget_game_version'] 	= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_game_version'] ));
		$options['wp_cs_server_info_widget_version'] 		= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_version'] ));
		$options['wp_cs_server_info_widget_app_id'] 		= strip_tags( stripslashes($_POST['wp_cs_server_info_widget_app_id'] ));
		
		update_option('wp_cs_server_info', $options);
	}
	
	// Server Info
	$wp_cs_server_info_widget_title 		= $options['wp_cs_server_info_widget_title'];
	$wp_cs_server_info_widget_serverip 		= $options['wp_cs_server_info_widget_serverip'];
	$wp_cs_server_info_widget_serverport	= $options['wp_cs_server_info_widget_serverport'];
	
	// Options
	$wp_cs_server_info_widget_server_ip 	= $options['wp_cs_server_info_widget_server_ip'];
	$wp_cs_server_info_widget_server_port	= $options['wp_cs_server_info_widget_server_port'];
	$wp_cs_server_info_widget_mapname		= $options['wp_cs_server_info_widget_mapname'];
	$wp_cs_server_info_widget_type		 	= $options['wp_cs_server_info_widget_type'];
	$wp_cs_server_info_widget_server_version= $options['wp_cs_server_info_widget_server_version'];
	$wp_cs_server_info_widget_server_name	= $options['wp_cs_server_info_widget_server_name'];
	$wp_cs_server_info_widget_map			= $options['wp_cs_server_info_widget_map'];
	$wp_cs_server_info_widget_game_dir		= $options['wp_cs_server_info_widget_game_dir'];
	$wp_cs_server_info_widget_game_desc		= $options['wp_cs_server_info_widget_game_desc'];
	$wp_cs_server_info_widget_app_id		= $options['wp_cs_server_info_widget_app_id'];
	$wp_cs_server_info_widget_player_count	= $options['wp_cs_server_info_widget_player_count'];
	$wp_cs_server_info_widget_bots			= $options['wp_cs_server_info_widget_bots'];
	$wp_cs_server_info_widget_dedicated		= $options['wp_cs_server_info_widget_dedicated'];
	$wp_cs_server_info_widget_system		= $options['wp_cs_server_info_widget_system'];
	$wp_cs_server_info_widget_password		= $options['wp_cs_server_info_widget_password'];
	$wp_cs_server_info_widget_secure		= $options['wp_cs_server_info_widget_secure'];
	$wp_cs_server_info_widget_game_version	= $options['wp_cs_server_info_widget_game_version'];
	
	// INCLUDE THE WIDGET CONTROL
	include('wp_cs_server_info_widgetcontrol.php');
}



// PLUGIN INIT
function WP_CS_Server_Info_Init()
{
	//register widget
	register_sidebar_widget('Counterstrike Server info widget.', 'WP_CS_Server_Info_Widget');
	//register widget Control
	register_widget_control('Counterstrike Server info widget.', 'WP_CS_Server_Info_WidgetControl');
}

// HOOKS FOR WORDPRESS
add_action('init', 'WP_CS_Server_Info_Init');
?>