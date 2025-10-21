# Pat - Ernst Karl Tanner - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pat - Ernst Karl Tanner**

## Example Patient: Pat - Ernst Karl Tanner

Ernst Karl Tanner Male, DoB: 1966-08-22 ( urn:oid:2.16.756.5.32#7561234567897)

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Pat-006",
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.32",
      "value" : "7561234567897"
    }
  ],
  "name" : [
    {
      "family" : "Tanner",
      "given" : ["Ernst Karl"]
    }
  ],
  "gender" : "male",
  "birthDate" : "1966-08-22",
  "address" : [
    {
      "use" : "home",
      "line" : ["Tannenstrasse 10a"],
      "_line" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
              "valueString" : "Tannenstrasse"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
              "valueString" : "10a"
            }
          ]
        }
      ],
      "city" : "Bern",
      "state" : "BE",
      "postalCode" : "3000",
      "country" : "CH",
      "_country" : {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-SC-coding",
            "valueCoding" : {
              "system" : "urn:iso:std:iso:3166",
              "code" : "CH"
            }
          }
        ]
      }
    }
  ]
}

```
