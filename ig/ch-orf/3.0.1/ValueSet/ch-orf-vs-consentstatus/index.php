<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.1/ValueSet-ch-orf-vs-consentstatus.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.1/ValueSet-ch-orf-vs-consentstatus.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.1/ValueSet-ch-orf-vs-consentstatus.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.1/ValueSet-ch-orf-vs-consentstatus.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.1/ValueSet-ch-orf-vs-consentstatus.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.1/ValueSet-ch-orf-vs-consentstatus.html');
else 
  Redirect('http://fhir.ch/ig/ch-orf/3.0.1/ValueSet-ch-orf-vs-consentstatus.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
