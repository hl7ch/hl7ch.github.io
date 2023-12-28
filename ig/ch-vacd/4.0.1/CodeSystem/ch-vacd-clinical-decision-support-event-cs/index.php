<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/4.0.1/CodeSystem-ch-vacd-clinical-decision-support-event-cs.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/4.0.1/CodeSystem-ch-vacd-clinical-decision-support-event-cs.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/4.0.1/CodeSystem-ch-vacd-clinical-decision-support-event-cs.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/4.0.1/CodeSystem-ch-vacd-clinical-decision-support-event-cs.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/4.0.1/CodeSystem-ch-vacd-clinical-decision-support-event-cs.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/4.0.1/CodeSystem-ch-vacd-clinical-decision-support-event-cs.html');
else 
  Redirect('http://fhir.ch/ig/ch-vacd/4.0.1/CodeSystem-ch-vacd-clinical-decision-support-event-cs.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
