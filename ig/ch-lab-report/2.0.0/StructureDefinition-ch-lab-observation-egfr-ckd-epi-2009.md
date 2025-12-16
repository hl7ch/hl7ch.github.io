# CH LAB Observation Results: eGFR-CKD-EPI(ASR) 2009 Profile for blacks and non-blacks - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB Observation Results: eGFR-CKD-EPI(ASR) 2009 Profile for blacks and non-blacks**

## Resource Profile: CH LAB Observation Results: eGFR-CKD-EPI(ASR) 2009 Profile for blacks and non-blacks 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr-ckd-epi-2009 | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabObservation_eGFR_CKD_EPI_2009 |
| **Copyright/Legal**: CC0-1.0 | |

 
Renal function can be determined by laboratory measurement of serum creatinine, from which the estimated glomerular (eGFR_CKD_EPI) filtration rate can be calculated. Further input parameters are age, race, gender, body height and weight. 
Use[this calculator:](https://nierenrechner.de/index.php?page=egfr-ckd-rechner)or[GFR Calculators:](http://www.mdrd.com/) 

**Usages:**

* Examples for this Profile: [Observation/Observation-eGFR-CKD-EPI-2009-cr-cys](Observation-Observation-eGFR-CKD-EPI-2009-cr-cys.md) and [Observation/Observation-eGFR-CKD-EPI-2009-cr](Observation-Observation-eGFR-CKD-EPI-2009-cr.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-observation-egfr-ckd-epi-2009)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2009.csv), [Excel](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2009.xlsx), [Schematron](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2009.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-observation-egfr-ckd-epi-2009",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr-ckd-epi-2009",
  "version" : "2.0.0",
  "name" : "ChLabObservation_eGFR_CKD_EPI_2009",
  "title" : "CH LAB Observation Results: eGFR-CKD-EPI(ASR) 2009 Profile for blacks and non-blacks",
  "status" : "active",
  "date" : "2025-12-16T10:27:41+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Renal function can be determined by laboratory measurement of serum creatinine, from \nwhich the estimated glomerular (eGFR_CKD_EPI) filtration rate can be calculated. Further input parameters are age, race, gender, body height and weight.\n \nUse [this calculator:](https://nierenrechner.de/index.php?page=egfr-ckd-rechner)\nor [GFR Calculators:](http://www.mdrd.com/)",
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
      "identity" : "sct-concept",
      "uri" : "http://snomed.info/conceptdomain",
      "name" : "SNOMED CT Concept Domain Binding"
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
    },
    {
      "identity" : "sct-attr",
      "uri" : "http://snomed.org/attributebinding",
      "name" : "SNOMED CT Attribute Binding"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation"
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "short" : "ValueSet for the allowed LOINC codes for eGFR CDK_EPI among blacks and non-blacks",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-lab-report/ValueSet/observation-code-cdk-epi-2009"
        }
      },
      {
        "id" : "Observation.component",
        "path" : "Observation.component",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "code"
            }
          ],
          "description" : "2 possibilities: blacks - non-blacks",
          "ordered" : false,
          "rules" : "closed"
        },
        "min" : 2,
        "max" : "2",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:blacks",
        "path" : "Observation.component",
        "sliceName" : "blacks",
        "short" : "eGFR_CKD_EPI among blacks",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:blacks.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:blacks.code",
        "path" : "Observation.component.code",
        "short" : "eGFR_CKD_EPI among blacks code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "88293-6"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:blacks.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "Lab Result Component Value",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:blacks.value[x]:valueQuantity.value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:blacks.value[x]:valueQuantity.unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:blacks.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "fixedCode" : "mL/min"
      },
      {
        "id" : "Observation.component:non-blacks",
        "path" : "Observation.component",
        "sliceName" : "non-blacks",
        "short" : "eGFR_CKD_EPI among non-blacks",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:non-blacks.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:non-blacks.code",
        "path" : "Observation.component.code",
        "short" : "eGFR_CKD_EPI among non-blacks code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "88294-4"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:non-blacks.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "Lab Result Component Value",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:non-blacks.value[x]:valueQuantity.value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:non-blacks.value[x]:valueQuantity.unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:non-blacks.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "fixedCode" : "mL/min"
      }
    ]
  }
}

```
