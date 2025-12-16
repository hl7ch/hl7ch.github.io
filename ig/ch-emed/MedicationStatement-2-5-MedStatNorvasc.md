# 2-5 Medication Statement with Medication Norvasc - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2-5 Medication Statement with Medication Norvasc**

## Example MedicationStatement: 2-5 Medication Statement with Medication Norvasc



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "2-5-MedStatNorvasc",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "Norvasc",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication"
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680500440334",
            "display" : "NORVASC Tabl 10 mg"
          }
        ],
        "text" : "NORVASC Tabl 10 mg"
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
                "code" : "386864001",
                "display" : "Amlodipine (substance)"
              }
            ],
            "text" : "Amlodipine"
          },
          "strength" : {
            "numerator" : {
              "value" : 10,
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
      "value" : "urn:uuid:0e9a0b8a-8306-4e35-bb92-0ba424696349"
    }
  ],
  "status" : "active",
  "medicationReference" : {
    "reference" : "#Norvasc"
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  },
  "dateAsserted" : "2012-02-04T14:00:00+01:00",
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
            "start" : "2012-02-04"
          },
          "when" : ["MORN", "EVE"]
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
            "value" : 1,
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
