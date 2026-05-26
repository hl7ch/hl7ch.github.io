# Pat - VCT with extension (deprecated) - CH ELM (R4) v1.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pat - VCT with extension (deprecated)**

## Example Patient: Pat - VCT with extension (deprecated)



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Pat-VCT-Deprecated",
  "name" : [{
    "extension" : [{
      "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-vct-code",
      "valueString" : "kste12345"
    }],
    "_family" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
        "valueCode" : "masked"
      }]
    },
    "_given" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
        "valueCode" : "masked"
      }]
    }]
  }],
  "gender" : "male",
  "birthDate" : "1966-08-22",
  "address" : [{
    "use" : "home",
    "city" : "Bern",
    "state" : "BE",
    "postalCode" : "3000",
    "country" : "CH",
    "_country" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-codedString",
        "valueCoding" : {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      }]
    }
  }]
}

```
