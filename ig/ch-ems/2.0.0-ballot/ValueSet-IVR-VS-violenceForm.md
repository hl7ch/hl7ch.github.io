# IVR Violence Form - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Violence Form**

## ValueSet: IVR Violence Form 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-violenceForm | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSviolenceForm |
| **Copyright/Legal**: CC0-1.0 | |

 
List of types of violence against ambulance personnel. 

 **References** 

* [CH EMS Extension: Violence](StructureDefinition-ch-ems-ext-violence.md)
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
  "id" : "IVR-VS-violenceForm",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-violenceForm",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSviolenceForm",
  "title" : "IVR Violence Form",
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
  "description" : "List of types of violence against ambulance personnel.",
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
        "code" : "260413007",
        "display" : "None",
        "designation" : [{
          "language" : "de-CH",
          "value" : "keine"
        },
        {
          "language" : "fr-CH",
          "value" : "Aucun"
        },
        {
          "language" : "it-CH",
          "value" : "Nessuna"
        }]
      },
      {
        "code" : "284616006",
        "display" : "Verbally threatening behaviour",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Verbale Drohung"
        },
        {
          "language" : "fr-CH",
          "value" : "Menaces verbales"
        },
        {
          "language" : "it-CH",
          "value" : "Minacce verbali"
        }]
      },
      {
        "code" : "12405001",
        "display" : "Spitting",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Anspucken"
        },
        {
          "language" : "fr-CH",
          "value" : "Crachat"
        },
        {
          "language" : "it-CH",
          "value" : "Sputo"
        }]
      },
      {
        "code" : "248109002",
        "display" : "Sexual offence",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Sexuelle Belästigung"
        },
        {
          "language" : "fr-CH",
          "value" : "Agression sexuelle"
        },
        {
          "language" : "it-CH",
          "value" : "Violenza sessuale"
        }]
      },
      {
        "code" : "74964007",
        "display" : "Other",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Anderes"
        },
        {
          "language" : "fr-CH",
          "value" : "Autre"
        },
        {
          "language" : "it-CH",
          "value" : "Altro"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000043",
        "display" : "contumeliousness",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Beschimpfung"
        },
        {
          "language" : "fr-CH",
          "value" : "Insulte"
        },
        {
          "language" : "it-CH",
          "value" : "Insulto"
        }]
      },
      {
        "code" : "1000044",
        "display" : "pelting with items",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Bewerfen mit Gegenständen"
        },
        {
          "language" : "fr-CH",
          "value" : "Lancer des objets"
        },
        {
          "language" : "it-CH",
          "value" : "Lancio di oggetti"
        }]
      },
      {
        "code" : "1000045",
        "display" : "unwanted touching",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Unerwünschte Berührung"
        },
        {
          "language" : "fr-CH",
          "value" : "Contact physique indésirable"
        },
        {
          "language" : "it-CH",
          "value" : "Contatto fisico indesiderato"
        }]
      },
      {
        "code" : "1000046",
        "display" : "hustling",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Stossen / Anrempeln"
        },
        {
          "language" : "fr-CH",
          "value" : "Bousculades"
        },
        {
          "language" : "it-CH",
          "value" : "Spintoni"
        }]
      },
      {
        "code" : "1000049",
        "display" : "slight corporal attack",
        "designation" : [{
          "language" : "de-CH",
          "value" : "leichter körperlicher Angriff"
        },
        {
          "language" : "fr-CH",
          "value" : "Agression physique légère"
        },
        {
          "language" : "it-CH",
          "value" : "Leggera aggressione fisica"
        }]
      },
      {
        "code" : "1000050",
        "display" : "schwerer körperlicher Angriff",
        "designation" : [{
          "language" : "de-CH",
          "value" : "schwerer körperlicher Angriff"
        },
        {
          "language" : "fr-CH",
          "value" : "Agression physique grave"
        },
        {
          "language" : "it-CH",
          "value" : "Severa aggressione fisica"
        }]
      },
      {
        "code" : "1000059",
        "display" : "threat with weapon",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Bedrohung mit Waffe"
        },
        {
          "language" : "fr-CH",
          "value" : "Menace avec arme"
        },
        {
          "language" : "it-CH",
          "value" : "Minaccia con arma"
        }]
      },
      {
        "code" : "1000060",
        "display" : "violation by weapon",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Verletzung mit Waffe"
        },
        {
          "language" : "fr-CH",
          "value" : "Blessure par arme"
        },
        {
          "language" : "it-CH",
          "value" : "Ferita con arma"
        }]
      }]
    }]
  }
}

```
