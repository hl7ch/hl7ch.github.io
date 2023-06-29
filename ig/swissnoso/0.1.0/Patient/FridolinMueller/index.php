<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/0.1.0/Patient-FridolinMueller.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/0.1.0/Patient-FridolinMueller.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/0.1.0/Patient-FridolinMueller.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/0.1.0/Patient-FridolinMueller.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/0.1.0/Patient-FridolinMueller.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/0.1.0/Patient-FridolinMueller.html');
else 
  Redirect('http://fhir.ch/ig/swissnoso/0.1.0/Patient-FridolinMueller.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
