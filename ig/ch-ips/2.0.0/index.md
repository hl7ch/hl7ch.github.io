# Home - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ips/ImplementationGuide/ch.fhir.ig.ch-ips | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CH_IPS |
| **Copyright/Legal**: CC0-1.0 | |

### Introduction

An **International Patient Summary (IPS) document** is an electronic health record extract containing essential healthcare information about a subject of care. As specified in EN 17269 and ISO 27269, it is designed for supporting the use case scenario for ‘unplanned, cross border care’, but it is not limited to it. It is intended to be international, i.e., to provide generic solutions for global application beyond a particular region or country.

The primary **purpose** of CH IPS is to:

* Ensure full compatibility and conformance between IPS-UV and CH IPS
* Provide an implementable, testable FHIR specification for the Swiss healthcare context
* Support Swiss-specific requirements through CH Core profiles
* Enable validation against Swiss Electronic Patient Record (EPR) requirements through specialized CH Core EPR profiles

CH IPS provides two complementary document profiles that enable different **validation levels** to support different implementation scenarios:

1. The[CH IPS Document Profile](StructureDefinition-ch-ips-document.md)ensures:
* **IPS-UV Conformance**: Full validation against the [HL7 IPS-UV specification](https://hl7.org/fhir/uv/ips/STU2/), guaranteeing international interoperability. **All documents conforming to CH IPS Document are valid IPS documents.**
* **Swiss Healthcare Context**: Validation against CH Core profiles, supporting Swiss-specific requirements such as: 
* Swiss identifier systems and extensions
* Swiss terminology
* Swiss-specific data elements and business rules
 

1. The[CH IPS Document EPR Profile](StructureDefinition-ch-ips-document-epr.md)builds upon the CH IPS Document profile and additionally validates:
* **Swiss EPR Conformance**: Compliance with all requirements of the Swiss Electronic Patient Record, including: 
* Patient identification
* Healthcare professional identification
* Document confidentiality
 

The **conformance approach** of CH IPS is based on deriving profiles from the respective CH Core profiles, where conformity with the corresponding IPS-UV profiles is ensured through the [imposeProfile extension](https://hl7.org/fhir/extensions/StructureDefinition-structuredefinition-imposeProfile.html). To ensure Swiss EPR conformance, the additional CH IPS Document EPR profile is provided, which also uses the imposeProfile extension to reference the CH Core Document EPR profile, thereby enforcing all EPR-specific requirements. This approach guarantees that CH IPS documents are "proper IPS" documents while supporting both general Swiss healthcare context and specific EPR integration requirements.

The **CH IPS** is an implementable, testable FHIR specification based on the IPS specification as defined by HL7 and ISO. 
 The CH IPS profile set is closely aligned with the [HL7 IPS-UV specification](https://hl7.org/fhir/uv/ips/STU2/) while still supporting localized needs for Switzerland and reducing barriers to early adoption. 
 To be able to guarantee this, the CH IPS profiles are derived from the respective [CH Core profiles](https://fhir.ch/ig/ch-core/6.0.0-ballot/index.html) and conformity with the corresponding IPS profile is ensured with the [imposeProfile extension](https://hl7.org/fhir/extensions/StructureDefinition-structuredefinition-imposeProfile.html).

![](ig-overview.png)

*Fig. 1: Schematic representation of the dependency mechanism of the implementation guides*

When processing **non-Swiss IPS documents**, Swiss systems receiving IPS documents from other countries that do not conform to Swiss-specific requirements should be able to process the core clinical IPS content for immediate care decisions.

[Changelog](changelog.md) with significant changes, open and closed issues.

**Download**: You can download this implementation guide in the [npm package](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) format from [here](package.tgz).

### Principles & Design

CH IPS follows the [General Principles](https://hl7.org/fhir/uv/ips/STU2/General-Principles.html) and [Design Conventions](https://hl7.org/fhir/uv/ips/STU2/Design-Conventions.html) of the International Patient Summary IG. Please check the detailed information there. 
 In the CH IPS IG, only a few key points are highlighted and visualized in a simplified form:

* The IPS is composed of different elements and sections, see the description in the [IPS IG](https://hl7.org/fhir/uv/ips/STU2/Structure-of-the-International-Patient-Summary.html). The [CH IPS Document](document.md) is based on this **structure**.
* The principles for representing **empty sections & missing data** described in the [IPS IG](https://hl7.org/fhir/uv/ips/STU2/Design-Conventions.html#empty-sections--missing-data) apply for CH IPS and are illustrated in Fig. 2.
* In this IG no elements are actively flagged as [mustSupport](https://hl7.org/fhir/r4/conformance-rules.html#mustSupport) = `true`. **Must Support (MS)** in CH IPS applies to the same elements as defined in IPS and the same [rules](https://hl7.org/fhir/uv/ips/STU2/Design-Conventions.html#must-support) also take effect.

![](sections.png)

*Fig. 2: Summary illustration of some principles for the sections*

Profiling in CH IPS is kept to a minimum and focuses on Swiss use. In order to avoid duplication, which could lead to conflicts in future versions, not all restrictions (e.g. must support, cardinalities, constraints) of the IPS are repeated in the CH IPS profiles. The imposeProfile extension ensures the validation of conformity with both profiles.

### Safety Considerations

This implementation guide defines data elements, resources, formats, and methods for exchanging healthcare data between different participants in the healthcare process. As such, clinical safety is a key concern. Additional guidance regarding safety for the specification’s many and various implementations is available at: [https://www.hl7.org/FHIR/safety.html](https://www.hl7.org/FHIR/safety.html).

Although the present specification does gives users the opportunity to observe data protection and data security regulations, its use does not guarantee compliance with these regulations. Effective compliance must be ensured by appropriate measures during implementation projects and in daily operations. The corresponding implementation measures are explained in the standard. In addition, the present specification can only influence compliance with the security regulations in the technical area of standardization. It cannot influence organizational and contractual matters.

### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

This publication includes IP covered under the following statements.

* CC0-1.0

* [eCH-011 Types](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-11.html): [ChIpsPatient](StructureDefinition-ch-ips-patient.md)
* [CH VACD Swissmedic Authorized Vaccines](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ch-vacd-swissmedic-cs.html): [Bundle/UC1-SwissIpsDocument2](Bundle-UC1-SwissIpsDocument2.md) and [Immunization/19efd704-3461-4120-b3cf-a76ae046e150](Immunization-19efd704-3461-4120-b3cf-a76ae046e150.md)
* [EDQM - Standard Terms](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-edqm-standardterms.html): [Bundle/UC1-SwissIpsDocument1](Bundle-UC1-SwissIpsDocument1.md), [Bundle/UC1-SwissIpsDocument2](Bundle-UC1-SwissIpsDocument2.md)...Show 7 more,[Immunization/19efd704-3461-4120-b3cf-a76ae046e150](Immunization-19efd704-3461-4120-b3cf-a76ae046e150.md),[MedicationStatement/6f369210-adb1-4f11-893d-9977e34932de](MedicationStatement-6f369210-adb1-4f11-893d-9977e34932de.md),[MedicationStatement/88ee1ffb-26d0-49a2-95e4-6212261805a6](MedicationStatement-88ee1ffb-26d0-49a2-95e4-6212261805a6.md),[MedicationStatement/MedStatCandesartan](MedicationStatement-MedStatCandesartan.md),[MedicationStatement/MedStatMetformin](MedicationStatement-MedStatMetformin.md),[MedicationStatement/e463547f-7414-47cb-b97f-04a81e1ab7d8](MedicationStatement-e463547f-7414-47cb-b97f-04a81e1ab7d8.md)and[MedicationStatement/f27b9345-6ba6-4fd6-83ab-6db6c2acd981](MedicationStatement-f27b9345-6ba6-4fd6-83ab-6db6c2acd981.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [CH_IPS](index.md), [ChIpsAllergyIntolerance](StructureDefinition-ch-ips-allergyintolerance.md)...Show 12 more,[ChIpsComposition](StructureDefinition-ch-ips-composition.md),[ChIpsCondition](StructureDefinition-ch-ips-condition.md),[ChIpsDocument](StructureDefinition-ch-ips-document.md),[ChIpsDocumentEPR](StructureDefinition-ch-ips-document-epr.md),[ChIpsImmunization](StructureDefinition-ch-ips-immunization.md),[ChIpsMedication](StructureDefinition-ch-ips-medication.md),[ChIpsMedicationRequest](StructureDefinition-ch-ips-medicationrequest.md),[ChIpsMedicationStatement](StructureDefinition-ch-ips-medicationstatement.md),[ChIpsOrganization](StructureDefinition-ch-ips-organization.md),[ChIpsPatient](StructureDefinition-ch-ips-patient.md),[ChIpsPractitioner](StructureDefinition-ch-ips-practitioner.md)and[ChIpsPractitionerRole](StructureDefinition-ch-ips-practitionerrole.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-ucum.html): [Bundle/UC1-SwissIpsDocument1](Bundle-UC1-SwissIpsDocument1.md), [Bundle/UC1-SwissIpsDocument2](Bundle-UC1-SwissIpsDocument2.md)...Show 4 more,[MedicationStatement/88ee1ffb-26d0-49a2-95e4-6212261805a6](MedicationStatement-88ee1ffb-26d0-49a2-95e4-6212261805a6.md),[MedicationStatement/MedStatMetformin](MedicationStatement-MedStatMetformin.md),[Observation/07b2e450-a62e-4734-98bf-51462f008e0f](Observation-07b2e450-a62e-4734-98bf-51462f008e0f.md)and[Observation/db5ef7b0-e946-4260-a604-128b8887a41b](Observation-db5ef7b0-e946-4260-a604-128b8887a41b.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/UC1-SwissIpsDocument1](Bundle-UC1-SwissIpsDocument1.md), [Bundle/UC1-SwissIpsDocument2](Bundle-UC1-SwissIpsDocument2.md)...Show 5 more,[ChIpsComposition](StructureDefinition-ch-ips-composition.md),[Composition/UC1-Composition1](Composition-UC1-Composition1.md),[Observation/07b2e450-a62e-4734-98bf-51462f008e0f](Observation-07b2e450-a62e-4734-98bf-51462f008e0f.md),[Observation/93fe0d81-a547-494e-941c-113506108b76](Observation-93fe0d81-a547-494e-941c-113506108b76.md)and[Observation/db5ef7b0-e946-4260-a604-128b8887a41b](Observation-db5ef7b0-e946-4260-a604-128b8887a41b.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://tx.fhir.org/r4/ValueSet/snomedct): [AllergyIntolerance/27da84cc-526a-4098-afb5-f08c7836d893](AllergyIntolerance-27da84cc-526a-4098-afb5-f08c7836d893.md), [Bundle/UC1-SwissIpsDocument1](Bundle-UC1-SwissIpsDocument1.md)...Show 19 more,[Bundle/UC1-SwissIpsDocument2](Bundle-UC1-SwissIpsDocument2.md),[Composition/UC1-Composition1](Composition-UC1-Composition1.md),[Condition/12d8debe-5e03-465d-83f3-17675be9db4a](Condition-12d8debe-5e03-465d-83f3-17675be9db4a.md),[Condition/2c67cf62-d712-44c7-aedb-b5582bc707f1](Condition-2c67cf62-d712-44c7-aedb-b5582bc707f1.md),[Condition/506b9fef-be0a-4398-bb7e-7d14c311912f](Condition-506b9fef-be0a-4398-bb7e-7d14c311912f.md),[Condition/8a79d459-0d2f-460b-87fd-a7de12d49871](Condition-8a79d459-0d2f-460b-87fd-a7de12d49871.md),[Condition/CoronaryHeartDisease](Condition-CoronaryHeartDisease.md),[Condition/DiabetesMellitus](Condition-DiabetesMellitus.md),[Condition/HighBloodPressure](Condition-HighBloodPressure.md),[Immunization/19efd704-3461-4120-b3cf-a76ae046e150](Immunization-19efd704-3461-4120-b3cf-a76ae046e150.md),[MedicationStatement/6f369210-adb1-4f11-893d-9977e34932de](MedicationStatement-6f369210-adb1-4f11-893d-9977e34932de.md),[MedicationStatement/88ee1ffb-26d0-49a2-95e4-6212261805a6](MedicationStatement-88ee1ffb-26d0-49a2-95e4-6212261805a6.md),[MedicationStatement/MedStatCandesartan](MedicationStatement-MedStatCandesartan.md),[MedicationStatement/MedStatMetformin](MedicationStatement-MedStatMetformin.md),[MedicationStatement/e463547f-7414-47cb-b97f-04a81e1ab7d8](MedicationStatement-e463547f-7414-47cb-b97f-04a81e1ab7d8.md),[MedicationStatement/f27b9345-6ba6-4fd6-83ab-6db6c2acd981](MedicationStatement-f27b9345-6ba6-4fd6-83ab-6db6c2acd981.md),[Procedure/StentPlacement](Procedure-StentPlacement.md),[Procedure/ad3ec07d-1814-4faf-86fd-1a8ebeecb5fe](Procedure-ad3ec07d-1814-4faf-86fd-1a8ebeecb5fe.md)and[Procedure/d646c888-7af0-4439-8aae-9fd490054583](Procedure-d646c888-7af0-4439-8aae-9fd490054583.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [AllergyIntolerance Clinical Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-allergyintolerance-clinical.html): [AllergyIntolerance/27da84cc-526a-4098-afb5-f08c7836d893](AllergyIntolerance-27da84cc-526a-4098-afb5-f08c7836d893.md) and [Bundle/UC1-SwissIpsDocument2](Bundle-UC1-SwissIpsDocument2.md)
* [AllergyIntolerance Verification Status](http://terminology.hl7.org/7.0.1/CodeSystem-allergyintolerance-verification.html): [AllergyIntolerance/27da84cc-526a-4098-afb5-f08c7836d893](AllergyIntolerance-27da84cc-526a-4098-afb5-f08c7836d893.md) and [Bundle/UC1-SwissIpsDocument2](Bundle-UC1-SwissIpsDocument2.md)
* [Condition Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-category.html): [Bundle/UC1-SwissIpsDocument1](Bundle-UC1-SwissIpsDocument1.md), [Bundle/UC1-SwissIpsDocument2](Bundle-UC1-SwissIpsDocument2.md)...Show 7 more,[Condition/12d8debe-5e03-465d-83f3-17675be9db4a](Condition-12d8debe-5e03-465d-83f3-17675be9db4a.md),[Condition/2c67cf62-d712-44c7-aedb-b5582bc707f1](Condition-2c67cf62-d712-44c7-aedb-b5582bc707f1.md),[Condition/506b9fef-be0a-4398-bb7e-7d14c311912f](Condition-506b9fef-be0a-4398-bb7e-7d14c311912f.md),[Condition/8a79d459-0d2f-460b-87fd-a7de12d49871](Condition-8a79d459-0d2f-460b-87fd-a7de12d49871.md),[Condition/CoronaryHeartDisease](Condition-CoronaryHeartDisease.md),[Condition/DiabetesMellitus](Condition-DiabetesMellitus.md)and[Condition/HighBloodPressure](Condition-HighBloodPressure.md)
* [Condition Clinical Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-clinical.html): [Bundle/UC1-SwissIpsDocument1](Bundle-UC1-SwissIpsDocument1.md), [Bundle/UC1-SwissIpsDocument2](Bundle-UC1-SwissIpsDocument2.md)...Show 7 more,[Condition/12d8debe-5e03-465d-83f3-17675be9db4a](Condition-12d8debe-5e03-465d-83f3-17675be9db4a.md),[Condition/2c67cf62-d712-44c7-aedb-b5582bc707f1](Condition-2c67cf62-d712-44c7-aedb-b5582bc707f1.md),[Condition/506b9fef-be0a-4398-bb7e-7d14c311912f](Condition-506b9fef-be0a-4398-bb7e-7d14c311912f.md),[Condition/8a79d459-0d2f-460b-87fd-a7de12d49871](Condition-8a79d459-0d2f-460b-87fd-a7de12d49871.md),[Condition/CoronaryHeartDisease](Condition-CoronaryHeartDisease.md),[Condition/DiabetesMellitus](Condition-DiabetesMellitus.md)and[Condition/HighBloodPressure](Condition-HighBloodPressure.md)
* [ConditionVerificationStatus](http://terminology.hl7.org/7.0.1/CodeSystem-condition-ver-status.html): [Bundle/UC1-SwissIpsDocument1](Bundle-UC1-SwissIpsDocument1.md), [Bundle/UC1-SwissIpsDocument2](Bundle-UC1-SwissIpsDocument2.md)...Show 7 more,[Condition/12d8debe-5e03-465d-83f3-17675be9db4a](Condition-12d8debe-5e03-465d-83f3-17675be9db4a.md),[Condition/2c67cf62-d712-44c7-aedb-b5582bc707f1](Condition-2c67cf62-d712-44c7-aedb-b5582bc707f1.md),[Condition/506b9fef-be0a-4398-bb7e-7d14c311912f](Condition-506b9fef-be0a-4398-bb7e-7d14c311912f.md),[Condition/8a79d459-0d2f-460b-87fd-a7de12d49871](Condition-8a79d459-0d2f-460b-87fd-a7de12d49871.md),[Condition/CoronaryHeartDisease](Condition-CoronaryHeartDisease.md),[Condition/DiabetesMellitus](Condition-DiabetesMellitus.md)and[Condition/HighBloodPressure](Condition-HighBloodPressure.md)
* [List Empty Reasons](http://terminology.hl7.org/7.0.1/CodeSystem-list-empty-reason.html): [Bundle/UC1-SwissIpsDocument1](Bundle-UC1-SwissIpsDocument1.md) and [Composition/UC1-Composition1](Composition-UC1-Composition1.md)
* [Observation Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-observation-category.html): [Bundle/UC1-SwissIpsDocument2](Bundle-UC1-SwissIpsDocument2.md), [Observation/07b2e450-a62e-4734-98bf-51462f008e0f](Observation-07b2e450-a62e-4734-98bf-51462f008e0f.md) and [Observation/db5ef7b0-e946-4260-a604-128b8887a41b](Observation-db5ef7b0-e946-4260-a604-128b8887a41b.md)
* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [Bundle/UC1-SwissIpsDocument2](Bundle-UC1-SwissIpsDocument2.md), [ChIpsPatient](StructureDefinition-ch-ips-patient.md) and [Patient/8383926c-ece1-4384-94bc-b4250b4cb71b](Patient-8383926c-ece1-4384-94bc-b4250b4cb71b.md)
* [ActClass](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActClass.html): [Bundle/UC1-SwissIpsDocument1](Bundle-UC1-SwissIpsDocument1.md), [Bundle/UC1-SwissIpsDocument2](Bundle-UC1-SwissIpsDocument2.md) and [Composition/UC1-Composition1](Composition-UC1-Composition1.md)
* [RoleCode](http://terminology.hl7.org/7.0.1/CodeSystem-v3-RoleCode.html): [ChIpsPatient](StructureDefinition-ch-ips-patient.md)


### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-ips.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-ips.r4b)](package.r4b.tgz) are available.

### Dependency Table








### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-ips",
  "url" : "http://fhir.ch/ig/ch-ips/ImplementationGuide/ch.fhir.ig.ch-ips",
  "version" : "2.0.0",
  "name" : "CH_IPS",
  "title" : "CH IPS (R4)",
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
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "The FHIR implementation guide CH IPS is derived from the Swiss Core IG (CH Core) and ensures conformity with the International Patient Summary (IPS).",
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
  "packageId" : "ch.fhir.ig.ch-ips",
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
      "id" : "hl7_fhir_uv_ips",
      "uri" : "http://hl7.org/fhir/uv/ips/ImplementationGuide/hl7.fhir.uv.ips",
      "packageId" : "hl7.fhir.uv.ips",
      "version" : "2.0.0"
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
            "valueString" : "2024+"
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
            "valueString" : "http://fhir.ch/ig/ch-ips/history.html"
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
            "valueString" : "2024+"
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
            "valueString" : "http://fhir.ch/ig/ch-ips/history.html"
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
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-ips-allergyintolerance"
        },
        "name" : "CH IPS AllergyIntolerance",
        "description" : "This CH IPS profile for the resource AllergyIntolerance is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
          "reference" : "StructureDefinition/ch-ips-composition"
        },
        "name" : "CH IPS Composition",
        "description" : "This CH IPS profile for the resource Composition is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
          "reference" : "StructureDefinition/ch-ips-condition"
        },
        "name" : "CH IPS Condition",
        "description" : "This CH IPS profile for the resource Condition is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
          "reference" : "StructureDefinition/ch-ips-document"
        },
        "name" : "CH IPS Document",
        "description" : "This CH IPS profile for the resource Bundle is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
          "reference" : "StructureDefinition/ch-ips-document-epr"
        },
        "name" : "CH IPS Document EPR",
        "description" : "This CH IPS EPR profile for the resource Bundle is derived from the CH IPS Document profile and additionally ensures Swiss EPR conformity via the CH Core Document EPR profile referenced by the imposeProfile extension.",
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
          "reference" : "StructureDefinition/ch-ips-immunization"
        },
        "name" : "CH IPS Immunization",
        "description" : "This CH IPS profile for the resource Immunization is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
          "reference" : "StructureDefinition/ch-ips-medication"
        },
        "name" : "CH IPS Medication",
        "description" : "This CH IPS profile for the resource Medication is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
          "reference" : "StructureDefinition/ch-ips-medicationrequest"
        },
        "name" : "CH IPS MedicationRequest",
        "description" : "This CH IPS profile for the resource MedicationRequest is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
          "reference" : "StructureDefinition/ch-ips-medicationstatement"
        },
        "name" : "CH IPS MedicationStatement",
        "description" : "This CH IPS profile for the resource MedicationStatement is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
          "reference" : "StructureDefinition/ch-ips-organization"
        },
        "name" : "CH IPS Organization",
        "description" : "This CH IPS profile for the resource Organization is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
          "reference" : "StructureDefinition/ch-ips-patient"
        },
        "name" : "CH IPS Patient",
        "description" : "This CH IPS profile for the resource Patient is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
          "reference" : "StructureDefinition/ch-ips-practitioner"
        },
        "name" : "CH IPS Practitioner",
        "description" : "This CH IPS profile for the resource Practitioner is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
          "reference" : "StructureDefinition/ch-ips-practitionerrole"
        },
        "name" : "CH IPS PractitionerRole",
        "description" : "This CH IPS profile for the resource PractitionerRole is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
          "reference" : "Practitioner/FamilienHausarzt"
        },
        "name" : "UC 1.1.: Familien Hausarzt",
        "description" : "Example for CH IPS Practitioner",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedStatCandesartan"
        },
        "name" : "UC 1.1: Candesartan",
        "description" : "Example for CH IPS MedicationStatement - Dosage 1-0-0-0",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/UC1-Composition1"
        },
        "name" : "UC 1.1: Composition",
        "description" : "Example for CH IPS Composition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-composition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/CoronaryHeartDisease"
        },
        "name" : "UC 1.1: Coronary Heart Disease",
        "description" : "Example for CH IPS Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/DiabetesMellitus"
        },
        "name" : "UC 1.1: Diabetes Mellitus",
        "description" : "Example for CH IPS Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
        },
        "name" : "UC 1.1: Familien Hausarzt @ Hausarzt",
        "description" : "Example for CH IPS PractitionerRole",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitionerrole"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/Hausarzt"
        },
        "name" : "UC 1.1: Hausarzt",
        "description" : "Example for CH IPS Organization",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/HighBloodPressure"
        },
        "name" : "UC 1.1: High Blood Pressure",
        "description" : "Example for CH IPS Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedStatMetformin"
        },
        "name" : "UC 1.1: Metformin",
        "description" : "Example for CH IPS MedicationStatement - Dosage 1-0-1-0",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/MonikaWegmueller"
        },
        "name" : "UC 1.1: Monika Wegmüller",
        "description" : "Example for CH IPS Patient",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/UC1-SwissIpsDocument1"
        },
        "name" : "UC 1.1: Swiss IPS Document",
        "description" : "Example for CH IPS Document (required sections (incl. 'empty section') and recommended section) - using absolute URLs for fullUrls/references",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-document"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/f27b9345-6ba6-4fd6-83ab-6db6c2acd981"
        },
        "name" : "UC 1.2: Aspirin",
        "description" : "Example for CH IPS MedicationStatement - Dosage 1-0-0-0",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/6f369210-adb1-4f11-893d-9977e34932de"
        },
        "name" : "UC 1.2: Atorvastatin",
        "description" : "Example for CH IPS MedicationStatement - Dosage 0.5-0-1-0",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/07b2e450-a62e-4734-98bf-51462f008e0f"
        },
        "name" : "UC 1.2: Body Height",
        "description" : "Example for Observation (Vital Signs)",
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
          "reference" : "Observation/db5ef7b0-e946-4260-a604-128b8887a41b"
        },
        "name" : "UC 1.2: Body Weight",
        "description" : "Example for Observation (Vital Signs)",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/e463547f-7414-47cb-b97f-04a81e1ab7d8"
        },
        "name" : "UC 1.2: Clopidogrel",
        "description" : "Example for CH IPS MedicationStatement - Dosage 1-0-0-0",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/2c67cf62-d712-44c7-aedb-b5582bc707f1"
        },
        "name" : "UC 1.2: Coronary Heart Disease",
        "description" : "Example for CH IPS Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/506b9fef-be0a-4398-bb7e-7d14c311912f"
        },
        "name" : "UC 1.2: Diabetes Mellitus",
        "description" : "Example for CH IPS Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/19efd704-3461-4120-b3cf-a76ae046e150"
        },
        "name" : "UC 1.2: DiTePe",
        "description" : "Example for CH IPS Immunization",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/12d8debe-5e03-465d-83f3-17675be9db4a"
        },
        "name" : "UC 1.2: Heart Attack",
        "description" : "Example for CH IPS Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/8a79d459-0d2f-460b-87fd-a7de12d49871"
        },
        "name" : "UC 1.2: High Blood Pressure",
        "description" : "Example for CH IPS Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/4d4e3587-42eb-4921-8c87-8bbf89b7eb4b"
        },
        "name" : "UC 1.2: Martina Meier",
        "description" : "Example for CH IPS Practitioner",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/869a4dd9-3a4a-4838-ad1e-42453d341147"
        },
        "name" : "UC 1.2: Martina Meier @ Spital",
        "description" : "Example for CH IPS PractitionerRole",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitionerrole"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/88ee1ffb-26d0-49a2-95e4-6212261805a6"
        },
        "name" : "UC 1.2: Metformin",
        "description" : "Example for CH IPS MedicationStatement - Dosage 1-0-1-0",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/8383926c-ece1-4384-94bc-b4250b4cb71b"
        },
        "name" : "UC 1.2: Monika Wegmüller",
        "description" : "Example for CH IPS Patient",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/27da84cc-526a-4098-afb5-f08c7836d893"
        },
        "name" : "UC 1.2: No Known Allergy",
        "description" : "Example for CH IPS AllergyIntolerance",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-allergyintolerance"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/a27376ce-fa12-458d-a2dc-f90e63de126b"
        },
        "name" : "UC 1.2: Spital",
        "description" : "Example for CH IPS Organization",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Procedure"
          }
        ],
        "reference" : {
          "reference" : "Procedure/StentPlacement"
        },
        "name" : "UC 1.2: Stent Placement",
        "description" : "Example for Procedure",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Procedure"
          }
        ],
        "reference" : {
          "reference" : "Procedure/ad3ec07d-1814-4faf-86fd-1a8ebeecb5fe"
        },
        "name" : "UC 1.2: Stent Placement",
        "description" : "Example for Procedure",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Procedure"
          }
        ],
        "reference" : {
          "reference" : "Procedure/d646c888-7af0-4439-8aae-9fd490054583"
        },
        "name" : "UC 1.2: Stent Placement",
        "description" : "Example for Procedure",
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
          "reference" : "Bundle/UC1-SwissIpsDocument2"
        },
        "name" : "UC 1.2: Swiss IPS Document - EPR conform",
        "description" : "Example for CH IPS Document (with required, some recommended and some optional sections) - using UUIDs for fullUrls/references",
        "exampleCanonical" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-document-epr"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/93fe0d81-a547-494e-941c-113506108b76"
        },
        "name" : "UC 1.2: Tobacco Use",
        "description" : "Example for Observation (Tobacco Use)",
        "exampleBoolean" : true
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
              "valueUrl" : "document.html"
            }
          ],
          "nameUrl" : "document.html",
          "title" : "Document",
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
              "valueUrl" : "usecase-french.html"
            }
          ],
          "nameUrl" : "usecase-french.html",
          "title" : "Cas d’application",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "narrative-content.html"
            }
          ],
          "nameUrl" : "narrative-content.html",
          "title" : "Narrative Content",
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
