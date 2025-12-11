# ESTALIS Matrixpfl 50/250 24 Stk - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ESTALIS Matrixpfl 50/250 24 Stk**

## Example MedicinalProductDefinition: ESTALIS Matrixpfl 50/250 24 Stk

Profile: [IDMP MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md)

**CH - SMC Authorized Dose Form**: Transdermal patch

**identifier**: [Medical Product Identifier](NamingSystem-MPID.md)/CH-7601001029439-5470402

**indication**: 

Klimakterische Beschwerden: Behandlung der Symptome des Östrogenmangels infolge der natürlichen oder künstlichen Menopause bei nicht-hysterektomierten Frauen. Osteoporoseprophylaxe: Vorbeugung oder Verzögerung einer durch Östrogenmangel induzierten Osteoporose bei postmenopausalen Frauen mit hohem Frakturrisiko, für die eine Behandlung mit anderen zur Prävention der Osteoporose zugelassenen Arzneimitteln nicht in Frage kommt, oder bei Frauen die gleichzeitig an behandlungsbedürftigen Symptomen des Östrogenmangels leiden.

**legalStatusOfSupply**: Medicinal product subject to medical or veterinary prescription (B)

**additionalMonitoringIndicator**: No Warning

**pediatricUseIndicator**: Not authorised for the treatment in children

**classification**: norethisterone and estrogen, NA KAS art. 12 para. 5 TPLO, Synthetic, Originator product

**attachedDocument**: 

* [DocumentReference: identifier = http://fhir.ch/ig/ch-epl/sid/attno#Application / Assessment Tracking Number#123456789-initial submission-Example-hij-123; status = current; type = Fachinformation; date = 2021-10-01 00:00:00+0000](DocumentReference-DocRef-FI-Estalis.md)
* [DocumentReference: identifier = http://fhir.ch/ig/ch-epl/sid/attno#Application / Assessment Tracking Number#123456789-initial submission-Example-hij-321; status = current; type = Patienteninformation; date = 2021-10-01 00:00:00+0000](DocumentReference-DocRef-PI-Estalis.md)

> **name****productName**: ESTALIS Matrixpfl 50/250 24 Stk**type**:Zugelassener Arzneimittelname

### Usages

| | | |
| :--- | :--- | :--- |
| - | **Country** | **Language** |
| * | Switzerland | German (Switzerland) |




## Resource Content

```json
{
  "resourceType" : "MedicinalProductDefinition",
  "id" : "Estalis-Transdermalpatch",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-medicinalproductdefinition"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/authorizedDoseForm",
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10519000",
            "display" : "Transdermal patch"
          }
        ]
      }
    }
  ],
  "identifier" : [
    {
      "system" : "http://fhir.ch/ig/ch-epl/sid/mpid",
      "value" : "CH-7601001029439-5470402"
    }
  ],
  "indication" : "Klimakterische Beschwerden: Behandlung der Symptome des Östrogenmangels infolge der natürlichen oder künstlichen Menopause bei nicht-hysterektomierten Frauen.\nOsteoporoseprophylaxe: Vorbeugung oder Verzögerung einer durch Östrogenmangel induzierten Osteoporose bei postmenopausalen Frauen mit hohem Frakturrisiko, für die eine Behandlung mit anderen zur Prävention der Osteoporose zugelassenen Arzneimitteln nicht in Frage kommt, oder bei Frauen die gleichzeitig an behandlungsbedürftigen Symptomen des Östrogenmangels leiden.",
  "legalStatusOfSupply" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-legal-status-of-supply",
        "code" : "756005022003",
        "display" : "Medicinal product subject to medical or veterinary prescription (B)"
      }
    ]
  },
  "additionalMonitoringIndicator" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-additional-monitoring-indicator",
        "code" : "756005001003",
        "display" : "No Warning"
      }
    ]
  },
  "pediatricUseIndicator" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-pediatric-use-indicator",
        "code" : "756005003002",
        "display" : "Not authorised for the treatment in children"
      }
    ]
  },
  "classification" : [
    {
      "coding" : [
        {
          "system" : "http://www.whocc.no/atc",
          "code" : "G03FA01"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-authorisation-category",
          "code" : "756005021001",
          "display" : "NA KAS art. 12 para. 5 TPLO"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-therapeuticproductcode",
          "code" : "756005004001",
          "display" : "Synthetic"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-product-type",
          "code" : "756001003002",
          "display" : "Originator product"
        }
      ]
    }
  ],
  "attachedDocument" : [
    {
      "reference" : "DocumentReference/DocRef-FI-Estalis"
    },
    {
      "reference" : "DocumentReference/DocRef-PI-Estalis"
    }
  ],
  "name" : [
    {
      "productName" : "ESTALIS Matrixpfl 50/250 24 Stk",
      "type" : {
        "coding" : [
          {
            "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-medicinal-product-name-type",
            "code" : "SMC",
            "display" : "Zugelassener Arzneimittelname"
          }
        ]
      },
      "usage" : [
        {
          "country" : {
            "coding" : [
              {
                "system" : "urn:iso:std:iso:3166",
                "code" : "CH",
                "display" : "Switzerland"
              }
            ]
          },
          "language" : {
            "coding" : [
              {
                "system" : "urn:ietf:bcp:47",
                "code" : "de-CH",
                "display" : "German (Switzerland)"
              }
            ]
          }
        }
      ]
    }
  ]
}

```
