# CH Core Medication - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Medication**

## Resource Profile: CH Core Medication 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreMedication |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the Medication resource for use in Swiss specific use cases. 

**Usages:**

* Refer to this Profile: [CH Core Medication](StructureDefinition-ch-core-medication.md), [CH Core MedicationAdministration](StructureDefinition-ch-core-medicationadministration.md), [CH Core MedicationDispense](StructureDefinition-ch-core-medicationdispense.md), [CH Core MedicationRequest](StructureDefinition-ch-core-medicationrequest.md) and [CH Core MedicationStatement](StructureDefinition-ch-core-medicationstatement.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-medication)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-medication.csv), [Excel](StructureDefinition-ch-core-medication.xlsx), [Schematron](StructureDefinition-ch-core-medication.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-medication",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication",
  "version" : "6.0.0",
  "name" : "CHCoreMedication",
  "title" : "CH Core Medication",
  "status" : "active",
  "date" : "2025-12-16T07:58:48+00:00",
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
  "description" : "Base definition of the Medication resource for use in Swiss specific use cases.",
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
  "type" : "Medication",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Medication",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Medication",
        "path" : "Medication",
        "short" : "CH Core Medication"
      },
      {
        "id" : "Medication.code.coding",
        "path" : "Medication.code.coding",
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
        "id" : "Medication.code.coding:GTIN",
        "path" : "Medication.code.coding",
        "sliceName" : "GTIN",
        "short" : "GTIN for Swiss products",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Medication.code.coding:GTIN.system",
        "path" : "Medication.code.coding.system",
        "short" : "Global Trade Item Number (GS1)",
        "min" : 1,
        "fixedUri" : "urn:oid:2.51.1.1"
      },
      {
        "id" : "Medication.code.coding:GTIN.code",
        "path" : "Medication.code.coding.code",
        "min" : 1
      },
      {
        "id" : "Medication.code.coding:ATC",
        "path" : "Medication.code.coding",
        "sliceName" : "ATC",
        "short" : "ATC for foreign products",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Medication.code.coding:ATC.system",
        "path" : "Medication.code.coding.system",
        "short" : "Anatomical Therapeutic Chemical (ATC) Classification",
        "min" : 1,
        "fixedUri" : "http://www.whocc.no/atc"
      },
      {
        "id" : "Medication.code.coding:ATC.code",
        "path" : "Medication.code.coding.code",
        "min" : 1
      },
      {
        "id" : "Medication.form",
        "path" : "Medication.form",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-pharmaceuticaldoseform"
        }
      },
      {
        "id" : "Medication.amount",
        "path" : "Medication.amount",
        "type" : [
          {
            "code" : "Ratio",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-emed-ratio-with-emed-units"
            ]
          }
        ]
      },
      {
        "id" : "Medication.ingredient.item[x]",
        "path" : "Medication.ingredient.item[x]",
        "type" : [
          {
            "code" : "CodeableConcept"
          },
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/StructureDefinition/Substance",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication"
            ]
          }
        ],
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/ActivePharmaceuticalIngredient"
        }
      },
      {
        "id" : "Medication.ingredient.strength",
        "path" : "Medication.ingredient.strength",
        "type" : [
          {
            "code" : "Ratio",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-emed-ratio-with-emed-units"
            ]
          }
        ]
      }
    ]
  }
}

```
