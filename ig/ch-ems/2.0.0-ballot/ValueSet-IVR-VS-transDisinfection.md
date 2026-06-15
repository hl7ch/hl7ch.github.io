# IVR Transport Unit Disinfection - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Transport Unit Disinfection**

## ValueSet: IVR Transport Unit Disinfection 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-transDisinfection | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:Ech0207transDisinfection |
| **Copyright/Legal**: CC0-1.0 | |

 
List of methods for cleaning and disinfecting the rescue device. 

 **References** 

* [CH EMS Extension: Disinfection](StructureDefinition-ch-ems-ext-disinfection.md)
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
  "id" : "IVR-VS-transDisinfection",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-transDisinfection",
  "version" : "2.0.0-ballot",
  "name" : "Ech0207transDisinfection",
  "title" : "IVR Transport Unit Disinfection",
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
  "description" : "List of methods for cleaning and disinfecting the rescue device.",
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
          "value" : "anderes Desinfektionsverfahren"
        },
        {
          "language" : "fr-CH",
          "value" : "Autre méthode de désinfection"
        },
        {
          "language" : "it-CH",
          "value" : "Altro metodo di disinfezione"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000124",
        "display" : "nebulize with H2O2",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Vernebelung H2O2"
        },
        {
          "language" : "fr-CH",
          "value" : "Nébulisation avec H2O2"
        },
        {
          "language" : "it-CH",
          "value" : "Nebulizzazione con H2O2"
        }]
      },
      {
        "code" : "1000125",
        "display" : "scrub disinfection  with H2O2",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Scheuer-Wisch-Desinfektion H2O2"
        },
        {
          "language" : "fr-CH",
          "value" : "Désinfection par frottement avec H2O2"
        },
        {
          "language" : "it-CH",
          "value" : "Disinfezione con strofinamento con H2O2"
        }]
      }]
    }]
  }
}

```
