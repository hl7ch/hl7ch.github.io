<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.1/Questionnaire-ch-orf-module-receivercopy.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.1/Questionnaire-ch-orf-module-receivercopy.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.1/Questionnaire-ch-orf-module-receivercopy.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.1/Questionnaire-ch-orf-module-receivercopy.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.1/Questionnaire-ch-orf-module-receivercopy.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-orf/3.0.1/Questionnaire-ch-orf-module-receivercopy.html');
else 
  Redirect('http://fhir.ch/ig/ch-orf/3.0.1/Questionnaire-ch-orf-module-receivercopy.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
