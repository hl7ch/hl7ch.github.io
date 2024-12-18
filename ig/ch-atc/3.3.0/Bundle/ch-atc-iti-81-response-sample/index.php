<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.3.0/Bundle-ch-atc-iti-81-response-sample.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.3.0/Bundle-ch-atc-iti-81-response-sample.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.3.0/Bundle-ch-atc-iti-81-response-sample.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.3.0/Bundle-ch-atc-iti-81-response-sample.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.3.0/Bundle-ch-atc-iti-81-response-sample.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-atc/3.3.0/Bundle-ch-atc-iti-81-response-sample.html');
else 
  Redirect('http://fhir.ch/ig/ch-atc/3.3.0/Bundle-ch-atc-iti-81-response-sample.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
