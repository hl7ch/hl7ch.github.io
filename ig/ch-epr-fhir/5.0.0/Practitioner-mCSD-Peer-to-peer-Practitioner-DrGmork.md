# mCSD-Peer-to-peer-Practitioner-DrGmork - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD-Peer-to-peer-Practitioner-DrGmork**

## Example Practitioner: mCSD-Peer-to-peer-Practitioner-DrGmork

Profile: [CH mCSD Practitioner](StructureDefinition-CH.mCSD.Practitioner.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000394385, [LDAP](NamingSystem-Ldap.md)/uid=CommunityA:00000004002,OU=HCProfessional,DC=HPD,O=BAG,C=ch

**active**: true

**name**: Gisi Gmork

**telecom**: [gGmork@email.com](mailto:gGmork@email.com), [+41 32 001 00 99](tel:+41320010099)

**gender**: Male

> **qualification****code**:Physician

> **qualification****code**:General internal medicine

**communication**: French, English, Italian



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "mCSD-Peer-to-peer-Practitioner-DrGmork",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000394385"
    },
    {
      "system" : "urn:ietf:rfc:4514",
      "value" : "uid=CommunityA:00000004002,OU=HCProfessional,DC=HPD,O=BAG,C=ch"
    }
  ],
  "active" : true,
  "name" : [
    {
      "text" : "Gisi Gmork",
      "family" : "Gmork",
      "given" : ["Gisi"],
      "prefix" : ["Dr."]
    }
  ],
  "telecom" : [
    {
      "system" : "email",
      "value" : "gGmork@email.com"
    },
    {
      "system" : "phone",
      "value" : "+41 32 001 00 99"
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
