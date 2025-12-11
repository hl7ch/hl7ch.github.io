# PAXLOVID Filmtabl 4x150mg/2x100mg - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PAXLOVID Filmtabl 4x150mg/2x100mg**

## Example MedicinalProductDefinition: PAXLOVID Filmtabl 4x150mg/2x100mg

Profile: [IDMP MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md)

**CH - SMC Authorized Dose Form**: Film-coated tablet

**CH - EPL Full Limitation Text**: Befristete Limitation bis 31.12.2025. PAXLOVID wird als antivirale Monotherapie für die Behandlung einer bestätigten Covid-19 Infektion (Positiver Erregernachweis Antigen/PCR und vorhandener Covid-19-Symptome) in folgenden Fällen vergütet: • in einer Dosierung von 300 mg Nirmatrelvir (zwei Tabletten zu je 150 mg) und 100 mg Ritonavir (eine Tablette zu 100 mg) zur gleichzeitigen Einnahme alle 12 Stunden, über einen Zeitraum von 5 Tagen • zur Frühbehandlung (ausser bei immunsupprimierten Personen vorzugsweise innerhalb von 5 Tagen nach Symptombeginn) bei Erwachsenen, die keine Sauerstofftherapie oder Hospitalisierung aufgrund von COVID-19 benötigen und für welche gemäss der aktuell gültigen Kriterienliste der Schweizerischen Gesellschaft für Infektiologie (SSI) (https://www.bag.admin.ch/bag/de/home/medizin-und-forschung/heilmittel/versorgung-covid-19-arzneimittel.html) ein erhöhtes Risiko für einen schweren COVID-19-Verlauf besteht.

**identifier**: [Medical Product Identifier](NamingSystem-MPID.md)/CH-7601001010604-6879301

**indication**: 

Paxlovid wird angewendet für die Behandlung der Coronavirus-Krankheit 2019 (COVID-19) bei Erwachsenen, die keine Sauerstofftherapie oder Hospitalisierung aufgrund von COVID-19 benötigen und bei denen ein erhöhtes Risiko für einen schweren Verlauf von COVID-19 besteht (siehe «Klinische Wirksamkeit»). Paxlovid ist nicht als Ersatz für eine Impfung gegen COVID-19 vorgesehen. Paxlovid sollte gemäss den offiziellen Empfehlungen und unter Berücksichtigung der lokalen epidemiologischen Daten zu zirkulierenden SARS-CoV-2-Varianten angewendet werden.

**legalStatusOfSupply**: Medicinal product subject to medical or veterinary prescription single dispensation (A+)

**additionalMonitoringIndicator**: Black Triangle Warning

**pediatricUseIndicator**: Not authorised for the treatment in children

**classification**: Protease inhibitors, NA KAS art. 12 para. 5 TPLO, Synthetic, Originator product, 08. INFEKTIONSKRANKHEITEN

**attachedDocument**: 

* [DocumentReference: identifier = http://fhir.ch/ig/ch-epl/sid/attno#Application / Assessment Tracking Number#123456789-initial submission-Example-nop-123; status = current; type = Fachinformation; date = 2024-07-01 00:00:00+0000](DocumentReference-DocRef-FI-Paxlovid.md)
* [DocumentReference: identifier = http://fhir.ch/ig/ch-epl/sid/attno#Application / Assessment Tracking Number#123456789-initial submission-Example-nop-321; status = current; type = Patienteninformation; date = 2024-07-01 00:00:00+0000](DocumentReference-DocRef-PI-Paxlovid.md)

> **name****productName**: PAXLOVID Filmtabl 4x150mg/2x100mg**type**:Zugelassener Arzneimittelname

### Usages

| | | |
| :--- | :--- | :--- |
| - | **Country** | **Language** |
| * | Switzerland | German (Switzerland) |




## Resource Content

```json
{
  "resourceType" : "MedicinalProductDefinition",
  "id" : "Paxlovid-Filmcoatedtablet",
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
      "valueString" : "Befristete Limitation bis 31.12.2025. PAXLOVID wird als antivirale Monotherapie für die Behandlung einer bestätigten Covid-19 Infektion (Positiver Erregernachweis Antigen/PCR und vorhandener Covid-19-Symptome) in folgenden Fällen vergütet:\n • in einer Dosierung von 300 mg Nirmatrelvir (zwei Tabletten zu je 150 mg) und 100 mg Ritonavir (eine Tablette zu 100 mg) zur gleichzeitigen Einnahme alle 12 Stunden, über einen Zeitraum von 5 Tagen\n • zur Frühbehandlung (ausser bei immunsupprimierten Personen vorzugsweise innerhalb von 5 Tagen nach Symptombeginn) bei Erwachsenen, die keine Sauerstofftherapie oder Hospitalisierung aufgrund von COVID-19 benötigen und für welche gemäss der aktuell gültigen Kriterienliste der Schweizerischen Gesellschaft für Infektiologie (SSI) (https://www.bag.admin.ch/bag/de/home/medizin-und-forschung/heilmittel/versorgung-covid-19-arzneimittel.html) ein erhöhtes Risiko für einen schweren COVID-19-Verlauf besteht."
    }
  ],
  "identifier" : [
    {
      "system" : "http://fhir.ch/ig/ch-epl/sid/mpid",
      "value" : "CH-7601001010604-6879301"
    }
  ],
  "indication" : "Paxlovid wird angewendet für die Behandlung der Coronavirus-Krankheit 2019 (COVID-19) bei Erwachsenen, die keine Sauerstofftherapie oder Hospitalisierung aufgrund von COVID-19 benötigen und bei denen ein erhöhtes Risiko für einen schweren Verlauf von COVID-19 besteht (siehe «Klinische Wirksamkeit»).\nPaxlovid ist nicht als Ersatz für eine Impfung gegen COVID-19 vorgesehen. Paxlovid sollte gemäss den offiziellen Empfehlungen und unter Berücksichtigung der lokalen epidemiologischen Daten zu zirkulierenden SARS-CoV-2-Varianten angewendet werden.",
  "legalStatusOfSupply" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-legal-status-of-supply",
        "code" : "756005022002",
        "display" : "Medicinal product subject to medical or veterinary prescription single dispensation (A+)"
      }
    ]
  },
  "additionalMonitoringIndicator" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-additional-monitoring-indicator",
        "code" : "756005001001",
        "display" : "Black Triangle Warning"
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
          "code" : "J05AE"
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
          "code" : "080000",
          "display" : "08. INFEKTIONSKRANKHEITEN"
        },
        {
          "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-index-therapeuticus",
          "code" : "080300",
          "display" : "08.03. Mittel gegen Viren"
        }
      ]
    }
  ],
  "attachedDocument" : [
    {
      "reference" : "DocumentReference/DocRef-FI-Paxlovid"
    },
    {
      "reference" : "DocumentReference/DocRef-PI-Paxlovid"
    }
  ],
  "name" : [
    {
      "productName" : "PAXLOVID Filmtabl 4x150mg/2x100mg",
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
