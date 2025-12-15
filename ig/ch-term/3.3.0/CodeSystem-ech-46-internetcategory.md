# eCH-0046 Internet Category - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-0046 Internet Category**

## CodeSystem: eCH-0046 Internet Category 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/ech-46-internetcategory | *Version*:3.3.0 |
| Active as of 2023-03-10 | *Computable Name*:ECH46InternetCategory |
| **Copyright/Legal**: CC0-1.0 | |

 
eCH-0046 defines different types for internet categories. See https://www.ech.ch/de/ech/ech-0046/5.0 4.5.1 internetCategory 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ECH46InternetCategory](ValueSet-ech-46-internetcategory.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ech-46-internetcategory",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-internetcategory",
  "version" : "3.3.0",
  "name" : "ECH46InternetCategory",
  "title" : "eCH-0046 Internet Category",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-03-10",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "eCH-0046 defines different types for internet categories. See https://www.ech.ch/de/ech/ech-0046/5.0 4.5.1 internetCategory",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "1",
      "display" : "private",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "private Internet-Adresse"
        },
        {
          "language" : "fr-CH",
          "value" : "adresse Internet privée"
        }
      ]
    },
    {
      "code" : "2",
      "display" : "business",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "geschäftliche Internet-Adresse"
        },
        {
          "language" : "fr-CH",
          "value" : "adresse Internet commerciale"
        }
      ]
    }
  ]
}

```
