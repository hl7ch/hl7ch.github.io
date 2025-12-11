# 6879301 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **6879301**

## Example RegulatedAuthorization: 6879301



## Resource Content

```json
{
  "resourceType" : "RegulatedAuthorization",
  "id" : "MA-6879301",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-regulatedauthorization"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Organization",
      "id" : "holder-Pfizer-AG",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-epl-organization"
        ]
      },
      "identifier" : [
        {
          "system" : "urn:oid:1.2.276.0.76",
          "value" : "100015286"
        },
        {
          "system" : "urn:oid:2.51.1.3",
          "value" : "7601001010604"
        }
      ],
      "name" : "Pfizer AG"
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
      "value" : "6879301"
    }
  ],
  "subject" : [
    {
      "reference" : "MedicinalProductDefinition/Paxlovid-Filmcoatedtablet"
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
        "code" : "756005023002",
        "display" : "limited authorisation"
      }
    ]
  },
  "statusDate" : "2022-06-15",
  "holder" : {
    "reference" : "#holder-Pfizer-AG"
  },
  "regulator" : {
    "reference" : "#regulator-SMC"
  }
}

```
