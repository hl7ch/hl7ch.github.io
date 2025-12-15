# eCH-011 MaritalData Separation - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-011 MaritalData Separation**

## CodeSystem: eCH-011 MaritalData Separation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritaldata-separation | *Version*:3.3.0 |
| Active as of 2020-10-14 | *Computable Name*:ECH11MaritaldataSeparation |
| **Copyright/Legal**: CC0-1.0 | |

 
eCH-011 defines different maritalData separation zypes. See[maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html)and/or[BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html). 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ECH11MaritaldataSeparation](ValueSet-ech-11-maritaldata-separation.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ech-11-maritaldata-separation",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritaldata-separation",
  "version" : "3.3.0",
  "name" : "ECH11MaritaldataSeparation",
  "title" : "eCH-011 MaritalData Separation",
  "status" : "active",
  "experimental" : false,
  "date" : "2020-10-14",
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
  "description" : "eCH-011 defines different maritalData separation zypes. See [maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html) and/or [BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html).",
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
      "display" : "freiwillig getrennt"
    },
    {
      "code" : "2",
      "display" : "gerichtlich getrennt"
    }
  ]
}

```
