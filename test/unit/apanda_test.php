<?php

/*
 * Recognising Apanda devices from their user agents
 *
 */

require_once 'test_helper.php';

class ApandaTest extends UnitTestCase {

  var $wurfl;


  function test_apanda_a60_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; zh-cn; apanda-A60 Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'apanda_a60_ver1');
      }
  }



  ############################################################

  function checkUA($agent, $expected) {
    $this->wurfl->getDeviceCapabilitiesFromAgent($agent);
    $actual =  $this->wurfl->getDeviceCapability('actual_root_device');
    if ($expected != $actual)
      echo "Expected: $expected, got: $actual\nUA: $agent\n";
    $this->assertEqual($expected, $actual);
  }

  function apandaTest() {
    $this->UnitTestCase('apanda Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new ApandaTest();
$test->run(new TextReporter());

?>