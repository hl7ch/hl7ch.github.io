# CH EMED Medication (MedicationDispense) - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Medication (MedicationDispense)**

## Resource Profile: CH EMED Medication (MedicationDispense) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication-medicationdispense | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDMedicationMedicationDispense |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the medication for the medication dispense 

**Usages:**

* Refer to this Profile: [CH EMED MedicationAdministration (DIS)](StructureDefinition-ch-emed-medicationadministration.md) and [CH EMED MedicationDispense (DIS)](StructureDefinition-ch-emed-medicationdispense.md)
* Examples for this Profile: [Medication/MedicationWithTwoIngredients](Medication-MedicationWithTwoIngredients.md) and [Medication/TriatecWithLocalCodes](Medication-TriatecWithLocalCodes.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-medication-medicationdispense)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-medication-medicationdispense.csv), [Excel](StructureDefinition-ch-emed-medication-medicationdispense.xlsx), [Schematron](StructureDefinition-ch-emed-medication-medicationdispense.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-medication-medicationdispense",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication-medicationdispense",
  "version" : "6.0.0",
  "name" : "CHEMEDMedicationMedicationDispense",
  "title" : "CH EMED Medication (MedicationDispense)",
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
  "description" : "Definition of the medication for the medication dispense",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Medication",
        "path" : "Medication",
        "short" : "CH EMED Medication (MedicationDispense)"
      },
      {
        "id" : "Medication.amount",
        "path" : "Medication.amount",
        "min" : 1
      }
    ]
  }
}

```
