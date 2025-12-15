# eCH-0046 Email Category - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-0046 Email Category**

## CodeSystem: eCH-0046 Email Category 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/ech-46-emailcategory | *Version*:3.3.0 |
| Active as of 2023-03-10 | *Computable Name*:ECH46EmailCategory |
| **Copyright/Legal**: CC0-1.0 | |

 
eCH-0046 defines different types for e-mail categories. See https://www.ech.ch/de/ech/ech-0046/5.0 4.3.1 emailCategory 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ECH46EmailCategory](ValueSet-ech-46-emailcategory.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ech-46-emailcategory",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-emailcategory",
  "version" : "3.3.0",
  "name" : "ECH46EmailCategory",
  "title" : "eCH-0046 Email Category",
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
  "description" : "eCH-0046 defines different types for e-mail categories. See https://www.ech.ch/de/ech/ech-0046/5.0 4.3.1 emailCategory",
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
          "value" : "private Email-Adresse"
        },
        {
          "language" : "fr-CH",
          "value" : "adresse E-Mail privée"
        }
      ]
    },
    {
      "code" : "2",
      "display" : "business",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "geschäftliche Email-Adresse"
        },
        {
          "language" : "fr-CH",
          "value" : "adresse E-Mail commerciale"
        }
      ]
    }
  ]
}

```
