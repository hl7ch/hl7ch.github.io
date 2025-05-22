<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/StructureDefinition-ch-vacd-recommendation-response-messageheader.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/StructureDefinition-ch-vacd-recommendation-response-messageheader.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/StructureDefinition-ch-vacd-recommendation-response-messageheader.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/StructureDefinition-ch-vacd-recommendation-response-messageheader.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/StructureDefinition-ch-vacd-recommendation-response-messageheader.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/StructureDefinition-ch-vacd-recommendation-response-messageheader.html');
else 
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/StructureDefinition-ch-vacd-recommendation-response-messageheader.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
