# Home - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-allergyintolerance/ImplementationGuide/ch.fhir.ig.ch-allergyintolerance | *Version*:3.0.1 |
| Active as of 2025-12-17 | *Computable Name*:CHAllergyIntolerance |
| **Copyright/Legal**: CC0-1.0 | |

### Introduction

Swiss implementation guide (IG) for allergies and intolerances based on the [recommendations of the interprofessional working group EPR (IPAG)](https://www.e-health-suisse.ch/fileadmin/user_upload/Dokumente/D/ipag-bericht-eallergien-intoleranzen.pdf) and the implementation guide [CH IPS](https://fhir.ch/ig/ch-ips/1.0.0/index.html), which is closely aligned with the [HL7 IPS-UV specification](https://hl7.org/fhir/uv/ips/2024Sep/). The "Implementation Guide for Use of SNOMED CT in Documentation of Allergy, Non-allergic Hypersensitivity and Intolerance", which was still in development at the time of the initial publication of this IG, has also been taken into account.

[Significant changes, open and closed issues.](changelog.md)

**Download**: You can download this implementation guide in npm format from [here](package.tgz).

### Goal

The goal of this IG is

* the exchange of allergies and intolerances in a structured document (profile developed), e.g. in the context of the Swiss EPR
* as a requirement on how allergy and intolerances are to be used, referenced or derived in order to obtain interoperability in Swiss projects (and therefore other IGs), e.g. in the context of vaccination or transition of care
* clarify the usage of adverse sensitivity data (which encompasses allergy, non-allergic hypersensitivity and intolerance) by providing use cases and thus accelerating consistent implementation as intended by IPAG and the [Allergies/Hypersensitivity and Intolerance Clinical Reference Group](https://confluence.ihtsdotools.org/pages/viewpage.action?pageId=40143192) of SNOMED CT.

### Must Support

The use of Must Support is in the sense of the [Guidelines for Swiss IG developments](https://github.com/hl7ch/ch-core/wiki/Guidelines-for-Swiss-IG-Developments): 
 **"Required if known. If the sending application has data for the element, it is required to populate the element with a non-empty value. If the value is not known, the element may be omitted. A receiving application may ignore the information conveyed by the element. A receiving application shall not raise an error solely due to the presence or absence of the element."**

[CH AllergyIntolerance](StructureDefinition-ch-allergyintolerance.md) and [CH AllergyIntolerance Condition](StructureDefinition-ch-allergyintolerance-condition.md) are based on the corresponding profiles of [CH IPS](https://fhir.ch/ig/ch-ips/1.0.0/index.html). CH IPS itself explicitly does not set any Must Support flags, but rather indicates that the same rules/elements apply as in HL7 IPS-UV (see [here](https://fhir.ch/ig/ch-ips/1.0.0/index.html#principles--design)). This therefore also applies to this IG CH AllergyIntolerance. This mechanism also prevents discrepancies/contradictions between the individual specifications. 
 However, for the AllergyIntolerance resource, Must Support flags have been explicitly set here for all those fields that are Must Support in HL7 IPS-UV and are also part of the **IPAG** recommendations (see also [here](document.md#assignment-ipag-report-to-ch-allergyintolerance-elements)). In addition, the fields `AllergyIntolerance.reaction.substance` and `AllergyIntolerance.category` were also flagged as Must Support because these fields play an important role in the above mentioned recommendations.

The extensions defined by the interprofessional working group EPR (IPAG) have no Must Support flags in the present version but are easily identified in the differential view of the artifact. 
 The expectation is that allergy specialists tend to provide more detailed information applying these extended reaction details, whereas the general practitioner will document rather the Must Support attributes.

### Value Sets

The value sets for coding of allergies, intolerances and hypersensitivities and related conditions are based on the historically most common values documented in the Swiss realm and stated as a defined list of findings, as well as the correspondent substances in the value set for reaction.substance, reviewed by the Swiss Society for Allergology and Immunology SGAI-SSAI.

Whereas this is explicitly desired by the professional representatives it is different than stated in the HL7 IPS-UV specification for example, where the binding is based on expanded value sets, but which has had very little real world feedback until to date. Experience and feedback is welcome therefore in this respect.

The actual value set AllergyIntolerance.code doesn't yet include codes which exist only as post coordinated SNOMED CT expressions. They will be suggested to SNOMED CT by eHealth Suisse and added to the ci-build as soon as available as precoordinated SNOMED CT codes and added to a future publication of this IG.

### Safety Considerations

This implementation guide defines data elements, resources, formats, and methods for exchanging healthcare data between different participants in the healthcare process. As such, clinical safety is a key concern. Additional guidance regarding safety for the specification’s many and various implementations is available at: [https://www.hl7.org/FHIR/safety.html](https://www.hl7.org/FHIR/safety.html).

Although the present specification does gives users the opportunity to observe data protection and data security regulations, its use does not guarantee compliance with these regulations. Effective compliance must be ensured by appropriate measures during implementation projects and in daily operations. The corresponding implementation measures are explained in the standard. In addition, the present specification can only influence compliance with the security regulations in the technical area of standardisation. It cannot influence organisational and contractual matters.

### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

This publication includes IP covered under the following statements.

* CC0-1.0

* [eCH-011 MaritalStatus](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-11-maritalstatus.html): [Patient/ElisabethBroennimannByBFH](Patient-ElisabethBroennimannByBFH.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [CHAllergyIntolerance](StructureDefinition-ch-allergyintolerance.md), [CHAllergyIntoleranceCompositionEPR](StructureDefinition-ch-allergyintolerance-composition-epr.md), [CHAllergyIntoleranceCondition](StructureDefinition-ch-allergyintolerance-condition.md) and [CHAllergyIntoleranceDocumentEPR](StructureDefinition-ch-allergyintolerance-document-epr.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/ch-allergyintolerance-document-example](Bundle-ch-allergyintolerance-document-example.md), [CHAllergyIntoleranceCompositionEPR](StructureDefinition-ch-allergyintolerance-composition-epr.md), [Composition/AllergyIntoleranceComposition](Composition-AllergyIntoleranceComposition.md) and [Composition/ch-allergyintolerance-composition-example](Composition-ch-allergyintolerance-composition-example.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://hl7.org/fhir/R4/codesystem-snomedct.html): [AllergyIntolerance/AllergyToCatDander](AllergyIntolerance-AllergyToCatDander.md), [AllergyIntolerance/CH-AllergyIntolerance-IPAG-Recommendation-Table-1](AllergyIntolerance-CH-AllergyIntolerance-IPAG-Recommendation-Table-1.md)...Show 19 more,[AllergyIntolerance/CH-AllergyIntolerance-MultipleManifestationEntries](AllergyIntolerance-CH-AllergyIntolerance-MultipleManifestationEntries.md),[AllergyIntolerance/CH-AllergyIntolerance-MultipleReactionEntries](AllergyIntolerance-CH-AllergyIntolerance-MultipleReactionEntries.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-2](AllergyIntolerance-CH-AllergyIntolerance-Usecase-2.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-3](AllergyIntolerance-CH-AllergyIntolerance-Usecase-3.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-5](AllergyIntolerance-CH-AllergyIntolerance-Usecase-5.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-6](AllergyIntolerance-CH-AllergyIntolerance-Usecase-6.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-7](AllergyIntolerance-CH-AllergyIntolerance-Usecase-7.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-8](AllergyIntolerance-CH-AllergyIntolerance-Usecase-8.md),[AllergyIntolerance/ExAllergy](AllergyIntolerance-ExAllergy.md),[Bundle/ch-allergyintolerance-document-example](Bundle-ch-allergyintolerance-document-example.md),[CHAllergyIntolerance](StructureDefinition-ch-allergyintolerance.md),[CHAllergyIntoleranceCompositionEPR](StructureDefinition-ch-allergyintolerance-composition-epr.md),[CHAllergyIntoleranceCondition](StructureDefinition-ch-allergyintolerance-condition.md),[Composition/AllergyIntoleranceComposition](Composition-AllergyIntoleranceComposition.md),[Composition/ch-allergyintolerance-composition-example](Composition-ch-allergyintolerance-composition-example.md),[Condition/CH-AllergyIntolerance-Condition-Usecase-3](Condition-CH-AllergyIntolerance-Condition-Usecase-3.md),[Condition/CH-AllergyIntolerance-Condition-Usecase-7](Condition-CH-AllergyIntolerance-Condition-Usecase-7.md),[Condition/CH-AllergyIntolerance-Condition-Visit1-Usecase-1](Condition-CH-AllergyIntolerance-Condition-Visit1-Usecase-1.md)and[Condition/CH-AllergyIntolerance-Condition-Visit2-Usecase-1](Condition-CH-AllergyIntolerance-Condition-Visit2-Usecase-1.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [AllergyIntolerance Clinical Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-allergyintolerance-clinical.html): [AllergyIntolerance/AllergyToCatDander](AllergyIntolerance-AllergyToCatDander.md), [AllergyIntolerance/CH-AllergyIntolerance-IPAG-Recommendation-Table-1](AllergyIntolerance-CH-AllergyIntolerance-IPAG-Recommendation-Table-1.md)...Show 10 more,[AllergyIntolerance/CH-AllergyIntolerance-MultipleManifestationEntries](AllergyIntolerance-CH-AllergyIntolerance-MultipleManifestationEntries.md),[AllergyIntolerance/CH-AllergyIntolerance-MultipleReactionEntries](AllergyIntolerance-CH-AllergyIntolerance-MultipleReactionEntries.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-2](AllergyIntolerance-CH-AllergyIntolerance-Usecase-2.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-3](AllergyIntolerance-CH-AllergyIntolerance-Usecase-3.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-5](AllergyIntolerance-CH-AllergyIntolerance-Usecase-5.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-6](AllergyIntolerance-CH-AllergyIntolerance-Usecase-6.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-7](AllergyIntolerance-CH-AllergyIntolerance-Usecase-7.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-8](AllergyIntolerance-CH-AllergyIntolerance-Usecase-8.md),[AllergyIntolerance/ExAllergy](AllergyIntolerance-ExAllergy.md)and[Bundle/ch-allergyintolerance-document-example](Bundle-ch-allergyintolerance-document-example.md)
* [AllergyIntolerance Verification Status](http://terminology.hl7.org/7.0.1/CodeSystem-allergyintolerance-verification.html): [AllergyIntolerance/AllergyToCatDander](AllergyIntolerance-AllergyToCatDander.md), [AllergyIntolerance/CH-AllergyIntolerance-IPAG-Recommendation-Table-1](AllergyIntolerance-CH-AllergyIntolerance-IPAG-Recommendation-Table-1.md)...Show 9 more,[AllergyIntolerance/CH-AllergyIntolerance-MultipleManifestationEntries](AllergyIntolerance-CH-AllergyIntolerance-MultipleManifestationEntries.md),[AllergyIntolerance/CH-AllergyIntolerance-MultipleReactionEntries](AllergyIntolerance-CH-AllergyIntolerance-MultipleReactionEntries.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-2](AllergyIntolerance-CH-AllergyIntolerance-Usecase-2.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-3](AllergyIntolerance-CH-AllergyIntolerance-Usecase-3.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-5](AllergyIntolerance-CH-AllergyIntolerance-Usecase-5.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-6](AllergyIntolerance-CH-AllergyIntolerance-Usecase-6.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-7](AllergyIntolerance-CH-AllergyIntolerance-Usecase-7.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-8](AllergyIntolerance-CH-AllergyIntolerance-Usecase-8.md)and[Bundle/ch-allergyintolerance-document-example](Bundle-ch-allergyintolerance-document-example.md)
* [Condition Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-category.html): [Condition/CH-AllergyIntolerance-Condition-Usecase-3](Condition-CH-AllergyIntolerance-Condition-Usecase-3.md), [Condition/CH-AllergyIntolerance-Condition-Usecase-7](Condition-CH-AllergyIntolerance-Condition-Usecase-7.md), [Condition/CH-AllergyIntolerance-Condition-Visit1-Usecase-1](Condition-CH-AllergyIntolerance-Condition-Visit1-Usecase-1.md) and [Condition/CH-AllergyIntolerance-Condition-Visit2-Usecase-1](Condition-CH-AllergyIntolerance-Condition-Visit2-Usecase-1.md)
* [Condition Clinical Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-clinical.html): [Condition/CH-AllergyIntolerance-Condition-Usecase-3](Condition-CH-AllergyIntolerance-Condition-Usecase-3.md), [Condition/CH-AllergyIntolerance-Condition-Usecase-7](Condition-CH-AllergyIntolerance-Condition-Usecase-7.md), [Condition/CH-AllergyIntolerance-Condition-Visit1-Usecase-1](Condition-CH-AllergyIntolerance-Condition-Visit1-Usecase-1.md) and [Condition/CH-AllergyIntolerance-Condition-Visit2-Usecase-1](Condition-CH-AllergyIntolerance-Condition-Visit2-Usecase-1.md)
* [ConditionVerificationStatus](http://terminology.hl7.org/7.0.1/CodeSystem-condition-ver-status.html): [Condition/CH-AllergyIntolerance-Condition-Usecase-3](Condition-CH-AllergyIntolerance-Condition-Usecase-3.md), [Condition/CH-AllergyIntolerance-Condition-Usecase-7](Condition-CH-AllergyIntolerance-Condition-Usecase-7.md), [Condition/CH-AllergyIntolerance-Condition-Visit1-Usecase-1](Condition-CH-AllergyIntolerance-Condition-Visit1-Usecase-1.md) and [Condition/CH-AllergyIntolerance-Condition-Visit2-Usecase-1](Condition-CH-AllergyIntolerance-Condition-Visit2-Usecase-1.md)
* [AllergyIntoleranceCertainty](http://terminology.hl7.org/7.0.1/CodeSystem-reaction-event-certainty.html): [AllergyIntolerance/AllergyToCatDander](AllergyIntolerance-AllergyToCatDander.md), [AllergyIntolerance/CH-AllergyIntolerance-IPAG-Recommendation-Table-1](AllergyIntolerance-CH-AllergyIntolerance-IPAG-Recommendation-Table-1.md)...Show 4 more,[AllergyIntolerance/CH-AllergyIntolerance-Usecase-3](AllergyIntolerance-CH-AllergyIntolerance-Usecase-3.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-5](AllergyIntolerance-CH-AllergyIntolerance-Usecase-5.md),[AllergyIntolerance/CH-AllergyIntolerance-Usecase-7](AllergyIntolerance-CH-AllergyIntolerance-Usecase-7.md)and[Bundle/ch-allergyintolerance-document-example](Bundle-ch-allergyintolerance-document-example.md)
* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [Bundle/ch-allergyintolerance-document-example](Bundle-ch-allergyintolerance-document-example.md) and [Patient/MonikaWegmueller](Patient-MonikaWegmueller.md)
* [MaritalStatus](http://terminology.hl7.org/7.0.1/CodeSystem-v3-MaritalStatus.html): [Patient/ElisabethBroennimannByBFH](Patient-ElisabethBroennimannByBFH.md)


### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-allergyintolerance.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-allergyintolerance.r4b)](package.r4b.tgz) are available.

### Dependency Table







### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-allergyintolerance",
  "url" : "http://fhir.ch/ig/ch-allergyintolerance/ImplementationGuide/ch.fhir.ig.ch-allergyintolerance",
  "version" : "3.0.1",
  "name" : "CHAllergyIntolerance",
  "title" : "CH AllergyIntolerance (R4)",
  "status" : "active",
  "date" : "2025-12-17",
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
  "description" : "Implementation guide CH AllergyIntolerance (R4)",
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
  "packageId" : "ch.fhir.ig.ch-allergyintolerance",
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
      "id" : "ch_fhir_ig_ch_ips",
      "uri" : "http://fhir.ch/ig/ch-ips/ImplementationGuide/ch.fhir.ig.ch-ips",
      "packageId" : "ch.fhir.ig.ch-ips",
      "version" : "2.0.0"
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
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/history.html"
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
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/history.html"
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
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/AgparMarc"
        },
        "name" : "AgparMarc",
        "description" : "Example for Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/AllergyIntoleranceComposition"
        },
        "name" : "AllergyIntoleranceComposition",
        "description" : "Example for Composition of a CH AllergyIntolerance Composition for the Swiss EPR",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/AllergyToCatDander"
        },
        "name" : "AllergyToCatDander",
        "description" : "Example for AllergyIntolerance",
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
          "reference" : "StructureDefinition/ch-allergyintolerance"
        },
        "name" : "CH AllergyIntolerance",
        "description" : "This profile represents the constraints applied to the AllergyIntolerance resource in the Swiss context (based on CH IPS). A record of an allergy or intolerance is represented in the Swiss EPR, in a TransitionOfCare transaction or similar as an instance of an AllergyIntolerance resource constrained by this profile.\r\nIt documents the relevant allergies or intolerances for a patient, describing the kind of reaction (e.g. rash, anaphylaxis,..); preferably the agents that cause it; and optionally the criticality and the certainty of the allergy.",
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
          "reference" : "StructureDefinition/ch-allergyintolerance-composition-epr"
        },
        "name" : "CH AllergyIntolerance Composition",
        "description" : "Definition of the composition for the allergy intolerance document",
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
          "reference" : "StructureDefinition/ch-allergyintolerance-condition"
        },
        "name" : "CH AllergyIntolerance Condition",
        "description" : "This profile represents the constraints applied to the Condition resource in the context of AllergyIntolerance as a problem-list item or a encounter-diagnosis entry in the Swiss realm - in adaption of the respective usecases provided in the Implementation Guide for Use of SNOMED CT in Documentation of Allergy, Non-allergic Hypersensitivity and Intolerance.",
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
          "reference" : "StructureDefinition/ch-allergyintolerance-document-epr"
        },
        "name" : "CH AllergyIntolerance Document",
        "description" : "Definition of the bundle for the allergy intolerance document",
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
          "reference" : "Composition/ch-allergyintolerance-composition-example"
        },
        "name" : "CH-AllergyIntolerance-Composition-Example",
        "description" : "Example for Composition of a CH AllergyIntolerance Composition for the Swiss EPR",
        "exampleCanonical" : "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-composition-epr"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/CH-AllergyIntolerance-Condition-Usecase-3"
        },
        "name" : "CH-AllergyIntolerance-Condition-Usecase-3",
        "description" : "Example for Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/CH-AllergyIntolerance-Condition-Usecase-7"
        },
        "name" : "CH-AllergyIntolerance-Condition-Usecase-7",
        "description" : "Example for Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/CH-AllergyIntolerance-Condition-Visit1-Usecase-1"
        },
        "name" : "CH-AllergyIntolerance-Condition-Visit1-Usecase-1",
        "description" : "Example for Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/CH-AllergyIntolerance-Condition-Visit2-Usecase-1"
        },
        "name" : "CH-AllergyIntolerance-Condition-Visit2-Usecase-1",
        "description" : "Example for Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/ch-allergyintolerance-document-example"
        },
        "name" : "CH-AllergyIntolerance-Document-Example",
        "description" : "Example for Bundle",
        "exampleCanonical" : "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-document-epr"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/CH-AllergyIntolerance-IPAG-Recommendation-Table-1"
        },
        "name" : "CH-AllergyIntolerance-IPAG-Recommendation-Table-1",
        "description" : "Example for AllergyIntolerance",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/CH-AllergyIntolerance-MultipleManifestationEntries"
        },
        "name" : "CH-AllergyIntolerance-MultipleManifestationEntries",
        "description" : "Example for AllergyIntolerance - Allergy to shrimps with multiple manifestation entries",
        "exampleCanonical" : "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/CH-AllergyIntolerance-MultipleReactionEntries"
        },
        "name" : "CH-AllergyIntolerance-MultipleReactionEntries",
        "description" : "Example for AllergyIntolerance - Allergy to penicillin with multiple reation entries",
        "exampleCanonical" : "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/CH-AllergyIntolerance-Usecase-2"
        },
        "name" : "CH-AllergyIntolerance-Usecase-2",
        "description" : "Example for AllergyIntolerance",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/CH-AllergyIntolerance-Usecase-3"
        },
        "name" : "CH-AllergyIntolerance-Usecase-3",
        "description" : "Example for AllergyIntolerance",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/CH-AllergyIntolerance-Usecase-5"
        },
        "name" : "CH-AllergyIntolerance-Usecase-5",
        "description" : "Example for AllergyIntolerance",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/CH-AllergyIntolerance-Usecase-6"
        },
        "name" : "CH-AllergyIntolerance-Usecase-6",
        "description" : "Example for AllergyIntolerance",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/CH-AllergyIntolerance-Usecase-7"
        },
        "name" : "CH-AllergyIntolerance-Usecase-7",
        "description" : "Example for AllergyIntolerance",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/CH-AllergyIntolerance-Usecase-8"
        },
        "name" : "CH-AllergyIntolerance-Usecase-8",
        "description" : "Example for AllergyIntolerance",
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
          "reference" : "Organization/Custodian"
        },
        "name" : "Custodian",
        "description" : "Example for Organization",
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
          "reference" : "Patient/ElisabethBroennimannByBFH"
        },
        "name" : "ElisabethBroennimannByBFH",
        "description" : "Example for Patient",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/ExAllergy"
        },
        "name" : "ExAllergyIntolerance",
        "description" : "Example AllergyIntolerance",
        "exampleCanonical" : "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance"
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
        "name" : "Familien Hausarzt",
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
          "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
        },
        "name" : "Familien Hausarzt @ Hausarzt",
        "description" : "Example for PractitionerRole",
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
          "reference" : "Organization/Hausarzt"
        },
        "name" : "Hausarzt",
        "description" : "Example for Organization",
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
          "reference" : "Patient/MonikaWegmueller"
        },
        "name" : "Monika Wegmueller",
        "description" : "Example for Patient",
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
          "reference" : "Patient/MonikaWegmuellerRecipient"
        },
        "name" : "Monika Wegmueller as Information Recipient",
        "description" : "Example for Patient",
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
              "valueUrl" : "document.html"
            }
          ],
          "nameUrl" : "document.html",
          "title" : "Allergy Intolerance Document",
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
          "title" : "Clinical Use Case Scenarios",
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
          "title" : "Scénarios cliniques relatifs à des cas d’utilisation",
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
          "title" : "Klinische Anwendungsfall-Szenarien",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "reaction-manifestation.html"
            }
          ],
          "nameUrl" : "reaction-manifestation.html",
          "title" : "Adverse Reaction & Manifestation",
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
