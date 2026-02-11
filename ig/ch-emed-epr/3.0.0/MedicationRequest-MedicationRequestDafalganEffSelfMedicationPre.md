# MedicationRequest: Dafalgan effervescent 500mg (PRE) - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationRequest: Dafalgan effervescent 500mg (PRE)**

## Example MedicationRequest: MedicationRequest: Dafalgan effervescent 500mg (PRE)



## Resource Content

```json
{
  "resourceType" : "MedicationRequest",
  "id" : "MedicationRequestDafalganEffSelfMedicationPre",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationrequest"
    ]
  },
  "language" : "fr-CH",
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "MedicationParacetamolDafalganEff",
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
            "code" : "7680475030011",
            "display" : "DAFALGAN cpr eff 500mg"
          },
          {
            "system" : "http://www.whocc.no/atc",
            "code" : "N02BE01",
            "display" : "paracetamol"
          }
        ],
        "text" : "DAFALGAN cpr eff 500mg"
      },
      "form" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "10222000",
            "display" : "Comprimé effervescent"
          }
        ],
        "text" : "Comprimé effervescent"
      },
      "amount" : {
        "numerator" : {
          "value" : 40,
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
              "value" : 500,
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
        }
      ]
    }
  ],
  "extension" : [
    {
      "extension" : [
        {
          "url" : "id",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:cb13d6de-051f-4a3e-ab85-c05650fa254e"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:a6deb711-dc0e-4a87-9ca9-f72bb9ecc858"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:fd712f74-9f63-4c6a-89df-4bc254ee80b3"
    }
  ],
  "status" : "active",
  "intent" : "order",
  "medicationReference" : {
    "reference" : "#MedicationParacetamolDafalganEff"
  },
  "subject" : {
    "reference" : "urn:uuid:9b00e81e-1165-4039-9d60-698ef838ae1a"
  },
  "authoredOn" : "2026-02-12T14:55:55.602+01:00",
  "requester" : {
    "reference" : "urn:uuid:213d609a-1164-459a-bb10-727516ae3d0c"
  },
  "dosageInstruction" : [
    {
      "text" : "1 comprimé en réserve, à avaler si besoin en cas de mal à la tête et le traitement d'ibuprofen est insuffissant, max. 1 comprimé chaque 6 heures, à partir du 12 fevrier 2026.",
      "patientInstruction" : "1 comprimé en cas de mal à la tête. À prendre si l'ibuprofen ne suffit pas et au minimum une heure après la dernière prise d'ibuprofen.",
      "timing" : {
        "repeat" : {
          "boundsPeriod" : {
            "start" : "2026-02-12"
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
        "text" : "À avaler"
      },
      "maxDosePerPeriod" : {
        "numerator" : {
          "value" : 1,
          "unit" : "comprimé",
          "system" : "http://snomed.info/sct",
          "code" : "732936001"
        },
        "denominator" : {
          "value" : 6,
          "unit" : "Heure",
          "system" : "http://unitsofmeasure.org",
          "code" : "h"
        }
      }
    }
  ]
}

```
