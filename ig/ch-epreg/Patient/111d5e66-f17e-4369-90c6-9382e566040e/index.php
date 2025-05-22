<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Patient-111d5e66-f17e-4369-90c6-9382e566040e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Patient-111d5e66-f17e-4369-90c6-9382e566040e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Patient-111d5e66-f17e-4369-90c6-9382e566040e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Patient-111d5e66-f17e-4369-90c6-9382e566040e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Patient-111d5e66-f17e-4369-90c6-9382e566040e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Patient-111d5e66-f17e-4369-90c6-9382e566040e.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Patient-111d5e66-f17e-4369-90c6-9382e566040e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
