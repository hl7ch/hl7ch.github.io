# Helicopter Ambulance - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Helicopter Ambulance**

## Example Location: Helicopter Ambulance



## Resource Content

```json
{
  "resourceType" : "Location",
  "id" : "LocationAmbulance",
  "extension" : [{
    "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-disinfection",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1000124",
        "display" : "nebulize with H2O2"
      }],
      "text" : "Vernebelung H2O2"
    }
  }],
  "physicalType" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "469233002",
      "display" : "Helicopter ambulance (physical object)"
    }],
    "text" : "Rettungshelikopter"
  }
}

```
