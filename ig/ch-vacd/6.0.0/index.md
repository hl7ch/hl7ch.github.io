# Home - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ImplementationGuide/ch.fhir.ig.ch-vacd | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CH_VACD |
| **Copyright/Legal**: CC0-1.0 | |

### Introduction

The CH VACD implementation guide describes the FHIR representation of the defined **documents for the exchange of vaccination and immunization information**. This implementation guide is dependent on the CH Core Profiles [CH Core](http://fhir.ch/ig/ch-core/index.html) which describes the Swiss specific resources.

The circumstance to be able to exchange the information across borders had his influence on the specification. The [International Patient Summary Implementation Guide (IPS)](http://hl7.org/fhir/uv/ips/) gave some support (i.e. [Immunization Profile](http://hl7.org/fhir/uv/ips/StructureDefinition-Immunization-uv-ips.html)). Using as much as possible international code systems like SNOMED CT®, LOINC, EDQM UCUM will increase the compatibility across borders.

[Changelog](changelog.md) with significant changes, open and closed issues.

**Download**: You can download this implementation guide in [NPM format](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) from [here](package.tgz).

### Scope

This implementation guide describes mainly the exchange formats and handlings around vaccination. It can be used in different ehealth ecosystems and is not only restricted to the Swiss EPR. The following documents and messages have been defined:

* [Immunization Administration document](immunization-administration-document.md)
* [Vaccination Record document](vaccination-record-document.md)
* [Immunization Recommendation Request message](immunization-recommendation-request-message.md)
* [Immunization Recommendation Response message](immunization-recommendation-response-message.md)

### FHIR RESTful API

Since this IG was created as a specification for a document-based exchange format, it does not contain any specific documentation on the [FHIR RESTful API](https://hl7.org/fhir/http.html).

Nevertheless, the resource profiles defined in this IG can be used in the context of a server with FHIR RESTful API. This also includes uploading and downloading a ch-vacd document.

### MustSupport

The flag [mustSupport](https://www.hl7.org/fhir/profiling.html#mustsupport) demands that the content creator must support these elements if they are known. If the sending application has data for the element, it is required to populate the element with a non-empty value. If the value is not known, the element may be omitted. A receiving application may ignore the information conveyed by the element. A receiving application shall not raise an error solely due to the presence or absence of the element. For more information about the exchange format see [EPD Anhang 4 Austauschformate](https://www.fedlex.admin.ch/filestore/fedlex.data.admin.ch/eli/oce/2022/38/de/pdf-a/fedlex-data-admin-ch-eli-oce-2022-38-de-pdf-a.pdf#page=5).

### Narrative Text Generation

The narrative text in the composition of the bundle of type document can be generated using the FHIR XML representation and the defined xslt transformer defined in this implementation guide. For further details see [Narrative Text Generation](generatenarrativetext.md).

### History

Initially the implementation guide was build up based on the [CDA-CH-VACD - Immunization Content (eVACDOC)](https://art-decor.org/art-decor/decor-project--cdachvacd) [ART-DECOR®](https://www.art-decor.org/mediawiki/index.php/Main_Page) specification which has been [published by eHealth Suisse](http://ehealthsuisse.art-decor.org/). [CDA-CH-VACD - Immunization Content (eVACDOC)](https://art-decor.org/art-decor/decor-project--cdachvacd) defines the documents for the exchange of immunization and vaccination information. The documents are based on the IHE Technical Framework „Patient Care Coordination (PCC)“ with the profile „Immunization Content (IC)“. The IHE PCC himself references the HL7 Clinical Document Architecture (CDA).

During the development of the IG a lot of issues popped up which had to be resolved. The fact that the version 2.1 of the CDA was not really in use led to the cut of the reverse compatibility to the CDA in order to be able to set up a proper and usable exchange format based on FHIR.

### Collaboration

This guide is created by [RALY GmbH](https://www.raly.ch) as a mandate of [eHealth Suisse](https://www.e-health-suisse.ch/startseite.html).

There was also support from

* [HL7 Switzerland](https://www.hl7.ch)
* [Swiss FHIR Implementers Community](https://www.fhir.ch/)
* [HCI Solutions](https://www.hcisolutions.ch)
* [CISTEC](https://www.cistec.com)

especially during the executed ballots.

### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

This publication includes IP covered under the following statements.

* CC0-1.0

* [Basic Immunization codes](CodeSystem-ch-vacd-basic-immunization-cs.md): [BasicImmunizationCode](ValueSet-ch-vacd-basic-immunization-vs.md) and [CHVACDBasicImmunization](StructureDefinition-ch-vacd-basic-immunization.md)
* [CDS Event](CodeSystem-ch-vacd-clinical-decision-support-event-cs.md): [Bundle/1-4-ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md), [Bundle/1-5-ImmunizationRecommendationResponse](Bundle-1-5-ImmunizationRecommendationResponse.md)...Show 4 more,[CHVACDRecommendationRequestMessageHeader](StructureDefinition-ch-vacd-recommendation-request-messageheader.md),[CHVACDRecommendationResponseMessageHeader](StructureDefinition-ch-vacd-recommendation-response-messageheader.md),[MessageHeader/2-4-ImmunizationRecommendationRequestMessageHeader](MessageHeader-2-4-ImmunizationRecommendationRequestMessageHeader.md)and[MessageHeader/2-5-ImmunizationRecommendationResponseMessageHeader](MessageHeader-2-5-ImmunizationRecommendationResponseMessageHeader.md)
* [Entry Conflict Code System](CodeSystem-ch-vacd-entry-conflict-cs.md): [CHVACDEntryConflictCode](ValueSet-ch-vacd-entry-conflict-vs.md) and [CHVACDExtensionMergingConflictEntryReference](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md)
* [Swiss Exposure Risks Codesystem](CodeSystem-ch-vacd-exposure-risks-cs.md): [SwissOccupationRisksForImmunizations](ValueSet-ch-vacd-risks-occupation-vs.md)
* [CH VACD Swiss Immunization Recommendation Categories](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ch-vacd-recommendation-categories-cs.html): [Bundle/1-5-ImmunizationRecommendationResponse](Bundle-1-5-ImmunizationRecommendationResponse.md), [CHVACDImmunizationRecommendation](StructureDefinition-ch-vacd-immunization-recommendation.md)...Show 4 more,[ImmunizationRecommendation/10-1-ImmunizationRecommendation](ImmunizationRecommendation-10-1-ImmunizationRecommendation.md),[ImmunizationRecommendation/10-2-ImmunizationRecommendation](ImmunizationRecommendation-10-2-ImmunizationRecommendation.md),[ImmunizationRecommendation/10-3-ImmunizationRecommendation](ImmunizationRecommendation-10-3-ImmunizationRecommendation.md)and[ImmunizationRecommendation/10-4-ImmunizationRecommendation](ImmunizationRecommendation-10-4-ImmunizationRecommendation.md)
* [CH VACD Swiss Recommendation Forecast Status](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ch-vacd-recommendation-forecast-status-cs.html): [Bundle/1-5-ImmunizationRecommendationResponse](Bundle-1-5-ImmunizationRecommendationResponse.md), [ImmunizationRecommendation/10-1-ImmunizationRecommendation](ImmunizationRecommendation-10-1-ImmunizationRecommendation.md), [ImmunizationRecommendation/10-2-ImmunizationRecommendation](ImmunizationRecommendation-10-2-ImmunizationRecommendation.md), [ImmunizationRecommendation/10-3-ImmunizationRecommendation](ImmunizationRecommendation-10-3-ImmunizationRecommendation.md) and [ImmunizationRecommendation/10-4-ImmunizationRecommendation](ImmunizationRecommendation-10-4-ImmunizationRecommendation.md)
* [CH VACD Swissmedic Authorized Vaccines](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ch-vacd-swissmedic-cs.html): [Bundle/1-1-ImmunizationAdministration](Bundle-1-1-ImmunizationAdministration.md), [Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md)...Show 89 more,[Bundle/1-4-ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md),[Bundle/A-D1-P-C1](Bundle-A-D1-P-C1.md),[Bundle/A-D2-HCP1-C1](Bundle-A-D2-HCP1-C1.md),[Bundle/A-D3-HCP2-C2](Bundle-A-D3-HCP2-C2.md),[Bundle/A-D4-HCP2-C2](Bundle-A-D4-HCP2-C2.md),[Bundle/A-D5-P-C1](Bundle-A-D5-P-C1.md),[Bundle/A-D6-HCP1-C1](Bundle-A-D6-HCP1-C1.md),[Bundle/B-D1-HCP1-C1](Bundle-B-D1-HCP1-C1.md),[Bundle/C-D1-P-C1](Bundle-C-D1-P-C1.md),[Bundle/C-D2-HCP1-C1](Bundle-C-D2-HCP1-C1.md),[Bundle/D-D1-HCP1-C1](Bundle-D-D1-HCP1-C1.md),[Bundle/D-D2-HCP2-C2](Bundle-D-D2-HCP2-C2.md),[Bundle/D-D3-HCP1-C1](Bundle-D-D3-HCP1-C1.md),[Bundle/D-D4-HCP2-C2](Bundle-D-D4-HCP2-C2.md),[Bundle/E-D1-HCP1-C1](Bundle-E-D1-HCP1-C1.md),[Bundle/F-D1-HCP1-C1](Bundle-F-D1-HCP1-C1.md),[Bundle/F-D2-HCP1-C1](Bundle-F-D2-HCP1-C1.md),[Bundle/RDA01](Bundle-RDA01.md),[Bundle/RDA01b](Bundle-RDA01b.md),[Bundle/RDA02](Bundle-RDA02.md),[Bundle/RDA02b](Bundle-RDA02b.md),[Bundle/RDA03](Bundle-RDA03.md),[Bundle/RDA03b](Bundle-RDA03b.md),[Bundle/RDA04](Bundle-RDA04.md),[Bundle/RDA04b](Bundle-RDA04b.md),[Bundle/RDB01](Bundle-RDB01.md),[Bundle/RDB01b](Bundle-RDB01b.md),[Bundle/RDB02](Bundle-RDB02.md),[Bundle/RDB02b](Bundle-RDB02b.md),[Bundle/RDB03](Bundle-RDB03.md),[Bundle/RDB03b](Bundle-RDB03b.md),[Bundle/RDB04](Bundle-RDB04.md),[Bundle/RDB04b](Bundle-RDB04b.md),[Bundle/RDB05](Bundle-RDB05.md),[Bundle/RDB05b](Bundle-RDB05b.md),[Bundle/RDC01](Bundle-RDC01.md),[Bundle/RDC01b](Bundle-RDC01b.md),[Bundle/RDC02](Bundle-RDC02.md),[Bundle/RDC02b](Bundle-RDC02b.md),[Bundle/RDC03](Bundle-RDC03.md),[Bundle/RDC03b](Bundle-RDC03b.md),[Bundle/RDD01](Bundle-RDD01.md),[Bundle/RDD01b](Bundle-RDD01b.md),[Bundle/RDD02](Bundle-RDD02.md),[Bundle/RDD02b](Bundle-RDD02b.md),[Bundle/RDE01](Bundle-RDE01.md),[Bundle/RDE01b](Bundle-RDE01b.md),[Bundle/RDF01](Bundle-RDF01.md),[Bundle/RDF01b](Bundle-RDF01b.md),[Immunization/7-1-Immunization](Immunization-7-1-Immunization.md),[Immunization/7-10-Immunization](Immunization-7-10-Immunization.md),[Immunization/7-11-Immunization](Immunization-7-11-Immunization.md),[Immunization/7-12-Immunization](Immunization-7-12-Immunization.md),[Immunization/7-2-Immunization](Immunization-7-2-Immunization.md),[Immunization/7-3-Immunization](Immunization-7-3-Immunization.md),[Immunization/7-4-Immunization](Immunization-7-4-Immunization.md),[Immunization/7-5-Immunization](Immunization-7-5-Immunization.md),[Immunization/7-6-Immunization](Immunization-7-6-Immunization.md),[Immunization/7-7-Immunization](Immunization-7-7-Immunization.md),[Immunization/7-8-Immunization](Immunization-7-8-Immunization.md),[Immunization/7-9-Immunization](Immunization-7-9-Immunization.md),[Immunization/TCA01-IMMUN1-patient](Immunization-TCA01-IMMUN1-patient.md),[Immunization/TCA01-IMMUN2-HCP1-ORG1-ROLE](Immunization-TCA01-IMMUN2-HCP1-ORG1-ROLE.md),[Immunization/TCA01-IMMUN3-HCP2-ORG2-ROLE](Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.md),[Immunization/TCA02-IMMUN4-HCP2-ORG2-ROLE](Immunization-TCA02-IMMUN4-HCP2-ORG2-ROLE.md),[Immunization/TCA03-IMMUN5-patient](Immunization-TCA03-IMMUN5-patient.md),[Immunization/TCA04-IMMUN5-patient-val-gfp](Immunization-TCA04-IMMUN5-patient-val-gfp.md),[Immunization/TCB01-IMMUN1](Immunization-TCB01-IMMUN1.md),[Immunization/TCB01-IMMUN2](Immunization-TCB01-IMMUN2.md),[Immunization/TCB05-IMMUN1](Immunization-TCB05-IMMUN1.md),[Immunization/TCB05-IMMUN2](Immunization-TCB05-IMMUN2.md),[Immunization/TCC01-IMMUN1-patient](Immunization-TCC01-IMMUN1-patient.md),[Immunization/TCC01-IMMUN2-patient](Immunization-TCC01-IMMUN2-patient.md),[Immunization/TCC02-IMMUN3-HCP1-ORG1-ROLE](Immunization-TCC02-IMMUN3-HCP1-ORG1-ROLE.md),[Immunization/TCC02-IMMUN4-HCP1-ORG1-ROLE](Immunization-TCC02-IMMUN4-HCP1-ORG1-ROLE.md),[Immunization/TCD01-IMMUN1](Immunization-TCD01-IMMUN1.md),[Immunization/TCD01-IMMUN2](Immunization-TCD01-IMMUN2.md),[Immunization/TCD01-IMMUN2-2](Immunization-TCD01-IMMUN2-2.md),[Immunization/TCD01-IMMUN3](Immunization-TCD01-IMMUN3.md),[Immunization/TCD01-IMMUN3-2](Immunization-TCD01-IMMUN3-2.md),[Immunization/TCD01-IMMUN4](Immunization-TCD01-IMMUN4.md),[Immunization/TCD01-IMMUN5](Immunization-TCD01-IMMUN5.md),[Immunization/TCE01-IMMUN1-de](Immunization-TCE01-IMMUN1-de.md),[Immunization/TCE01-IMMUN1-fr](Immunization-TCE01-IMMUN1-fr.md),[Immunization/TCE01-IMMUN2-de](Immunization-TCE01-IMMUN2-de.md),[Immunization/TCE01-IMMUN2-fr](Immunization-TCE01-IMMUN2-fr.md),[Immunization/TCF01-IMMUN1](Immunization-TCF01-IMMUN1.md),[Immunization/TCF01-IMMUN2](Immunization-TCF01-IMMUN2.md)and[Immunization/TCF01-IMMUN3](Immunization-TCF01-IMMUN3.md)
* [EDQM - Standard Terms](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-edqm-standardterms.html): [Bundle/A-D1-P-C1](Bundle-A-D1-P-C1.md), [Bundle/A-D3-HCP2-C2](Bundle-A-D3-HCP2-C2.md)...Show 51 more,[Bundle/A-D4-HCP2-C2](Bundle-A-D4-HCP2-C2.md),[Bundle/A-D5-P-C1](Bundle-A-D5-P-C1.md),[Bundle/A-D6-HCP1-C1](Bundle-A-D6-HCP1-C1.md),[Bundle/B-D1-HCP1-C1](Bundle-B-D1-HCP1-C1.md),[Bundle/C-D1-P-C1](Bundle-C-D1-P-C1.md),[Bundle/C-D2-HCP1-C1](Bundle-C-D2-HCP1-C1.md),[Bundle/D-D1-HCP1-C1](Bundle-D-D1-HCP1-C1.md),[Bundle/D-D2-HCP2-C2](Bundle-D-D2-HCP2-C2.md),[Bundle/D-D3-HCP1-C1](Bundle-D-D3-HCP1-C1.md),[Bundle/D-D4-HCP2-C2](Bundle-D-D4-HCP2-C2.md),[Bundle/E-D1-HCP1-C1](Bundle-E-D1-HCP1-C1.md),[Bundle/F-D1-HCP1-C1](Bundle-F-D1-HCP1-C1.md),[Bundle/F-D2-HCP1-C1](Bundle-F-D2-HCP1-C1.md),[Bundle/RDA01](Bundle-RDA01.md),[Bundle/RDA01b](Bundle-RDA01b.md),[Bundle/RDA02](Bundle-RDA02.md),[Bundle/RDA02b](Bundle-RDA02b.md),[Bundle/RDA03](Bundle-RDA03.md),[Bundle/RDA03b](Bundle-RDA03b.md),[Bundle/RDA04](Bundle-RDA04.md),[Bundle/RDA04b](Bundle-RDA04b.md),[Bundle/RDB01](Bundle-RDB01.md),[Bundle/RDB01b](Bundle-RDB01b.md),[Bundle/RDB02](Bundle-RDB02.md),[Bundle/RDB02b](Bundle-RDB02b.md),[Bundle/RDB03](Bundle-RDB03.md),[Bundle/RDB03b](Bundle-RDB03b.md),[Bundle/RDB04](Bundle-RDB04.md),[Bundle/RDB04b](Bundle-RDB04b.md),[Bundle/RDB05](Bundle-RDB05.md),[Bundle/RDB05b](Bundle-RDB05b.md),[Bundle/RDC01](Bundle-RDC01.md),[Bundle/RDC01b](Bundle-RDC01b.md),[Bundle/RDC02](Bundle-RDC02.md),[Bundle/RDC02b](Bundle-RDC02b.md),[Bundle/RDC03](Bundle-RDC03.md),[Bundle/RDC03b](Bundle-RDC03b.md),[Bundle/RDD01](Bundle-RDD01.md),[Bundle/RDD01b](Bundle-RDD01b.md),[Bundle/RDD02](Bundle-RDD02.md),[Bundle/RDD02b](Bundle-RDD02b.md),[Bundle/RDE01](Bundle-RDE01.md),[Bundle/RDE01b](Bundle-RDE01b.md),[Bundle/RDF01](Bundle-RDF01.md),[Bundle/RDF01b](Bundle-RDF01b.md),[CHVACDMedicationForImmunization](StructureDefinition-ch-vacd-medication-for-immunization.md),[Medication/TC-IMMUN-MEDIC-BOOSTRIX](Medication-TC-IMMUN-MEDIC-BOOSTRIX.md),[Medication/TC-IMMUN-MEDIC-FSMEIMMCC](Medication-TC-IMMUN-MEDIC-FSMEIMMCC.md),[Medication/TC-IMMUN-MEDIC-GARDASIL9](Medication-TC-IMMUN-MEDIC-GARDASIL9.md),[Medication/TC-IMMUN-MEDIC-HAVRIX1440](Medication-TC-IMMUN-MEDIC-HAVRIX1440.md)and[Medication/TC-IMMUN-MEDIC-PRIORIX](Medication-TC-IMMUN-MEDIC-PRIORIX.md)
* [DICOM Unique Identifiers (UIDs)](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-dcmuid.html): [CHVACDCompositionImmunizationAdministration](StructureDefinition-ch-vacd-composition-immunization-administration.md) and [CHVACDCompositionVaccinationRecord](StructureDefinition-ch-vacd-composition-vaccination-record.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [AllergiesAndIntolerancesForImmunization](ValueSet-ch-vacd-immunization-allergyintolerances-vs.md), [BasicImmunizationCode](ValueSet-ch-vacd-basic-immunization-vs.md)...Show 33 more,[BasicImmunizationCodesystem](CodeSystem-ch-vacd-basic-immunization-cs.md),[CHVACDAllergyIntolerance](StructureDefinition-ch-vacd-allergyintolerances.md),[CHVACDBasicImmunization](StructureDefinition-ch-vacd-basic-immunization.md),[CHVACDCompositionImmunizationAdministration](StructureDefinition-ch-vacd-composition-immunization-administration.md),[CHVACDCompositionVaccinationRecord](StructureDefinition-ch-vacd-composition-vaccination-record.md),[CHVACDCondition](StructureDefinition-ch-vacd-condition.md),[CHVACDDocumentImmunizationAdministration](StructureDefinition-ch-vacd-document-immunization-administration.md),[CHVACDDocumentVaccinationRecord](StructureDefinition-ch-vacd-document-vaccination-record.md),[CHVACDEntryConflictCode](ValueSet-ch-vacd-entry-conflict-vs.md),[CHVACDExtensionImmunizationMedicationReference](StructureDefinition-ch-vacd-ext-immunization-medication-reference.md),[CHVACDExtensionMergingConflictEntryReference](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md),[CHVACDExtensionVerificationStatus](StructureDefinition-ch-vacd-ext-verification-status.md),[CHVACDImmunization](StructureDefinition-ch-vacd-immunization.md),[CHVACDImmunizationRecommendation](StructureDefinition-ch-vacd-immunization-recommendation.md),[CHVACDLaboratorySerology](StructureDefinition-ch-vacd-laboratory-serology.md),[CHVACDMedicalProblems](StructureDefinition-ch-vacd-medical-problems.md),[CHVACDMedicationForImmunization](StructureDefinition-ch-vacd-medication-for-immunization.md),[CHVACDPastIllness](StructureDefinition-ch-vacd-pastillnesses.md),[CHVACDRecommendationRequestMessage](StructureDefinition-ch-vacd-recommendation-request-message.md),[CHVACDRecommendationRequestMessageHeader](StructureDefinition-ch-vacd-recommendation-request-messageheader.md),[CHVACDRecommendationResponseMessage](StructureDefinition-ch-vacd-recommendation-response-message.md),[CHVACDRecommendationResponseMessageHeader](StructureDefinition-ch-vacd-recommendation-response-messageheader.md),[CHVACDVerificationStatusVS](ValueSet-ch-vacd-verification-status-vs.md),[CH_VACD](index.md),[ClinicalDecisionSupportEvent](CodeSystem-ch-vacd-clinical-decision-support-event-cs.md),[EntryConflictCodesystem](CodeSystem-ch-vacd-entry-conflict-cs.md),[LaboratorySerologyImmunization](ValueSet-ch-vacd-laboratory-serology-vs.md),[SwissExposureRisksCodesystem](CodeSystem-ch-vacd-exposure-risks-cs.md),[SwissMedicalRisksForImmunizations](ValueSet-ch-vacd-risks-medical-vs.md),[SwissOccupationRisksForImmunizations](ValueSet-ch-vacd-risks-occupation-vs.md),[SwissPreillnessRisksForImmunizations](ValueSet-ch-vacd-risks-preillness-vs.md),[SwissRisksForImmunizations](ValueSet-ch-vacd-risks-vs.md)and[SwissSocialRisksForImmunizations](ValueSet-ch-vacd-risks-social-vs.md)


* Some content from IHE® Copyright © 2015 [IHE International, Inc](http://www.ihe.net/Governance/#Intellectual_Property) .

* [IHE Format Code set for use with Document Sharing](https://profiles.ihe.net/fhir/ihe.formatcode.fhir/1.4.0/CodeSystem-formatcode.html): [CHVACDCompositionImmunizationAdministration](StructureDefinition-ch-vacd-composition-immunization-administration.md) and [CHVACDCompositionVaccinationRecord](StructureDefinition-ch-vacd-composition-vaccination-record.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-ucum.html): [Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md), [Bundle/1-4-ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md)...Show 56 more,[Bundle/A-D1-P-C1](Bundle-A-D1-P-C1.md),[Bundle/A-D3-HCP2-C2](Bundle-A-D3-HCP2-C2.md),[Bundle/A-D4-HCP2-C2](Bundle-A-D4-HCP2-C2.md),[Bundle/A-D5-P-C1](Bundle-A-D5-P-C1.md),[Bundle/A-D6-HCP1-C1](Bundle-A-D6-HCP1-C1.md),[Bundle/B-D1-HCP1-C1](Bundle-B-D1-HCP1-C1.md),[Bundle/B-D5-HCP1-C1](Bundle-B-D5-HCP1-C1.md),[Bundle/C-D1-P-C1](Bundle-C-D1-P-C1.md),[Bundle/C-D2-HCP1-C1](Bundle-C-D2-HCP1-C1.md),[Bundle/D-D1-HCP1-C1](Bundle-D-D1-HCP1-C1.md),[Bundle/D-D2-HCP2-C2](Bundle-D-D2-HCP2-C2.md),[Bundle/D-D3-HCP1-C1](Bundle-D-D3-HCP1-C1.md),[Bundle/D-D4-HCP2-C2](Bundle-D-D4-HCP2-C2.md),[Bundle/E-D1-HCP1-C1](Bundle-E-D1-HCP1-C1.md),[Bundle/F-D1-HCP1-C1](Bundle-F-D1-HCP1-C1.md),[Bundle/F-D2-HCP1-C1](Bundle-F-D2-HCP1-C1.md),[Bundle/RDA01](Bundle-RDA01.md),[Bundle/RDA01b](Bundle-RDA01b.md),[Bundle/RDA02](Bundle-RDA02.md),[Bundle/RDA02b](Bundle-RDA02b.md),[Bundle/RDA03](Bundle-RDA03.md),[Bundle/RDA03b](Bundle-RDA03b.md),[Bundle/RDA04](Bundle-RDA04.md),[Bundle/RDA04b](Bundle-RDA04b.md),[Bundle/RDB01](Bundle-RDB01.md),[Bundle/RDB01b](Bundle-RDB01b.md),[Bundle/RDB02](Bundle-RDB02.md),[Bundle/RDB02b](Bundle-RDB02b.md),[Bundle/RDB03](Bundle-RDB03.md),[Bundle/RDB03b](Bundle-RDB03b.md),[Bundle/RDB04](Bundle-RDB04.md),[Bundle/RDB04b](Bundle-RDB04b.md),[Bundle/RDB05](Bundle-RDB05.md),[Bundle/RDB05b](Bundle-RDB05b.md),[Bundle/RDC01](Bundle-RDC01.md),[Bundle/RDC01b](Bundle-RDC01b.md),[Bundle/RDC02](Bundle-RDC02.md),[Bundle/RDC02b](Bundle-RDC02b.md),[Bundle/RDC03](Bundle-RDC03.md),[Bundle/RDC03b](Bundle-RDC03b.md),[Bundle/RDD01](Bundle-RDD01.md),[Bundle/RDD01b](Bundle-RDD01b.md),[Bundle/RDD02](Bundle-RDD02.md),[Bundle/RDD02b](Bundle-RDD02b.md),[Bundle/RDE01](Bundle-RDE01.md),[Bundle/RDE01b](Bundle-RDE01b.md),[Bundle/RDF01](Bundle-RDF01.md),[Bundle/RDF01b](Bundle-RDF01b.md),[Medication/TC-IMMUN-MEDIC-BOOSTRIX](Medication-TC-IMMUN-MEDIC-BOOSTRIX.md),[Medication/TC-IMMUN-MEDIC-FSMEIMMCC](Medication-TC-IMMUN-MEDIC-FSMEIMMCC.md),[Medication/TC-IMMUN-MEDIC-GARDASIL9](Medication-TC-IMMUN-MEDIC-GARDASIL9.md),[Medication/TC-IMMUN-MEDIC-HAVRIX1440](Medication-TC-IMMUN-MEDIC-HAVRIX1440.md),[Medication/TC-IMMUN-MEDIC-PRIORIX](Medication-TC-IMMUN-MEDIC-PRIORIX.md),[Observation/9-1-Observation](Observation-9-1-Observation.md),[Observation/9-2-Observation](Observation-9-2-Observation.md)and[Observation/TCB04-LABRES1](Observation-TCB04-LABRES1.md)


* This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact [http://www.snomed.org/snomed-ct/getsnomed-ct](http://www.snomed.org/snomed-ct/getsnomed-ct) or info@snomed.org.

* [ch-ehealth-codesystem-format](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-2.16.756.5.30.1.127.3.10.10.html): [Bundle/1-1-ImmunizationAdministration](Bundle-1-1-ImmunizationAdministration.md), [Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md)...Show 156 more,[Bundle/A-D1-P-C1](Bundle-A-D1-P-C1.md),[Bundle/A-D2-HCP1-C1](Bundle-A-D2-HCP1-C1.md),[Bundle/A-D3-HCP2-C2](Bundle-A-D3-HCP2-C2.md),[Bundle/A-D4-HCP2-C2](Bundle-A-D4-HCP2-C2.md),[Bundle/A-D5-P-C1](Bundle-A-D5-P-C1.md),[Bundle/A-D6-HCP1-C1](Bundle-A-D6-HCP1-C1.md),[Bundle/B-D1-HCP1-C1](Bundle-B-D1-HCP1-C1.md),[Bundle/B-D2-HCP1-C1](Bundle-B-D2-HCP1-C1.md),[Bundle/B-D3-HCP1-C1](Bundle-B-D3-HCP1-C1.md),[Bundle/B-D4-HCP1-C1](Bundle-B-D4-HCP1-C1.md),[Bundle/B-D5-HCP1-C1](Bundle-B-D5-HCP1-C1.md),[Bundle/B-D6-HCP1-C1](Bundle-B-D6-HCP1-C1.md),[Bundle/C-D1-P-C1](Bundle-C-D1-P-C1.md),[Bundle/C-D2-HCP1-C1](Bundle-C-D2-HCP1-C1.md),[Bundle/C-D3-HCP1-C1](Bundle-C-D3-HCP1-C1.md),[Bundle/C-D4-HCP2-C2](Bundle-C-D4-HCP2-C2.md),[Bundle/C-D5-HCP1-C1](Bundle-C-D5-HCP1-C1.md),[Bundle/C-D6-P-C1](Bundle-C-D6-P-C1.md),[Bundle/C-D7-HCP1-C1](Bundle-C-D7-HCP1-C1.md),[Bundle/D-D1-HCP1-C1](Bundle-D-D1-HCP1-C1.md),[Bundle/D-D2-HCP2-C2](Bundle-D-D2-HCP2-C2.md),[Bundle/D-D3-HCP1-C1](Bundle-D-D3-HCP1-C1.md),[Bundle/D-D4-HCP2-C2](Bundle-D-D4-HCP2-C2.md),[Bundle/D-D5-HCP1-C1](Bundle-D-D5-HCP1-C1.md),[Bundle/D-D6-HCP2-C2](Bundle-D-D6-HCP2-C2.md),[Bundle/D-D7-HCP3-C1](Bundle-D-D7-HCP3-C1.md),[Bundle/E-D1-HCP1-C1](Bundle-E-D1-HCP1-C1.md),[Bundle/E-D2-HCP1-C1](Bundle-E-D2-HCP1-C1.md),[Bundle/F-D1-HCP1-C1](Bundle-F-D1-HCP1-C1.md),[Bundle/F-D2-HCP1-C1](Bundle-F-D2-HCP1-C1.md),[Bundle/F-D3-HCP1-C1](Bundle-F-D3-HCP1-C1.md),[Bundle/F-D4-HCP1-C1](Bundle-F-D4-HCP1-C1.md),[Bundle/F-D5-HCP1-C1](Bundle-F-D5-HCP1-C1.md),[Bundle/F-D6-HCP1-C1](Bundle-F-D6-HCP1-C1.md),[Bundle/RDA01](Bundle-RDA01.md),[Bundle/RDA01b](Bundle-RDA01b.md),[Bundle/RDA02](Bundle-RDA02.md),[Bundle/RDA02b](Bundle-RDA02b.md),[Bundle/RDA03](Bundle-RDA03.md),[Bundle/RDA03b](Bundle-RDA03b.md),[Bundle/RDA04](Bundle-RDA04.md),[Bundle/RDA04b](Bundle-RDA04b.md),[Bundle/RDB01](Bundle-RDB01.md),[Bundle/RDB01b](Bundle-RDB01b.md),[Bundle/RDB02](Bundle-RDB02.md),[Bundle/RDB02b](Bundle-RDB02b.md),[Bundle/RDB03](Bundle-RDB03.md),[Bundle/RDB03b](Bundle-RDB03b.md),[Bundle/RDB04](Bundle-RDB04.md),[Bundle/RDB04b](Bundle-RDB04b.md),[Bundle/RDB05](Bundle-RDB05.md),[Bundle/RDB05b](Bundle-RDB05b.md),[Bundle/RDC01](Bundle-RDC01.md),[Bundle/RDC01b](Bundle-RDC01b.md),[Bundle/RDC02](Bundle-RDC02.md),[Bundle/RDC02b](Bundle-RDC02b.md),[Bundle/RDC03](Bundle-RDC03.md),[Bundle/RDC03b](Bundle-RDC03b.md),[Bundle/RDC04](Bundle-RDC04.md),[Bundle/RDC04b](Bundle-RDC04b.md),[Bundle/RDC05](Bundle-RDC05.md),[Bundle/RDC05b](Bundle-RDC05b.md),[Bundle/RDD01](Bundle-RDD01.md),[Bundle/RDD01b](Bundle-RDD01b.md),[Bundle/RDD02](Bundle-RDD02.md),[Bundle/RDD02b](Bundle-RDD02b.md),[Bundle/RDD03](Bundle-RDD03.md),[Bundle/RDD03b](Bundle-RDD03b.md),[Bundle/RDE01](Bundle-RDE01.md),[Bundle/RDE01b](Bundle-RDE01b.md),[Bundle/RDF01](Bundle-RDF01.md),[Bundle/RDF01b](Bundle-RDF01b.md),[Bundle/RDF02](Bundle-RDF02.md),[Bundle/RDF02b](Bundle-RDF02b.md),[Bundle/RDF03](Bundle-RDF03.md),[Bundle/RDF03b](Bundle-RDF03b.md),[CHVACDCompositionImmunizationAdministration](StructureDefinition-ch-vacd-composition-immunization-administration.md),[CHVACDCompositionVaccinationRecord](StructureDefinition-ch-vacd-composition-vaccination-record.md),[Composition/2-1-ImmunizationAdministrationComposition](Composition-2-1-ImmunizationAdministrationComposition.md),[Composition/2-3-VaccinationRecordComposition](Composition-2-3-VaccinationRecordComposition.md),[Composition/A-D1-P-C1-Composition](Composition-A-D1-P-C1-Composition.md),[Composition/A-D2-HCP1-C1-Composition](Composition-A-D2-HCP1-C1-Composition.md),[Composition/A-D3-HCP2-C2-Composition](Composition-A-D3-HCP2-C2-Composition.md),[Composition/A-D4-HCP2-C2-Composition](Composition-A-D4-HCP2-C2-Composition.md),[Composition/A-D5-P-C1-Composition](Composition-A-D5-P-C1-Composition.md),[Composition/A-D6-HCP1-C1-Composition](Composition-A-D6-HCP1-C1-Composition.md),[Composition/B-D1-HCP1-C1-Composition](Composition-B-D1-HCP1-C1-Composition.md),[Composition/B-D2-HCP1-C1-Composition](Composition-B-D2-HCP1-C1-Composition.md),[Composition/B-D3-HCP1-C1-Composition](Composition-B-D3-HCP1-C1-Composition.md),[Composition/B-D4-HCP1-C1-Composition](Composition-B-D4-HCP1-C1-Composition.md),[Composition/B-D5-HCP1-C1-Composition](Composition-B-D5-HCP1-C1-Composition.md),[Composition/B-D6-HCP1-C1-Composition](Composition-B-D6-HCP1-C1-Composition.md),[Composition/C-D1-P-C1-Composition](Composition-C-D1-P-C1-Composition.md),[Composition/C-D2-HCP1-C1-Composition](Composition-C-D2-HCP1-C1-Composition.md),[Composition/C-D3-HCP1-C1-Composition](Composition-C-D3-HCP1-C1-Composition.md),[Composition/C-D4-HCP2-C2-Composition](Composition-C-D4-HCP2-C2-Composition.md),[Composition/C-D5-HCP1-C1-Composition](Composition-C-D5-HCP1-C1-Composition.md),[Composition/C-D6-P-C1-Composition](Composition-C-D6-P-C1-Composition.md),[Composition/C-D7-HCP1-C1-Composition](Composition-C-D7-HCP1-C1-Composition.md),[Composition/D-D1-HCP1-C1-Composition](Composition-D-D1-HCP1-C1-Composition.md),[Composition/D-D2-HCP2-C2-Composition](Composition-D-D2-HCP2-C2-Composition.md),[Composition/D-D3-HCP1-C1-Composition](Composition-D-D3-HCP1-C1-Composition.md),[Composition/D-D4-HCP2-C2-Composition](Composition-D-D4-HCP2-C2-Composition.md),[Composition/D-D5-HCP1-C1-Composition](Composition-D-D5-HCP1-C1-Composition.md),[Composition/D-D6-HCP2-C2-Composition](Composition-D-D6-HCP2-C2-Composition.md),[Composition/D-D7-HCP3-C1-Composition](Composition-D-D7-HCP3-C1-Composition.md),[Composition/E-D1-HCP1-C1-Composition](Composition-E-D1-HCP1-C1-Composition.md),[Composition/E-D2-HCP1-C1-Composition](Composition-E-D2-HCP1-C1-Composition.md),[Composition/F-D1-HCP1-C1-Composition](Composition-F-D1-HCP1-C1-Composition.md),[Composition/F-D2-HCP1-C1-Composition](Composition-F-D2-HCP1-C1-Composition.md),[Composition/F-D3-HCP1-C1-Composition](Composition-F-D3-HCP1-C1-Composition.md),[Composition/F-D4-HCP1-C1-Composition](Composition-F-D4-HCP1-C1-Composition.md),[Composition/F-D5-HCP1-C1-Composition](Composition-F-D5-HCP1-C1-Composition.md),[Composition/F-D6-HCP1-C1-Composition](Composition-F-D6-HCP1-C1-Composition.md),[Composition/RDA01-Composition](Composition-RDA01-Composition.md),[Composition/RDA01-Composition-b](Composition-RDA01-Composition-b.md),[Composition/RDA02-Composition](Composition-RDA02-Composition.md),[Composition/RDA02-Composition-b](Composition-RDA02-Composition-b.md),[Composition/RDA03-Composition](Composition-RDA03-Composition.md),[Composition/RDA03-Composition-b](Composition-RDA03-Composition-b.md),[Composition/RDA04-Composition](Composition-RDA04-Composition.md),[Composition/RDA04-Composition-b](Composition-RDA04-Composition-b.md),[Composition/RDB01-Composition](Composition-RDB01-Composition.md),[Composition/RDB01-Composition-b](Composition-RDB01-Composition-b.md),[Composition/RDB02-Composition](Composition-RDB02-Composition.md),[Composition/RDB02-Composition-b](Composition-RDB02-Composition-b.md),[Composition/RDB03-Composition](Composition-RDB03-Composition.md),[Composition/RDB03-Composition-b](Composition-RDB03-Composition-b.md),[Composition/RDB04-Composition](Composition-RDB04-Composition.md),[Composition/RDB04-Composition-b](Composition-RDB04-Composition-b.md),[Composition/RDB05-Composition](Composition-RDB05-Composition.md),[Composition/RDB05-Composition-b](Composition-RDB05-Composition-b.md),[Composition/RDC01-Composition](Composition-RDC01-Composition.md),[Composition/RDC01-Composition-b](Composition-RDC01-Composition-b.md),[Composition/RDC02-Composition](Composition-RDC02-Composition.md),[Composition/RDC02-Composition-b](Composition-RDC02-Composition-b.md),[Composition/RDC03-Composition](Composition-RDC03-Composition.md),[Composition/RDC03-Composition-b](Composition-RDC03-Composition-b.md),[Composition/RDC04-Composition](Composition-RDC04-Composition.md),[Composition/RDC04-Composition-b](Composition-RDC04-Composition-b.md),[Composition/RDC05-Composition](Composition-RDC05-Composition.md),[Composition/RDC05-Composition-b](Composition-RDC05-Composition-b.md),[Composition/RDD01-Composition](Composition-RDD01-Composition.md),[Composition/RDD01-Composition-b](Composition-RDD01-Composition-b.md),[Composition/RDD02-Composition](Composition-RDD02-Composition.md),[Composition/RDD02-Composition-b](Composition-RDD02-Composition-b.md),[Composition/RDD03-Composition](Composition-RDD03-Composition.md),[Composition/RDD03-Composition-b](Composition-RDD03-Composition-b.md),[Composition/RDE01-Composition](Composition-RDE01-Composition.md),[Composition/RDE01-Composition-b](Composition-RDE01-Composition-b.md),[Composition/RDF01-Composition](Composition-RDF01-Composition.md),[Composition/RDF01-Composition-b](Composition-RDF01-Composition-b.md),[Composition/RDF02-Composition](Composition-RDF02-Composition.md),[Composition/RDF02-Composition-b](Composition-RDF02-Composition-b.md),[Composition/RDF03-Composition](Composition-RDF03-Composition.md)and[Composition/RDF03-Composition-b](Composition-RDF03-Composition-b.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/1-1-ImmunizationAdministration](Bundle-1-1-ImmunizationAdministration.md), [Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md)...Show 167 more,[Bundle/1-4-ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md),[Bundle/1-5-ImmunizationRecommendationResponse](Bundle-1-5-ImmunizationRecommendationResponse.md),[Bundle/A-D1-P-C1](Bundle-A-D1-P-C1.md),[Bundle/A-D2-HCP1-C1](Bundle-A-D2-HCP1-C1.md),[Bundle/A-D3-HCP2-C2](Bundle-A-D3-HCP2-C2.md),[Bundle/A-D4-HCP2-C2](Bundle-A-D4-HCP2-C2.md),[Bundle/A-D5-P-C1](Bundle-A-D5-P-C1.md),[Bundle/A-D6-HCP1-C1](Bundle-A-D6-HCP1-C1.md),[Bundle/B-D1-HCP1-C1](Bundle-B-D1-HCP1-C1.md),[Bundle/B-D2-HCP1-C1](Bundle-B-D2-HCP1-C1.md),[Bundle/B-D3-HCP1-C1](Bundle-B-D3-HCP1-C1.md),[Bundle/B-D4-HCP1-C1](Bundle-B-D4-HCP1-C1.md),[Bundle/B-D5-HCP1-C1](Bundle-B-D5-HCP1-C1.md),[Bundle/B-D6-HCP1-C1](Bundle-B-D6-HCP1-C1.md),[Bundle/C-D1-P-C1](Bundle-C-D1-P-C1.md),[Bundle/C-D2-HCP1-C1](Bundle-C-D2-HCP1-C1.md),[Bundle/C-D3-HCP1-C1](Bundle-C-D3-HCP1-C1.md),[Bundle/C-D4-HCP2-C2](Bundle-C-D4-HCP2-C2.md),[Bundle/C-D5-HCP1-C1](Bundle-C-D5-HCP1-C1.md),[Bundle/C-D6-P-C1](Bundle-C-D6-P-C1.md),[Bundle/C-D7-HCP1-C1](Bundle-C-D7-HCP1-C1.md),[Bundle/D-D1-HCP1-C1](Bundle-D-D1-HCP1-C1.md),[Bundle/D-D2-HCP2-C2](Bundle-D-D2-HCP2-C2.md),[Bundle/D-D3-HCP1-C1](Bundle-D-D3-HCP1-C1.md),[Bundle/D-D4-HCP2-C2](Bundle-D-D4-HCP2-C2.md),[Bundle/D-D5-HCP1-C1](Bundle-D-D5-HCP1-C1.md),[Bundle/D-D6-HCP2-C2](Bundle-D-D6-HCP2-C2.md),[Bundle/D-D7-HCP3-C1](Bundle-D-D7-HCP3-C1.md),[Bundle/E-D1-HCP1-C1](Bundle-E-D1-HCP1-C1.md),[Bundle/E-D2-HCP1-C1](Bundle-E-D2-HCP1-C1.md),[Bundle/F-D1-HCP1-C1](Bundle-F-D1-HCP1-C1.md),[Bundle/F-D2-HCP1-C1](Bundle-F-D2-HCP1-C1.md),[Bundle/F-D3-HCP1-C1](Bundle-F-D3-HCP1-C1.md),[Bundle/F-D4-HCP1-C1](Bundle-F-D4-HCP1-C1.md),[Bundle/F-D5-HCP1-C1](Bundle-F-D5-HCP1-C1.md),[Bundle/F-D6-HCP1-C1](Bundle-F-D6-HCP1-C1.md),[Bundle/RDA01](Bundle-RDA01.md),[Bundle/RDA01b](Bundle-RDA01b.md),[Bundle/RDA02](Bundle-RDA02.md),[Bundle/RDA02b](Bundle-RDA02b.md),[Bundle/RDA03](Bundle-RDA03.md),[Bundle/RDA03b](Bundle-RDA03b.md),[Bundle/RDA04](Bundle-RDA04.md),[Bundle/RDA04b](Bundle-RDA04b.md),[Bundle/RDB01](Bundle-RDB01.md),[Bundle/RDB01b](Bundle-RDB01b.md),[Bundle/RDB02](Bundle-RDB02.md),[Bundle/RDB02b](Bundle-RDB02b.md),[Bundle/RDB03](Bundle-RDB03.md),[Bundle/RDB03b](Bundle-RDB03b.md),[Bundle/RDB04](Bundle-RDB04.md),[Bundle/RDB04b](Bundle-RDB04b.md),[Bundle/RDB05](Bundle-RDB05.md),[Bundle/RDB05b](Bundle-RDB05b.md),[Bundle/RDC01](Bundle-RDC01.md),[Bundle/RDC01b](Bundle-RDC01b.md),[Bundle/RDC02](Bundle-RDC02.md),[Bundle/RDC02b](Bundle-RDC02b.md),[Bundle/RDC03](Bundle-RDC03.md),[Bundle/RDC03b](Bundle-RDC03b.md),[Bundle/RDC04](Bundle-RDC04.md),[Bundle/RDC04b](Bundle-RDC04b.md),[Bundle/RDC05](Bundle-RDC05.md),[Bundle/RDC05b](Bundle-RDC05b.md),[Bundle/RDD01](Bundle-RDD01.md),[Bundle/RDD01b](Bundle-RDD01b.md),[Bundle/RDD02](Bundle-RDD02.md),[Bundle/RDD02b](Bundle-RDD02b.md),[Bundle/RDD03](Bundle-RDD03.md),[Bundle/RDD03b](Bundle-RDD03b.md),[Bundle/RDE01](Bundle-RDE01.md),[Bundle/RDE01b](Bundle-RDE01b.md),[Bundle/RDF01](Bundle-RDF01.md),[Bundle/RDF01b](Bundle-RDF01b.md),[Bundle/RDF02](Bundle-RDF02.md),[Bundle/RDF02b](Bundle-RDF02b.md),[Bundle/RDF03](Bundle-RDF03.md),[Bundle/RDF03b](Bundle-RDF03b.md),[CHVACDCompositionImmunizationAdministration](StructureDefinition-ch-vacd-composition-immunization-administration.md),[CHVACDCompositionVaccinationRecord](StructureDefinition-ch-vacd-composition-vaccination-record.md),[CHVACDLaboratorySerology](StructureDefinition-ch-vacd-laboratory-serology.md),[Composition/2-1-ImmunizationAdministrationComposition](Composition-2-1-ImmunizationAdministrationComposition.md),[Composition/2-3-VaccinationRecordComposition](Composition-2-3-VaccinationRecordComposition.md),[Composition/A-D1-P-C1-Composition](Composition-A-D1-P-C1-Composition.md),[Composition/A-D2-HCP1-C1-Composition](Composition-A-D2-HCP1-C1-Composition.md),[Composition/A-D3-HCP2-C2-Composition](Composition-A-D3-HCP2-C2-Composition.md),[Composition/A-D4-HCP2-C2-Composition](Composition-A-D4-HCP2-C2-Composition.md),[Composition/A-D5-P-C1-Composition](Composition-A-D5-P-C1-Composition.md),[Composition/A-D6-HCP1-C1-Composition](Composition-A-D6-HCP1-C1-Composition.md),[Composition/B-D1-HCP1-C1-Composition](Composition-B-D1-HCP1-C1-Composition.md),[Composition/B-D2-HCP1-C1-Composition](Composition-B-D2-HCP1-C1-Composition.md),[Composition/B-D3-HCP1-C1-Composition](Composition-B-D3-HCP1-C1-Composition.md),[Composition/B-D4-HCP1-C1-Composition](Composition-B-D4-HCP1-C1-Composition.md),[Composition/B-D5-HCP1-C1-Composition](Composition-B-D5-HCP1-C1-Composition.md),[Composition/B-D6-HCP1-C1-Composition](Composition-B-D6-HCP1-C1-Composition.md),[Composition/C-D1-P-C1-Composition](Composition-C-D1-P-C1-Composition.md),[Composition/C-D2-HCP1-C1-Composition](Composition-C-D2-HCP1-C1-Composition.md),[Composition/C-D3-HCP1-C1-Composition](Composition-C-D3-HCP1-C1-Composition.md),[Composition/C-D4-HCP2-C2-Composition](Composition-C-D4-HCP2-C2-Composition.md),[Composition/C-D5-HCP1-C1-Composition](Composition-C-D5-HCP1-C1-Composition.md),[Composition/C-D6-P-C1-Composition](Composition-C-D6-P-C1-Composition.md),[Composition/C-D7-HCP1-C1-Composition](Composition-C-D7-HCP1-C1-Composition.md),[Composition/D-D1-HCP1-C1-Composition](Composition-D-D1-HCP1-C1-Composition.md),[Composition/D-D2-HCP2-C2-Composition](Composition-D-D2-HCP2-C2-Composition.md),[Composition/D-D3-HCP1-C1-Composition](Composition-D-D3-HCP1-C1-Composition.md),[Composition/D-D4-HCP2-C2-Composition](Composition-D-D4-HCP2-C2-Composition.md),[Composition/D-D5-HCP1-C1-Composition](Composition-D-D5-HCP1-C1-Composition.md),[Composition/D-D6-HCP2-C2-Composition](Composition-D-D6-HCP2-C2-Composition.md),[Composition/D-D7-HCP3-C1-Composition](Composition-D-D7-HCP3-C1-Composition.md),[Composition/E-D1-HCP1-C1-Composition](Composition-E-D1-HCP1-C1-Composition.md),[Composition/E-D2-HCP1-C1-Composition](Composition-E-D2-HCP1-C1-Composition.md),[Composition/F-D1-HCP1-C1-Composition](Composition-F-D1-HCP1-C1-Composition.md),[Composition/F-D2-HCP1-C1-Composition](Composition-F-D2-HCP1-C1-Composition.md),[Composition/F-D3-HCP1-C1-Composition](Composition-F-D3-HCP1-C1-Composition.md),[Composition/F-D4-HCP1-C1-Composition](Composition-F-D4-HCP1-C1-Composition.md),[Composition/F-D5-HCP1-C1-Composition](Composition-F-D5-HCP1-C1-Composition.md),[Composition/F-D6-HCP1-C1-Composition](Composition-F-D6-HCP1-C1-Composition.md),[Composition/RDA01-Composition](Composition-RDA01-Composition.md),[Composition/RDA01-Composition-b](Composition-RDA01-Composition-b.md),[Composition/RDA02-Composition](Composition-RDA02-Composition.md),[Composition/RDA02-Composition-b](Composition-RDA02-Composition-b.md),[Composition/RDA03-Composition](Composition-RDA03-Composition.md),[Composition/RDA03-Composition-b](Composition-RDA03-Composition-b.md),[Composition/RDA04-Composition](Composition-RDA04-Composition.md),[Composition/RDA04-Composition-b](Composition-RDA04-Composition-b.md),[Composition/RDB01-Composition](Composition-RDB01-Composition.md),[Composition/RDB01-Composition-b](Composition-RDB01-Composition-b.md),[Composition/RDB02-Composition](Composition-RDB02-Composition.md),[Composition/RDB02-Composition-b](Composition-RDB02-Composition-b.md),[Composition/RDB03-Composition](Composition-RDB03-Composition.md),[Composition/RDB03-Composition-b](Composition-RDB03-Composition-b.md),[Composition/RDB04-Composition](Composition-RDB04-Composition.md),[Composition/RDB04-Composition-b](Composition-RDB04-Composition-b.md),[Composition/RDB05-Composition](Composition-RDB05-Composition.md),[Composition/RDB05-Composition-b](Composition-RDB05-Composition-b.md),[Composition/RDC01-Composition](Composition-RDC01-Composition.md),[Composition/RDC01-Composition-b](Composition-RDC01-Composition-b.md),[Composition/RDC02-Composition](Composition-RDC02-Composition.md),[Composition/RDC02-Composition-b](Composition-RDC02-Composition-b.md),[Composition/RDC03-Composition](Composition-RDC03-Composition.md),[Composition/RDC03-Composition-b](Composition-RDC03-Composition-b.md),[Composition/RDC04-Composition](Composition-RDC04-Composition.md),[Composition/RDC04-Composition-b](Composition-RDC04-Composition-b.md),[Composition/RDC05-Composition](Composition-RDC05-Composition.md),[Composition/RDC05-Composition-b](Composition-RDC05-Composition-b.md),[Composition/RDD01-Composition](Composition-RDD01-Composition.md),[Composition/RDD01-Composition-b](Composition-RDD01-Composition-b.md),[Composition/RDD02-Composition](Composition-RDD02-Composition.md),[Composition/RDD02-Composition-b](Composition-RDD02-Composition-b.md),[Composition/RDD03-Composition](Composition-RDD03-Composition.md),[Composition/RDD03-Composition-b](Composition-RDD03-Composition-b.md),[Composition/RDE01-Composition](Composition-RDE01-Composition.md),[Composition/RDE01-Composition-b](Composition-RDE01-Composition-b.md),[Composition/RDF01-Composition](Composition-RDF01-Composition.md),[Composition/RDF01-Composition-b](Composition-RDF01-Composition-b.md),[Composition/RDF02-Composition](Composition-RDF02-Composition.md),[Composition/RDF02-Composition-b](Composition-RDF02-Composition-b.md),[Composition/RDF03-Composition](Composition-RDF03-Composition.md),[Composition/RDF03-Composition-b](Composition-RDF03-Composition-b.md),[ImmunizationRecommendation/10-1-ImmunizationRecommendation](ImmunizationRecommendation-10-1-ImmunizationRecommendation.md),[ImmunizationRecommendation/10-2-ImmunizationRecommendation](ImmunizationRecommendation-10-2-ImmunizationRecommendation.md),[ImmunizationRecommendation/10-3-ImmunizationRecommendation](ImmunizationRecommendation-10-3-ImmunizationRecommendation.md),[ImmunizationRecommendation/10-4-ImmunizationRecommendation](ImmunizationRecommendation-10-4-ImmunizationRecommendation.md),[LaboratorySerologyImmunization](ValueSet-ch-vacd-laboratory-serology-vs.md),[Observation/9-1-Observation](Observation-9-1-Observation.md),[Observation/9-2-Observation](Observation-9-2-Observation.md)and[Observation/TCB04-LABRES1](Observation-TCB04-LABRES1.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://tx.fhir.org/r4/ValueSet/snomedct): [AllergiesAndIntolerancesForImmunization](ValueSet-ch-vacd-immunization-allergyintolerances-vs.md), [AllergyIntolerance/11-1-AllergyIntolerance](AllergyIntolerance-11-1-AllergyIntolerance.md)...Show 267 more,[AllergyIntolerance/11-2-AllergyIntolerance](AllergyIntolerance-11-2-AllergyIntolerance.md),[AllergyIntolerance/11-3-AllergyIntolerance](AllergyIntolerance-11-3-AllergyIntolerance.md),[AllergyIntolerance/11-4-AllergyIntolerance](AllergyIntolerance-11-4-AllergyIntolerance.md),[AllergyIntolerance/TCB01-ALLINTO1](AllergyIntolerance-TCB01-ALLINTO1.md),[AllergyIntolerance/TCF02-ALLINTO1](AllergyIntolerance-TCF02-ALLINTO1.md),[AllergyIntolerance/TCF02-ALLINTO2](AllergyIntolerance-TCF02-ALLINTO2.md),[AllergyIntolerance/TCF02-ALLINTO3](AllergyIntolerance-TCF02-ALLINTO3.md),[Bundle/1-1-ImmunizationAdministration](Bundle-1-1-ImmunizationAdministration.md),[Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md),[Bundle/1-4-ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md),[Bundle/1-5-ImmunizationRecommendationResponse](Bundle-1-5-ImmunizationRecommendationResponse.md),[Bundle/A-D1-P-C1](Bundle-A-D1-P-C1.md),[Bundle/A-D2-HCP1-C1](Bundle-A-D2-HCP1-C1.md),[Bundle/A-D3-HCP2-C2](Bundle-A-D3-HCP2-C2.md),[Bundle/A-D4-HCP2-C2](Bundle-A-D4-HCP2-C2.md),[Bundle/A-D5-P-C1](Bundle-A-D5-P-C1.md),[Bundle/A-D6-HCP1-C1](Bundle-A-D6-HCP1-C1.md),[Bundle/B-D1-HCP1-C1](Bundle-B-D1-HCP1-C1.md),[Bundle/B-D2-HCP1-C1](Bundle-B-D2-HCP1-C1.md),[Bundle/B-D3-HCP1-C1](Bundle-B-D3-HCP1-C1.md),[Bundle/B-D4-HCP1-C1](Bundle-B-D4-HCP1-C1.md),[Bundle/B-D5-HCP1-C1](Bundle-B-D5-HCP1-C1.md),[Bundle/B-D6-HCP1-C1](Bundle-B-D6-HCP1-C1.md),[Bundle/C-D1-P-C1](Bundle-C-D1-P-C1.md),[Bundle/C-D2-HCP1-C1](Bundle-C-D2-HCP1-C1.md),[Bundle/C-D3-HCP1-C1](Bundle-C-D3-HCP1-C1.md),[Bundle/C-D4-HCP2-C2](Bundle-C-D4-HCP2-C2.md),[Bundle/C-D5-HCP1-C1](Bundle-C-D5-HCP1-C1.md),[Bundle/C-D6-P-C1](Bundle-C-D6-P-C1.md),[Bundle/C-D7-HCP1-C1](Bundle-C-D7-HCP1-C1.md),[Bundle/D-D1-HCP1-C1](Bundle-D-D1-HCP1-C1.md),[Bundle/D-D2-HCP2-C2](Bundle-D-D2-HCP2-C2.md),[Bundle/D-D3-HCP1-C1](Bundle-D-D3-HCP1-C1.md),[Bundle/D-D4-HCP2-C2](Bundle-D-D4-HCP2-C2.md),[Bundle/D-D5-HCP1-C1](Bundle-D-D5-HCP1-C1.md),[Bundle/D-D6-HCP2-C2](Bundle-D-D6-HCP2-C2.md),[Bundle/D-D7-HCP3-C1](Bundle-D-D7-HCP3-C1.md),[Bundle/E-D1-HCP1-C1](Bundle-E-D1-HCP1-C1.md),[Bundle/E-D2-HCP1-C1](Bundle-E-D2-HCP1-C1.md),[Bundle/F-D1-HCP1-C1](Bundle-F-D1-HCP1-C1.md),[Bundle/F-D2-HCP1-C1](Bundle-F-D2-HCP1-C1.md),[Bundle/F-D3-HCP1-C1](Bundle-F-D3-HCP1-C1.md),[Bundle/F-D4-HCP1-C1](Bundle-F-D4-HCP1-C1.md),[Bundle/F-D5-HCP1-C1](Bundle-F-D5-HCP1-C1.md),[Bundle/F-D6-HCP1-C1](Bundle-F-D6-HCP1-C1.md),[Bundle/RDA01](Bundle-RDA01.md),[Bundle/RDA01b](Bundle-RDA01b.md),[Bundle/RDA02](Bundle-RDA02.md),[Bundle/RDA02b](Bundle-RDA02b.md),[Bundle/RDA03](Bundle-RDA03.md),[Bundle/RDA03b](Bundle-RDA03b.md),[Bundle/RDA04](Bundle-RDA04.md),[Bundle/RDA04b](Bundle-RDA04b.md),[Bundle/RDB01](Bundle-RDB01.md),[Bundle/RDB01b](Bundle-RDB01b.md),[Bundle/RDB02](Bundle-RDB02.md),[Bundle/RDB02b](Bundle-RDB02b.md),[Bundle/RDB03](Bundle-RDB03.md),[Bundle/RDB03b](Bundle-RDB03b.md),[Bundle/RDB04](Bundle-RDB04.md),[Bundle/RDB04b](Bundle-RDB04b.md),[Bundle/RDB05](Bundle-RDB05.md),[Bundle/RDB05b](Bundle-RDB05b.md),[Bundle/RDC01](Bundle-RDC01.md),[Bundle/RDC01b](Bundle-RDC01b.md),[Bundle/RDC02](Bundle-RDC02.md),[Bundle/RDC02b](Bundle-RDC02b.md),[Bundle/RDC03](Bundle-RDC03.md),[Bundle/RDC03b](Bundle-RDC03b.md),[Bundle/RDC04](Bundle-RDC04.md),[Bundle/RDC04b](Bundle-RDC04b.md),[Bundle/RDC05](Bundle-RDC05.md),[Bundle/RDC05b](Bundle-RDC05b.md),[Bundle/RDD01](Bundle-RDD01.md),[Bundle/RDD01b](Bundle-RDD01b.md),[Bundle/RDD02](Bundle-RDD02.md),[Bundle/RDD02b](Bundle-RDD02b.md),[Bundle/RDD03](Bundle-RDD03.md),[Bundle/RDD03b](Bundle-RDD03b.md),[Bundle/RDE01](Bundle-RDE01.md),[Bundle/RDE01b](Bundle-RDE01b.md),[Bundle/RDF01](Bundle-RDF01.md),[Bundle/RDF01b](Bundle-RDF01b.md),[Bundle/RDF02](Bundle-RDF02.md),[Bundle/RDF02b](Bundle-RDF02b.md),[Bundle/RDF03](Bundle-RDF03.md),[Bundle/RDF03b](Bundle-RDF03b.md),[CHVACDAllergyIntolerance](StructureDefinition-ch-vacd-allergyintolerances.md),[CHVACDCompositionImmunizationAdministration](StructureDefinition-ch-vacd-composition-immunization-administration.md),[CHVACDCompositionVaccinationRecord](StructureDefinition-ch-vacd-composition-vaccination-record.md),[CHVACDExtensionVerificationStatus](StructureDefinition-ch-vacd-ext-verification-status.md),[CHVACDImmunizationRecommendation](StructureDefinition-ch-vacd-immunization-recommendation.md),[CHVACDMedicationForImmunization](StructureDefinition-ch-vacd-medication-for-immunization.md),[CHVACDPastIllness](StructureDefinition-ch-vacd-pastillnesses.md),[CHVACDRecommendationRequestMessageHeader](StructureDefinition-ch-vacd-recommendation-request-messageheader.md),[CHVACDRecommendationResponseMessageHeader](StructureDefinition-ch-vacd-recommendation-response-messageheader.md),[CHVACDVerificationStatusVS](ValueSet-ch-vacd-verification-status-vs.md),[Composition/2-1-ImmunizationAdministrationComposition](Composition-2-1-ImmunizationAdministrationComposition.md),[Composition/2-3-VaccinationRecordComposition](Composition-2-3-VaccinationRecordComposition.md),[Composition/A-D1-P-C1-Composition](Composition-A-D1-P-C1-Composition.md),[Composition/A-D2-HCP1-C1-Composition](Composition-A-D2-HCP1-C1-Composition.md),[Composition/A-D3-HCP2-C2-Composition](Composition-A-D3-HCP2-C2-Composition.md),[Composition/A-D4-HCP2-C2-Composition](Composition-A-D4-HCP2-C2-Composition.md),[Composition/A-D5-P-C1-Composition](Composition-A-D5-P-C1-Composition.md),[Composition/A-D6-HCP1-C1-Composition](Composition-A-D6-HCP1-C1-Composition.md),[Composition/B-D1-HCP1-C1-Composition](Composition-B-D1-HCP1-C1-Composition.md),[Composition/B-D2-HCP1-C1-Composition](Composition-B-D2-HCP1-C1-Composition.md),[Composition/B-D3-HCP1-C1-Composition](Composition-B-D3-HCP1-C1-Composition.md),[Composition/B-D4-HCP1-C1-Composition](Composition-B-D4-HCP1-C1-Composition.md),[Composition/B-D5-HCP1-C1-Composition](Composition-B-D5-HCP1-C1-Composition.md),[Composition/B-D6-HCP1-C1-Composition](Composition-B-D6-HCP1-C1-Composition.md),[Composition/C-D1-P-C1-Composition](Composition-C-D1-P-C1-Composition.md),[Composition/C-D2-HCP1-C1-Composition](Composition-C-D2-HCP1-C1-Composition.md),[Composition/C-D3-HCP1-C1-Composition](Composition-C-D3-HCP1-C1-Composition.md),[Composition/C-D4-HCP2-C2-Composition](Composition-C-D4-HCP2-C2-Composition.md),[Composition/C-D5-HCP1-C1-Composition](Composition-C-D5-HCP1-C1-Composition.md),[Composition/C-D6-P-C1-Composition](Composition-C-D6-P-C1-Composition.md),[Composition/C-D7-HCP1-C1-Composition](Composition-C-D7-HCP1-C1-Composition.md),[Composition/D-D1-HCP1-C1-Composition](Composition-D-D1-HCP1-C1-Composition.md),[Composition/D-D2-HCP2-C2-Composition](Composition-D-D2-HCP2-C2-Composition.md),[Composition/D-D3-HCP1-C1-Composition](Composition-D-D3-HCP1-C1-Composition.md),[Composition/D-D4-HCP2-C2-Composition](Composition-D-D4-HCP2-C2-Composition.md),[Composition/D-D5-HCP1-C1-Composition](Composition-D-D5-HCP1-C1-Composition.md),[Composition/D-D6-HCP2-C2-Composition](Composition-D-D6-HCP2-C2-Composition.md),[Composition/D-D7-HCP3-C1-Composition](Composition-D-D7-HCP3-C1-Composition.md),[Composition/E-D1-HCP1-C1-Composition](Composition-E-D1-HCP1-C1-Composition.md),[Composition/E-D2-HCP1-C1-Composition](Composition-E-D2-HCP1-C1-Composition.md),[Composition/F-D1-HCP1-C1-Composition](Composition-F-D1-HCP1-C1-Composition.md),[Composition/F-D2-HCP1-C1-Composition](Composition-F-D2-HCP1-C1-Composition.md),[Composition/F-D3-HCP1-C1-Composition](Composition-F-D3-HCP1-C1-Composition.md),[Composition/F-D4-HCP1-C1-Composition](Composition-F-D4-HCP1-C1-Composition.md),[Composition/F-D5-HCP1-C1-Composition](Composition-F-D5-HCP1-C1-Composition.md),[Composition/F-D6-HCP1-C1-Composition](Composition-F-D6-HCP1-C1-Composition.md),[Composition/RDA01-Composition](Composition-RDA01-Composition.md),[Composition/RDA01-Composition-b](Composition-RDA01-Composition-b.md),[Composition/RDA02-Composition](Composition-RDA02-Composition.md),[Composition/RDA02-Composition-b](Composition-RDA02-Composition-b.md),[Composition/RDA03-Composition](Composition-RDA03-Composition.md),[Composition/RDA03-Composition-b](Composition-RDA03-Composition-b.md),[Composition/RDA04-Composition](Composition-RDA04-Composition.md),[Composition/RDA04-Composition-b](Composition-RDA04-Composition-b.md),[Composition/RDB01-Composition](Composition-RDB01-Composition.md),[Composition/RDB01-Composition-b](Composition-RDB01-Composition-b.md),[Composition/RDB02-Composition](Composition-RDB02-Composition.md),[Composition/RDB02-Composition-b](Composition-RDB02-Composition-b.md),[Composition/RDB03-Composition](Composition-RDB03-Composition.md),[Composition/RDB03-Composition-b](Composition-RDB03-Composition-b.md),[Composition/RDB04-Composition](Composition-RDB04-Composition.md),[Composition/RDB04-Composition-b](Composition-RDB04-Composition-b.md),[Composition/RDB05-Composition](Composition-RDB05-Composition.md),[Composition/RDB05-Composition-b](Composition-RDB05-Composition-b.md),[Composition/RDC01-Composition](Composition-RDC01-Composition.md),[Composition/RDC01-Composition-b](Composition-RDC01-Composition-b.md),[Composition/RDC02-Composition](Composition-RDC02-Composition.md),[Composition/RDC02-Composition-b](Composition-RDC02-Composition-b.md),[Composition/RDC03-Composition](Composition-RDC03-Composition.md),[Composition/RDC03-Composition-b](Composition-RDC03-Composition-b.md),[Composition/RDC04-Composition](Composition-RDC04-Composition.md),[Composition/RDC04-Composition-b](Composition-RDC04-Composition-b.md),[Composition/RDC05-Composition](Composition-RDC05-Composition.md),[Composition/RDC05-Composition-b](Composition-RDC05-Composition-b.md),[Composition/RDD01-Composition](Composition-RDD01-Composition.md),[Composition/RDD01-Composition-b](Composition-RDD01-Composition-b.md),[Composition/RDD02-Composition](Composition-RDD02-Composition.md),[Composition/RDD02-Composition-b](Composition-RDD02-Composition-b.md),[Composition/RDD03-Composition](Composition-RDD03-Composition.md),[Composition/RDD03-Composition-b](Composition-RDD03-Composition-b.md),[Composition/RDE01-Composition](Composition-RDE01-Composition.md),[Composition/RDE01-Composition-b](Composition-RDE01-Composition-b.md),[Composition/RDF01-Composition](Composition-RDF01-Composition.md),[Composition/RDF01-Composition-b](Composition-RDF01-Composition-b.md),[Composition/RDF02-Composition](Composition-RDF02-Composition.md),[Composition/RDF02-Composition-b](Composition-RDF02-Composition-b.md),[Composition/RDF03-Composition](Composition-RDF03-Composition.md),[Composition/RDF03-Composition-b](Composition-RDF03-Composition-b.md),[Condition/8-2-Condition](Condition-8-2-Condition.md),[Condition/8-3-Condition](Condition-8-3-Condition.md),[Condition/8-4-Condition](Condition-8-4-Condition.md),[Condition/8-6-Condition](Condition-8-6-Condition.md),[Condition/8-7-Condition](Condition-8-7-Condition.md),[Condition/8-8-Condition](Condition-8-8-Condition.md),[Condition/8-9-Condition](Condition-8-9-Condition.md),[Condition/TCB02-UNDILL1](Condition-TCB02-UNDILL1.md),[Condition/TCB02-UNDILL1-2](Condition-TCB02-UNDILL1-2.md),[Condition/TCB03-EXPRISK1](Condition-TCB03-EXPRISK1.md),[Condition/TCB03-EXPRISK1-2](Condition-TCB03-EXPRISK1-2.md),[Condition/TCB05-EXPRISK2](Condition-TCB05-EXPRISK2.md),[Condition/TCC03-EXPRISK1](Condition-TCC03-EXPRISK1.md),[Condition/TCC04-EXPRISK1](Condition-TCC04-EXPRISK1.md),[Condition/TCC04-EXPRISK2](Condition-TCC04-EXPRISK2.md),[Condition/TCC04-EXPRISK3](Condition-TCC04-EXPRISK3.md),[Condition/TCC05-UNDILL1](Condition-TCC05-UNDILL1.md),[Condition/TCC05-UNDILL2](Condition-TCC05-UNDILL2.md),[Condition/TCC05-UNDILL3](Condition-TCC05-UNDILL3.md),[Condition/TCD02-EXPRISK1](Condition-TCD02-EXPRISK1.md),[Condition/TCD02-EXPRISK1-2](Condition-TCD02-EXPRISK1-2.md),[Condition/TCD02-UNDILL1](Condition-TCD02-UNDILL1.md),[Condition/TCD02-UNDILL1-2](Condition-TCD02-UNDILL1-2.md),[Condition/TCD03-EXPRISK1](Condition-TCD03-EXPRISK1.md),[Condition/TCD03-EXPRISK1-2](Condition-TCD03-EXPRISK1-2.md),[Condition/TCD03-EXPRISK2](Condition-TCD03-EXPRISK2.md),[Condition/TCD03-EXPRISK2-2](Condition-TCD03-EXPRISK2-2.md),[Condition/TCD03-EXPRISK3](Condition-TCD03-EXPRISK3.md),[Condition/TCD03-EXPRISK3-2](Condition-TCD03-EXPRISK3-2.md),[Condition/TCE01-UNDILL1-de](Condition-TCE01-UNDILL1-de.md),[Condition/TCF03-UNDILL1](Condition-TCF03-UNDILL1.md),[Condition/TCF03-UNDILL2](Condition-TCF03-UNDILL2.md),[Condition/TCF03-UNDILL3](Condition-TCF03-UNDILL3.md),[Immunization/7-1-Immunization](Immunization-7-1-Immunization.md),[Immunization/7-1-Immunization2](Immunization-7-1-Immunization2.md),[Immunization/7-10-Immunization](Immunization-7-10-Immunization.md),[Immunization/7-11-Immunization](Immunization-7-11-Immunization.md),[Immunization/7-12-Immunization](Immunization-7-12-Immunization.md),[Immunization/7-2-Immunization](Immunization-7-2-Immunization.md),[Immunization/7-3-Immunization](Immunization-7-3-Immunization.md),[Immunization/7-4-Immunization](Immunization-7-4-Immunization.md),[Immunization/7-5-Immunization](Immunization-7-5-Immunization.md),[Immunization/7-6-Immunization](Immunization-7-6-Immunization.md),[Immunization/7-7-Immunization](Immunization-7-7-Immunization.md),[Immunization/7-8-Immunization](Immunization-7-8-Immunization.md),[Immunization/7-9-Immunization](Immunization-7-9-Immunization.md),[Immunization/TCA01-IMMUN1-patient](Immunization-TCA01-IMMUN1-patient.md),[Immunization/TCA01-IMMUN2-HCP1-ORG1-ROLE](Immunization-TCA01-IMMUN2-HCP1-ORG1-ROLE.md),[Immunization/TCA01-IMMUN3-HCP2-ORG2-ROLE](Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.md),[Immunization/TCA02-IMMUN4-HCP2-ORG2-ROLE](Immunization-TCA02-IMMUN4-HCP2-ORG2-ROLE.md),[Immunization/TCA03-IMMUN5-patient](Immunization-TCA03-IMMUN5-patient.md),[Immunization/TCA04-IMMUN5-patient-val-gfp](Immunization-TCA04-IMMUN5-patient-val-gfp.md),[Immunization/TCB01-IMMUN1](Immunization-TCB01-IMMUN1.md),[Immunization/TCB01-IMMUN2](Immunization-TCB01-IMMUN2.md),[Immunization/TCB05-IMMUN1](Immunization-TCB05-IMMUN1.md),[Immunization/TCB05-IMMUN2](Immunization-TCB05-IMMUN2.md),[Immunization/TCC01-IMMUN1-patient](Immunization-TCC01-IMMUN1-patient.md),[Immunization/TCC01-IMMUN2-patient](Immunization-TCC01-IMMUN2-patient.md),[Immunization/TCC02-IMMUN3-HCP1-ORG1-ROLE](Immunization-TCC02-IMMUN3-HCP1-ORG1-ROLE.md),[Immunization/TCC02-IMMUN4-HCP1-ORG1-ROLE](Immunization-TCC02-IMMUN4-HCP1-ORG1-ROLE.md),[Immunization/TCD01-IMMUN1](Immunization-TCD01-IMMUN1.md),[Immunization/TCD01-IMMUN2](Immunization-TCD01-IMMUN2.md),[Immunization/TCD01-IMMUN2-2](Immunization-TCD01-IMMUN2-2.md),[Immunization/TCD01-IMMUN3](Immunization-TCD01-IMMUN3.md),[Immunization/TCD01-IMMUN3-2](Immunization-TCD01-IMMUN3-2.md),[Immunization/TCD01-IMMUN4](Immunization-TCD01-IMMUN4.md),[Immunization/TCD01-IMMUN5](Immunization-TCD01-IMMUN5.md),[Immunization/TCE01-IMMUN1-de](Immunization-TCE01-IMMUN1-de.md),[Immunization/TCE01-IMMUN1-fr](Immunization-TCE01-IMMUN1-fr.md),[Immunization/TCE01-IMMUN2-de](Immunization-TCE01-IMMUN2-de.md),[Immunization/TCE01-IMMUN2-fr](Immunization-TCE01-IMMUN2-fr.md),[Immunization/TCF01-IMMUN1](Immunization-TCF01-IMMUN1.md),[Immunization/TCF01-IMMUN2](Immunization-TCF01-IMMUN2.md),[Immunization/TCF01-IMMUN3](Immunization-TCF01-IMMUN3.md),[ImmunizationRecommendation/10-1-ImmunizationRecommendation](ImmunizationRecommendation-10-1-ImmunizationRecommendation.md),[ImmunizationRecommendation/10-2-ImmunizationRecommendation](ImmunizationRecommendation-10-2-ImmunizationRecommendation.md),[ImmunizationRecommendation/10-3-ImmunizationRecommendation](ImmunizationRecommendation-10-3-ImmunizationRecommendation.md),[ImmunizationRecommendation/10-4-ImmunizationRecommendation](ImmunizationRecommendation-10-4-ImmunizationRecommendation.md),[Medication/TC-IMMUN-MEDIC-BOOSTRIX](Medication-TC-IMMUN-MEDIC-BOOSTRIX.md),[Medication/TC-IMMUN-MEDIC-FSMEIMMCC](Medication-TC-IMMUN-MEDIC-FSMEIMMCC.md),[Medication/TC-IMMUN-MEDIC-GARDASIL9](Medication-TC-IMMUN-MEDIC-GARDASIL9.md),[Medication/TC-IMMUN-MEDIC-HAVRIX1440](Medication-TC-IMMUN-MEDIC-HAVRIX1440.md),[Medication/TC-IMMUN-MEDIC-PRIORIX](Medication-TC-IMMUN-MEDIC-PRIORIX.md),[MessageHeader/2-4-ImmunizationRecommendationRequestMessageHeader](MessageHeader-2-4-ImmunizationRecommendationRequestMessageHeader.md),[MessageHeader/2-5-ImmunizationRecommendationResponseMessageHeader](MessageHeader-2-5-ImmunizationRecommendationResponseMessageHeader.md),[Observation/9-1-Observation](Observation-9-1-Observation.md),[Observation/9-2-Observation](Observation-9-2-Observation.md),[Observation/TCB04-LABRES1](Observation-TCB04-LABRES1.md),[SwissMedicalRisksForImmunizations](ValueSet-ch-vacd-risks-medical-vs.md),[SwissOccupationRisksForImmunizations](ValueSet-ch-vacd-risks-occupation-vs.md),[SwissPreillnessRisksForImmunizations](ValueSet-ch-vacd-risks-preillness-vs.md)and[SwissSocialRisksForImmunizations](ValueSet-ch-vacd-risks-social-vs.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [AllergyIntolerance Clinical Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-allergyintolerance-clinical.html): [AllergyIntolerance/11-1-AllergyIntolerance](AllergyIntolerance-11-1-AllergyIntolerance.md), [AllergyIntolerance/11-2-AllergyIntolerance](AllergyIntolerance-11-2-AllergyIntolerance.md)...Show 15 more,[AllergyIntolerance/11-3-AllergyIntolerance](AllergyIntolerance-11-3-AllergyIntolerance.md),[AllergyIntolerance/11-4-AllergyIntolerance](AllergyIntolerance-11-4-AllergyIntolerance.md),[AllergyIntolerance/TCB01-ALLINTO1](AllergyIntolerance-TCB01-ALLINTO1.md),[AllergyIntolerance/TCF02-ALLINTO1](AllergyIntolerance-TCF02-ALLINTO1.md),[AllergyIntolerance/TCF02-ALLINTO2](AllergyIntolerance-TCF02-ALLINTO2.md),[AllergyIntolerance/TCF02-ALLINTO3](AllergyIntolerance-TCF02-ALLINTO3.md),[Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md),[Bundle/1-4-ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md),[Bundle/B-D2-HCP1-C1](Bundle-B-D2-HCP1-C1.md),[Bundle/F-D3-HCP1-C1](Bundle-F-D3-HCP1-C1.md),[Bundle/F-D4-HCP1-C1](Bundle-F-D4-HCP1-C1.md),[Bundle/RDB01](Bundle-RDB01.md),[Bundle/RDB01b](Bundle-RDB01b.md),[Bundle/RDF02](Bundle-RDF02.md)and[Bundle/RDF02b](Bundle-RDF02b.md)
* [AllergyIntolerance Verification Status](http://terminology.hl7.org/7.0.1/CodeSystem-allergyintolerance-verification.html): [AllergyIntolerance/11-1-AllergyIntolerance](AllergyIntolerance-11-1-AllergyIntolerance.md), [AllergyIntolerance/11-2-AllergyIntolerance](AllergyIntolerance-11-2-AllergyIntolerance.md)...Show 15 more,[AllergyIntolerance/11-3-AllergyIntolerance](AllergyIntolerance-11-3-AllergyIntolerance.md),[AllergyIntolerance/11-4-AllergyIntolerance](AllergyIntolerance-11-4-AllergyIntolerance.md),[AllergyIntolerance/TCB01-ALLINTO1](AllergyIntolerance-TCB01-ALLINTO1.md),[AllergyIntolerance/TCF02-ALLINTO1](AllergyIntolerance-TCF02-ALLINTO1.md),[AllergyIntolerance/TCF02-ALLINTO2](AllergyIntolerance-TCF02-ALLINTO2.md),[AllergyIntolerance/TCF02-ALLINTO3](AllergyIntolerance-TCF02-ALLINTO3.md),[Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md),[Bundle/1-4-ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md),[Bundle/B-D2-HCP1-C1](Bundle-B-D2-HCP1-C1.md),[Bundle/F-D3-HCP1-C1](Bundle-F-D3-HCP1-C1.md),[Bundle/F-D4-HCP1-C1](Bundle-F-D4-HCP1-C1.md),[Bundle/RDB01](Bundle-RDB01.md),[Bundle/RDB01b](Bundle-RDB01b.md),[Bundle/RDF02](Bundle-RDF02.md)and[Bundle/RDF02b](Bundle-RDF02b.md)
* [Condition Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-category.html): [Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md), [Bundle/1-4-ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md)...Show 43 more,[Bundle/B-D4-HCP1-C1](Bundle-B-D4-HCP1-C1.md),[Bundle/B-D6-HCP1-C1](Bundle-B-D6-HCP1-C1.md),[Bundle/C-D3-HCP1-C1](Bundle-C-D3-HCP1-C1.md),[Bundle/C-D4-HCP2-C2](Bundle-C-D4-HCP2-C2.md),[Bundle/C-D5-HCP1-C1](Bundle-C-D5-HCP1-C1.md),[Bundle/D-D3-HCP1-C1](Bundle-D-D3-HCP1-C1.md),[Bundle/D-D4-HCP2-C2](Bundle-D-D4-HCP2-C2.md),[Bundle/D-D5-HCP1-C1](Bundle-D-D5-HCP1-C1.md),[Bundle/D-D6-HCP2-C2](Bundle-D-D6-HCP2-C2.md),[Bundle/D-D7-HCP3-C1](Bundle-D-D7-HCP3-C1.md),[Bundle/RDB03](Bundle-RDB03.md),[Bundle/RDB03b](Bundle-RDB03b.md),[Bundle/RDB05](Bundle-RDB05.md),[Bundle/RDB05b](Bundle-RDB05b.md),[Bundle/RDC03](Bundle-RDC03.md),[Bundle/RDC03b](Bundle-RDC03b.md),[Bundle/RDC04](Bundle-RDC04.md),[Bundle/RDC04b](Bundle-RDC04b.md),[Bundle/RDD02](Bundle-RDD02.md),[Bundle/RDD02b](Bundle-RDD02b.md),[Bundle/RDD03](Bundle-RDD03.md),[Bundle/RDD03b](Bundle-RDD03b.md),[CHVACDBasicImmunization](StructureDefinition-ch-vacd-basic-immunization.md),[CHVACDMedicalProblems](StructureDefinition-ch-vacd-medical-problems.md),[Condition/8-2-Condition](Condition-8-2-Condition.md),[Condition/8-3-Condition](Condition-8-3-Condition.md),[Condition/8-6-Condition](Condition-8-6-Condition.md),[Condition/8-7-Condition](Condition-8-7-Condition.md),[Condition/TCB03-EXPRISK1](Condition-TCB03-EXPRISK1.md),[Condition/TCB03-EXPRISK1-2](Condition-TCB03-EXPRISK1-2.md),[Condition/TCB05-EXPRISK2](Condition-TCB05-EXPRISK2.md),[Condition/TCC03-EXPRISK1](Condition-TCC03-EXPRISK1.md),[Condition/TCC04-EXPRISK1](Condition-TCC04-EXPRISK1.md),[Condition/TCC04-EXPRISK2](Condition-TCC04-EXPRISK2.md),[Condition/TCC04-EXPRISK3](Condition-TCC04-EXPRISK3.md),[Condition/TCD02-EXPRISK1](Condition-TCD02-EXPRISK1.md),[Condition/TCD02-EXPRISK1-2](Condition-TCD02-EXPRISK1-2.md),[Condition/TCD03-EXPRISK1](Condition-TCD03-EXPRISK1.md),[Condition/TCD03-EXPRISK1-2](Condition-TCD03-EXPRISK1-2.md),[Condition/TCD03-EXPRISK2](Condition-TCD03-EXPRISK2.md),[Condition/TCD03-EXPRISK2-2](Condition-TCD03-EXPRISK2-2.md),[Condition/TCD03-EXPRISK3](Condition-TCD03-EXPRISK3.md)and[Condition/TCD03-EXPRISK3-2](Condition-TCD03-EXPRISK3-2.md)
* [Condition Clinical Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-clinical.html): [Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md), [Bundle/1-4-ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md)...Show 68 more,[Bundle/B-D3-HCP1-C1](Bundle-B-D3-HCP1-C1.md),[Bundle/B-D4-HCP1-C1](Bundle-B-D4-HCP1-C1.md),[Bundle/B-D6-HCP1-C1](Bundle-B-D6-HCP1-C1.md),[Bundle/C-D3-HCP1-C1](Bundle-C-D3-HCP1-C1.md),[Bundle/C-D4-HCP2-C2](Bundle-C-D4-HCP2-C2.md),[Bundle/C-D5-HCP1-C1](Bundle-C-D5-HCP1-C1.md),[Bundle/C-D6-P-C1](Bundle-C-D6-P-C1.md),[Bundle/C-D7-HCP1-C1](Bundle-C-D7-HCP1-C1.md),[Bundle/D-D3-HCP1-C1](Bundle-D-D3-HCP1-C1.md),[Bundle/D-D4-HCP2-C2](Bundle-D-D4-HCP2-C2.md),[Bundle/D-D5-HCP1-C1](Bundle-D-D5-HCP1-C1.md),[Bundle/D-D6-HCP2-C2](Bundle-D-D6-HCP2-C2.md),[Bundle/D-D7-HCP3-C1](Bundle-D-D7-HCP3-C1.md),[Bundle/E-D2-HCP1-C1](Bundle-E-D2-HCP1-C1.md),[Bundle/F-D5-HCP1-C1](Bundle-F-D5-HCP1-C1.md),[Bundle/F-D6-HCP1-C1](Bundle-F-D6-HCP1-C1.md),[Bundle/RDB02](Bundle-RDB02.md),[Bundle/RDB02b](Bundle-RDB02b.md),[Bundle/RDB03](Bundle-RDB03.md),[Bundle/RDB03b](Bundle-RDB03b.md),[Bundle/RDB05](Bundle-RDB05.md),[Bundle/RDB05b](Bundle-RDB05b.md),[Bundle/RDC03](Bundle-RDC03.md),[Bundle/RDC03b](Bundle-RDC03b.md),[Bundle/RDC04](Bundle-RDC04.md),[Bundle/RDC04b](Bundle-RDC04b.md),[Bundle/RDC05](Bundle-RDC05.md),[Bundle/RDC05b](Bundle-RDC05b.md),[Bundle/RDD02](Bundle-RDD02.md),[Bundle/RDD02b](Bundle-RDD02b.md),[Bundle/RDD03](Bundle-RDD03.md),[Bundle/RDD03b](Bundle-RDD03b.md),[Bundle/RDE01](Bundle-RDE01.md),[Bundle/RDE01b](Bundle-RDE01b.md),[Bundle/RDF03](Bundle-RDF03.md),[Bundle/RDF03b](Bundle-RDF03b.md),[Condition/8-2-Condition](Condition-8-2-Condition.md),[Condition/8-3-Condition](Condition-8-3-Condition.md),[Condition/8-4-Condition](Condition-8-4-Condition.md),[Condition/8-6-Condition](Condition-8-6-Condition.md),[Condition/8-7-Condition](Condition-8-7-Condition.md),[Condition/8-8-Condition](Condition-8-8-Condition.md),[Condition/TCB02-UNDILL1](Condition-TCB02-UNDILL1.md),[Condition/TCB02-UNDILL1-2](Condition-TCB02-UNDILL1-2.md),[Condition/TCB03-EXPRISK1](Condition-TCB03-EXPRISK1.md),[Condition/TCB03-EXPRISK1-2](Condition-TCB03-EXPRISK1-2.md),[Condition/TCB05-EXPRISK2](Condition-TCB05-EXPRISK2.md),[Condition/TCC03-EXPRISK1](Condition-TCC03-EXPRISK1.md),[Condition/TCC04-EXPRISK1](Condition-TCC04-EXPRISK1.md),[Condition/TCC04-EXPRISK2](Condition-TCC04-EXPRISK2.md),[Condition/TCC04-EXPRISK3](Condition-TCC04-EXPRISK3.md),[Condition/TCC05-UNDILL1](Condition-TCC05-UNDILL1.md),[Condition/TCC05-UNDILL2](Condition-TCC05-UNDILL2.md),[Condition/TCC05-UNDILL3](Condition-TCC05-UNDILL3.md),[Condition/TCD02-EXPRISK1](Condition-TCD02-EXPRISK1.md),[Condition/TCD02-EXPRISK1-2](Condition-TCD02-EXPRISK1-2.md),[Condition/TCD02-UNDILL1](Condition-TCD02-UNDILL1.md),[Condition/TCD02-UNDILL1-2](Condition-TCD02-UNDILL1-2.md),[Condition/TCD03-EXPRISK1](Condition-TCD03-EXPRISK1.md),[Condition/TCD03-EXPRISK1-2](Condition-TCD03-EXPRISK1-2.md),[Condition/TCD03-EXPRISK2](Condition-TCD03-EXPRISK2.md),[Condition/TCD03-EXPRISK2-2](Condition-TCD03-EXPRISK2-2.md),[Condition/TCD03-EXPRISK3](Condition-TCD03-EXPRISK3.md),[Condition/TCD03-EXPRISK3-2](Condition-TCD03-EXPRISK3-2.md),[Condition/TCE01-UNDILL1-de](Condition-TCE01-UNDILL1-de.md),[Condition/TCF03-UNDILL1](Condition-TCF03-UNDILL1.md),[Condition/TCF03-UNDILL2](Condition-TCF03-UNDILL2.md)and[Condition/TCF03-UNDILL3](Condition-TCF03-UNDILL3.md)
* [ConditionVerificationStatus](http://terminology.hl7.org/7.0.1/CodeSystem-condition-ver-status.html): [Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md), [Bundle/1-4-ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md)...Show 69 more,[Bundle/B-D3-HCP1-C1](Bundle-B-D3-HCP1-C1.md),[Bundle/B-D4-HCP1-C1](Bundle-B-D4-HCP1-C1.md),[Bundle/B-D6-HCP1-C1](Bundle-B-D6-HCP1-C1.md),[Bundle/C-D3-HCP1-C1](Bundle-C-D3-HCP1-C1.md),[Bundle/C-D4-HCP2-C2](Bundle-C-D4-HCP2-C2.md),[Bundle/C-D5-HCP1-C1](Bundle-C-D5-HCP1-C1.md),[Bundle/C-D6-P-C1](Bundle-C-D6-P-C1.md),[Bundle/C-D7-HCP1-C1](Bundle-C-D7-HCP1-C1.md),[Bundle/D-D3-HCP1-C1](Bundle-D-D3-HCP1-C1.md),[Bundle/D-D4-HCP2-C2](Bundle-D-D4-HCP2-C2.md),[Bundle/D-D5-HCP1-C1](Bundle-D-D5-HCP1-C1.md),[Bundle/D-D6-HCP2-C2](Bundle-D-D6-HCP2-C2.md),[Bundle/D-D7-HCP3-C1](Bundle-D-D7-HCP3-C1.md),[Bundle/E-D2-HCP1-C1](Bundle-E-D2-HCP1-C1.md),[Bundle/F-D5-HCP1-C1](Bundle-F-D5-HCP1-C1.md),[Bundle/F-D6-HCP1-C1](Bundle-F-D6-HCP1-C1.md),[Bundle/RDB02](Bundle-RDB02.md),[Bundle/RDB02b](Bundle-RDB02b.md),[Bundle/RDB03](Bundle-RDB03.md),[Bundle/RDB03b](Bundle-RDB03b.md),[Bundle/RDB05](Bundle-RDB05.md),[Bundle/RDB05b](Bundle-RDB05b.md),[Bundle/RDC03](Bundle-RDC03.md),[Bundle/RDC03b](Bundle-RDC03b.md),[Bundle/RDC04](Bundle-RDC04.md),[Bundle/RDC04b](Bundle-RDC04b.md),[Bundle/RDC05](Bundle-RDC05.md),[Bundle/RDC05b](Bundle-RDC05b.md),[Bundle/RDD02](Bundle-RDD02.md),[Bundle/RDD02b](Bundle-RDD02b.md),[Bundle/RDD03](Bundle-RDD03.md),[Bundle/RDD03b](Bundle-RDD03b.md),[Bundle/RDE01](Bundle-RDE01.md),[Bundle/RDE01b](Bundle-RDE01b.md),[Bundle/RDF03](Bundle-RDF03.md),[Bundle/RDF03b](Bundle-RDF03b.md),[Condition/8-2-Condition](Condition-8-2-Condition.md),[Condition/8-3-Condition](Condition-8-3-Condition.md),[Condition/8-4-Condition](Condition-8-4-Condition.md),[Condition/8-6-Condition](Condition-8-6-Condition.md),[Condition/8-7-Condition](Condition-8-7-Condition.md),[Condition/8-8-Condition](Condition-8-8-Condition.md),[Condition/8-9-Condition](Condition-8-9-Condition.md),[Condition/TCB02-UNDILL1](Condition-TCB02-UNDILL1.md),[Condition/TCB02-UNDILL1-2](Condition-TCB02-UNDILL1-2.md),[Condition/TCB03-EXPRISK1](Condition-TCB03-EXPRISK1.md),[Condition/TCB03-EXPRISK1-2](Condition-TCB03-EXPRISK1-2.md),[Condition/TCB05-EXPRISK2](Condition-TCB05-EXPRISK2.md),[Condition/TCC03-EXPRISK1](Condition-TCC03-EXPRISK1.md),[Condition/TCC04-EXPRISK1](Condition-TCC04-EXPRISK1.md),[Condition/TCC04-EXPRISK2](Condition-TCC04-EXPRISK2.md),[Condition/TCC04-EXPRISK3](Condition-TCC04-EXPRISK3.md),[Condition/TCC05-UNDILL1](Condition-TCC05-UNDILL1.md),[Condition/TCC05-UNDILL2](Condition-TCC05-UNDILL2.md),[Condition/TCC05-UNDILL3](Condition-TCC05-UNDILL3.md),[Condition/TCD02-EXPRISK1](Condition-TCD02-EXPRISK1.md),[Condition/TCD02-EXPRISK1-2](Condition-TCD02-EXPRISK1-2.md),[Condition/TCD02-UNDILL1](Condition-TCD02-UNDILL1.md),[Condition/TCD02-UNDILL1-2](Condition-TCD02-UNDILL1-2.md),[Condition/TCD03-EXPRISK1](Condition-TCD03-EXPRISK1.md),[Condition/TCD03-EXPRISK1-2](Condition-TCD03-EXPRISK1-2.md),[Condition/TCD03-EXPRISK2](Condition-TCD03-EXPRISK2.md),[Condition/TCD03-EXPRISK2-2](Condition-TCD03-EXPRISK2-2.md),[Condition/TCD03-EXPRISK3](Condition-TCD03-EXPRISK3.md),[Condition/TCD03-EXPRISK3-2](Condition-TCD03-EXPRISK3-2.md),[Condition/TCE01-UNDILL1-de](Condition-TCE01-UNDILL1-de.md),[Condition/TCF03-UNDILL1](Condition-TCF03-UNDILL1.md),[Condition/TCF03-UNDILL2](Condition-TCF03-UNDILL2.md)and[Condition/TCF03-UNDILL3](Condition-TCF03-UNDILL3.md)
* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [Bundle/1-1-ImmunizationAdministration](Bundle-1-1-ImmunizationAdministration.md), [Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md)...Show 82 more,[Bundle/1-4-ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md),[Bundle/1-5-ImmunizationRecommendationResponse](Bundle-1-5-ImmunizationRecommendationResponse.md),[Bundle/A-D1-P-C1](Bundle-A-D1-P-C1.md),[Bundle/A-D2-HCP1-C1](Bundle-A-D2-HCP1-C1.md),[Bundle/A-D3-HCP2-C2](Bundle-A-D3-HCP2-C2.md),[Bundle/A-D4-HCP2-C2](Bundle-A-D4-HCP2-C2.md),[Bundle/A-D5-P-C1](Bundle-A-D5-P-C1.md),[Bundle/A-D6-HCP1-C1](Bundle-A-D6-HCP1-C1.md),[Bundle/B-D1-HCP1-C1](Bundle-B-D1-HCP1-C1.md),[Bundle/B-D2-HCP1-C1](Bundle-B-D2-HCP1-C1.md),[Bundle/B-D3-HCP1-C1](Bundle-B-D3-HCP1-C1.md),[Bundle/B-D4-HCP1-C1](Bundle-B-D4-HCP1-C1.md),[Bundle/B-D5-HCP1-C1](Bundle-B-D5-HCP1-C1.md),[Bundle/B-D6-HCP1-C1](Bundle-B-D6-HCP1-C1.md),[Bundle/C-D1-P-C1](Bundle-C-D1-P-C1.md),[Bundle/C-D2-HCP1-C1](Bundle-C-D2-HCP1-C1.md),[Bundle/C-D3-HCP1-C1](Bundle-C-D3-HCP1-C1.md),[Bundle/C-D4-HCP2-C2](Bundle-C-D4-HCP2-C2.md),[Bundle/C-D5-HCP1-C1](Bundle-C-D5-HCP1-C1.md),[Bundle/C-D6-P-C1](Bundle-C-D6-P-C1.md),[Bundle/C-D7-HCP1-C1](Bundle-C-D7-HCP1-C1.md),[Bundle/D-D1-HCP1-C1](Bundle-D-D1-HCP1-C1.md),[Bundle/D-D2-HCP2-C2](Bundle-D-D2-HCP2-C2.md),[Bundle/D-D3-HCP1-C1](Bundle-D-D3-HCP1-C1.md),[Bundle/D-D4-HCP2-C2](Bundle-D-D4-HCP2-C2.md),[Bundle/D-D5-HCP1-C1](Bundle-D-D5-HCP1-C1.md),[Bundle/D-D6-HCP2-C2](Bundle-D-D6-HCP2-C2.md),[Bundle/D-D7-HCP3-C1](Bundle-D-D7-HCP3-C1.md),[Bundle/E-D1-HCP1-C1](Bundle-E-D1-HCP1-C1.md),[Bundle/E-D2-HCP1-C1](Bundle-E-D2-HCP1-C1.md),[Bundle/F-D1-HCP1-C1](Bundle-F-D1-HCP1-C1.md),[Bundle/F-D2-HCP1-C1](Bundle-F-D2-HCP1-C1.md),[Bundle/F-D3-HCP1-C1](Bundle-F-D3-HCP1-C1.md),[Bundle/F-D4-HCP1-C1](Bundle-F-D4-HCP1-C1.md),[Bundle/F-D5-HCP1-C1](Bundle-F-D5-HCP1-C1.md),[Bundle/F-D6-HCP1-C1](Bundle-F-D6-HCP1-C1.md),[Bundle/RDA01](Bundle-RDA01.md),[Bundle/RDA01b](Bundle-RDA01b.md),[Bundle/RDA02](Bundle-RDA02.md),[Bundle/RDA02b](Bundle-RDA02b.md),[Bundle/RDA03](Bundle-RDA03.md),[Bundle/RDA03b](Bundle-RDA03b.md),[Bundle/RDA04](Bundle-RDA04.md),[Bundle/RDA04b](Bundle-RDA04b.md),[Bundle/RDB01](Bundle-RDB01.md),[Bundle/RDB01b](Bundle-RDB01b.md),[Bundle/RDB02](Bundle-RDB02.md),[Bundle/RDB02b](Bundle-RDB02b.md),[Bundle/RDB03](Bundle-RDB03.md),[Bundle/RDB03b](Bundle-RDB03b.md),[Bundle/RDB04](Bundle-RDB04.md),[Bundle/RDB04b](Bundle-RDB04b.md),[Bundle/RDB05](Bundle-RDB05.md),[Bundle/RDB05b](Bundle-RDB05b.md),[Bundle/RDC01](Bundle-RDC01.md),[Bundle/RDC01b](Bundle-RDC01b.md),[Bundle/RDC02](Bundle-RDC02.md),[Bundle/RDC02b](Bundle-RDC02b.md),[Bundle/RDC03](Bundle-RDC03.md),[Bundle/RDC03b](Bundle-RDC03b.md),[Bundle/RDC04](Bundle-RDC04.md),[Bundle/RDC04b](Bundle-RDC04b.md),[Bundle/RDC05](Bundle-RDC05.md),[Bundle/RDC05b](Bundle-RDC05b.md),[Bundle/RDD01](Bundle-RDD01.md),[Bundle/RDD01b](Bundle-RDD01b.md),[Bundle/RDD02](Bundle-RDD02.md),[Bundle/RDD02b](Bundle-RDD02b.md),[Bundle/RDD03](Bundle-RDD03.md),[Bundle/RDD03b](Bundle-RDD03b.md),[Bundle/RDE01](Bundle-RDE01.md),[Bundle/RDE01b](Bundle-RDE01b.md),[Bundle/RDF01](Bundle-RDF01.md),[Bundle/RDF01b](Bundle-RDF01b.md),[Bundle/RDF02](Bundle-RDF02.md),[Bundle/RDF02b](Bundle-RDF02b.md),[Bundle/RDF03](Bundle-RDF03.md),[Bundle/RDF03b](Bundle-RDF03b.md),[Patient/3-1-Patient](Patient-3-1-Patient.md),[Patient/3-2-Patient](Patient-3-2-Patient.md),[Patient/TC-patient](Patient-TC-patient.md)and[Patient/TC-patient2](Patient-TC-patient2.md)
* [ActCode](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html): [Bundle/1-4-ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md), [Immunization/7-10-Immunization](Immunization-7-10-Immunization.md)...Show 5 more,[Immunization/7-11-Immunization](Immunization-7-11-Immunization.md),[Immunization/7-12-Immunization](Immunization-7-12-Immunization.md),[Immunization/7-7-Immunization](Immunization-7-7-Immunization.md),[Immunization/7-8-Immunization](Immunization-7-8-Immunization.md)and[Immunization/7-9-Immunization](Immunization-7-9-Immunization.md)
* [ActReason](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActReason.html): [Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md) and [Immunization/7-6-Immunization](Immunization-7-6-Immunization.md)
* [ObservationInterpretation](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ObservationInterpretation.html): [Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md), [Bundle/1-4-ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md)...Show 6 more,[Bundle/B-D5-HCP1-C1](Bundle-B-D5-HCP1-C1.md),[Bundle/RDB04](Bundle-RDB04.md),[Bundle/RDB04b](Bundle-RDB04b.md),[Observation/9-1-Observation](Observation-9-1-Observation.md),[Observation/9-2-Observation](Observation-9-2-Observation.md)and[Observation/TCB04-LABRES1](Observation-TCB04-LABRES1.md)


* Unless otherwise indicated, reproduction of material posted on Council of Europe websites, and reproduction of photographs for which the Council of Europe holds copyright – see legal notice \“photo credits\” – is authorised for private use and for informational and educational uses relating to the Council of Europe’s work. This authorisation is subject to the condition that the source be indicated and no charge made for reproduction. Persons wishing to make some other use than those specified above, including commercial use, of information and text posted on these sites are asked to apply for prior written authorisation to the Council of Europe, Directorate of Communication.

* [EDQM Standard Terms](http://tx.fhir.org/r4/ValueSet/edqm): [Bundle/1-1-ImmunizationAdministration](Bundle-1-1-ImmunizationAdministration.md), [Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md)...Show 83 more,[Bundle/A-D1-P-C1](Bundle-A-D1-P-C1.md),[Bundle/A-D2-HCP1-C1](Bundle-A-D2-HCP1-C1.md),[Bundle/A-D3-HCP2-C2](Bundle-A-D3-HCP2-C2.md),[Bundle/A-D4-HCP2-C2](Bundle-A-D4-HCP2-C2.md),[Bundle/A-D5-P-C1](Bundle-A-D5-P-C1.md),[Bundle/A-D6-HCP1-C1](Bundle-A-D6-HCP1-C1.md),[Bundle/B-D1-HCP1-C1](Bundle-B-D1-HCP1-C1.md),[Bundle/C-D1-P-C1](Bundle-C-D1-P-C1.md),[Bundle/C-D2-HCP1-C1](Bundle-C-D2-HCP1-C1.md),[Bundle/D-D1-HCP1-C1](Bundle-D-D1-HCP1-C1.md),[Bundle/D-D2-HCP2-C2](Bundle-D-D2-HCP2-C2.md),[Bundle/D-D3-HCP1-C1](Bundle-D-D3-HCP1-C1.md),[Bundle/D-D4-HCP2-C2](Bundle-D-D4-HCP2-C2.md),[Bundle/E-D1-HCP1-C1](Bundle-E-D1-HCP1-C1.md),[Bundle/F-D1-HCP1-C1](Bundle-F-D1-HCP1-C1.md),[Bundle/F-D2-HCP1-C1](Bundle-F-D2-HCP1-C1.md),[Bundle/RDA01](Bundle-RDA01.md),[Bundle/RDA01b](Bundle-RDA01b.md),[Bundle/RDA02](Bundle-RDA02.md),[Bundle/RDA02b](Bundle-RDA02b.md),[Bundle/RDA03](Bundle-RDA03.md),[Bundle/RDA03b](Bundle-RDA03b.md),[Bundle/RDA04](Bundle-RDA04.md),[Bundle/RDA04b](Bundle-RDA04b.md),[Bundle/RDB01](Bundle-RDB01.md),[Bundle/RDB01b](Bundle-RDB01b.md),[Bundle/RDB02](Bundle-RDB02.md),[Bundle/RDB02b](Bundle-RDB02b.md),[Bundle/RDB03](Bundle-RDB03.md),[Bundle/RDB03b](Bundle-RDB03b.md),[Bundle/RDB04](Bundle-RDB04.md),[Bundle/RDB04b](Bundle-RDB04b.md),[Bundle/RDB05](Bundle-RDB05.md),[Bundle/RDB05b](Bundle-RDB05b.md),[Bundle/RDC01](Bundle-RDC01.md),[Bundle/RDC01b](Bundle-RDC01b.md),[Bundle/RDC02](Bundle-RDC02.md),[Bundle/RDC02b](Bundle-RDC02b.md),[Bundle/RDC03](Bundle-RDC03.md),[Bundle/RDC03b](Bundle-RDC03b.md),[Bundle/RDD01](Bundle-RDD01.md),[Bundle/RDD01b](Bundle-RDD01b.md),[Bundle/RDD02](Bundle-RDD02.md),[Bundle/RDD02b](Bundle-RDD02b.md),[Bundle/RDE01](Bundle-RDE01.md),[Bundle/RDE01b](Bundle-RDE01b.md),[Bundle/RDF01](Bundle-RDF01.md),[Bundle/RDF01b](Bundle-RDF01b.md),[Immunization/7-1-Immunization](Immunization-7-1-Immunization.md),[Immunization/7-1-Immunization2](Immunization-7-1-Immunization2.md),[Immunization/7-2-Immunization](Immunization-7-2-Immunization.md),[Immunization/7-3-Immunization](Immunization-7-3-Immunization.md),[Immunization/7-4-Immunization](Immunization-7-4-Immunization.md),[Immunization/7-5-Immunization](Immunization-7-5-Immunization.md),[Immunization/7-6-Immunization](Immunization-7-6-Immunization.md),[Immunization/TCA01-IMMUN1-patient](Immunization-TCA01-IMMUN1-patient.md),[Immunization/TCA01-IMMUN2-HCP1-ORG1-ROLE](Immunization-TCA01-IMMUN2-HCP1-ORG1-ROLE.md),[Immunization/TCA01-IMMUN3-HCP2-ORG2-ROLE](Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.md),[Immunization/TCA02-IMMUN4-HCP2-ORG2-ROLE](Immunization-TCA02-IMMUN4-HCP2-ORG2-ROLE.md),[Immunization/TCA03-IMMUN5-patient](Immunization-TCA03-IMMUN5-patient.md),[Immunization/TCA04-IMMUN5-patient-val-gfp](Immunization-TCA04-IMMUN5-patient-val-gfp.md),[Immunization/TCB01-IMMUN1](Immunization-TCB01-IMMUN1.md),[Immunization/TCB01-IMMUN2](Immunization-TCB01-IMMUN2.md),[Immunization/TCB05-IMMUN1](Immunization-TCB05-IMMUN1.md),[Immunization/TCB05-IMMUN2](Immunization-TCB05-IMMUN2.md),[Immunization/TCC01-IMMUN1-patient](Immunization-TCC01-IMMUN1-patient.md),[Immunization/TCC01-IMMUN2-patient](Immunization-TCC01-IMMUN2-patient.md),[Immunization/TCC02-IMMUN3-HCP1-ORG1-ROLE](Immunization-TCC02-IMMUN3-HCP1-ORG1-ROLE.md),[Immunization/TCC02-IMMUN4-HCP1-ORG1-ROLE](Immunization-TCC02-IMMUN4-HCP1-ORG1-ROLE.md),[Immunization/TCD01-IMMUN1](Immunization-TCD01-IMMUN1.md),[Immunization/TCD01-IMMUN2](Immunization-TCD01-IMMUN2.md),[Immunization/TCD01-IMMUN2-2](Immunization-TCD01-IMMUN2-2.md),[Immunization/TCD01-IMMUN3](Immunization-TCD01-IMMUN3.md),[Immunization/TCD01-IMMUN3-2](Immunization-TCD01-IMMUN3-2.md),[Immunization/TCD01-IMMUN4](Immunization-TCD01-IMMUN4.md),[Immunization/TCD01-IMMUN5](Immunization-TCD01-IMMUN5.md),[Immunization/TCE01-IMMUN1-de](Immunization-TCE01-IMMUN1-de.md),[Immunization/TCE01-IMMUN1-fr](Immunization-TCE01-IMMUN1-fr.md),[Immunization/TCE01-IMMUN2-de](Immunization-TCE01-IMMUN2-de.md),[Immunization/TCE01-IMMUN2-fr](Immunization-TCE01-IMMUN2-fr.md),[Immunization/TCF01-IMMUN1](Immunization-TCF01-IMMUN1.md),[Immunization/TCF01-IMMUN2](Immunization-TCF01-IMMUN2.md)and[Immunization/TCF01-IMMUN3](Immunization-TCF01-IMMUN3.md)


* This publication includes IP from Unified Codes for Units of Measures (UCUM) [Regenstrief Institute, Inc. and the UCUM Organization](http://unitsofmeasure.org/trac/wiki/TermsOfUse)

### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-vacd.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-vacd.r4b)](package.r4b.tgz) are available.

### Dependency Table







### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-vacd",
  "url" : "http://fhir.ch/ig/ch-vacd/ImplementationGuide/ch.fhir.ig.ch-vacd",
  "version" : "6.0.0",
  "name" : "CH_VACD",
  "title" : "Implementation Guide CH VACD",
  "status" : "active",
  "date" : "2025-12-16",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    }
  ],
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "packageId" : "ch.fhir.ig.ch-vacd",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "hl7ext",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on the HL7 Extension Pack"
        }
      ],
      "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
      "packageId" : "hl7.fhir.uv.extensions.r4",
      "version" : "5.2.0"
    },
    {
      "id" : "hl7_terminology_r4",
      "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
      "packageId" : "hl7.terminology.r4",
      "version" : "7.0.1"
    },
    {
      "id" : "ch_fhir_ig_ch_core",
      "uri" : "http://fhir.ch/ig/ch-core/ImplementationGuide/ch.fhir.ig.ch-core",
      "packageId" : "ch.fhir.ig.ch-core",
      "version" : "6.0.0"
    },
    {
      "id" : "ch_fhir_ig_ch_term",
      "uri" : "http://fhir.ch/ig/ch-term/ImplementationGuide/ch.fhir.ig.ch-term",
      "packageId" : "ch.fhir.ig.ch-term",
      "version" : "3.3.x"
    }
  ],
  "definition" : {
    "extension" : [
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2021+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "trial-use"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludettl"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "display-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "allow-extensible-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-expansion-params"
          },
          {
            "url" : "value",
            "valueString" : "../../expansion-params.json"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.10"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:0.4.0.127.0.16.1.1.2.1"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.51.1.1"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/expansion-parameters",
        "valueReference" : {
          "reference" : "Parameters/expansion-parameters"
        }
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
        "valueCode" : "hl7.fhir.uv.tools.r4#0.8.0"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2021+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "trial-use"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludettl"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "display-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "allow-extensible-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-expansion-params"
          },
          {
            "url" : "value",
            "valueString" : "../../expansion-params.json"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.10"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:0.4.0.127.0.16.1.1.2.1"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.51.1.1"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      }
    ],
    "resource" : [
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/1-1-ImmunizationAdministration"
        },
        "name" : "1.1 Immunization Administration",
        "description" : "Example for Bundle Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/1-3-VaccinationRecord"
        },
        "name" : "1.3 Vaccination Record",
        "description" : "Example for Bundle Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/1-4-ImmunizationRecommendationRequest"
        },
        "name" : "1.4 Immunization Recommendation Request",
        "description" : "Example for Bundle Immunization Recommendation Request",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-request-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/1-5-ImmunizationRecommendationResponse"
        },
        "name" : "1.5 Immunization Recommendation Response",
        "description" : "Example for Bundle Immunization Recommendation Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-response-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ImmunizationRecommendation"
          }
        ],
        "reference" : {
          "reference" : "ImmunizationRecommendation/10-1-ImmunizationRecommendation"
        },
        "name" : "10.1 ImmunizationRecommendation",
        "description" : "Example ImmunizationRecommendation",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization-recommendation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ImmunizationRecommendation"
          }
        ],
        "reference" : {
          "reference" : "ImmunizationRecommendation/10-2-ImmunizationRecommendation"
        },
        "name" : "10.2 ImmunizationRecommendation",
        "description" : "Example ImmunizationRecommendation",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization-recommendation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ImmunizationRecommendation"
          }
        ],
        "reference" : {
          "reference" : "ImmunizationRecommendation/10-3-ImmunizationRecommendation"
        },
        "name" : "10.3 ImmunizationRecommendation (Recommendation Request/Response)",
        "description" : "Example ImmunizationRecommendation for Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization-recommendation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ImmunizationRecommendation"
          }
        ],
        "reference" : {
          "reference" : "ImmunizationRecommendation/10-4-ImmunizationRecommendation"
        },
        "name" : "10.4 ImmunizationRecommendation (Recommendation Request/Response)",
        "description" : "Example ImmunizationRecommendation for Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization-recommendation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/11-1-AllergyIntolerance"
        },
        "name" : "11.1 AllergyIntolerance",
        "description" : "Example AllergyIntolerance",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/11-2-AllergyIntolerance"
        },
        "name" : "11.2 AllergyIntolerance",
        "description" : "Example AllergyIntolerance",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/11-3-AllergyIntolerance"
        },
        "name" : "11.3 AllergyIntolerance (Recommendation Request/Response)",
        "description" : "Example AllergyIntolerance for Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/11-4-AllergyIntolerance"
        },
        "name" : "11.4 AllergyIntolerance (Recommendation Request/Response)",
        "description" : "Example AllergyIntolerance for Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Binary"
          }
        ],
        "reference" : {
          "reference" : "Binary/1-1-ImmunizationAdministration-Binary"
        },
        "name" : "13.1 Binary Original Representation (Immunization Certificate)",
        "description" : "Example Binary for original represenation in section immunization certificate.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Binary"
          }
        ],
        "reference" : {
          "reference" : "Binary/originalRepresentation1"
        },
        "name" : "13.1 Binary Original Representation (Immunization Certificate)",
        "description" : "Example Binary for original represenation in section immunization certificate.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/2-1-ImmunizationAdministrationComposition"
        },
        "name" : "2.1 Composition Immunization Administration",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/2-3-VaccinationRecordComposition"
        },
        "name" : "2.3 Composition Vaccination Record",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/2-4-ImmunizationRecommendationRequestMessageHeader"
        },
        "name" : "2.4 Immunization Recommendation Request MessageHeader",
        "description" : "Example for Bundle Immunization Recommendation Request MessageHeader",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-request-messageheader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/2-5-ImmunizationRecommendationResponseMessageHeader"
        },
        "name" : "2.4 Immunization Recommendation Response MessageHeader",
        "description" : "Example for Bundle Immunization Recommendation Response MessageHeader",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-response-messageheader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/3-1-Patient"
        },
        "name" : "3.1 Patient",
        "description" : "Example for Patient for all document except Recommendation Request/Response",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/3-2-Patient"
        },
        "name" : "3.2 Patient",
        "description" : "Example for Patient in Immunization Recommendation Request/Response",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/4-1-Practitioner"
        },
        "name" : "4.1 Practitioner",
        "description" : "Example for Practitioner for all documents except Recommendation Request/Response",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/4-2-Practitioner"
        },
        "name" : "4.2 Practitioner",
        "description" : "Example for Practitioner for all documents except Recommendation Request/Response",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/4-3-Practitioner"
        },
        "name" : "4.3 Practitioner",
        "description" : "Example for Practitioner for all documents except Recommendation Request/Response",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/4-4-Practitioner"
        },
        "name" : "4.4 Practitioner (Recommendation Request/Response)",
        "description" : "Example for Practitioner in Immunization Recommendation Request/Response",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/4-5-Practitioner"
        },
        "name" : "4.5 Practitioner (Recommendation Request/Response)",
        "description" : "Example for Practitioner in Immunization Recommendation Request/Response",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/4-6-Practitioner"
        },
        "name" : "4.6 Practitioner (Recommendation Request/Response)",
        "description" : "Example for Practitioner in Immunization Recommendation Request/Response",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/5-1-Organization"
        },
        "name" : "5.1 Organization",
        "description" : "Example for Organization for all documents except  Recommendation Request/Response",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/5-2-Organization"
        },
        "name" : "5.2 Organization",
        "description" : "Example for Organization for all documents except  Recommendation Request/Response",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/5-3-Organization"
        },
        "name" : "5.3 Organization",
        "description" : "Example for Organization for all documents except  Recommendation Request/Response",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/5-4-Organization"
        },
        "name" : "5.4 Organization (Recommendation Request/Response)",
        "description" : "Example for Organization in Immunization Recommendation Request/Response",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/5-5-Organization"
        },
        "name" : "5.5 Organization (Recommendation Request/Response)",
        "description" : "Example for Organization in Immunization Recommendation Request/Response",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/5-6-Organization"
        },
        "name" : "5.6 Organization (Recommendation Request/Response)",
        "description" : "Example for Organization in Immunization Recommendation Request/Response",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/6-1-PractitionerRole"
        },
        "name" : "6.1 Practitioner Role",
        "description" : "Example for Practitioner Role for all documents except Recommendation Request/Response",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/6-2-PractitionerRole"
        },
        "name" : "6.2 Practitioner Role",
        "description" : "Example for Practitioner Role for all documents except Recommendation Request/Response",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/6-3-PractitionerRole"
        },
        "name" : "6.3 Practitioner Role",
        "description" : "Example for Practitioner Role for all documents except Recommendation Request/Response",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/6-4-PractitionerRole"
        },
        "name" : "6.4 Practitioner Role (Recommendation Request/Response)",
        "description" : "Example for Practitioner Role in Immunization Recommendation Request",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/6-5-PractitionerRole"
        },
        "name" : "6.5 Practitioner Role (Recommendation Request/Response)",
        "description" : "Example for Practitioner Role in Immunization Recommendation Request",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/6-6-PractitionerRole"
        },
        "name" : "6.6 Practitioner Role (Recommendation Request/Response)",
        "description" : "Example for Practitioner Role in Immunization Recommendation Request",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/7-1-Immunization"
        },
        "name" : "7.1 Immunization",
        "description" : "Example for Immunization for all documents except Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/7-1-Immunization2"
        },
        "name" : "7.1 Immunization",
        "description" : "Example for Immunization with absent reason",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/7-10-Immunization"
        },
        "name" : "7.10 Immunization (Recommendation Request/Response)",
        "description" : "Example forImmunization for Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/7-11-Immunization"
        },
        "name" : "7.11 Immunization (Recommendation Request/Response)",
        "description" : "Example forImmunization for Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/7-12-Immunization"
        },
        "name" : "7.12 Immunization",
        "description" : "Example forImmunization for occurrenceString",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/7-2-Immunization"
        },
        "name" : "7.2 Immunization",
        "description" : "Example forImmunization for all documents except Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/7-3-Immunization"
        },
        "name" : "7.3 Immunization",
        "description" : "Example forImmunization for all documents except Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/7-4-Immunization"
        },
        "name" : "7.4 Immunization",
        "description" : "Example forImmunization for all documents except Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/7-5-Immunization"
        },
        "name" : "7.5 Immunization",
        "description" : "Example forImmunization for all documents except Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/7-6-Immunization"
        },
        "name" : "7.6 Immunization",
        "description" : "Example forImmunization for all documents except Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/7-7-Immunization"
        },
        "name" : "7.7 Immunization (Recommendation Request/Response)",
        "description" : "Example forImmunization for Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/7-8-Immunization"
        },
        "name" : "7.8 Immunization (Recommendation Request/Response)",
        "description" : "Example forImmunization for Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/7-9-Immunization"
        },
        "name" : "7.9 Immunization (Recommendation Request/Response)",
        "description" : "Example forImmunization for Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/8-2-Condition"
        },
        "name" : "8.2 Condition (Medical Problems)",
        "description" : "Example Condition for medical problems",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/8-3-Condition"
        },
        "name" : "8.3 Condition (Medical Problems)",
        "description" : "Example Condition for medical problems",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/8-4-Condition"
        },
        "name" : "8.4 Condition (Past Illnesses)",
        "description" : "Example Condition for past illnesses",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/8-6-Condition"
        },
        "name" : "8.6 Condition (Medical Problems for Recommendation Request/Response)",
        "description" : "Example Condition for medical problems for Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/8-7-Condition"
        },
        "name" : "8.7 Condition (Medical Problems for Recommendation Request/Response)",
        "description" : "Example Condition for medical problems for Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/8-8-Condition"
        },
        "name" : "8.8 Condition (Past Illnesses for Recommendation Request/Response)",
        "description" : "Example Condition for past illnesses for Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/8-9-Condition"
        },
        "name" : "8.9 Condition (Past Illnesses)",
        "description" : "Example Condition for past illnesses",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/9-1-Observation"
        },
        "name" : "9.1 Observation (Labor and Serology)",
        "description" : "Example Observation for labor and serology",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-laboratory-serology"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/9-2-Observation"
        },
        "name" : "9.2 Observation (Labor and Serology for Recommendation Request/Response)",
        "description" : "Example Observation for labor and serology for Recommendation Request/Response",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-laboratory-serology"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/B-D1-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/B-D2-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/B-D3-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/B-D4-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/B-D5-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/B-D6-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/C-D3-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/C-D6-P-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/C-D7-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/D-D1-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/D-D2-HCP2-C2-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/D-D3-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/D-D4-HCP2-C2-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/D-D5-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/D-D6-HCP2-C2-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/D-D7-HCP3-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/E-D1-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/E-D2-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/F-D5-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/F-D6-HCP1-C1-Composition"
        },
        "name" : "Administration Document Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDA01-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDA01-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDA02-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDA02-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDA03-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDA03-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDA04-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDA04-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDB01-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDB01-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDB02-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDB02-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDB03-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDB03-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDB04-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDB04-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDB05-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDB05-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDC01-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDC01-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDC02-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDC02-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDC03-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDC03-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDC04-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDC04-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDC05-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDC05-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDD01-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDD01-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDD02-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDD02-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDD03-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDD03-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDE01-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDE01-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDF01-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDF01-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDF02-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDF02-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDF03-Composition"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/RDF03-Composition-b"
        },
        "name" : "Aggregated Document Composition",
        "description" : "Example for Composition Vaccination Record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-immunization-allergyintolerances-vs"
        },
        "name" : "Allergies and Intolerance values for Immunization",
        "description" : "The allergies and adverse reactions which have an influence on the immunization recommendations.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-basic-immunization-vs"
        },
        "name" : "Basic Immunization Codes",
        "description" : "The codes for declaring basic immunization.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-vacd-basic-immunization-cs"
        },
        "name" : "Basic Immunization codes",
        "description" : "Clinical Decision Support Event",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-vacd-clinical-decision-support-event-cs"
        },
        "name" : "CDS Event",
        "description" : "Clinical Decision Support Event",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/CDSS-Organization"
        },
        "name" : "CDSS Organization",
        "description" : "Example for Organization for CDS Service",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-allergyintolerances"
        },
        "name" : "CH VACD AllergyIntolerance",
        "description" : "Definition of the AllergyIntolerance part for vaccination record documents.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-basic-immunization"
        },
        "name" : "CH VACD Basic Immunization",
        "description" : "Condition to declare Basic Immunization done by one single condition for the declared vaccinations according to the ValueSet [Basic Immunization Codes](ValueSet-ch-vacd-basic-immunization-vs.html).  \nThis is for cases the patient does not have a vaccination certificate to declare, but knows that it is done.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-condition"
        },
        "name" : "CH VACD Condition Profile (Abstract)",
        "description" : "Generic definition (abstract profile) of the condition for all documents except recommendation request or response.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-ext-immunization-medication-reference"
        },
        "name" : "CH VACD Extension Immunization Medication Reference",
        "description" : "Extension to make a reference to the medication for the immunization.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-ext-merging-conflict-entry-reference"
        },
        "name" : "CH VACD Extension Merging Conflict Entry Reference",
        "description" : "Extension to make a reference to an entry conflicting with other entries.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-ext-verification-status"
        },
        "name" : "CH VACD Extension verificationStatus",
        "description" : "Extension to define the verificationStatus on resources not defining this field like Immunization and Observation.  \nWith the verificationStatus, practitioners can express that they verified the data added by a patient or related person.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-immunization"
        },
        "name" : "CH VACD Immunization",
        "description" : "Definition of the immunization part for all documents.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-composition-immunization-administration"
        },
        "name" : "CH VACD Immunization Administration Composition",
        "description" : "Definition of the composition for the  immunization administration document.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-document-immunization-administration"
        },
        "name" : "CH VACD Immunization Administration Document",
        "description" : "Definition of the bundle for the immunization administration document. This document is allowed to be used in context of the Swiss EPR but can also used in context of data exchange next to the Swiss EPR.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-recommendation-request-messageheader"
        },
        "name" : "CH VACD Immunization Recommendation Request MessageHeader",
        "description" : "Definition of the MessageHeader for the immunization recommendation request.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-recommendation-response-messageheader"
        },
        "name" : "CH VACD Immunization Recommendation Response MessageHeader",
        "description" : "Definition of the MessageHeader for the immunization recommendation response.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-immunization-recommendation"
        },
        "name" : "CH VACD Immunization Recommendations",
        "description" : "Definition of the immunization recommendation part for all documents.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-laboratory-serology"
        },
        "name" : "CH VACD Laboratory And Serology",
        "description" : "Definition of the labor and serology part for all documents.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-medical-problems"
        },
        "name" : "CH VACD Medical Problems",
        "description" : "Definition of the medical problems part for all documents.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-medication-for-immunization"
        },
        "name" : "CH VACD Medication For Immunization",
        "description" : "Definition of the medication for immunization.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-recommendation-request-message"
        },
        "name" : "CH VACD Message Immunization Recommendation Request",
        "description" : "Definition of the bundle for the immunization recommendation request.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-recommendation-response-message"
        },
        "name" : "CH VACD Message Immunization Recommendation Response",
        "description" : "Definition of the bundle for the immunization recommendation response.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-pastillnesses"
        },
        "name" : "CH VACD Past Illness",
        "description" : "Definition of the past illness part for all documents.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-document-vaccination-record"
        },
        "name" : "CH VACD Vaccination Record Document",
        "description" : "Definition of the bundle for the vaccination record document. This document is allowed to be used in context of the Swiss EPR but can also used in context of data exchange next to the Swiss EPR.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-vacd-composition-vaccination-record"
        },
        "name" : "CH VACD VaccinationRecord Composition",
        "description" : "Definition of the composition for the vaccination record document.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/F-D1-HCP1-C1-Composition"
        },
        "name" : "Document 1 GFP Gemeinschaft Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/F-D2-HCP1-C1-Composition"
        },
        "name" : "Document 1 GFP Gemeinschaft Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/F-D3-HCP1-C1-Composition"
        },
        "name" : "Document 1 GFP Gemeinschaft Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/F-D4-HCP1-C1-Composition"
        },
        "name" : "Document 1 GFP Gemeinschaft Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/A-D2-HCP1-C1-Composition"
        },
        "name" : "Document 2 GFP Gemeinschaft Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/C-D2-HCP1-C1-Composition"
        },
        "name" : "Document 2 HCP1 Community 1 Composition",
        "description" : "Example for Composition Immunization Administration to fix Immunization entry.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/A-D3-HCP2-C2-Composition"
        },
        "name" : "Document 3 GFP Gemeinschaft 2 Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/A-D4-HCP2-C2-Composition"
        },
        "name" : "Document 4 GFP Gemeinschaft 2 Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/C-D4-HCP2-C2-Composition"
        },
        "name" : "Document 4 GFP Gemeinschaft 2 Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-vacd-entry-conflict-cs"
        },
        "name" : "Entry Conflict Code System",
        "description" : "The entry conflict codesystem",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-entry-conflict-vs"
        },
        "name" : "Entry Conflict Codes",
        "description" : "The codes for declaring document entry conflicts",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCC04-EXPRISK1"
        },
        "name" : "Exposition Risk \"Bat researcher or guard\" (Condition)",
        "description" : "Example Condition for expositionrisk \"Bat researcher or guard\"",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCC04-EXPRISK2"
        },
        "name" : "Exposition Risk \"Bat researcher or guard\" (Condition)",
        "description" : "Example Condition for canceling expositionrisk \"FLEDERMAUSFORSCHER_UND_SCHUETZER'\"",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCC04-EXPRISK3"
        },
        "name" : "Exposition Risk \"Bat researcher or guard\" (Condition)",
        "description" : "Example Condition for canceling expositionrisk \"Bat researcher or guard\"",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCB03-EXPRISK1"
        },
        "name" : "Exposition Risk Worker in Healthcare (Condition)",
        "description" : "Example Condition for expositionrisk Worker in Healthcare",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCC03-EXPRISK1"
        },
        "name" : "Exposition Risk Worker in Healthcare (Condition)",
        "description" : "Example Condition for expositionrisk Worker in Healthcare",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCD02-EXPRISK1"
        },
        "name" : "Exposition Risk Worker in Healthcare (Condition)",
        "description" : "Example Condition for expositionrisk Worker in Healthcare",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCB03-EXPRISK1-2"
        },
        "name" : "Exposition Risk Worker in Healthcare (Condition)",
        "description" : "Example Condition for expositionrisk Worker in Healthcare",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCD02-EXPRISK1-2"
        },
        "name" : "Exposition Risk Worker in Healthcare (Condition)",
        "description" : "Example Condition for expositionrisk Worker in Healthcare",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCD03-EXPRISK1"
        },
        "name" : "Exposition Risk Worker in Healthcare (Condition)",
        "description" : "Example Condition for expositionrisk Worker in Healthcare",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCD03-EXPRISK2"
        },
        "name" : "Exposition Risk Worker in Healthcare (Condition)",
        "description" : "Example Condition for expositionrisk Worker in Healthcare",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCD03-EXPRISK3"
        },
        "name" : "Exposition Risk Worker in Healthcare (Condition)",
        "description" : "Example Condition for expositionrisk Worker in Healthcare",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCD03-EXPRISK1-2"
        },
        "name" : "Exposition Risk Worker in Healthcare (Condition)",
        "description" : "Example Condition for expositionrisk Worker in Healthcare",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCD03-EXPRISK2-2"
        },
        "name" : "Exposition Risk Worker in Healthcare (Condition)",
        "description" : "Example Condition for expositionrisk Worker in Healthcare",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCD03-EXPRISK3-2"
        },
        "name" : "Exposition Risk Worker in Healthcare (Condition)",
        "description" : "Example Condition for expositionrisk Worker in Healthcare",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/A-D6-HCP1-C1-Composition"
        },
        "name" : "GFP Document 6 Stammgemeinschaft Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/TCB04-LABRES1"
        },
        "name" : "Laboratory And Serology Labresult",
        "description" : "Example Observation for Hepatitis B virus surface Ab",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-laboratory-serology"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-laboratory-serology-vs"
        },
        "name" : "Laboratory Serology for Immunization",
        "description" : "Laboratory Serology for immunization",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/TC-ORG-GSK"
        },
        "name" : "Manufacturer GlaxoSmithKline AG",
        "description" : "Manufacturer GlaxoSmithKline AG",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/TC-ORG-MSD"
        },
        "name" : "Manufacturer GlaxoSmithKline AG",
        "description" : "Manufacturer GlaxoSmithKline AG",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/TC-ORG-PFIZER"
        },
        "name" : "Manufacturer Pfizer AG",
        "description" : "Manufacturer Pfizer AG",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCB05-EXPRISK2"
        },
        "name" : "Medical Risk Pregnancy (Condition)",
        "description" : "Example Condition for expositionrisk Worker in Healthcare",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/A-D1-P-C1-Composition"
        },
        "name" : "Patient Document 1 Stammgemeinschaft Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/C-D1-P-C1-Composition"
        },
        "name" : "Patient Document 1 Stammgemeinschaft Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/A-D5-P-C1-Composition"
        },
        "name" : "Patient Document 5 Stammgemeinschaft Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-vacd-exposure-risks-cs"
        },
        "name" : "Swiss Exposure Risks Codesystem",
        "description" : "Exposure risks codes available in Switzerland.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-risks-medical-vs"
        },
        "name" : "Swiss Medical Risks For Immunizations",
        "description" : "The medical risks used in Switzerland.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-risks-occupation-vs"
        },
        "name" : "Swiss Occupation Risks For Immunizations",
        "description" : "The occupation exposition risks used in Switzerland.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-risks-preillness-vs"
        },
        "name" : "Swiss Preillness Risks For Immunizations",
        "description" : "The preillness risks used in Switzerland.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-risks-vs"
        },
        "name" : "Swiss Risks For Immunizations",
        "description" : "The medical and exposition risks used in Switzerland.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-risks-social-vs"
        },
        "name" : "Swiss Social Risks For Immunizations",
        "description" : "The social exposition risks used in Switzerland.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Device"
          }
        ],
        "reference" : {
          "reference" : "Device/TC-Device-Aggregator"
        },
        "name" : "TC Device Aggregator",
        "description" : "A Device example representing am aggregation service",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/TC-HCP1-C1"
        },
        "name" : "TC HCP1 C1",
        "description" : "Testcase practitioner HCP1 of C1",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-author"
        },
        "name" : "TC HCP1 ORG1 Role Author in C1",
        "description" : "Testcase practitionerole HCP1 ORG1 as author",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-performer"
        },
        "name" : "TC HCP1 ORG1 Role Performer",
        "description" : "Testcase practitionerole HCP1 ORG1 as performer in C1",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/TC-HCP2-C2"
        },
        "name" : "TC HCP2 G2",
        "description" : "Testcase practitione HCP2 of C2",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/TC-HCP2-ORG2-ROLE-author"
        },
        "name" : "TC HCP2 G2 ORG2 Role Author",
        "description" : "Testcase practitionerole HCP2 ORG2 as author in G2",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/TC-HCP2-ORG2-ROLE-performer"
        },
        "name" : "TC HCP2 ORG2 Role Performer",
        "description" : "Testcase practitionerole HCP2 ORG2 as performer",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/TC-HCP3-C1"
        },
        "name" : "TC HCP3 C1",
        "description" : "Testcase practitioner HCP3 of C1",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/TC-HCP3-ORG1-ROLE-author"
        },
        "name" : "TC HCP3 ORG1 Role Author in C1",
        "description" : "Testcase practitionerole HCP3 ORG1 as author",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/TC-HCP3-ORG1-ROLE-performer"
        },
        "name" : "TC HCP3 ORG1 Role Performer",
        "description" : "Testcase practitionerole HCP3 ORG1 as performer in C1",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/TC-ORG3"
        },
        "name" : "TC Labor Organization",
        "description" : "Testcase labor organization for lab results",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/TC-IMMUN-MEDIC-BOOSTRIX"
        },
        "name" : "TC Medication for Immunization (Boostrix)",
        "description" : "Testcase  example of medication for immunization extension Boostrix",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medication-for-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/TC-IMMUN-MEDIC-GARDASIL9"
        },
        "name" : "TC Medication for Immunization (Gardasil) against HPV",
        "description" : "Testcase  example of medication for immunization extension Gardasil® 9",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medication-for-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/TC-IMMUN-MEDIC-PRIORIX"
        },
        "name" : "TC Medication for Immunization (Priorix) against MMR",
        "description" : "Testcase  example of medication for immunization extension Priorix",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medication-for-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/TC-ORG1"
        },
        "name" : "TC Organization 1",
        "description" : "Testcase organization of HCP1",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/TC-ORG2"
        },
        "name" : "TC Organization 2",
        "description" : "Testcase organization of HCP2 in C2",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/TC-patient"
        },
        "name" : "TC patient 1",
        "description" : "Testcase: Example of patient",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/TC-patient2"
        },
        "name" : "TC patient 2",
        "description" : "Testcase: Example of patient",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCA02-IMMUN4-HCP2-ORG2-ROLE"
        },
        "name" : "TC02 Immunization by GFP",
        "description" : "Testcase 2 example of immunization from GFP for second dose hepatite A",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCA01-IMMUN2-HCP1-ORG1-ROLE"
        },
        "name" : "TC1 Immunization by HCP1",
        "description" : "Testcase 1 example of immunization from HCP1",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCB01-IMMUN1"
        },
        "name" : "TC1 Immunization by HCP1",
        "description" : "Testcase D01 example of immunization against Central European encephalitis (disorder)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCB01-IMMUN2"
        },
        "name" : "TC1 Immunization by HCP1",
        "description" : "Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCB05-IMMUN1"
        },
        "name" : "TC1 Immunization by HCP1",
        "description" : "Testcase D01 example of immunization against Central European encephalitis (disorder)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCB05-IMMUN2"
        },
        "name" : "TC1 Immunization by HCP1",
        "description" : "Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCD01-IMMUN1"
        },
        "name" : "TC1 Immunization by HCP1",
        "description" : "Testcase D01 example of immunization against Central European encephalitis (disorder)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCD01-IMMUN2"
        },
        "name" : "TC1 Immunization by HCP1",
        "description" : "Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCD01-IMMUN2-2"
        },
        "name" : "TC1 Immunization by HCP1",
        "description" : "Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCE01-IMMUN1-fr"
        },
        "name" : "TC1 Immunization by HCP1",
        "description" : "Testcase D01 example of immunization against Central European encephalitis (disorder)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCE01-IMMUN2-fr"
        },
        "name" : "TC1 Immunization by HCP1",
        "description" : "Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCE01-IMMUN1-de"
        },
        "name" : "TC1 Immunization by HCP1",
        "description" : "Testcase D01 example of immunization against Central European encephalitis (disorder)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCE01-IMMUN2-de"
        },
        "name" : "TC1 Immunization by HCP1",
        "description" : "Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCA01-IMMUN3-HCP2-ORG2-ROLE"
        },
        "name" : "TC1 Immunization by HCP2",
        "description" : "Testcase 1 example of immunization from HCP2",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCD01-IMMUN3"
        },
        "name" : "TC1 Immunization by HCP2",
        "description" : "Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCD01-IMMUN4"
        },
        "name" : "TC1 Immunization by HCP2",
        "description" : "Testcase D01 example of immunization against MMR",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCD01-IMMUN5"
        },
        "name" : "TC1 Immunization by HCP2",
        "description" : "Testcase D01 example of immunization against HPV",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCD01-IMMUN3-2"
        },
        "name" : "TC1 Immunization by HCP2",
        "description" : "Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCA03-IMMUN5-patient"
        },
        "name" : "TC1 Immunization by Patient",
        "description" : "Testcase 3 example of immunization against Central European encephalitis (disorder) from patient",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCA04-IMMUN5-patient-val-gfp"
        },
        "name" : "TC1 Immunization by Patient",
        "description" : "Testcase 3 example of immunization against Central European encephalitis (disorder) from patient",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/TC-IMMUN-MEDIC-HAVRIX1440"
        },
        "name" : "TC1 Medication for Immunization by patient",
        "description" : "Testcase 1 example of medication for immunization extension",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medication-for-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/TC-IMMUN-MEDIC-FSMEIMMCC"
        },
        "name" : "TC1 Medication for Immunization by patient",
        "description" : "Testcase 1 example of medication for immunization extension",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medication-for-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCA01-IMMUN1-patient"
        },
        "name" : "TCA1 Immunization by patient",
        "description" : "Testcase A 1 example of immunization",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/TCB01-ALLINTO1"
        },
        "name" : "TCB01 AllergyIntolerance",
        "description" : "Testcase B 1 example of allergyintolerance to typhoid vaccine.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCC02-IMMUN3-HCP1-ORG1-ROLE"
        },
        "name" : "TCC1 Immunization by HCP2 corrected by HCP1",
        "description" : "Testcase C 02 example of correction of immunization of HCP2 by HCP1",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCC02-IMMUN4-HCP1-ORG1-ROLE"
        },
        "name" : "TCC1 Immunization by HCP2 corrected by HCP1",
        "description" : "Testcase C 02 example of correction of immunization of HCP2 by HCP1",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCC01-IMMUN1-patient"
        },
        "name" : "TCC1 Immunization by patient",
        "description" : "Testcase C 1 example of immunization",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCC01-IMMUN2-patient"
        },
        "name" : "TCC1 Immunization by patient",
        "description" : "Testcase C 1 example of immunization",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/TCF02-ALLINTO1"
        },
        "name" : "TCF02 AllergyIntolerance 1",
        "description" : "Testcase F2: Add comment (note) to an existing AllergyIntolerance",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/TCF02-ALLINTO2"
        },
        "name" : "TCF02 AllergyIntolerance 2",
        "description" : "Testcase F 2: Add comment (note) to an existing AllergyIntolerance",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/TCF02-ALLINTO3"
        },
        "name" : "TCF02 AllergyIntolerance 3",
        "description" : "Testcase F 2: Add comment (note) to an existing AllergyIntolerance",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCF01-IMMUN1"
        },
        "name" : "TCF1 Immunization 1",
        "description" : "Testcase F 1 example of immunization",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCF01-IMMUN2"
        },
        "name" : "TCF1 Immunization 2",
        "description" : "Testcase F 1 example of immunization with added note",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/TCF01-IMMUN3"
        },
        "name" : "TCF1 Immunization 3",
        "description" : "Testcase F 1 example of immunization with added note",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Location"
          }
        ],
        "reference" : {
          "reference" : "Location/TC-Device-Aggregator-Location"
        },
        "name" : "TC_Device Aggregator Location",
        "description" : "The location of the device.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDA01"
        },
        "name" : "Test Case A 01: Aggregated Dokument (RDA01)",
        "description" : "Test Case A 01: Patient hat drei Impfdokumente in zwei unterschiedlichen Gemeinschaften (eines davon vom Patient selbst erfasst). Dies ist das vom Patienten erstellte Dokument",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDA01b"
        },
        "name" : "Test Case A 01: Aggregated Dokument (RDA01)",
        "description" : "Test Case A 01: Patient hat drei Impfdokumente in zwei unterschiedlichen Gemeinschaften (eines davon vom Patient selbst erfasst). Dies ist das vom Patienten erstellte Dokument",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/A-D2-HCP1-C1"
        },
        "name" : "Test Case A 01: GFP Dokument (A_D2_HCP1_C1)",
        "description" : "Test Case A 01: Patient hat drei Impfdokumente in zwei unterschiedlichen Gemeinschaften (eines davon vom Patient selbst erfasst). Dies ist das vom Patienten erstellte Dokument",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/A-D3-HCP2-C2"
        },
        "name" : "Test Case A 01: GFP Dokument (A_D3_HCP2_C2)",
        "description" : "Test Case A 01: Patient hat drei Impfdokumente in zwei unterschiedlichen Gemeinschaften (eines davon vom Patient selbst erfasst). Dies ist das vom Patienten erstellte Dokument",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/A-D1-P-C1"
        },
        "name" : "Test Case A 01: Patient Dokument (A-D1-P_C1)",
        "description" : "Test Case A 01: Patient hat drei Impfdokumente in zwei unterschiedlichen Gemeinschaften (eines davon vom Patient selbst erfasst). Dies ist das vom Patienten erstellte Dokument",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDA02"
        },
        "name" : "Test Case A 02: Aggregated Dokument (RDA02)",
        "description" : "Test Case A 02: GFP trägt zweite Dosis einer Impfung (Hepatitis A) ein",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDA02b"
        },
        "name" : "Test Case A 02: Aggregated Dokument (RDA02)",
        "description" : "Test Case A 02: GFP trägt zweite Dosis einer Impfung (Hepatitis A) ein",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/A-D4-HCP2-C2"
        },
        "name" : "Test Case A 02: GFP aus andere Gemeinschaft trägt zweite Dosis einer Impfung (Hepatitis A) ein",
        "description" : "Test Case A 02: GFP trägt zweite Dosis einer Impfung (Hepatitis A) ein.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDA03"
        },
        "name" : "Test Case A 03: Aggregated Dokument (RDA03)",
        "description" : "Test Case A 03:  Patient trägt zweite Dosis einer Impfung (FSME) ein.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDA03b"
        },
        "name" : "Test Case A 03: Aggregated Dokument (RDA03)",
        "description" : "Test Case A 03:  Patient trägt zweite Dosis einer Impfung (FSME) ein.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/A-D5-P-C1"
        },
        "name" : "Test Case A 03: Patient Dokument 5 (D5_P_C1)",
        "description" : "Test Case A 03: Patient trägt zweite Dosis einer Impfung (FSME) ein",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDA04"
        },
        "name" : "Test Case A 04: Aggregated Dokument (RDA04)",
        "description" : "Test Case A 04: GFP validiert die Impfung (FSME)(Dok6) welche vom Patienten eingetragen wurde (Dok5)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDA04b"
        },
        "name" : "Test Case A 04: Aggregated Dokument (RDA04)",
        "description" : "Test Case A 04: GFP validiert die Impfung (FSME)(Dok6) welche vom Patienten eingetragen wurde (Dok5)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/A-D6-HCP1-C1"
        },
        "name" : "Test Case A 04: GFP Dokument (A_D6_HCP1_C1)",
        "description" : "Test Case A 04: GFP validiert die Impfung (FSME)(Dok6) welche vom Patienten eingetragen wurde (Dok5)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/B-D2-HCP1-C1"
        },
        "name" : "Test Case B 01: Document HCP1 with AllergyIntolerance Entry",
        "description" : "Test Case B 01: ImmunizationAdministration document created by HCP1 for Patient with AllergyIntolerance entry.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/B-D1-HCP1-C1"
        },
        "name" : "Test Case B 01: Document HCP1 with Immunization Entries",
        "description" : "Test Case B 01: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDB01"
        },
        "name" : "Test Case B 01: Resulting Document TC B 1 (RDB01)",
        "description" : "Test Case B 01: VaccinationRecord document created as merging result with immunization and allergyintolerance entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDB01b"
        },
        "name" : "Test Case B 01: Resulting Document TC B 1 (RDB01)",
        "description" : "Test Case B 01: VaccinationRecord document created as merging result with immunization and allergyintolerance entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/B-D3-HCP1-C1"
        },
        "name" : "Test Case B 02: Document HCP1 with Past Illness Entries",
        "description" : "Test Case B 02: ImmunizationAdministration document created by HCP1 for patient with past illness entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDB02"
        },
        "name" : "Test Case B 02: Resulting Document TC B 2 (RDB02)",
        "description" : "Test Case B 02: VaccinationRecord document created as merging result with immunization and past illness entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDB02b"
        },
        "name" : "Test Case B 02: Resulting Document TC B 2 (RDB02)",
        "description" : "Test Case B 02: VaccinationRecord document created as merging result with immunization and past illness entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/B-D4-HCP1-C1"
        },
        "name" : "Test Case B 03: Document HCP1 with Medical Problem Entries",
        "description" : "Test Case B 03: ImmunizationAdministration document created by HCP1 for patient with medical problem entry.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDB03"
        },
        "name" : "Test Case B 03: Resulting Document TC B 3 (RDB03)",
        "description" : "Test Case B 03: VaccinationRecord document created as merging result with immunization and exposition risk entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDB03b"
        },
        "name" : "Test Case B 03: Resulting Document TC B 3 (RDB03)",
        "description" : "Test Case B 03: VaccinationRecord document created as merging result with immunization and exposition risk entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/B-D5-HCP1-C1"
        },
        "name" : "Test Case B 04: Document HCP1 with Laboratory Entries",
        "description" : "Test Case B 04: ImmunizationAdministration document created by HCP1 for patient with laboratory entry.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDB04"
        },
        "name" : "Test Case B 04: Resulting Document TC B 4 (RDB04)",
        "description" : "Test Case B 04: VaccinationRecord document created as merging result with immunization and laboratory entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDB04b"
        },
        "name" : "Test Case B 04: Resulting Document TC B 4 (RDB04)",
        "description" : "Test Case B 04: VaccinationRecord document created as merging result with immunization and laboratory entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/B-D6-HCP1-C1"
        },
        "name" : "Test Case B 05: Document HCP1 with Medical Problem and Pregnancy Entries",
        "description" : "Test Case B 05: ImmunizationAdministration document created by HCP1 for patient with medical problem entry and pregnancy.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDB05"
        },
        "name" : "Test Case B 05: Resulting Document TC B 4 (RDB05)",
        "description" : "Test Case B 05: VaccinationRecord document created as merging result with immunization, medical problem and pregnancy entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDB05b"
        },
        "name" : "Test Case B 05: Resulting Document TC B 4 (RDB05)",
        "description" : "Test Case B 05: VaccinationRecord document created as merging result with immunization, medical problem and pregnancy entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDC01"
        },
        "name" : "Test Case C 01: Aggregated Dokument (RDD01)",
        "description" : "Test Case C 01: Correction of own Immunization entry.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDC01b"
        },
        "name" : "Test Case C 01: Aggregated Dokument (RDD01)",
        "description" : "Test Case C 01: Correction of own Immunization entry.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/C-D1-P-C1"
        },
        "name" : "Test Case C 01: Patient Dokument (C_D1_P_C1)",
        "description" : "Test Case C 01: patient corrects an entry of its own document",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDC02"
        },
        "name" : "Test Case C 02: Aggregated Dokument (RDD01)",
        "description" : "Test Case C 02: Correction of foreign Immunization entry.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDC02b"
        },
        "name" : "Test Case C 02: Aggregated Dokument (RDD01)",
        "description" : "Test Case C 02: Correction of foreign Immunization entry.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/C-D2-HCP1-C1"
        },
        "name" : "Test Case C 02: GFP Dokument (C_D2_HCP1_C1)",
        "description" : "Test Case C 02: Example for Document Immunization Administration to fix Immunization entry.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/C-D3-HCP1-C1"
        },
        "name" : "Test Case C 03: Document HCP1 with Medical Problem Entries",
        "description" : "Test Case C 03: ImmunizationAdministration document created by HCP1 for patient with medical problem entry.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDC03"
        },
        "name" : "Test Case C 03: Resulting Document TC B 3 (RDC03)",
        "description" : "Test Case C 03: VaccinationRecord document created as merging result with immunization and exposition risk entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDC03b"
        },
        "name" : "Test Case C 03: Resulting Document TC B 3 (RDC03)",
        "description" : "Test Case C 03: VaccinationRecord document created as merging result with immunization and exposition risk entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/C-D5-HCP1-C1-Composition"
        },
        "name" : "Test Case C 04: Document 4 HCP Community 2 Composition",
        "description" : "Example for Composition Immunization Administration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/C-D4-HCP2-C2"
        },
        "name" : "Test Case C 04: Medical Problem \"Bat researcher or guard\"",
        "description" : "Test Case C 04: HCP2 enters medical problem (exposition risk) \"Bat researcher or guard\"",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/C-D5-HCP1-C1"
        },
        "name" : "Test Case C 04: Medical Problem \"Bat researcher or guard\"",
        "description" : "Test Case C 04: HCP2 enters medical problem (exposition risk) \"Bat researcher or guard\"",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDC04"
        },
        "name" : "Test Case C 04: Resulting Document TC C 4 (RDC04)",
        "description" : "Test Case C 04: VaccinationRecord document created as merging result with  exposition risk entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDC04b"
        },
        "name" : "Test Case C 04: Resulting Document TC C 4 (RDC04)",
        "description" : "Test Case C 04: VaccinationRecord document created as merging result with  exposition risk entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/C-D7-HCP1-C1"
        },
        "name" : "Test Case C 05: Document by HCP1 with Past Illness Entries",
        "description" : "Test Case C 05: ImmunizationAdministration document created by HCP1 with past illness entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/C-D6-P-C1"
        },
        "name" : "Test Case C 05: Document Patient with Past Illness Entries",
        "description" : "Test Case C 05: ImmunizationAdministration document created by Patient with past illness entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDC05"
        },
        "name" : "Test Case C 05: Resulting Document TC C 5 (RDC05)",
        "description" : "Test Case C 05: VaccinationRecord document created as merging result with past illness entry.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDC05b"
        },
        "name" : "Test Case C 05: Resulting Document TC C 5 (RDC05)",
        "description" : "Test Case C 05: VaccinationRecord document created as merging result with past illness entry.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDD01"
        },
        "name" : "Test Case D 01: Aggregated Dokument (RDD01)",
        "description" : "Test Case D 01: Error aggregating documents due to dupplicated Immunization entry.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDD01b"
        },
        "name" : "Test Case D 01: Aggregated Dokument (RDD01)",
        "description" : "Test Case D 01: Error aggregating documents due to dupplicated Immunization entry.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/D-D1-HCP1-C1"
        },
        "name" : "Test Case D 01: Document HCP1 with Immunization Entries (RDD01)",
        "description" : "Test Case D 01: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/D-D2-HCP2-C2"
        },
        "name" : "Test Case D 01: Document HCP1 with Immunization Entries (RDD01)",
        "description" : "Test Case D 01: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/D-D3-HCP1-C1"
        },
        "name" : "Test Case D 01: Document HCP1 with Immunization Entries (RDD01)",
        "description" : "Test Case D 01: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/D-D4-HCP2-C2"
        },
        "name" : "Test Case D 01: Document HCP1 with Immunization Entries (RDD01)",
        "description" : "Test Case D 01: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDD02"
        },
        "name" : "Test Case D 02: Aggregated Dokument (RDD02)",
        "description" : "Test Case D 01: Error aggregating documents due to dupplicated entries for immunization and medical risks.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDD02b"
        },
        "name" : "Test Case D 02: Aggregated Dokument (RDD02)",
        "description" : "Test Case D 01: Error aggregating documents due to dupplicated entries for immunization and medical risks.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDD03"
        },
        "name" : "Test Case D 03: Aggregated Dokument (RDD03)",
        "description" : "Test Case D 03: Error aggregating documents due to dupplicated entries for medical risks.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDD03b"
        },
        "name" : "Test Case D 03: Aggregated Dokument (RDD03)",
        "description" : "Test Case D 03: Error aggregating documents due to dupplicated entries for medical risks.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/D-D5-HCP1-C1"
        },
        "name" : "Test Case D 03: Document HCP1 with MedicalProblem Entries (RDD02)",
        "description" : "Test Case D 03: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/D-D6-HCP2-C2"
        },
        "name" : "Test Case D 03: Document HCP1 with MedicalProblem Entries (RDD02)",
        "description" : "Test Case D 03: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/D-D7-HCP3-C1"
        },
        "name" : "Test Case D 03: Document HCP1 with MedicalProblem Entries (RDD02)",
        "description" : "Test Case D 03: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDE01"
        },
        "name" : "Test Case E 01: Aggregated Dokument (RDE01)",
        "description" : "Test Case E 01: Aggregating documents with different languages merge to document in german language.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDE01b"
        },
        "name" : "Test Case E 01: Aggregated Dokument (RDE01)",
        "description" : "Test Case E 01: Aggregating documents with different languages merge to document in german language.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/E-D2-HCP1-C1"
        },
        "name" : "Test Case E 01: Document HCP1 with Immunization Entries English",
        "description" : "Test Case E 01: ImmunizationAdministration document created by HCP1 for Patient with Immunization entries in english language",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/E-D1-HCP1-C1"
        },
        "name" : "Test Case E 01: Document HCP1 with Immunization Entries French",
        "description" : "Test Case E 01: ImmunizationAdministration document created by HCP1 for Patient with Immunization entries in french language",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/F-D3-HCP1-C1"
        },
        "name" : "Test Case F 01: Add comment (note) to an existing AllergyIntolerance",
        "description" : "Test Case F 01: Add comment (note) to an existing AllergyIntolerance",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/F-D4-HCP1-C1"
        },
        "name" : "Test Case F 01: Add comment (note) to an existing AllergyIntolerance",
        "description" : "Test Case F 01: Add comment (note) to an existing AllergyIntolerance",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/F-D1-HCP1-C1"
        },
        "name" : "Test Case F 01: Add comment (note) to an existing Immunization",
        "description" : "Test Case F 01: Patient hat ein Impfdokumente mit einer Impfung Havrix 1440.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/F-D2-HCP1-C1"
        },
        "name" : "Test Case F 01: Add comment (note) to an existing Immunization",
        "description" : "Test Case F 01: Arzt fügt ein Kommentar (note) zur impfung hinzu.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDF01"
        },
        "name" : "Test Case F 01: Add comment (note) to an existing Immunization",
        "description" : "Test Case F 01: Arzt fügt ein Kommentar (note) zur impfung hinzu.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDF01b"
        },
        "name" : "Test Case F 01: Add comment (note) to an existing Immunization",
        "description" : "Test Case F 01: Arzt fügt ein Kommentar (note) zur impfung hinzu.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDF02"
        },
        "name" : "Test Case F 02: Add comment (note) to an existing AllergyIntolerance",
        "description" : "Test Case F 02: Add comment (note) to an existing AllergyIntolerance",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDF02b"
        },
        "name" : "Test Case F 02: Add comment (note) to an existing AllergyIntolerance",
        "description" : "Test Case F 02: Add comment (note) to an existing AllergyIntolerance",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/F-D5-HCP1-C1"
        },
        "name" : "Test Case F 03: Add comment (note) to an existing Condition(PastIllness)",
        "description" : "Test Case F 03: Add comment (note) to an existing Condition(PastIllness)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/F-D6-HCP1-C1"
        },
        "name" : "Test Case F 03: Add comment (note) to an existing Condition(PastIllness)",
        "description" : "Test Case F 03: Add comment (note) to an existing Condition(PastIllness)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDF03"
        },
        "name" : "Test Case F 03: Add comment (note) to an existing Condition(PastIllness)",
        "description" : "Test Case F 03: Add comment (note) to an existing Condition(PastIllness)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/RDF03b"
        },
        "name" : "Test Case F 03: Add comment (note) to an existing Condition(PastIllness)",
        "description" : "Test Case F 03: Add comment (note) to an existing Condition(PastIllness)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCB02-UNDILL1"
        },
        "name" : "Undergone Illness Chickenpox (Past Illnesses)",
        "description" : "Example Condition for past illnesses chickenpox",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCC05-UNDILL1"
        },
        "name" : "Undergone Illness Chickenpox (Past Illnesses)",
        "description" : "Example Condition for past illnesses chickenpox",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCC05-UNDILL2"
        },
        "name" : "Undergone Illness Chickenpox (Past Illnesses)",
        "description" : "Example Condition for past illnesses chickenpox",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCC05-UNDILL3"
        },
        "name" : "Undergone Illness Chickenpox (Past Illnesses)",
        "description" : "Example Condition for past illnesses chickenpox",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCD02-UNDILL1"
        },
        "name" : "Undergone Illness Chickenpox (Past Illnesses)",
        "description" : "Example Condition for past illnesses chickenpox",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCB02-UNDILL1-2"
        },
        "name" : "Undergone Illness Chickenpox (Past Illnesses)",
        "description" : "Example Condition for past illnesses chickenpox",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCD02-UNDILL1-2"
        },
        "name" : "Undergone Illness Chickenpox (Past Illnesses)",
        "description" : "Example Condition for past illnesses chickenpox",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCE01-UNDILL1-de"
        },
        "name" : "Undergone Illness Chickenpox (Past Illnesses)",
        "description" : "Example Condition for past illnesses chickenpox",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCF03-UNDILL1"
        },
        "name" : "Undergone Illness Chickenpox (Past Illnesses)",
        "description" : "Example Condition for past illnesses chickenpox",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCF03-UNDILL2"
        },
        "name" : "Undergone Illness Chickenpox (Past Illnesses)",
        "description" : "Example Condition for past illnesses chickenpox",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/TCF03-UNDILL3"
        },
        "name" : "Undergone Illness Chickenpox (Past Illnesses)",
        "description" : "Example Condition for past illnesses chickenpox",
        "exampleCanonical" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-verification-status-vs"
        },
        "name" : "Verification Status Codes",
        "description" : "Definition the verification status codes for the extension ch-vacd-ext-verification-status.",
        "exampleBoolean" : false
      }
    ],
    "page" : {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "toc.html"
        }
      ],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "index.html"
            }
          ],
          "nameUrl" : "index.html",
          "title" : "Home",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "aggregator.html"
            }
          ],
          "nameUrl" : "aggregator.html",
          "title" : "Aggregator",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "CDS-immunization-recommendation.html"
            }
          ],
          "nameUrl" : "CDS-immunization-recommendation.html",
          "title" : "CDS Immunization Recommendation",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "changelog.html"
            }
          ],
          "nameUrl" : "changelog.html",
          "title" : "Changelog",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "documents.html"
            }
          ],
          "nameUrl" : "documents.html",
          "title" : "Documents",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "extensions.html"
            }
          ],
          "nameUrl" : "extensions.html",
          "title" : "Extensions",
          "generation" : "html"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "generatenarrativetext.html"
            }
          ],
          "nameUrl" : "generatenarrativetext.html",
          "title" : "Generatenarrativetext",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "immunization-administration-document.html"
            }
          ],
          "nameUrl" : "immunization-administration-document.html",
          "title" : "Immunization Administration Document",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "immunization-recommendation-request-message.html"
            }
          ],
          "nameUrl" : "immunization-recommendation-request-message.html",
          "title" : "Immunization Recommendation Request Message",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "immunization-recommendation-response-message.html"
            }
          ],
          "nameUrl" : "immunization-recommendation-response-message.html",
          "title" : "Immunization Recommendation Response Message",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "profiles.html"
            }
          ],
          "nameUrl" : "profiles.html",
          "title" : "Profiles",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_A01.html"
            }
          ],
          "nameUrl" : "TC_A01.html",
          "title" : "TC A 01",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_A02.html"
            }
          ],
          "nameUrl" : "TC_A02.html",
          "title" : "TC A 02",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_A03.html"
            }
          ],
          "nameUrl" : "TC_A03.html",
          "title" : "TC A 03",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_A04.html"
            }
          ],
          "nameUrl" : "TC_A04.html",
          "title" : "TC A 04",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_B01.html"
            }
          ],
          "nameUrl" : "TC_B01.html",
          "title" : "TC B 01",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_B02.html"
            }
          ],
          "nameUrl" : "TC_B02.html",
          "title" : "TC B 02",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_B03.html"
            }
          ],
          "nameUrl" : "TC_B03.html",
          "title" : "TC B 03",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_B04.html"
            }
          ],
          "nameUrl" : "TC_B04.html",
          "title" : "TC B 04",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_B05.html"
            }
          ],
          "nameUrl" : "TC_B05.html",
          "title" : "TC B 05",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_C01.html"
            }
          ],
          "nameUrl" : "TC_C01.html",
          "title" : "TC C 01",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_C02.html"
            }
          ],
          "nameUrl" : "TC_C02.html",
          "title" : "TC C 02",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_C03.html"
            }
          ],
          "nameUrl" : "TC_C03.html",
          "title" : "TC C 03",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_C04.html"
            }
          ],
          "nameUrl" : "TC_C04.html",
          "title" : "TC C 04",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_C05.html"
            }
          ],
          "nameUrl" : "TC_C05.html",
          "title" : "TC C 05",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_D01.html"
            }
          ],
          "nameUrl" : "TC_D01.html",
          "title" : "TC D 01",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_D02.html"
            }
          ],
          "nameUrl" : "TC_D02.html",
          "title" : "TC D 02",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_D03.html"
            }
          ],
          "nameUrl" : "TC_D03.html",
          "title" : "TC D 03",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_E01.html"
            }
          ],
          "nameUrl" : "TC_E01.html",
          "title" : "TC E 01",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_F01.html"
            }
          ],
          "nameUrl" : "TC_F01.html",
          "title" : "TC F 01",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_F02.html"
            }
          ],
          "nameUrl" : "TC_F02.html",
          "title" : "TC F 02",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TC_F03.html"
            }
          ],
          "nameUrl" : "TC_F03.html",
          "title" : "TC F 03",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "terminology.html"
            }
          ],
          "nameUrl" : "terminology.html",
          "title" : "Terminology",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "TestCases.html"
            }
          ],
          "nameUrl" : "TestCases.html",
          "title" : "Test Cases",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Case-1-Consulter-les-donnees-de-vaccination.html"
            }
          ],
          "nameUrl" : "Use-Case-1-Consulter-les-donnees-de-vaccination.html",
          "title" : "Use Case 1 Consulter Les Donnees De Vaccination",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Case-1-Impfdokumentation-sichten.html"
            }
          ],
          "nameUrl" : "Use-Case-1-Impfdokumentation-sichten.html",
          "title" : "Use Case 1 Impfdokumentation Sichten",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Case-14-Impfcheck-ausfuehren.html"
            }
          ],
          "nameUrl" : "Use-Case-14-Impfcheck-ausfuehren.html",
          "title" : "Use Case 14 Impfcheck Ausfuehren",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Case-14-Proceder-au-controle-des-vaccins.html"
            }
          ],
          "nameUrl" : "Use-Case-14-Proceder-au-controle-des-vaccins.html",
          "title" : "Use Case 14 Proceder Au Controle Des Vaccins",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Case-2-Documenter-la-vaccination.html"
            }
          ],
          "nameUrl" : "Use-Case-2-Documenter-la-vaccination.html",
          "title" : "Use Case 2 Documenter La Vaccination",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Case-2-Impfung-dokumentieren.html"
            }
          ],
          "nameUrl" : "Use-Case-2-Impfung-dokumentieren.html",
          "title" : "Use Case 2 Impfung Dokumentieren",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Case-3-Impfdossier-verifizieren-und-aktualisieren.html"
            }
          ],
          "nameUrl" : "Use-Case-3-Impfdossier-verifizieren-und-aktualisieren.html",
          "title" : "Use Case 3 Impfdossier Verifizieren Und Aktualisieren",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Case-3-Verifier-la-documentation-de-vaccination.html"
            }
          ],
          "nameUrl" : "Use-Case-3-Verifier-la-documentation-de-vaccination.html",
          "title" : "Use Case 3 Verifier La Documentation De Vaccination",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Case-4-Impfcheck-ausfuehren.html"
            }
          ],
          "nameUrl" : "Use-Case-4-Impfcheck-ausfuehren.html",
          "title" : "Use Case 4 Impfcheck Ausfuehren",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Case-4-Proceder-au-controle-des-vaccins.html"
            }
          ],
          "nameUrl" : "Use-Case-4-Proceder-au-controle-des-vaccins.html",
          "title" : "Use Case 4 Proceder Au Controle Des Vaccins",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Case-5-Etablir-un-certificat-verifiable.html"
            }
          ],
          "nameUrl" : "Use-Case-5-Etablir-un-certificat-verifiable.html",
          "title" : "Use Case 5 Etablir Un Certificat Verifiable",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Case-5-Verifizierbares-Zertifikat-erstellen.html"
            }
          ],
          "nameUrl" : "Use-Case-5-Verifizierbares-Zertifikat-erstellen.html",
          "title" : "Use Case 5 Verifizierbares Zertifikat Erstellen",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Cases.html"
            }
          ],
          "nameUrl" : "Use-Cases.html",
          "title" : "Use Cases",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Cases-Deutsch.html"
            }
          ],
          "nameUrl" : "Use-Cases-Deutsch.html",
          "title" : "Use Cases Deutsch",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Use-Cases-Francais.html"
            }
          ],
          "nameUrl" : "Use-Cases-Francais.html",
          "title" : "Use Cases Francais",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase_1_cda_de.html"
            }
          ],
          "nameUrl" : "usecase_1_cda_de.html",
          "title" : "Usecase 1 Cda De",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase_1_cda_fr.html"
            }
          ],
          "nameUrl" : "usecase_1_cda_fr.html",
          "title" : "Usecase 1 Cda Fr",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase_2_cda_de.html"
            }
          ],
          "nameUrl" : "usecase_2_cda_de.html",
          "title" : "Usecase 2 Cda De",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase_2_cda_fr.html"
            }
          ],
          "nameUrl" : "usecase_2_cda_fr.html",
          "title" : "Usecase 2 Cda Fr",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase_3_cda_de.html"
            }
          ],
          "nameUrl" : "usecase_3_cda_de.html",
          "title" : "Usecase 3 Cda De",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase_3_cda_fr.html"
            }
          ],
          "nameUrl" : "usecase_3_cda_fr.html",
          "title" : "Usecase 3 Cda Fr",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase_4_cda_de.html"
            }
          ],
          "nameUrl" : "usecase_4_cda_de.html",
          "title" : "Usecase 4 Cda De",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase_4_cda_fr.html"
            }
          ],
          "nameUrl" : "usecase_4_cda_fr.html",
          "title" : "Usecase 4 Cda Fr",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase_5_cda_de.html"
            }
          ],
          "nameUrl" : "usecase_5_cda_de.html",
          "title" : "Usecase 5 Cda De",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase_5_cda_fr.html"
            }
          ],
          "nameUrl" : "usecase_5_cda_fr.html",
          "title" : "Usecase 5 Cda Fr",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase_6_cda_de.html"
            }
          ],
          "nameUrl" : "usecase_6_cda_de.html",
          "title" : "Usecase 6 Cda De",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase_6_cda_fr.html"
            }
          ],
          "nameUrl" : "usecase_6_cda_fr.html",
          "title" : "Usecase 6 Cda Fr",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase_7_cda_de.html"
            }
          ],
          "nameUrl" : "usecase_7_cda_de.html",
          "title" : "Usecase 7 Cda De",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase_7_cda_fr.html"
            }
          ],
          "nameUrl" : "usecase_7_cda_fr.html",
          "title" : "Usecase 7 Cda Fr",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecases_cda.html"
            }
          ],
          "nameUrl" : "usecases_cda.html",
          "title" : "Usecases Cda",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "vaccination-record-document.html"
            }
          ],
          "nameUrl" : "vaccination-record-document.html",
          "title" : "Vaccination Record Document",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "verification-status.html"
            }
          ],
          "nameUrl" : "verification-status.html",
          "title" : "Verification Status",
          "generation" : "markdown"
        }
      ]
    },
    "parameter" : [
      {
        "code" : "path-resource",
        "value" : "input/capabilities"
      },
      {
        "code" : "path-resource",
        "value" : "input/examples"
      },
      {
        "code" : "path-resource",
        "value" : "input/extensions"
      },
      {
        "code" : "path-resource",
        "value" : "input/models"
      },
      {
        "code" : "path-resource",
        "value" : "input/operations"
      },
      {
        "code" : "path-resource",
        "value" : "input/profiles"
      },
      {
        "code" : "path-resource",
        "value" : "input/resources"
      },
      {
        "code" : "path-resource",
        "value" : "input/vocabulary"
      },
      {
        "code" : "path-resource",
        "value" : "input/maps"
      },
      {
        "code" : "path-resource",
        "value" : "input/testing"
      },
      {
        "code" : "path-resource",
        "value" : "input/history"
      },
      {
        "code" : "path-resource",
        "value" : "fsh-generated/resources"
      },
      {
        "code" : "path-pages",
        "value" : "template/config"
      },
      {
        "code" : "path-pages",
        "value" : "input/images"
      },
      {
        "code" : "path-tx-cache",
        "value" : "input-cache/txcache"
      }
    ]
  }
}

```
