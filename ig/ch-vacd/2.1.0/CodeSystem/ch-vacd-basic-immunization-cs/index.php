<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/CodeSystem-ch-vacd-basic-immunization-cs.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/CodeSystem-ch-vacd-basic-immunization-cs.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/CodeSystem-ch-vacd-basic-immunization-cs.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/CodeSystem-ch-vacd-basic-immunization-cs.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/CodeSystem-ch-vacd-basic-immunization-cs.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/CodeSystem-ch-vacd-basic-immunization-cs.html');
else 
  Redirect('http://fhir.ch/ig/ch-vacd/2.1.0/CodeSystem-ch-vacd-basic-immunization-cs.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
