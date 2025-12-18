# PPQm Consent for template 201 - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PPQm Consent for template 201**

## Example Consent: PPQm Consent for template 201

Template 201 - Full access for the patient



## Resource Content

```json
{
  "resourceType" : "Consent",
  "id" : "PpqmConsentTemplate201Example",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsentTemplate201"
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
      "value" : "urn:uuid:57ab9b0d-7d97-4d85-9e4b-02bc7c939ad9"
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
      "value" : "201"
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
              "code" : "PAT"
            }
          ]
        },
        "reference" : {
          "identifier" : {
            "type" : {
              "coding" : [
                {
                  "system" : "urn:ietf:rfc:3986",
                  "code" : "urn:e-health-suisse:2015:epr-spid"
                }
              ]
            },
            "system" : "urn:oid:2.16.756.5.30.1.127.3.10.3",
            "value" : "761337610000000002"
          }
        }
      }
    ]
  }
}

```
