# UC 1: Composition - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: Composition**

## Example Composition: UC 1: Composition

Language: de-CH

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:7afc1e97-67f8-49a8-91f5-46af596d0609

**status**: Final

**type**: Maternity care plan (record artifact)

**date**: 2025-02-05 10:34:00+0100

**author**: [PractitionerRole Arzt/Ärztin](PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.md)

**title**: Schwangerschaftspass

**confidentiality**: normal



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "UC1-Composition",
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:7afc1e97-67f8-49a8-91f5-46af596d0609"
  },
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "736377005",
        "display" : "Maternity care plan (record artifact)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/UC1-KatrinKinderlieb"
  },
  "date" : "2025-02-05T10:34:00+01:00",
  "author" : [
    {
      "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
    }
  ],
  "title" : "Schwangerschaftspass",
  "confidentiality" : "N",
  "_confidentiality" : {
    "extension" : [
      {
        "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode",
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "17621005",
              "display" : "Normal (qualifier value)"
            }
          ]
        }
      }
    ]
  },
  "section" : [
    {
      "title" : "Stammdaten",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "86638-4",
            "display" : "Patient demographic and administrative information panel [FPAR]"
          }
        ]
      },
      "section" : [
        {
          "title" : "Versicherung",
          "code" : {
            "coding" : [
              {
                "system" : "http://loinc.org",
                "code" : "35525-5",
                "display" : "Clinical trial protocol Financing and insurance section"
              }
            ]
          },
          "text" : {
            "status" : "additional",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p><b>Grundversicherung:</b> Sanitas</p><p><b>Zusatzversicherung:</b> Helsana</p></div>"
          },
          "entry" : [
            {
              "reference" : "Coverage/UC1-BasicInsurance"
            },
            {
              "reference" : "Coverage/UC1-SupplementaryInsurance"
            }
          ]
        },
        {
          "title" : "Elternteil",
          "code" : {
            "coding" : [
              {
                "system" : "http://loinc.org",
                "code" : "54136-7",
                "display" : "Relationship to patient Family member"
              }
            ]
          },
          "text" : {
            "status" : "additional",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p><b>Biologischer Vater:</b> Pierre Kinderlieb</p></div>"
          },
          "entry" : [
            {
              "reference" : "RelatedPerson/UC1-RelatedPerson-BiologicalFather"
            }
          ]
        },
        {
          "title" : "Behandelnde Leistungserbringende",
          "code" : {
            "coding" : [
              {
                "system" : "http://loinc.org",
                "code" : "85847-2",
                "display" : "Patient Care team information"
              }
            ]
          },
          "text" : {
            "status" : "additional",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p><b>Gynäkologin:</b> Petra Sectionata, Frauenzimmer</p><p><b>Hausärztin/Hausarzt:</b> keine</p></div>"
          },
          "entry" : [
            {
              "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
            }
          ]
        }
      ]
    },
    {
      "title" : "Serologische- & Laboruntersuchungen",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "26436-6",
            "display" : "Laboratory studies (set)"
          }
        ]
      },
      "section" : [
        {
          "title" : "Blutbank-Untersuchungen",
          "code" : {
            "coding" : [
              {
                "system" : "http://loinc.org",
                "code" : "18717-9",
                "display" : "Blood bank studies (set)"
              }
            ]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Blutgruppe: AB Rh+, 05.02.2025</li><li>Fetaler RhD: Rh+, 05.02.2025</li></ul></div>"
          },
          "entry" : [
            {
              "reference" : "Observation/UC1-BloodGroup-20250205"
            },
            {
              "reference" : "Observation/UC1-FetalRhD-20250205"
            }
          ]
        },
        {
          "title" : "Klinische Chemie",
          "code" : {
            "coding" : [
              {
                "system" : "http://loinc.org",
                "code" : "18719-5",
                "display" : "Chemistry studies (set)"
              }
            ]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Kreatinin: 1.2 mg/dl (hoch), 05.02.2025</li><li>Harnsäure: 6.3 mg/dl (hoch), 05.02.2025</li><li>GFR: 54 ml/min, 05.02.2025</li><li>GGT: 43 U/l, 05.02.2025</li><li>GOT/AST/ASAT: 43 U/l, 05.02.2025</li><li>ALAT: 98 U/l, 05.02.2025</li><li>AP: 109 U/l, 05.02.2025</li><li>Glucose: 8.1 mmol/l, 05.02.2025</li></ul></div>"
          },
          "entry" : [
            {
              "reference" : "Observation/UC1-Creatinine-20250205"
            },
            {
              "reference" : "Observation/UC1-Urate-20250205"
            },
            {
              "reference" : "Observation/UC1-GFR-20250205"
            },
            {
              "reference" : "Observation/UC1-GGT-20250205"
            },
            {
              "reference" : "Observation/UC1-AST-20250205"
            },
            {
              "reference" : "Observation/UC1-ALAT-20250205"
            },
            {
              "reference" : "Observation/UC1-AP-20250205"
            },
            {
              "reference" : "Observation/UC1-GlucoseLab-20250205"
            }
          ]
        },
        {
          "title" : "Hämatologie",
          "code" : {
            "coding" : [
              {
                "system" : "http://loinc.org",
                "code" : "18723-7",
                "display" : "Hematology studies (set)"
              }
            ]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Hkt: 46 %, 05.02.2025</li><li>Thrombozyten: 130, 05.02.2025</li></ul></div>"
          },
          "entry" : [
            {
              "reference" : "Observation/UC1-Hematocrit-20250205"
            },
            {
              "reference" : "Observation/UC1-Platelets-20250205"
            }
          ]
        }
      ]
    },
    {
      "title" : "Schwangerschaftsverlauf",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "57059-8",
            "display" : "Pregnancy visit summary note Narrative"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><b>Untersuchung vom 05.02.2025</b><ul><li>SSW: 37</li><li>Gewicht: 82.0 kg</li><li>Gewichtszunahme: 12.5 kg</li><li>Blutdruck: 160/100 mmHg</li><li>Urin: Zucker positiv, Nitrit positiv</li><li>Bauchumfang: 101 cm</li><li>Fundusstand: Rb/0</li><li>Vaginalbefund: bland</li><li>Kindsbewegung: normal</li><li>Herztöne: 162 /min</li><li>Kindslage: Schädellage</li></ul><b>Untersuchung vom 23.01.2025</b><ul><li>SSW: 35</li><li>Gewicht: 80.6 kg</li><li>Gewichtszunahme: 11.1 kg</li><li>Blutdruck: 120/80 mmHg</li></ul></div>"
      },
      "entry" : [
        {
          "reference" : "Encounter/UC1-EncounterMother20250205"
        },
        {
          "reference" : "Encounter/UC1-EncounterMother20250123"
        },
        {
          "reference" : "Encounter/UC1-EncounterChild20250205"
        },
        {
          "reference" : "Encounter/UC1-EncounterChild20250123"
        },
        {
          "reference" : "Observation/UC1-GestationalAgeInDays-20250205"
        },
        {
          "reference" : "Observation/UC1-GestationalAgeInDays-20250123"
        },
        {
          "reference" : "Observation/UC1-BodyWeight-20250205"
        },
        {
          "reference" : "Observation/UC1-BodyWeight-20250123"
        },
        {
          "reference" : "Observation/UC1-WeightGain-20250205"
        },
        {
          "reference" : "Observation/UC1-WeightGain-20250123"
        },
        {
          "reference" : "Observation/UC1-BloodPressure-20250205"
        },
        {
          "reference" : "Observation/UC1-UrineFinding-20250205"
        },
        {
          "reference" : "Observation/UC1-AbdominalCircumference-20250205"
        },
        {
          "reference" : "Observation/UC1-FundusHeight-20250205"
        },
        {
          "reference" : "Observation/UC1-VaginaFeature-20250205"
        },
        {
          "reference" : "Observation/UC1-BloodPressure-20250123"
        },
        {
          "reference" : "Observation/UC1-FetalMovement-20250205"
        },
        {
          "reference" : "Observation/UC1-FetalHeartFeature-20250205"
        },
        {
          "reference" : "Observation/UC1-FetalPosition-20250205"
        }
      ]
    }
  ]
}

```
