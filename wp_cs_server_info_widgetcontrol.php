<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td colspan="2"><strong>Server Info</strong>  </tr>
  <tr>
    <td width="92%"><span style="font-size:10px;">Title:</span></th>
    <td width="8%" align="left">
    	<input name="wp_cs_server_info_widget_title" type="text" value="<?php echo $wp_cs_server_info_widget_title; ?>" size="15" />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">Server IP:</span></td>
    <td align="left">
    	<input name="wp_cs_server_info_widget_serverip" type="text" value="<?php echo $wp_cs_server_info_widget_serverip; ?>" size="15" />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">Server Port:</span></td>
    <td align="left">
    <input  type="text" name="wp_cs_server_info_widget_serverport" value="<?php echo $wp_cs_server_info_widget_serverport; ?>" size="10" />
    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><strong>Options</strong></td>
  </tr>
  <tr>
    <td><span style="font-size:10px;"><em>-&gt;Show</em></span></td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-Map Name</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_mapname" value="1" <?php if($wp_cs_server_info_widget_mapname=='1'){ echo "checked=\"checked\""; }?>  />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-Server IP</span></td>
    <td align="center"><input type="checkbox" name="wp_cs_server_info_widget_server_ip" value="1" <?php if($wp_cs_server_info_widget_server_ip=='1'){ echo "checked=\"checked\""; }?> /></td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-Server Port</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_server_port" value="1" <?php if($wp_cs_server_info_widget_server_port=='1'){ echo "checked=\"checked\""; }?> />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-Player Count</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_player_count" value="1" <?php if($wp_cs_server_info_widget_player_count=='1'){ echo "checked=\"checked\""; }?> />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-Type</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_type" value="1" <?php if($wp_cs_server_info_widget_type=='1'){ echo "checked=\"checked\""; }?> />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-Version</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_server_version" value="1" <?php if($wp_cs_server_info_widget_server_version=='1'){ echo "checked=\"checked\""; }?> />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-ServerName</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_server_name" value="1" <?php if($wp_cs_server_info_widget_server_name=='1'){ echo "checked=\"checked\""; }?> />
    </td>
  </tr>
  
  <tr>
    <td><span style="font-size:10px;">-Game Dir</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_type" value="1" <?php if($wp_cs_server_info_widget_type=='1'){ echo "checked=\"checked\""; }?> />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-Game Desc</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_game_desc" value="1" <?php if($wp_cs_server_info_widget_game_desc=='1'){ echo "checked=\"checked\""; }?> />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-App ID</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_app_id" value="1" <?php if($wp_cs_server_info_widget_app_id=='1'){ echo "checked=\"checked\""; }?> />
    </td>
  </tr>
  
  <tr>
    <td><span style="font-size:10px;">-Bots</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_bots" value="1" <?php if($wp_cs_server_info_widget_bots=='1'){ echo "checked=\"checked\""; }?> />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-Dedicated</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_dedicated" value="1" <?php if($wp_cs_server_info_widget_dedicated=='1'){ echo "checked=\"checked\""; }?>  />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-System</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_system" value="1" <?php if($wp_cs_server_info_widget_system=='1'){ echo "checked=\"checked\""; }?> />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-Password</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_password" value="1"  <?php if($wp_cs_server_info_widget_password=='1'){ echo "checked=\"checked\""; }?> />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-Secure</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_secure" value="1" <?php if($wp_cs_server_info_widget_secure=='1'){ echo "checked=\"checked\""; }?> />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-Game Version</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_game_version" value="1" <?php if($wp_cs_server_info_widget_game_version=='1'){ echo "checked=\"checked\""; }?> />
    </td>
  </tr>
  <tr>
    <td><span style="font-size:10px;">-Map Image</span></td>
    <td align="center">
    <input type="checkbox" name="wp_cs_server_info_widget_map" value="1" <?php if($wp_cs_server_info_widget_map=='1'){ echo "checked=\"checked\""; }?>  />
    </td>
  </tr>
</table>

<input type="hidden" id="wp_cs_server_info_widget_submit" name="wp_cs_server_info_widget_submit" value="1" />
