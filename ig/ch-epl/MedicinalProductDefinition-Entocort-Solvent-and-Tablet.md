# ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk**

## Example MedicinalProductDefinition: ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk

Profile: [IDMP MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md)

**CH - SMC Authorized Dose Form**: Tablet and solvent for rectal suspension

**CH - EPL Full Limitation Text**: Distale Form der Colitis ulcerosa bei ungenügendem Ansprechen auf oder Kontraindikation für Mesalazin.

**identifier**: [Medical Product Identifier](NamingSystem-MPID.md)/CH-7601001346451-5204201

**combinedPharmaceuticalDoseForm**: Tablet and solvent for rectal suspension

**indication**: 

Leichte bis mittelschwere Colitis ulcerosa des Rectums sowie des Colon sigmoideum.

**legalStatusOfSupply**: Medicinal product subject to medical or veterinary prescription (B)

**additionalMonitoringIndicator**: No Warning

**pediatricUseIndicator**: Authorised for the treatment in children

**classification**: budesonide, NA KAS art. 12 para. 5 TPLO, Synthetic, Originator product, 04. GASTROENTEROLOGICA

**attachedDocument**: 

* [DocumentReference: identifier = http://fhir.ch/ig/ch-epl/sid/attno#Application / Assessment Tracking Number#123456789-initial submission-Example-efg-123; status = current; type = Fachinformation; date = 2022-04-01 00:00:00+0000](DocumentReference-DocRef-FI-Entocort.md)
* [DocumentReference: identifier = http://fhir.ch/ig/ch-epl/sid/attno#Application / Assessment Tracking Number#123456789-initial submission-Example-efg-321; status = current; type = Patienteninformation; date = 2022-04-01 00:00:00+0000](DocumentReference-DocRef-PI-Entocort.md)

> **name****productName**: ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk**type**:Zugelassener Arzneimittelname

### Usages

| | | |
| :--- | :--- | :--- |
| - | **Country** | **Language** |
| * | Switzerland | German (Switzerland) |




## Resource Content

```json
{
  "resourceType" : "MedicinalProductDefinition",
  "id" : "Entocort-Solvent-and-Tablet",
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
            "code" : "50064000",
            "display" : "Tablet and solvent for rectal suspension"
          }
        ]
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/fullLimitationText",
      "valueString" : "Distale Form der Colitis ulcerosa bei ungenügendem Ansprechen auf oder Kontraindikation für Mesalazin."
    }
  ],
  "identifier" : [
    {
      "system" : "http://fhir.ch/ig/ch-epl/sid/mpid",
      "value" : "CH-7601001346451-5204201"
    }
  ],
  "combinedPharmaceuticalDoseForm" : {
    "coding" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "code" : "50064000",
        "display" : "Tablet and solvent for rectal suspension"
      }
    ]
  },
  "indication" : "Leichte bis mittelschwere Colitis ulcerosa des Rectums sowie des Colon sigmoideum.",
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
          "code" : "A07EA06"
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
          "code" : "040000",
          "display" : "04. GASTROENTEROLOGICA"
        },
        {
          "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-index-therapeuticus",
          "code" : "049900",
          "display" : "04.99. Varia"
        }
      ]
    }
  ],
  "attachedDocument" : [
    {
      "reference" : "DocumentReference/DocRef-FI-Entocort"
    },
    {
      "reference" : "DocumentReference/DocRef-PI-Entocort"
    }
  ],
  "name" : [
    {
      "productName" : "ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk",
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
