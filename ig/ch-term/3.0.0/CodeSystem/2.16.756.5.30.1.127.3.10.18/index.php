<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.0.0/CodeSystem-2.16.756.5.30.1.127.3.10.18.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.0.0/CodeSystem-2.16.756.5.30.1.127.3.10.18.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.0.0/CodeSystem-2.16.756.5.30.1.127.3.10.18.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.0.0/CodeSystem-2.16.756.5.30.1.127.3.10.18.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.0.0/CodeSystem-2.16.756.5.30.1.127.3.10.18.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.0.0/CodeSystem-2.16.756.5.30.1.127.3.10.18.html');
else 
  Redirect('http://fhir.ch/ig/ch-term/3.0.0/CodeSystem-2.16.756.5.30.1.127.3.10.18.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
