<?php
$instance['squid_cloud_games'] = array_merge($instance['squid_cloud_games'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'optionsof.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Squid Cloud Games",
        "ip" => "emerald.magmanode.com",
        "port" => 29730
    )    
));
?>
