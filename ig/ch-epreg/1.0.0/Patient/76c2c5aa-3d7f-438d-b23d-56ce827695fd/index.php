<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Patient-76c2c5aa-3d7f-438d-b23d-56ce827695fd.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Patient-76c2c5aa-3d7f-438d-b23d-56ce827695fd.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Patient-76c2c5aa-3d7f-438d-b23d-56ce827695fd.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Patient-76c2c5aa-3d7f-438d-b23d-56ce827695fd.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Patient-76c2c5aa-3d7f-438d-b23d-56ce827695fd.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Patient-76c2c5aa-3d7f-438d-b23d-56ce827695fd.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Patient-76c2c5aa-3d7f-438d-b23d-56ce827695fd.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
