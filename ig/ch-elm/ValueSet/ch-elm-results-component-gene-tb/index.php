<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.9.1/ValueSet-ch-elm-results-component-gene-tb.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.9.1/ValueSet-ch-elm-results-component-gene-tb.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.9.1/ValueSet-ch-elm-results-component-gene-tb.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.9.1/ValueSet-ch-elm-results-component-gene-tb.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.9.1/ValueSet-ch-elm-results-component-gene-tb.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.9.1/ValueSet-ch-elm-results-component-gene-tb.html');
else 
  Redirect('http://fhir.ch/ig/ch-elm/1.9.1/ValueSet-ch-elm-results-component-gene-tb.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
