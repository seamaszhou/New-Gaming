
<?php require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new \Facebook\Facebook([
  'app_id' => '1055294881300817',
  'app_secret' => '87d8ef0434e7e19b3399ae6bec529a48',
  'default_graph_version' => 'v2.10',
  //'default_access_token' => '{access-token}', // optional
]);

// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
//   $helper = $fb->getRedirectLoginHelper();
//   $helper = $fb->getJavaScriptHelper();
//   $helper = $fb->getCanvasHelper();
//   $helper = $fb->getPageTabHelper();

try {
  // Returns a `FacebookFacebookResponse` object
  $response = $fb->get(
    '/303014346900529/insights/page_fans',
    'EAAOZCyPyIgVEBAMZAVkhDWdZAGbclfYBTOczx62uilKL6ovdwcyQ8HBfcCR3tDYy2t2SOMODeF6tqUrJXSNoMA21EU8uk5g4UmS5S8DRoYrc8I4RLfaFxZBgizHW1QXz7TJbLO5YlCH6KgowW0jF6FgdCSKH7ZCxqNbz5B9ZAJuaaWMUZAn3NZC0'
  );
} catch(FacebookExceptionsFacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(FacebookExceptionsFacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$graphEdge = $response->getGraphList();

$obj = json_decode($graphEdge);
print_r($obj[0]->values[0]->value);

?>
