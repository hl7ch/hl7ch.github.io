# CH mCSD Practitioner - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH mCSD Practitioner**

## Resource Profile: CH mCSD Practitioner 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Practitioner | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHmCSDPractitioner |
| **Copyright/Legal**: CC0-1.0 | |

 
CH mCSD profile on Practitioner 

**Usages:**

* Derived from this Profile: [CH mCSD Feed Practitioner](StructureDefinition-CH.mCSD.Feed.Practitioner.md)
* Use this Profile: [Transaction Bundle Profile for ITI-130 Process Care Services Resources Request Message](StructureDefinition-CH.mCSD.ProcessCareServices.md)
* Refer to this Profile: [CH mCSD PractitionerRole](StructureDefinition-CH.mCSD.PractitionerRole.md)
* Examples for this Profile: [Practitioner/DrPeterPan](Practitioner-DrPeterPan.md), [Practitioner/mCSD-No-peer-Practitioner-DrAndrews](Practitioner-mCSD-No-peer-Practitioner-DrAndrews.md), [Practitioner/mCSD-No-peer-Practitioner-DrMeier](Practitioner-mCSD-No-peer-Practitioner-DrMeier.md), [Practitioner/mCSD-No-peer-Practitioner-DrReynolds](Practitioner-mCSD-No-peer-Practitioner-DrReynolds.md)...Show 3 more,[Practitioner/mCSD-Peer-to-peer-Practitioner-DrBux](Practitioner-mCSD-Peer-to-peer-Practitioner-DrBux.md),[Practitioner/mCSD-Peer-to-peer-Practitioner-DrGmork](Practitioner-mCSD-Peer-to-peer-Practitioner-DrGmork.md)and[Practitioner/mCSD-Peer-to-peer-Practitioner-DrKoreander](Practitioner-mCSD-Peer-to-peer-Practitioner-DrKoreander.md)
* CapabilityStatements using this Profile: [mCSD Directory (server)](CapabilityStatement-CH.mCSD.Directory.md) and [mCSD Query Client (client)](CapabilityStatement-CH.mCSD.QueryClient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/CH.mCSD.Practitioner)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-CH.mCSD.Practitioner.csv), [Excel](StructureDefinition-CH.mCSD.Practitioner.xlsx), [Schematron](StructureDefinition-CH.mCSD.Practitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "CH.mCSD.Practitioner",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Practitioner",
  "version" : "5.0.0",
  "name" : "CHmCSDPractitioner",
  "title" : "CH mCSD Practitioner",
  "status" : "active",
  "date" : "2025-12-18T15:54:33+00:00",
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
  "description" : "CH mCSD profile on Practitioner",
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
      "identity" : "CHmCSDPractitionerToHCProfessional",
      "uri" : "https://www.bag.admin.ch/epra",
      "name" : "LDAP schema"
    },
    {
      "identity" : "eCH",
      "uri" : "http://www.ech.ch/",
      "name" : "eCH-Standards"
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
  "type" : "Practitioner",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Practitioner",
        "path" : "Practitioner",
        "constraint" : [
          {
            "key" : "ch-mcsd-practitioner-ihe-conformance",
            "severity" : "error",
            "human" : "The Practitioner needs to conform to IHE.mCSD.Practitioner",
            "expression" : "conformsTo('https://profiles.ihe.net/ITI/mCSD/StructureDefinition/IHE.mCSD.Practitioner')",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Practitioner"
          }
        ],
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional"
          }
        ]
      },
      {
        "id" : "Practitioner.meta.lastUpdated",
        "path" : "Practitioner.meta.lastUpdated",
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.modifyTimestamp"
          }
        ]
      },
      {
        "id" : "Practitioner.identifier",
        "path" : "Practitioner.identifier",
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.uid"
          },
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.hcIdentifier"
          }
        ]
      },
      {
        "id" : "Practitioner.identifier:LDAP",
        "path" : "Practitioner.identifier",
        "sliceName" : "LDAP",
        "short" : "LDAP DN (Distinguished Name), if the practitioner is stored in an HPD",
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
        "id" : "Practitioner.active",
        "path" : "Practitioner.active",
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.hpdProviderStatus"
          }
        ]
      },
      {
        "id" : "Practitioner.name.text",
        "path" : "Practitioner.name.text",
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.displayName"
          },
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.cn"
          }
        ]
      },
      {
        "id" : "Practitioner.name.family",
        "path" : "Practitioner.name.family",
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.sn"
          }
        ]
      },
      {
        "id" : "Practitioner.name.given",
        "path" : "Practitioner.name.given",
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.givenName"
          }
        ]
      },
      {
        "id" : "Practitioner.name.prefix",
        "path" : "Practitioner.name.prefix",
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.title"
          }
        ]
      },
      {
        "id" : "Practitioner.telecom",
        "path" : "Practitioner.telecom",
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.hpdMedicalRecordsDeliveryEmailAddress"
          },
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.mail"
          },
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.telephoneNumber"
          },
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.mobile"
          },
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.pager"
          },
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.facsimileTelephoneNumber"
          }
        ]
      },
      {
        "id" : "Practitioner.address",
        "path" : "Practitioner.address",
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.physicalDeliveryOfficeName"
          },
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.hpdProviderMailingAddress"
          },
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.hpdProviderBillingAddress"
          },
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.hpdProviderPracticeAddress"
          },
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.hpdProviderLegalAddress"
          }
        ]
      },
      {
        "id" : "Practitioner.gender",
        "path" : "Practitioner.gender",
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.gender"
          }
        ]
      },
      {
        "id" : "Practitioner.qualification",
        "path" : "Practitioner.qualification",
        "min" : 1
      },
      {
        "id" : "Practitioner.qualification.code",
        "path" : "Practitioner.qualification.code",
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.hcProfession"
          },
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.hcSpecialisation"
          }
        ]
      },
      {
        "id" : "Practitioner.communication.coding.code",
        "path" : "Practitioner.communication.coding.code",
        "mapping" : [
          {
            "identity" : "CHmCSDPractitionerToHCProfessional",
            "map" : "HCProfessional.hpdProviderLanguageSupported"
          }
        ]
      }
    ]
  }
}

```
