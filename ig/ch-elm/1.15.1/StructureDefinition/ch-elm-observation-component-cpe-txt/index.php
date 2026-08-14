<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.1/StructureDefinition-ch-elm-observation-component-cpe-txt.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.1/StructureDefinition-ch-elm-observation-component-cpe-txt.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.1/StructureDefinition-ch-elm-observation-component-cpe-txt.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.1/StructureDefinition-ch-elm-observation-component-cpe-txt.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.1/StructureDefinition-ch-elm-observation-component-cpe-txt.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://fhir.ch/ig/ch-elm/1.15.1/StructureDefinition-ch-elm-observation-component-cpe-txt.html');
else 
  Redirect('https://fhir.ch/ig/ch-elm/1.15.1/StructureDefinition-ch-elm-observation-component-cpe-txt.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
