# Artifacts Summary - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Behavior: Capability Statements 

The following artifacts define the specific capabilities that different types of systems are expected to have in order to comply with this implementation guide. Systems conforming to this implementation guide are expected to declare conformance to one or more of the following capability statements.

| | |
| :--- | :--- |
| [FOPH CapabilityStatement for receiving laboratory reports](CapabilityStatement-ch-elm-documentrecipient.md) | CapabilityStatement for receiving laboratory reports |

### Behavior: Search Parameters 

These define the properties by which a RESTful server can be searched. They can also be used for sorting and including related resources.

| | |
| :--- | :--- |
| [SearchParameter-ch-elm-status](SearchParameter-SearchParameter-ch-elm-status.md) | Status of the processing of the document referenced by the DocumentReference |

### Structures: Logical Models 

These define data models that represent the domain covered by this implementation guide in more business-friendly terms than the underlying FHIR resources.

| | |
| :--- | :--- |
| [CH ELM Laboratory Report](StructureDefinition-LaboratoryReport.md) | The logical model represents the CH ELM laboratory report as an abstract data model. These data elements are defined by the ordinance of the Federal Office of Public Health (FOPH) and are then mapped to the FHIR document structure.Cardinalities:* The cardinalities in the logical model show the so-called 'best case'. This means that if these data are available, they must be submitted to the FOPH.
* Since in reality the data is not always available, the CH ELM profiles define which elements are required or optional.
* See also the concept 'Must Support', which is described on the 'Home' page of this implementation guide
 |

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH ELM Composition: Laboratory Report](StructureDefinition-ch-elm-composition.md) | This CH ELM base profile constrains the Composition resource for the purpose of laboratory test reports. |
| [CH ELM Composition: Laboratory Report Strict](StructureDefinition-ch-elm-composition-strict.md) | This CH ELM Composition profile constrains that the section codes have corresponding observation value codes |
| [CH ELM DiagnosticReport: Laboratory Report](StructureDefinition-ch-elm-diagnosticreport.md) | This CH ELM base profile constrains the DiagnosticReport resource for the purpose of laboratory test reports. |
| [CH ELM Document: Laboratory Report](StructureDefinition-ch-elm-document.md) | This CH ELM base profile constrains the Bundle resource for the purpose of laboratory test reports. |
| [CH ELM Document: Laboratory Report (strict)](StructureDefinition-ch-elm-document-strict.md) | CH ELM profile for the Bundle resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element and checking patient name requirements if possible. |
| [CH ELM Observation Component Results: Concentration](StructureDefinition-ch-elm-observation-component-conc.md) | Concentration as Quantity in observation.component result, see also 'Guidance - Laboratory Result' |
| [CH ELM Observation Results for Genotyping](StructureDefinition-ch-elm-observation-results-laboratory-genotyping.md) | This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports. |
| [CH ELM Observation Results for Genotyping (strict)](StructureDefinition-ch-elm-observation-results-laboratory-genotyping-strict.md) | CH ELM profile for the Observation resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element. |
| [CH ELM Observation Results for HIV Recency Testing (strict)](StructureDefinition-ch-elm-observation-results-hiv-recency-strict.md) | This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports for hiv recency. |
| [CH ELM Observation Results for Microbial susceptibility tests](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility.md) | This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports. |
| [CH ELM Observation Results for Microbial susceptibility tests (strict)](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility-strict.md) | CH ELM profile for the Observation resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element. |
| [CH ELM Observation Results for Microbiology studies (set)](StructureDefinition-ch-elm-observation-results-laboratory-microbiology.md) | This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports. |
| [CH ELM Observation Results for Microbiology studies (set) strict](StructureDefinition-ch-elm-observation-results-laboratory-microbiolgy-strict.md) | CH ELM profile for the Observation resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element. |
| [CH ELM Observation Results: Laboratory](StructureDefinition-ch-elm-observation-results-laboratory.md) | This CH ELM base profile constrains the Observation resource for the purpose of laboratory test reports. |
| [CH ELM Observation Results: Ratio](StructureDefinition-ch-elm-observation-rto.md) | Ratio as observation result, see also 'Guidance - Laboratory Result' |
| [CH ELM Observation Results: Text](StructureDefinition-ch-elm-observation-txt.md) | Text as observation result, see also 'Guidance - Laboratory Result' |
| [CH ELM Observation Results: Viral Load](StructureDefinition-ch-elm-observation-pq-virl.md) | Viral Load as observation result, see also 'Guidance - Laboratory Result' |
| [CH ELM Organization: Author](StructureDefinition-ch-elm-organization-author.md) | This CH ELM base profile constrains the Organization resource for the author of the laboratory report. |
| [CH ELM Organization: Lab](StructureDefinition-ch-elm-organization-lab.md) | This CH ELM base profile constrains the Organization resource for the reporting laboratory. |
| [CH ELM Organization: Orderer](StructureDefinition-ch-elm-organization-orderer.md) | This CH ELM base profile constrains the Organization resource for the orderer. |
| [CH ELM Patient](StructureDefinition-ch-elm-patient.md) | This CH ELM base profile constrains the Patient resource for the purpose of laboratory orders and test reports. |
| [CH ELM Patient HIV](StructureDefinition-ChElmPatientHIV.md) | Patient representation for HIV |
| [CH ELM Patient Initials](StructureDefinition-ChElmPatientInitials.md) | Patient representation via Initials |
| [CH ELM Patient VCT](StructureDefinition-ChElmPatientVCT.md) | Patient representation via a VCT Code |
| [CH ELM Practitioner: Orderer](StructureDefinition-ch-elm-practitioner-orderer.md) | This CH ELM base profile constrains the Practitioner resource for the orderer. |
| [CH ELM PractitionerRole: Orderer](StructureDefinition-ch-elm-practitionerrole-orderer.md) | This profile constrains the PractitionerRole resource for the orderer:* orderer organization and/or practitioner must be present
* a postalCode and city must be present from organization and/or practitioner
 |
