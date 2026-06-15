# IVR Valuables Type - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Valuables Type**

## ValueSet: IVR Valuables Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-valType | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSvalTxpe |
| **Copyright/Legal**: CC0-1.0 | |

 
List of types of the patient's valuables. 

 **References** 

* [CH EMS Extension: Valuables Patient](StructureDefinition-ch-ems-ext-valuablespatient.md)
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
  "id" : "IVR-VS-valType",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-valType",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSvalTxpe",
  "title" : "IVR Valuables Type",
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
  "description" : "List of types of the patient's valuables.",
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
        "code" : "74964007",
        "display" : "Other",
        "designation" : [{
          "language" : "de-CH",
          "value" : "anderes"
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
        "code" : "1000126",
        "display" : "wedding ring",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Ehering"
        },
        {
          "language" : "fr-CH",
          "value" : "Alliance"
        },
        {
          "language" : "it-CH",
          "value" : "Fede nuziale"
        }]
      },
      {
        "code" : "1000127",
        "display" : "wallet",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Portemonnaie"
        },
        {
          "language" : "fr-CH",
          "value" : "Porte-monnaie"
        },
        {
          "language" : "it-CH",
          "value" : "Borsellino"
        }]
      },
      {
        "code" : "1000128",
        "display" : "wrist watch",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Armbanduhr"
        },
        {
          "language" : "fr-CH",
          "value" : "Montre-bracelet"
        },
        {
          "language" : "it-CH",
          "value" : "Orologio da polso"
        }]
      },
      {
        "code" : "1000129",
        "display" : "Fingerring",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Fingerring"
        },
        {
          "language" : "fr-CH",
          "value" : "Bague"
        },
        {
          "language" : "it-CH",
          "value" : "Anello"
        }]
      },
      {
        "code" : "1000130",
        "display" : "necklace",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Halskette"
        },
        {
          "language" : "fr-CH",
          "value" : "Collier"
        },
        {
          "language" : "it-CH",
          "value" : "Collana"
        }]
      },
      {
        "code" : "1000131",
        "display" : "billfold",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Brieftasche"
        },
        {
          "language" : "fr-CH",
          "value" : "Portefeuille"
        },
        {
          "language" : "it-CH",
          "value" : "Portafogli"
        }]
      },
      {
        "code" : "1000132",
        "display" : "handbag",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Handtasche"
        },
        {
          "language" : "fr-CH",
          "value" : "Sac à main"
        },
        {
          "language" : "it-CH",
          "value" : "Borsetta"
        }]
      },
      {
        "code" : "1000133",
        "display" : "bag",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Tasche"
        },
        {
          "language" : "fr-CH",
          "value" : "Sac"
        },
        {
          "language" : "it-CH",
          "value" : "Borsa"
        }]
      }]
    }]
  }
}

```
