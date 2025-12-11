# TRIOGEN Kaps 250 mg Ds 100 Stk - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TRIOGEN Kaps 250 mg Ds 100 Stk**

## Example MedicinalProductDefinition: TRIOGEN Kaps 250 mg Ds 100 Stk

Profile: [IDMP MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md)

**CH - SMC Authorized Dose Form**: Capsule, hard

**CH - EPL Full Limitation Text**: TRIOGEN wird vergütet zur Behandlung der Kupferspeicherkrankheit (Morbus Wilson) bei Patienten, die eine Behandlung mit D-Penicillamin nicht vertragen. Die Behandlung muss von Gastroenterologen oder Hepatologen mit Erfahrung bei der Behandlung von Patienten mit Morbus Wilson initiiert und überwacht werden.

**identifier**: [Medical Product Identifier](NamingSystem-MPID.md)/CH-7601001403062-6743101

**indication**: 

Zur Behandlung der Kupferspeicherkrankheit (Morbus Wilson) bei Patienten, die eine Behandlung mit D-Penicillamin nicht vertragen.

**legalStatusOfSupply**: Medicinal product subject to medical or veterinary prescription (B)

**additionalMonitoringIndicator**: No Warning

**pediatricUseIndicator**: Authorised for the treatment in children

**classification**: trientine, NA KAS art. 12 para. 5 TPLO, Synthetic, Originator product, 07. STOFFWECHSEL

**attachedDocument**: 

* [DocumentReference: identifier = http://fhir.ch/ig/ch-epl/sid/attno#Application / Assessment Tracking Number#123456789-initial submission-Example-qrs-123; status = current; type = Fachinformation; date = 2019-12-01 00:00:00+0000](DocumentReference-DocRef-FI-Triogen.md)
* [DocumentReference: identifier = http://fhir.ch/ig/ch-epl/sid/attno#Application / Assessment Tracking Number#123456789-initial submission-Example-qrs-321; status = current; type = Patienteninformation; date = 2019-12-01 00:00:00+0000](DocumentReference-DocRef-PI-Triogen.md)

> **name****productName**: Triogen 250 mg, Kapseln**type**:Zugelassener Arzneimittelname

### Usages

| | | |
| :--- | :--- | :--- |
| - | **Country** | **Language** |
| * | Switzerland | German (Switzerland) |




## Resource Content

```json
{
  "resourceType" : "MedicinalProductDefinition",
  "id" : "Triogen-250mg-Capsule",
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
            "code" : "10210000",
            "display" : "Capsule, hard"
          }
        ]
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/fullLimitationText",
      "valueString" : "TRIOGEN wird vergütet zur Behandlung der Kupferspeicherkrankheit (Morbus Wilson) bei Patienten, die eine Behandlung mit D-Penicillamin nicht vertragen. Die Behandlung muss von Gastroenterologen oder Hepatologen mit Erfahrung bei der Behandlung von Patienten mit Morbus Wilson initiiert und überwacht werden."
    }
  ],
  "identifier" : [
    {
      "system" : "http://fhir.ch/ig/ch-epl/sid/mpid",
      "value" : "CH-7601001403062-6743101"
    }
  ],
  "indication" : "Zur Behandlung der Kupferspeicherkrankheit (Morbus Wilson) bei Patienten, die eine Behandlung mit D-Penicillamin nicht vertragen.",
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
        "code" : "756005003001",
        "display" : "Authorised for the treatment in children"
      }
    ]
  },
  "classification" : [
    {
      "coding" : [
        {
          "system" : "http://www.whocc.no/atc",
          "code" : "A16AX12"
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
    },
    {
      "coding" : [
        {
          "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-index-therapeuticus",
          "code" : "070000",
          "display" : "07. STOFFWECHSEL"
        },
        {
          "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-index-therapeuticus",
          "code" : "079900",
          "display" : "07.99. Varia"
        }
      ]
    }
  ],
  "attachedDocument" : [
    {
      "reference" : "DocumentReference/DocRef-FI-Triogen"
    },
    {
      "reference" : "DocumentReference/DocRef-PI-Triogen"
    }
  ],
  "name" : [
    {
      "productName" : "Triogen 250 mg, Kapseln",
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