| [CH ELM ServiceRequest: Laboratory Order](StructureDefinition-ch-elm-servicerequest-laboratory-order.md) | This CH ELM base profile constrains the ServiceRequest resource for the purpose of laboratory orders. |
| [CH ELM ServiceRequest: Laboratory Order](StructureDefinition-ch-elm-servicerequest-previous-laboratory-order.md) | This CH ELM base profile constrains the ServiceRequest resource for the purpose of the previous laboratory order. |
| [CH ELM Specimen: Laboratory](StructureDefinition-ch-elm-specimen.md) | This CH ELM base profile constrains the Specimen resource for the purpose of laboratory test reports. |
| [DocumentReference for Publish Response](StructureDefinition-PublishDocumentReferenceResponse.md) | A profile on the DocumentReference resource for the publication response:* must be status current
* must have an identifier
 |
| [DocumentReference for sending the report](StructureDefinition-PublishDocumentReference.md) | A profile on the DocumentReference resource with publication constraints:* must be status current
* must have an identifier
* uses attachment.url to carry the document as a contained resource
* validation according to http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document
 |
| [DocumentReference for sending the report with strict validation](StructureDefinition-PublishDocumentReferenceStrict.md) | A profile on the DocumentReference resource with publication constraints:* must be status current
* must have an identifier
* uses attachment.url to carry the document as a contained resource
* strict validation according to http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict
 |
| [Find Document References Response message](StructureDefinition-FindDocumentReferencesResponse.md) | A profile on the Find Document References Response message |

