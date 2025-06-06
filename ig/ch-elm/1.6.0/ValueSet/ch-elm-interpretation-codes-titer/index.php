<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.6.0/ValueSet-ch-elm-interpretation-codes-titer.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.6.0/ValueSet-ch-elm-interpretation-codes-titer.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.6.0/ValueSet-ch-elm-interpretation-codes-titer.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.6.0/ValueSet-ch-elm-interpretation-codes-titer.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.6.0/ValueSet-ch-elm-interpretation-codes-titer.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.6.0/ValueSet-ch-elm-interpretation-codes-titer.html');
else 
  Redirect('http://fhir.ch/ig/ch-elm/1.6.0/ValueSet-ch-elm-interpretation-codes-titer.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
