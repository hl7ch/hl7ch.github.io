# mCSD Data Source (client) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD Data Source (client)**

## CapabilityStatement: mCSD Data Source (client) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.mCSD.DataSource | *Version*:5.0.0 |
| Active as of 2024-03-18 | *Computable Name*:CH_mCSD_Data_Source |
| **Copyright/Legal**: CC0-1.0 | |

 
CapabilityStatement for Data Source Actor in the IHE IT Infrastructure Technical Framework Supplement IHE mCSD. 

 [Raw OpenAPI-Swagger Definition file](CH.mCSD.DataSource.openapi.json) | [Download](CH.mCSD.DataSource.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "CH.mCSD.DataSource",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.mCSD.DataSource",
  "version" : "5.0.0",
  "name" : "CH_mCSD_Data_Source",
  "title" : "mCSD Data Source (client)",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-03-18",
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
  "description" : "CapabilityStatement for Data Source Actor in the IHE IT Infrastructure Technical Framework Supplement IHE mCSD.",
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
      "documentation" : "IHE ITI mCSD ITI-130 endpoint",
      "resource" : [
        {
          "type" : "Organization",
          "profile" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Organization",
          "interaction" : [
            {
              "code" : "create"
            },
            {
              "code" : "update"
            },
            {
              "code" : "delete"
            }
          ],
          "versioning" : "no-version"
        },
        {
          "type" : "Practitioner",
          "profile" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Feed.Practitioner",
          "interaction" : [
            {
              "code" : "create"
            },
            {
              "code" : "update"
            },
            {
              "code" : "delete"
            }
          ],
          "versioning" : "no-version"
        },
        {
          "type" : "PractitionerRole",
          "profile" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.PractitionerRole",
          "interaction" : [
            {
              "code" : "create"
            },
            {
              "code" : "update"
            },
            {
              "code" : "delete"
            }
          ],
          "versioning" : "no-version"
        }
      ],
      "interaction" : [
        {
          "code" : "transaction"
        }
      ]
    }
  ]
}

```
