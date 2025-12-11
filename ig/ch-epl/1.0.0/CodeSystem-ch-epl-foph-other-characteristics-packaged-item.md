# CH EPL - Other Characteristics Packaged Item - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPL - Other Characteristics Packaged Item**

## CodeSystem: CH EPL - Other Characteristics Packaged Item 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-other-characteristics-packaged-item | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:ChEplOtherCharacteristicsPackagedItemCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH ePL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Other Characteristics of a Packaged Item 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChEplOtherCharacteristicsPackagedItemVS](ValueSet-ch-epl-foph-other-characteristics-packaged-item.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-epl-foph-other-characteristics-packaged-item",
  "url" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-other-characteristics-packaged-item",
  "version" : "1.0.0",
  "name" : "ChEplOtherCharacteristicsPackagedItemCS",
  "title" : "CH EPL - Other Characteristics Packaged Item",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-11T12:29:57+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "CH ePL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Other Characteristics of a Packaged Item",
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
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "756005041001",
      "display" : "Modal pack",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Modal-Packung"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "MoP"
        }
      ]
    },
    {
      "code" : "756005041002",
      "display" : "Large pack",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Grosse Packung"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "GrP"
        }
      ]
    }
  ]
}

```
