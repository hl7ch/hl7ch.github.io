<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0-ballot/CodeSystem-ch-epl-foph-gamme.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0-ballot/CodeSystem-ch-epl-foph-gamme.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0-ballot/CodeSystem-ch-epl-foph-gamme.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0-ballot/CodeSystem-ch-epl-foph-gamme.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0-ballot/CodeSystem-ch-epl-foph-gamme.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0-ballot/CodeSystem-ch-epl-foph-gamme.html');
else 
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0-ballot/CodeSystem-ch-epl-foph-gamme.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
