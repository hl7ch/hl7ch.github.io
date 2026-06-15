# CH EMS Coverage - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Coverage**

## Resource Profile: CH EMS Coverage 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-coverage | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsCoverage |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Coverage resource for representing the insurance information of the patient. 

**Usages:**

* Use this Profile: [CH EMS Document](StructureDefinition-ch-ems-document.md)
* Refer to this Profile: [CH EMS ServiceRequest](StructureDefinition-ch-ems-servicerequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-coverage.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-coverage.csv), [Excel](StructureDefinition-ch-ems-coverage.xlsx), [Schematron](StructureDefinition-ch-ems-coverage.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-coverage",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-coverage",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsCoverage",
  "title" : "CH EMS Coverage",
  "status" : "active",
  "date" : "2026-06-15T08:00:21+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "This profile constrains the Coverage resource for representing the insurance information of the patient.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Coverage",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-coverage",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Coverage",
      "path" : "Coverage",
      "short" : "CH EMS Coverage"
    },
    {
      "id" : "Coverage.contained",
      "path" : "Coverage.contained",
      "mustSupport" : true
    },
    {
      "id" : "Coverage.identifier:insuranceCardNumber",
      "path" : "Coverage.identifier",
      "sliceName" : "insuranceCardNumber",
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Coverage.beneficiary",
      "path" : "Coverage.beneficiary",
      "short" : "Insured patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Coverage.beneficiary.reference",
      "path" : "Coverage.beneficiary.reference",
      "min" : 1
    },
    {
      "id" : "Coverage.payor",
      "path" : "Coverage.payor",
      "short" : "Insurance",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"],
        "aggregation" : ["contained"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Coverage.payor.reference",
      "path" : "Coverage.payor.reference",
      "min" : 1
    }]
  }
}

```
