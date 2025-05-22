<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Encounter-833fd8f2-b75f-4dba-990f-6c46aa468d51.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Encounter-833fd8f2-b75f-4dba-990f-6c46aa468d51.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Encounter-833fd8f2-b75f-4dba-990f-6c46aa468d51.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Encounter-833fd8f2-b75f-4dba-990f-6c46aa468d51.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Encounter-833fd8f2-b75f-4dba-990f-6c46aa468d51.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Encounter-833fd8f2-b75f-4dba-990f-6c46aa468d51.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Encounter-833fd8f2-b75f-4dba-990f-6c46aa468d51.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
