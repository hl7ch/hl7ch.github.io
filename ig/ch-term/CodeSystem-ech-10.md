# eCH-010 Types - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-010 Types**

## CodeSystem: eCH-010 Types 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/ech-10 | *Version*:3.3.0 |
| Active as of 2018-11-27 | *Computable Name*:ECH11CodeSystem |
| **Copyright/Legal**: CC0-1.0 | |

 
eCH-010 defines different Types for a postal address 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ECH10AddressLine](ValueSet-ech-10-linetype.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ech-10",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-10",
  "version" : "3.3.0",
  "name" : "ECH11CodeSystem",
  "title" : "eCH-010 Types",
  "status" : "active",
  "experimental" : false,
  "date" : "2018-11-27",
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
  "description" : "eCH-010 defines different Types for a postal address",
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
  "compositional" : false,
  "versionNeeded" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "addressLine1",
      "display" : "addressLine1"
    },
    {
      "code" : "addressLine2",
      "display" : "addressLine2"
    },
    {
      "code" : "street",
      "display" : "street"
    },
    {
      "code" : "postOfficeBoxText",
      "display" : "postOfficeBoxText"
    }
  ]
}

```
