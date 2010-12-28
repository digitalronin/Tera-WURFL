<?php

require_once '../TeraWurfl.php';

$wurfl = new TeraWurfl();

//foreach(file('useragents.txt') as $line) {
foreach(file('foo') as $line) {
  $agent = chop($line);
  $matcher = UserAgentFactory::createUserAgentMatcher($wurfl,$agent);
  echo get_class($matcher) . " ::: $agent\n";
}

?>
