# IVR Size - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Size**

## ValueSet: IVR Size 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-size | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSsize |
| **Copyright/Legal**: CC0-1.0 | |

 
List of the size of an object compared to normal. 

 **References** 

* [CH EMS Observation: Pupil Size](StructureDefinition-ch-ems-observation-pupilsize.md)
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
  "id" : "IVR-VS-size",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-size",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSsize",
  "title" : "IVR Size",
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
  "description" : "List of the size of an object compared to normal.",
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
        "code" : "260376009",
        "display" : "Enlarged",
        "designation" : [{
          "language" : "de-CH",
          "value" : "vergrössert"
        },
        {
          "language" : "fr-CH",
          "value" : "Grossi"
        },
        {
          "language" : "it-CH",
          "value" : "Ingrandito"
        }]
      },
      {
        "code" : "255509001",
        "display" : "Large",
        "designation" : [{
          "language" : "de-CH",
          "value" : "gross"
        },
        {
          "language" : "fr-CH",
          "value" : "Grand"
        },
        {
          "language" : "it-CH",
          "value" : "Grande"
        }]
      },
      {
        "code" : "17621005",
        "display" : "Normal",
        "designation" : [{
          "language" : "de-CH",
          "value" : "normal"
        },
        {
          "language" : "fr-CH",
          "value" : "Normal"
        },
        {
          "language" : "it-CH",
          "value" : "Normale"
        }]
      },
      {
        "code" : "255507004",
        "display" : "Small",
        "designation" : [{
          "language" : "de-CH",
          "value" : "klein"
        },
        {
          "language" : "fr-CH",
          "value" : "Petit"
        },
        {
          "language" : "it-CH",
          "value" : "Piccolo"
        }]
      }]
    }]
  }
}

```
