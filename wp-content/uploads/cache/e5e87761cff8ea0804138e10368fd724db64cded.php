<?php
/*  © 2013 eBay Inc., All Rights Reserved */
/* Licensed under CDDL 1.0 -  http://opensource.org/licenses/cddl1.php */
//show all errors - useful whilst developing
error_reporting(E_ALL);
// these keys can be obtained by registering at http://developer.ebay.com
$production         = true;   // toggle to true if going against production
// $compatabilityLevel = 967;    // eBay API version
$compatabilityLevel = App::getCompatabilityLevel();
?>
<?php if($production): ?>
  <?php
  $devID = App::getDevId();
  $appID = App::getAppId();
  $certID = App::getCertId();
  $userToken = App::getUserToken();
  $serverUrl = App::getServerUrl();
  // $devID = '63cff0bb-3740-47e3-9dc8-d69c0c9c61e9';   // these prod keys are different from sandbox keys
  // $appID = 'HammadSa-Accounta-PRD-72a090144-5a710bd7';
  // $certID = 'PRD-2a0901442915-d52d-480a-a169-e2f0';
  //set the Server to use (Sandbox or Production)
  // $serverUrl = 'https://api.ebay.com/ws/api.dll';

  /*$userToken = ("v^1.1#i^1#r^0#f^0#I^3#p^3#t^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");
  */
?>
<?php else: ?>
  <?php
  // sandbox (test) environment
  $devID = 'DDD_SAND';         // insert your devID for sandbox
  $appID = 'AAA_SAND';   // different from prod keys
  $certID = 'CCC_SAND';  // need three 'keys' and one token
  //set the Server to use (Sandbox or Production)
  $serverUrl = 'https://api.sandbox.ebay.com/ws/api.dll';
  // the token representing the eBay user to assign the call with
  // this token is a long string - don't insert new lines - different from prod token
  $userToken = 'SANDBOX_TOKEN';
  ?>
<?php endif; ?>
