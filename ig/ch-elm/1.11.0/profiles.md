# Profiles - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* **Profiles**

## Profiles

### Overview

That figure illustrates the resources and their references to each other for which profiles are defined to represent the CH ELM laboratory report.

![](profiles.png)

*Fig. 6: Resource Overview*

### Resource Profiles

* [CH ELM Composition: Laboratory Report](StructureDefinition-ch-elm-composition.md) 
This CH ELM base profile constrains the Composition resource for the purpose of laboratory test reports. 

* [CH ELM Composition: Laboratory Report Strict](StructureDefinition-ch-elm-composition-strict.md) 
This CH ELM Composition profile constrains that the section codes have corresponding observation value codes 

* [CH ELM DiagnosticReport: Laboratory Report](StructureDefinition-ch-elm-diagnosticreport.md) 
This CH ELM base profile constrains the DiagnosticReport resource for the purpose of laboratory test reports. 

* [CH ELM Document: Laboratory Report](StructureDefinition-ch-elm-document.md) 
This CH ELM base profile constrains the Bundle resource for the purpose of laboratory test reports. 

* [CH ELM Document: Laboratory Report (strict)](StructureDefinition-ch-elm-document-strict.md) 
CH ELM profile for the Bundle resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element and checking patient name requirements if possible. 

* [CH ELM Observation Component Results: Concentration](StructureDefinition-ch-elm-observation-component-conc.md) 
Concentration as Quantity in observation.component result, see also 'Guidance - Laboratory Result' 

* [CH ELM Observation Results for Genotyping](StructureDefinition-ch-elm-observation-results-laboratory-genotyping.md) 
This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports. 

* [CH ELM Observation Results for Genotyping (strict)](StructureDefinition-ch-elm-observation-results-laboratory-genotyping-strict.md) 
CH ELM profile for the Observation resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element. 

* [CH ELM Observation Results for HIV Recency Testing (strict)](StructureDefinition-ch-elm-observation-results-hiv-recency-strict.md) 
This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports for hiv recency. 

* [CH ELM Observation Results for Microbial susceptibility tests](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility.md) 
This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports. 

* [CH ELM Observation Results for Microbial susceptibility tests (strict)](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility-strict.md) 
CH ELM profile for the Observation resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element. 

* [CH ELM Observation Results for Microbiology studies (set)](StructureDefinition-ch-elm-observation-results-laboratory-microbiology.md) 
This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports. 

* [CH ELM Observation Results for Microbiology studies (set) strict](StructureDefinition-ch-elm-observation-results-laboratory-microbiolgy-strict.md) 
CH ELM profile for the Observation resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element. 

* [CH ELM Observation Results: Laboratory](StructureDefinition-ch-elm-observation-results-laboratory.md) 
This CH ELM base profile constrains the Observation resource for the purpose of laboratory test reports. 

* [CH ELM Observation Results: Ratio](StructureDefinition-ch-elm-observation-rto.md) 
Ratio as observation result, see also 'Guidance - Laboratory Result' 

* [CH ELM Observation Results: Text](StructureDefinition-ch-elm-observation-txt.md) 
Text as observation result, see also 'Guidance - Laboratory Result' 

* [CH ELM Observation Results: Viral Load](StructureDefinition-ch-elm-observation-pq-virl.md) 
Viral Load as observation result, see also 'Guidance - Laboratory Result' 

* [CH ELM Organization: Author](StructureDefinition-ch-elm-organization-author.md) 
This CH ELM base profile constrains the Organization resource for the author of the laboratory report. 

* [CH ELM Organization: Lab](StructureDefinition-ch-elm-organization-lab.md) 
This CH ELM base profile constrains the Organization resource for the reporting laboratory. 

* [CH ELM Organization: Orderer](StructureDefinition-ch-elm-organization-orderer.md) 
This CH ELM base profile constrains the Organization resource for the orderer. 

* [CH ELM Patient](StructureDefinition-ch-elm-patient.md) 
This CH ELM base profile constrains the Patient resource for the purpose of laboratory orders and test reports. 

* [CH ELM Patient HIV](StructureDefinition-ChElmPatientHIV.md) 
Patient representation for HIV 

* [CH ELM Patient Initials](StructureDefinition-ChElmPatientInitials.md) 
Patient representation via Initials 

* [CH ELM Patient VCT](StructureDefinition-ChElmPatientVCT.md) 
Patient representation via a VCT Code 

* [CH ELM Practitioner: Orderer](StructureDefinition-ch-elm-practitioner-orderer.md) 
This CH ELM base profile constrains the Practitioner resource for the orderer. 

* [CH ELM PractitionerRole: Orderer](StructureDefinition-ch-elm-practitionerrole-orderer.md) 
This profile constrains the PractitionerRole resource for the orderer: 
* orderer organization and/or practitioner must be present
* a postalCode and city must be present from organization and/or practitioner
 

* [CH ELM ServiceRequest: Laboratory Order](StructureDefinition-ch-elm-servicerequest-laboratory-order.md) 
This CH ELM base profile constrains the ServiceRequest resource for the purpose of laboratory orders. 

* [CH ELM ServiceRequest: Laboratory Order](StructureDefinition-ch-elm-servicerequest-previous-laboratory-order.md) 
This CH ELM base profile constrains the ServiceRequest resource for the purpose of the previous laboratory order. 

* [CH ELM Specimen: Laboratory](StructureDefinition-ch-elm-specimen.md) 
This CH ELM base profile constrains the Specimen resource for the purpose of laboratory test reports. 

* [DocumentReference for Publish Response](StructureDefinition-PublishDocumentReferenceResponse.md) 
A profile on the DocumentReference resource for the publication response: 
* must be status current
* must have an identifier
 

* [DocumentReference for sending the report](StructureDefinition-PublishDocumentReference.md) 
A profile on the DocumentReference resource with publication constraints: 
* must be status current
* must have an identifier
* uses attachment.url to carry the document as a contained resource
* validation according to http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document
 

* [DocumentReference for sending the report with strict validation](StructureDefinition-PublishDocumentReferenceStrict.md) 
A profile on the DocumentReference resource with publication constraints: 
* must be status current
* must have an identifier
* uses attachment.url to carry the document as a contained resource
* strict validation according to http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict
 

* [Find Document References Response message](StructureDefinition-FindDocumentReferencesResponse.md) 
A profile on the Find Document References Response message 

### Data Type Profiles

*  [CH ELM CodeableConcept](StructureDefinition-ch-elm-codeableconcept.md) 

*  [CH ELM Coding](StructureDefinition-ch-elm-coding.md) 

*  [Human Name](StructureDefinition-ch-elm-humanname.md) 

*  [IDN Identifier](StructureDefinition-ch-elm-idn-identifier.md) 

*  [CH ELM Quantity arb'U](StructureDefinition-ch-elm-quantity-arbu.md) 

