# UC 1: RelatedPerson Mother - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: RelatedPerson Mother**

## Example RelatedPerson: UC 1: RelatedPerson Mother

Language: de-CH

**patient**: [Anonymous Patient Female, DoB Unknown ( Patient internal identifier: A)](Patient-UC1-Child.md)

**relationship**: Natural mother (person)



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "UC1-RelatedPerson-Mother",
  "language" : "de-CH",
  "patient" : {
    "reference" : "Patient/UC1-Child"
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
