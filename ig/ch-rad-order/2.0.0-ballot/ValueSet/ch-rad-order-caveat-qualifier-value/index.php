<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/2.0.0-ballot/ValueSet-ch-rad-order-caveat-qualifier-value.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/2.0.0-ballot/ValueSet-ch-rad-order-caveat-qualifier-value.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/2.0.0-ballot/ValueSet-ch-rad-order-caveat-qualifier-value.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/2.0.0-ballot/ValueSet-ch-rad-order-caveat-qualifier-value.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/2.0.0-ballot/ValueSet-ch-rad-order-caveat-qualifier-value.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/2.0.0-ballot/ValueSet-ch-rad-order-caveat-qualifier-value.html');
else 
  Redirect('http://fhir.ch/ig/ch-rad-order/2.0.0-ballot/ValueSet-ch-rad-order-caveat-qualifier-value.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
