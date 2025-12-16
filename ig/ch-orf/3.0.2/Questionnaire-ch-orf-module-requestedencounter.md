# Module Questionnaire Requested Encounter - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Requested Encounter**

## Questionnaire: Module Questionnaire Requested Encounter 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-requestedencounter | *Version*:3.0.2 |
| Active as of 2022-05-04 | *Computable Name*:ModuleQuestionnaireOrderRequestedEncounter |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-orf-module-requestedencounter",
  "language" : "de-CH",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-requestedencounter",
  "version" : "3.0.2",
  "name" : "ModuleQuestionnaireOrderRequestedEncounter",
  "title" : "Module Questionnaire Order Requested Encounter",
  "status" : "active",
  "date" : "2022-05-04",
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
  "item" : [
    {
      "linkId" : "requestedEncounter.class",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-encounter#Encounter.class",
      "text" : "Voraussichtlich: Ambulant / Stationär / Notfall",
      "type" : "choice",
      "answerOption" : [
        {
          "valueCoding" : {
            "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
            "code" : "AMB",
            "display" : "Ambulant"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
            "code" : "IMP",
            "display" : "Stationär"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
            "code" : "EMER",
            "display" : "Notfall"
          }
        }
      ]
    },
    {
      "linkId" : "requestedEncounter.desiredAccommodation",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-encounter#Encounter.extension",
      "text" : "Zimmerkategorie",
      "type" : "choice",
      "answerOption" : [
        {
          "valueCoding" : {
            "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-21-encountertype",
            "code" : "1",
            "display" : "allgemein"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-21-encountertype",
            "code" : "2",
            "display" : "halbprivat"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-21-encountertype",
            "code" : "3",
            "display" : "privat"
          }
        }
      ]
    }
  ]
}

```
