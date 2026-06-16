<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-umzh-connect/1.0.0-ballot/QuestionnaireResponse-QuestionnaireResponseSmokingStatus.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-umzh-connect/1.0.0-ballot/QuestionnaireResponse-QuestionnaireResponseSmokingStatus.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-umzh-connect/1.0.0-ballot/QuestionnaireResponse-QuestionnaireResponseSmokingStatus.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-umzh-connect/1.0.0-ballot/QuestionnaireResponse-QuestionnaireResponseSmokingStatus.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-umzh-connect/1.0.0-ballot/QuestionnaireResponse-QuestionnaireResponseSmokingStatus.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-umzh-connect/1.0.0-ballot/QuestionnaireResponse-QuestionnaireResponseSmokingStatus.html');
else 
  Redirect('http://fhir.ch/ig/ch-umzh-connect/1.0.0-ballot/QuestionnaireResponse-QuestionnaireResponseSmokingStatus.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
