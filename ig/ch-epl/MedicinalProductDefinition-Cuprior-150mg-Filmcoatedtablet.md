# CUPRIOR Filmtabl 150 mg 72 Stk - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CUPRIOR Filmtabl 150 mg 72 Stk**

## Example MedicinalProductDefinition: CUPRIOR Filmtabl 150 mg 72 Stk

Profile: [IDMP MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md)

**CH - SMC Authorized Dose Form**: Film-coated tablet

**CH - EPL Full Limitation Text**: CUPRIOR wird vergütet zur Behandlung der Kupferspeicherkrankheit (Morbus Wilson) bei Erwachsenen, Jugendlichen und Kindern im Alter von 5 Jahren oder älter, die eine Behandlung mit D-Penicillamin nicht vertragen. Die Behandlung muss von Gastroenterologen oder Hepatologen mit Erfahrung bei der Behandlung von Patienten mit Morbus Wilson initiiert und überwacht werden.

**identifier**: [Medical Product Identifier](NamingSystem-MPID.md)/CH-7640109110007-6771901

**indication**: 

Cuprior wird angewendet zur Behandlung von Morbus Wilson bei Erwachsenen, Jugendlichen und Kindern im Alter von 5 Jahren oder älter mit Unverträglichkeit gegenüber einer D-Penicillamin-Therapie.

**legalStatusOfSupply**: Medicinal product subject to medical or veterinary prescription (B)

**additionalMonitoringIndicator**: No Warning

**pediatricUseIndicator**: Authorised for the treatment in children

**classification**: gilteritinib, NA KAS art. 12 para. 5 TPLO, Synthetic, Originator product, 07. STOFFWECHSEL

**attachedDocument**: 

* [DocumentReference: identifier = http://fhir.ch/ig/ch-epl/sid/attno#Application / Assessment Tracking Number#123456789-initial submission-Example-abc-123; status = current; type = Fachinformation; date = 2020-09-01 00:00:00+0000](DocumentReference-DocRef-FI-Cuprior.md)
* [DocumentReference: identifier = http://fhir.ch/ig/ch-epl/sid/attno#Application / Assessment Tracking Number#123456789-initial submission-Example-abc-321; status = current; type = Patienteninformation; date = 2020-09-01 00:00:00+0000](DocumentReference-DocRef-PI-Cuprior.md)

> **name****productName**: Cuprior 150 mg, Filmtabletten**type**:Zugelassener Arzneimittelname

### Usages

| | | |
| :--- | :--- | :--- |
| - | **Country** | **Language** |
| * | Switzerland | German (Switzerland) |




## Resource Content

```json
{
  "resourceType" : "MedicinalProductDefinition",
  "id" : "Cuprior-150mg-Filmcoatedtablet",
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
            "code" : "10221000",
            "display" : "Film-coated tablet"
          }
        ]
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/fullLimitationText",
      "valueString" : "CUPRIOR wird vergütet zur Behandlung der Kupferspeicherkrankheit (Morbus Wilson) bei Erwachsenen, Jugendlichen und Kindern im Alter von 5 Jahren oder älter, die eine Behandlung mit D-Penicillamin nicht vertragen. Die Behandlung muss von Gastroenterologen oder Hepatologen mit Erfahrung bei der Behandlung von Patienten mit Morbus Wilson initiiert und überwacht werden."
    }
  ],
  "identifier" : [
    {
      "system" : "http://fhir.ch/ig/ch-epl/sid/mpid",
      "value" : "CH-7640109110007-6771901"
    }
  ],
  "indication" : "Cuprior wird angewendet zur Behandlung von Morbus Wilson bei Erwachsenen, Jugendlichen und Kindern im Alter von 5 Jahren oder älter mit Unverträglichkeit gegenüber einer D-Penicillamin-Therapie.",
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
          "code" : "L01EX13"
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
      "reference" : "DocumentReference/DocRef-FI-Cuprior"
    },
    {
      "reference" : "DocumentReference/DocRef-PI-Cuprior"
    }
  ],
  "name" : [
    {
      "productName" : "Cuprior 150 mg, Filmtabletten",
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
