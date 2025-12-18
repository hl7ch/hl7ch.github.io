# CH mCSD PractitionerRole - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH mCSD PractitionerRole**

## Resource Profile: CH mCSD PractitionerRole 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.PractitionerRole | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHmCSDPractitionerRole |
| **Copyright/Legal**: CC0-1.0 | |

 
CH mCSD profile on PractitionerRole 

**Usages:**

* Use this Profile: [Transaction Bundle Profile for ITI-130 Process Care Services Resources Request Message](StructureDefinition-CH.mCSD.ProcessCareServices.md)
* Examples for this Profile: [PractitionerRole/PeterPanPraxisP](PractitionerRole-PeterPanPraxisP.md), [PractitionerRole/PeterPanSpitalXDept3](PractitionerRole-PeterPanSpitalXDept3.md), [PractitionerRole/mCSD-No-peer-PractitionerRole-AnnAndrewsSpitalXOsteopathie](PractitionerRole-mCSD-No-peer-PractitionerRole-AnnAndrewsSpitalXOsteopathie.md), [PractitionerRole/mCSD-No-peer-PractitionerRole-HansMeierSpitalX](PractitionerRole-mCSD-No-peer-PractitionerRole-HansMeierSpitalX.md)...Show 4 more,[PractitionerRole/mCSD-No-peer-PractitionerRole-RichardReynoldsSpitalX](PractitionerRole-mCSD-No-peer-PractitionerRole-RichardReynoldsSpitalX.md),[PractitionerRole/mCSD-Peer-to-peer-PractitionerRole-BastianBuxAuryn-Spital](PractitionerRole-mCSD-Peer-to-peer-PractitionerRole-BastianBuxAuryn-Spital.md),[PractitionerRole/mCSD-Peer-to-peer-PractitionerRole-GisiGmorkFurchur-Klinik](PractitionerRole-mCSD-Peer-to-peer-PractitionerRole-GisiGmorkFurchur-Klinik.md)and[PractitionerRole/mCSD-Peer-to-peer-PractitionerRole-KarlKoreanderFurchur-Klinik](PractitionerRole-mCSD-Peer-to-peer-PractitionerRole-KarlKoreanderFurchur-Klinik.md)
* CapabilityStatements using this Profile: [mCSD Data Source (client)](CapabilityStatement-CH.mCSD.DataSource.md), [mCSD Directory (server)](CapabilityStatement-CH.mCSD.Directory.md) and [mCSD Query Client (client)](CapabilityStatement-CH.mCSD.QueryClient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/CH.mCSD.PractitionerRole)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-CH.mCSD.PractitionerRole.csv), [Excel](StructureDefinition-CH.mCSD.PractitionerRole.xlsx), [Schematron](StructureDefinition-CH.mCSD.PractitionerRole.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "CH.mCSD.PractitionerRole",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.PractitionerRole",
  "version" : "5.0.0",
  "name" : "CHmCSDPractitionerRole",
  "title" : "CH mCSD PractitionerRole",
  "status" : "active",
  "date" : "2025-12-18T15:42:00+00:00",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "CH mCSD profile on PractitionerRole",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "CHmCSDPractitionerRoleToRelationship",
      "uri" : "https://www.bag.admin.ch/epra",
      "name" : "LDAP schema"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "PractitionerRole",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "PractitionerRole",
        "path" : "PractitionerRole",
        "constraint" : [
          {
            "key" : "ch-mcsd-practitionerrole-ihe-conformance",
            "severity" : "error",
            "human" : "The Practitioner needs to conform to IHE.mCSD.PractitionerRole",
            "expression" : "conformsTo('https://profiles.ihe.net/ITI/mCSD/StructureDefinition/IHE.mCSD.PractitionerRole')",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.PractitionerRole"
          }
        ],
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerRoleToRelationship",
            "map" : "Relationship"
          }
        ]
      },
      {
        "id" : "PractitionerRole.identifier",
        "path" : "PractitionerRole.identifier",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        },
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerRoleToRelationship",
            "map" : "Relationship.cn"
          }
        ]
      },
      {
        "id" : "PractitionerRole.identifier:LDAP",
        "path" : "PractitionerRole.identifier",
        "sliceName" : "LDAP",
        "short" : "LDAP DN (Distinguished Name), if the relationship is stored in an HPD",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/LdapIdentifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:ietf:rfc:4514"
        }
      },
      {
        "id" : "PractitionerRole.active",
        "path" : "PractitionerRole.active",
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerRoleToRelationship",
            "map" : "HCProfessional.hpdProviderStatus"
          }
        ]
      },
      {
        "id" : "PractitionerRole.practitioner",
        "path" : "PractitionerRole.practitioner",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Practitioner"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerRoleToRelationship",
            "map" : "Relationship.member"
          }
        ]
      },
      {
        "id" : "PractitionerRole.organization",
        "path" : "PractitionerRole.organization",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Organization"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerRoleToRelationship",
            "map" : "Relationship.owner"
          }
        ]
      },
      {
        "id" : "PractitionerRole.code",
        "path" : "PractitionerRole.code",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerRoleToRelationship",
            "map" : "HCProfessional.hcProfession"
          }
        ]
      },
      {
        "id" : "PractitionerRole.specialty",
        "path" : "PractitionerRole.specialty",
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerRoleToRelationship",
            "map" : "HCProfessional.hcSpecialisation"
          }
        ]
      }
    ]
  }
}

```
