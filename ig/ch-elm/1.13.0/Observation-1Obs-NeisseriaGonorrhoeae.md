# 1Obs - Neisseria Gonorrhoeae - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1Obs - Neisseria Gonorrhoeae**

## Example Observation: 1Obs - Neisseria Gonorrhoeae

**status**: Final

**category**: Laboratory

**code**: Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture

**subject**: [D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-Pat-001.md)

**effective**: 2023-07-14 11:10:00+0200

**performer**: [Organization SanLab](Organization-1Org-Labor.md)

**value**: Positive

**interpretation**: Positive

**specimen**: [Specimen](Specimen-1Spec-Specimen.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1Obs-NeisseriaGonorrhoeae",
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory",
          "display" : "Laboratory"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "697-3",
        "display" : "Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/Pat-001"
  },
  "effectiveDateTime" : "2023-07-14T11:10:00+02:00",
  "performer" : [
    {
      "reference" : "Organization/1Org-Labor"
    }
  ],
  "valueCodeableConcept" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "10828004",
        "display" : "Positive"
      }
    ]
  },
  "interpretation" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",
          "code" : "POS",
          "display" : "Positive"
        }
      ]
    }
  ],
  "specimen" : {
    "reference" : "Specimen/1Spec-Specimen"
  }
}

```
