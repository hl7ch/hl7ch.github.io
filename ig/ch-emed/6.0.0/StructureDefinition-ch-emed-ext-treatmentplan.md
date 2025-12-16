# CH EMED Extension Treatment Plan - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Extension Treatment Plan**

## Extension: CH EMED Extension Treatment Plan 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDExtTreatmentPlan |
| **Copyright/Legal**: CC0-1.0 | |

Extension to reference an external MedicationStatement and the Medication Treatment Plan document that contains it

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH EMED MedicationAdministration (DIS)](StructureDefinition-ch-emed-medicationadministration.md), [CH EMED MedicationDispense (DIS)](StructureDefinition-ch-emed-medicationdispense.md), [CH EMED MedicationRequest (PRE)](StructureDefinition-ch-emed-medicationrequest.md), [CH EMED MedicationStatement (CARD)](StructureDefinition-ch-emed-medicationstatement-card.md)...Show 2 more,[CH EMED MedicationStatement (LIST)](StructureDefinition-ch-emed-medicationstatement-list.md)and[CH EMED Observation (PADV)](StructureDefinition-ch-emed-observation.md)
* Examples for this Extension: [Bundle/1-2-MedicationDispense](Bundle-1-2-MedicationDispense.md), [Bundle/2-1-MedicationList](Bundle-2-1-MedicationList.md), [Bundle/2-2-PharmaceuticalAdvice](Bundle-2-2-PharmaceuticalAdvice.md), [Bundle/2-4-MedicationDispense](Bundle-2-4-MedicationDispense.md)...Show 14 more,[Bundle/2-6-MedicationPrescription](Bundle-2-6-MedicationPrescription.md),[Bundle/2-7-MedicationCard-UUIDfullUrl](Bundle-2-7-MedicationCard-UUIDfullUrl.md),[Bundle/2-7-MedicationCard](Bundle-2-7-MedicationCard.md),[Bundle/PharmaceuticalAdvice-ChangeDosage](Bundle-PharmaceuticalAdvice-ChangeDosage.md),[MedicationDispense/1-2-MedDispTriatec](MedicationDispense-1-2-MedDispTriatec.md),[MedicationDispense/2-1-MedDispTriatec](MedicationDispense-2-1-MedDispTriatec.md),[MedicationDispense/2-4-MedDispBeloczok](MedicationDispense-2-4-MedDispBeloczok.md),[MedicationRequest/2-6-MedReqNorvasc](MedicationRequest-2-6-MedReqNorvasc.md),[MedicationStatement/2-1-MedStatTriatec](MedicationStatement-2-1-MedStatTriatec.md),[MedicationStatement/2-7-MedStatBeloczok](MedicationStatement-2-7-MedStatBeloczok.md),[MedicationStatement/2-7-MedStatNorvasc](MedicationStatement-2-7-MedStatNorvasc.md),[MedicationStatement/NotRecommendedTimingCodes](MedicationStatement-NotRecommendedTimingCodes.md),[Observation/2-2-ObsPharmaceuticalAdvice](Observation-2-2-ObsPharmaceuticalAdvice.md)and[Observation/Obs-ChangeDosage](Observation-Obs-ChangeDosage.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-ext-treatmentplan)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-ext-treatmentplan.csv), [Excel](StructureDefinition-ch-emed-ext-treatmentplan.xlsx), [Schematron](StructureDefinition-ch-emed-ext-treatmentplan.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-ext-treatmentplan",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan",
  "version" : "6.0.0",
  "name" : "CHEMEDExtTreatmentPlan",
  "title" : "CH EMED Extension Treatment Plan",
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
  "description" : "Extension to reference an external MedicationStatement and the Medication Treatment Plan document that contains it",
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
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "MedicationRequest"
    },
    {
      "type" : "element",
      "expression" : "MedicationDispense"
    },
    {
      "type" : "element",
      "expression" : "MedicationStatement"
    },
    {
      "type" : "element",
      "expression" : "Observation"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "CH EMED Extension"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:id",
        "path" : "Extension.extension",
        "sliceName" : "id",
        "short" : "Identifier of the referenced external MedicationStatement",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:id.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:id.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "id"
      },
      {
        "id" : "Extension.extension:id.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-uuid-identifier"
            ]
          }
        ]
      },
      {
        "id" : "Extension.extension:externalDocumentId",
        "path" : "Extension.extension",
        "sliceName" : "externalDocumentId",
        "short" : "Identifier of the referenced external Medication Treatment Plan document",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:externalDocumentId.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:externalDocumentId.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "externalDocumentId"
      },
      {
        "id" : "Extension.extension:externalDocumentId.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-uuid-identifier"
            ]
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "max" : "0"
      }
    ]
  }
}

```
