<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/Condition-12d8debe-5e03-465d-83f3-17675be9db4a.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/Condition-12d8debe-5e03-465d-83f3-17675be9db4a.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/Condition-12d8debe-5e03-465d-83f3-17675be9db4a.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/Condition-12d8debe-5e03-465d-83f3-17675be9db4a.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/Condition-12d8debe-5e03-465d-83f3-17675be9db4a.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/Condition-12d8debe-5e03-465d-83f3-17675be9db4a.html');
else 
  Redirect('http://fhir.ch/ig/ch-ips/1.0.0/Condition-12d8debe-5e03-465d-83f3-17675be9db4a.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
