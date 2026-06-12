# LKAAT - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **LKAAT**

## ValueSet: LKAAT 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/ValueSet/lkaat | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:LKAAT |
| **Copyright/Legal**: CC0-1.0 | |

 
Externally maintained ambulatory physician tariff catalogue (LKAAT) published by OAAT. Declared as not-present: its codes are referenced from this IG but not enumerated here, because the catalogue is owned and published externally. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

No Expansion for this valueset (Unknown Code System)

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
  "id" : "lkaat",
  "url" : "http://fhir.ch/ig/ch-alis-connect/ValueSet/lkaat",
  "version" : "1.0.0-ballot",
  "name" : "LKAAT",
  "title" : "LKAAT",
  "status" : "active",
  "date" : "2026-06-12T18:37:15+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "Externally maintained ambulatory physician tariff catalogue (LKAAT) published by OAAT. Declared as not-present: its codes are referenced from this IG but not enumerated here, because the catalogue is owned and published externally.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://forum-datenaustausch.ch/tariff/TMA"
    }]
  }
}

```
