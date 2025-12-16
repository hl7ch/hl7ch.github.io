# CH Core Dosage - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Dosage**

## Data Type Profile: CH Core Dosage 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-dosage | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreDosage |
| **Copyright/Legal**: CC0-1.0 | |

 
Dosage for medication use cases 

**Usages:**

* Use this DataType Profile: [CH Core MedicationDispense](StructureDefinition-ch-core-medicationdispense.md), [CH Core MedicationRequest](StructureDefinition-ch-core-medicationrequest.md) and [CH Core MedicationStatement](StructureDefinition-ch-core-medicationstatement.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-dosage)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-dosage.csv), [Excel](StructureDefinition-ch-core-dosage.xlsx), [Schematron](StructureDefinition-ch-core-dosage.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-dosage",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-dosage",
  "version" : "6.0.0",
  "name" : "CHCoreDosage",
  "title" : "CH Core Dosage",
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
  "description" : "Dosage for medication use cases",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Dosage",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Dosage",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Dosage",
        "path" : "Dosage",
        "short" : "CH Core Dosage"
      },
      {
        "id" : "Dosage.route",
        "path" : "Dosage.route",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-routeofadministration"
        }
      },
      {
        "id" : "Dosage.method",
        "path" : "Dosage.method",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-administrationmethod"
        }
      },
      {
        "id" : "Dosage.doseAndRate.dose[x]",
        "path" : "Dosage.doseAndRate.dose[x]",
        "type" : [
          {
            "code" : "Range",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-range-with-emed-units"
            ]
          },
          {
            "code" : "Quantity",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-quantity-with-emed-units"
            ]
          }
        ]
      }
    ]
  }
}

```
