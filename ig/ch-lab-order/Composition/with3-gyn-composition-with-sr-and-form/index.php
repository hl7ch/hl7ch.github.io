<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-order/2.0.0/Composition-with3-gyn-composition-with-sr-and-form.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-order/2.0.0/Composition-with3-gyn-composition-with-sr-and-form.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-order/2.0.0/Composition-with3-gyn-composition-with-sr-and-form.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-order/2.0.0/Composition-with3-gyn-composition-with-sr-and-form.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-order/2.0.0/Composition-with3-gyn-composition-with-sr-and-form.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-lab-order/2.0.0/Composition-with3-gyn-composition-with-sr-and-form.html');
else 
  Redirect('http://fhir.ch/ig/ch-lab-order/2.0.0/Composition-with3-gyn-composition-with-sr-and-form.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
