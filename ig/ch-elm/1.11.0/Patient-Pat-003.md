# Pat - Antoine Dupont - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pat - Antoine Dupont**

## Example Patient: Pat - Antoine Dupont

Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567866)

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Pat-003",
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.32",
      "value" : "7561234567866"
    }
  ],
  "name" : [
    {
      "family" : "Dupont",
      "given" : ["Antoine"]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+41 76 222 55 22"
    }
  ],
  "gender" : "female",
  "birthDate" : "1981-02-07",
  "address" : [
    {
      "use" : "home",
      "line" : ["Rue de la république 10"],
      "_line" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
              "valueString" : "Rue de la république"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
              "valueString" : "10"
            }
          ]
        }
      ],
      "city" : "Carouge",
      "state" : "GE",
      "postalCode" : "1227",
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
