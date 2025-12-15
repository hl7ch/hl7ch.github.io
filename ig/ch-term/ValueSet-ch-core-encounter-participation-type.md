# ChCoreEncounterParticipationType - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ChCoreEncounterParticipationType**

## ValueSet: ChCoreEncounterParticipationType 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ValueSet/ch-core-encounter-participation-type | *Version*:3.3.0 |
| Active as of 2020-04-06 | *Computable Name*:ChCoreEncounterParticipationType |
| **Copyright/Legal**: CC0-1.0 | |

 
This value set defines a set of codes that can be used to indicate how an individual participates in an encounter. In Switzerland the primary care physician is added to the extensible base ValueSet. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ch-core-encounter-participation-type) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ch-core-encounter-participation-type",
  "url" : "http://fhir.ch/ig/ch-core/ValueSet/ch-core-encounter-participation-type",
  "version" : "3.3.0",
  "name" : "ChCoreEncounterParticipationType",
  "title" : "ChCoreEncounterParticipationType",
  "status" : "active",
  "experimental" : false,
  "date" : "2020-04-06",
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
  "description" : "This value set defines a set of codes that can be used to indicate how an individual participates in an encounter. In Switzerland the primary care physician is added to the extensible base ValueSet.",
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
        "valueSet" : ["http://hl7.org/fhir/ValueSet/encounter-participant-type"]
      },
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v3-ParticipationFunction",
        "concept" : [
          {
            "code" : "PCP",
            "display" : "primary care physician"
          }
        ]
      }
    ]
  }
}

```
