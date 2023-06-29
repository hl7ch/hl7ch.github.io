<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/Bundle-order-referral-form-mapped.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/Bundle-order-referral-form-mapped.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/Bundle-order-referral-form-mapped.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/Bundle-order-referral-form-mapped.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/Bundle-order-referral-form-mapped.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/Bundle-order-referral-form-mapped.html');
else 
  Redirect('http://fhir.ch/ig/ch-orf/Bundle-order-referral-form-mapped.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
