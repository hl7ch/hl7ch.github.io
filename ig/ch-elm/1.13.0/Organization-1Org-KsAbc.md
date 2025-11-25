# 1Org - Kantonsspital ABC - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1Org - Kantonsspital ABC**

## Example Organization: 1Org - Kantonsspital ABC

**CH ELM Extension: Department**: Abteilung 2

**identifier**: `urn:oid:2.16.756.5.45`/A99684215

**name**: Kantonsspital ABC

**address**: Aortastrasse 22 Bern 3000 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "1Org-KsAbc",
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-department",
      "valueString" : "Abteilung 2"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.45",
      "value" : "A99684215"
    }
  ],
  "name" : "Kantonsspital ABC",
  "address" : [
    {
      "line" : ["Aortastrasse 22"],
      "_line" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
              "valueString" : "Aortastrasse"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
              "valueString" : "22"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-postBox",
              "valueString" : "18"
            }
          ]
        }
      ],
      "city" : "Bern",
      "postalCode" : "3000"
    }
  ]
}

```
