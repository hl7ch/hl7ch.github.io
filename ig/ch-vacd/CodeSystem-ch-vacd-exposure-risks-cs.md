# Swiss Exposure Risks Codesystem - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Swiss Exposure Risks Codesystem**

## CodeSystem: Swiss Exposure Risks Codesystem 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-exposure-risks-cs | *Version*:7.0.0-ballot |
| Active as of 2026-06-11 | *Computable Name*:SwissExposureRisksCodesystem |
| **Copyright/Legal**: CC0-1.0 | |

 
Exposure risks codes available in Switzerland. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SwissOccupationRisksForImmunizations](ValueSet-ch-vacd-risks-occupation-vs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-vacd-exposure-risks-cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
    "valuePeriod" : {
      "start" : "2021-01-24T00:00:00+01:00"
    }
  }],
  "url" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-exposure-risks-cs",
  "version" : "7.0.0-ballot",
  "name" : "SwissExposureRisksCodesystem",
  "title" : "Swiss Exposure Risks Codesystem",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-11T13:35:24+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "Exposure risks codes available in Switzerland.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 1,
  "concept" : [{
    "code" : "100002",
    "display" : "Social workers, prison staff, police with frequent contact with drug users",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Sozialarbeiter, Gefängnispersonal, Polizei mit häufigem Kontakt zu Drogenkonsumenten"
    },
    {
      "language" : "fr-CH",
      "value" : "Travailleurs sociaux, personnel des prisons et de la police en contact fréquent avec des consommateurs de drogues"
    },
    {
      "language" : "it-CH",
      "value" : "Social workers, prison staff, police with frequent contact with drug users"
    },
    {
      "language" : "rm-CH",
      "value" : "Social workers, prison staff, police with frequent contact with drug users"
    },
    {
      "language" : "en-US",
      "value" : "Social workers, prison staff, police with frequent contact with drug users"
    }]
  }]
}

```
