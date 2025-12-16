# Medication Statement with a medication in reserve and a maximum dosage - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medication Statement with a medication in reserve and a maximum dosage**

## Example MedicationStatement: Medication Statement with a medication in reserve and a maximum dosage



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "AsNeededWithMaxDose",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "Nitrostat",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication"
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "00300710417243",
            "display" : "Nitrostat 0.3 mg/tablet"
          }
        ],
        "text" : "Nitrostat 0.3 mg/tablet"
      },
      "form" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "10318000",
            "display" : "Sublingual tablet"
          }
        ],
        "text" : "Sublingualtablette"
      },
      "amount" : {
        "numerator" : {
          "value" : 100,
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
                "code" : "387404004",
                "display" : "Nitroglycerin"
              }
            ],
            "text" : "Nitroglycerin"
          },
          "strength" : {
            "numerator" : {
              "value" : 0.3,
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
      "value" : "urn:uuid:e5adf8d0-99fd-4bc6-b089-da7f7075d3be"
    }
  ],
  "status" : "completed",
  "medicationReference" : {
    "reference" : "#Nitrostat"
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  },
  "dateAsserted" : "2022-11-01",
  "informationSource" : {
    "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
  },
  "reasonCode" : [
    {
      "text" : "Chest pain"
    }
  ],
  "dosage" : [
    {
      "patientInstruction" : "Administer one tablet under the tongue at the first sign of an acute anginal attack. \r\n                                One additional tablet may be administered every 5 minutes until relief is obtained. \r\n                                No more than three tablets are recommended within a 15-minute period.",
      "timing" : {
        "repeat" : {
          "boundsPeriod" : {
            "start" : "2022-11-01"
          }
        }
      },
      "asNeededBoolean" : true,
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
