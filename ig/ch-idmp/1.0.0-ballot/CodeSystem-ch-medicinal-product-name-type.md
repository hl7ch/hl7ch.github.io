# CH - Medicinal Product Name Type - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH - Medicinal Product Name Type**

## CodeSystem: CH - Medicinal Product Name Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/CodeSystem/ch-medicinal-product-name-type | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChMedicinalProductNameTypeCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Typ des Arzneimittelnamens) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChMedicinalProductNameTypeVS](ValueSet-ch-medicinal-product-name-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-medicinal-product-name-type",
  "url" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-medicinal-product-name-type",
  "version" : "1.0.0-ballot",
  "name" : "ChMedicinalProductNameTypeCS",
  "title" : "CH - Medicinal Product Name Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-12T16:14:23+00:00",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Typ des Arzneimittelnamens)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 2,
  "concept" : [{
    "code" : "SMC",
    "display" : "Authorised Medicinal Product Name"
  },
  {
    "code" : "FOPH",
    "display" : "FOPH Medicinal Product Name"
  }]
}

```
