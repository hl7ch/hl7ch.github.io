<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.1.0/ValueSet-ch-vacd-ch-vaccination-plan-immunizations-vs.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.1.0/ValueSet-ch-vacd-ch-vaccination-plan-immunizations-vs.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.1.0/ValueSet-ch-vacd-ch-vaccination-plan-immunizations-vs.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.1.0/ValueSet-ch-vacd-ch-vaccination-plan-immunizations-vs.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.1.0/ValueSet-ch-vacd-ch-vaccination-plan-immunizations-vs.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-term/3.1.0/ValueSet-ch-vacd-ch-vaccination-plan-immunizations-vs.html');
else 
  Redirect('http://fhir.ch/ig/ch-term/3.1.0/ValueSet-ch-vacd-ch-vaccination-plan-immunizations-vs.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
