<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/Procedure-InsertCatheter2-20210709-181521210706.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/Procedure-InsertCatheter2-20210709-181521210706.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/Procedure-InsertCatheter2-20210709-181521210706.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/Procedure-InsertCatheter2-20210709-181521210706.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/Procedure-InsertCatheter2-20210709-181521210706.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/swissnoso/Procedure-InsertCatheter2-20210709-181521210706.html');
else 
  Redirect('http://fhir.ch/ig/swissnoso/Procedure-InsertCatheter2-20210709-181521210706.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
