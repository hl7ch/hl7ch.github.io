# IVR Transport Reason - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Transport Reason**

## ValueSet: IVR Transport Reason 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-transReason | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVStransReason |
| **Copyright/Legal**: CC0-1.0 | |

 
List of triggers for a mission. 

 **References** 

* [CH EMS Encounter](StructureDefinition-ch-ems-encounter.md)
* [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "IVR-VS-transReason",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-transReason",
  "version" : "2.0.0-ballot",
  "name" : "IVRVStransReason",
  "title" : "IVR Transport Reason",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-06-15T08:00:21+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "List of triggers for a mission.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "immutable" : false,
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000110",
        "display" : "emergency mission",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Notfall-Einsatz"
        },
        {
          "language" : "fr-CH",
          "value" : "Mission d'urgence"
        },
        {
          "language" : "it-CH",
          "value" : "Missione di emergenza"
        }]
      },
      {
        "code" : "1000111",
        "display" : "relocation",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Verlegung zwischen Institutionen"
        },
        {
          "language" : "fr-CH",
          "value" : "Transferts entre institutions"
        },
        {
          "language" : "it-CH",
          "value" : "Trasferimenti tra istituzioni"
        }]
      },
      {
        "code" : "1000112",
        "display" : "shuttle for emergency doctor",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Notarzt-Zubringer"
        },
        {
          "language" : "fr-CH",
          "value" : "Véhicule SMUR"
        },
        {
          "language" : "it-CH",
          "value" : "Automedica"
        }]
      },
      {
        "code" : "1000113",
        "display" : "incubator transport",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Isolettentransport"
        },
        {
          "language" : "fr-CH",
          "value" : "Transport isolette"
        },
        {
          "language" : "it-CH",
          "value" : "Trasporto con isoletta"
        }]
      },
      {
        "code" : "1000114",
        "display" : "neonatology mission",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Neonatologischer Einsatz"
        },
        {
          "language" : "fr-CH",
          "value" : "Intervention néonatale"
        },
        {
          "language" : "it-CH",
          "value" : "Intervento neonatale"
        }]
      },
      {
        "code" : "1000003",
        "display" : "stand-by mission",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Bereitschaftsdienst"
        },
        {
          "language" : "fr-CH",
          "value" : "Service de garde"
        },
        {
          "language" : "it-CH",
          "value" : "Guardia medica"
        }]
      },
      {
        "code" : "1000115",
        "display" : "return transport",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Rücktransport von Untersuchung"
        },
        {
          "language" : "fr-CH",
          "value" : "Transport de retour après examen"
        },
        {
          "language" : "it-CH",
          "value" : "Trasporto di ritorno dopo esame"
        }]
      },
      {
        "code" : "1000116",
        "display" : "intervention mission police",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Interventionseinsatz Polizei"
        },
        {
          "language" : "fr-CH",
          "value" : "Intervention pour la police"
        },
        {
          "language" : "it-CH",
          "value" : "Intervento per il polizia"
        }]
      },
      {
        "code" : "1000117",
        "display" : "self-referral",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Selbsteinweisung / Krankentransport"
        },
        {
          "language" : "fr-CH",
          "value" : "Auto-admission"
        },
        {
          "language" : "it-CH",
          "value" : "Auto-ricovero"
        }]
      },
      {
        "code" : "1000118",
        "display" : "stretcher mission",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Einsatz Stretcher"
        },
        {
          "language" : "fr-CH",
          "value" : "Intervention avec brancard"
        },
        {
          "language" : "it-CH",
          "value" : "Intervento con barella"
        }]
      },
      {
        "code" : "1000119",
        "display" : "mission for partner",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Einsatz für Vertragspartner"
        },
        {
          "language" : "fr-CH",
          "value" : "Intervention pour les partenaires contractuels"
        },
        {
          "language" : "it-CH",
          "value" : "Intervento per i partner contrattuali"
        }]
      },
      {
        "code" : "1000120",
        "display" : "involuntary committment",
        "designation" : [{
          "language" : "de-CH",
          "value" : "fürsorgerische Unterbringung"
        },
        {
          "language" : "fr-CH",
          "value" : "Hospitalisation non consensuelle"
        },
        {
          "language" : "it-CH",
          "value" : "Ricovero non consenzuale"
        }]
      },
      {
        "code" : "1000121",
        "display" : "service on place",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Dienstleistung vor Ort (DVO)"
        },
        {
          "language" : "fr-CH",
          "value" : "Service sur place"
        },
        {
          "language" : "it-CH",
          "value" : "Servizio sul posto"
        }]
      },
      {
        "code" : "1000122",
        "display" : "referral by doctor",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Ärztliche Einweisung"
        },
        {
          "language" : "fr-CH",
          "value" : "Admission médicale"
        },
        {
          "language" : "it-CH",
          "value" : "Ricovero medico"
        }]
      },
      {
        "code" : "1000123",
        "display" : "refuse of transport",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Transportverweigerung"
        },
        {
          "language" : "fr-CH",
          "value" : "Refus de transport"
        },
        {
          "language" : "it-CH",
          "value" : "Rifiuto di trasporto"
        }]
      }]
    }]
  }
}

```
