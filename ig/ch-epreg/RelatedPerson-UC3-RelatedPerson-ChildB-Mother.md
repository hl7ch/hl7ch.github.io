# UC 3: RelatedPerson Child B - Mother - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 3: RelatedPerson Child B - Mother**

## Example RelatedPerson: UC 3: RelatedPerson Child B - Mother

Language: de-CH

**patient**: [Anonymous Patient (no stated gender), DoB Unknown ( Patient internal identifier: B)](Patient-UC3-ChildB.md)

**relationship**: Natural mother (person)



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "UC3-RelatedPerson-ChildB-Mother",
  "language" : "de-CH",
  "patient" : {
    "reference" : "Patient/UC3-ChildB"
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
