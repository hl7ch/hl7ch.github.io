# Pat - VCT - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pat - VCT**

## Example Patient: Pat - VCT

null null Male, DoB: 1966-08-22

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Pat-VCT",
  "name" : [
    {
      "extension" : [
        {
          "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-vct-code",
          "valueString" : "kste12345"
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
