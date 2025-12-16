# Medication Administration NaCL - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medication Administration NaCL**

## Example MedicationAdministration: Medication Administration NaCL



## Resource Content

```json
{
  "resourceType" : "MedicationAdministration",
  "id" : "3-1-MedAdminNacl",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationadministration"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "Nacl",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication"
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680295547027",
            "display" : "NACL Braun 0.9 % 500ml Ecofl pl"
          }
        ],
        "text" : "NACL Braun 0.9 % 500ml Ecofl pl"
      },
      "form" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "11210000",
            "display" : "Solution for infusion"
          }
        ],
        "text" : "Infusionslösung"
      },
      "amount" : {
        "numerator" : {
          "value" : 500,
          "unit" : "milliliter",
          "system" : "http://unitsofmeasure.org",
          "code" : "mL"
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
                "code" : "387390002",
                "display" : "Sodium chloride (substance)"
              }
            ],
            "text" : "Natriumchlorid"
          },
          "strength" : {
            "numerator" : {
              "value" : 4.5,
              "unit" : "gram",
              "system" : "http://unitsofmeasure.org",
              "code" : "g"
            },
            "denominator" : {
              "value" : 500,
              "unit" : "milliliter",
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
      "value" : "urn:uuid:c276c2af-afab-4a78-859b-485324584b37"
    }
  ],
  "status" : "completed",
  "medicationReference" : {
    "reference" : "#Nacl"
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
    "dose" : {
      "value" : 0.5,
      "unit" : "Package - unit of product usage (qualifier value)",
      "system" : "http://snomed.info/sct",
      "code" : "1681000175101"
    }
  }
}

```
