# IVR Intensity - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Intensity**

## ValueSet: IVR Intensity 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-intensity | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSintensity |
| **Copyright/Legal**: CC0-1.0 | |

 
List of pulse strengths. 

 **References** 

* [CH EMS Observation: Heart Rate](StructureDefinition-ch-ems-observation-heartrate.md)
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
  "id" : "IVR-VS-intensity",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-intensity",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSintensity",
  "title" : "IVR Intensity",
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
  "description" : "List of pulse strengths.",
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
        "code" : "260407003",
        "display" : "Weak",
        "designation" : [{
          "language" : "de-CH",
          "value" : "schwach"
        },
        {
          "language" : "fr-CH",
          "value" : "Faible"
        },
        {
          "language" : "it-CH",
          "value" : "Debole"
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
        "code" : "260404005",
        "display" : "Strong",
        "designation" : [{
          "language" : "de-CH",
          "value" : "stark"
        },
        {
          "language" : "fr-CH",
          "value" : "Fort"
        },
        {
          "language" : "it-CH",
          "value" : "Forte"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000074",
        "display" : "not tangible",
        "designation" : [{
          "language" : "de-CH",
          "value" : "nicht fühlbar"
        },
        {
          "language" : "fr-CH",
          "value" : "Non perceptible"
        },
        {
          "language" : "it-CH",
          "value" : "Non percettibile"
        }]
      }]
    }]
  }
}

```
