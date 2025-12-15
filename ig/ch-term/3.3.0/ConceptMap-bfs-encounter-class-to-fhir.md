# BFS Encounter Class to FHIR mapping - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Encounter Class to FHIR mapping**

## ConceptMap: BFS Encounter Class to FHIR mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ConceptMap/bfs-encounter-class-to-fhir | *Version*:3.3.0 |
| Active as of 2019-04-23 | *Computable Name*:BfsEncounterClassToFhir |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS Encounter Class to FHIR mapping 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "bfs-encounter-class-to-fhir",
  "url" : "http://fhir.ch/ig/ch-core/ConceptMap/bfs-encounter-class-to-fhir",
  "version" : "3.3.0",
  "name" : "BfsEncounterClassToFhir",
  "title" : "BFS Encounter Class to FHIR mapping",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-04-23",
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
  "description" : "BFS Encounter Class to FHIR mapping",
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
  "sourceUri" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-20-encounterclass",
  "targetUri" : "http://terminology.hl7.org/ValueSet/v3-ActEncounterCode",
  "group" : [
    {
      "source" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-20-encounterclass",
      "target" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
      "element" : [
        {
          "code" : "1",
          "display" : "ambulant",
          "target" : [
            {
              "code" : "AMB",
              "display" : "ambulatory",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "3",
          "display" : "stationär",
          "target" : [
            {
              "code" : "IMP",
              "display" : "inpatient encounter",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "9",
          "display" : "unbekannt",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        }
      ]
    }
  ]
}

```
