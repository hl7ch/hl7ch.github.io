# Medication Administration Fentanyl - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medication Administration Fentanyl**

## Example MedicationAdministration: Medication Administration Fentanyl



## Resource Content

```json
{
  "resourceType" : "MedicationAdministration",
  "id" : "3-2-MedAdminFentanyl",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationadministration"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "Fentanyl",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication"
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680539870027",
            "display" : "FENTANYL Sintetica Inj Lös 0.5 mg/10ml"
          }
        ],
        "text" : "FENTANYL Sintetica Inj Lös 0.5 mg/10ml"
      },
      "form" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "11201000",
            "display" : "Solution for injection"
          }
        ],
        "text" : "Injektionslösung"
      },
      "amount" : {
        "numerator" : {
          "value" : 10,
          "unit" : "Ampule (unit of presentation)",
          "system" : "http://snomed.info/sct",
          "code" : "732978007"
        },
        "denominator" : {
          "value" : 1,
          "unit" : "Package - unit of product usage (qualifier value)",
          "system" : "http://snomed.info/sct",
          "code" : "1681000175101"
        }
      },
      "ingredient" : [
        {
          "itemCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "373492002",
                "display" : "Fentanyl (substance)"
              }
            ],
            "text" : "Fentanyl"
          },
          "strength" : {
            "numerator" : {
              "value" : 0.5,
              "unit" : "milligram",
              "system" : "http://unitsofmeasure.org",
              "code" : "mg"
            },
            "denominator" : {
              "value" : 10,
              "unit" : "milligram",
              "system" : "http://unitsofmeasure.org",
              "code" : "mL"
            }
          }
        }
      ]
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:8ef0d745-e218-4636-abac-ea842ca6a421"
    }
  ],
  "status" : "completed",
  "medicationReference" : {
    "reference" : "#Fentanyl"
  },
  "subject" : {
    "reference" : "Patient/MaxMoser"
  },
  "effectiveDateTime" : "2020-02-03T14:32:00+01:00",
  "performer" : [
    {
      "actor" : {
        "reference" : "PractitionerRole/PriskaHuberAtRettungsdienst"
      }
    }
  ],
  "reasonCode" : [
    {
      "text" : "Schmerzbehandlung"
    }
  ],
  "dosage" : {
    "route" : {
      "coding" : [
        {
          "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
          "code" : "20045000",
          "display" : "Intravenous use"
        }
      ],
      "text" : "intravenöse Anwendung"
    },
    "method" : {
      "coding" : [
        {
          "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
          "code" : "0009",
          "display" : "Infusion"
        }
      ]
    },
    "dose" : {
      "value" : 1,
      "unit" : "Ampule (unit of presentation)",
      "system" : "http://snomed.info/sct",
      "code" : "732978007"
    }
  }
}

```
