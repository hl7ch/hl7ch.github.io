# CH EPL - Listing Status - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPL - Listing Status**

## CodeSystem: CH EPL - Listing Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-listing-status | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:ChEplListingStatusCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH ePL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Listungs Status 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChEplListingStatusVS](ValueSet-ch-epl-foph-listing-status.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-epl-foph-listing-status",
  "url" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-listing-status",
  "version" : "1.0.0",
  "name" : "ChEplListingStatusCS",
  "title" : "CH EPL - Listing Status",
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
  "description" : "CH ePL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Listungs Status",
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
      "code" : "756001002001",
      "display" : "Listed",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Gelistet"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "L"
        }
      ]
    },
    {
      "code" : "756001002002",
      "display" : "Removed",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Gestrichen"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "R"
        }
      ]
    },
    {
      "code" : "756001002003",
      "display" : "Not listed",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Nicht gelistet"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "nL"
        }
      ]
    }
  ]
}

```
