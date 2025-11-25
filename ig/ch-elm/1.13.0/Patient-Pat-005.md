# Pat - ET - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pat - ET**

## Example Patient: Pat - ET

E T Male, DoB: 1966-08-22 ( urn:oid:2.16.756.5.32#7561234567897)

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Pat-005",
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.32",
      "value" : "7561234567897"
    }
  ],
  "name" : [
    {
      "family" : "T",
      "given" : ["E"]
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
