# CH - EPL Reimbursement SL - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH - EPL Reimbursement SL**

## Extension: CH - EPL Reimbursement SL 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/reimbursementSL | *Version*:1.0.0 |
| Draft as of 2024-05-15 | *Computable Name*:ReimbursementSL |
| **Copyright/Legal**: CC0-1.0 | |

A set of information about the reimbursement of a drug

**Context of Use**

**Usage info**

**Usages:**

* Examples for this Extension: [Bundle/08f553cb-1404-4972-bf14-2023a5f59955](Bundle-08f553cb-1404-4972-bf14-2023a5f59955.md), [Bundle/3e18bbe5-4cc2-4eaa-8d27-815c0e885025](Bundle-3e18bbe5-4cc2-4eaa-8d27-815c0e885025.md), [Bundle/5bb930aa-f30d-4f10-aeef-e85f6b5f8d59](Bundle-5bb930aa-f30d-4f10-aeef-e85f6b5f8d59.md), [Bundle/6722a9ee-ae3b-4c20-bcf0-9b7cb6f062db](Bundle-6722a9ee-ae3b-4c20-bcf0-9b7cb6f062db.md)...Show 11 more,[Bundle/a69ea53d-79d4-46f4-bd2e-7a71439f148f](Bundle-a69ea53d-79d4-46f4-bd2e-7a71439f148f.md),[Bundle/b2eb19be-cca4-4fd8-a2a3-84d05631e6c0](Bundle-b2eb19be-cca4-4fd8-a2a3-84d05631e6c0.md),[Bundle/c97d5d89-4467-4c1e-9954-9d1e1d1d46e2](Bundle-c97d5d89-4467-4c1e-9954-9d1e1d1d46e2.md),[RegulatedAuthorization/FOPH-17418](RegulatedAuthorization-FOPH-17418.md),[RegulatedAuthorization/FOPH-17973](RegulatedAuthorization-FOPH-17973.md),[RegulatedAuthorization/FOPH-20416](RegulatedAuthorization-FOPH-20416.md),[RegulatedAuthorization/FOPH-21070](RegulatedAuthorization-FOPH-21070.md),[RegulatedAuthorization/FOPH-21203-1-Pre-Filled-Pen](RegulatedAuthorization-FOPH-21203-1-Pre-Filled-Pen.md),[RegulatedAuthorization/FOPH-21203-2-Pre-Filled-Pen](RegulatedAuthorization-FOPH-21203-2-Pre-Filled-Pen.md),[RegulatedAuthorization/FOPH-21208](RegulatedAuthorization-FOPH-21208.md)and[RegulatedAuthorization/FOPH-21529](RegulatedAuthorization-FOPH-21529.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/reimbursementSL)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-reimbursementSL.csv), [Excel](StructureDefinition-reimbursementSL.xlsx), [Schematron](StructureDefinition-reimbursementSL.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "reimbursementSL",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
      "valueCode" : "can-bind"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/reimbursementSL",
  "version" : "1.0.0",
  "name" : "ReimbursementSL",
  "title" : "CH - EPL Reimbursement SL",
  "status" : "draft",
  "experimental" : false,
  "date" : "2024-05-15",
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
  "description" : "A set of information about the reimbursement of a drug",
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
        "short" : "CH - EPL Reimbursement SL",
        "definition" : "A set of information about the reimbursement of a drug"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 6
      },
      {
        "id" : "Extension.extension:FOPHDossierNumber",
        "path" : "Extension.extension",
        "sliceName" : "FOPHDossierNumber",
        "definition" : "The dossier number of FOPH",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:FOPHDossierNumber.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:FOPHDossierNumber.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "FOPHDossierNumber"
      },
      {
        "id" : "Extension.extension:FOPHDossierNumber.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-foph-dossier-number"
            ]
          }
        ]
      },
      {
        "id" : "Extension.extension:status",
        "path" : "Extension.extension",
        "sliceName" : "status",
        "definition" : "The status of the reimbursement",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:status.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:status.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "status"
      },
      {
        "id" : "Extension.extension:status.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Extension.extension:statusDate",
        "path" : "Extension.extension",
        "sliceName" : "statusDate",
        "definition" : "The date at which it reimbursement status was set",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:statusDate.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:statusDate.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "statusDate"
      },
      {
        "id" : "Extension.extension:statusDate.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "date"
          }
        ]
      },
      {
        "id" : "Extension.extension:expiryDate",
        "path" : "Extension.extension",
        "sliceName" : "expiryDate",
        "definition" : "The date at which it reimbursement expires",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:expiryDate.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:expiryDate.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "expiryDate"
      },
      {
        "id" : "Extension.extension:expiryDate.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "date"
          }
        ]
      },
      {
        "id" : "Extension.extension:listingStatus",
        "path" : "Extension.extension",
        "sliceName" : "listingStatus",
        "definition" : "The status of the listing",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:listingStatus.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:listingStatus.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "listingStatus"
      },
      {
        "id" : "Extension.extension:listingStatus.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Extension.extension:listingPeriod",
        "path" : "Extension.extension",
        "sliceName" : "listingPeriod",
        "definition" : "The period over which the reimbursement authorisation is listed",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:listingPeriod.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:listingPeriod.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "listingPeriod"
      },
      {
        "id" : "Extension.extension:listingPeriod.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Period"
          }
        ]
      },
      {
        "id" : "Extension.extension:firstListingDate",
        "path" : "Extension.extension",
        "sliceName" : "firstListingDate",
        "definition" : "The date at which it is first possible to be reimbursed",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:firstListingDate.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:firstListingDate.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "firstListingDate"
      },
      {
        "id" : "Extension.extension:firstListingDate.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "date"
          }
        ]
      },
      {
        "id" : "Extension.extension:costShare",
        "path" : "Extension.extension",
        "sliceName" : "costShare",
        "definition" : "The retention value",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:costShare.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:costShare.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "costShare"
      },
      {
        "id" : "Extension.extension:costShare.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "integer"
          }
        ]
      },
      {
        "id" : "Extension.extension:productType",
        "path" : "Extension.extension",
        "sliceName" : "productType",
        "definition" : "The product type related to the reimbursement",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Extension.extension:productType.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:productType.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "productType"
      },
      {
        "id" : "Extension.extension:productType.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Extension.extension:gamme",
        "path" : "Extension.extension",
        "sliceName" : "gamme",
        "definition" : "The gamme related to the reimbursement",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:gamme.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:gamme.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "gamme"
      },
      {
        "id" : "Extension.extension:gamme.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Extension.extension:productPrice",
        "path" : "Extension.extension",
        "sliceName" : "productPrice",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"]
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-epl/StructureDefinition/reimbursementSL"
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
