# CH Core MedicationRequest - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core MedicationRequest**

## Resource Profile: CH Core MedicationRequest 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationrequest | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreMedicationRequest |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the MedicationRequest resource for use in Swiss specific use cases. 

**Usages:**

* Refer to this Profile: [CH Core ServiceRequest](StructureDefinition-ch-core-servicerequest.md)
* Examples for this Profile: [MedicationRequest/2-6-MedReqNorvasc](MedicationRequest-2-6-MedReqNorvasc.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-medicationrequest)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-medicationrequest.csv), [Excel](StructureDefinition-ch-core-medicationrequest.xlsx), [Schematron](StructureDefinition-ch-core-medicationrequest.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-medicationrequest",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationrequest",
  "version" : "6.0.0",
  "name" : "CHCoreMedicationRequest",
  "title" : "CH Core MedicationRequest",
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
  "description" : "Base definition of the MedicationRequest resource for use in Swiss specific use cases.",
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
      "identity" : "script10.6",
      "uri" : "http://ncpdp.org/SCRIPT10_6",
      "name" : "Mapping to NCPDP SCRIPT 10.6"
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
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "MedicationRequest",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/MedicationRequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MedicationRequest",
        "path" : "MedicationRequest",
        "short" : "CH Core MedicationRequest"
      },
      {
        "id" : "MedicationRequest.medication[x]",
        "path" : "MedicationRequest.medication[x]",
        "type" : [
          {
            "code" : "CodeableConcept"
          },
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication"
            ]
          }
        ]
      },
      {
        "id" : "MedicationRequest.subject",
        "path" : "MedicationRequest.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://hl7.org/fhir/StructureDefinition/Group"
            ]
          }
        ]
      },
      {
        "id" : "MedicationRequest.requester",
        "path" : "MedicationRequest.requester",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
              "http://hl7.org/fhir/StructureDefinition/Device"
            ]
          }
        ]
      },
      {
        "id" : "MedicationRequest.dosageInstruction",
        "path" : "MedicationRequest.dosageInstruction",
        "type" : [
          {
            "code" : "Dosage",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-dosage"
            ]
          }
        ]
      },
      {
        "id" : "MedicationRequest.substitution.allowed[x]",
        "path" : "MedicationRequest.substitution.allowed[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "MedicationRequest.substitution.allowed[x]:allowedCodeableConcept",
        "path" : "MedicationRequest.substitution.allowed[x]",
        "sliceName" : "allowedCodeableConcept",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/ActSubstanceAdminSubstitutionCode"
        }
      }
    ]
  }
}

```
