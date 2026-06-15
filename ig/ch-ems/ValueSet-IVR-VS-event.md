# IVR Event - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Event**

## ValueSet: IVR Event 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-event | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSevent |
| **Copyright/Legal**: CC0-1.0 | |

 
List of types of emergency events. 

 **References** 

* [CH EMS Observation: Anamnesis Event](StructureDefinition-ch-ems-observation-anamnesisevent.md)
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
  "id" : "IVR-VS-event",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-event",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSevent",
  "title" : "IVR Event",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-06-15T08:07:03+00:00",
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
  "description" : "List of types of emergency events.",
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
        "code" : "39104002",
        "display" : "Illness",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Krankheit"
        },
        {
          "language" : "fr-CH",
          "value" : "Maladie"
        },
        {
          "language" : "it-CH",
          "value" : "Malattia"
        }]
      },
      {
        "code" : "52684005",
        "display" : "Assault",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Überfall"
        },
        {
          "language" : "fr-CH",
          "value" : "Assault"
        },
        {
          "language" : "it-CH",
          "value" : "Assalto"
        }]
      },
      {
        "code" : "19440001",
        "display" : "Explosion",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Explosion"
        },
        {
          "language" : "fr-CH",
          "value" : "Explosion"
        },
        {
          "language" : "it-CH",
          "value" : "Esplosione"
        }]
      },
      {
        "code" : "80032004",
        "display" : "Fire",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Brand"
        },
        {
          "language" : "fr-CH",
          "value" : "Incendie"
        },
        {
          "language" : "it-CH",
          "value" : "Incendio"
        }]
      },
      {
        "code" : "1912002",
        "display" : "Fall",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Sturz"
        },
        {
          "language" : "fr-CH",
          "value" : "Chute"
        },
        {
          "language" : "it-CH",
          "value" : "Caduta"
        }]
      },
      {
        "code" : "7542004",
        "display" : "Work Accident",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Arbeitsunfall"
        },
        {
          "language" : "fr-CH",
          "value" : "Accident de travail"
        },
        {
          "language" : "it-CH",
          "value" : "Infortunio sul lavoro"
        }]
      },
      {
        "code" : "57701003",
        "display" : "Sports Accident",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Sportunfall"
        },
        {
          "language" : "fr-CH",
          "value" : "Accident de sport"
        },
        {
          "language" : "it-CH",
          "value" : "Infortunio sportivo"
        }]
      },
      {
        "code" : "1631000175102",
        "display" : "Patient not asked",
        "designation" : [{
          "language" : "de-CH",
          "value" : "nicht erfragt"
        },
        {
          "language" : "fr-CH",
          "value" : "Pas demandé"
        },
        {
          "language" : "it-CH",
          "value" : "Non indagatto"
        }]
      },
      {
        "code" : "79573009",
        "display" : "Household Accident",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Haushaltsunfall"
        },
        {
          "language" : "fr-CH",
          "value" : "Accident domestique"
        },
        {
          "language" : "it-CH",
          "value" : "Infortunio domestico"
        }]
      },
      {
        "code" : "418161006",
        "display" : "Vehicle accident",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Verkehrsunfall"
        },
        {
          "language" : "fr-CH",
          "value" : "Accident de la circulation"
        },
        {
          "language" : "it-CH",
          "value" : "Incidente della circolazione"
        }]
      },
      {
        "code" : "74964007",
        "display" : "Other",
        "designation" : [{
          "language" : "de-CH",
          "value" : "anderes"
        },
        {
          "language" : "fr-CH",
          "value" : "Autre"
        },
        {
          "language" : "it-CH",
          "value" : "Altro"
        }]
      },
      {
        "code" : "261665006",
        "display" : "Unknown",
        "designation" : [{
          "language" : "de-CH",
          "value" : "unbekannt"
        },
        {
          "language" : "fr-CH",
          "value" : "Inconnu"
        },
        {
          "language" : "it-CH",
          "value" : "Sconosciuto"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "100005",
        "display" : "no information",
        "designation" : [{
          "language" : "de-CH",
          "value" : "keine Angaben"
        },
        {
          "language" : "fr-CH",
          "value" : "Pas d'informations"
        },
        {
          "language" : "it-CH",
          "value" : "Nessuna informazione"
        }]
      }]
    }]
  }
}

```
