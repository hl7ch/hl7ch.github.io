<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.1.0/ValueSet-ech-46-internetcategory.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.1.0/ValueSet-ech-46-internetcategory.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.1.0/ValueSet-ech-46-internetcategory.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.1.0/ValueSet-ech-46-internetcategory.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.1.0/ValueSet-ech-46-internetcategory.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.1.0/ValueSet-ech-46-internetcategory.html');
else 
  Redirect('http://fhir.ch/ig/ch-term/3.1.0/ValueSet-ech-46-internetcategory.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
