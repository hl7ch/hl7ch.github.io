# CH VACD Medication For Immunization - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Medication For Immunization**

## Resource Profile: CH VACD Medication For Immunization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medication-for-immunization | *Version*:6.0.0 |
| Draft as of 2025-12-16 | *Computable Name*:CHVACDMedicationForImmunization |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the medication for immunization. 

**Usages:**

* Use this Profile: [CH VACD Immunization Administration Document](StructureDefinition-ch-vacd-document-immunization-administration.md) and [CH VACD Vaccination Record Document](StructureDefinition-ch-vacd-document-vaccination-record.md)
* Refer to this Profile: [CH VACD Extension Immunization Medication Reference](StructureDefinition-ch-vacd-ext-immunization-medication-reference.md)
* Examples for this Profile: [Medication/TC-IMMUN-MEDIC-BOOSTRIX](Medication-TC-IMMUN-MEDIC-BOOSTRIX.md), [Medication/TC-IMMUN-MEDIC-FSMEIMMCC](Medication-TC-IMMUN-MEDIC-FSMEIMMCC.md), [Medication/TC-IMMUN-MEDIC-GARDASIL9](Medication-TC-IMMUN-MEDIC-GARDASIL9.md), [Medication/TC-IMMUN-MEDIC-HAVRIX1440](Medication-TC-IMMUN-MEDIC-HAVRIX1440.md) and [Medication/TC-IMMUN-MEDIC-PRIORIX](Medication-TC-IMMUN-MEDIC-PRIORIX.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-medication-for-immunization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-medication-for-immunization.csv), [Excel](StructureDefinition-ch-vacd-medication-for-immunization.xlsx), [Schematron](StructureDefinition-ch-vacd-medication-for-immunization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-medication-for-immunization",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medication-for-immunization",
  "version" : "6.0.0",
  "name" : "CHVACDMedicationForImmunization",
  "title" : "CH VACD Medication For Immunization",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-12-16T09:56:56+00:00",
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
  "description" : "Definition of the medication for immunization.",
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
        "short" : "CH VACD Medication"
      },
      {
        "id" : "Medication.identifier",
        "path" : "Medication.identifier",
        "short" : "Observation item ID",
        "min" : 1
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
