# CH Core Coverage - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Coverage**

## Resource Profile: CH Core Coverage 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-coverage | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreCoverage |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the Coverage resource for use in Swiss specific use cases. 

 
Coverage information which can be shared 

**Usages:**

* Refer to this Profile: [CH Core Claim](StructureDefinition-ch-core-claim.md) and [CH Core ServiceRequest](StructureDefinition-ch-core-servicerequest.md)
* Examples for this Profile: [Coverage/ClaimCoverage](Coverage-ClaimCoverage.md) and [Coverage/CoverageBroennimann](Coverage-CoverageBroennimann.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-coverage)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-coverage.csv), [Excel](StructureDefinition-ch-core-coverage.xlsx), [Schematron](StructureDefinition-ch-core-coverage.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-coverage",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-coverage",
  "version" : "6.0.0",
  "name" : "CHCoreCoverage",
  "title" : "CH Core Coverage",
  "status" : "active",
  "date" : "2025-12-16T07:58:48+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Base definition of the Coverage resource for use in Swiss specific use cases.",
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
  "purpose" : "Coverage information which can be shared",
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "cdanetv4",
      "uri" : "http://www.cda-adc.ca/en/services/cdanet/",
      "name" : "Canadian Dental Association eclaims standard"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "cpha3pharm",
      "uri" : "http://www.pharmacists.ca/",
      "name" : "Canadian Pharmacy Associaiton eclaims standard"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Coverage",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Coverage",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Coverage",
        "path" : "Coverage",
        "short" : "CH Core Coverage",
        "definition" : "This is basic constraint on Coverage for use in CH Core resources."
      },
      {
        "id" : "Coverage.identifier",
        "path" : "Coverage.identifier",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Coverage.identifier:insuranceCardNumber",
        "path" : "Coverage.identifier",
        "sliceName" : "insuranceCardNumber",
        "short" : "Insurance card number of the patient (20 digits)",
        "definition" : "Cardnumber Swiss insurance card v1",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-veka-identifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1"
        }
      },
      {
        "id" : "Coverage.type",
        "path" : "Coverage.type",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/mainguarantor"
        }
      },
      {
        "id" : "Coverage.policyHolder",
        "path" : "Coverage.policyHolder",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "Coverage.subscriber",
        "path" : "Coverage.subscriber",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Coverage.beneficiary",
        "path" : "Coverage.beneficiary",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ]
      },
      {
        "id" : "Coverage.payor",
        "path" : "Coverage.payor",
        "short" : "Issuer of the policy (if it is not the patient him/herself, represent the payor as a contained resource)",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ],
            "aggregation" : ["contained", "referenced"]
          }
        ]
      }
    ]
  }
}

```
