# CH EPREG VS: Blood Group - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG VS: Blood Group**

## ValueSet: CH EPREG VS: Blood Group 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/ValueSet/blood-group | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:BloodGroup |
| **Copyright/Legal**: CC0-1.0 | |

 
This value set includes SNOMED CT codes for blood group findings. 

 **References** 

* [CH EPREG Observation (Lab): Blood Group](StructureDefinition-ch-epreg-observation-blood-group.md)

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
  "id" : "blood-group",
  "url" : "http://fhir.ch/ig/ch-epreg/ValueSet/blood-group",
  "version" : "1.0.0",
  "name" : "BloodGroup",
  "title" : "CH EPREG VS: Blood Group",
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
  "description" : "This value set includes SNOMED CT codes for blood group findings.",
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
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "112144000",
            "display" : "Blood group A (finding)"
          },
          {
            "code" : "278149003",
            "display" : "Blood group A Rh(D) positive (finding)"
          },
          {
            "code" : "278152006",
            "display" : "Blood group A Rh(D) negative (finding)"
          },
          {
            "code" : "112149005",
            "display" : "Blood group B (finding)"
          },
          {
            "code" : "278150003",
            "display" : "Blood group B Rh(D) positive (finding)"
          },
          {
            "code" : "278153001",
            "display" : "Blood group B Rh(D) negative (finding)"
          },
          {
            "code" : "165743006",
            "display" : "Blood group AB (finding)"
          },
          {
            "code" : "278151004",
            "display" : "Blood group AB Rh(D) positive (finding)"
          },
          {
            "code" : "278154007",
            "display" : "Blood group AB Rh(D) negative (finding)"
          },
          {
            "code" : "58460004",
            "display" : "Blood group O (finding)"
          },
          {
            "code" : "278147001",
            "display" : "Blood group O Rh(D) positive (finding)"
          },
          {
            "code" : "278148006",
            "display" : "Blood group O Rh(D) negative (finding)"
          },
          {
            "code" : "165747007",
            "display" : "RhD positive (finding)"
          },
          {
            "code" : "165746003",
            "display" : "RhD negative (finding)"
          }
        ]
      }
    ]
  }
}

```
