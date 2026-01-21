# 1cSR - Order - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1cSR - Order**

## Example ServiceRequest: 1cSR - Order



## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "1cSR-Order",
  "identifier" : [
    {
      "value" : "22000938108"
    }
  ],
  "status" : "completed",
  "intent" : "order",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "697-3",
        "display" : "Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/Pat-001"
  },
  "requester" : {
    "reference" : "PractitionerRole/1cPR-KsAbc"
  },
  "specimen" : [
    {
      "reference" : "Specimen/1Spec-Specimen"
    }
  ]
}

```
