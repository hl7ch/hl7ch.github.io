# Ventilator - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ventilator**

## Example Device: Ventilator

**CH EMS Extension: Owner**: Patient

### DeviceNames

| | | |
| :--- | :--- | :--- |
| - | **Name** | **Type** |
| * | Beatmungsgerät | User Friendly name |



## Resource Content

```json
{
  "resourceType" : "Device",
  "id" : "Device",
  "extension" : [{
    "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-owner",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "116154003",
        "display" : "Patient (person)"
      }],
      "text" : "Patient"
    }
  }],
  "deviceName" : [{
    "name" : "Beatmungsgerät",
    "type" : "user-friendly-name"
  }]
}

```
