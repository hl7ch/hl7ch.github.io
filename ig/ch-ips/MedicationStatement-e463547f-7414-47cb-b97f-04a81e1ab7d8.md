# UC 1.2: Clopidogrel - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.2: Clopidogrel**

## Example MedicationStatement: UC 1.2: Clopidogrel



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "e463547f-7414-47cb-b97f-04a81e1ab7d8",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "Clopidogrel",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680659570012",
            "display" : "CLOPIDOGREL axapharm Filmtabl 75 mg (Blister 28 Stk)"
          }
        ],
        "text" : "CLOPIDOGREL axapharm Filmtabl 75 mg"
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
    "reference" : "#Clopidogrel"
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
      "text" : "Blutgerinnungshemmer"
    }
  ],
  "dosage" : [
    {
      "patientInstruction" : "Die Filmtablette soll mit etwas Wasser - unzerkaut und ohne sie zu lutschen - während oder unabhängig von den Mahlzeiten eingenommen werden. Es wird aber empfohlen, sie immer zum selben Zeitpunkt einzunehmen.",
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
