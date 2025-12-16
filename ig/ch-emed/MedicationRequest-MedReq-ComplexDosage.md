# Medication Request - Complex Dosage - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medication Request - Complex Dosage**

## Example MedicationRequest: Medication Request - Complex Dosage



## Resource Content

```json
{
  "resourceType" : "MedicationRequest",
  "id" : "MedReq-ComplexDosage",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "Wallwurz",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication"
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680659720011",
            "display" : "AMAVITA Wallwurz Gel"
          }
        ],
        "text" : "AMAVITA Wallwurz Gel"
      },
      "form" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "10503000",
            "display" : "Gel"
          }
        ],
        "text" : "Gel"
      },
      "amount" : {
        "numerator" : {
          "value" : 100,
          "unit" : "g",
          "system" : "http://unitsofmeasure.org",
          "code" : "g"
        },
        "denominator" : {
          "value" : 1,
          "unit" : "Tube (unit of presentation)",
          "system" : "http://snomed.info/sct",
          "code" : "733024003"
        }
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:2ed67958-ecf4-4fb7-adf5-e2e8c36ca736"
    }
  ],
  "status" : "active",
  "intent" : "order",
  "medicationReference" : {
    "reference" : "#Wallwurz"
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  },
  "authoredOn" : "2020-02-02",
  "requester" : {
    "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
  },
  "reasonCode" : [
    {
      "text" : "Rheumatischen Beschwerden"
    }
  ],
  "dosageInstruction" : [
    {
      "patientInstruction" : "Je nach Grösse der betroffenen Stellen ein 2-5 cm langes Stück Amavita Wallwurz-Gel bis 5-mal täglich auf die betroffenen Stellen einreiben und trocknen lassen.",
      "asNeededBoolean" : true,
      "route" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "20003000",
            "display" : "Cutaneous use"
          }
        ],
        "text" : "Anwendung auf der Haut"
      },
      "doseAndRate" : [
        {
          "doseRange" : {
            "low" : {
              "value" : 2,
              "unit" : "centimeter",
              "system" : "http://unitsofmeasure.org",
              "code" : "cm"
            },
            "high" : {
              "value" : 5,
              "unit" : "centimeter",
              "system" : "http://unitsofmeasure.org",
              "code" : "cm"
            }
          }
        }
      ]
    }
  ]
}

```
