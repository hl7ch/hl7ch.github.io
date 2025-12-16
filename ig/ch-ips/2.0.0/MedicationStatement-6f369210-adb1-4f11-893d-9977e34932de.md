# UC 1.2: Atorvastatin - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.2: Atorvastatin**

## Example MedicationStatement: UC 1.2: Atorvastatin



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "6f369210-adb1-4f11-893d-9977e34932de",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "Atorvastatin",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680682820054",
            "display" : "EZETIMIB Atorvast Mepha Filmtabl 10mg/40mg (Blister 30 Stk)"
          }
        ],
        "text" : "EZETIMIB Atorvast Mepha Filmtabl 10mg/40mg"
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
          "value" : 30,
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
    "reference" : "#Atorvastatin"
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
      "text" : "Hypercholesterinämie"
    }
  ],
  "dosage" : [
    {
      "sequence" : 1,
      "patientInstruction" : "Kann unabhängig von den Mahlzeiten eingenommen werden",
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
            "value" : 0.5,
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
