<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/ValueSet-ch-rad-order-guidance-for-action.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/ValueSet-ch-rad-order-guidance-for-action.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/ValueSet-ch-rad-order-guidance-for-action.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/ValueSet-ch-rad-order-guidance-for-action.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/ValueSet-ch-rad-order-guidance-for-action.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-rad-order/ValueSet-ch-rad-order-guidance-for-action.html');
else 
  Redirect('http://fhir.ch/ig/ch-rad-order/ValueSet-ch-rad-order-guidance-for-action.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
