# UC 3: Child B - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 3: Child B**

## Example Patient: UC 3: Child B

Language: de-CH

Anonymous Patient (no stated gender), DoB Unknown ( Patient internal identifier: B)

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "UC3-ChildB",
  "language" : "de-CH",
  "identifier" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "PI",
            "display" : "Patient internal identifier"
          }
        ]
      },
      "system" : "http://example.com/identifiers/child",
      "value" : "B"
    }
  ]
}

```
