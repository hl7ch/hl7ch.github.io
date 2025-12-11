<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0/PackagedProductDefinition-PMP-Keytruda-100mg-4ml-Solution-for-Infusion.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0/PackagedProductDefinition-PMP-Keytruda-100mg-4ml-Solution-for-Infusion.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0/PackagedProductDefinition-PMP-Keytruda-100mg-4ml-Solution-for-Infusion.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0/PackagedProductDefinition-PMP-Keytruda-100mg-4ml-Solution-for-Infusion.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0/PackagedProductDefinition-PMP-Keytruda-100mg-4ml-Solution-for-Infusion.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0/PackagedProductDefinition-PMP-Keytruda-100mg-4ml-Solution-for-Infusion.html');
else 
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0/PackagedProductDefinition-PMP-Keytruda-100mg-4ml-Solution-for-Infusion.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
