# MedicationStatement: Paracetamol Axapharm (MTP) - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationStatement: Paracetamol Axapharm (MTP)**

## Example MedicationStatement: MedicationStatement: Paracetamol Axapharm (MTP)



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "MedicationStatementParacetamolAxapharmMtp",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan"
    ]
  },
  "language" : "fr-CH",
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "MedicationParacetamolAxapharm",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
        ]
      },
      "language" : "fr-CH",
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680669830045",
            "display" : "PARACETAMOL Axapharm cpr pell 1g blister 20pce"
          },
          {
            "system" : "http://www.whocc.no/atc",
            "code" : "N02BE01",
            "display" : "paracetamol"
          }
        ],
        "text" : "PARACETAMOL Axapharm cpr pell 1g"
      },
      "form" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "10221000",
            "display" : "Comprimé pelliculé"
          }
        ],
        "text" : "Comprimé pelliculé"
      },
      "amount" : {
        "numerator" : {
          "value" : 20,
          "unit" : "comprimé",
          "system" : "http://snomed.info/sct",
          "code" : "732936001"
        },
        "denominator" : {
          "value" : 1,
          "unit" : "plaquette",
          "system" : "http://snomed.info/sct",
          "code" : "732984005"
        }
      },
      "ingredient" : [
        {
          "itemCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "387517004",
                "display" : "Paracetamol (substance)"
              }
            ],
            "text" : "Paracétamol"
          },
          "isActive" : true,
          "strength" : {
            "numerator" : {
              "value" : 1,
              "unit" : "g",
              "system" : "http://unitsofmeasure.org",
              "code" : "g"
            },
            "denominator" : {
              "value" : 1,
              "unit" : "comprimé",
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
      "value" : "urn:uuid:17837392-0340-414d-a3bf-fa9f237b91ff"
    }
  ],
  "status" : "active",
  "medicationReference" : {
    "reference" : "#MedicationParacetamolAxapharm"
  },
  "subject" : {
    "reference" : "urn:uuid:9b00e81e-1165-4039-9d60-698ef838ae1a"
  },
  "dateAsserted" : "2023-10-01T00:00:00+02:00",
  "informationSource" : {
    "reference" : "urn:uuid:213d609a-1164-459a-bb10-727516ae3d0c"
  },
  "dosage" : [
    {
      "text" : "Un comprimé à avaler pendant les repas avec de l'eau le matin, le midi et le soir du 2023-10-01 au 2024-01-05.",
      "additionalInstruction" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "311504000",
              "display" : "With or after food"
            }
          ],
          "text" : "À prendre pendant les repas"
        }
      ],
      "patientInstruction" : "À prendre pendant les repas avec de l'eau",
      "timing" : {
        "repeat" : {
          "boundsPeriod" : {
            "start" : "2023-10-01",
            "end" : "2024-01-05"
          },
          "when" : ["MORN", "NOON", "EVE"]
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
        "text" : "À avaler"
      },
      "doseAndRate" : [
        {
          "doseQuantity" : {
            "value" : 1,
            "unit" : "comprimé",
            "system" : "http://snomed.info/sct",
            "code" : "732936001"
          }
        }
      ]
    }
  ]
}

```
