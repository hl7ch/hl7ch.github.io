# CH Core RelatedPerson - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core RelatedPerson**

## Resource Profile: CH Core RelatedPerson 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreRelatedPerson |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the RelatedPerson resource for use in Swiss specific use cases. 

**Usages:**

* Use this Profile: [CH Core Document](StructureDefinition-ch-core-document.md)
* Refer to this Profile: [CH Core AllergyIntolerance](StructureDefinition-ch-core-allergyintolerance.md), [CH Core Composition EPR](StructureDefinition-ch-core-composition-epr.md), [CH Core Composition](StructureDefinition-ch-core-composition.md), [CH Core Condition](StructureDefinition-ch-core-condition.md)...Show 11 more,[CH Core Coverage](StructureDefinition-ch-core-coverage.md),[CH Core DocumentReference](StructureDefinition-ch-core-documentreference.md),[CH Core Encounter](StructureDefinition-ch-core-encounter.md),[CH Core EPR-Consent](StructureDefinition-ch-core-epr-consent.md),[CH Core MedicationAdministration](StructureDefinition-ch-core-medicationadministration.md),[CH Core MedicationDispense](StructureDefinition-ch-core-medicationdispense.md),[CH Core MedicationRequest](StructureDefinition-ch-core-medicationrequest.md),[CH Core MedicationStatement](StructureDefinition-ch-core-medicationstatement.md),[CH Core ServiceRequest](StructureDefinition-ch-core-servicerequest.md),[Author of the content](StructureDefinition-ch-ext-author.md)and[EPR Information Recipient](StructureDefinition-ch-ext-epr-informationrecipient.md)
* Examples for this Profile: [RelatedPerson/BiologicalFather](RelatedPerson-BiologicalFather.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-relatedperson)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-relatedperson.csv), [Excel](StructureDefinition-ch-core-relatedperson.xlsx), [Schematron](StructureDefinition-ch-core-relatedperson.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-relatedperson",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
  "version" : "6.0.0",
  "name" : "CHCoreRelatedPerson",
  "title" : "CH Core RelatedPerson",
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
  "description" : "Base definition of the RelatedPerson resource for use in Swiss specific use cases.",
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
  "type" : "RelatedPerson",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "RelatedPerson",
        "path" : "RelatedPerson",
        "short" : "CH Core RelatedPerson"
      },
      {
        "id" : "RelatedPerson.extension",
        "path" : "RelatedPerson.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "RelatedPerson.extension:citizenship",
        "path" : "RelatedPerson.extension",
        "sliceName" : "citizenship",
        "short" : "Citizenship(s) of related person",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/patient-citizenship|5.3.0-ballot-tc1"
            ]
          }
        ]
      },
      {
        "id" : "RelatedPerson.patient",
        "path" : "RelatedPerson.patient",
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
        "id" : "RelatedPerson.name",
        "path" : "RelatedPerson.name",
        "type" : [
          {
            "code" : "HumanName",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname"
            ]
          }
        ]
      },
      {
        "id" : "RelatedPerson.telecom",
        "path" : "RelatedPerson.telecom",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "RelatedPerson.telecom.system",
        "path" : "RelatedPerson.telecom.system",
        "min" : 1
      },
      {
        "id" : "RelatedPerson.telecom.value",
        "path" : "RelatedPerson.telecom.value",
        "min" : 1
      },
      {
        "id" : "RelatedPerson.telecom:email",
        "path" : "RelatedPerson.telecom",
        "sliceName" : "email",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-email"
            ]
          }
        ]
      },
      {
        "id" : "RelatedPerson.telecom:phone",
        "path" : "RelatedPerson.telecom",
        "sliceName" : "phone",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-phone"
            ]
          }
        ]
      },
      {
        "id" : "RelatedPerson.telecom:internet",
        "path" : "RelatedPerson.telecom",
        "sliceName" : "internet",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-internet"
            ]
          }
        ]
      },
      {
        "id" : "RelatedPerson.address",
        "path" : "RelatedPerson.address",
        "type" : [
          {
            "code" : "Address",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address"
            ]
          }
        ]
      }
    ]
  }
}

```
