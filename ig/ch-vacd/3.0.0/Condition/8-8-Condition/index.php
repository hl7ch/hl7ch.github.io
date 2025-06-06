<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/3.0.0/Condition-8-8-Condition.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/3.0.0/Condition-8-8-Condition.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/3.0.0/Condition-8-8-Condition.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/3.0.0/Condition-8-8-Condition.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/3.0.0/Condition-8-8-Condition.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/3.0.0/Condition-8-8-Condition.html');
else 
  Redirect('http://fhir.ch/ig/ch-vacd/3.0.0/Condition-8-8-Condition.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
