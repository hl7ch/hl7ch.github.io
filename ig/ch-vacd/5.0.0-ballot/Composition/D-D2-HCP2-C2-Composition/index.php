<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/5.0.0-ballot/Composition-D-D2-HCP2-C2-Composition.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/5.0.0-ballot/Composition-D-D2-HCP2-C2-Composition.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/5.0.0-ballot/Composition-D-D2-HCP2-C2-Composition.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/5.0.0-ballot/Composition-D-D2-HCP2-C2-Composition.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/5.0.0-ballot/Composition-D-D2-HCP2-C2-Composition.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/5.0.0-ballot/Composition-D-D2-HCP2-C2-Composition.html');
else 
  Redirect('http://fhir.ch/ig/ch-vacd/5.0.0-ballot/Composition-D-D2-HCP2-C2-Composition.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
