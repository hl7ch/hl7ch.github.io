# IVR Blood Pressure Method - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Blood Pressure Method**

## ValueSet: IVR Blood Pressure Method 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-pressureMethod | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSpressureMethod |
| **Copyright/Legal**: CC0-1.0 | |

 
List of methods for measuring the blood pressure. 

 **References** 

* [CH EMS Observation: Blood Pressure](StructureDefinition-ch-ems-observation-bloodpressure.md)
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
  "id" : "IVR-VS-pressureMethod",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-pressureMethod",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSpressureMethod",
  "title" : "IVR Blood Pressure Method",
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
  "description" : "List of methods for measuring the blood pressure.",
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
        "code" : "10179008",
        "display" : "invasive",
        "designation" : [{
          "language" : "de-CH",
          "value" : "invasiv"
        },
        {
          "language" : "fr-CH",
          "value" : "invasif"
        },
        {
          "language" : "it-CH",
          "value" : "invasivo"
        }]
      },
      {
        "code" : "22762002",
        "display" : "Non-invasive",
        "designation" : [{
          "language" : "de-CH",
          "value" : "nicht invasiv"
        },
        {
          "language" : "fr-CH",
          "value" : "Non invasif"
        },
        {
          "language" : "it-CH",
          "value" : "Non invasivo"
        }]
      }]
    }]
  }
}

```
