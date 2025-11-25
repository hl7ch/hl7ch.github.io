<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/ValueSet-ch-elm-results-component-antibiotic-cpe.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/ValueSet-ch-elm-results-component-antibiotic-cpe.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/ValueSet-ch-elm-results-component-antibiotic-cpe.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/ValueSet-ch-elm-results-component-antibiotic-cpe.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/ValueSet-ch-elm-results-component-antibiotic-cpe.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/ValueSet-ch-elm-results-component-antibiotic-cpe.html');
else 
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/ValueSet-ch-elm-results-component-antibiotic-cpe.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
