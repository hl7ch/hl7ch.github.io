<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.3.1/Bundle-ex-findDocumentReferencesResponse.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.3.1/Bundle-ex-findDocumentReferencesResponse.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.3.1/Bundle-ex-findDocumentReferencesResponse.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.3.1/Bundle-ex-findDocumentReferencesResponse.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.3.1/Bundle-ex-findDocumentReferencesResponse.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.3.1/Bundle-ex-findDocumentReferencesResponse.html');
else 
  Redirect('http://fhir.ch/ig/ch-elm/1.3.1/Bundle-ex-findDocumentReferencesResponse.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