### Structures: Data Type Profiles 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH ELM CodeableConcept](StructureDefinition-ch-elm-codeableconcept.md) | This profile represents the constraint applied to the CodeableConcept data type by this IG to use the 'CH ELM CodeableConcept' data type profile. |
| [CH ELM Coding](StructureDefinition-ch-elm-coding.md) | This profile represents the constraints applied to the Coding data type by this IG used in the 'CH ELM Coding' data type profile. |
| [CH ELM Quantity arb'U](StructureDefinition-ch-elm-quantity-arbu.md) | Quantity with unit arb'U and system http://unitsofmeasure.org |
| [Human Name](StructureDefinition-ch-elm-humanname.md) | Name with extensions for data-absent-reason |
| [IDN Identifier](StructureDefinition-ch-elm-idn-identifier.md) | Identifier holding the IDN Liechtenstein. It is a 13-digit number without check digit and without special characters. |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH ELM Extension: Department](StructureDefinition-ch-elm-ext-department.md) | This CH ELM extension enables the representation of a department (name) of an organization directly in the resource Organization itself. |
| [CH ELM Extension: HIV code](StructureDefinition-ch-elm-ext-hiv-code.md) | This CH ELM extension enables to proivde the HIV Code. |
| [CH ELM Extension: VCT code](StructureDefinition-ch-elm-ext-vct-code.md) | This CH ELM extension enables to proivde the VCT Code. |
| [Status of the processing of the document](StructureDefinition-ch-ext-elm-status.md) | Extension to define the status of the processing of the document |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [BFS Verzeichnis der Staaten und Gebiete](ValueSet-bfs-country-codes.md) | BFS defines the valid country codes in Switzerland |
| [CH ELM Expecting Organism Specification](ValueSet-ch-elm-expecting-organism-specification.md) | This CH ELM value set includes the leading codes for the laboratory test results, which have to be completed by another code for the expecting organism. |
| [CH ELM Expecting Specimen Specification](ValueSet-ch-elm-expecting-specimen-specification.md) | This CH ELM value set includes the leading codes for the laboratory test results, which have to be completed by another code for the expecting specimen. |
| [CH ELM FOPH Patient Name Representation](ValueSet-ch-elm-foph-patient-name-representation.md) | This CH ELM resource defines the codes which identify possible patient name schemas to be used. |
| [CH ELM Interpretation Codes AVIDITY](ValueSet-ch-elm-interpretation-codes-avidity.md) | This CH ELM value set includes the code for avidity interpretation code(s). |
| [CH ELM Interpretation Codes Positive](ValueSet-ch-elm-interpretation-codes-pos.md) | This CH ELM value set includes the code for positive interpretation code(s). |
| [CH ELM Interpretation Codes Positive and Negative](ValueSet-ch-elm-interpretation-codes-pos-neg.md) | This CH ELM value set includes the code for positive and negative interpretation code(s). |
| [CH ELM Interpretation Codes Resistant](ValueSet-ch-elm-interpretation-codes-res.md) | This CH ELM value set includes the code for resistant interpretation code(s). |
| [CH ELM Interpretation Codes Resistant and Susceptible](ValueSet-ch-elm-interpretation-codes-res-sus.md) | This CH ELM value set includes the code for resistant and susceptible interpretation code(s). |
| [CH ELM Interpretation Codes SERO](ValueSet-ch-elm-interpretation-codes-sero.md) | This CH ELM value set includes the code for sero interpretation code(s). |
| [CH ELM Interpretation Codes TITER](ValueSet-ch-elm-interpretation-codes-titer.md) | This CH ELM value set includes the code for titer interpretation code(s). |
| [CH ELM Interpretation Codes Vs](ValueSet-ch-elm-interpretation-codes-vs.md) | This CH ELM value set includes the value set URLs as interpretation codes to map in the concept maps the leading codes. |
| [CH ELM Lab Study Types](ValueSet-ch-elm-lab-study-types.md) | This CH ELM value set includes the codes for the laboratory specialties. |
| [CH ELM Observation Profile Vs](ValueSet-ch-elm-observation-profile-vs.md) | This CH ELM value set includes the profile URLs as codes to map in the concept maps the leading codes, which specify how the observation value must be provided. |
| [CH ELM Results Antibiotic Tb](ValueSet-ch-elm-results-component-antibiotic-tb.md) | The "ch elm results antibiotic tb" group provides a curated set of codes representing specific antibiotics. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the "ch elm results antibiotic tb" group should refer to the provided codes to ensure they capture and report antibiotic information correctly and consistently |
| [CH ELM Results Bot Org](ValueSet-ch-elm-results-bot-org.md) | The "CH ELM Results Bot Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Bot Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Bot Spec](ValueSet-ch-elm-results-bot-spec.md) | The "CH ELM Results Bot Spec" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the "CH ELM Results Bot Spec" group should refer to the provided codes to ensure they capture and report material information correctly and consistently. |
| [CH ELM Results Bru Org](ValueSet-ch-elm-results-bru-org.md) | The "CH ELM Results Bru Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Bru Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Camp Diar Org](ValueSet-ch-elm-results-camp-diar-org.md) | The "CH ELM Results Camp Diar Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Camp Diar Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Camp Org](ValueSet-ch-elm-results-camp-org.md) | The "CH ELM Results Camp Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Camp Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Chol Org](ValueSet-ch-elm-results-chol-org.md) | The "CH ELM Results Chol Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Chol Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Cjd Org](ValueSet-ch-elm-results-cjd-org.md) | The "CH ELM Results Cjd Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Cjd Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Coded Values Laboratory](ValueSet-ch-elm-results-coded-values-laboratory.md) | This CH ELM value set includes the codes for the laboratory test results (presence/absence). |
| [CH ELM Results Complete Spec](ValueSet-ch-elm-results-complete-spec.md) | The "CH ELM Results Complete Spec" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the "CH ELM Results Complete Spec" group should refer to the provided codes to ensure they capture and report material information correctly and consistently. |
| [CH ELM Results Completion Vs](ValueSet-ch-elm-results-completion-vs.md) | This CH ELM value set includes the value set URLs as codes to map in the concept maps the leading codes, which must be completed with additional codes. |
| [CH ELM Results Component Antibiotic for CPE](ValueSet-ch-elm-results-component-antibiotic-cpe.md) | The "CH ELM Results Component Antibitics" oprovides a curated set of codes representing specific antibiotics. |
| [CH ELM Results Component Gene CPE](ValueSet-ch-elm-results-component-gene-cpe.md) | The "CH ELM Results Component Gene CPE" provides a curated set of codes representing specific genes. |
| [CH ELM Results Component Vs](ValueSet-ch-elm-results-component-vs.md) | This CH ELM value set includes the value set URLs as codes to map in the concept maps the leading codes. |
| [CH ELM Results Diph Org](ValueSet-ch-elm-results-diph-org.md) | The "CH ELM Results Diph Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Diph Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Diph Spec](ValueSet-ch-elm-results-diph-spec.md) | The "CH ELM Results Diph Spec" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the "CH ELM Results Diph Spec" group should refer to the provided codes to ensure they capture and report material information correctly and consistently. |
| [CH ELM Results Ebol Org](ValueSet-ch-elm-results-ebol-org.md) | The "CH ELM Results Ebol Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Ebol Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Ehec Org](ValueSet-ch-elm-results-ehec-org.md) | The "CH ELM Results Ehec Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Ehec Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Ehec Tox Org](ValueSet-ch-elm-results-ehec-tox-org.md) | The "CH ELM Results Ehec Tox Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Ehec Tox Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Gene Tb](ValueSet-ch-elm-results-component-gene-tb.md) | The "CH ELM Results Gene Tb" group provides a curated set of codes representing specific genotypes. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the "CH ELM Results Gene Tb" group should refer to the provided codes to ensure they capture and report antibiotic information correctly and consistently |
| [CH ELM Results Geni Spec](ValueSet-ch-elm-results-geni-spec.md) | The "CH ELM Results Geni Spec" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the "CH ELM Results Geni Spec" group should refer to the provided codes to ensure they capture and report material information correctly and consistently. |
| [CH ELM Results HIV Recency](ValueSet-ch-elm-results-component-hiv-recency.md) | The "CH ELM Results HIV Recency" group provides a curated set codes needed to capture and report HIV recency test results. |
| [CH ELM Results Haem Org](ValueSet-ch-elm-results-haem-org.md) | The "CH ELM Results Haem Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Haem Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Hanta Org](ValueSet-ch-elm-results-hanta-org.md) | The "CH ELM Results Hanta Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Hanta Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Hiv Org](ValueSet-ch-elm-results-hiv-org.md) | The "CH ELM Results Hiv Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Hiv Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Inf Org](ValueSet-ch-elm-results-inf-org.md) | The "CH ELM Results Inf Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Inf Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Influenza Hxny Org](ValueSet-ch-elm-results-influenza-hxny-org.md) | The "CH ELM Results Influenza Hxny Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Influenza Hxny Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Laboratory Observation](ValueSet-ch-elm-results-laboratory-observation.md) | This CH ELM value set includes the codes for the laboratory test results (organism). |
| [CH ELM Results Laboratory Observation Complete](ValueSet-ch-elm-results-laboratory-observation-complete.md) | This CH ELM value set includes the codes for every type of laboratory test results (organism detection, genotyping, susceptibility). |
| [CH ELM Results Laboratory Observation Genotyping](ValueSet-ch-elm-results-laboratory-observation-geno.md) | This CH ELM value set includes the codes for the laboratory genotyping test results. |
| [CH ELM Results Laboratory Observation Susceptibility](ValueSet-ch-elm-results-laboratory-observation-susc.md) | This CH ELM value set includes the codes for the laboratory Susceptibility test results. |
| [CH ELM Results Leg Org](ValueSet-ch-elm-results-leg-org.md) | The "CH ELM Results Leg Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Leg Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Lis Org](ValueSet-ch-elm-results-lis-org.md) | The "CH ELM Results Lis Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Lis Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Mal Org](ValueSet-ch-elm-results-mal-org.md) | The "CH ELM Results Mal Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Mal Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Maldi-tof Org](ValueSet-ch-elm-results-maldi-tof-org.md) | The "CH ELM Results Maldi-tof Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Maldi-tof Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Mea Org](ValueSet-ch-elm-results-mea-org.md) | The "CH ELM Results Mea Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Mea Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Men Org](ValueSet-ch-elm-results-men-org.md) | The "CH ELM Results Men Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Men Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Mpox Org](ValueSet-ch-elm-results-mpox-org.md) | The "CH ELM Results Mpox Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Mpox Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Mpx Ctng](ValueSet-ch-elm-results-mpx-ctng.md) | The "CH ELM Results Mpx Ctng" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Mpx Ctng" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Mpx Sash](ValueSet-ch-elm-results-mpx-sash.md) | The "CH ELM Results Mpx Sash" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Mpx Sash" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Mpx Sashec](ValueSet-ch-elm-results-mpx-sashec.md) | The "CH ELM Results Mpx Sashec" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Mpx Sashec" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Pneu Org](ValueSet-ch-elm-results-pneu-org.md) | The "CH ELM Results Pneu Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Pneu Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Sal Org](ValueSet-ch-elm-results-sal-org.md) | The "CH ELM Results Sal Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Sal Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Sal Org Complete](ValueSet-ch-elm-results-sal-org-complete.md) | The "CH ELM Results Sal Org Complete" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Sal Org Complete" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Shi Org](ValueSet-ch-elm-results-shi-org.md) | The "CH ELM Results Shi Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Shi Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Sterile Spec](ValueSet-ch-elm-results-sterile-spec.md) | The "CH ELM Results Sterile Spec" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the "CH ELM Results Sterile Spec" group should refer to the provided codes to ensure they capture and report material information correctly and consistently. |
| [CH ELM Results Tub Gen Org](ValueSet-ch-elm-results-tub-gen-org.md) | The "CH ELM Results Tub Gen Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Tub Gen Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Tub Org](ValueSet-ch-elm-results-tub-org.md) | The "CH ELM Results Tub Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Tub Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Tub Spec](ValueSet-ch-elm-results-tub-spec.md) | The "CH ELM Results Tub Spec" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the "CH ELM Results Tub Spec" group should refer to the provided codes to ensure they capture and report material information correctly and consistently. |
| [CH ELM Results Tul Org](ValueSet-ch-elm-results-tul-org.md) | The "CH ELM Results Tul Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Tul Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Results Virus Cult Org](ValueSet-ch-elm-results-virus-cult-org.md) | The "CH ELM Results Virus Cult Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Virus Cult Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. |
| [CH ELM Status](ValueSet-ch-elm-status.md) | This CH ELM value set includes the codes for the laboratory specialities. |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH ELM FOPH Business Rules](CodeSystem-ch-elm-foph-business-rules.md) | This CH ELM code system describes specific business rules of the FOPH, which are applied during processing. Please note that the set of rules detailed herein only covers processes explicitly declared by the FOPH. Additional rules, not included in this code system, are applied by the FHIR validation logic, resulting in further codes. For more information about these additional codes, consult the official FHIR documentation and the implementation guideline. |
| [CH ELM FOPH Code Reserve](CodeSystem-ch-elm-foph-code-reserve.md) | This code system contains proprietary placeholder codes for use in situations of emerging pathogens for which no other code exist. |
| [CH ELM FOPH Patient Name Representation](CodeSystem-ch-elm-foph-patient-name-representation.md) | This CH ELM resource defines the codes which identify possible patient name schemas to be used. |
| [CH ELM Interpretation Codes Vs](CodeSystem-ch-elm-interpretation-codes-vs.md) | The codes contained in this code system represent URLs of value sets that can be used as target codes in ConceptMaps. These value sets define the codes that are permitted to indicate the observation interpretation in relation to the leading code. |
| [CH ELM Observation Profile Vs](CodeSystem-ch-elm-observation-profile-vs.md) | The codes contained in this code system represent URLs of Profile Observations that can be used as target codes in ConceptMaps. These profiles defines the Observation in relation to the leading code. |
| [CH ELM Results Completion Vs](CodeSystem-ch-elm-results-completion-vs.md) | The codes contained in this code system represent URLs of value sets that can be used as target codes in ConceptMaps. These value sets define the codes that are permitted for specifying the organism or specimen in relation to the leading code. |
| [CH ELM Results Component Vs](CodeSystem-ch-elm-results-component-vs.md) | This CH ELM value set includes the value set URLs as codes to map in the concept maps the leading codes. |

