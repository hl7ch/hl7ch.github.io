# UC 1: Child - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: Child**

## Example Patient: UC 1: Child

Language: de-CH

Anonymous Patient Female, DoB Unknown ( Patient internal identifier: A)

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "UC1-Child",
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
  ],
  "gender" : "female"
}

```
