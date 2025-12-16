# CH EPREG VS: Fetal RhD Antigen - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG VS: Fetal RhD Antigen**

## ValueSet: CH EPREG VS: Fetal RhD Antigen 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/ValueSet/fetal-rhd-antigen | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:FetalRhDAntigen |
| **Copyright/Legal**: CC0-1.0 | |

 
This value set includes LOINC codes for the fetal Rhesus D determination. 

 **References** 

* [CH EPREG Observation (Lab): Fetal RhD](StructureDefinition-ch-epreg-observation-fetal-rhd.md)

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
  "id" : "fetal-rhd-antigen",
  "url" : "http://fhir.ch/ig/ch-epreg/ValueSet/fetal-rhd-antigen",
  "version" : "1.0.0",
  "name" : "FetalRhDAntigen",
  "title" : "CH EPREG VS: Fetal RhD Antigen",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T12:22:20+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    }
  ],
  "description" : "This value set includes LOINC codes for the fetal Rhesus D determination.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "LA22747-2",
            "display" : "RhD positive"
          },
          {
            "code" : "LA22748-0",
            "display" : "RhD negative"
          }
        ]
      }
    ]
  }
}

```
