# mCSD-Peer-to-peer-Practitioner-DrKoreander - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD-Peer-to-peer-Practitioner-DrKoreander**

## Example Practitioner: mCSD-Peer-to-peer-Practitioner-DrKoreander

Profile: [CH mCSD Practitioner](StructureDefinition-CH.mCSD.Practitioner.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000732385, [LDAP](NamingSystem-Ldap.md)/uid=CommunityA:00000004001,OU=HCProfessional,DC=HPD,O=BAG,C=ch

**active**: false

**name**: Karl Koreander

**telecom**: [Karl.Koreander@email.com](mailto:Karl.Koreander@email.com), [+41 32 001 00 04](tel:+41320010004)

**gender**: Male

### Qualifications

| | |
| :--- | :--- |
| - | **Code** |
| * | Physician |

**communication**: German, French, English, Italian



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "mCSD-Peer-to-peer-Practitioner-DrKoreander",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000732385"
    },
    {
      "system" : "urn:ietf:rfc:4514",
      "value" : "uid=CommunityA:00000004001,OU=HCProfessional,DC=HPD,O=BAG,C=ch"
    }
  ],
  "active" : false,
  "name" : [
    {
      "text" : "Karl Koreander",
      "family" : "Koreander",
      "given" : ["Karl"],
      "prefix" : ["Dr."]
    }
  ],
  "telecom" : [
    {
      "system" : "email",
      "value" : "Karl.Koreander@email.com"
    },
    {
      "system" : "phone",
      "value" : "+41 32 001 00 04"
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
