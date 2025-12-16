# CH ORF Questionnaire - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Questionnaire**

## Resource Profile: CH ORF Questionnaire 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaire | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfQuestionnaire |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile to define how a CH ORF-conformant Questionnaire resource must be structured. This is independent of the content and content structure of the questionnaire instance itself. 

**Usages:**

* Use this Profile: [CH ORF Document](StructureDefinition-ch-orf-document.md)
* Refer to this Profile: [CH ORF Composition](StructureDefinition-ch-orf-composition.md)
* Examples for this Profile: [OrderReferralForm](Questionnaire-order-referral-form-modular.md) and [OrderReferralForm](Questionnaire-order-referral-form.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-questionnaire)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-questionnaire.csv), [Excel](StructureDefinition-ch-orf-questionnaire.xlsx), [Schematron](StructureDefinition-ch-orf-questionnaire.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-questionnaire",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaire",
  "version" : "3.0.2",
  "name" : "ChOrfQuestionnaire",
  "title" : "CH ORF Questionnaire",
  "status" : "active",
  "date" : "2025-12-16T09:33:08+00:00",
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
  "description" : "Profile to define how a CH ORF-conformant Questionnaire resource must be structured. \nThis is independent of the content and content structure of the questionnaire instance itself.",
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
      "identity" : "objimpl",
      "uri" : "http://hl7.org/fhir/object-implementation",
      "name" : "Object Implementation Information"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Questionnaire",
  "baseDefinition" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Questionnaire",
        "path" : "Questionnaire",
        "short" : "CH ORF Questionnaire"
      }
    ]
  }
}

```
