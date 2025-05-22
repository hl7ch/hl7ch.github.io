<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-84869994-4348-4ad3-95ee-d9b0faf75dba.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-84869994-4348-4ad3-95ee-d9b0faf75dba.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-84869994-4348-4ad3-95ee-d9b0faf75dba.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-84869994-4348-4ad3-95ee-d9b0faf75dba.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-84869994-4348-4ad3-95ee-d9b0faf75dba.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-84869994-4348-4ad3-95ee-d9b0faf75dba.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/Observation-84869994-4348-4ad3-95ee-d9b0faf75dba.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
