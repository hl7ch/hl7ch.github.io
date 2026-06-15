# IVR Eye Form - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Eye Form**

## ValueSet: IVR Eye Form 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-eyeForm | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSeyeForm |
| **Copyright/Legal**: CC0-1.0 | |

 
List of shapes of the pupils. 

 **References** 

* [CH EMS Observation: Pupil Shape](StructureDefinition-ch-ems-observation-pupilshape.md)
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
  "id" : "IVR-VS-eyeForm",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-eyeForm",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSeyeForm",
  "title" : "IVR Eye Form",
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
  "description" : "List of shapes of the pupils.",
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
        "code" : "421356009",
        "display" : "Pupil round",
        "designation" : [{
          "language" : "de-CH",
          "value" : "rund"
        },
        {
          "language" : "fr-CH",
          "value" : "rond"
        },
        {
          "language" : "it-CH",
          "value" : "rotondo"
        }]
      },
      {
        "code" : "79017007",
        "display" : "Deformed pupil",
        "designation" : [{
          "language" : "de-CH",
          "value" : "deformiert"
        },
        {
          "language" : "fr-CH",
          "value" : "déformé"
        },
        {
          "language" : "it-CH",
          "value" : "deformato"
        }]
      }]
    }]
  }
}

```
