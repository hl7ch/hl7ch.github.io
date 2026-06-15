# IVR Team Role - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Team Role**

## ValueSet: IVR Team Role 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-teamRole | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSteamRole |
| **Copyright/Legal**: CC0-1.0 | |

 
List of the crew member's role. 

 **References** 

* [CH EMS Extension: Team Role](StructureDefinition-ch-ems-ext-teamrole.md)
* [CH EMS PractitionerRole](StructureDefinition-ch-ems-practitionerrole.md)
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
  "id" : "IVR-VS-teamRole",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-teamRole",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSteamRole",
  "title" : "IVR Team Role",
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
  "description" : "List of the crew member's role.",
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
        "code" : "28411006",
        "display" : "Neonatologist",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Neonatologe"
        },
        {
          "language" : "fr-CH",
          "value" : "Néonatologue"
        },
        {
          "language" : "it-CH",
          "value" : "Neonatologo"
        }]
      },
      {
        "code" : "224549000",
        "display" : "Neonatal nurse",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Neonatologie-Pflege"
        },
        {
          "language" : "fr-CH",
          "value" : "Infirmier/ère en néonatologie"
        },
        {
          "language" : "it-CH",
          "value" : "Infermiere/a in neonatologia"
        }]
      },
      {
        "code" : "308040008",
        "display" : "pilot",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Pilot"
        },
        {
          "language" : "fr-CH",
          "value" : "pilote"
        },
        {
          "language" : "it-CH",
          "value" : "pilota"
        }]
      },
      {
        "code" : "133932002",
        "display" : "Caregiver",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Betreuer"
        },
        {
          "language" : "fr-CH",
          "value" : "Soignant"
        },
        {
          "language" : "it-CH",
          "value" : "Curante"
        }]
      },
      {
        "code" : "309343006",
        "display" : "Physician",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Ärztin / Arzt"
        },
        {
          "language" : "fr-CH",
          "value" : "Médecin"
        },
        {
          "language" : "it-CH",
          "value" : "Medico"
        }]
      },
      {
        "code" : "309453006",
        "display" : "Registered midwife",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Hebamme"
        },
        {
          "language" : "fr-CH",
          "value" : "Sage femme"
        },
        {
          "language" : "it-CH",
          "value" : "Ostetrica"
        }]
      },
      {
        "code" : "106292003",
        "display" : "Professional nurse",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Pflegefachperson"
        },
        {
          "language" : "fr-CH",
          "value" : "Infirmière"
        },
        {
          "language" : "it-CH",
          "value" : "Infermiera"
        }]
      },
      {
        "code" : "74964007",
        "display" : "Other",
        "designation" : [{
          "language" : "de-CH",
          "value" : "andere Rolle"
        },
        {
          "language" : "fr-CH",
          "value" : "Autre rôle"
        },
        {
          "language" : "it-CH",
          "value" : "Altro ruolo"
        }]
      },
      {
        "code" : "62247001",
        "display" : "family doctor",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Hausarzt"
        },
        {
          "language" : "fr-CH",
          "value" : "Médecin de famille"
        },
        {
          "language" : "it-CH",
          "value" : "Medico di famiglia"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000138",
        "display" : "flight assistant",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Rettungsspezialist Helikopter"
        },
        {
          "language" : "fr-CH",
          "value" : "Assistant de vol"
        },
        {
          "language" : "it-CH",
          "value" : "Assistente di volo"
        }]
      },
      {
        "code" : "1000013",
        "display" : "driver",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Fahrer"
        },
        {
          "language" : "fr-CH",
          "value" : "Chauffeur"
        },
        {
          "language" : "it-CH",
          "value" : "Autista"
        }]
      },
      {
        "code" : "1000014",
        "display" : "trainee",
        "designation" : [{
          "language" : "de-CH",
          "value" : "in Ausbildung"
        },
        {
          "language" : "fr-CH",
          "value" : "en formation"
        },
        {
          "language" : "it-CH",
          "value" : "In formazione"
        }]
      },
      {
        "code" : "1000016",
        "display" : "attending doctor",
        "designation" : [{
          "language" : "de-CH",
          "value" : "betreuender Arzt"
        },
        {
          "language" : "fr-CH",
          "value" : "Médecin responsable"
        },
        {
          "language" : "it-CH",
          "value" : "Medico responsabile"
        }]
      },
      {
        "code" : "1000020",
        "display" : "apprentice",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Praktikant"
        },
        {
          "language" : "fr-CH",
          "value" : "Stagiaire"
        },
        {
          "language" : "it-CH",
          "value" : "Stagista"
        }]
      },
      {
        "code" : "1000021",
        "display" : "security force",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Sicherheitsbegleitung"
        },
        {
          "language" : "fr-CH",
          "value" : "Service sécurité"
        },
        {
          "language" : "it-CH",
          "value" : "Accompagnamento protettivo"
        }]
      }]
    }]
  }
}

```
