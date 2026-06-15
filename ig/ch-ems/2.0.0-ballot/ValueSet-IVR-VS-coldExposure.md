# IVR Cold Exposure - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Cold Exposure**

## ValueSet: IVR Cold Exposure 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-coldExposure | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVScoldExposure |
| **Copyright/Legal**: CC0-1.0 | |

 
List of possible degrees of frostbite. 

 **References** 

* [CH EMS Observation: Cold Exposure](StructureDefinition-ch-ems-observation-coldexposure.md)
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
  "id" : "IVR-VS-coldExposure",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-coldExposure",
  "version" : "2.0.0-ballot",
  "name" : "IVRVScoldExposure",
  "title" : "IVR Cold Exposure",
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
  "description" : "List of possible degrees of frostbite.",
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
        "code" : "1000146",
        "display" : "fourth-degree frostbite",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Erfrierungen 4. Grades"
        },
        {
          "language" : "fr-CH",
          "value" : "Gelures au 4ème degré"
        },
        {
          "language" : "it-CH",
          "value" : "Ipotermia di 4. grado"
        }]
      },
      {
        "code" : "1000145",
        "display" : "third-degree frostbite",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Erfrierungen 3. Grades"
        },
        {
          "language" : "fr-CH",
          "value" : "Gelures au 3ème degré"
        },
        {
          "language" : "it-CH",
          "value" : "Ipotermia di 3. grado"
        }]
      },
      {
        "code" : "1000144",
        "display" : "second-degree frostbite",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Erfrierungen 2. Grades"
        },
        {
          "language" : "fr-CH",
          "value" : "Gelures au 2ème degré"
        },
        {
          "language" : "it-CH",
          "value" : "Ipotermia di 2. grado"
        }]
      },
      {
        "code" : "1000143",
        "display" : "first-degree frostbite",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Erfrierungen 1. Grades"
        },
        {
          "language" : "fr-CH",
          "value" : "Gelures au 1er degré"
        },
        {
          "language" : "it-CH",
          "value" : "Ipotermia di 1. grado"
        }]
      }]
    }]
  }
}

```
