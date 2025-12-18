# mCSD-No-peer-Practitioner-DrAndrews - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD-No-peer-Practitioner-DrAndrews**

## Example Practitioner: mCSD-No-peer-Practitioner-DrAndrews

Profile: [CH mCSD Practitioner](StructureDefinition-CH.mCSD.Practitioner.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601002469197, [LDAP](NamingSystem-Ldap.md)/uid=CommunityA:00000000101,OU=HCProfessional,DC=HPD,O=BAG,C=ch

**active**: true

**name**: Ann Andrews

**telecom**: [ann.andrews@email.com](mailto:ann.andrews@email.com), [+41 32 001 00 04](tel:+41320010004)

**gender**: Female

> **qualification****code**:Chiropractor

> **qualification****code**:Chiropractic specialist

**communication**: German, French, English, Italian



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "mCSD-No-peer-Practitioner-DrAndrews",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601002469197"
    },
    {
      "system" : "urn:ietf:rfc:4514",
      "value" : "uid=CommunityA:00000000101,OU=HCProfessional,DC=HPD,O=BAG,C=ch"
    }
  ],
  "active" : true,
  "name" : [
    {
      "text" : "Ann Andrews",
      "family" : "Andrews",
      "given" : ["Ann"],
      "prefix" : ["Dr."]
    }
  ],
  "telecom" : [
    {
      "system" : "email",
      "value" : "ann.andrews@email.com"
    },
    {
      "system" : "phone",
      "value" : "+41 32 001 00 04"
    }
  ],
  "gender" : "female",
  "qualification" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "3842006",
            "display" : "Chiropractor"
          }
        ]
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.16.756.5.30.1.127.3.5",
            "code" : "1011",
            "display" : "Chiropractic specialist"
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
