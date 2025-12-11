# 52042011 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **52042011**

## Example RegulatedAuthorization: 52042011



## Resource Content

```json
{
  "resourceType" : "RegulatedAuthorization",
  "id" : "MA-52042011",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-regulatedauthorization"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Organization",
      "id" : "holder-Tillotts-Pharma-AG",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-epl-organization"
        ]
      },
      "identifier" : [
        {
          "system" : "urn:oid:1.2.276.0.76",
          "value" : "100005174"
        },
        {
          "system" : "urn:oid:2.51.1.3",
          "value" : "7601001346451"
        }
      ],
      "name" : "Tillotts Pharma AG"
    },
    {
      "resourceType" : "Organization",
      "id" : "regulator-SMC",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-epl-organization"
        ]
      },
      "identifier" : [
        {
          "system" : "urn:oid:1.2.276.0.76",
          "value" : "100010911"
        },
        {
          "system" : "urn:oid:2.51.1.3",
          "value" : "7601001398511"
        }
      ],
      "name" : "SMC"
    }
  ],
  "identifier" : [
    {
      "system" : "http://fhir.ch/ig/ch-epl/sid/authno",
      "value" : "52042011"
    }
  ],
  "subject" : [
    {
      "reference" : "MedicinalProductDefinition/Entocort-Solvent-and-Tablet"
    }
  ],
  "type" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-authorisation-type",
        "code" : "756000002001",
        "display" : "Marketing Authorisation"
      }
    ]
  },
  "region" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH",
          "display" : "Switzerland"
        }
      ]
    }
  ],
  "status" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-authorisation-status",
        "code" : "756005023007",
        "display" : "valid"
      }
    ]
  },
  "statusDate" : "1993-06-18",
  "holder" : {
    "reference" : "#holder-Tillotts-Pharma-AG"
  },
  "regulator" : {
    "reference" : "#regulator-SMC"
  }
}

```
