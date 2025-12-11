# CH IG SNOMED CT - CH IG (R4) v1.2.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IG SNOMED CT**

## ValueSet: CH IG SNOMED CT 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ig/ValueSet/sct | *Version*:1.2.3 |
| Draft as of 2025-12-11 | *Computable Name*:SctVS |
| **Copyright/Legal**: CC0-1.0 | |

 
Example value set including SNOMED CT codes from the international and the Swiss edition. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

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
  "id" : "sct",
  "url" : "http://fhir.ch/ig/ch-ig/ValueSet/sct",
  "version" : "1.2.3",
  "name" : "SctVS",
  "title" : "CH IG SNOMED CT",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-12-11T10:31:14+00:00",
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
  "description" : "Example value set including SNOMED CT codes from the international and the Swiss edition.",
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
            "code" : "736378000",
            "display" : "Medication management plan (record artifact)"
          },
          {
            "code" : "721912009",
            "display" : "Medication summary document (record artifact)"
          }
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/2011000195101",
        "concept" : [
          {
            "code" : "82291000195104",
            "display" : "Medication dispense document (record artifact)"
          }
        ]
      }
    ]
  }
}

```
