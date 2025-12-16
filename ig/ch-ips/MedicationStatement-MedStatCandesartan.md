# UC 1.1: Candesartan - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.1: Candesartan**

## Example MedicationStatement: UC 1.1: Candesartan



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "MedStatCandesartan",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "Candesartan",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680676560027",
            "display" : "CANDESARTAN-AMLODIP Mepha Kaps 8mg/5mg (Blister 98 Stk)"
          }
        ],
        "text" : "CANDESARTAN-AMLODIP Mepha Kaps 8mg/5mg"
      },
      "form" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "10210000",
            "display" : "Capsule, hard"
          }
        ],
        "text" : "Hartkapsel"
      },
      "amount" : {
        "numerator" : {
          "value" : 98,
          "unit" : "Capsule (unit of presentation)",
          "system" : "http://snomed.info/sct",
          "code" : "732937005"
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
    "reference" : "#Candesartan"
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  },
  "effectivePeriod" : {
    "start" : "2020-03-03"
  },
  "reasonCode" : [
    {
      "text" : "Hypertonie"
    }
  ],
  "dosage" : [
    {
      "patientInstruction" : "Nehmen Sie die Kapseln täglich immer zur gleichen Tageszeit mit oder ohne Mahlzeit mit etwas Wasser ein.",
      "timing" : {
        "repeat" : {
          "boundsPeriod" : {
            "start" : "2020-03-03"
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
