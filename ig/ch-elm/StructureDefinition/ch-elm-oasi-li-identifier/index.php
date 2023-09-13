<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.0.0-trialuse/StructureDefinition-ch-elm-oasi-li-identifier.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.0.0-trialuse/StructureDefinition-ch-elm-oasi-li-identifier.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.0.0-trialuse/StructureDefinition-ch-elm-oasi-li-identifier.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.0.0-trialuse/StructureDefinition-ch-elm-oasi-li-identifier.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.0.0-trialuse/StructureDefinition-ch-elm-oasi-li-identifier.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.0.0-trialuse/StructureDefinition-ch-elm-oasi-li-identifier.html');
else 
  Redirect('http://fhir.ch/ig/ch-elm/1.0.0-trialuse/StructureDefinition-ch-elm-oasi-li-identifier.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
