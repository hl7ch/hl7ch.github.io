# 1SR - Order - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1SR - Order**

## Example ServiceRequest: 1SR - Order



## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "1SR-Order",
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
    "reference" : "PractitionerRole/1PR-KsAbc"
  },
  "specimen" : [
    {
      "reference" : "Specimen/1Spec-Specimen"
    }
  ]
}

```
