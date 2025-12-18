# PIXm Patient Identity Source (client) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PIXm Patient Identity Source (client)**

## CapabilityStatement: PIXm Patient Identity Source (client) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PIXm.Source | *Version*:5.0.0 |
| Active as of 2020-07-09 | *Computable Name*:CH_PIXm_Source |
| **Copyright/Legal**: CC0-1.0 | |

 
The Patient Identity Source Actor CapabilityStatement expresses the requirements that can be utilized while being compliant. - using FHIR R4 - using json or xml encoding - using conditional update for [ITI-104] - provide supported Patient profile for cross-referencing for [ITI-104] 

 [Raw OpenAPI-Swagger Definition file](CH.PIXm.Source.openapi.json) | [Download](CH.PIXm.Source.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "CH.PIXm.Source",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PIXm.Source",
  "version" : "5.0.0",
  "name" : "CH_PIXm_Source",
  "title" : "PIXm Patient Identity Source (client)",
  "status" : "active",
  "date" : "2020-07-09",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "The Patient Identity Source Actor CapabilityStatement expresses the requirements that can be utilized while being compliant. - using FHIR R4 - using json or xml encoding - using conditional update for [ITI-104] - provide supported Patient profile for cross-referencing for [ITI-104]",
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
  "kind" : "requirements",
  "fhirVersion" : "4.0.1",
  "format" : ["application/fhir+xml", "application/fhir+json"],
  "rest" : [
    {
      "mode" : "client",
      "documentation" : "PIXm client registers data of a specific patient in the Patient Identifier Cross-reference Manager [ITI-104].",
      "security" : {
        "cors" : false,
        "description" : "TLS SHALL be used together with IUA basic access token"
      },
      "resource" : [
        {
          "type" : "Patient",
          "supportedProfile" : [
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-patient-feed"
          ],
          "interaction" : [
            {
              "code" : "update",
              "documentation" : "conditional update for [ITI-104]"
            }
          ],
          "conditionalUpdate" : true
        }
      ]
    }
  ]
}

```
