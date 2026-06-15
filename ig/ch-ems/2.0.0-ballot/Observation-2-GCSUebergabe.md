# 2 GCS Uebergabe - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2 GCS Uebergabe**

## Example Observation: 2 GCS Uebergabe



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "2-GCSUebergabe",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "9269-2",
      "display" : "Glasgow coma score total"
    }]
  },
  "subject" : {
    "reference" : "Patient/2-PatientUnbekannt"
  },
  "encounter" : {
    "reference" : "Encounter/2-Einsatz"
  },
  "effectiveDateTime" : "2016-12-10T13:03:00.000+01:00",
  "valueQuantity" : {
    "value" : 10,
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
          "valueDecimal" : 3
        }],
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1000154",
        "display" : "bending"
      }],
      "text" : "auf Schmerz Beugesynergismen"
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
          "valueDecimal" : 4
        }],
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1000160",
        "display" : "conversational, disoriented"
      }],
      "text" : "konversationsfähig, desorientierts"
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
          "valueDecimal" : 3
        }],
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1000151",
        "display" : "on request"
      }],
      "text" : "auf Aufforderung"
    }
  }]
}

```
