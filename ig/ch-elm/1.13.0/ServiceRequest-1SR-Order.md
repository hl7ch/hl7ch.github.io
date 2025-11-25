# 1SR - Order - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1SR - Order**

## Example ServiceRequest: 1SR - Order

**identifier**: 22000938108

**status**: Completed

**intent**: Order

**code**: Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture

**subject**: [D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-Pat-001.md)

**requester**: [PractitionerRole](PractitionerRole-1PR-KsAbc.md)

**specimen**: [Specimen](Specimen-1Spec-Specimen.md)



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
