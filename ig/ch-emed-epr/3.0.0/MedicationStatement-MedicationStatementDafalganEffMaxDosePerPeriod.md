# MedicationStatement: Paracetamol Dafalgan Effervescent (MTP) with max dose per period - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationStatement: Paracetamol Dafalgan Effervescent (MTP) with max dose per period**

## Example MedicationStatement: MedicationStatement: Paracetamol Dafalgan Effervescent (MTP) with max dose per period



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "MedicationStatementDafalganEffMaxDosePerPeriod",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan"
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
    },
    {
      "resourceType" : "Organization",
      "id" : "OrganizationHug",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization"
        ]
      },
      "identifier" : [
        {
          "system" : "urn:oid:2.51.1.3",
          "value" : "7601000234438"
        }
      ],
      "name" : "Hôpitaux universitaires de Genève",
      "address" : [
        {
          "line" : ["Rue Gabrielle-Perret-Gentil 4"],
          "city" : "Genève",
          "postalCode" : "1205",
          "country" : "CH"
        }
      ]
    },
    {
      "resourceType" : "Practitioner",
      "id" : "PractitionerCox",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitioner"
        ]
      },
      "identifier" : [
        {
          "system" : "urn:oid:2.51.1.3",
          "value" : "7601000234438"
        }
      ],
      "name" : [
        {
          "family" : "Cox",
          "given" : ["Perry"]
        }
      ]
    },
    {
      "resourceType" : "PractitionerRole",
      "id" : "PractitionerRoleCoxAtHug",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitionerrole"
        ]
      },
      "practitioner" : {
        "reference" : "#PractitionerCox"
      },
      "organization" : {
        "reference" : "#OrganizationHug"
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:63ccda67-4b0c-4a4b-96b9-3f4a03baa245"
    }
  ],
  "status" : "active",
  "medicationReference" : {
    "reference" : "#MedicationParacetamolDafalganEff"
  },
  "subject" : {
    "reference" : "urn:uuid:9b00e81e-1165-4039-9d60-698ef838ae1a"
  },
  "dateAsserted" : "2023-11-05T12:00:00+02:00",
  "informationSource" : {
    "reference" : "#PractitionerRoleCoxAtHug"
  },
  "reasonCode" : [
    {
      "text" : "Dafalgan pour des douleurs regulières."
    }
  ],
  "dosage" : [
    {
      "text" : "Max. 2 comprimés à avaler par jour.",
      "timing" : {
        "repeat" : {
          "boundsPeriod" : {
            "start" : "2023-11-05"
          }
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
      "maxDosePerPeriod" : {
        "numerator" : {
          "value" : 2,
          "unit" : "comprimé",
          "system" : "http://snomed.info/sct",
          "code" : "732936001"
        },
        "denominator" : {
          "value" : 1,
          "unit" : "jour",
          "system" : "http://unitsofmeasure.org",
          "code" : "d"
        }
      }
    }
  ]
}

```
