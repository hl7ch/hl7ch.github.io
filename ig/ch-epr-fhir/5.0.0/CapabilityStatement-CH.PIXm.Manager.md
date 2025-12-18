# PIXm Patient Identifier Cross-reference Manager (server) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PIXm Patient Identifier Cross-reference Manager (server)**

## CapabilityStatement: PIXm Patient Identifier Cross-reference Manager (server) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PIXm.Manager | *Version*:5.0.0 |
| Active as of 2020-07-07 | *Computable Name*:CH_PIXm_Manager |
| **Copyright/Legal**: CC0-1.0 | |

 
The Patient Identifier Cross-reference Manager CapabilityStatement expresses the requirements that shall be provided. - using FHIR R4 - using json and xml encoding - support the $ihe-pix operation - support conditional update for [ITI-104] - support conditional delete for [ITI-104] if Remove Patient Option is supported - used with IHE-IUA 

 [Raw OpenAPI-Swagger Definition file](CH.PIXm.Manager.openapi.json) | [Download](CH.PIXm.Manager.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "CH.PIXm.Manager",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PIXm.Manager",
  "version" : "5.0.0",
  "name" : "CH_PIXm_Manager",
  "title" : "PIXm Patient Identifier Cross-reference Manager (server)",
  "status" : "active",
  "date" : "2020-07-07",
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
  "description" : "The Patient Identifier Cross-reference Manager CapabilityStatement expresses the requirements that shall be provided. - using FHIR R4 - using json and xml encoding - support the $ihe-pix operation - support conditional update for [ITI-104] - support conditional delete for [ITI-104] if Remove Patient Option is supported - used with IHE-IUA",
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
      "mode" : "server",
      "documentation" : "PIXm server resolves the local ID sent with the request to the MPI-PID and EPR-SPID [ITI-83].          PIXm server stores the patient data provided with the request and assigns it to or creates a master patient record and a MPI-PID [ITI-104].",
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
      ],
      "operation" : [
        {
          "name" : "$ihe-pix",
          "definition" : "http://fhir.ch/ig/ch-epr-fhir/OperationDefinition/CH.PIXm"
        }
      ]
    }
  ]
}

```
