# CH ORF Coverage - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Coverage**

## Resource Profile: CH ORF Coverage 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfCoverage |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile to specify how the coverage is represented. This provides an organization or the individual, which will pay for services requested. 

**Usages:**

* Use this Profile: [CH ORF Document](StructureDefinition-ch-orf-document.md)
* Refer to this Profile: [CH ORF ServiceRequest](StructureDefinition-ch-orf-servicerequest.md)
* Examples for this Profile: [Coverage/CoverageMusterfrau](Coverage-CoverageMusterfrau.md), [Coverage/CoverageSelfPatient](Coverage-CoverageSelfPatient.md) and [Coverage/CoverageSelfRelatedPerson](Coverage-CoverageSelfRelatedPerson.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-coverage)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-coverage.csv), [Excel](StructureDefinition-ch-orf-coverage.xlsx), [Schematron](StructureDefinition-ch-orf-coverage.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-coverage",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage",
  "version" : "3.0.2",
  "name" : "ChOrfCoverage",
  "title" : "CH ORF Coverage",
  "status" : "active",
  "date" : "2025-12-16T09:36:47+00:00",
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
    }
  ],
  "description" : "Profile to specify how the coverage is represented. \nThis provides an organization or the individual, which will pay for services requested.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-coverage",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Coverage",
        "path" : "Coverage",
        "short" : "CH ORF Coverage"
      },
      {
        "id" : "Coverage.contained",
        "path" : "Coverage.contained",
        "mustSupport" : true
      },
      {
        "id" : "Coverage.identifier",
        "path" : "Coverage.identifier"
      },
      {
        "id" : "Coverage.identifier.type",
        "path" : "Coverage.identifier.type",
        "min" : 1,
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-orf/ValueSet/ch-orf-vs-coverageidentifiertype"
        }
      },
      {
        "id" : "Coverage.identifier.type.coding",
        "path" : "Coverage.identifier.type.coding",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Coverage.identifier.type.coding.system",
        "path" : "Coverage.identifier.type.coding.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Coverage.identifier.type.coding.code",
        "path" : "Coverage.identifier.type.coding.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Coverage.identifier.type.text",
        "path" : "Coverage.identifier.type.text",
        "mustSupport" : true
      },
      {
        "id" : "Coverage.identifier.value",
        "path" : "Coverage.identifier.value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Coverage.status",
        "path" : "Coverage.status",
        "mustSupport" : true
      },
      {
        "id" : "Coverage.type",
        "path" : "Coverage.type",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/mainguarantor"
        }
      },
      {
        "id" : "Coverage.beneficiary",
        "path" : "Coverage.beneficiary",
        "mustSupport" : true
      },
      {
        "id" : "Coverage.payor",
        "path" : "Coverage.payor",
        "mustSupport" : true
      }
    ]
  }
}

```
