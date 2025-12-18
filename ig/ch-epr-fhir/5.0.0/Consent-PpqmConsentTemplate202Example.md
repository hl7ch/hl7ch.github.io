# PPQm Consent for template 202 - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PPQm Consent for template 202**

## Example Consent: PPQm Consent for template 202

Template 202 - Read access in emergency mode



## Resource Content

```json
{
  "resourceType" : "Consent",
  "id" : "PpqmConsentTemplate202Example",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsentTemplate202"
    ]
  },
  "identifier" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://fhir.ch/ig/ch-epr-fhir/CodeSystem/PpqmConsentIdentifierType",
            "code" : "policySetId"
          }
        ]
      },
      "value" : "urn:uuid:bf6c1fb6-2eb9-49ad-b96b-1a4ac55fc7bd"
    },
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://fhir.ch/ig/ch-epr-fhir/CodeSystem/PpqmConsentIdentifierType",
            "code" : "templateId"
          }
        ]
      },
      "value" : "202"
    }
  ],
  "status" : "active",
  "scope" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/consentscope",
        "code" : "patient-privacy"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
          "code" : "INFA"
        }
      ]
    }
  ],
  "patient" : {
    "identifier" : {
      "system" : "urn:oid:2.16.756.5.30.1.127.3.10.3",
      "value" : "761337610000000002"
    }
  },
  "policyRule" : {
    "coding" : [
      {
        "system" : "urn:ietf:rfc:3986",
        "code" : "urn:e-health-suisse:2015:policies:access-level:normal"
      }
    ]
  },
  "provision" : {
    "actor" : [
      {
        "role" : {
          "coding" : [
            {
              "system" : "urn:oid:2.16.756.5.30.1.127.3.10.6",
              "code" : "HCP"
            }
          ]
        },
        "reference" : {
          "display" : "all"
        }
      }
    ],
    "purpose" : [
      {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.10.5",
        "code" : "EMER"
      }
    ]
  }
}

```
