# UC 3: Composition - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 3: Composition**

## Example Composition: UC 3: Composition

Language: de-CH

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:064d9096-5f85-4aa1-8bd9-d3b6397eff29

**status**: Final

**type**: Maternity care plan (record artifact)

**date**: 2025-02-10 15:45:00+0100

**author**: [PractitionerRole Arzt/Ärztin](PractitionerRole-UC3-ClaudiaFruehblickAtFrauenzimmer.md)

**title**: Schwangerschaftspass

**confidentiality**: normal



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "UC3-Composition",
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:064d9096-5f85-4aa1-8bd9-d3b6397eff29"
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
    "reference" : "Patient/UC3-SophieDoppelherz"
  },
  "date" : "2025-02-10T15:45:00+01:00",
  "author" : [
    {
      "reference" : "PractitionerRole/UC3-ClaudiaFruehblickAtFrauenzimmer"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p><b>Gynäkologin:</b> Claudia Frühblick, Frauenzimmer</p></div>"
          },
          "entry" : [
            {
              "reference" : "PractitionerRole/UC3-ClaudiaFruehblickAtFrauenzimmer"
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
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><b>Untersuchung vom 10.02.2025</b><ul><li>SSW: 7</li><li>Gewicht: 64 kg</li><li>Blutdruck: 120/75 mmHg</li><li>Urin: bland</li><li>Herztöne Kind A: 155 /min</li><li>Herztöne Kind B: 155 /min</li><li>Nächste Kontrolle: 10.03.2025</li></ul></div>"
      },
      "entry" : [
        {
          "reference" : "Encounter/UC3-EncounterMother20250210"
        },
        {
          "reference" : "Encounter/UC3-EncounterChildA20250210"
        },
        {
          "reference" : "Encounter/UC3-EncounterChildB20250210"
        },
        {
          "reference" : "Observation/UC3-GestationalAgeInDays-20250210"
        },
        {
          "reference" : "Observation/UC3-BodyWeight-20250210"
        },
        {
          "reference" : "Observation/UC3-BloodPressure-20250210"
        },
        {
          "reference" : "Observation/UC3-UrineFinding-20250210"
        },
        {
          "reference" : "Observation/UC3-FetalHeartFeatureChildA-20250210"
        },
        {
          "reference" : "Observation/UC3-FetalHeartFeatureChildB-20250210"
        },
        {
          "reference" : "Appointment/UC3-Appointment20250310"
        }
      ]
    }
  ]
}

```
