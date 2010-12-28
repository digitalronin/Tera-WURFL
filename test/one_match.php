<?php

require_once '../TeraWurfl.php';

function wlog($msg) {
  echo "LOG: $msg\n";
}

// $device_id = 'apple_iphone_ver4';

// Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_0 like Mac OS X; xx-xx) AppleWebKit/532.9 (KHTML, like Gecko) Mobile/7D11
// Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_2 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C134 Safari/6533.18.5';
// $agent = 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_2 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C134 Safari/6533.18.5';

$agent = 'SHARP-STX2/MC.40 POLARIS/6.15 Profile/MIDP-2.0 Configuration/CLDC-1.1';

$wurfl = new TeraWurfl();
// $wurfl->getDeviceCapabilitiesFromAgent($agent);
// wlog("getDeviceCapabilitiesFromAgent: " . get_class($wurfl->userAgentMatcher));


$matcher = UserAgentFactory::createUserAgentMatcher($wurfl,$agent);
wlog("matcher: " . get_class($matcher));

$device_id =  $wurfl->getDeviceCapability('actual_root_device');

echo "Matched to $device_id\n";

?>
