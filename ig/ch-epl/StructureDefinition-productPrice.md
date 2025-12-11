# CH - EPL Product Price - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH - EPL Product Price**

## Extension: CH - EPL Product Price 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice | *Version*:1.0.0 |
| Draft as of 2024-02-20 | *Computable Name*:ProductPrice |
| **Copyright/Legal**: CC0-1.0 | |

A set of information about the price of a drug

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH - EPL Regulated Authorization Limitation](StructureDefinition-regulatedAuthorization-limitation.md) and [CH - EPL Reimbursement SL](StructureDefinition-reimbursementSL.md)
* Examples for this Extension: [Bundle/08f553cb-1404-4972-bf14-2023a5f59955](Bundle-08f553cb-1404-4972-bf14-2023a5f59955.md), [Bundle/3e18bbe5-4cc2-4eaa-8d27-815c0e885025](Bundle-3e18bbe5-4cc2-4eaa-8d27-815c0e885025.md), [Bundle/5bb930aa-f30d-4f10-aeef-e85f6b5f8d59](Bundle-5bb930aa-f30d-4f10-aeef-e85f6b5f8d59.md), [Bundle/6722a9ee-ae3b-4c20-bcf0-9b7cb6f062db](Bundle-6722a9ee-ae3b-4c20-bcf0-9b7cb6f062db.md)...Show 11 more,[Bundle/a69ea53d-79d4-46f4-bd2e-7a71439f148f](Bundle-a69ea53d-79d4-46f4-bd2e-7a71439f148f.md),[Bundle/b2eb19be-cca4-4fd8-a2a3-84d05631e6c0](Bundle-b2eb19be-cca4-4fd8-a2a3-84d05631e6c0.md),[Bundle/c97d5d89-4467-4c1e-9954-9d1e1d1d46e2](Bundle-c97d5d89-4467-4c1e-9954-9d1e1d1d46e2.md),[RegulatedAuthorization/FOPH-17418](RegulatedAuthorization-FOPH-17418.md),[RegulatedAuthorization/FOPH-17973](RegulatedAuthorization-FOPH-17973.md),[RegulatedAuthorization/FOPH-20416](RegulatedAuthorization-FOPH-20416.md),[RegulatedAuthorization/FOPH-21070](RegulatedAuthorization-FOPH-21070.md),[RegulatedAuthorization/FOPH-21203-1-Pre-Filled-Pen](RegulatedAuthorization-FOPH-21203-1-Pre-Filled-Pen.md),[RegulatedAuthorization/FOPH-21203-2-Pre-Filled-Pen](RegulatedAuthorization-FOPH-21203-2-Pre-Filled-Pen.md),[RegulatedAuthorization/FOPH-21208](RegulatedAuthorization-FOPH-21208.md)and[RegulatedAuthorization/FOPH-21529](RegulatedAuthorization-FOPH-21529.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/productPrice)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-productPrice.csv), [Excel](StructureDefinition-productPrice.xlsx), [Schematron](StructureDefinition-productPrice.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "productPrice",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
      "valueCode" : "can-bind"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice",
  "version" : "1.0.0",
  "name" : "ProductPrice",
  "title" : "CH - EPL Product Price",
  "status" : "draft",
  "experimental" : false,
  "date" : "2024-02-20",
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
  "description" : "A set of information about the price of a drug",
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
  "fhirVersion" : "5.0.0",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "extension",
      "expression" : "http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation"
    },
    {
      "type" : "extension",
      "expression" : "http://fhir.ch/ig/ch-epl/StructureDefinition/reimbursementSL"
    },
    {
      "type" : "element",
      "expression" : "RegulatedAuthorization"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "CH - EPL Product Price",
        "definition" : "A set of information about the price of a drug"
      },
      {
        "id" : "Extension.extension:type",
        "path" : "Extension.extension",
        "sliceName" : "type",
        "definition" : "The price type",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:type.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:type.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "type"
      },
      {
        "id" : "Extension.extension:type.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Extension.extension:changeType",
        "path" : "Extension.extension",
        "sliceName" : "changeType",
        "definition" : "The price change type",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:changeType.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:changeType.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "changeType"
      },
      {
        "id" : "Extension.extension:changeType.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Extension.extension:value",
        "path" : "Extension.extension",
        "sliceName" : "value",
        "definition" : "The actual price",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:value.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:value.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "value"
      },
      {
        "id" : "Extension.extension:value.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Money"
          }
        ]
      },
      {
        "id" : "Extension.extension:changeDate",
        "path" : "Extension.extension",
        "sliceName" : "changeDate",
        "definition" : "The price change date",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:changeDate.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:changeDate.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "changeDate"
      },
      {
        "id" : "Extension.extension:changeDate.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "date"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "max" : "0"
      }
    ]
  }
}

```
