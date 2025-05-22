<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/PractitionerRole-e1b736e3-10bb-41aa-8d17-c7ba28895880.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/PractitionerRole-e1b736e3-10bb-41aa-8d17-c7ba28895880.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/PractitionerRole-e1b736e3-10bb-41aa-8d17-c7ba28895880.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/PractitionerRole-e1b736e3-10bb-41aa-8d17-c7ba28895880.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/PractitionerRole-e1b736e3-10bb-41aa-8d17-c7ba28895880.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/PractitionerRole-e1b736e3-10bb-41aa-8d17-c7ba28895880.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0-ballot/PractitionerRole-e1b736e3-10bb-41aa-8d17-c7ba28895880.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
