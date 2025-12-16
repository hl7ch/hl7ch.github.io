# Entry Conflict Code System - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Entry Conflict Code System**

## CodeSystem: Entry Conflict Code System 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-entry-conflict-cs | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:EntryConflictCodesystem |
| **Copyright/Legal**: CC0-1.0 | |

 
The entry conflict codesystem 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CHVACDEntryConflictCode](ValueSet-ch-vacd-entry-conflict-vs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-vacd-entry-conflict-cs",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2021-12-21T00:00:00+01:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-entry-conflict-cs",
  "version" : "6.0.0",
  "name" : "EntryConflictCodesystem",
  "title" : "Entry Conflict Code System",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T09:56:56+00:00",
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
    }
  ],
  "description" : "The entry conflict codesystem",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
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
      "code" : "duplicate",
      "display" : "duplicate",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Duplikat"
        },
        {
          "language" : "fr-CH",
          "value" : "doublon"
        },
        {
          "language" : "it-CH",
          "value" : "duplicare"
        },
        {
          "language" : "rm-CH",
          "value" : "duplicat"
        },
        {
          "language" : "en-US",
          "value" : "duplicate"
        }
      ]
    }
  ]
}

```
