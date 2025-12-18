# PIXm Patient Identifier Cross-Reference Consumer (client) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PIXm Patient Identifier Cross-Reference Consumer (client)**

## CapabilityStatement: PIXm Patient Identifier Cross-Reference Consumer (client) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PIXm.Consumer | *Version*:5.0.0 |
| Active as of 2020-07-07 | *Computable Name*:CH_PIXm_Consumer |
| **Copyright/Legal**: CC0-1.0 | |

 
The Patient Identifier Cross-reference Consumer Actor CapabilityStatement expresses the requirements that can be utilized while being compliant. - using FHIR R4 - using json or xml encoding - query the $ihe-pix operation 

 [Raw OpenAPI-Swagger Definition file](CH.PIXm.Consumer.openapi.json) | [Download](CH.PIXm.Consumer.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "CH.PIXm.Consumer",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PIXm.Consumer",
  "version" : "5.0.0",
  "name" : "CH_PIXm_Consumer",
  "title" : "PIXm Patient Identifier Cross-Reference Consumer (client)",
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
  "description" : "The Patient Identifier Cross-reference Consumer Actor CapabilityStatement expresses the requirements that can be utilized while being compliant. - using FHIR R4 - using json or xml encoding - query the $ihe-pix operation",
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
      "documentation" : "PIXm client queries the Patient Identifier Crossreference Manager for the MPI-PID and EPR-SPID [ITI-83].",
      "security" : {
        "cors" : false,
        "description" : "TLS SHALL be used together with IUA basic access token"
      },
      "resource" : [
        {
          "type" : "Patient",
          "operation" : [
            {
              "name" : "$ihe-pix",
              "definition" : "http://fhir.ch/ig/ch-epr-fhir/OperationDefinition/CH.PIXm"
            }
          ]
        }
      ]
    }
  ]
}

```
