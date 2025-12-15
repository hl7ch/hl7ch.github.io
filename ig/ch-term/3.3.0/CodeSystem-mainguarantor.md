# Main guarantor - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Main guarantor**

## CodeSystem: Main guarantor 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/mainguarantor | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:Mainguarantor |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for the main guarantor, see[CodeSystem BfsMedstats25Mainguarantor](CodeSystem-bfs-medstats-25-mainguarantor.md). In the Swiss healthcare system, an additional value is used that is not covered by the BFS variables, so the code for supplementary insurance is defined here. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MainGuarantor](ValueSet-mainguarantor.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "mainguarantor",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/mainguarantor",
  "version" : "3.3.0",
  "name" : "Mainguarantor",
  "title" : "Main guarantor",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:36:18+00:00",
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
  "description" : "BFS defines variables for the main guarantor, see [CodeSystem BfsMedstats25Mainguarantor](CodeSystem-bfs-medstats-25-mainguarantor.html). In the Swiss healthcare system, an additional value is used that is not covered by the BFS variables, so the code for supplementary insurance is defined here.",
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
  "count" : 1,
  "concept" : [
    {
      "code" : "ZV",
      "display" : "Zusatzversicherung"
    }
  ]
}

```
