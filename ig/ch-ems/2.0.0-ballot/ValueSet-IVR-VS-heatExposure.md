# IVR Heat Exposure - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Heat Exposure**

## ValueSet: IVR Heat Exposure 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-heatExposure | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSheatExposure |
| **Copyright/Legal**: CC0-1.0 | |

 
List of degrees of burning. 

 **References** 

* [CH EMS Observation: Heat Exposure](StructureDefinition-ch-ems-observation-heatexposure.md)
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
  "id" : "IVR-VS-heatExposure",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-heatExposure",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSheatExposure",
  "title" : "IVR Heat Exposure",
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
  "description" : "List of degrees of burning.",
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
        "code" : "1000149",
        "display" : "third-degree burn",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Verbrennung 3. Grades"
        },
        {
          "language" : "fr-CH",
          "value" : "Brûlure au 3ème degré"
        },
        {
          "language" : "it-CH",
          "value" : "Ustione di 3. grado"
        }]
      },
      {
        "code" : "1000148",
        "display" : "second-degree burn",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Verbrennung 2. Grades"
        },
        {
          "language" : "fr-CH",
          "value" : "Brûlure au 2ème degré"
        },
        {
          "language" : "it-CH",
          "value" : "Ustione di 2. grado"
        }]
      },
      {
        "code" : "1000147",
        "display" : "first-degree burn",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Verbrennung 1. Grades"
        },
        {
          "language" : "fr-CH",
          "value" : "Brûlure au 1er degré"
        },
        {
          "language" : "it-CH",
          "value" : "Ustione di 1. grado"
        }]
      }]
    }]
  }
}

```
