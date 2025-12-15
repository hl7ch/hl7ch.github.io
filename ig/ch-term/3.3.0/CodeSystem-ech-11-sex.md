# eCH-011 Sex - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-011 Sex**

## CodeSystem: eCH-011 Sex 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/ech-11-sex | *Version*:3.3.0 |
| Active as of 2018-11-12 | *Computable Name*:ECH11sex |
| **Copyright/Legal**: CC0-1.0 | |

 
eCH-011 defines different sex Types. See https://www.ech.ch/vechweb/page?p=dossier&documentNumber=eCH-0011&documentVersion=8.13.3.5 3.3.3.3 sex 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ECH11Sex](ValueSet-ech-11-sex.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ech-11-sex",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-sex",
  "version" : "3.3.0",
  "name" : "ECH11sex",
  "title" : "eCH-011 Sex",
  "status" : "active",
  "experimental" : false,
  "date" : "2018-11-12",
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
  "description" : "eCH-011 defines different sex Types. See https://www.ech.ch/vechweb/page?p=dossier&documentNumber=eCH-0011&documentVersion=8.13.3.5  3.3.3.3 sex",
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
      "code" : "1",
      "display" : "männlich"
    },
    {
      "code" : "2",
      "display" : "weiblich"
    },
    {
      "code" : "3",
      "display" : "unbestimmt"
    }
  ]
}

```
