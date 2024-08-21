<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ig/1.2.1/ValueSet-ch-ig-example-translation.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ig/1.2.1/ValueSet-ch-ig-example-translation.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ig/1.2.1/ValueSet-ch-ig-example-translation.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ig/1.2.1/ValueSet-ch-ig-example-translation.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ig/1.2.1/ValueSet-ch-ig-example-translation.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ig/1.2.1/ValueSet-ch-ig-example-translation.html');
else 
  Redirect('http://fhir.ch/ig/ch-ig/1.2.1/ValueSet-ch-ig-example-translation.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
