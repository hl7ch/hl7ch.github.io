# mCSD Practitioner Dr. Peter Pan - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD Practitioner Dr. Peter Pan**

## Example Practitioner: mCSD Practitioner Dr. Peter Pan

Profile: [CH mCSD Practitioner](StructureDefinition-CH.mCSD.Practitioner.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000102737, [LDAP](NamingSystem-Ldap.md)/uid=CommunityA:00000003002,OU=HCProfessional,DC=HPD,O=BAG,C=ch

**active**: true

**name**: Peter Pan

**telecom**: [peter.pan@email.com](mailto:peter.pan@email.com), fax: +41 32 001 00 05, [+41 79 001 00 06](tel:+41790010006), [+41 32 001 00 04](tel:+41320010004), +41 79 001 00 07

**gender**: Male

> **qualification****code**:Physician

> **qualification****code**:General internal medicine

**communication**: German, French, English, Italian



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "DrPeterPan",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000102737"
    },
    {
      "system" : "urn:ietf:rfc:4514",
      "value" : "uid=CommunityA:00000003002,OU=HCProfessional,DC=HPD,O=BAG,C=ch"
    }
  ],
  "active" : true,
  "name" : [
    {
      "text" : "Peter Pan",
      "family" : "Pan",
      "given" : ["Peter"],
      "prefix" : ["Dr."]
    }
  ],
  "telecom" : [
    {
      "system" : "email",
      "value" : "peter.pan@email.com"
    },
    {
      "system" : "fax",
      "value" : "+41 32 001 00 05"
    },
    {
      "system" : "phone",
      "value" : "+41 79 001 00 06",
      "use" : "mobile"
    },
    {
      "system" : "phone",
      "value" : "+41 32 001 00 04"
    },
    {
      "system" : "pager",
      "value" : "+41 79 001 00 07"
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
    },
    {
      "coding" : [
        {
          "system" : "urn:ietf:bcp:47",
          "code" : "fr"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "urn:ietf:bcp:47",
          "code" : "en"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "urn:ietf:bcp:47",
          "code" : "it"
        }
      ]
    }
  ]
}

```
