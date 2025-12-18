# CH mCSD Organization - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH mCSD Organization**

## Resource Profile: CH mCSD Organization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Organization | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHmCSDOrganization |
| **Copyright/Legal**: CC0-1.0 | |

 
CH mCSD profile on Organization 

**Usages:**

* Use this Profile: [Transaction Bundle Profile for ITI-130 Process Care Services Resources Request Message](StructureDefinition-CH.mCSD.ProcessCareServices.md)
* Refer to this Profile: [CH mCSD PractitionerRole](StructureDefinition-CH.mCSD.PractitionerRole.md)
* Examples for this Profile: [Community A](Organization-CommunityA.md), [Praxis P](Organization-PraxisP.md), [Spital X](Organization-SpitalX.md), [Dept. 3](Organization-SpitalXDept3.md)...Show 4 more,[Spital X - Osteopathie](Organization-mCSD-No-peer-Organization-SpitalX-Osteopathie.md),[Spital X](Organization-mCSD-No-peer-Organization-SpitalX.md),[Auryn-Spital](Organization-mCSD-Peer-to-peer-Organization-Auryn-Spital.md)and[Fuchur-Klinik](Organization-mCSD-Peer-to-peer-Organization-Fuchur-Klinik.md)
* CapabilityStatements using this Profile: [mCSD Data Source (client)](CapabilityStatement-CH.mCSD.DataSource.md), [mCSD Directory (server)](CapabilityStatement-CH.mCSD.Directory.md) and [mCSD Query Client (client)](CapabilityStatement-CH.mCSD.QueryClient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/CH.mCSD.Organization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-CH.mCSD.Organization.csv), [Excel](StructureDefinition-CH.mCSD.Organization.xlsx), [Schematron](StructureDefinition-CH.mCSD.Organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "CH.mCSD.Organization",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Organization",
  "version" : "5.0.0",
  "name" : "CHmCSDOrganization",
  "title" : "CH mCSD Organization",
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
  "description" : "CH mCSD profile on Organization",
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
      "identity" : "CHmCSDOrganizationToHCProfessional",
      "uri" : "https://www.bag.admin.ch/epra",
      "name" : "LDAP schema"
    },
    {
      "identity" : "eCH",
      "uri" : "https://www.ech.ch/",
      "name" : "eCH Standards"
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
  "type" : "Organization",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Organization",
        "path" : "Organization",
        "constraint" : [
          {
            "key" : "ch-mcsd-organization-ihe-conformance",
            "severity" : "error",
            "human" : "The Organization needs to conform to IHE.mCSD.Organization",
            "expression" : "conformsTo('https://profiles.ihe.net/ITI/mCSD/StructureDefinition/IHE.mCSD.Organization')",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Organization"
          }
        ],
        "mapping" : [
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization"
          }
        ]
      },
      {
        "id" : "Organization.meta.lastUpdated",
        "path" : "Organization.meta.lastUpdated",
        "mapping" : [
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.modifyTimestamp"
          }
        ]
      },
      {
        "id" : "Organization.identifier",
        "path" : "Organization.identifier",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.uid"
          },
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.hcIdentifier"
          }
        ]
      },
      {
        "id" : "Organization.identifier:OID",
        "path" : "Organization.identifier",
        "sliceName" : "OID",
        "short" : "The OID of the organization in the community",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/OidIdentifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:ietf:rfc:3986"
        }
      },
      {
        "id" : "Organization.identifier:LDAP",
        "path" : "Organization.identifier",
        "sliceName" : "LDAP",
        "short" : "LDAP DN (Distinguished Name), if the organization is stored in an HPD",
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
        "id" : "Organization.active",
        "path" : "Organization.active",
        "mapping" : [
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.hpdProviderStatus"
          }
        ]
      },
      {
        "id" : "Organization.type",
        "path" : "Organization.type",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.businessCategory"
          },
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.HcSpecialisation"
          }
        ]
      },
      {
        "id" : "Organization.name",
        "path" : "Organization.name",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.O"
          },
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.hcRegisteredName"
          }
        ]
      },
      {
        "id" : "Organization.alias",
        "path" : "Organization.alias",
        "mapping" : [
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.O"
          },
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.hcRegisteredName"
          }
        ]
      },
      {
        "id" : "Organization.telecom",
        "path" : "Organization.telecom",
        "mapping" : [
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.telephoneNumber"
          },
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.facsimileTelephoneNumber"
          }
        ]
      },
      {
        "id" : "Organization.address",
        "path" : "Organization.address",
        "mapping" : [
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.hpdProviderPracticeAddress"
          }
        ]
      },
      {
        "id" : "Organization.partOf",
        "path" : "Organization.partOf",
        "mapping" : [
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.memberOf"
          }
        ]
      },
      {
        "id" : "Organization.contact.telecom",
        "path" : "Organization.contact.telecom",
        "mapping" : [
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.hpdMedicalRecordsDeliveryEmailAddress"
          }
        ]
      },
      {
        "id" : "Organization.contact.address",
        "path" : "Organization.contact.address",
        "mapping" : [
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.hpdProviderBillingAddress"
          },
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.hpdProviderMailingAddress"
          },
          {
            "identity" : "CHmCSDOrganizationToHCProfessional",
            "map" : "HCRegulatedOrganization.hpdProviderLegalAddress"
          }
        ]
      }
    ]
  }
}

```
