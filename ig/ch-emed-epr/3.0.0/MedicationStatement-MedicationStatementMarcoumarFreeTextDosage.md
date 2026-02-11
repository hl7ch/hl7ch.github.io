# MedicationStatement: Marcoumar cpr 3mg - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationStatement: Marcoumar cpr 3mg**

## Example MedicationStatement: MedicationStatement: Marcoumar cpr 3mg



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "MedicationStatementMarcoumarFreeTextDosage",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan"
    ]
  },
  "language" : "fr-CH",
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "MedicationMarcoumar",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
        ]
      },
      "language" : "fr-CH",
      "code" : {
        "coding" : [
          {
            "system" : "http://www.whocc.no/atc",
            "code" : "B01AA04",
            "display" : "Phenprocoumon"
          }
        ],
        "text" : "Marcoumar cpr 3mg"
      },
      "form" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "10219000",
            "display" : "Comprimé"
          }
        ],
        "text" : "Comprimé"
      },
      "ingredient" : [
        {
          "itemCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "59488002",
                "display" : "Phenprocoumon (substance)"
              }
            ],
            "text" : "Phenprocoumon"
          },
          "isActive" : true,
          "strength" : {
            "numerator" : {
              "value" : 3,
              "unit" : "mg",
              "system" : "http://unitsofmeasure.org",
              "code" : "mg"
            },
            "denominator" : {
              "value" : 1,
              "unit" : "comprimé",
              "system" : "http://snomed.info/sct",
              "code" : "732936001"
            }
          }
        },
        {
          "itemCodeableConcept" : {
            "text" : "Lactosum"
          },
          "isActive" : false,
          "strength" : {
            "numerator" : {
              "value" : 80,
              "unit" : "mg",
              "system" : "http://unitsofmeasure.org",
              "code" : "mg"
            },
            "denominator" : {
              "value" : 1,
              "unit" : "comprimé",
              "system" : "http://snomed.info/sct",
              "code" : "732936001"
            }
          }
        },
        {
          "itemCodeableConcept" : {
            "text" : "Maydis amylum"
          },
          "isActive" : false
        },
        {
          "itemCodeableConcept" : {
            "text" : "Talcum"
          },
          "isActive" : false
        },
        {
          "itemCodeableConcept" : {
            "text" : "Magnesii stearas"
          },
          "isActive" : false
        }
      ]
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:a8a06c30-a535-4a15-be77-6f13b6ac42f1"
    }
  ],
  "status" : "active",
  "medicationReference" : {
    "reference" : "#MedicationMarcoumar"
  },
  "subject" : {
    "reference" : "urn:uuid:9b00e81e-1165-4039-9d60-698ef838ae1a"
  },
  "dateAsserted" : "2026-01-12T14:50:55+01:00",
  "informationSource" : {
    "reference" : "urn:uuid:213d609a-1164-459a-bb10-727516ae3d0c"
  },
  "reasonCode" : [
    {
      "text" : "Prévention des thromboses, embolies et infarctus."
    }
  ],
  "dosage" : [
    {
      "text" : "Lundi: 1 comprimé le matin. Mardi: 0,5 comprimé le matin. Mercredi: 1 comprimé le matin. Jeudi: 0,5 comprimé le matin. Vendredi: 1 comprimé. Samedi: pas de prise. Dimanche: 0,5 comprimé. Voie orale.",
      "patientInstruction" : "Lundi: 1 comprimé le matin. Mardi: 0,5 comprimé le matin. Mercredi: 1 comprimé le matin. Jeudi: 0,5 comprimé le matin. Vendredi: 1 comprimé. Samedi: pas de prise. Dimanche: 0,5 comprimé.",
      "route" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "20053000",
            "display" : "Oral use"
          }
        ],
        "text" : "À avaler"
      }
    }
  ]
}

```
