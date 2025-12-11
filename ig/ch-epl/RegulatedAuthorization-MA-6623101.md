# 6623101 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **6623101**

## Example RegulatedAuthorization: 6623101



## Resource Content

```json
{
  "resourceType" : "RegulatedAuthorization",
  "id" : "MA-6623101",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-regulatedauthorization"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Organization",
      "id" : "holder-MSD-Merck-Sharp-Dohme-AG",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-epl-organization"
        ]
      },
      "identifier" : [
        {
          "system" : "urn:oid:1.2.276.0.76",
          "value" : "100080484"
        },
        {
          "system" : "urn:oid:2.51.1.3",
          "value" : "7601001001138"
        }
      ],
      "name" : "MSD Merck Sharp & Dohme AG"
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
      "value" : "6623101"
    }
  ],
  "subject" : [
    {
      "reference" : "MedicinalProductDefinition/Keytruda-100mg-Vial"
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
  "statusDate" : "2022-02-17",
  "holder" : {
    "reference" : "#holder-MSD-Merck-Sharp-Dohme-AG"
  },
  "regulator" : {
    "reference" : "#regulator-SMC"
  }
}

```
