# MedicationRequest: Marcoumar 3mg tabs free text dosage - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationRequest: Marcoumar 3mg tabs free text dosage**

## Example MedicationRequest: MedicationRequest: Marcoumar 3mg tabs free text dosage



## Resource Content

```json
{
  "resourceType" : "MedicationRequest",
  "id" : "MedicationRequestMarcoumarPre",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationrequest"
    ]
  },
  "language" : "fr-CH",
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "MedicationMarcoumar25TabsPackage",
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
          },
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680193950011",
            "display" : "MARCOUMAR cpr 3 mg fl plast 25 pce"
          }
        ],
        "text" : "MARCOUMAR cpr 3 mg fl plast 25 pce"
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
      "amount" : {
        "numerator" : {
          "value" : 25,
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
  "extension" : [
    {
      "extension" : [
        {
          "url" : "id",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:a8a06c30-a535-4a15-be77-6f13b6ac42f1"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:04d4cf18-1b83-48cb-a483-e441db73c95d"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:81783913-fb71-485a-890f-c5041da015a3"
    }
  ],
  "status" : "active",
  "intent" : "order",
  "medicationReference" : {
    "reference" : "#MedicationMarcoumar25TabsPackage"
  },
  "subject" : {
    "reference" : "urn:uuid:9b00e81e-1165-4039-9d60-698ef838ae1a"
  },
  "authoredOn" : "2026-01-12T14:55:55+01:00",
  "requester" : {
    "reference" : "urn:uuid:213d609a-1164-459a-bb10-727516ae3d0c"
  },
  "dosageInstruction" : [
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
