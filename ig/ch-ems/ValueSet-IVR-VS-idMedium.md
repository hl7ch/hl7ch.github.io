# IVR Identification Medium - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Identification Medium**

## ValueSet: IVR Identification Medium 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-idMedium | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSidMedium |
| **Copyright/Legal**: CC0-1.0 | |

 
List of identification medium. 

 **References** 

* [CH EMS Extension: Identification](StructureDefinition-ch-ems-ext-identification.md)
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
  "id" : "IVR-VS-idMedium",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-idMedium",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSidMedium",
  "title" : "IVR Identification Medium",
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
  "description" : "List of identification medium.",
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
        "code" : "1000053",
        "display" : "Identity card",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Identitätskarte"
        },
        {
          "language" : "fr-CH",
          "value" : "Carte d'identité"
        },
        {
          "language" : "it-CH",
          "value" : "Carta d'identità"
        }]
      },
      {
        "code" : "1000061",
        "display" : "passport",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Pass"
        },
        {
          "language" : "fr-CH",
          "value" : "Passeport"
        },
        {
          "language" : "it-CH",
          "value" : "Passaporto"
        }]
      },
      {
        "code" : "1000062",
        "display" : "Health insurance card",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Krankenkassenkarte"
        },
        {
          "language" : "fr-CH",
          "value" : "Carte d'assurance maladie"
        },
        {
          "language" : "it-CH",
          "value" : "Tessera di assicurazione sanitaria"
        }]
      },
      {
        "code" : "1000063",
        "display" : "Driver license",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Fahrausweis"
        },
        {
          "language" : "fr-CH",
          "value" : "Permis de conduire"
        },
        {
          "language" : "it-CH",
          "value" : "Patente di guida"
        }]
      },
      {
        "code" : "1000064",
        "display" : "personal statement",
        "designation" : [{
          "language" : "de-CH",
          "value" : "persönliche Aussage"
        },
        {
          "language" : "fr-CH",
          "value" : "Déclaration personnelle"
        },
        {
          "language" : "it-CH",
          "value" : "Dichiarazione personale"
        }]
      },
      {
        "code" : "1000065",
        "display" : "Credit card",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Kreditkarte"
        },
        {
          "language" : "fr-CH",
          "value" : "Carte de crédit"
        },
        {
          "language" : "it-CH",
          "value" : "Carta di credito"
        }]
      },
      {
        "code" : "1000066",
        "display" : "other identification piece",
        "designation" : [{
          "language" : "de-CH",
          "value" : "anderes Identifikationsmittel"
        },
        {
          "language" : "fr-CH",
          "value" : "Autre pièce d'identification"
        },
        {
          "language" : "it-CH",
          "value" : "Altro dispositivo di identificazione"
        }]
      }]
    }]
  }
}

```
