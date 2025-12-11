# CH EPL - Product Type - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPL - Product Type**

## CodeSystem: CH EPL - Product Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-product-type | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:ChEplProductTypeCS |
| **Copyright/Legal**: CC0-1.0 | |

 
Code System for the Product Type from ePL used by FOPH 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChEplProductTypeVS](ValueSet-ch-epl-foph-product-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-epl-foph-product-type",
  "url" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-product-type",
  "version" : "1.0.0",
  "name" : "ChEplProductTypeCS",
  "title" : "CH EPL - Product Type",
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
  "description" : "Code System for the Product Type from ePL used by FOPH",
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
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 9,
  "concept" : [
    {
      "code" : "756001003001",
      "display" : "Generic product",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Generikum"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "G"
        }
      ]
    },
    {
      "code" : "756001003002",
      "display" : "Originator product",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Originalpräparat"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "O"
        }
      ]
    },
    {
      "code" : "756001003003",
      "display" : "Reference product",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Referenzpräparat"
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
      "code" : "756001003004",
      "display" : "Biosimilar",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Biosimilar"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "BioS"
        }
      ]
    },
    {
      "code" : "756001003005",
      "display" : "Complementary medicine",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Komplementärmedizinisches Präparat"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "K"
        }
      ]
    },
    {
      "code" : "756001003006",
      "display" : "Medicines with known active substances",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Arzneimittel mit bekanntem Wirkstoff"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "BWS"
        }
      ]
    },
    {
      "code" : "756001003007",
      "display" : "Vaccine",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Impfstoff"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "I"
        }
      ]
    },
    {
      "code" : "756001003008",
      "display" : "Parallel import product",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Parallelimportiertes Präparat"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "PI"
        }
      ]
    },
    {
      "code" : "756001003009",
      "display" : "Co-marketing product",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Co-Marketing Präparat"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "CoM"
        }
      ]
    }
  ]
}

```
