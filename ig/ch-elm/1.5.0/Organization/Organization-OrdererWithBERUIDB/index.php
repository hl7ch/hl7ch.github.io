<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.5.0/Organization-Organization-OrdererWithBERUIDB.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.5.0/Organization-Organization-OrdererWithBERUIDB.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.5.0/Organization-Organization-OrdererWithBERUIDB.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.5.0/Organization-Organization-OrdererWithBERUIDB.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.5.0/Organization-Organization-OrdererWithBERUIDB.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.5.0/Organization-Organization-OrdererWithBERUIDB.html');
else 
  Redirect('http://fhir.ch/ig/ch-elm/1.5.0/Organization-Organization-OrdererWithBERUIDB.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
