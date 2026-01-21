# Pat - E5 - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pat - E5**

## Example Patient: Pat - E5



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Pat-004",
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.32",
      "value" : "7561234567897"
    }
  ],
  "name" : [
    {
      "extension" : [
        {
          "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-hiv-code",
          "valueString" : "E5"
        }
      ],
      "_family" : {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
            "valueCode" : "masked"
          }
        ]
      },
      "_given" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
              "valueCode" : "masked"
            }
          ]
        }
      ]
    }
  ],
  "gender" : "male",
  "birthDate" : "1966-08-22",
  "address" : [
    {
      "use" : "home",
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
