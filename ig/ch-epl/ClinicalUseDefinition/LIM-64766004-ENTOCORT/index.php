<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.1/ClinicalUseDefinition-LIM-64766004-ENTOCORT.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.1/ClinicalUseDefinition-LIM-64766004-ENTOCORT.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.1/ClinicalUseDefinition-LIM-64766004-ENTOCORT.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.1/ClinicalUseDefinition-LIM-64766004-ENTOCORT.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.1/ClinicalUseDefinition-LIM-64766004-ENTOCORT.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.1/ClinicalUseDefinition-LIM-64766004-ENTOCORT.html');
else 
  Redirect('http://fhir.ch/ig/ch-epl/1.0.1/ClinicalUseDefinition-LIM-64766004-ENTOCORT.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
