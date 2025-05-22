<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/Device-523fa1b9-f24d-4ae6-aa98-92d7f57b2066.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/Device-523fa1b9-f24d-4ae6-aa98-92d7f57b2066.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/Device-523fa1b9-f24d-4ae6-aa98-92d7f57b2066.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/Device-523fa1b9-f24d-4ae6-aa98-92d7f57b2066.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/Device-523fa1b9-f24d-4ae6-aa98-92d7f57b2066.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/Device-523fa1b9-f24d-4ae6-aa98-92d7f57b2066.html');
else 
  Redirect('http://fhir.ch/ig/ch-lab-report/2.0.0-ballot/Device-523fa1b9-f24d-4ae6-aa98-92d7f57b2066.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
