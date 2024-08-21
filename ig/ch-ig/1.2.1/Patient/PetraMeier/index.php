<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ig/1.2.1/Patient-PetraMeier.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ig/1.2.1/Patient-PetraMeier.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ig/1.2.1/Patient-PetraMeier.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ig/1.2.1/Patient-PetraMeier.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ig/1.2.1/Patient-PetraMeier.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ig/1.2.1/Patient-PetraMeier.html');
else 
  Redirect('http://fhir.ch/ig/ch-ig/1.2.1/Patient-PetraMeier.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
