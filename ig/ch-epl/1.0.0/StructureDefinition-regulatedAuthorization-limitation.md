# CH - EPL Regulated Authorization Limitation - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH - EPL Regulated Authorization Limitation**

## Extension: CH - EPL Regulated Authorization Limitation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation | *Version*:1.0.0 |
| Draft as of 2024-02-20 | *Computable Name*:RegulatedAuthorizationLimitation |
| **Copyright/Legal**: CC0-1.0 | |

A limitation to an authorisation for reimbursement of a drug, for a certain indication.

**Context of Use**

**Usage info**

**Usages:**

* Examples for this Extension: [Bundle/08f553cb-1404-4972-bf14-2023a5f59955](Bundle-08f553cb-1404-4972-bf14-2023a5f59955.md), [Bundle/3e18bbe5-4cc2-4eaa-8d27-815c0e885025](Bundle-3e18bbe5-4cc2-4eaa-8d27-815c0e885025.md), [Bundle/5bb930aa-f30d-4f10-aeef-e85f6b5f8d59](Bundle-5bb930aa-f30d-4f10-aeef-e85f6b5f8d59.md), [Bundle/6722a9ee-ae3b-4c20-bcf0-9b7cb6f062db](Bundle-6722a9ee-ae3b-4c20-bcf0-9b7cb6f062db.md)...Show 11 more,[Bundle/a69ea53d-79d4-46f4-bd2e-7a71439f148f](Bundle-a69ea53d-79d4-46f4-bd2e-7a71439f148f.md),[Bundle/b2eb19be-cca4-4fd8-a2a3-84d05631e6c0](Bundle-b2eb19be-cca4-4fd8-a2a3-84d05631e6c0.md),[Bundle/c97d5d89-4467-4c1e-9954-9d1e1d1d46e2](Bundle-c97d5d89-4467-4c1e-9954-9d1e1d1d46e2.md),[RegulatedAuthorization/FOPH-17418](RegulatedAuthorization-FOPH-17418.md),[RegulatedAuthorization/FOPH-17973](RegulatedAuthorization-FOPH-17973.md),[RegulatedAuthorization/FOPH-20416](RegulatedAuthorization-FOPH-20416.md),[RegulatedAuthorization/FOPH-21070](RegulatedAuthorization-FOPH-21070.md),[RegulatedAuthorization/FOPH-21203-1-Pre-Filled-Pen](RegulatedAuthorization-FOPH-21203-1-Pre-Filled-Pen.md),[RegulatedAuthorization/FOPH-21203-2-Pre-Filled-Pen](RegulatedAuthorization-FOPH-21203-2-Pre-Filled-Pen.md),[RegulatedAuthorization/FOPH-21208](RegulatedAuthorization-FOPH-21208.md)and[RegulatedAuthorization/FOPH-21529](RegulatedAuthorization-FOPH-21529.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/regulatedAuthorization-limitation)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-regulatedAuthorization-limitation.csv), [Excel](StructureDefinition-regulatedAuthorization-limitation.xlsx), [Schematron](StructureDefinition-regulatedAuthorization-limitation.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "regulatedAuthorization-limitation",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
      "valueCode" : "can-bind"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation",
  "version" : "1.0.0",
  "name" : "RegulatedAuthorizationLimitation",
  "title" : "CH - EPL Regulated Authorization Limitation",
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
  "description" : "A limitation to an authorisation for reimbursement of a drug, for a certain indication.",
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
    },
    {
      "type" : "element",
      "expression" : "RegulatedAuthorization.indication"
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
        "short" : "CH - EPL Regulated Authorization Limitation",
        "definition" : "A limitation to an authorisation for reimbursement of a drug, for a certain indication.",
        "max" : "1"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 4
      },
      {
        "id" : "Extension.extension:status",
        "path" : "Extension.extension",
        "sliceName" : "status",
        "definition" : "The status of the limitation",
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
        "definition" : "The date at which it limitation status was set",
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
        "id" : "Extension.extension:period",
        "path" : "Extension.extension",
        "sliceName" : "period",
        "definition" : "The period over which the reimbursement authorisation applies",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:period.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:period.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "period"
      },
      {
        "id" : "Extension.extension:period.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Period"
          }
        ]
      },
      {
        "id" : "Extension.extension:reimbursementEndDate",
        "path" : "Extension.extension",
        "sliceName" : "reimbursementEndDate",
        "definition" : "The date at which it becomes no longer possible to be reimbursed",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:reimbursementEndDate.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:reimbursementEndDate.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "reimbursementEndDate"
      },
      {
        "id" : "Extension.extension:reimbursementEndDate.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "date"
          }
        ]
      },
      {
        "id" : "Extension.extension:firstLimitationDate",
        "path" : "Extension.extension",
        "sliceName" : "firstLimitationDate",
        "definition" : "The date at which it is first possible to be reimbursed",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:firstLimitationDate.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:firstLimitationDate.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "firstLimitationDate"
      },
      {
        "id" : "Extension.extension:firstLimitationDate.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "date"
          }
        ]
      },
      {
        "id" : "Extension.extension:limitationIndication",
        "path" : "Extension.extension",
        "sliceName" : "limitationIndication",
        "definition" : "Reference to a Clinical Use Definition resource that defines the limitation of the indication.",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:limitationIndication.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:limitationIndication.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "limitationIndication"
      },
      {
        "id" : "Extension.extension:limitationIndication.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/StructureDefinition/ClinicalUseDefinition"
            ]
          }
        ]
      },
      {
        "id" : "Extension.extension:indicationCode",
        "path" : "Extension.extension",
        "sliceName" : "indicationCode",
        "definition" : "The indication code assigned by FOPH",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:indicationCode.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:indicationCode.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "indicationCode"
      },
      {
        "id" : "Extension.extension:indicationCode.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "string"
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
        "fixedUri" : "http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation"
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
