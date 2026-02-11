<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/3.0.0/Bundle-DocumentUCSF1CARAPMP004PMLCEmpty.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/3.0.0/Bundle-DocumentUCSF1CARAPMP004PMLCEmpty.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/3.0.0/Bundle-DocumentUCSF1CARAPMP004PMLCEmpty.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/3.0.0/Bundle-DocumentUCSF1CARAPMP004PMLCEmpty.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/3.0.0/Bundle-DocumentUCSF1CARAPMP004PMLCEmpty.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-emed-epr/3.0.0/Bundle-DocumentUCSF1CARAPMP004PMLCEmpty.html');
else 
  Redirect('http://fhir.ch/ig/ch-emed-epr/3.0.0/Bundle-DocumentUCSF1CARAPMP004PMLCEmpty.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
