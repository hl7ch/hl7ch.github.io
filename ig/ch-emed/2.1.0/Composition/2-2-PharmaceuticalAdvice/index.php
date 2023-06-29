<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/Composition-2-2-PharmaceuticalAdvice.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/Composition-2-2-PharmaceuticalAdvice.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/Composition-2-2-PharmaceuticalAdvice.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/Composition-2-2-PharmaceuticalAdvice.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/Composition-2-2-PharmaceuticalAdvice.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/Composition-2-2-PharmaceuticalAdvice.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed/2.1.0/Composition-2-2-PharmaceuticalAdvice.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
