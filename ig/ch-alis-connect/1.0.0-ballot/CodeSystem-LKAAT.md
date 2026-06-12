# Leistungskatalog ambulante Arzttarife (LKAAT) - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Leistungskatalog ambulante Arzttarife (LKAAT)**

## CodeSystem: Leistungskatalog ambulante Arzttarife (LKAAT) 

| | |
| :--- | :--- |
| *Official URL*:http://forum-datenaustausch.ch/tariff/TMA | *Version*:1.0.0-ballot |
| Active as of 2024-12-06 | *Computable Name*:LKAAT |
| **Copyright/Legal**: CC0-1.0 | |

 
Externally maintained ambulatory physician tariff catalogue (LKAAT) published by OAAT. Declared as not-present: its codes are referenced from this IG but not enumerated here, because the catalogue is owned and published externally. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [LKAAT](ValueSet-lkaat.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "LKAAT",
  "url" : "http://forum-datenaustausch.ch/tariff/TMA",
  "version" : "1.0.0-ballot",
  "name" : "LKAAT",
  "title" : "Leistungskatalog ambulante Arzttarife (LKAAT)",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-12-06T00:00:00+00:00",
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
  "caseSensitive" : true,
  "hierarchyMeaning" : "is-a",
  "content" : "not-present"
}

```
