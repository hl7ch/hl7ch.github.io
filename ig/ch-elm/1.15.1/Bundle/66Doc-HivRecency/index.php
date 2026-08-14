<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.1/Bundle-66Doc-HivRecency.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.1/Bundle-66Doc-HivRecency.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.1/Bundle-66Doc-HivRecency.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.1/Bundle-66Doc-HivRecency.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.1/Bundle-66Doc-HivRecency.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.1/Bundle-66Doc-HivRecency.html');
else 
  Redirect('https://fhir.ch/ig/ch-elm/1.15.1/Bundle-66Doc-HivRecency.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
