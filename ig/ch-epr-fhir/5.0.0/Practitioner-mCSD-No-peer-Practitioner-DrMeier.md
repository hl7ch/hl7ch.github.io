# mCSD-No-peer-Practitioner-DrMeier - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD-No-peer-Practitioner-DrMeier**

## Example Practitioner: mCSD-No-peer-Practitioner-DrMeier

Profile: [CH mCSD Practitioner](StructureDefinition-CH.mCSD.Practitioner.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000194633, [LDAP](NamingSystem-Ldap.md)/uid=CommunityA:11000003000,OU=HCProfessional,DC=HPD,O=BAG,C=ch

**active**: true

**name**: Hans Meier

**telecom**: [drhmeier@email.com](mailto:drhmeier@email.com), [+41 32 001 00 81](tel:+41320010081)

**gender**: Male

> **qualification****code**:Physician

> **qualification****code**:General internal medicine

**communication**: German



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "mCSD-No-peer-Practitioner-DrMeier",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000194633"
    },
    {
      "system" : "urn:ietf:rfc:4514",
      "value" : "uid=CommunityA:11000003000,OU=HCProfessional,DC=HPD,O=BAG,C=ch"
    }
  ],
  "active" : true,
  "name" : [
    {
      "text" : "Hans Meier",
      "family" : "Meier",
      "given" : ["Hans"],
      "prefix" : ["Dr."]
    }
  ],
  "telecom" : [
    {
      "system" : "email",
      "value" : "drhmeier@email.com"
    },
    {
      "system" : "phone",
      "value" : "+41 32 001 00 81"
    }
  ],
  "gender" : "male",
  "qualification" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "309343006",
            "display" : "Physician"
          }
        ]
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.16.756.5.30.1.127.3.5",
            "code" : "1051",
            "display" : "General internal medicine"
          }
        ]
      }
    }
  ],
  "communication" : [
    {
      "coding" : [
        {
          "system" : "urn:ietf:bcp:47",
          "code" : "de"
        }
      ]
    }
  ]
}

```
