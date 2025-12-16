# TC_Device Aggregator Location - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC_Device Aggregator Location**

## Example Location: TC_Device Aggregator Location

**status**: Active

**telecom**: ph: tel:+41.56.299.55.22(Work), [mailto:resultate@labor-messenalles.ch](mailto:mailto:resultate@labor-messenalles.ch), [http://www.labor-messenalles.ch](http://www.labor-messenalles.ch)

**address**: Messweg 1 Wissen ZG 6310 CH 



## Resource Content

```json
{
  "resourceType" : "Location",
  "id" : "TC-Device-Aggregator-Location",
  "status" : "active",
  "telecom" : [
    {
      "system" : "phone",
      "value" : "tel:+41.56.299.55.22",
      "use" : "work"
    },
    {
      "system" : "email",
      "value" : "mailto:resultate@labor-messenalles.ch",
      "use" : "work"
    },
    {
      "system" : "url",
      "value" : "http://www.labor-messenalles.ch",
      "use" : "work"
    }
  ],
  "address" : {
    "line" : ["Messweg 1"],
    "city" : "Wissen",
    "state" : "ZG",
    "postalCode" : "6310",
    "country" : "CH"
  }
}

```
