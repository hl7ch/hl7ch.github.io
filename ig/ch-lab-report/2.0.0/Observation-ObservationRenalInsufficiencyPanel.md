# Observation Results: Renal Insufficiency Panel - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation Results: Renal Insufficiency Panel**

## Example Observation: Observation Results: Renal Insufficiency Panel

Profile: [CH LAB-Report Observation Results: Renal Insufficiency Panel](StructureDefinition-ch-lab-observation-renal-insufficiency-panel.md)

**status**: Final

**category**: Laboratory

**code**: Renal insufficiency (disorder)

**subject**: [Katarina Keller](Bundle-LabResultReport-4-sepsis.md#urn-uuid-14fbf29b-5dac-483e-b543-15031f12344b)

**effective**: 2024-04-23 11:24:26+0100

**performer**: [BeatBunsen](Bundle-LabResultReport-1-tvt.md#urn-uuid-12328339-f7d6-4bb6-80e4-89fd03ce5052)

**hasMember**: 

* [Observation Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (CKD-EPI 2021)/1.73 sq M](Observation-Result-egfr-cr-ckd-epi-2021.md)
* [Observation Albumin/Creatinine [Ratio] in Urine](Observation-AlbuminCreatininRatioUrin.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationRenalInsufficiencyPanel",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-renal-insufficiency-panel"
    ]
  },
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "723188008"
      }
    ]
  },
  "subject" : {
    "reference" : "urn:uuid:14fbf29b-5dac-483e-b543-15031f12344b",
    "display" : "Katarina Keller"
  },
  "effectiveDateTime" : "2024-04-23T11:24:26+01:00",
  "performer" : [
    {
      "reference" : "urn:uuid:12328339-f7d6-4bb6-80e4-89fd03ce5052",
      "display" : "BeatBunsen"
    }
  ],
  "hasMember" : [
    {
      "reference" : "Observation/Result-egfr-cr-ckd-epi-2021"
    },
    {
      "reference" : "Observation/AlbuminCreatininRatioUrin"
    }
  ]
}

```
