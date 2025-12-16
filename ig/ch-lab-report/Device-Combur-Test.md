# Combur Urin Test Streifen - Device - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Combur Urin Test Streifen - Device**

## Example Device: Combur Urin Test Streifen - Device

Profile: [CH LAB-Report Device: TestKit](StructureDefinition-ch-lab-report-device-test-kit.md)

**identifier**: `http://example.org/Labor-Gantenbein/devices/id`/345111

### UdiCarriers

| | |
| :--- | :--- |
| - | **DeviceIdentifier** |
| * | TK040156333936001 |

**status**: Active

**manufacturer**: Roche

**lotNumber**: lot.444555

**serialNumber**: 1116787

### DeviceNames

| | | |
| :--- | :--- | :--- |
| - | **Name** | **Type** |
| * | Combur-Test Teststreifen | UDI Label name |



## Resource Content

```json
{
  "resourceType" : "Device",
  "id" : "Combur-Test",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-device-test-kit"
    ]
  },
  "identifier" : [
    {
      "system" : "http://example.org/Labor-Gantenbein/devices/id",
      "value" : "345111"
    }
  ],
  "udiCarrier" : [
    {
      "deviceIdentifier" : "TK040156333936001"
    }
  ],
  "status" : "active",
  "manufacturer" : "Roche",
  "lotNumber" : "lot.444555",
  "serialNumber" : "1116787",
  "deviceName" : [
    {
      "name" : "Combur-Test Teststreifen",
      "type" : "udi-label-name"
    }
  ]
}

```
