# CH EPL - Price Type - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPL - Price Type**

## CodeSystem: CH EPL - Price Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-price-type | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:ChEplPriceTypeCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH ePL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Price Type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChEplPricetypeVS](ValueSet-ch-epl-foph-pricetype.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-epl-foph-price-type",
  "url" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-price-type",
  "version" : "1.0.0",
  "name" : "ChEplPriceTypeCS",
  "title" : "CH EPL - Price Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-11T12:35:50+00:00",
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
  "description" : "CH ePL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Price Type",
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
  "count" : 3,
  "concept" : [
    {
      "code" : "756002005001",
      "display" : "Retail price",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Publikumspreis"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "PP"
        }
      ]
    },
    {
      "code" : "756002005002",
      "display" : "Ex-factory price",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Fabrikabgabe Preis"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "FAP"
        }
      ]
    },
    {
      "code" : "756002005003",
      "display" : "Cost effective price",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Wirtschaftlicher Preis"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "WP"
        }
      ]
    }
  ]
}

```
