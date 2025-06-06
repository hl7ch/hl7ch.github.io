<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.html');
else 
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
