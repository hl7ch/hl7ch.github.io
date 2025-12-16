# Desired Accommodation - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Desired Accommodation**

## ValueSet: Desired Accommodation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/ValueSet/ch-orf-vs-desiredaccommodation | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfVsDesiredAccommodation |
| **Copyright/Legal**: CC0-1.0 | |

 
Value Set for CH ORF Desired Accomodation 

 **References** 

* [CH ORF Desired Accommodation](StructureDefinition-ch-orf-desiredaccommodation.md)

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
  "id" : "ch-orf-vs-desiredaccommodation",
  "url" : "http://fhir.ch/ig/ch-orf/ValueSet/ch-orf-vs-desiredaccommodation",
  "version" : "3.0.2",
  "name" : "ChOrfVsDesiredAccommodation",
  "title" : "Desired Accomodation",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T09:36:47+00:00",
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
  "description" : "Value Set for CH ORF Desired Accomodation",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-21-encountertype",
        "concept" : [
          {
            "code" : "1",
            "display" : "allgemein"
          },
          {
            "code" : "2",
            "display" : "halbprivat"
          },
          {
            "code" : "3",
            "display" : "privat"
          }
        ]
      }
    ]
  }
}

```
