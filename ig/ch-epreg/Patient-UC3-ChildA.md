# UC 3: Child A - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 3: Child A**

## Example Patient: UC 3: Child A

Language: de-CH

Anonymous Patient (no stated gender), DoB Unknown ( Patient internal identifier: A)

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "UC3-ChildA",
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
      "value" : "A"
    }
  ]
}

```
