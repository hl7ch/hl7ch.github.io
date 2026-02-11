<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/3.0.0/ValueSet-ch-emed-epr-amount-quantity-unit-code.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/3.0.0/ValueSet-ch-emed-epr-amount-quantity-unit-code.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/3.0.0/ValueSet-ch-emed-epr-amount-quantity-unit-code.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/3.0.0/ValueSet-ch-emed-epr-amount-quantity-unit-code.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/3.0.0/ValueSet-ch-emed-epr-amount-quantity-unit-code.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/3.0.0/ValueSet-ch-emed-epr-amount-quantity-unit-code.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed-epr/3.0.0/ValueSet-ch-emed-epr-amount-quantity-unit-code.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
