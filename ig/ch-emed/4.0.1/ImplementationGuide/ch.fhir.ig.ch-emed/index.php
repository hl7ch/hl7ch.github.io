<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.1/ImplementationGuide-ch.fhir.ig.ch-emed.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.1/ImplementationGuide-ch.fhir.ig.ch-emed.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.1/ImplementationGuide-ch.fhir.ig.ch-emed.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.1/ImplementationGuide-ch.fhir.ig.ch-emed.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.1/ImplementationGuide-ch.fhir.ig.ch-emed.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/4.0.1/ImplementationGuide-ch.fhir.ig.ch-emed.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed/4.0.1/ImplementationGuide-ch.fhir.ig.ch-emed.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
