# MaritalStatus eCH-011 to FHIR mapping - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MaritalStatus eCH-011 to FHIR mapping**

## ConceptMap: MaritalStatus eCH-011 to FHIR mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ConceptMap/maritalstatus-ech11-to-fhir | *Version*:3.3.0 |
| Active as of 2018-11-26 | *Computable Name*:MaritalStatusECH011ToFHIRMapping |
| **Copyright/Legal**: CC0-1.0 | |

 
MaritalStatus mapping from eCH-011 to FHIR. See[maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html)and/or[BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html). 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "maritalstatus-ech11-to-fhir",
  "url" : "http://fhir.ch/ig/ch-core/ConceptMap/maritalstatus-ech11-to-fhir",
  "version" : "3.3.0",
  "name" : "MaritalStatusECH011ToFHIRMapping",
  "title" : "MaritalStatus eCH-011 to FHIR mapping",
  "status" : "active",
  "experimental" : false,
  "date" : "2018-11-26",
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
  "description" : "MaritalStatus mapping from eCH-011 to FHIR. See [maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html) and/or [BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html).",
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
  "sourceUri" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-maritalstatus",
  "group" : [
    {
      "source" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
      "target" : "http://terminology.hl7.org/CodeSystem/v3-MaritalStatus",
      "element" : [
        {
          "code" : "1",
          "display" : "ledig",
          "target" : [
            {
              "code" : "S",
              "display" : "Never married",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "2",
          "display" : "verheiratet",
          "target" : [
            {
              "code" : "M",
              "display" : "Married",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "3",
          "display" : "verwitwet",
          "target" : [
            {
              "code" : "W",
              "display" : "Widowed",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "4",
          "display" : "geschieden",
          "target" : [
            {
              "code" : "D",
              "display" : "Divorced",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "5",
          "display" : "unverheiratet",
          "target" : [
            {
              "code" : "A",
              "display" : "Annulled",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "6",
          "display" : "in eingetragener Partnerschaft",
          "target" : [
            {
              "code" : "M",
              "display" : "Married",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "7",
          "display" : "aufgelöste Partnerschaft",
          "target" : [
            {
              "code" : "D",
              "display" : "Divorced",
              "equivalence" : "equivalent"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
      "target" : "http://terminology.hl7.org/CodeSystem/v3-NullFlavor",
      "element" : [
        {
          "code" : "9",
          "display" : "unbekannt",
          "target" : [
            {
              "code" : "UNK",
              "display" : "unknown",
              "equivalence" : "equivalent"
            }
          ]
        }
      ]
    }
  ]
}

```
