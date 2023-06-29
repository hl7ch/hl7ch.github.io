<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/Immunization-TCE01-IMMUN2-fr.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/Immunization-TCE01-IMMUN2-fr.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/Immunization-TCE01-IMMUN2-fr.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/Immunization-TCE01-IMMUN2-fr.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/Immunization-TCE01-IMMUN2-fr.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/Immunization-TCE01-IMMUN2-fr.html');
else 
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/Immunization-TCE01-IMMUN2-fr.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
