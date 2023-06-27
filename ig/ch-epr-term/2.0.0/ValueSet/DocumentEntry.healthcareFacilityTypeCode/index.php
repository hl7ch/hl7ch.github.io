<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-term/index.html/ValueSet-DocumentEntry.healthcareFacilityTypeCode.json');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-term/index.html/ValueSet-DocumentEntry.healthcareFacilityTypeCode.html');
else 
  Redirect('http://fhir.ch/ig/ch-epr-term/index.html/ValueSet-DocumentEntry.healthcareFacilityTypeCode.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
