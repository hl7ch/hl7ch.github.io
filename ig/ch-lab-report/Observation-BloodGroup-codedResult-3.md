# Blood Group coded Result with Components Hemoglobine, ABO, RhD, Rh Phenotype and Antibody Results - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Blood Group coded Result with Components Hemoglobine, ABO, RhD, Rh Phenotype and Antibody Results**

## Example Observation: Blood Group coded Result with Components Hemoglobine, ABO, RhD, Rh Phenotype and Antibody Results

Profile: [CH LAB-Report Observation Results: Blood Group](StructureDefinition-ch-lab-observation-blood-group.md)

**identifier**: `http://example.org/Labor-Pipette/labvalues`/1304-03760-blood-group-component

**status**: Final

**category**: Laboratory, Blood banking and transfusion medicine (specialty) (qualifier value), Blood bank studies (set)

**code**: Blood typing, ABO, Rho(D) and red blood cell antibody screening (procedure)

**subject**: [Hans Guggindieluft](Bundle-LabResultReport-1-tvt.md#urn-uuid-6b8a0365-5022-403b-a5a5-8d8680d701ef)

**effective**: 2024-04-23 11:24:26+0100

**issued**: 2024-04-24 11:24:26+0100

**performer**: [Eva Erlenmeyer](Bundle-LabResultReport-1-tvt.md#urn-uuid-12328339-f7d6-4bb6-80e4-89fd03ce5052)

**method**: Serotyping (qualifier value)

> **component****code**:Hämoglobin**value**: 130 g/L(Details: UCUM codeg/L = 'g/L')

### ReferenceRanges

| | | |
| :--- | :--- | :--- |
| - | **Low** | **High** |
| * | 121 g/L(Details: UCUM codeg/L = 'g/L') | 154 g/L(Details: UCUM codeg/L = 'g/L') |


> **component****code**:ValBG**value**:B negativ

> **component****code**:Rhesus-Phänotyp**value**: ccddee

> **component****code**:Antikörper**value**:Antikörper: Anti-C

> **component****code**:Antikörper**value**:Antikörper: Anti-K



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "BloodGroup-codedResult-3",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-blood-group"
    ]
  },
  "identifier" : [
    {
      "system" : "http://example.org/Labor-Pipette/labvalues",
      "value" : "1304-03760-blood-group-component"
    }
  ],
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "421661004",
          "display" : "Blood banking and transfusion medicine (specialty) (qualifier value)"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "http://loinc.org",
          "code" : "18717-9",
          "display" : "Blood bank studies (set)"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "20099001"
      }
    ],
    "text" : "Blood typing, ABO, Rho(D) and red blood cell antibody screening (procedure)"
  },
  "subject" : {
    "reference" : "urn:uuid:6b8a0365-5022-403b-a5a5-8d8680d701ef",
    "display" : "Hans Guggindieluft"
  },
  "effectiveDateTime" : "2024-04-23T11:24:26+01:00",
  "issued" : "2024-04-24T11:24:26+01:00",
  "performer" : [
    {
      "reference" : "urn:uuid:12328339-f7d6-4bb6-80e4-89fd03ce5052",
      "display" : "Eva Erlenmeyer"
    }
  ],
  "method" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "258075003",
        "display" : "Serotyping (qualifier value)"
      }
    ]
  },
  "component" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "718-7",
            "display" : "Hemoglobin [Mass/volume] in Blood"
          }
        ],
        "text" : "Hämoglobin"
      },
      "valueQuantity" : {
        "value" : 130,
        "unit" : "g/L",
        "system" : "http://unitsofmeasure.org",
        "code" : "g/L"
      },
      "referenceRange" : [
        {
          "low" : {
            "value" : 121,
            "unit" : "g/L",
            "system" : "http://unitsofmeasure.org",
            "code" : "g/L"
          },
          "high" : {
            "value" : 154,
            "unit" : "g/L",
            "system" : "http://unitsofmeasure.org",
            "code" : "g/L"
          }
        }
      ]
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "882-1",
            "display" : "ABO and Rh group [Type] in Blood"
          }
        ],
        "text" : "ValBG"
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "278153001",
            "display" : "Blood group B Rh(D) negative"
          }
        ],
        "text" : "B negativ"
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "10331-7",
            "display" : "Rh [Type] in Blood"
          }
        ],
        "text" : "Rhesus-Phänotyp"
      },
      "valueString" : "ccddee"
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "890-4",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma"
          }
        ],
        "text" : "Antikörper"
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "35068008",
            "display" : "Blood group antibody C"
          }
        ],
        "text" : "Antikörper: Anti-C"
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "890-4",
            "display" : "Blood group antibody screen [Presence] in Serum or Plasma"
          }
        ],
        "text" : "Antikörper"
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "83404001",
            "display" : "Blood group antibody K"
          }
        ],
        "text" : "Antikörper: Anti-K"
      }
    }
  ]
}

```
