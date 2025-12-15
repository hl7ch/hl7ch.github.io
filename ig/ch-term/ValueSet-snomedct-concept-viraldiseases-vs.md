# Snomed CT Concept Viral Diseases - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Snomed CT Concept Viral Diseases**

## ValueSet: Snomed CT Concept Viral Diseases 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/snomedct-concept-viraldiseases-vs | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:SnomedCTConceptViralDiseases |
| **Copyright/Legal**: CC0-1.0 | |

 
The list of viral diseases by Snomed CT codes. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/snomedct-concept-viraldiseases-vs) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "snomedct-concept-viraldiseases-vs",
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/snomedct-concept-viraldiseases-vs",
  "version" : "3.3.0",
  "name" : "SnomedCTConceptViralDiseases",
  "title" : "Snomed CT Concept Viral Diseases",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:47:47+00:00",
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
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "The list of viral diseases by Snomed CT codes.",
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
        "system" : "http://snomed.info/sct",
        "filter" : [
          {
            "property" : "concept",
            "op" : "is-a",
            "value" : "34014006"
          }
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "filter" : [
          {
            "property" : "concept",
            "op" : "descendent-of",
            "value" : "34014006"
          }
        ]
      }
    ]
  }
}

```
