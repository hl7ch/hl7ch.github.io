# mCSD Directory (server) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD Directory (server)**

## CapabilityStatement: mCSD Directory (server) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.mCSD.Directory | *Version*:5.0.0 |
| Active as of 2024-03-18 | *Computable Name*:CH_mCSD_Directory |
| **Copyright/Legal**: CC0-1.0 | |

 
CapabilityStatement for Server Actor in the IHE IT Infrastructure Technical Framework Supplement IHE mCSD. 

 [Raw OpenAPI-Swagger Definition file](CH.mCSD.Directory.openapi.json) | [Download](CH.mCSD.Directory.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "CH.mCSD.Directory",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.mCSD.Directory",
  "version" : "5.0.0",
  "name" : "CH_mCSD_Directory",
  "title" : "mCSD Directory (server)",
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
  "description" : "CapabilityStatement for Server Actor in the IHE IT Infrastructure Technical Framework Supplement IHE mCSD.",
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
      "documentation" : "IHE ITI mCSD ITI-90 & ITI-130 endpoints",
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
            },
            {
              "code" : "read"
            },
            {
              "code" : "search-type"
            }
          ],
          "versioning" : "no-version",
          "searchInclude" : ["Organization.endpoint"],
          "searchRevInclude" : [
            "Location:organization",
            "OrganizationAffiliation:participating-organization",
            "OrganizationAffiliation:primary-organization"
          ],
          "searchParam" : [
            {
              "name" : "active",
              "type" : "token"
            },
            {
              "name" : "identifier",
              "type" : "token"
            },
            {
              "name" : "name",
              "type" : "string"
            },
            {
              "name" : "name:contains",
              "type" : "string"
            },
            {
              "name" : "name:exact",
              "type" : "string"
            },
            {
              "name" : "partof",
              "type" : "reference"
            },
            {
              "name" : "type",
              "type" : "token"
            }
          ]
        },
        {
          "type" : "Practitioner",
          "profile" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Practitioner",
          "interaction" : [
            {
              "code" : "create"
            },
            {
              "code" : "update"
            },
            {
              "code" : "delete"
            },
            {
              "code" : "read"
            },
            {
              "code" : "search-type"
            }
          ],
          "versioning" : "no-version",
          "searchParam" : [
            {
              "name" : "active",
              "type" : "token"
            },
            {
              "name" : "identifier",
              "type" : "token"
            },
            {
              "name" : "name",
              "type" : "string"
            },
            {
              "name" : "name:contains",
              "type" : "string"
            },
            {
              "name" : "name:exact",
              "type" : "string"
            },
            {
              "name" : "given",
              "type" : "string"
            },
            {
              "name" : "given:contains",
              "type" : "string"
            },
            {
              "name" : "given:exact",
              "type" : "string"
            },
            {
              "name" : "family",
              "type" : "string"
            },
            {
              "name" : "family:contains",
              "type" : "string"
            },
            {
              "name" : "family:exact",
              "type" : "string"
            }
          ]
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
            },
            {
              "code" : "read"
            },
            {
              "code" : "search-type"
            }
          ],
          "versioning" : "no-version",
          "searchInclude" : ["PractitionerRole:practitioner"],
          "searchParam" : [
            {
              "name" : "active",
              "type" : "token"
            },
            {
              "name" : "location",
              "type" : "reference"
            },
            {
              "name" : "organization",
              "type" : "reference"
            },
            {
              "name" : "role",
              "type" : "token"
            },
            {
              "name" : "service",
              "type" : "reference"
            },
            {
              "name" : "specialty",
              "type" : "token"
            }
          ]
        }
      ],
      "interaction" : [
        {
          "code" : "transaction"
        }
      ],
      "searchParam" : [
        {
          "name" : "_id",
          "type" : "token"
        },
        {
          "name" : "_lastUpdated",
          "type" : "token",
          "documentation" : "The values for this shall support these prefixes: ge and le"
        }
      ]
    }
  ]
}

```
