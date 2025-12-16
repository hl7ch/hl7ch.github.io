<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Organization-fbe019f1-6574-40be-940f-d03da0c743db.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Organization-fbe019f1-6574-40be-940f-d03da0c743db.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Organization-fbe019f1-6574-40be-940f-d03da0c743db.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Organization-fbe019f1-6574-40be-940f-d03da0c743db.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Organization-fbe019f1-6574-40be-940f-d03da0c743db.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Organization-fbe019f1-6574-40be-940f-d03da0c743db.html');
else 
  Redirect('http://fhir.ch/ig/ch-epreg/1.0.0/Organization-fbe019f1-6574-40be-940f-d03da0c743db.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
