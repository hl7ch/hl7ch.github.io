<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.0.0/ValueSet-ech-7-cantonflabbreviation.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.0.0/ValueSet-ech-7-cantonflabbreviation.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.0.0/ValueSet-ech-7-cantonflabbreviation.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.0.0/ValueSet-ech-7-cantonflabbreviation.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.0.0/ValueSet-ech-7-cantonflabbreviation.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.0.0/ValueSet-ech-7-cantonflabbreviation.html');
else 
  Redirect('http://fhir.ch/ig/ch-term/3.0.0/ValueSet-ech-7-cantonflabbreviation.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
