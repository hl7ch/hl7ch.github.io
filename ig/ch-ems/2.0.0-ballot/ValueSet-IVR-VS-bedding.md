# IVR Transport Bedding - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Transport Bedding**

## ValueSet: IVR Transport Bedding 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-bedding | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:ECH0207bedding |
| **Copyright/Legal**: CC0-1.0 | |

 
List of possible positions of the patient during the mission. 

 **References** 

* [CH EMS Procedure: Transportation](StructureDefinition-ch-ems-procedure-transportation.md)
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
  "id" : "IVR-VS-bedding",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-bedding",
  "version" : "2.0.0-ballot",
  "name" : "ECH0207bedding",
  "title" : "IVR Transport Bedding",
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
  "description" : "List of possible positions of the patient during the mission.",
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
        "code" : "423212001",
        "display" : "Trendelenburg positioning",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Trendelenburg-Lage"
        },
        {
          "language" : "fr-CH",
          "value" : "Position de Trendelenburg"
        },
        {
          "language" : "it-CH",
          "value" : "Posizione di Trendelenburg"
        }]
      },
      {
        "code" : "74964007",
        "display" : "Other",
        "designation" : [{
          "language" : "de-CH",
          "value" : "andere"
        },
        {
          "language" : "fr-CH",
          "value" : "autre"
        },
        {
          "language" : "it-CH",
          "value" : "altro"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000101",
        "display" : "seated",
        "designation" : [{
          "language" : "de-CH",
          "value" : "sitzend"
        },
        {
          "language" : "fr-CH",
          "value" : "assis"
        },
        {
          "language" : "it-CH",
          "value" : "seduto"
        }]
      },
      {
        "code" : "1000102",
        "display" : "partly lying",
        "designation" : [{
          "language" : "de-CH",
          "value" : "halb liegend"
        },
        {
          "language" : "fr-CH",
          "value" : "semi-assis"
        },
        {
          "language" : "it-CH",
          "value" : "Semiseduto"
        }]
      },
      {
        "code" : "1000103",
        "display" : "laying",
        "designation" : [{
          "language" : "de-CH",
          "value" : "liegend"
        },
        {
          "language" : "fr-CH",
          "value" : "couché"
        },
        {
          "language" : "it-CH",
          "value" : "sdraiato"
        }]
      },
      {
        "code" : "1000104",
        "display" : "legs up",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Beine hoch"
        },
        {
          "language" : "fr-CH",
          "value" : "Jambes surélevées"
        },
        {
          "language" : "it-CH",
          "value" : "Gambe rialzate"
        }]
      },
      {
        "code" : "1000105",
        "display" : "legs down",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Beine tief"
        },
        {
          "language" : "fr-CH",
          "value" : "Jambes en bas"
        },
        {
          "language" : "it-CH",
          "value" : "Gambe in giù"
        }]
      },
      {
        "code" : "1000106",
        "display" : "knee kick",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Kniekick"
        },
        {
          "language" : "fr-CH",
          "value" : "Coup de genou"
        },
        {
          "language" : "it-CH",
          "value" : "Ginocchia piegate"
        }]
      },
      {
        "code" : "1000107",
        "display" : "abdominal position",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Bauchlage"
        },
        {
          "language" : "fr-CH",
          "value" : "Décubitus ventral"
        },
        {
          "language" : "it-CH",
          "value" : "Decubito Prono"
        }]
      },
      {
        "code" : "1000108",
        "display" : "side position left",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Seitenlage links"
        },
        {
          "language" : "fr-CH",
          "value" : "Décubitus latéral gauche"
        },
        {
          "language" : "it-CH",
          "value" : "Decubito laterale sinistro"
        }]
      },
      {
        "code" : "1000109",
        "display" : "side position right",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Seitenlage rechts"
        },
        {
          "language" : "fr-CH",
          "value" : "Décubitus latéral droite"
        },
        {
          "language" : "it-CH",
          "value" : "Decubito laterale destro"
        }]
      }]
    }]
  }
}

```
