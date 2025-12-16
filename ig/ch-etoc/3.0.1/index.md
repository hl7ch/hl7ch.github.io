# Home - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/ImplementationGuide/ch.fhir.ig.ch-etoc | *Version*:3.0.1 |
| Active as of 2025-12-16 | *Computable Name*:CH_eTOC |
| **Copyright/Legal**: CC0-1.0 | |

### Purpose

The CH eTransition of Care (CH eTOC) Implementation Guide defines the content of a referral from a GP to the hospital, to a specialist, from one hospital to another etc.

CH eTOC is intended primarily for use in directional information exchange and for the use in the SWISS EPR. It however may be implemented in other settings too.

[Significant changes, open and closed issues.](changelog.md)

**Download:** You can download this implementation guide in [npm format](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) from [here](package.tgz).

### Foundation

This Implementation Guide uses FHIR defined resources. For details on HL7 FHIR R4 see [http://hl7.org/fhir/r4](http://hl7.org/fhir/r4).

Because the Implementation Guide relies heavily on the FHIR Resources Questionnaire and QuestionnaireResponse, forms are addressed here as Questionnaires.

This Implementation Guide is derived from the [CH Order & Referral by Form (CH ORF) Implementation Guide (CH ORF)](https://fhir.ch/ig/ch-orf/3.0.0/index.html) which relies on HL7 Structured Data Capture Implementation Guide, see [SDC](https://hl7.org/fhir/uv/sdc/STU3/) and uses the Swiss Core Profiles, see [CH Core](https://fhir.ch/ig/ch-core/5.0.0/index.html).

April 7, 2022 the HL7 Switzerland Technical Committee discussed #39 and finally voted to set cardinality for the Questionnaire and QuestionnaireResponse to 1.. in the composition resource thus making the use of Questionnaires and QuestionnaireResponses mandatory (see also [CH ORF](https://fhir.ch/ig/ch-orf/3.0.0/index.html)).

Applications claiming for conformance with a CH ORF derived implementation guide shall: 
 Render (and in case of the Questionnaire Filler allow for data entry) all elements of a questionnaire in the user interface (e.g. on screen, in print). Grouping of items and the order of items within shall be adequately reproduced according to the questionnaire.

Vendors of applications with Questionnaire Filler/Questionnaire Receiver actors are strongly recommended to implement interfaces to other applications (such as HIS and PACS) at least for all data in the generics elements of questionnaires.

In the 3rd report of the Interprofessional Working Group on Electronic Patient Record (IPAG) [eDischarge Report](https://www.e-health-suisse.ch/upload/documents/Bericht_IPAG_eTOC_eUeberweisungsbericht.pdf), recommendations are formulated that are important for the inter-professional exchange of information during transitions of treatment (transition of care). The information relevant to treatment shall be be described in an exchange format that makes suggestions for structuring the content of interprofessional data content.

#### Relation to the International Patient Summary

At the IPAG working group meeting in February 2021, it was decided that a first version of CH eTOC shall be based on the the HL7 IPS-UV specification, especially regarding the structure. See also the table below where the sections of both formats are compared.

However, this version of CH eTOC still allows many free text entries. The reason for this is that, according to IPAG, the items shall be implemented as text in a first step. It can be expected, that users will copy and paste results: it seems reasonable to have multiple entries for the lab, but other findings are usually in free text form and therefore it makes sense to copy all findings in one copy and paste action.

Clinical content uses mostly the same resources as the IPS. The resource definitions are however constrained from FHIR base definitions and CH Core definitions and NOT from CH IPS or UV IPS. This decision was made in order to focus on the sections relevant to CH eTOC and to minimize the unexpected effects of future changes within the IPS.

* IPS Section: IPS Medication Summary
  * CH eTOC Section: Medication
  * Profile used in CH eTOC: [CH Core MedicationStatement](https://fhir.ch/ig/ch-core/5.0.0/StructureDefinition-ch-core-medicationstatement.html)
  * Comments (on differences): -
* IPS Section: IPS Allergies and Intolerances
  * CH eTOC Section: Allergies and intolerances
  * Profile used in CH eTOC: [CH eTOC Allergy Intolerance](StructureDefinition-ch-etoc-allergyintolerance.md)
  * Comments (on differences): -
* IPS Section: IPS Problems
  * CH eTOC Section: Problems
  * Profile used in CH eTOC: [CH eTOC Primary Diagnosis Condition](StructureDefinition-ch-etoc-primary-diagnosis.md)
  * Comments (on differences): CH eTOC allows to distinguish between primary and secondary diagnosis, both are referenced in this section.
* IPS Section: [CH eTOC Secondary Diagnosis Condition](StructureDefinition-ch-etoc-secondary-diagnosis.md)
* IPS Section: IPS History of Procedures
  * CH eTOC Section: History of Procedures
  * Profile used in CH eTOC: [CH eTOC Procedure](StructureDefinition-ch-etoc-procedure.md)
  * Comments (on differences): -
* IPS Section: IPS Immunizations
  * CH eTOC Section: Immunizations
  * Profile used in CH eTOC: [CH eTOC immunizationstatus](StructureDefinition-ch-etoc-immunization.md)
  * Comments (on differences): -
* IPS Section: IPS Medical Devices
  * CH eTOC Section: Medical devices
  * Profile used in CH eTOC: [CH eTOC Device](StructureDefinition-ch-etoc-device.md)
  * Comments (on differences): -
* IPS Section: IPS Results
  * CH eTOC Section: Diagnostic results
  * Profile used in CH eTOC: [CH eTOC Lab Observation](StructureDefinition-ch-etoc-lab-observation.md)
  * Comments (on differences): -
* IPS Section: [CH eTOC Pathology Observation](StructureDefinition-ch-etoc-pathology-observation.md)
* IPS Section: [CH eTOC Radiology Observation](StructureDefinition-ch-etoc-radiology-observation.md)
* IPS Section: [CH eTOC Cardiology Observation](StructureDefinition-ch-etoc-cardiology-observation.md)
* IPS Section: IPS Vital Signs
  * CH eTOC Section: [CH eTOC Body Weight Observation](StructureDefinition-ch-etoc-bodyweight-observation.md)
  * Profile used in CH eTOC: There is no Vital Signs section in CH eTOC, to avoid duplicate content.
* IPS Section: [CH eTOC Body Height Observation](StructureDefinition-ch-etoc-bodyheight-observation.md)
* IPS Section: IPS History of Past Illness
  * CH eTOC Section: History of past illness
  * Profile used in CH eTOC: [CH eTOC Past History of Illnesses Condition](StructureDefinition-ch-etoc-illness.md)
  * Comments (on differences): -
* IPS Section: IPS Functional Status
  * CH eTOC Section: Functional Status
  * Profile used in CH eTOC: [CH eTOC Functional Status Condition](StructureDefinition-ch-etoc-functionalstatus.md)
  * Comments (on differences): -
* IPS Section: IPS Plan of Care
  * CH eTOC Section: -
  * Profile used in CH eTOC: -
  * Comments (on differences): This section is omitted in CH eTOC for the following reason: It is assumed that care plans will only be available as PDF files in the foreseeable future at best. Therefore, there is a need to provide care plans as attachments. The Attachments section is provided for this purpose.
* IPS Section: IPS Social History
  * CH eTOC Section: Social history
  * Profile used in CH eTOC: [CH eTOC Social History Condition](StructureDefinition-ch-etoc-socialhistory.md)
  * Comments (on differences): -
* IPS Section: IPS History of Pregnancy
  * CH eTOC Section: Pregnancy
  * Profile used in CH eTOC: [CH eTOC Pregnancy Status Observation](StructureDefinition-ch-etoc-pregnancystatus.md)
  * Comments (on differences): -
* IPS Section: [CH eTOC Expected Delivery Date Observation](StructureDefinition-ch-etoc-expecteddeliverydate.md)
* IPS Section: IPS Advance Directives
  * CH eTOC Section: -
  * Profile used in CH eTOC: -
  * Comments (on differences): Not defined (yet) in CH eTOC.
* IPS Section: IPS Alerts Section
  * CH eTOC Section: -
  * Profile used in CH eTOC: -
  * Comments (on differences): Not defined (yet) in CH eTOC.
* IPS Section: IPS Patient Story Section
  * CH eTOC Section: -
  * Profile used in CH eTOC: -
  * Comments (on differences): Not defined (yet) in CH eTOC.
* IPS Section: -
  * CH eTOC Section: Order and Referral
  * Profile used in CH eTOC: [CH ORF Questionnaire](https://fhir.ch/ig/ch-orf/3.0.0/StructureDefinition-ch-orf-questionnaire.html)
  * Comments (on differences): Additional section in CH eTOC containing the data that supports the order and referral by form.
* IPS Section: [CH ORF QuestionnaireResponse](https://fhir.ch/ig/ch-orf/3.0.0/StructureDefinition-ch-orf-questionnaireresponse.html)
* IPS Section: [CH eTOC Service Request](StructureDefinition-ch-etoc-servicerequest.md)
* IPS Section: -
  * CH eTOC Section: Purpose
  * Profile used in CH eTOC: [CH eTOC ServiceRequest](StructureDefinition-ch-etoc-servicerequest.md)
  * Comments (on differences): Additional section in CH eTOC to provide information about the purpose/reason.
* IPS Section: -
  * CH eTOC Section: Attachments
  * Profile used in CH eTOC: [CH ORF DocumentReference](https://fhir.ch/ig/ch-orf/3.0.0/StructureDefinition-ch-orf-documentreference.html)
  * Comments (on differences): Additional section to support multiple attachments (for anything considered important).

[Table 1] **Comparison between the sections of IPS and CH eTOC**

### Terminology

Value sets and codings are preliminary and not yet approved by eHealth Suisse.

### Safety Considerations

This implementation guide defines data elements, resources, formats, and methods for exchanging healthcare data between different participants in the healthcare process. As such, clinical safety is a key concern. Additional guidance regarding safety for the specification’s many and various implementations is available at: [https://www.hl7.org/FHIR/safety.html](https://www.hl7.org/FHIR/safety.html).

Although the present specification does gives users the opportunity to observe data protection and data security regulations, its use does not guarantee compliance with these regulations. Effective compliance must be ensured by appropriate measures during implementation projects and in daily operations. The corresponding implementation measures are explained in the standard. In addition, the present specification can only influence compliance with the security regulations in the technical area of standardization. It cannot influence organizational and contractual matters.

### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

This publication includes IP covered under the following statements.

* CC0-1.0

* [BFS Medizinische Statistik - 21 1.3.V02 - Klasse / Classe / Classe](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-21-encountertype.html): [Bundle/DocumentEtoc](Bundle-DocumentEtoc.md), [QuestionnaireEtoc](Questionnaire-QuestionnaireEtoc.md) and [QuestionnaireResponse/QuestionnaireResponseEtocTransCare](QuestionnaireResponse-QuestionnaireResponseEtocTransCare.md)
* [BFS Medizinische Statistik - 25 1.4.V02 - Hauptkostenträger für Grundversicherungsleistungen / Prise en charge des soins de base / Unità d’imputazione principale per le prestazioni dell’assicurazione di base](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-25-mainguarantor.html): [Bundle/DocumentEtoc](Bundle-DocumentEtoc.md) and [Coverage/CoverageKVG](Coverage-CoverageKVG.md)
* [eCH-011 MaritalStatus](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-11-maritalstatus.html): [Bundle/DocumentEtoc](Bundle-DocumentEtoc.md), [QuestionnaireEtoc](Questionnaire-QuestionnaireEtoc.md), [QuestionnaireResponse/QuestionnaireResponseEtocRequestPrevious](QuestionnaireResponse-QuestionnaireResponseEtocRequestPrevious.md) and [QuestionnaireResponse/QuestionnaireResponseEtocTransCare](QuestionnaireResponse-QuestionnaireResponseEtocTransCare.md)
* [Condition Category](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ch-etoc-conditioncategory.html): [Bundle/DocumentEtoc](Bundle-DocumentEtoc.md), [ChEtocFunctionalStatusCondition](StructureDefinition-ch-etoc-functionalstatus.md)...Show 8 more,[ChEtocPastHistoryofIllnessesCondition](StructureDefinition-ch-etoc-illness.md),[ChEtocPrimaryDiagnosisCondition](StructureDefinition-ch-etoc-primary-diagnosis.md),[ChEtocSecondaryDiagnosisCondition](StructureDefinition-ch-etoc-secondary-diagnosis.md),[ChEtocSocialHistoryCondition](StructureDefinition-ch-etoc-socialhistory.md),[Condition/PastHistoryofIllnessesConditionEtoc](Condition-PastHistoryofIllnessesConditionEtoc.md),[Condition/PrimaryDiagnosis](Condition-PrimaryDiagnosis.md),[Condition/SecondaryDiagnosis1](Condition-SecondaryDiagnosis1.md)and[Condition/SecondaryDiagnosis2](Condition-SecondaryDiagnosis2.md)
* [Consent Status](http://fhir.ch/ig/ch-orf/3.0.2/CodeSystem-ch-orf-cs-consentstatus.html): [Bundle/DocumentEtoc](Bundle-DocumentEtoc.md), [QuestionnaireEtoc](Questionnaire-QuestionnaireEtoc.md), [QuestionnaireResponse/QuestionnaireResponseEtocRequestPrevious](QuestionnaireResponse-QuestionnaireResponseEtocRequestPrevious.md) and [QuestionnaireResponse/QuestionnaireResponseEtocTransCare](QuestionnaireResponse-QuestionnaireResponseEtocTransCare.md)
* [Coverage Identifier Type](http://fhir.ch/ig/ch-orf/3.0.2/CodeSystem-ch-orf-cs-coverageidentifiertype.html): [Bundle/DocumentEtoc](Bundle-DocumentEtoc.md) and [Coverage/CoverageKVG](Coverage-CoverageKVG.md)
* [ch-ehealth-codesystem-language](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-2.16.756.5.30.1.127.3.10.12.html): [QuestionnaireEtoc](Questionnaire-QuestionnaireEtoc.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [Bundle/DocumentEtoc](Bundle-DocumentEtoc.md), [CH_eTOC](index.md)...Show 32 more,[ChEtocAllergyIntolerance](StructureDefinition-ch-etoc-allergyintolerance.md),[ChEtocBodyHeightObservation](StructureDefinition-ch-etoc-bodyheight-observation.md),[ChEtocBodyWeightObservation](StructureDefinition-ch-etoc-bodyweight-observation.md),[ChEtocCardiologyObservation](StructureDefinition-ch-etoc-cardiology-observation.md),[ChEtocComposition](StructureDefinition-ch-etoc-composition.md),[ChEtocDevice](StructureDefinition-ch-etoc-device.md),[ChEtocDocument](StructureDefinition-ch-etoc-document.md),[ChEtocFunctionalStatusCondition](StructureDefinition-ch-etoc-functionalstatus.md),[ChEtocImmunization](StructureDefinition-ch-etoc-immunization.md),[ChEtocLabObservation](StructureDefinition-ch-etoc-lab-observation.md),[ChEtocPastHistoryofIllnessesCondition](StructureDefinition-ch-etoc-illness.md),[ChEtocPathologyObservation](StructureDefinition-ch-etoc-pathology-observation.md),[ChEtocPregnancyExpectedDeliveryDateObservation](StructureDefinition-ch-etoc-expecteddeliverydate.md),[ChEtocPregnancyStatusObservation](StructureDefinition-ch-etoc-pregnancystatus.md),[ChEtocPrimaryDiagnosisCondition](StructureDefinition-ch-etoc-primary-diagnosis.md),[ChEtocProcedure](StructureDefinition-ch-etoc-procedure.md),[ChEtocRadiologyObservation](StructureDefinition-ch-etoc-radiology-observation.md),[ChEtocSecondaryDiagnosisCondition](StructureDefinition-ch-etoc-secondary-diagnosis.md),[ChEtocServiceRequest](StructureDefinition-ch-etoc-servicerequest.md),[ChEtocSocialHistoryCondition](StructureDefinition-ch-etoc-socialhistory.md),[ModuleQuestionnaireAttachment](Questionnaire-ch-etoc-module-attachment.md),[ModuleQuestionnaireEtocAnamnesis](Questionnaire-ch-etoc-module-anamnesis.md),[ModuleQuestionnaireEtocDiagnosis](Questionnaire-ch-etoc-module-diagnosis.md),[ModuleQuestionnaireEtocImaging](Questionnaire-ch-etoc-module-imaging.md),[ModuleQuestionnaireEtocLab](Questionnaire-ch-etoc-module-lab.md),[ModuleQuestionnaireEtocMedication](Questionnaire-ch-etoc-module-medication.md),[ModuleQuestionnaireEtocPathology](Questionnaire-ch-etoc-module-pathology.md),[ModuleQuestionnaireEtocPurpose](Questionnaire-ch-etoc-module-purpose.md),[ModuleQuestionnaireImmunization](Questionnaire-ch-etoc-module-immunizationstatus.md),[ModuleQuestionnaireallergyIntolerance](Questionnaire-ch-etoc-module-cardiology.md),[QuestionnaireEtoc](Questionnaire-QuestionnaireEtoc.md)and[QuestionnaireEtoc-modular](Questionnaire-QuestionnaireEtoc-modular.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-ucum.html): [Bundle/DocumentEtoc](Bundle-DocumentEtoc.md), [Observation/BodyHeight](Observation-BodyHeight.md) and [Observation/BodyWeight](Observation-BodyWeight.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/DocumentEtoc](Bundle-DocumentEtoc.md), [ChEtocCardiologyObservation](StructureDefinition-ch-etoc-cardiology-observation.md)...Show 13 more,[ChEtocComposition](StructureDefinition-ch-etoc-composition.md),[ChEtocLabObservation](StructureDefinition-ch-etoc-lab-observation.md),[ChEtocPathologyObservation](StructureDefinition-ch-etoc-pathology-observation.md),[ChEtocPregnancyStatusObservation](StructureDefinition-ch-etoc-pregnancystatus.md),[ChEtocRadiologyObservation](StructureDefinition-ch-etoc-radiology-observation.md),[Composition/CompositionEtoc](Composition-CompositionEtoc.md),[Observation/Biopsy](Observation-Biopsy.md),[Observation/BodyHeight](Observation-BodyHeight.md),[Observation/BodyWeight](Observation-BodyWeight.md),[Observation/Electrocardiogram](Observation-Electrocardiogram.md),[Observation/HbA1c](Observation-HbA1c.md),[Observation/Hemoglobin](Observation-Hemoglobin.md)and[Observation/Imaging](Observation-Imaging.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://hl7.org/fhir/R4/codesystem-snomedct.html): [Bundle/DocumentEtoc](Bundle-DocumentEtoc.md), [ChEtocComposition](StructureDefinition-ch-etoc-composition.md), [ChEtocServiceRequest](StructureDefinition-ch-etoc-servicerequest.md), [Composition/CompositionEtoc](Composition-CompositionEtoc.md) and [QuestionnaireEtoc](Questionnaire-QuestionnaireEtoc.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [AllergyIntolerance Clinical Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-allergyintolerance-clinical.html): [AllergyIntolerance/AllergyIntolerance](AllergyIntolerance-AllergyIntolerance.md)
* [Observation Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-observation-category.html): [Bundle/DocumentEtoc](Bundle-DocumentEtoc.md), [Observation/BodyHeight](Observation-BodyHeight.md) and [Observation/BodyWeight](Observation-BodyWeight.md)
* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [Bundle/DocumentEtoc](Bundle-DocumentEtoc.md), [ChEtocServiceRequest](StructureDefinition-ch-etoc-servicerequest.md) and [ServiceRequest/ServiceRequestEtoc](ServiceRequest-ServiceRequestEtoc.md)
* [ActCode](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html): [Bundle/DocumentEtoc](Bundle-DocumentEtoc.md), [QuestionnaireEtoc](Questionnaire-QuestionnaireEtoc.md) and [QuestionnaireResponse/QuestionnaireResponseEtocTransCare](QuestionnaireResponse-QuestionnaireResponseEtocTransCare.md)


### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-etoc.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-etoc.r4b)](package.r4b.tgz) are available.

### Dependency Table







### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-etoc",
  "url" : "http://fhir.ch/ig/ch-etoc/ImplementationGuide/ch.fhir.ig.ch-etoc",
  "version" : "3.0.1",
  "name" : "CH_eTOC",
  "title" : "CH eTOC (R4)",
  "status" : "active",
  "date" : "2025-12-16",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "description" : "Implementation guide for eTOC based on CH ORF",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "packageId" : "ch.fhir.ig.ch-etoc",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "hl7tx",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on HL7 Terminology"
        }
      ],
      "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
      "packageId" : "hl7.terminology.r4",
      "version" : "7.0.1"
    },
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
      "id" : "ch_fhir_ig_ch_core",
      "uri" : "http://fhir.ch/ig/ch-core/ImplementationGuide/ch.fhir.ig.ch-core",
      "packageId" : "ch.fhir.ig.ch-core",
      "version" : "6.0.0"
    },
    {
      "id" : "ch_fhir_ig_ch_orf",
      "uri" : "http://fhir.ch/ig/ch-orf/ImplementationGuide/ch.fhir.ig.ch-orf",
      "packageId" : "ch.fhir.ig.ch-orf",
      "version" : "3.0.2"
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
            "valueString" : "pin-canonicals"
          },
          {
            "url" : "value",
            "valueString" : "pin-multiples"
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
            "valueString" : "http://fhir.ch/ig/ch-etoc/history.html"
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
            "valueCode" : "pin-canonicals"
          },
          {
            "url" : "value",
            "valueString" : "pin-multiples"
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
            "valueString" : "http://fhir.ch/ig/ch-etoc/history.html"
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
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/AllergyIntolerance"
        },
        "name" : "Allergy / Intolerance",
        "description" : "Example for Allergy / Intolerance",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-allergyintolerance"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Appointment"
          }
        ],
        "reference" : {
          "reference" : "Appointment/AppointmentHospitalStay"
        },
        "name" : "Appointment Hospital Stay",
        "description" : "Example for Appointment",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/DocumentReferenceAttachment"
        },
        "name" : "Befund_Rx_Thorax_S_Ufferer_20190401",
        "description" : "Example of Document Reference for Attachment (e.g. pdf)",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Biopsy"
        },
        "name" : "Biopsie Duodenum / Magen",
        "description" : "Example for Pathology result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-pathology-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BodyHeight"
        },
        "name" : "Body Height 176 cm",
        "description" : "Example for Body Height Observation",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-bodyheight-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BodyWeight"
        },
        "name" : "Body Weight 99 kg",
        "description" : "Example for Body Weight Observation",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-bodyweight-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentEtoc"
        },
        "name" : "Bundle Medical Referral",
        "description" : "Example for Bundle",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-document"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-etoc-allergyintolerance"
        },
        "name" : "CH eTOC Allergy Intolerance",
        "description" : "Definition for the Allergy Intolerance resource in the context of electronic transition of care.",
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
          "reference" : "StructureDefinition/ch-etoc-bodyheight-observation"
        },
        "name" : "CH eTOC Body Height Observation",
        "description" : "Definition for the Body Height Observation resource in the context of CH eTOC.",
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
          "reference" : "StructureDefinition/ch-etoc-bodyweight-observation"
        },
        "name" : "CH eTOC Body Weight Observation",
        "description" : "Definition for the Body Weight Observation resource in the context of CH eTOC.",
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
          "reference" : "StructureDefinition/ch-etoc-cardiology-observation"
        },
        "name" : "CH eTOC Cardiology Observation",
        "description" : "Definition for the cardiology Observation resource in the context of CH eTOC.",
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
          "reference" : "StructureDefinition/ch-etoc-composition"
        },
        "name" : "CH eTOC Composition",
        "description" : "Definition for the Composition resource in the context of electronic transition of care.",
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
          "reference" : "StructureDefinition/ch-etoc-device"
        },
        "name" : "CH eTOC Device",
        "description" : "Definition for the Device resource in the context of electronic transition of care.",
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
          "reference" : "StructureDefinition/ch-etoc-document"
        },
        "name" : "CH eTOC Document",
        "description" : "Definition for the Bundle (document) resource in the context of electronic transition of care.",
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
          "reference" : "StructureDefinition/ch-etoc-expecteddeliverydate"
        },
        "name" : "CH eTOC Expected Delivery Date Observation",
        "description" : "Definition for the Expected Delivery Date Observation resource in the context of CH eTOC.",
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
          "reference" : "StructureDefinition/ch-etoc-functionalstatus"
        },
        "name" : "CH eTOC Functional Status Condition",
        "description" : "Definition for the Functional Status Condition resource in the context of electronic transition of care.",
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
          "reference" : "StructureDefinition/ch-etoc-immunization"
        },
        "name" : "CH eTOC immunizationstatus",
        "description" : "Definition for the immunizationstatus resource in the context of electronic transition of care.",
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
          "reference" : "StructureDefinition/ch-etoc-lab-observation"
        },
        "name" : "CH eTOC Lab Observation",
        "description" : "Definition for the Lab Observation resource in the context of CH eTOC.",
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
          "reference" : "StructureDefinition/ch-etoc-illness"
        },
        "name" : "CH eTOC Past History of Illnesses Condition",
        "description" : "Definition for the Past History of Illnesses Condition resource in the context of electronic transition of care.",
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
          "reference" : "StructureDefinition/ch-etoc-pathology-observation"
        },
        "name" : "CH eTOC Pathology Observation",
        "description" : "Definition for the Pathology Observation resource in the context of CH eTOC.",
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
          "reference" : "StructureDefinition/ch-etoc-pregnancystatus"
        },
        "name" : "CH eTOC Pregnancy Status Observation",
        "description" : "Definition for the Pregnancy Status Observation resource in the context of CH eTOC.",
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
          "reference" : "StructureDefinition/ch-etoc-primary-diagnosis"
        },
        "name" : "CH eTOC Primary Diagnosis Condition",
        "description" : "Definition for the Primary Diagnosis Condition resource in the context of electronic tranisiton of care.",
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
          "reference" : "StructureDefinition/ch-etoc-procedure"
        },
        "name" : "CH eTOC Procedure",
        "description" : "Definition for the Procedure resource in the context of electronic transition of care.",
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
          "reference" : "StructureDefinition/ch-etoc-radiology-observation"
        },
        "name" : "CH eTOC Radiology Observation",
        "description" : "Definition for the Radiology Observation resource in the context of CH eTOC.",
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
          "reference" : "StructureDefinition/ch-etoc-secondary-diagnosis"
        },
        "name" : "CH eTOC Secondary Diagnosis Condition",
        "description" : "Definition for the Secondary Diagnosis Condition resource in the context of electronic transition of care.",
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
          "reference" : "StructureDefinition/ch-etoc-servicerequest"
        },
        "name" : "CH eTOC Service Request",
        "description" : "Definition for the ServiceRequest resource in the context of electronic transition of care.",
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
          "reference" : "StructureDefinition/ch-etoc-socialhistory"
        },
        "name" : "CH eTOC Social History Condition",
        "description" : "Definition for the Social History Condition resource in the context of electronic transition of care.",
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
          "reference" : "Composition/CompositionEtoc"
        },
        "name" : "Composition Medical Referral",
        "description" : "Example for Composition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-composition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Coverage"
          }
        ],
        "reference" : {
          "reference" : "Coverage/CoverageKVG"
        },
        "name" : "Coverage KVG",
        "description" : "Example for Coverage",
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
          "reference" : "Practitioner/DAtaenterer"
        },
        "name" : "Doris Ataenterer",
        "description" : "Example for Practitioner",
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
          "reference" : "PractitionerRole/DAtaentererHappyDoctors"
        },
        "name" : "Doris Ataenterer@Happy Doctors",
        "description" : "Example for PractionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Electrocardiogram"
        },
        "name" : "EKG",
        "description" : "Example for cardiology result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-cardiology-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Hemoglobin"
        },
        "name" : "Haemoglobin",
        "description" : "Example for Lab result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-lab-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/HbA1c"
        },
        "name" : "Hb-A1c",
        "description" : "Example for Lab result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-lab-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/HappyHospital"
        },
        "name" : "Innere Medizin Klinik Happy Hospital",
        "description" : "Example for Organization",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Location"
          }
        ],
        "reference" : {
          "reference" : "Location/LocationHospitalStay"
        },
        "name" : "Location Hospital Stay",
        "description" : "Example for Location",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationEtoc1"
        },
        "name" : "Medication at Medical Referral",
        "description" : "Medication at Medical Referral",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationEtoc2"
        },
        "name" : "Medication at Medical Referral",
        "description" : "Medication at Medical Referral",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationEtoc3"
        },
        "name" : "Medication at Medical Referral",
        "description" : "Medication at Medical Referral",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-etoc-module-allergyIntolerance"
        },
        "name" : "Module Questionnaire AllergyIntolerlance",
        "description" : "Subquestionnaire AllergyIntolerlance",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-etoc-module-anamnesis"
        },
        "name" : "Module Questionnaire Anamnesis",
        "description" : "Subquestionnaire Anamnesis",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-etoc-module-attachment"
        },
        "name" : "Module Questionnaire Attachment",
        "description" : "Subquestionnaire Attachment",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-etoc-module-cardiology"
        },
        "name" : "Module Questionnaire Cardiology",
        "description" : "Subquestionnaire cardiology",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-etoc-module-diagnosis"
        },
        "name" : "Module Questionnaire Diagnosis",
        "description" : "Subquestionnaire Diagnosis",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-etoc-module-imaging"
        },
        "name" : "Module Questionnaire imaging",
        "description" : "Subquestionnaire imaging",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-etoc-module-immunizationstatus"
        },
        "name" : "Module Questionnaire immunizationstatus",
        "description" : "Subquestionnaire immunizationstatus",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-etoc-module-lab"
        },
        "name" : "Module Questionnaire Lab",
        "description" : "Subquestionnaire Lab",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-etoc-module-medication"
        },
        "name" : "Module Questionnaire Medication",
        "description" : "Subquestionnaire Medication",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-etoc-module-pathology"
        },
        "name" : "Module Questionnaire Pathologyg",
        "description" : "Subquestionnaire Pathology",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-etoc-module-purpose"
        },
        "name" : "Module Questionnaire Purpose",
        "description" : "Subquestionnaire Purpose",
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
          "reference" : "Practitioner/ORderplacer"
        },
        "name" : "Ottilie Rderplacer",
        "description" : "Example for Practitioner",
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
          "reference" : "PractitionerRole/ORderplacerHappyDoctors"
        },
        "name" : "Ottilie Rderplacer@Happy Doctors",
        "description" : "Example for PractionerRole",
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
          "reference" : "Practitioner/ORderfiller"
        },
        "name" : "Otto Rderfiller",
        "description" : "Example for Practitioner",
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
          "reference" : "PractitionerRole/ORderfillerHappyHospital"
        },
        "name" : "Otto Rderfiller@Happy Hospital",
        "description" : "Example for PractionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/PastHistoryofIllnessesConditionEtoc"
        },
        "name" : "Past History of Illnesses",
        "description" : "HistoryofIllnessesCondition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-illness"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/HappyDoctors"
        },
        "name" : "Praxis Happy Doctors",
        "description" : "Example for Organization",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/PrimaryDiagnosis"
        },
        "name" : "Primary Diagnosis",
        "description" : "Example for Primary Diagnosis Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-primary-diagnosis"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/QuestionnaireEtoc-modular"
        },
        "name" : "Questionnaire eTOC (Modular version)",
        "description" : "Questionnaire Modules",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/QuestionnaireEtoc"
        },
        "name" : "QuestionnaireEtoc",
        "description" : "Example of Questionnaire",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "QuestionnaireResponse"
          }
        ],
        "reference" : {
          "reference" : "QuestionnaireResponse/QuestionnaireResponseEtocRequestPrevious"
        },
        "name" : "QuestionnaireResponse für die Anfrage für Unterlagen von früher",
        "description" : "Example for QuestionnaireResponse for a request for a discharge letter from earlier",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "QuestionnaireResponse"
          }
        ],
        "reference" : {
          "reference" : "QuestionnaireResponse/QuestionnaireResponseEtocTransCare"
        },
        "name" : "QuestionnaireResponse für eine Überweisung",
        "description" : "Example for QuestionnaireResponse for a transition of care letter",
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
          "reference" : "Practitioner/SMeier"
        },
        "name" : "Sabine Meier",
        "description" : "Example for Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/SecondaryDiagnosis1"
        },
        "name" : "Secondary Diagnosis 1",
        "description" : "Example for Secondary Diagnosis Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-secondary-diagnosis"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/SecondaryDiagnosis2"
        },
        "name" : "Secondary Diagnosis 2",
        "description" : "Example for Diagnosis Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-secondary-diagnosis"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ServiceRequest"
          }
        ],
        "reference" : {
          "reference" : "ServiceRequest/ServiceRequestEtoc"
        },
        "name" : "ServiceRequest Medical Referral",
        "description" : "Example for ServiceRequest",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-servicerequest"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/SUfferer"
        },
        "name" : "Susanna Ufferer",
        "description" : "Example for Patient",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Imaging"
        },
        "name" : "Thx ap / seitl.",
        "description" : "Example for Imaging Result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-radiology-observation"
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
              "valueUrl" : "usecase-english.html"
            }
          ],
          "nameUrl" : "usecase-english.html",
          "title" : "Use Cases",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase-german.html"
            }
          ],
          "nameUrl" : "usecase-german.html",
          "title" : "Anwendungsfälle",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "questionnaire-form.html"
            }
          ],
          "nameUrl" : "questionnaire-form.html",
          "title" : "Questionnaire",
          "generation" : "html"
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
          "generation" : "html"
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
              "valueUrl" : "changelog.html"
            }
          ],
          "nameUrl" : "changelog.html",
          "title" : "Changelog",
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
