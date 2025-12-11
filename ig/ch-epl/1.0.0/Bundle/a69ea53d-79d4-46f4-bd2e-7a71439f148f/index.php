<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0/Bundle-a69ea53d-79d4-46f4-bd2e-7a71439f148f.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0/Bundle-a69ea53d-79d4-46f4-bd2e-7a71439f148f.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0/Bundle-a69ea53d-79d4-46f4-bd2e-7a71439f148f.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0/Bundle-a69ea53d-79d4-46f4-bd2e-7a71439f148f.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0/Bundle-a69ea53d-79d4-46f4-bd2e-7a71439f148f.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0/Bundle-a69ea53d-79d4-46f4-bd2e-7a71439f148f.html');
else 
  Redirect('http://fhir.ch/ig/ch-epl/1.0.0/Bundle-a69ea53d-79d4-46f4-bd2e-7a71439f148f.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
