# Blood Group coded Result with Components ABO, RhD, Antibody Screen Test and DAT - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Blood Group coded Result with Components ABO, RhD, Antibody Screen Test and DAT**

## Example Observation: Blood Group coded Result with Components ABO, RhD, Antibody Screen Test and DAT

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

> **component****code**:Blutgruppe**value**:A

> **component****code**:Rhesus D / Untergruppe**value**:positiv

> **component****code**:Antikörpersuchtest**value**:negativ

> **component****code**:DAT (IgG)**value**:negativ

> **component****code**:DAT (C3d)**value**:negativ



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "BloodGroup-codedResult-2",
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
            "code" : "883-9",
            "display" : "ABO group [Type] in Blood"
          }
        ],
        "text" : "Blutgruppe"
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "112144000",
            "display" : "Blood group A"
          }
        ],
        "text" : "A"
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
        "text" : "Rhesus D / Untergruppe"
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "165747007",
            "display" : "RhD positive"
          }
        ],
        "text" : "positiv"
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
        "text" : "Antikörpersuchtest"
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "568111000005107",
            "display" : "Irregular blood group antibody not detected"
          }
        ],
        "text" : "negativ"
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "55776-9",
            "display" : "Direct antiglobulin test.IgG specific reagent [Presence] on Red Blood Cells"
          }
        ],
        "text" : "DAT (IgG)"
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "260415000",
            "display" : "Not detected"
          }
        ],
        "text" : "negativ"
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "55774-4",
            "display" : "Direct antiglobulin test.complement C3d specific reagent [Presence] on Red Blood Cells"
          }
        ],
        "text" : "DAT (C3d)"
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "260415000",
            "display" : "Not detected"
          }
        ],
        "text" : "negativ"
      }
    }
  ]
}

```
