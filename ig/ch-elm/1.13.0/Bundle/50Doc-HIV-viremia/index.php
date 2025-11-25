<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/Bundle-50Doc-HIV-viremia.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/Bundle-50Doc-HIV-viremia.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/Bundle-50Doc-HIV-viremia.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/Bundle-50Doc-HIV-viremia.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/Bundle-50Doc-HIV-viremia.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/Bundle-50Doc-HIV-viremia.html');
else 
  Redirect('http://fhir.ch/ig/ch-elm/1.13.0/Bundle-50Doc-HIV-viremia.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
