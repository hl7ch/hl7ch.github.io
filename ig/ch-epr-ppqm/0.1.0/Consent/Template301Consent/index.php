<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-ppqm/0.1.0/Consent-Template301Consent.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-ppqm/0.1.0/Consent-Template301Consent.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-ppqm/0.1.0/Consent-Template301Consent.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-ppqm/0.1.0/Consent-Template301Consent.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-ppqm/0.1.0/Consent-Template301Consent.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-ppqm/0.1.0/Consent-Template301Consent.html');
else 
  Redirect('http://fhir.ch/ig/ch-epr-ppqm/0.1.0/Consent-Template301Consent.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
