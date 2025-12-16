# CH LAB-Report Observation Results: eGFR-CKD-EPI(AS) 2021 Creatinin/Cystatin-C based Profile - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Observation Results: eGFR-CKD-EPI(AS) 2021 Creatinin/Cystatin-C based Profile**

## Resource Profile: CH LAB-Report Observation Results: eGFR-CKD-EPI(AS) 2021 Creatinin/Cystatin-C based Profile 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr-ckd-epi-2021 | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabObservation_eGFR_CKD_EPI_2021 |
| **Copyright/Legal**: CC0-1.0 | |

 
Glomerular filtration rate (GFR) is considered the best overall index of kidney function; however measured GFR is not practical in the routine clinical setting. Estimated glomerular filtration rate (eGFR) is a suitable alternative and can be calculated for adults >= 18 years using an equation incorporating the patient's age, gender, and measured serum/plasma/blood creatinine only (eGFRcr) (this term) or both serum/plasma/blood creatinine and serum/plasma cystatin-C (eGFRcr-cys)[LOINC: 98979-8](https://loinc.org/98979-8/). The serum/plasma/blood creatinine value is based on a measurement procedure that is traceable to the isotope dilution mass spectrometry (IDMS) reference measurement procedure for creatinine. The 2021 CKD-EPI equations used for eGFRcr and eGFRcr-cys do not have a race term as does the older estimating equations that they replace.[https://www.nejm.org/doi/pdf/10.1056/NEJMoa2102953](https://www.nejm.org/doi/pdf/10.1056/NEJMoa2102953) 
There is a[corresponding calculator](https://www.kidney.org/professionals/gfr_calculator) 
For children below 18 y there is a[Pediatric GFR Calculator](https://www.kidney.org/professionals/kdoqi/gfr_calculatorPed) 

**Usages:**

* Refer to this Profile: [CH LAB-Report Observation Results: Renal Insufficiency Panel](StructureDefinition-ch-lab-observation-renal-insufficiency-panel.md)
* Examples for this Profile: [Observation/Result-egfr-cr-ckd-epi-2021](Observation-Result-egfr-cr-ckd-epi-2021.md) and [Observation/Result-egfr-cr-cys-ckd-epi-2021](Observation-Result-egfr-cr-cys-ckd-epi-2021.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-observation-egfr-ckd-epi-2021)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2021.csv), [Excel](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2021.xlsx), [Schematron](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2021.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-observation-egfr-ckd-epi-2021",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr-ckd-epi-2021",
  "version" : "2.0.0",
  "name" : "ChLabObservation_eGFR_CKD_EPI_2021",
  "title" : "CH LAB-Report Observation Results: eGFR-CKD-EPI(AS) 2021 Creatinin/Cystatin-C based Profile",
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
  "description" : "Glomerular filtration rate (GFR) is considered the best overall index of kidney function; \nhowever measured GFR is not practical in the routine clinical setting. Estimated glomerular filtration \nrate (eGFR) is a suitable alternative and can be calculated for adults >= 18 years using an equation \nincorporating the patient's age, gender, and measured serum/plasma/blood creatinine only (eGFRcr) (this term) \nor both serum/plasma/blood creatinine and serum/plasma cystatin-C (eGFRcr-cys) [LOINC: 98979-8](https://loinc.org/98979-8/).\nThe serum/plasma/blood creatinine value is based on a measurement procedure that is traceable to the isotope dilution\nmass spectrometry (IDMS) reference measurement procedure for creatinine. The 2021 CKD-EPI equations used for \neGFRcr and eGFRcr-cys do not have a race term as does the older estimating equations that they replace.\n[https://www.nejm.org/doi/pdf/10.1056/NEJMoa2102953](https://www.nejm.org/doi/pdf/10.1056/NEJMoa2102953)\n\nThere is a [corresponding calculator](https://www.kidney.org/professionals/gfr_calculator)\n\nFor children below 18 y there is a [Pediatric GFR Calculator](https://www.kidney.org/professionals/kdoqi/gfr_calculatorPed)",
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
        "short" : "ValueSet for the allowed LOINC codes aiming at Creatinin / Creatinin and Cystatin C based eGFR",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-lab-report/ValueSet/observation-code-cdk-epi-2021"
        }
      }
    ]
  }
}

```
