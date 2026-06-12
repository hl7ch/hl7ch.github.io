# ClinicalUseDefinition Indication - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ClinicalUseDefinition Indication**

## Resource Profile: ClinicalUseDefinition Indication 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:CHIDMPClinicalUseDefinitionIndication |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the ClinicalUseDefinition resource for representing an indication. 

**Usages:**

* Use this Profile: [Bundle](StructureDefinition-ch-idmp-bundle.md)
* Examples for this Profile: [ClinicalUseDefinition/IND-10004055](ClinicalUseDefinition-IND-10004055.md), [ClinicalUseDefinition/IND-10046950](ClinicalUseDefinition-IND-10046950.md), [ClinicalUseDefinition/IND-10046961](ClinicalUseDefinition-IND-10046961.md), [ClinicalUseDefinition/IND-10050348](ClinicalUseDefinition-IND-10050348.md)... Show 7 more, [ClinicalUseDefinition/IND-10057352](ClinicalUseDefinition-IND-10057352.md), [ClinicalUseDefinition/IND-10059034](ClinicalUseDefinition-IND-10059034.md), [ClinicalUseDefinition/IND-10060558](ClinicalUseDefinition-IND-10060558.md), [ClinicalUseDefinition/IND-10079528](ClinicalUseDefinition-IND-10079528.md), [ClinicalUseDefinition/IND-10081513](ClinicalUseDefinition-IND-10081513.md), [ClinicalUseDefinition/IND-10081514](ClinicalUseDefinition-IND-10081514.md) and [ClinicalUseDefinition/IND-10084619](ClinicalUseDefinition-IND-10084619.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-idmp|current/StructureDefinition/StructureDefinition-ch-idmp-clinicalusedefinition-indication.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-clinicalusedefinition-indication.csv), [Excel](StructureDefinition-ch-idmp-clinicalusedefinition-indication.xlsx), [Schematron](StructureDefinition-ch-idmp-clinicalusedefinition-indication.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-clinicalusedefinition-indication",
  "url" : "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication",
  "version" : "1.0.0-ballot",
  "name" : "CHIDMPClinicalUseDefinitionIndication",
  "title" : "ClinicalUseDefinition Indication",
  "status" : "active",
  "date" : "2026-06-12T16:17:59+00:00",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "Profile of the ClinicalUseDefinition resource for representing an indication.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "idmp",
    "uri" : "https://www.iso.org/obp/ui/#iso:std:iso:11615",
    "name" : "IDMP Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ClinicalUseDefinition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ClinicalUseDefinition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ClinicalUseDefinition",
      "path" : "ClinicalUseDefinition",
      "short" : "ClincalUseDefinition Indication"
    },
    {
      "id" : "ClinicalUseDefinition.type",
      "path" : "ClinicalUseDefinition.type",
      "patternCode" : "indication"
    },
    {
      "id" : "ClinicalUseDefinition.subject",
      "path" : "ClinicalUseDefinition.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition"]
      }]
    },
    {
      "id" : "ClinicalUseDefinition.indication",
      "path" : "ClinicalUseDefinition.indication",
      "min" : 1
    },
    {
      "id" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding",
      "path" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "system"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding:SMC",
      "path" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding",
      "sliceName" : "SMC",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding:SMC.system",
      "path" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding.system",
      "min" : 1,
      "patternUri" : "https://www.meddra.org"
    },
    {
      "id" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding:SMC.code",
      "path" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding.code",
      "min" : 1
    },
    {
      "id" : "ClinicalUseDefinition.indication.comorbidity.concept",
      "path" : "ClinicalUseDefinition.indication.comorbidity.concept",
      "min" : 1
    },
    {
      "id" : "ClinicalUseDefinition.indication.comorbidity.concept.coding",
      "path" : "ClinicalUseDefinition.indication.comorbidity.concept.coding",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "system"
        }],
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "ClinicalUseDefinition.indication.comorbidity.concept.coding:SMC",
      "path" : "ClinicalUseDefinition.indication.comorbidity.concept.coding",
      "sliceName" : "SMC",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "ClinicalUseDefinition.indication.comorbidity.concept.coding:SMC.system",
      "path" : "ClinicalUseDefinition.indication.comorbidity.concept.coding.system",
      "min" : 1,
      "patternUri" : "https://www.meddra.org"
    },
    {
      "id" : "ClinicalUseDefinition.indication.comorbidity.concept.coding:SMC.code",
      "path" : "ClinicalUseDefinition.indication.comorbidity.concept.coding.code",
      "min" : 1
    },
    {
      "id" : "ClinicalUseDefinition.indication.intendedEffect",
      "path" : "ClinicalUseDefinition.indication.intendedEffect",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/ema-intended-effect"
      }
    }]
  }
}

```
