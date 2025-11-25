# Pat - Lilly Liechtenstein - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pat - Lilly Liechtenstein**

## Example Patient: Pat - Lilly Liechtenstein

Lilly Liechtenstein Female, DoB: 2000-09-14 ( urn:oid:2.16.438.10.20.10.10.1.2.1#1234567890123)

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Pat-007",
  "identifier" : [
    {
      "system" : "urn:oid:2.16.438.10.20.10.10.1.2.1",
      "value" : "1234567890123"
    }
  ],
  "name" : [
    {
      "family" : "Liechtenstein",
      "given" : ["Lilly"]
    }
  ],
  "gender" : "female",
  "birthDate" : "2000-09-14",
  "address" : [
    {
      "use" : "home",
      "state" : "FL",
      "country" : "LI",
      "_country" : {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-SC-coding",
            "valueCoding" : {
              "system" : "urn:iso:std:iso:3166",
              "code" : "LI"
            }
          }
        ]
      }
    }
  ]
}

```
