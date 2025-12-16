# Example of estimated Glomerulum Filtration Rate - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of estimated Glomerulum Filtration Rate**

## Example Observation: Example of estimated Glomerulum Filtration Rate

Profile: [CH LAB Observation Results: eGFR](StructureDefinition-ch-lab-observation-egfr.md)

**status**: Final

**category**: Laboratory

**code**: GFR/1.73 sq M.predicted (S/P/Bld) [Vol rate/Area]

**subject**: [Katarina Keller](Bundle-LabResultReport-4-sepsis.md#urn-uuid-14fbf29b-5dac-483e-b543-15031f12344b)

**effective**: 2024-04-23 11:24:26+0100

**performer**: [BeatBunsen](Bundle-LabResultReport-1-tvt.md#urn-uuid-12328339-f7d6-4bb6-80e4-89fd03ce5052)

**value**: 74 mg/mmol(Details: UCUM codemg/mmol = 'mg/mmol')

### ReferenceRanges

| | |
| :--- | :--- |
| - | **Low** |
| * | 60 mg/mol |



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "Estimated-GFR",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr"
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
        "code" : "69405-9"
      }
    ],
    "text" : "GFR/1.73 sq M.predicted (S/P/Bld) [Vol rate/Area]"
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
    "value" : 74,
    "unit" : "mg/mmol",
    "system" : "http://unitsofmeasure.org",
    "code" : "mg/mmol"
  },
  "referenceRange" : [
    {
      "low" : {
        "value" : 60,
        "unit" : "mg/mol"
      }
    }
  ]
}

```
