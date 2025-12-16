# Albumin Creatinin Ratio Urin - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Albumin Creatinin Ratio Urin**

## Example Observation: Albumin Creatinin Ratio Urin

Profile: [CH LAB-Report Observation Results: Albumin/Creatinine Ratio in Urine](StructureDefinition-ch-lab-observation-albumin-creatinine-urine-ratio.md)

**status**: Final

**category**: Laboratory

**code**: Albumin/Creatinine [Ratio] in Urine

**subject**: [Katarina Keller](Bundle-LabResultReport-4-sepsis.md#urn-uuid-14fbf29b-5dac-483e-b543-15031f12344b)

**effective**: 2024-04-23 11:24:26+0100

**performer**: [BeatBunsen](Bundle-LabResultReport-1-tvt.md#urn-uuid-12328339-f7d6-4bb6-80e4-89fd03ce5052)

**value**: 2.8 mg/mmol(Details: UCUM codemg/mmol = 'mg/mmol')

**specimen**: [Specimen: type = Urine specimen (specimen)](Specimen-Urin.md)

### ReferenceRanges

| | |
| :--- | :--- |
| - | **High** |
| * | 3 mg/mmol |



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "AlbuminCreatininRatioUrin",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-albumin-creatinine-urine-ratio"
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
        "system" : "http://loinc.org",
        "code" : "32294-1"
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
  "valueQuantity" : {
    "value" : 2.8,
    "unit" : "mg/mmol",
    "system" : "http://unitsofmeasure.org",
    "code" : "mg/mmol"
  },
  "specimen" : {
    "reference" : "Specimen/Urin"
  },
  "referenceRange" : [
    {
      "high" : {
        "value" : 3,
        "unit" : "mg/mmol"
      }
    }
  ]
}

```
