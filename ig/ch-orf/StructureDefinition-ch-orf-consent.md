# CH ORF Consent - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Consent**

## Resource Profile: CH ORF Consent 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-consent | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfConsent |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile to specify if the patient gave an informed consent to this order; in particulars for spitex and transfer to retirement home etc. 

**Usages:**

* Refer to this Profile: [CH ORF Patient Consent](StructureDefinition-ch-orf-patientconsent.md)
* Examples for this Profile: [Consent/ChOrfConsentSUfferer](Consent-ChOrfConsentSUfferer.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-consent)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-consent.csv), [Excel](StructureDefinition-ch-orf-consent.xlsx), [Schematron](StructureDefinition-ch-orf-consent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-consent",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-consent",
  "version" : "3.0.2",
  "name" : "ChOrfConsent",
  "title" : "CH ORF Consent",
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
  "description" : "Profile to specify if the patient gave an informed consent to this order; in particulars for spitex \nand  transfer to retirement home etc.",
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Consent",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Consent",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Consent",
        "path" : "Consent",
        "short" : "CH ORF Consent"
      },
      {
        "id" : "Consent.extension",
        "path" : "Consent.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Consent.extension:consentCode",
        "path" : "Consent.extension",
        "sliceName" : "consentCode",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-consentcode"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Consent.extension:consentNote",
        "path" : "Consent.extension",
        "sliceName" : "consentNote",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-consentnote"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Consent.status",
        "path" : "Consent.status",
        "patternCode" : "active"
      },
      {
        "id" : "Consent.scope",
        "path" : "Consent.scope",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/consentscope",
              "code" : "patient-privacy"
            }
          ]
        }
      },
      {
        "id" : "Consent.category",
        "path" : "Consent.category",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "59284-0"
            }
          ]
        }
      },
      {
        "id" : "Consent.policyRule",
        "path" : "Consent.policyRule",
        "short" : "Element required due to rule 'ppc-1'. Because it is not applicable in the context of CH ORF, a data absent reason is given."
      },
      {
        "id" : "Consent.policyRule.extension",
        "path" : "Consent.policyRule.extension",
        "min" : 1
      },
      {
        "id" : "Consent.policyRule.extension:data-absent-reason",
        "path" : "Consent.policyRule.extension",
        "sliceName" : "data-absent-reason",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/data-absent-reason|5.3.0-ballot-tc1"
            ]
          }
        ]
      },
      {
        "id" : "Consent.policyRule.extension:data-absent-reason.value[x]",
        "path" : "Consent.policyRule.extension.value[x]",
        "patternCode" : "not-applicable"
      }
    ]
  }
}

```
