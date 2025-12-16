# CH Core EPR-Consent - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core EPR-Consent**

## Resource Profile: CH Core EPR-Consent 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-epr-consent | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreEPRConsent |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the Consent resource to document in an external system (outside the EPR) that a patient has an electronic patient record (EPR) in Switzerland. This profile is used by healthcare organizations to track which patients have an EPR. Optionally, specific encounters can be excluded from EPR publication by referencing them in the provision element, documenting the patient's request that certain information should not be published to their EPR. 
Note: This profile is NOT used to manage actual consent conditions within the EPR itself - those are managed through proper PPQ Consents (see CH EPR FHIR IG). 

**Usages:**

* Examples for this Profile: [Consent/EncounterExcludedForEpr](Consent-EncounterExcludedForEpr.md) and [Consent/PatientHasEpr](Consent-PatientHasEpr.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-epr-consent)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-epr-consent.csv), [Excel](StructureDefinition-ch-core-epr-consent.xlsx), [Schematron](StructureDefinition-ch-core-epr-consent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-epr-consent",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-epr-consent",
  "version" : "6.0.0",
  "name" : "CHCoreEPRConsent",
  "title" : "CH Core EPR-Consent",
  "status" : "active",
  "date" : "2025-12-16T08:02:49+00:00",
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
  "description" : "Definition of the Consent resource to document in an external system (outside the EPR) that a patient has an electronic patient record (EPR) in Switzerland. \nThis profile is used by healthcare organizations to track which patients have an EPR. Optionally, specific encounters can be excluded from EPR publication by referencing them in the provision element, documenting the patient's request that certain information should not be published to their EPR. \n\nNote: This profile is NOT used to manage actual consent conditions within the EPR itself - those are managed through proper PPQ Consents (see CH EPR FHIR IG).\n",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Consent",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Consent",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Consent",
        "path" : "Consent",
        "short" : "CH Core EPR-Consent"
      },
      {
        "id" : "Consent.scope",
        "path" : "Consent.scope",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/consentscope",
              "code" : "patient-privacy"
            }
          ]
        }
      },
      {
        "id" : "Consent.category",
        "path" : "Consent.category",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "coding.code"
            },
            {
              "type" : "value",
              "path" : "coding.system"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Consent.category:VSCat",
        "path" : "Consent.category",
        "sliceName" : "VSCat",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Consent.category:VSCat.coding",
        "path" : "Consent.category.coding",
        "min" : 1
      },
      {
        "id" : "Consent.category:VSCat.coding.system",
        "path" : "Consent.category.coding.system",
        "min" : 1,
        "fixedUri" : "http://terminology.hl7.org/CodeSystem/v3-ActCode"
      },
      {
        "id" : "Consent.category:VSCat.coding.code",
        "path" : "Consent.category.coding.code",
        "short" : "information disclosure",
        "min" : 1,
        "fixedCode" : "IDSCL"
      },
      {
        "id" : "Consent.patient",
        "path" : "Consent.patient",
        "short" : "The patient to whom this EPR consent applies",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ]
      },
      {
        "id" : "Consent.performer",
        "path" : "Consent.performer",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
            ]
          }
        ]
      },
      {
        "id" : "Consent.organization",
        "path" : "Consent.organization",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "Consent.policyRule",
        "path" : "Consent.policyRule",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/consentpolicycodes",
              "code" : "ch-epr"
            }
          ]
        }
      },
      {
        "id" : "Consent.provision",
        "path" : "Consent.provision",
        "short" : "Exceptions to the EPR consent"
      },
      {
        "id" : "Consent.provision.type",
        "path" : "Consent.provision.type",
        "short" : "deny",
        "definition" : "Encounters can be added here where the consent for publication to the EPR do not apply.",
        "min" : 1,
        "fixedCode" : "deny"
      },
      {
        "id" : "Consent.provision.data.meaning",
        "path" : "Consent.provision.data.meaning",
        "fixedCode" : "instance"
      },
      {
        "id" : "Consent.provision.data.reference",
        "path" : "Consent.provision.data.reference",
        "short" : "Excluded encounter for EPR",
        "definition" : "A reference to the encounter where the consent for publication to the EPR do not apply.",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter"
            ]
          }
        ]
      }
    ]
  }
}

```
