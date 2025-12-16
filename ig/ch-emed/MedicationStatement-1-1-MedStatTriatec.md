# 1-1 Medication Statement with Medication Triatec - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1-1 Medication Statement with Medication Triatec**

## Example MedicationStatement: 1-1 Medication Statement with Medication Triatec



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "1-1-MedStatTriatec",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement"
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
      "value" : "urn:uuid:7aa20b27-eac0-4fef-a7b9-b10196718b9f"
    }
  ],
  "status" : "active",
  "medicationReference" : {
    "reference" : "#Triatec"
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  },
  "dateAsserted" : "2011-11-29T11:00:00+01:00",
  "informationSource" : {
    "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
  },
  "reasonCode" : [
    {
      "text" : "Bluthochdruck"
    }
  ],
  "dosage" : [
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
      "method" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "0019",
            "display" : "Swallowing"
          }
        ],
        "text" : "Schlucken"
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
  ]
}

```
