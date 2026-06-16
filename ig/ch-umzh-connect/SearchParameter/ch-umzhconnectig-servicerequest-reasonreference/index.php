<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-umzh-connect/1.0.0-ballot/SearchParameter-ch-umzhconnectig-servicerequest-reasonreference.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-umzh-connect/1.0.0-ballot/SearchParameter-ch-umzhconnectig-servicerequest-reasonreference.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-umzh-connect/1.0.0-ballot/SearchParameter-ch-umzhconnectig-servicerequest-reasonreference.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-umzh-connect/1.0.0-ballot/SearchParameter-ch-umzhconnectig-servicerequest-reasonreference.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-umzh-connect/1.0.0-ballot/SearchParameter-ch-umzhconnectig-servicerequest-reasonreference.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-umzh-connect/1.0.0-ballot/SearchParameter-ch-umzhconnectig-servicerequest-reasonreference.html');
else 
  Redirect('http://fhir.ch/ig/ch-umzh-connect/1.0.0-ballot/SearchParameter-ch-umzhconnectig-servicerequest-reasonreference.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
