# TC Device Aggregator - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC Device Aggregator**

## Example Device: TC Device Aggregator

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601999999981

**status**: Active

**manufacturer**: The Aggregator Company

**manufactureDate**: 2023-01-01

### DeviceNames

| | | |
| :--- | :--- | :--- |
| - | **Name** | **Type** |
| * | Vaccination Aggregator | Manufacturer name |

### Versions

| | |
| :--- | :--- |
| - | **Value** |
| * | v1.0.0 |

**contact**: ph: tel:+41.56.299.55.22(Work), [mailto:resultate@aggregator.ch](mailto:mailto:resultate@aggregator.ch), [http://www.aggregator.ch](http://www.aggregator.ch)

**location**: [Location: status = active; telecom = ph: tel:+41.56.299.55.22(Work),mailto:resultate@labor-messenalles.ch(Work),http://www.labor-messenalles.ch(Work)](Location-TC-Device-Aggregator-Location.md)



## Resource Content

```json
{
  "resourceType" : "Device",
  "id" : "TC-Device-Aggregator",
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601999999981"
    }
  ],
  "status" : "active",
  "manufacturer" : "The Aggregator Company",
  "manufactureDate" : "2023-01-01",
  "deviceName" : [
    {
      "name" : "Vaccination Aggregator",
      "type" : "manufacturer-name"
    }
  ],
  "version" : [
    {
      "value" : "v1.0.0"
    }
  ],
  "contact" : [
    {
      "system" : "phone",
      "value" : "tel:+41.56.299.55.22",
      "use" : "work"
    },
    {
      "system" : "email",
      "value" : "mailto:resultate@aggregator.ch",
      "use" : "work"
    },
    {
      "system" : "url",
      "value" : "http://www.aggregator.ch",
      "use" : "work"
    }
  ],
  "location" : {
    "reference" : "Location/TC-Device-Aggregator-Location"
  }
}

```
