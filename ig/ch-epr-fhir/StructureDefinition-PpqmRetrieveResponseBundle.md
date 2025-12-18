# CH PPQm Retrieve Response Bundle - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PPQm Retrieve Response Bundle**

## Resource Profile: CH PPQm Retrieve Response Bundle 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmRetrieveResponseBundle | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:PpqmRetrieveResponseBundle |
| **Copyright/Legal**: CC0-1.0 | |

 
Bundle for Mobile Privacy Policy Retrieve responses 

**Usages:**

* Examples for this Profile: [Bundle/PpqmRetrieveResponseBundle](Bundle-PpqmRetrieveResponseBundle.md)
* CapabilityStatements using this Profile: [PPQm Policy Repository (server)](CapabilityStatement-CH.PPQm.PolicyRepository.md) and [PPQm Policy Source and Consumer (client)](CapabilityStatement-CH.PPQm.PolicySourceConsumer.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/PpqmRetrieveResponseBundle)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-PpqmRetrieveResponseBundle.csv), [Excel](StructureDefinition-PpqmRetrieveResponseBundle.xlsx), [Schematron](StructureDefinition-PpqmRetrieveResponseBundle.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "PpqmRetrieveResponseBundle",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmRetrieveResponseBundle",
  "version" : "5.0.0",
  "name" : "PpqmRetrieveResponseBundle",
  "title" : "CH PPQm Retrieve Response Bundle",
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
  "description" : "Bundle for Mobile Privacy Policy Retrieve responses",
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
        "path" : "Bundle"
      },
      {
        "id" : "Bundle.type",
        "path" : "Bundle.type",
        "patternCode" : "searchset"
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
      }
    ]
  }
}

```
