# UC 3: 64 kg (10.02.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 3: 64 kg (10.02.2025)**

## Example Observation: UC 3: 64 kg (10.02.2025)

Language: de-CH

**status**: Final

**category**: Vital Signs

**code**: Body weight

**subject**: [Sophie Doppelherz Female, DoB: 1992-07-22 ( Medical record number)](Patient-UC3-SophieDoppelherz.md)

**encounter**: [Encounter: extension = 1; status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-10 --> 2025-02-10](Encounter-UC3-EncounterMother20250210.md)

**effective**: 2025-02-10

**performer**: [PractitionerRole Arzt/Ärztin](PractitionerRole-UC3-ClaudiaFruehblickAtFrauenzimmer.md)

**value**: 64 kilogram(Details: UCUM codekg = 'kg')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "UC3-BodyWeight-20250210",
  "language" : "de-CH",
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs",
          "display" : "Vital Signs"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "29463-7",
        "display" : "Body weight"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/UC3-SophieDoppelherz"
  },
  "encounter" : {
    "reference" : "Encounter/UC3-EncounterMother20250210"
  },
  "effectiveDateTime" : "2025-02-10",
  "performer" : [
    {
      "reference" : "PractitionerRole/UC3-ClaudiaFruehblickAtFrauenzimmer"
    }
  ],
  "valueQuantity" : {
    "value" : 64,
    "unit" : "kilogram",
    "system" : "http://unitsofmeasure.org",
    "code" : "kg"
  }
}

```
