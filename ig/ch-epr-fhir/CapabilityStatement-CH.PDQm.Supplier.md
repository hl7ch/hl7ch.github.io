# PDQm Supplier (server) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PDQm Supplier (server)**

## CapabilityStatement: PDQm Supplier (server) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PDQm.Supplier | *Version*:5.0.0 |
| Active as of 2024-10-15 | *Computable Name*:CH_PDQm_Supplier |
| **Copyright/Legal**: CC0-1.0 | |

 
CapabilityStatement for Server Actor in the IHE IT Infrastructure Technical Framework Supplement IHE PDQm. 

 [Raw OpenAPI-Swagger Definition file](CH.PDQm.Supplier.openapi.json) | [Download](CH.PDQm.Supplier.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "CH.PDQm.Supplier",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PDQm.Supplier",
  "version" : "5.0.0",
  "name" : "CH_PDQm_Supplier",
  "title" : "PDQm Supplier (server)",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-10-15",
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
  "description" : "CapabilityStatement for Server Actor in the IHE IT Infrastructure Technical Framework Supplement IHE PDQm.",
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
      "documentation" : "PDQm server provides capability to query for Patient resources matching a FHIR Patient resource",
      "security" : {
        "cors" : false,
        "description" : "TLS SHALL be used together with IUA basic access token"
      },
      "resource" : [
        {
          "type" : "Patient",
          "supportedProfile" : [
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pdqm-patient"
          ],
          "operation" : [
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/StructureDefinition/capabilitystatement-expectation",
                  "valueCode" : "SHALL"
                }
              ],
              "name" : "match",
              "definition" : "http://fhir.ch/ig/ch-epr-fhir/OperationDefinition/CHPDQmMatch",
              "documentation" : "Implementation SHALL conform to [ITI-119](iti-119.html)"
            }
          ]
        }
      ],
      "interaction" : [
        {
          "code" : "search-system"
        }
      ]
    }
  ]
}

```
