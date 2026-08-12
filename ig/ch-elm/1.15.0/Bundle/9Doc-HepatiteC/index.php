<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/Bundle-9Doc-HepatiteC.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/Bundle-9Doc-HepatiteC.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/Bundle-9Doc-HepatiteC.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/Bundle-9Doc-HepatiteC.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/Bundle-9Doc-HepatiteC.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/Bundle-9Doc-HepatiteC.html');
else 
  Redirect('https://fhir.ch/ig/ch-elm/1.15.0/Bundle-9Doc-HepatiteC.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
