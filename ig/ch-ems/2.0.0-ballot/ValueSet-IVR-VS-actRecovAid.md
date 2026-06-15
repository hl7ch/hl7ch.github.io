# IVR Recovery Aid - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Recovery Aid**

## ValueSet: IVR Recovery Aid 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-actRecovAid | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:ActRecovAid |
| **Copyright/Legal**: CC0-1.0 | |

 
List of tools used during the rescue and transportation of the patient. 

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
  "id" : "IVR-VS-actRecovAid",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-actRecovAid",
  "version" : "2.0.0-ballot",
  "name" : "ActRecovAid",
  "title" : "IVR Recovery Aid",
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
  "description" : "List of tools used during the rescue and transportation of the patient.",
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
        "code" : "156009",
        "display" : "Spine board",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Rettungsbrett"
        },
        {
          "language" : "fr-CH",
          "value" : "Planche de sauvetage"
        },
        {
          "language" : "it-CH",
          "value" : "Asse spinale"
        }]
      },
      {
        "code" : "63562005",
        "display" : "Cervical collar",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Halskragen"
        },
        {
          "language" : "fr-CH",
          "value" : "Minerve"
        },
        {
          "language" : "it-CH",
          "value" : "Collare cervicale"
        }]
      },
      {
        "code" : "89149003",
        "display" : "Stretcher",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Schaufelbahre"
        },
        {
          "language" : "fr-CH",
          "value" : "Brancard cuvière"
        },
        {
          "language" : "it-CH",
          "value" : "Barella cucchiaio"
        }]
      },
      {
        "code" : "257389003",
        "display" : "Lap belt",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Beckengurt"
        },
        {
          "language" : "fr-CH",
          "value" : "Ceinture abdominale"
        },
        {
          "language" : "it-CH",
          "value" : "Cintura pelvica"
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
        "code" : "1000085",
        "display" : "vacuum pillow",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Vakuumkissen"
        },
        {
          "language" : "fr-CH",
          "value" : "Attelle à dépression"
        },
        {
          "language" : "it-CH",
          "value" : "Stecca a depressione"
        }]
      },
      {
        "code" : "1000086",
        "display" : "vacuum mattress",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Vakuummatraze"
        },
        {
          "language" : "fr-CH",
          "value" : "Matelas coquille"
        },
        {
          "language" : "it-CH",
          "value" : "Materasso a depressione"
        }]
      },
      {
        "code" : "1000087",
        "display" : "carrying chair",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Tragestuhl"
        },
        {
          "language" : "fr-CH",
          "value" : "Chaise de transport"
        },
        {
          "language" : "it-CH",
          "value" : "Sedia di trasporto"
        }]
      },
      {
        "code" : "1000088",
        "display" : "KED system",
        "designation" : [{
          "language" : "de-CH",
          "value" : "KED System"
        },
        {
          "language" : "fr-CH",
          "value" : "KED"
        },
        {
          "language" : "it-CH",
          "value" : "KED"
        }]
      },
      {
        "code" : "1000089",
        "display" : "Sam Splint",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Sam Splint"
        },
        {
          "language" : "fr-CH",
          "value" : "Attelle"
        },
        {
          "language" : "it-CH",
          "value" : "Stecca"
        }]
      },
      {
        "code" : "1000090",
        "display" : "Sam Sling",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Sam Sling"
        },
        {
          "language" : "fr-CH",
          "value" : "Ceinture pelvienne"
        },
        {
          "language" : "it-CH",
          "value" : "Cintura pelvica"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
          "valueString" : "und ähnliche Baby-Transport-Systeme"
        }],
        "code" : "1000091",
        "display" : "Maxi Cosi",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Maxi Cosi"
        },
        {
          "language" : "fr-CH",
          "value" : "Siège pour enfant"
        },
        {
          "language" : "it-CH",
          "value" : "Seggiolino per bambini"
        }]
      }]
    }]
  }
}

```
