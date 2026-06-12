<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.html');
else 
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
