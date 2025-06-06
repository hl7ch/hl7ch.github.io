<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.2.0/ValueSet-ech-46-emailcategory.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.2.0/ValueSet-ech-46-emailcategory.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.2.0/ValueSet-ech-46-emailcategory.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.2.0/ValueSet-ech-46-emailcategory.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.2.0/ValueSet-ech-46-emailcategory.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.2.0/ValueSet-ech-46-emailcategory.html');
else 
  Redirect('http://fhir.ch/ig/ch-term/3.2.0/ValueSet-ech-46-emailcategory.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
