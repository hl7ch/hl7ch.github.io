# 1-2 Medication Dispense with Medication Beloc Zok - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1-2 Medication Dispense with Medication Beloc Zok**

## Example MedicationDispense: 1-2 Medication Dispense with Medication Beloc Zok



## Resource Content

```json
{
  "resourceType" : "MedicationDispense",
  "id" : "2-4-MedDispBeloczok",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationdispense"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "Beloczok",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication"
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680521101306",
            "display" : "BELOC ZOK Ret Tabl 50 mg 30 Stk"
          }
        ],
        "text" : "BELOC ZOK Ret Tabl 50 mg"
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
                "code" : "372826007",
                "display" : "Metoprolol (substance)"
              }
            ],
            "text" : "Metoprolol"
          },
          "strength" : {
            "numerator" : {
              "value" : 50,
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
      "value" : "urn:uuid:d8143fea-4778-11e6-beb8-9e71128cae77"
    }
  ],
  "status" : "completed",
  "medicationReference" : {
    "reference" : "#Beloczok"
  },
  "subject" : {
    "reference" : "Patient/ElisabethBroennimannByBFH"
  },
  "performer" : [
    {
      "actor" : {
        "reference" : "PractitionerRole/HPWengerRole"
      }
    }
  ],
  "quantity" : {
    "value" : 1,
    "unit" : "Package - unit of product usage (qualifier value)",
    "system" : "http://snomed.info/sct",
    "code" : "1681000175101"
  },
  "whenHandedOver" : "2012-02-04T14:00:00+01:00",
  "dosageInstruction" : [
    {
      "sequence" : 1,
      "patientInstruction" : "-",
      "timing" : {
        "repeat" : {
          "boundsPeriod" : {
            "start" : "2012-02-04"
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
            "value" : 1,
            "unit" : "Tablet (unit of presentation)",
            "system" : "http://snomed.info/sct",
            "code" : "732936001"
          }
        }
      ]
    },
    {
      "sequence" : 2,
      "timing" : {
        "repeat" : {
          "when" : ["EVE"]
        }
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
