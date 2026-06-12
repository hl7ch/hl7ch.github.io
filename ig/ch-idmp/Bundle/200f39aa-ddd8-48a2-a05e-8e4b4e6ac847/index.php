<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.html');
else 
  Redirect('http://fhir.ch/ig/ch-idmp/1.0.0-ballot/Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
