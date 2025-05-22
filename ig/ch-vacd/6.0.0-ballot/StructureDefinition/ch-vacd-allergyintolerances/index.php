<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/StructureDefinition-ch-vacd-allergyintolerances.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/StructureDefinition-ch-vacd-allergyintolerances.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/StructureDefinition-ch-vacd-allergyintolerances.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/StructureDefinition-ch-vacd-allergyintolerances.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/StructureDefinition-ch-vacd-allergyintolerances.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/StructureDefinition-ch-vacd-allergyintolerances.html');
else 
  Redirect('http://fhir.ch/ig/ch-vacd/6.0.0-ballot/StructureDefinition-ch-vacd-allergyintolerances.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
