<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-core/7.0.0-ballot/ValueSet-ConsentCategoriesVS.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-core/7.0.0-ballot/ValueSet-ConsentCategoriesVS.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-core/7.0.0-ballot/ValueSet-ConsentCategoriesVS.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-core/7.0.0-ballot/ValueSet-ConsentCategoriesVS.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-core/7.0.0-ballot/ValueSet-ConsentCategoriesVS.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-core/7.0.0-ballot/ValueSet-ConsentCategoriesVS.html');
else 
  Redirect('http://fhir.ch/ig/ch-core/7.0.0-ballot/ValueSet-ConsentCategoriesVS.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
