# CH Core Claim - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Claim**

## Resource Profile: CH Core Claim 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-claim | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreClaim |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the claim resource for the representation of a list of professional services (e.g. doctor's visit) and products (e.g. medication) that have been or are to be provided for a patient. The profile defines general basic elements that can occur in Swiss use cases. In Switzerland, there are external standards for administrative processes between service providers and payers (e.g. Forum Datenaustausch, SHIP, eCH), therefore see the corresponding mapping. 

**Usages:**

* Examples for this Profile: [Claim/ClaimInpatientTreatmentPsychiatry](Claim-ClaimInpatientTreatmentPsychiatry.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-claim)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-claim.csv), [Excel](StructureDefinition-ch-core-claim.xlsx), [Schematron](StructureDefinition-ch-core-claim.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-claim",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-claim",
  "version" : "6.0.0",
  "name" : "CHCoreClaim",
  "title" : "CH Core Claim",
  "status" : "active",
  "date" : "2025-12-16T08:02:49+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Base definition of the claim resource for the representation of a list of professional services (e.g. doctor's visit) and products (e.g. medication) that have been or are to be provided for a patient. The profile defines general basic elements that can occur in Swiss use cases. In Switzerland, there are external standards for administrative processes between service providers and payers (e.g. Forum Datenaustausch, SHIP, eCH), therefore see the corresponding mapping.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "ch-core-claim-to-forum-datenaustausch",
      "uri" : "https://www.forum-datenaustausch.ch/de/xml-standards-formulare/release-45-451/generelle-rechnung-45/",
      "name" : "Forum Datenaustausch: Generelle Rechnung 4.5"
    },
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Claim",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Claim",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Claim",
        "path" : "Claim",
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:request/invoice:payload"
          }
        ]
      },
      {
        "id" : "Claim.extension",
        "path" : "Claim.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Claim.extension:biller",
        "path" : "Claim.extension",
        "sliceName" : "biller",
        "short" : "Biller in the case of a professional service or poduct provided.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-biller"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/{invoice:tiers_payant, invoice:tiers_garant}/invoice:biller"
          },
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "Biller / Rechnungssteller / Auteur facture / Fatturante"
          }
        ]
      },
      {
        "id" : "Claim.identifier",
        "path" : "Claim.identifier",
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:invoice (request_timestamp)"
          },
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "Document identifier / Dokument Identifikation / Document Identification / Documento Identificazione"
          }
        ]
      },
      {
        "id" : "Claim.type",
        "path" : "Claim.type",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-20-encounterclass"
        },
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/invoice:treatment (treatment)"
          },
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "Treatment type / Behandlungsart / Type admission / Tipo di ammissione"
          }
        ]
      },
      {
        "id" : "Claim.patient",
        "path" : "Claim.patient",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/{invoice:tiers_payant, invoice:tiers_garant}/invoice:patient"
          },
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "Patient / Patient / Patient / Paziente"
          }
        ]
      },
      {
        "id" : "Claim.created",
        "path" : "Claim.created",
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:invoice (request_date)"
          },
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "Invoice date / Rechnungsdatum / Date facture / Data fattura"
          }
        ]
      },
      {
        "id" : "Claim.provider",
        "path" : "Claim.provider",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/{invoice:tiers_payant, invoice:tiers_garant}/invoice:provider"
          },
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "Provider / Leistungserbringer / Four. de prestations / Prestatario"
          }
        ]
      },
      {
        "id" : "Claim.supportingInfo",
        "path" : "Claim.supportingInfo",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "category"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Claim.supportingInfo:treatmentReason",
        "path" : "Claim.supportingInfo",
        "sliceName" : "treatmentReason",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Claim.supportingInfo:treatmentReason.category",
        "path" : "Claim.supportingInfo.category",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/claiminformationcategory",
              "code" : "patientreasonforvisit"
            }
          ]
        }
      },
      {
        "id" : "Claim.supportingInfo:treatmentReason.code",
        "path" : "Claim.supportingInfo.code",
        "short" : "Treatment reason",
        "min" : 1,
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/treatmentreason"
        },
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/invoice:treatment (reason)"
          },
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "Treatment reason / Behandlungsgrund / Motif traitement / Motivo trattamento"
          }
        ]
      },
      {
        "id" : "Claim.supportingInfo:remark",
        "path" : "Claim.supportingInfo",
        "sliceName" : "remark",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Claim.supportingInfo:remark.category",
        "path" : "Claim.supportingInfo.category",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/claiminformationcategory",
              "code" : "info"
            }
          ]
        }
      },
      {
        "id" : "Claim.supportingInfo:remark.value[x]",
        "path" : "Claim.supportingInfo.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Claim.supportingInfo:remark.value[x]:valueString",
        "path" : "Claim.supportingInfo.value[x]",
        "sliceName" : "valueString",
        "short" : "Remark",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/invoice:remark"
          },
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "Remark / Bemerkung / Commentaire / Osservazioni"
          }
        ]
      },
      {
        "id" : "Claim.diagnosis.diagnosis[x]",
        "path" : "Claim.diagnosis.diagnosis[x]",
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/invoice:treatment/invoice:diagnosis (type, code)"
          },
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "Diagnosis / Diagnose / Diagnostic / Diagnosi"
          }
        ]
      },
      {
        "id" : "Claim.insurance.coverage",
        "path" : "Claim.insurance.coverage",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-coverage"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/{invoice:tiers_payant, invoice:tiers_garant}/invoice:insurance"
          }
        ]
      },
      {
        "id" : "Claim.item.extension",
        "path" : "Claim.item.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Claim.item.extension:responsible",
        "path" : "Claim.item.extension",
        "sliceName" : "responsible",
        "short" : "Responsible for the service or product provided",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-responsible"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/invoice:services/invoice:service (responsible_id)"
          },
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "Responsible / Verantwortlicher / Responsable / Responsabile"
          }
        ]
      },
      {
        "id" : "Claim.item.sequence",
        "path" : "Claim.item.sequence",
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/invoice:services/invoice:service (record_id)"
          }
        ]
      },
      {
        "id" : "Claim.item.category.coding",
        "path" : "Claim.item.category.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Claim.item.category.coding:tariff",
        "path" : "Claim.item.category.coding",
        "sliceName" : "tariff",
        "short" : "Tariff",
        "min" : 0,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "Tariff / Tarif / Tarif / Tarifa"
          }
        ]
      },
      {
        "id" : "Claim.item.category.coding:tariff.system",
        "path" : "Claim.item.category.coding.system",
        "min" : 1,
        "patternUri" : "http://forum-datenaustausch.ch/tariff"
      },
      {
        "id" : "Claim.item.category.coding:tariff.code",
        "path" : "Claim.item.category.coding.code",
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/invoice:services/invoice:service (tariff_type)"
          }
        ]
      },
      {
        "id" : "Claim.item.productOrService",
        "path" : "Claim.item.productOrService",
        "short" : "Tariff number",
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "Tariff number / Tarifziffer / Code tarifaire / Cod. tariffa"
          }
        ]
      },
      {
        "id" : "Claim.item.productOrService.coding",
        "path" : "Claim.item.productOrService.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Claim.item.productOrService.coding.code",
        "path" : "Claim.item.productOrService.coding.code",
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/invoice:services/invoice:service (code)"
          }
        ]
      },
      {
        "id" : "Claim.item.productOrService.coding.display",
        "path" : "Claim.item.productOrService.coding.display",
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/invoice:services/invoice:service (name)"
          }
        ]
      },
      {
        "id" : "Claim.item.productOrService.coding:GTIN",
        "path" : "Claim.item.productOrService.coding",
        "sliceName" : "GTIN",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Claim.item.productOrService.coding:GTIN.system",
        "path" : "Claim.item.productOrService.coding.system",
        "min" : 1,
        "patternUri" : "urn:oid:2.51.1.1"
      },
      {
        "id" : "Claim.item.productOrService.coding:TARMED",
        "path" : "Claim.item.productOrService.coding",
        "sliceName" : "TARMED",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Claim.item.productOrService.coding:TARMED.system",
        "path" : "Claim.item.productOrService.coding.system",
        "min" : 1,
        "patternUri" : "urn:oid:2.16.756.5.30.1.129.1.4"
      },
      {
        "id" : "Claim.item.serviced[x]",
        "path" : "Claim.item.serviced[x]",
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/invoice:services/invoice:service (date_begin, date_end)"
          }
        ]
      },
      {
        "id" : "Claim.item.quantity.value",
        "path" : "Claim.item.quantity.value",
        "mapping" : [
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "invoice:body/invoice:services/invoice:service (quantity)"
          },
          {
            "identity" : "ch-core-claim-to-forum-datenaustausch",
            "map" : "Quantity / Anzahl / Quantité / Quantità"
          }
        ]
      }
    ]
  }
}

```
