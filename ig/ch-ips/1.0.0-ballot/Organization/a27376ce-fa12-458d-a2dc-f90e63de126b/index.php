<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/Organization-a27376ce-fa12-458d-a2dc-f90e63de126b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/Organization-a27376ce-fa12-458d-a2dc-f90e63de126b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/Organization-a27376ce-fa12-458d-a2dc-f90e63de126b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/Organization-a27376ce-fa12-458d-a2dc-f90e63de126b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/Organization-a27376ce-fa12-458d-a2dc-f90e63de126b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/Organization-a27376ce-fa12-458d-a2dc-f90e63de126b.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0-ballot/Organization-a27376ce-fa12-458d-a2dc-f90e63de126b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
