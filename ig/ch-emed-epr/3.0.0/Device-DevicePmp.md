# Device: PMP Aggregator - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Device: PMP Aggregator**

## Example Device: Device: PMP Aggregator

Profile: [CH EMED EPR Device](StructureDefinition-ch-emed-epr-device.md)

### DeviceNames

| | | |
| :--- | :--- | :--- |
| - | **Name** | **Type** |
| * | PMP CARA v0.1 | Model name |

**type**: Pharmaceutical information system application software (physical object)

### Versions

| | |
| :--- | :--- |
| - | **Value** |
| * | 8153cba |

**owner**: [Organization Association CARA](Bundle-BundleUtc1Pml.md#urn-uuid-dd9fd2e4-92d4-4a56-bda2-cf921e432eea)



## Resource Content

```json
{
  "resourceType" : "Device",
  "id" : "DevicePmp",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-device"
    ]
  },
  "deviceName" : [
    {
      "name" : "PMP CARA v0.1",
      "type" : "model-name"
    }
  ],
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "701612004",
        "display" : "Pharmaceutical information system application software (physical object)"
      }
    ]
  },
  "version" : [
    {
      "value" : "8153cba"
    }
  ],
  "owner" : {
    "reference" : "urn:uuid:dd9fd2e4-92d4-4a56-bda2-cf921e432eea"
  }
}

```
