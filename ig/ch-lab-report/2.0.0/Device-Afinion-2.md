# Afinion™ 2 - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Afinion™ 2**

## Example Device: Afinion™ 2

Profile: [CH LAB-Report Device: Analyzer](StructureDefinition-ch-lab-report-device-analyzer.md)

**identifier**: `http://example.org/Labor-Gantenbein/devices/id`/345675

### UdiCarriers

| | |
| :--- | :--- |
| - | **DeviceIdentifier** |
| * | 040156300936045 |

**status**: Active

**manufacturer**: Abbott

**lotNumber**: lot.112233

**serialNumber**: 987654321

### DeviceNames

| | | |
| :--- | :--- | :--- |
| - | **Name** | **Type** |
| * | Abbott Afinion™ 2 | UDI Label name |



## Resource Content

```json
{
  "resourceType" : "Device",
  "id" : "Afinion-2",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-device-analyzer"
    ]
  },
  "identifier" : [
    {
      "system" : "http://example.org/Labor-Gantenbein/devices/id",
      "value" : "345675"
    }
  ],
  "udiCarrier" : [
    {
      "deviceIdentifier" : "040156300936045"
    }
  ],
  "status" : "active",
  "manufacturer" : "Abbott",
  "lotNumber" : "lot.112233",
  "serialNumber" : "987654321",
  "deviceName" : [
    {
      "name" : "Abbott Afinion™ 2",
      "type" : "udi-label-name"
    }
  ]
}

```
