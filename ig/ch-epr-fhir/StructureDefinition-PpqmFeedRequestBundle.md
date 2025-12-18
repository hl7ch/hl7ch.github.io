# CH PPQm Feed Request Bundle - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PPQm Feed Request Bundle**

## Resource Profile: CH PPQm Feed Request Bundle 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmFeedRequestBundle | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:PpqmFeedRequestBundle |
| **Copyright/Legal**: CC0-1.0 | |

 
Bundle for Mobile Privacy Policy Bundle Feed requests 

**Usages:**

* Examples for this Profile: [Bundle/PpqmFeedRequestBundleAdd](Bundle-PpqmFeedRequestBundleAdd.md), [Bundle/PpqmFeedRequestBundleDelete](Bundle-PpqmFeedRequestBundleDelete.md) and [Bundle/PpqmFeedRequestBundleUpdate](Bundle-PpqmFeedRequestBundleUpdate.md)
* CapabilityStatements using this Profile: [PPQm Policy Repository (server)](CapabilityStatement-CH.PPQm.PolicyRepository.md) and [PPQm Policy Source and Consumer (client)](CapabilityStatement-CH.PPQm.PolicySourceConsumer.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/PpqmFeedRequestBundle)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-PpqmFeedRequestBundle.csv), [Excel](StructureDefinition-PpqmFeedRequestBundle.xlsx), [Schematron](StructureDefinition-PpqmFeedRequestBundle.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "PpqmFeedRequestBundle",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmFeedRequestBundle",
  "version" : "5.0.0",
  "name" : "PpqmFeedRequestBundle",
  "title" : "CH PPQm Feed Request Bundle",
  "status" : "active",
  "date" : "2025-12-18T15:54:33+00:00",
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
  "description" : "Bundle for Mobile Privacy Policy Bundle Feed requests",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Bundle",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "constraint" : [
          {
            "key" : "ch-epr-ppqm-method-equality",
            "severity" : "error",
            "human" : "HTTP methods of all request shall be the same",
            "expression" : "entry.request.method.distinct().count() = 1",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmFeedRequestBundle"
          }
        ]
      },
      {
        "id" : "Bundle.type",
        "path" : "Bundle.type",
        "patternCode" : "transaction"
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "min" : 1,
        "constraint" : [
          {
            "key" : "ch-epr-ppqm-constistent-ids",
            "severity" : "error",
            "human" : "For PUT, policy set ID in the embedded resource shall be the same as in the entry URL",
            "expression" : "(request.method != 'PUT') or (resource.identifier.where(\n                    type.coding.exists((system = 'http://fhir.ch/ig/ch-epr-fhir/CodeSystem/PpqmConsentIdentifierType') and (code = 'policySetId'))\n                ).value.lower() = request.url.substring(19).lower())",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmFeedRequestBundle"
          }
        ]
      },
      {
        "id" : "Bundle.entry.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Consent",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsent"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry.request",
        "path" : "Bundle.entry.request",
        "constraint" : [
          {
            "key" : "ch-epr-ppqm-url-format",
            "severity" : "error",
            "human" : "URL format shall suit the HTTP method",
            "expression" : "(\n                    (method = 'POST') and (url = 'Consent')\n                ) or (\n                    (method != 'POST') and url.startsWith('Consent?identifier=') and url.lower().matches('^consent\\\\?identifier=urn:uuid:[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$')\n                )",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmFeedRequestBundle"
          }
        ]
      },
      {
        "id" : "Bundle.entry.request.method",
        "path" : "Bundle.entry.request.method",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/PpqmFeedRequestHttpMethod"
        }
      },
      {
        "id" : "Bundle.entry.request.ifNoneMatch",
        "path" : "Bundle.entry.request.ifNoneMatch",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry.request.ifModifiedSince",
        "path" : "Bundle.entry.request.ifModifiedSince",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry.request.ifMatch",
        "path" : "Bundle.entry.request.ifMatch",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry.request.ifNoneExist",
        "path" : "Bundle.entry.request.ifNoneExist",
        "max" : "0"
      }
    ]
  }
}

```
