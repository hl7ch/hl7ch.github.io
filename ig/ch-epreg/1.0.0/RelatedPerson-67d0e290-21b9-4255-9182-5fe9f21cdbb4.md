# UC 2: RelatedPerson Mother - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 2: RelatedPerson Mother**

## Example RelatedPerson: UC 2: RelatedPerson Mother

Language: de-CH

**patient**: [Kind](Bundle-UC2-Document.md#urn-uuid-111d5e66-f17e-4369-90c6-9382e566040e)

**relationship**: Natural mother (person)



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "67d0e290-21b9-4255-9182-5fe9f21cdbb4",
  "language" : "de-CH",
  "patient" : {
    "reference" : "urn:uuid:111d5e66-f17e-4369-90c6-9382e566040e",
    "display" : "Kind"
  },
  "relationship" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "65656005",
          "display" : "Natural mother (person)"
        }
      ]
    }
  ]
}

```
