<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.2.0/ConceptMap-ch-vacd-targetdiseases-vaccines-cm.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.2.0/ConceptMap-ch-vacd-targetdiseases-vaccines-cm.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.2.0/ConceptMap-ch-vacd-targetdiseases-vaccines-cm.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.2.0/ConceptMap-ch-vacd-targetdiseases-vaccines-cm.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.2.0/ConceptMap-ch-vacd-targetdiseases-vaccines-cm.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.2.0/ConceptMap-ch-vacd-targetdiseases-vaccines-cm.html');
else 
  Redirect('http://fhir.ch/ig/ch-term/3.2.0/ConceptMap-ch-vacd-targetdiseases-vaccines-cm.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
