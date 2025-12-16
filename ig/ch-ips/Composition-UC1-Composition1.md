# UC 1.1: Composition - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.1: Composition**

## Example Composition: UC 1.1: Composition

Language: de-CH

Profile: [CH IPS Composition](StructureDefinition-ch-ips-composition.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.3.0/NamingSystem-uri.html)/urn:uuid:22f9773e-1a6b-4561-8642-849f15b43b02

**status**: Final

**type**: Patient summary Document

**date**: 2024-01-11 10:00:00+0100

**author**: [PractitionerRole](PractitionerRole-FamilienHausarztAtHausarzt.md)

**title**: Patient Summary for IPS Switerland

**confidentiality**: normal

### Attesters

| | | |
| :--- | :--- | :--- |
| - | **Mode** | **Party** |
| * | Legal | [Practitioner Familien Hausarzt](Practitioner-FamilienHausarzt.md) |

**custodian**: [Organization Hausarzt](Organization-Hausarzt.md)

### Events

| | | |
| :--- | :--- | :--- |
| - | **Code** | **Period** |
| * | care provision | ?? --> 2024-01-11 10:00:00+0100 |



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "UC1-Composition1",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-composition"
    ]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:22f9773e-1a6b-4561-8642-849f15b43b02"
  },
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "60591-5",
        "display" : "Patient summary Document"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  },
  "date" : "2024-01-11T10:00:00+01:00",
  "author" : [
    {
      "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
    }
  ],
  "title" : "Patient Summary for IPS Switerland",
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
  "attester" : [
    {
      "mode" : "legal",
      "party" : {
        "reference" : "Practitioner/FamilienHausarzt"
      }
    }
  ],
  "custodian" : {
    "reference" : "Organization/Hausarzt"
  },
  "event" : [
    {
      "code" : [
        {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v3-ActClass",
              "code" : "PCPR",
              "display" : "care provision"
            }
          ]
        }
      ],
      "period" : {
        "end" : "2024-01-11T10:00:00+01:00"
      }
    }
  ],
  "section" : [
    {
      "title" : "Medikation",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "10160-0",
            "display" : "History of Medication use Narrative"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Metformin</li><li>Candesartan</li></ul></div>"
      },
      "entry" : [
        {
          "reference" : "MedicationStatement/MedStatMetformin"
        },
        {
          "reference" : "MedicationStatement/MedStatCandesartan"
        }
      ]
    },
    {
      "title" : "Allergien und Intoleranzen",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "48765-2",
            "display" : "Allergies and adverse reactions Document"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Allergien und Intoleranzen nicht erfragt</div>"
      },
      "emptyReason" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
            "code" : "notasked",
            "display" : "Not Asked"
          }
        ]
      }
    },
    {
      "title" : "Problemliste",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "11450-4",
            "display" : "Problem list - Reported"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Diabetes mellitus Typ 2</li><li>Bluthochdruck</li><li>Koronare Herzkrankheit</li></ul></div>"
      },
      "entry" : [
        {
          "reference" : "Condition/DiabetesMellitus"
        },
        {
          "reference" : "Condition/HighBloodPressure"
        },
        {
          "reference" : "Condition/CoronaryHeartDisease"
        }
      ]
    },
    {
      "title" : "Behandlungsverlauf",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "47519-4",
            "display" : "History of Procedures Document"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Stent (27.09.2022) aufgrund koronarer Herzkrankheit</li></ul></div>"
      },
      "entry" : [
        {
          "reference" : "Procedure/StentPlacement"
        }
      ]
    }
  ]
}

```
