# UC 1.1: Metformin - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.1: Metformin**

## Example MedicationStatement: UC 1.1: Metformin



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "MedStatMetformin",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "Metformin",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680696890012",
            "display" : "METFORMIN axapharm Filmtabl 500 mg (Blister 50 Stk)"
          }
        ],
        "text" : "METFORMIN axapharm Filmtabl 500 mg"
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
          "value" : 50,
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
                "code" : "109083009",
                "display" : "Metformin hydrochloride (substance)"
              }
            ],
            "text" : "Metformin hydrochloride"
          },
          "strength" : {
            "numerator" : {
              "value" : 500,
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
  "status" : "active",
  "medicationReference" : {
    "reference" : "#Metformin"
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  },
  "effectivePeriod" : {
    "start" : "2020-03-03"
  },
  "reasonCode" : [
    {
      "text" : "Diabetes"
    }
  ],
  "dosage" : [
    {
      "patientInstruction" : "Unzerkaut während oder nach den Mahlzeiten mit ausreichend Flüssigkeit einnehmen",
      "timing" : {
        "repeat" : {
          "boundsPeriod" : {
            "start" : "2020-03-03"
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
