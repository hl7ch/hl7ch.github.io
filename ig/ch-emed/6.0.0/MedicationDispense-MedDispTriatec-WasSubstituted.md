# Medication Dispense was substituted - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medication Dispense was substituted**

## Example MedicationDispense: Medication Dispense was substituted



## Resource Content

```json
{
  "resourceType" : "MedicationDispense",
  "id" : "MedDispTriatec-WasSubstituted",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "Triatec",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication"
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680538751228",
            "display" : "TRIATEC Tabl 2.5 mg 20 Stk"
          }
        ],
        "text" : "TRIATEC Tabl 2.5 mg"
      },
      "form" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "10219000",
            "display" : "Tablet"
          }
        ],
        "text" : "Tablette"
      },
      "amount" : {
        "numerator" : {
          "value" : 20,
          "unit" : "Tablet (unit of presentation)",
          "system" : "http://snomed.info/sct",
          "code" : "732936001"
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
                "code" : "386872004",
                "display" : "Ramipril (substance)"
              }
            ],
            "text" : "Ramipril"
          },
          "strength" : {
            "numerator" : {
              "value" : 2.5,
              "unit" : "milligram",
              "system" : "http://unitsofmeasure.org",
              "code" : "mg"
            },
            "denominator" : {
              "value" : 1,
              "unit" : "Tablet (unit of presentation)",
              "system" : "http://snomed.info/sct",
              "code" : "732936001"
            }
          }
        }
      ]
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:3b3c967f-dc78-4ee2-b817-36bdb348ff63"
    }
  ],
  "status" : "completed",
  "medicationReference" : {
    "reference" : "#Triatec"
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  },
  "performer" : [
    {
      "actor" : {
        "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
      }
    }
  ],
  "quantity" : {
    "value" : 1,
    "unit" : "Package - unit of product usage (qualifier value)",
    "system" : "http://snomed.info/sct",
    "code" : "1681000175101"
  },
  "whenHandedOver" : "2011-11-29",
  "dosageInstruction" : [
    {
      "patientInstruction" : "-",
      "timing" : {
        "repeat" : {
          "boundsPeriod" : {
            "start" : "2011-11-29"
          },
          "when" : ["MORN"]
        }
      },
      "route" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "20053000",
            "display" : "Oral use"
          }
        ],
        "text" : "zum Einnehmen"
      },
      "doseAndRate" : [
        {
          "doseQuantity" : {
            "value" : 0.5,
            "unit" : "Tablet (unit of presentation)",
            "system" : "http://snomed.info/sct",
            "code" : "732936001"
          }
        }
      ]
    }
  ],
  "substitution" : {
    "wasSubstituted" : true,
    "type" : {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-substanceAdminSubstitution",
          "code" : "E",
          "display" : "equivalent"
        }
      ]
    }
  }
}

```