### Terminology: Naming Systems 

These define identifier and/or code system identities used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [IDN Liechtenstein](NamingSystem-IDN.md) | The IDN is a unique identification number generated for each person with health insurance in Liechtenstein. For more details please visit https://www.llv.li/de/privatpersonen/gesundheit-vorsorge-und-pflege/elektronisches-gesundheitsdossier/datenschutzhinweis. |

### Terminology: Concept Maps 

These define transformations to convert between codes by systems conforming with this implementation guide.

| | |
| :--- | :--- |
| [CH ELM Expecting Organism Specification To Results Completion Vs](ConceptMap-ch-elm-expecting-organism-specification-to-results-completion-vs.md) | This CH ELM concept map shows which leading codes have to be completed by an additional code to specify the organism. The target code shows the URL of the value set containing the permitted codes for the organism specification. |
| [CH ELM Expecting Specimen Specification To Results Completion Vs](ConceptMap-ch-elm-expecting-specimen-specification-to-results-completion-vs.md) | This CH ELM concept map shows which leading codes have to be completed by an additional code to specify the specimen. The target code shows the URL of the value set containing the permitted codes for the specimen specification. |
| [CH ELM Results Genotype To Component Code](ConceptMap-ch-elm-results-geno-to-component-code.md) | This CH ELM concept map shows for each leading code defining genotype testing results its corresponding genotyp-valueset. The target code shows the URL of the value set containing the permitted genotype codes. |
| [CH ELM Results Genotyping To Component Interpretation Code](ConceptMap-ch-elm-results-geno-to-component-interpretation-code.md) | This CH ELM concept map specifies the ValuesSet for component.code for each leading code. |
| [CH ELM Results Susceptibility To Component Code](ConceptMap-ch-elm-results-susc-to-component-code.md) | This CH ELM concept map shows for each leading code defining susceptibility testing results its corresponding antibiotic-valueset. The target code shows the URL of the value set containing the permitted antibiotic codes. |
| [CH ELM Results Susceptibility To Component Interpretation Code](ConceptMap-ch-elm-results-susc-to-component-interpretation-code.md) | This CH ELM concept map specifies the ValuesSet for component.code for each leading code. |
| [CH ELM Results Susceptibility To Component Observation Profile](ConceptMap-ch-elm-results-susc-to-component-observation-profile.md) | This CH ELM concept map specifies the ValuesSet for component.code for each leading code. |
| [CH ELM Results To FOPH Patient Name Representation](ConceptMap-ch-elm-results-to-foph-patient-name-representation.md) | This CH ELM concept map specifies the required mode of patient representation for each leading code. It determines whether the full name, initials, or a unique code (e.g., for HIV patients) should be used, based on the specific LOINC code associated with the laboratory data. This ensures consistent and appropriate handling of patient identity in accordance with the type of pathogen reported. |
| [CH ELM Results To Interpretation Code](ConceptMap-ch-elm-results-to-interpretation-code.md) | This CH ELM concept map specifies the interpretation codes for each leading code. E.g. if positive, positive and negative or resistant-susceptible values are allowed |
| [CH ELM Results To Observation Profile](ConceptMap-ch-elm-results-to-observation-profile.md) | This CH ELM concept map specifies the observation profile for each leading code |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [1 Doc - Neisseria Gonorrhoeae](Bundle-1cDoc-NeisseriaGonorrhoeae.md) | Example for a CH ELM Document: Laboratory Report (where the 'Lab' is the same as the 'Author') |
| [10Doc - Legionella](Bundle-10Doc-Legionella.md) | Example Document for Legionella |
| [11Doc - Malaria](Bundle-11Doc-Malaria.md) | Example Document for Malaria |
| [12Doc - Mpox](Bundle-12Doc-Mpox.md) | Example Document for Mpox |
| [13Doc - Shigella](Bundle-13Doc-Shigella.md) | Example Document for Shigella |
| [14Doc - Neisseria meningitidis - confirmation test](Bundle-14Doc-Neisseriameningitidis-confirmationtest.md) | Example Document for a confirmation test of Neisseria meningitidis by secondary lab (reference laboratory) |
| [14Doc - Neisseria meningitidis - confirmation test with original order](Bundle-14Doc-Neisseriameningitidis-confirmationtest-originalorder.md) | Example Document for a confirmation test of Neisseria meningitidis by secondary lab (reference laboratory) with original order information |
| [15Doc - Measles Seroconversion](Bundle-15Doc-Measles-Seroconversion.md) | Example Document Measles Seroconversion |
| [16Doc - Dengue Titer](Bundle-16Doc-Dengue-Titer.md) | Example Document Dengue with high IgG Ab-Titer |
| [17Doc - Neisseria meningitidis – microscopic finding](Bundle-17Doc-Neisseria.md) | Example Document for a microscopic observation of Neisseria meningitidis by primary lab |
| [18Doc - Corynebacterium diphtheriae](Bundle-18Doc-C-diphtheriae.md) | Example Document for Corynebacterium diphtheriae with specimen specification |
| [19Doc - Streptococcus pneumoniae](Bundle-19Doc-S-pneumoniae.md) | Example Document for Streptococcus pneumoniae |
| [1Comp - Neisseria Gonorrhoeae](Composition-1Comp-NeisseriaGonorrhoeae.md) | Example for a CH ELM Composition: Laboratory Report |
| [1DR - Neisseria Gonorrhoeae](DiagnosticReport-1DR-NeisseriaGonorrhoeae.md) | Example for a CH ELM DiagnosticReport: Laboratory Report |
| [1Doc - Neisseria Gonorrhoeae](Bundle-1Doc-NeisseriaGonorrhoeae.md) | Example for a CH ELM Document: Laboratory Report (where the 'Lab' is the same as the 'Author') |
| [1Obs - Neisseria Gonorrhoeae](Observation-1Obs-NeisseriaGonorrhoeae.md) | Example for a CH ELM Observation Results: Laboratory |
| [1Org - Kantonsspital ABC](Organization-1Org-KsAbc.md) | Example for a CH ELM Organization: Orderer |
| [1Org - Labor](Organization-1Org-Labor.md) | Example for a CH ELM Organization: Lab and Author |
| [1PR - Monika Giacometti @ Kantonsspital ABC](PractitionerRole-1PR-KsAbc.md) | Example for a CH ELM PractitionerRole: Orderer |
| [1PR - Monika Giacometti @ Kantonsspital ABC](PractitionerRole-1cPR-KsAbc.md) | Example for a CH ELM PractitionerRole: Orderer where the organization is not known, only the prtactitioner |
| [1Pat - DM](Patient-Pat-001.md) | Example for a CH ELM Patient (only with initials) |
| [1Pract - Giacometti](Practitioner-1cPract-KsAbc.md) | Example for a CH ELM Practitioner: Orderer where only the name, plz and city is known |
| [1Pract - Monika Giacometti](Practitioner-1Pract-KsAbc.md) | Example for a CH ELM Practitioner: Orderer |
| [1SR - Order](ServiceRequest-1SR-Order.md) | Example for a CH ELM ServiceRequest: Laboratory Order |
| [1Spec - Neisseria Gonorrhoeae](Specimen-1Spec-Specimen.md) | Example for a CH ELM Specimen: Laboratory |
| [1bComp - Neisseria Gonorrhoeae](Composition-1bComp-NeisseriaGonorrhoeae.md) | Example for a CH ELM Composition: Laboratory Report |
| [1bDR - Neisseria Gonorrhoeae](DiagnosticReport-1bDR-NeisseriaGonorrhoeae.md) | Example for a CH ELM DiagnosticReport: Laboratory Report |
| [1bDoc - Neisseria Gonorrhoeae](Bundle-1bDoc-NeisseriaGonorrhoeae.md) | Example for a CH ELM Document: Laboratory Report (where the 'Lab' is NOT the same as the 'Author' -> Broker Scenario) |
| [1bObs - Neisseria Gonorrhoeae](Observation-1bObs-NeisseriaGonorrhoeae.md) | Example for a CH ELM Observation Results: Laboratory |
| [1bOrg - Broker](Organization-1bOrg-Broker.md) | Example for a CH ELM Organization: Author |
| [1bOrg - Labor](Organization-1bOrg-Labor.md) | Example for a CH ELM Organization: Lab |
| [1bSR - Order](ServiceRequest-1bSR-Order.md) | Example for a CH ELM ServiceRequest: Laboratory Order |
| [1bSpec - Neisseria Gonorrhoeae](Specimen-1bSpec-Specimen.md) | Example for a CH ELM Specimen: Laboratory |
| [1cDR - Neisseria Gonorrhoeae](DiagnosticReport-1cDR-NeisseriaGonorrhoeae.md) | Example for a CH ELM DiagnosticReport: Laboratory Report |
| [1cSR - Order](ServiceRequest-1cSR-Order.md) | Example for a CH ELM ServiceRequest: Laboratory Order |
| [20Doc - Vibrio cholerae](Bundle-20Doc-Vibrio-cholerae.md) | Example Document for Vibrio cholerae |
| [21Doc - Hepatite E](Bundle-21Doc-HepatiteE.md) | Example Document for Hepatite E |
| [22Doc - Haemophilus influenzae](Bundle-22Doc-H-influenzae.md) | Example Document for Haemophilus influenzae |
| [23Doc - Francisella tularensis with organism specification](Bundle-23Doc-F-tularensis.md) | Example Document for Francisella tularensis with organism specification |
| [24Doc - Chikungunya fever](Bundle-24Doc-Chikungunya.md) | Example Document for Chikungunya fever |
| [25Doc - Tick-borne encephalitis](Bundle-25Doc-Tick-borne-encephalitis.md) | Example Document for Tick-borne encephalitis |
| [26Doc - Hepatite A](Bundle-26Doc-HepatiteA.md) | Example Document for Hepatite A |
| [28Doc - Listeria monocytogenes](Bundle-28Doc-Listeria-monocytogenes.md) | Example Document for Listeria monocytogenes |
| [29Doc - Rubella](Bundle-29Doc-Rubella.md) | Example Document for Rubella |
| [2Doc - Chlamydia Trachomatis](Bundle-2Doc-ChlamydiaTrachomatis.md) | Example for a CH ELM Document: Laboratory Report (collection material in addition to the leading LOINC code, with references/fullUrls as UUIDs) |
| [2Doc - Chlamydia Trachomatis (VCT)](Bundle-2Doc-ChlamydiaTrachomatis-Vct.md) | Example for a CH ELM Document: Laboratory Report collection material in addition to the leading LOINC code and Patient with Patient VCT code |
| [30Doc - Salmonella enteritidis](Bundle-30Doc-Salmonella-enteritidis.md) | Example Document for Salmonella enteritidis |
| [32Doc - Rubella avidity](Bundle-32Doc-Rubella-avidity.md) | Example Document for reporting a rubella avidity |
| [33Doc - Salmonella valueString](Bundle-33Doc-Salmonella-valueString.md) | Example Document for Salmonella reporting a (new) serotype for which no coding exists |
| [34Doc - Brucella](Bundle-34Doc-Brucella.md) | Example Document for Brucella |
| [35Doc CJD](Bundle-35Doc-CJD.md) | Example Document for Creutzfeldt-Jakob disease |
| [36Doc - Salmonella paratyphi](Bundle-36Doc-Salmonella-paratyphi.md) | Example Document for Salmonella paratyphi |
| [37Doc - Zika](Bundle-37Doc-Zika.md) | Example Document for Zika |
| [38Doc - Anthrax](Bundle-38Doc-Anthrax.md) | Example Document for Bacillus anthracis |
| [39Doc - Botulism](Bundle-39Doc-Botulims.md) | Example Document for Clostridium botulinum |
| [40Doc - Crimean-Congo](Bundle-40Doc-Crimean-Congo.md) | Example Document for Crimean-congo virus |
| [41Doc - Ebola](Bundle-41Doc-Ebola.md) | Example Document for Ebola virus |
| [42Doc - Lassa](Bundle-42Doc-Lassa.md) | Example Document for Lassa virus |
| [43Doc - Marburg](Bundle-43Doc-Marburg.md) | Example Document for Marburg virus |
| [44Doc - MERS-CoV](Bundle-44Doc-Mers-CoV.md) | Example Document for MERS coronavirus |
| [45Doc - SARS-CoV](Bundle-45Doc-Sars-CoV.md) | Example Document for Sars coronavirus |
| [46Doc - Yersinia pestis](Bundle-46Doc-Yersinia-pestis.md) | Example Document for Yersinia pestis |
| [47Doc - Variola](Bundle-47Doc-Variola.md) | Example Document for Variola |
| [48Doc - Mpox Clade](Bundle-48Doc-Mpox-Clade.md) | Example Document for Mpox Clade |
| [49Doc - HIV](Bundle-49Doc-HIV.md) | Example Document for HIV |
| [4Doc - Campylobacter coli](Bundle-4Doc-Campylobacter.md) | Example for a CH ELM Document: Laboratory Report |
| [50Doc - HIV-viremia](Bundle-50Doc-HIV-viremia.md) | Example Document for reporting a physical quantity value |
| [51Doc - Gelbfieber](Bundle-51Doc-Gelbfieber.md) | Example Document for Yellow fever-virus |
| [52Doc - Hantavirus](Bundle-52Doc-Hantavirus.md) | Example Document for Hanta-virus |
| [53Doc - Influenza HxNy](Bundle-53Doc-InfluenzaHxNy.md) | Example Document for Influenza A virus reporting a specific subtype |
| [54Doc - Poliomyelitis](Bundle-54Doc-Poliomyelitis.md) | Example Document for Polio |
| [55Doc - Tollwut](Bundle-55Doc-Tollwut.md) | Example Document for Rabies-virus |
| [56Doc - Trichinella spiralis](Bundle-56Doc-Trichinella-spiralis.md) | Example Document for Trichinella |
| [57Doc - West Nile](Bundle-57Doc-West-Nile.md) | Example Document for West-Nile-Fever-virus using an organism-specification code |
| [58Doc - Coxiella](Bundle-58Doc-Coxiella.md) | Example Document for reporting titer ratio |
| [59Doc - EHEC](Bundle-59Doc-EHEC.md) | Example Document for reporting EHEC toxin |
| [5Doc - Treponema pallidum](Bundle-5Doc-TreponemaPallidum.md) | Example for a CH ELM Document: Laboratory Report (SNOMED CT as leading code) |
| [61Doc - Tuberculosis Susceptibility](Bundle-61Doc-Tb-Susceptibility.md) | Example document for reporting microbial susceptibility pannels (antibiograms) |
| [63Doc - Tuberculosis Genotyping](Bundle-63Doc-Tb-Genotyping.md) | Example document for reporting genotyping analysis (resistance mutation) |
| [65Doc-Tuberculosis](Bundle-65Doc-Tuberculosis.md) | Example document for reporting mycobacterium culture |
| [66Doc - HIV Recency](Bundle-66Doc-HivRecency.md) | Example document for HIV Recency |
| [6Doc - Influenza](Bundle-6Doc-Influenza.md) | Example for a CH ELM Document: Laboratory Report |
| [7Doc - SARS-CoV-2](Bundle-7Doc-SARSCoV2.md) | Example for a CH ELM Document: Laboratory Report (document in French, patient with full name) |
| [8Doc - HepatiteB](Bundle-8Doc-HepatiteB.md) | Document for Hepatite B |
| [9Doc - HepatiteC](Bundle-9Doc-HepatiteC.md) | Example Document for Hepatite C |
| [Carbapenemase-producing Enterobacteriaceae](Bundle-3Doc-CPE.md) | Example Document for reporting Carbapenemase-producing Enterobacteriaceae |
| [Example of a Find Document References Response Message](Bundle-ex-findDocumentReferencesResponse.md) | Example of a Find Document References Bundle Search Set with a single DocumentReference |
| [Org - Hôpital régional soleil](Organization-Org-JeanneMoreau.md) | Example for a CH ELM Organization: Orderer |
| [Org - Praxis Dr. Hauser](Organization-Org-PeterHauser.md) | Example for a CH ELM Organization: Orderer |
| [Org: Orderer with BER and UIDB](Organization-Organization-OrdererWithBERUIDB.md) | Example for a CH ELM Organization: Orderer |
| [PR - Jeanne Moreau @ Hôpital régional soleil](PractitionerRole-PR-JeanneMoreau.md) | Example for a CH ELM PractitionerRole: Orderer |
| [PR - Peter Hauser @ Praxis Dr. Hauser](PractitionerRole-PR-PeterHauser.md) | Example for a CH ELM PractitionerRole: Orderer |
| [Pat - Antoine Dupont](Patient-Pat-003.md) | Example for a CH ELM Patient - full name |
| [Pat - E5](Patient-Pat-004.md) | Example for a CH ELM Patient - special case HIV/AIDS |
| [Pat - ET](Patient-Pat-005.md) | Example for a CH ELM Patient - initials |
| [Pat - Ernst Karl Tanner](Patient-Pat-006.md) | Example for a CH ELM Patient - full name (and full address) |
| [Pat - Lilly Liechtenstein](Patient-Pat-007.md) | Example for a CH ELM Patient - IDN Liechtenstein |
| [Pat - VCT](Patient-Pat-VCT.md) | Example for a CH ELM Patient with VCT Code |
| [Pract - Jeanne Moreau](Practitioner-Pract-JeanneMoreau.md) | Example for a CH ELM Practitioner: Orderer |
| [Pract - Peter Hauser](Practitioner-Pract-PeterHauser.md) | Example for a CH ELM Practitioner: Orderer |
| [Publish 1Doc-NeisseriaGonorrhoeae](DocumentReference-Publish-1Doc-NeisseriaGonorrhoeae.md) | Reporting Neisseria Gonorhoeae |
| [Publish 1Doc-NeisseriaGonorrhoeae (Strict)](DocumentReference-1-DocumentReferenceStrict.md) | Reporting Neisseria Gonorhoeae |
| [Publish 1cDoc-NeisseriaGonorrhoeae (Strict)](DocumentReference-1c-DocumentReferenceStrict.md) | Reporting Neisseria Gonorhoeae with minimal orderer information (name, plz, city) |
| [Publish 2Doc-ChlamydiaTrachomatis (Strict)](DocumentReference-2-DocumentReference.md) | Reporting Chlamydia Trachomatis |
| [Publish 2Doc-ChlamydiaTrachomatis (Strict)](DocumentReference-2-DocumentReferenceStrict.md) | Reporting Chlamydia Trachomatis |
| [Publish 2Doc-ChlamydiaTrachomatis with Patient VCT Code](DocumentReference-Publish-2Doc-ChlamydiaTrachomatis-Vct.md) | Reporting Chlamydia Trachomatis |
| [Publish 2Doc-ChlamydiaTrachomatis with Patient VCT Code (Strict)](DocumentReference-2-DocumentReferenceVctStrict.md) | Reporting Chlamydia Trachomatis |
| [Publish 4Doc-Campylobacter](DocumentReference-Publish-4Doc-Campylobacter.md) | Reporting Campylobacter coli |
| [Publish 5Doc-TreponemaPallidum](DocumentReference-Publish-5Doc-TreponemaPallidum.md) | Reporting Treponema pallidum |
| [Publish 6Doc-Influenza](DocumentReference-Publish-6Doc-Influenza.md) | Reporting Influenza |
| [Publish 7Doc-SARSCoV2](DocumentReference-Publish-7Doc-SARSCoV2.md) | Reporting SARSCoV2 |
| [Publish Response for Neisseria Gonorhoeae completed](DocumentReference-1-DocumentReferenceResponseCompleted.md) | Reporting Neisseria Gonorhoeae |
| [Publish Response for Neisseria Gonorhoeae failed](DocumentReference-1-DocumentReferenceResponseFailed.md) | Reporting Neisseria Gonorhoeae |
| [Publish Response for Neisseria Gonorhoeae in progress](DocumentReference-1-DocumentReferenceResponseInProgress.md) | Reporting Neisseria Gonorhoeae |
| [Publishing with a FOPH code](DocumentReference-example-foph-code.md) | Example Publication with an FOPH code |
| [Test100-Kosovo](TestScript-Test100-Kosovo.md) |  |
| [Test101-InvalidCountryCode](TestScript-Test101-InvalidCountryCode.md) |  |
| [Test102-FOPH-Code-NotValidForStrict](TestScript-Test102-FOPH-Code-NotValidForStrict.md) |  |
| [Test92 - Warning for Ber Uid and Gln](TestScript-Test92-WarningBerUidGln.md) | Test script to verify if incorrect BerUid Gln are detected with warnings |
| [Test92 Bundle - Bundle provoking warning for Ber Uid and Gln](Binary-Test92-Bundle-WarningBerUidGln.md) | Test bundle to verify if incorrect BerUid Gln are detected with warnings |
| [Test93 Bundle - DocumentReference with contained Bundle provoking error for full name for Influenca (must be initials)](Binary-Test93-DocumentReference-Error-FullName-Influenca.md) | Test DocumentReference with contained Bundle provoking error for full name for Influenca (must be initials) |
| [Test93 Error if full name is provided by Influenca (should be initials)](TestScript-Test93-Error-FullName-Influenca.md) | Test script to verify error if full name is provided by Influenca (must be initials) |
| [Test94 - If warning is ignored for Binding for path (.+) has no source](TestScript-Test94-Ignore-Source-Warning.md) | Test script to verify if warning is ignored for Binding for path (.+) has no source |
| [Test95-Ignore-Observation-Interpretation-Codes-Warning](TestScript-Test95-Ignore-Observation-Interpretation-Codes-Warning.md) |  |
| [Test96-Ignore-Slice-Patient-Eu-Lab-Information](TestScript-Test96-Ignore-Slice-Patient-Eu-Lab-Information.md) |  |
| [Test97 Bundle - Coxiella without titer ratio which should raise an error](Binary-Test97-Bundle-CoaxiellaNoRatio.md) | Coxiella without titer ratio which should raise an error |
| [Test97-CoaxiellaNoRatio](TestScript-Test97-CoaxiellaNoRatio.md) |  |
| [Test98 - Verify that error for invalid hiv code is raised](TestScript-Test98-HivInvalidCode.md) | Test script to verify if error is raised for an invalid hiv code |
| [Test99 Bundle - Coxiella without zero denominator should raise an error](Binary-Test99-Bundle-CoaxiellaZeroDenominator.md) | Coxiella with zero denomiator should raise an error |
| [Test99-CoaxiellaZeroDenominator](TestScript-Test99-CoaxiellaZeroDenominator.md) |  |

### Other 

These are resources that are used within this implementation guide that do not fit into one of the other categories.

| |
| :--- |
| [Test100-Bundle-Kosovo](Binary-Test100-Bundle-Kosovo.md) |
| [Test101-Bundle-InvalidCountryCode](Binary-Test101-Bundle-InvalidCountryCode.md) |
| [Test98-Bundle-HivInvalidCode](Binary-Test98-Bundle-HivInvalidCode.md) |

