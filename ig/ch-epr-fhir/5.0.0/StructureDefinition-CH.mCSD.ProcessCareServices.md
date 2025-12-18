# Transaction Bundle Profile for ITI-130 Process Care Services Resources Request Message - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transaction Bundle Profile for ITI-130 Process Care Services Resources Request Message**

## Resource Profile: Transaction Bundle Profile for ITI-130 Process Care Services Resources Request Message 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.ProcessCareServices | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:ChmCSDProcessCareServices |
| **Copyright/Legal**: CC0-1.0 | |

 
A profile on the Bundle transaction for ITI-130 Process Care Services Resources Request Message 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/CH.mCSD.ProcessCareServices)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-CH.mCSD.ProcessCareServices.csv), [Excel](StructureDefinition-CH.mCSD.ProcessCareServices.xlsx), [Schematron](StructureDefinition-CH.mCSD.ProcessCareServices.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "CH.mCSD.ProcessCareServices",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.ProcessCareServices",
  "version" : "5.0.0",
  "name" : "ChmCSDProcessCareServices",
  "title" : "Transaction Bundle Profile for ITI-130 Process Care Services Resources Request Message",
  "status" : "active",
  "date" : "2025-12-18T15:42:00+00:00",
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
  "description" : "A profile on the Bundle transaction for ITI-130 Process Care Services Resources Request Message",
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
        "patternCode" : "transaction"
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resource"
            }
          ],
          "description" : "Slicing based on the profile conformance of the entry",
          "rules" : "open"
        }
      },
      {
        "id" : "Bundle.entry.resource",
        "path" : "Bundle.entry.resource",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry.request",
        "path" : "Bundle.entry.request",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry.request.method",
        "path" : "Bundle.entry.request.method",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/restricted-http-verb-vs"
        }
      },
      {
        "id" : "Bundle.entry:MCSDPractitioner",
        "path" : "Bundle.entry",
        "sliceName" : "MCSDPractitioner",
        "short" : "Practitioner",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:MCSDPractitioner.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Practitioner",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Practitioner"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:MCSDPractitionerRole",
        "path" : "Bundle.entry",
        "sliceName" : "MCSDPractitionerRole",
        "short" : "PractitionerRole",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:MCSDPractitionerRole.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "PractitionerRole",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.PractitionerRole"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:MCSDOrganization",
        "path" : "Bundle.entry",
        "sliceName" : "MCSDOrganization",
        "short" : "Organization",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:MCSDOrganization.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Organization",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Organization"
            ]
          }
        ]
      }
    ]
  }
}

```
