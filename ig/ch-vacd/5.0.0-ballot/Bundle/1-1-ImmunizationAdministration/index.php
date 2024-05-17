<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/5.0.0-ballot/Bundle-1-1-ImmunizationAdministration.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/5.0.0-ballot/Bundle-1-1-ImmunizationAdministration.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/5.0.0-ballot/Bundle-1-1-ImmunizationAdministration.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/5.0.0-ballot/Bundle-1-1-ImmunizationAdministration.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/5.0.0-ballot/Bundle-1-1-ImmunizationAdministration.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/5.0.0-ballot/Bundle-1-1-ImmunizationAdministration.html');
else 
  Redirect('http://fhir.ch/ig/ch-vacd/5.0.0-ballot/Bundle-1-1-ImmunizationAdministration.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
