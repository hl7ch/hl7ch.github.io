# IVR Infection Transport Precaution Personnel - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Infection Transport Precaution Personnel**

## ValueSet: IVR Infection Transport Precaution Personnel 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-InfectPersPrecaution | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:Ech0207InfectPersPrecaution |
| **Copyright/Legal**: CC0-1.0 | |

 
List of precautions to be taken by staff when transporting infected persons. 

 **References** 

* [CH EMS Procedure: Precautions Infection](StructureDefinition-ch-ems-procedure-precautionsinfection.md)
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
  "id" : "IVR-VS-InfectPersPrecaution",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-InfectPersPrecaution",
  "version" : "2.0.0-ballot",
  "name" : "Ech0207InfectPersPrecaution",
  "title" : "IVR Infection Transport Precaution Personnel",
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
  "description" : "List of precautions to be taken by staff when transporting infected persons.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "409528009",
        "display" : "Surgical face mask",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Operationsmaske"
        },
        {
          "language" : "fr-CH",
          "value" : "masque chirurgical"
        },
        {
          "language" : "it-CH",
          "value" : "maschera chirurgica"
        }]
      },
      {
        "code" : "469008007",
        "display" : "Airway protection face mask",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Schutzmaske mit Ventil"
        },
        {
          "language" : "fr-CH",
          "value" : "Masque de protection avec valve"
        },
        {
          "language" : "it-CH",
          "value" : "Mascherine di protezione con valvola"
        }]
      },
      {
        "code" : "38126007",
        "display" : "Safety goggles",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Schutzbrille"
        },
        {
          "language" : "fr-CH",
          "value" : "Lunettes de protection"
        },
        {
          "language" : "it-CH",
          "value" : "Occhiali protettivi"
        }]
      },
      {
        "code" : "52291003",
        "display" : "Gloves",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Handschuhe"
        },
        {
          "language" : "fr-CH",
          "value" : "Gants"
        },
        {
          "language" : "it-CH",
          "value" : "Guanti"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000068",
        "display" : "disinfection of hands by Virugard",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Händedesinfektion mit Virugard"
        },
        {
          "language" : "fr-CH",
          "value" : "Désinfection des mains avec Virugard"
        },
        {
          "language" : "it-CH",
          "value" : "Disinfezione delle mani con Virugard"
        }]
      },
      {
        "code" : "1000069",
        "display" : "disinfection of hands by Sterilium",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Händedesinfektion mit Sterilium"
        },
        {
          "language" : "fr-CH",
          "value" : "Désinfection des mains avec Sterilium"
        },
        {
          "language" : "it-CH",
          "value" : "Disinfezione delle mani con Sterilium"
        }]
      },
      {
        "code" : "1000070",
        "display" : "operation clothes",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Operationsmantel"
        },
        {
          "language" : "fr-CH",
          "value" : "Vêtements chirurgicaux"
        },
        {
          "language" : "it-CH",
          "value" : "Abiti chirurgici"
        }]
      },
      {
        "code" : "1000071",
        "display" : "cloth change after mission",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Dienstkleiderwechsel nach Einsatzende"
        },
        {
          "language" : "fr-CH",
          "value" : "Changement de vêtements après la fin de la mission"
        },
        {
          "language" : "it-CH",
          "value" : "Cambio di vestiti dopo la fine della missione"
        }]
      },
      {
        "code" : "1000072",
        "display" : "hazmat suit, ventilated",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Vollschutzabzug, belüftet"
        },
        {
          "language" : "fr-CH",
          "value" : "Combinaison de protection totale, ventilé"
        },
        {
          "language" : "it-CH",
          "value" : "Tutta di protezione completo, ventilato"
        }]
      },
      {
        "code" : "1000073",
        "display" : "other protective action",
        "designation" : [{
          "language" : "de-CH",
          "value" : "andere Schutzmassnahme"
        },
        {
          "language" : "fr-CH",
          "value" : "Autres mesures de protection"
        },
        {
          "language" : "it-CH",
          "value" : "Altre misure di sicurezza"
        }]
      }]
    }]
  }
}

```
