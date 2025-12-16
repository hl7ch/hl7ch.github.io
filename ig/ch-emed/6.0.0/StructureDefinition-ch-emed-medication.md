# CH EMED Medication - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Medication**

## Resource Profile: CH EMED Medication 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDMedication |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the medication 

**Usages:**

* Derived from this Profile: [CH EMED Medication (MedicationDispense)](StructureDefinition-ch-emed-medication-medicationdispense.md)
* Refer to this Profile: [CH EMED MedicationRequest (PRE)](StructureDefinition-ch-emed-medicationrequest.md), [CH EMED MedicationStatement (CARD)](StructureDefinition-ch-emed-medicationstatement-card.md) and [CH EMED MedicationStatement](StructureDefinition-ch-emed-medicationstatement.md)
* Examples for this Profile: [Medication/MedicationWithATC](Medication-MedicationWithATC.md), [Medication/MedicationWithTwoIngredients](Medication-MedicationWithTwoIngredients.md), [Medication/TriatecWithCodeNotFromVS](Medication-TriatecWithCodeNotFromVS.md) and [Medication/TriatecWithLocalCodes](Medication-TriatecWithLocalCodes.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-medication)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-medication.csv), [Excel](StructureDefinition-ch-emed-medication.xlsx), [Schematron](StructureDefinition-ch-emed-medication.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-medication",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication",
  "version" : "6.0.0",
  "name" : "CHEMEDMedication",
  "title" : "CH EMED Medication",
  "status" : "active",
  "date" : "2025-12-16T11:07:13+00:00",
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
  "description" : "Definition of the medication",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Medication",
        "path" : "Medication",
        "short" : "CH EMED Medication",
        "constraint" : [
          {
            "key" : "ch-emed-med-1",
            "severity" : "error",
            "human" : "Medication or ingredient name has to be specified",
            "expression" : "code.text.exists() or ingredient.item.text.exists()",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication"
          }
        ]
      },
      {
        "id" : "Medication.code.coding",
        "path" : "Medication.code.coding",
        "short" : "Code of the medication"
      },
      {
        "id" : "Medication.code.coding:GTIN",
        "path" : "Medication.code.coding",
        "sliceName" : "GTIN",
        "mustSupport" : true
      },
      {
        "id" : "Medication.code.text",
        "path" : "Medication.code.text",
        "short" : "Medication name",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Medication.form",
        "path" : "Medication.form",
        "short" : "Galenic form",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-pharmaceuticaldoseform"
        }
      },
      {
        "id" : "Medication.form.coding",
        "path" : "Medication.form.coding",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Medication.form.coding.system",
        "path" : "Medication.form.coding.system",
        "min" : 1
      },
      {
        "id" : "Medication.form.coding.code",
        "path" : "Medication.form.coding.code",
        "min" : 1
      },
      {
        "id" : "Medication.amount",
        "path" : "Medication.amount",
        "short" : "Package size"
      },
      {
        "id" : "Medication.ingredient.item[x]",
        "path" : "Medication.ingredient.item[x]",
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
        "id" : "Medication.ingredient.item[x]:itemCodeableConcept",
        "path" : "Medication.ingredient.item[x]",
        "sliceName" : "itemCodeableConcept",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Medication.ingredient.item[x]:itemCodeableConcept.coding",
        "path" : "Medication.ingredient.item[x].coding",
        "short" : "Ingredients coded with SNOMED CT",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/ActivePharmaceuticalIngredient"
        }
      },
      {
        "id" : "Medication.ingredient.item[x]:itemCodeableConcept.text",
        "path" : "Medication.ingredient.item[x].text",
        "short" : "Ingredient name",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Medication.ingredient.strength",
        "path" : "Medication.ingredient.strength",
        "short" : "Dose per unit",
        "mustSupport" : true
      }
    ]
  }
}

```
