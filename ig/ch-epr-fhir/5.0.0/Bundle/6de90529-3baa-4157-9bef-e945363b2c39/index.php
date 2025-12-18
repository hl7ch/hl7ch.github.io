<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0/Bundle-6de90529-3baa-4157-9bef-e945363b2c39.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0/Bundle-6de90529-3baa-4157-9bef-e945363b2c39.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0/Bundle-6de90529-3baa-4157-9bef-e945363b2c39.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0/Bundle-6de90529-3baa-4157-9bef-e945363b2c39.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0/Bundle-6de90529-3baa-4157-9bef-e945363b2c39.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0/Bundle-6de90529-3baa-4157-9bef-e945363b2c39.html');
else 
  Redirect('http://fhir.ch/ig/ch-epr-fhir/5.0.0/Bundle-6de90529-3baa-4157-9bef-e945363b2c39.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
