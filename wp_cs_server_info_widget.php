<?php 

include(WPCSI_ABSPATH . '/inc/functions/functions.php'); 

	$current_server 		= get_server_info($wp_cs_server_info_widget_serverip, $wp_cs_server_info_widget_serverport);
	
	$current_map 			= $current_server["serverinfo"]["map"];
	$current_server_name 	= $current_server["serverinfo"]["servername"];
	$current_players 		= $current_server["serverinfo"]["player_cur"];
	$current_max_players 	= $current_server["serverinfo"]["player_max"];
	$current_game_desc 		= $current_server["serverinfo"]["gamedesc"];
	
	$current_type 			= $current_server["serverinfo"]["type"];
	$current_version 		= $current_server["serverinfo"]["version"];
	$current_map 			= $current_server["serverinfo"]["map"];
	$current_gamedir 		= $current_server["serverinfo"]["gamedir"];
	$current_appid 			= $current_server["serverinfo"]["appid"];
	$current_bots 			= $current_server["serverinfo"]["bots"];
	$current_dedicated 		= $current_server["serverinfo"]["dedicated"];
	$current_system 		= $current_server["serverinfo"]["system"];
	$current_password 		= $current_server["serverinfo"]["password"];
	$current_secure 		= $current_server["serverinfo"]["secure"];
	$current_gameversion 	= $current_server["serverinfo"]["gameversion"];
	$current_ip 			= $current_server["serverinfo"]["ip"];


	// Options
	// Default Options
	if($wp_cs_server_info_widget_mapname == 1){
		echo "<strong>Map: </strong>".$current_map."<br />";	
	}
	if($wp_cs_server_info_widget_server_ip == 1){
		echo "<strong>Server IP: </strong>".$wp_cs_server_info_widget_serverip."<br />";	
	}
	if($wp_cs_server_info_widget_server_port == 1){
		echo "<strong>Server Port: </strong>".$wp_cs_server_info_widget_serverport."<br />";	
	}
	if($wp_cs_server_info_widget_player_count == 1){
		echo "<strong>Players: </strong>" .$current_players ."/".$current_max_players."<br />";	
	}	
	
	
	if($wp_cs_server_info_widget_type == 1){
		echo "<strong>Type: </strong>".$current_type."<br />";	
	}
	if($wp_cs_server_info_widget_version == 1){
		echo "<strong>Version: </strong>".$current_version."<br />";	
	}
	if($wp_cs_server_info_widget_game_dir == 1){
		echo "<strong>Dir: </strong>".$current_gamedir."<br />";	
	}
	if($wp_cs_server_info_widget_game_desc == 1){
		echo "<strong>Desc: </strong>".$current_game_desc."<br />";	
	}
	if($wp_cs_server_info_widget_app_id == 1){
		echo "<strong>App ID: </strong>".$current_appid."<br />";	
	}
	if($wp_cs_server_info_widget_bots == 1){
		echo "<strong>Bots: </strong>" .$current_bots."<br />";	
	}	
	if($wp_cs_server_info_widget_dedicated == 1){
		echo "<strong>Dedicated: </strong>" .$current_dedicated."<br />";	
	}	
	if($wp_cs_server_info_widget_system == 1){
		echo "<strong>System: </strong>" .$current_system."<br />";	
	}			
	if($wp_cs_server_info_widget_password == 1){
		echo "<strong>Password: </strong>" .$current_password."<br />";	
	}		
	if($wp_cs_server_info_widget_secure == 1){
		echo "<strong>Secure: </strong>" .$current_secure."<br />";	
	}
	if($wp_cs_server_info_widget_game_version == 1){
		echo "<strong>Version: </strong>" .$current_version."<br />";	
	}			
	if($wp_cs_server_info_widget_map == 1){
		echo "<img height='120' width='150' src='". WPCSI_URLPATH . "/inc/img/cstrike/". get_map_picture($current_map)."' alt='' />";	
	}
/*	
echo "<strong>Map:</strong> ". $current_map . "<br />";
echo "<strong>Players:</strong> ". $current_players  ."/". $current_max_players ."<br />";
echo "<strong>Server IP:</strong> ". $serverip ."<br />";
echo "<strong>Server Port:</strong> ". $serverport ."<br />";
echo "<img height='120' width='150' src='". WPCSI_URLPATH . "/inc/img/cstrike/". get_map_picture($current_map)."' alt='' />";
*/
echo "<a href='http://www.martin-gardner.co.uk/wordpress/' target='_blank' style='font-size:10px;'>Powered by: WPCSSI</a>";

?>