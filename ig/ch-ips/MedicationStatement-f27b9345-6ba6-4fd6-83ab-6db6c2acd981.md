# UC 1.2: Aspirin - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.2: Aspirin**

## Example MedicationStatement: UC 1.2: Aspirin



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "f27b9345-6ba6-4fd6-83ab-6db6c2acd981",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "Aspirin",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680517950680",
            "display" : "ASPIRIN CARDIO Filmtabl 100 mg (Blister 28 Stk)"
          }
        ],
        "text" : "ASPIRIN CARDIO Filmtabl 100 mg"
      },
      "form" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "10221000",
            "display" : "Film-coated tablet"
          }
        ],
        "text" : "Filmtablette"
      },
      "amount" : {
        "numerator" : {
          "value" : 28,
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
      }
    }
  ],
  "status" : "active",
  "medicationReference" : {
    "reference" : "#Aspirin"
  },
  "subject" : {
    "reference" : "urn:uuid:8383926c-ece1-4384-94bc-b4250b4cb71b",
    "type" : "Patient",
    "display" : "Monika Wegmüller"
  },
  "effectivePeriod" : {
    "start" : "2024-05-03"
  },
  "reasonCode" : [
    {
      "text" : "Herzinfarktprophylaxe"
    }
  ],
  "dosage" : [
    {
      "patientInstruction" : "Tabletten mit etwas Flüssigkeit mindestens eine halbe Stunde vor der Mahlzeit einnehmen",
      "timing" : {
        "repeat" : {
          "boundsPeriod" : {
            "start" : "2024-05-03"
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
    }
  ]
}

```
