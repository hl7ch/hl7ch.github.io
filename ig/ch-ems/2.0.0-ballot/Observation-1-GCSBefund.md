# 1 GCS Befund - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 GCS Befund**

## Example Observation: 1 GCS Befund



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1-GCSBefund",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "9269-2",
      "display" : "Glasgow coma score total"
    }]
  },
  "subject" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "effectiveDateTime" : "2016-12-10T12:25:00.000+01:00",
  "valueQuantity" : {
    "value" : 15,
    "system" : "http://unitsofmeasure.org",
    "code" : "{score}"
  },
  "component" : [{
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "9268-4",
        "display" : "Glasgow coma score motor"
      }]
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 6
        }],
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1000157",
        "display" : "take orders"
      }],
      "text" : "befolgt Aufforderungen"
    }
  },
  {
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "9270-0",
        "display" : "Glasgow coma score verbal"
      }]
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 5
        }],
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1000161",
        "display" : "conversational, oriented"
      }],
      "text" : "konversationsfähig, orientiert"
    }
  },
  {
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "9267-6",
        "display" : "Glasgow coma score eye opening"
      }]
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 4
        }],
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1000152",
        "display" : "spontaneous"
      }],
      "text" : "spontan"
    }
  }]
}

```
