<?php
// GRAB THE SERVER INFO USING THE CSTRIKE CLASS
function get_server_info($wp_cs_server_info_widget_serverip,$wp_cs_server_info_widget_serverport) 
{
	// INCLUDE OUR CLASS FOR USE.
	include(WPCSI_ABSPATH . 'inc/lib/class_cstrike.php');
	
	$server = new cstrike($wp_cs_server_info_widget_serverip, $wp_cs_server_info_widget_serverport);
	$infoarrays = $server->getInfo();

	/*
	List of all the Values given after the call.

	    $type 			= $infoarrays["serverinfo"]["type"]
    	$version 		= $infoarrays["serverinfo"]["version"]
    	$servername 	= $infoarrays["serverinfo"]["servername"]
    	$map 			= $infoarrays["serverinfo"]["map"]
    	$gamedir 		= $infoarrays["serverinfo"]["gamedir"]
    	$gamedesc 		= $infoarrays["serverinfo"]["gamedesc"]
    	$appid 			= $infoarrays["serverinfo"]["appid"]
    	$player_cur 	= $infoarrays["serverinfo"]["player_cur"]
    	$player_max 	= $infoarrays["serverinfo"]["player_max"]
    	$bots 			= $infoarrays["serverinfo"]["bots"]
    	$dedicated 		= $infoarrays["serverinfo"]["dedicated"]
    	$system 		= $infoarrays["serverinfo"]["system"]
    	$password 		= $infoarrays["serverinfo"]["password"]
    	$secure 		= $infoarrays["serverinfo"]["secure"]
    	$gameversion 	= $infoarrays["serverinfo"]["gameversion"]
    	$ip 			= $infoarrays["serverinfo"]["ip"]
	*/
	return $infoarrays;
}


// GRAB THE CURRENT PLAYING MAP PICTURE
function get_map_picture($current_map) 
{
	// to do # 
	// just loop through the (../img/) folder, pick up the filename for match!!
	// 						if is game = 'cstrike' folder = '../img/cstrike/'

	switch($current_map) {
		case "as_forest" 		: $img = "as_forest.jpg"; break;
		case "as_highrise" 		: $img = "as_highrise.jpg"; break;
		case "as_oilrig" 		: $img = "as_oilrig.jpg"; break;
		case "as_riverside" 	: $img = "as_riverside.jpg"; break;
		case "as_tundra" 		: $img = "as_tundra.jpg"; break;
		case "cs_747" 			: $img = "cs_747.jpg"; break;
		case "cs_alley" 		: $img = "cs_alley.jpg"; break;
		case "cs_alley1" 		: $img = "cs_alley1.jpg"; break;
		case "cs_arrabstreets"	: $img = "cs_arrabstreets.jpg"; break;
		case "cs_assault" 		: $img = "cs_assault.jpg"; break;
		case "cs_backalley" 	: $img = "cs_backalley.jpg"; break;
		case "cs_bunker" 		: $img = "cs_bunker.jpg"; break;
		case "cs_desert" 		: $img = "cs_desert.jpg"; break;
		case "cs_docks" 		: $img = "cs_docks.jpg"; break;
		case "cs_estate" 		: $img = "cs_estate.jpg"; break;
		case "cs_facility" 		: $img = "cs_facility.jpg"; break;
		case "cs_hideout" 		: $img = "cs_hideout.jpg"; break;
		case "cs_hideout2" 		: $img = "cs_hideout2.jpg"; break;
		case "cs_iraq" 			: $img = "cs_iraq.jpg"; break;
		case "cs_italy" 		: $img = "cs_italy.jpg"; break;
		case "cs_mansion" 		: $img = "cs_mansion.jpg"; break;
		case "cs_militia" 		: $img = "cs_militia.jpg"; break;
		case "cs_office" 		: $img = "cs_office.jpg"; break;
		case "cs_prison" 		: $img = "cs_prison.jpg"; break;
		case "cs_ship" 			: $img = "cs_ship.jpg"; break;
		case "cs_siege" 		: $img = "cs_siege.jpg"; break;
		case "cs_station" 		: $img = "cs_station.jpg"; break;
		case "cs_thunder" 		: $img = "cs_thunder.jpg"; break;
		case "de_aztec" 		: $img = "de_aztec.jpg"; break;
		case "de_cbble" 		: $img = "de_cbble.jpg"; break;
		case "de_chateau" 		: $img = "de_chateau.jpg"; break;
		case "de_dust" 			: $img = "de_dust.jpg"; break;
		case "de_dust2" 		: $img = "de_dust2.jpg"; break;
		case "de_fang" 			: $img = "de_fang.jpg"; break;
		case "de_foption" 		: $img = "de_foption.jpg"; break;
		case "de_inferno"	 	: $img = "de_inferno.jpg"; break;
		case "de_jeepathon2k" 	: $img = "de_jeepathon2k.jpg"; break;
		case "de_nuke" 			: $img = "de_nuke.jpg"; break;
		case "de_piranesi" 		: $img = "de_piranesi.jpg"; break;
		case "de_prodigy" 		: $img = "de_prodigy.jpg"; break;
		case "de_railroad" 		: $img = "de_railroad.jpg"; break;
		case "de_rotterdam" 	: $img = "de_rotterdam.jpg"; break;
		case "de_storm" 		: $img = "de_storm.jpg"; break;
		case "de_survivor" 		: $img = "de_survivor.jpg"; break;
		case "de_torn" 			: $img = "de_torn.jpg"; break;
		case "de_train" 		: $img = "de_train.jpg"; break;
		case "de_vegas" 		: $img = "de_vegas.jpg"; break;
		case "de_vertigo" 		: $img = "de_vertigo.jpg"; break;
		case "es_frantic" 		: $img = "es_frantic.jpg"; break;
		case "es_jail" 			: $img = "es_jail.jpg"; break;
		case "es_trinity" 		: $img = "es_trinity.jpg"; break;
		default 				: $img = "NoImage.jpg"; break;
	}
	return $img;
}
?>