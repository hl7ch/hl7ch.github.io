# eCH-011 MaritalStatus - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-011 MaritalStatus**

## CodeSystem: eCH-011 MaritalStatus 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus | *Version*:3.3.0 |
| Active as of 2018-11-12 | *Computable Name*:ECH11maritalstatus |
| **Copyright/Legal**: CC0-1.0 | |

 
eCH-011 defines different maritalStatus Types. See[maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html)and/or[BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html). 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChCoreMaritalStatus](ValueSet-ch-core-maritalstatus.md)
* [ECH11MaritalStatus](ValueSet-ech-11-maritalstatus.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ech-11-maritalstatus",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
  "version" : "3.3.0",
  "name" : "ECH11maritalstatus",
  "title" : "eCH-011 MaritalStatus",
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
  "description" : "eCH-011 defines different maritalStatus Types. See [maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html) and/or [BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html).",
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
      "display" : "ledig"
    },
    {
      "code" : "2",
      "display" : "verheiratet"
    },
    {
      "code" : "3",
      "display" : "verwitwet"
    },
    {
      "code" : "4",
      "display" : "geschieden"
    },
    {
      "code" : "5",
      "display" : "unverheiratet"
    },
    {
      "code" : "6",
      "display" : "in eingetragener Partnerschaft"
    },
    {
      "code" : "7",
      "display" : "aufgelöste Partnerschaft"
    },
    {
      "code" : "9",
      "display" : "unbekannt"
    }
  ]
}

```
