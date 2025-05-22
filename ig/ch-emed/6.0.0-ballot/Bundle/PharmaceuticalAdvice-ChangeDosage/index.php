<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/6.0.0-ballot/Bundle-PharmaceuticalAdvice-ChangeDosage.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/6.0.0-ballot/Bundle-PharmaceuticalAdvice-ChangeDosage.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/6.0.0-ballot/Bundle-PharmaceuticalAdvice-ChangeDosage.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/6.0.0-ballot/Bundle-PharmaceuticalAdvice-ChangeDosage.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/6.0.0-ballot/Bundle-PharmaceuticalAdvice-ChangeDosage.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed/6.0.0-ballot/Bundle-PharmaceuticalAdvice-ChangeDosage.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed/6.0.0-ballot/Bundle-PharmaceuticalAdvice-ChangeDosage.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
