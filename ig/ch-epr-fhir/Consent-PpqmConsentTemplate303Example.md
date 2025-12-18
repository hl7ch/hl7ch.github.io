# PPQm Consent for template 303 - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PPQm Consent for template 303**

## Example Consent: PPQm Consent for template 303

Template 303 - Full access for a representative



## Resource Content

```json
{
  "resourceType" : "Consent",
  "id" : "PpqmConsentTemplate303Example",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsentTemplate303"
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
      "value" : "urn:uuid:f663289d-4cc4-41d7-a01d-213e18e1f722"
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
      "value" : "303"
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
        "code" : "urn:e-health-suisse:2015:policies:access-level:full"
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
              "code" : "REP"
            }
          ]
        },
        "reference" : {
          "identifier" : {
            "type" : {
              "coding" : [
                {
                  "system" : "urn:ietf:rfc:3986",
                  "code" : "urn:e-health-suisse:representative-id"
                }
              ]
            },
            "value" : "representative12345"
          }
        }
      }
    ]
  }
}

```
