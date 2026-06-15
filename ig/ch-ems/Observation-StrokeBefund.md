# Stroke Befund - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Stroke Befund**

## Example Observation: Stroke Befund



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "StrokeBefund",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "716800008",
      "display" : "Face Arm Speech Test score (observable entity)"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "encounter" : {
    "reference" : "Encounter/EncounterExample"
  },
  "effectiveDateTime" : "2016-12-10T12:25:00.000+01:00",
  "component" : [{
    "extension" : [{
      "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-laterality",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "24028007",
          "display" : "Right (qualifier value)"
        }]
      }
    }],
    "code" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "89545001",
        "display" : "Face structure (body structure)"
      }]
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "373066001",
        "display" : "Yes (qualifier value)"
      }]
    }
  },
  {
    "code" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "53120007",
        "display" : "Upper limb structure (body structure)"
      }]
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "373067005",
        "display" : "No (qualifier value)"
      }]
    }
  },
  {
    "code" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "87335007",
        "display" : "Speaking (observable entity)"
      }]
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "261665006",
        "display" : "Unknown (qualifier value)"
      }]
    }
  }]
}

```
