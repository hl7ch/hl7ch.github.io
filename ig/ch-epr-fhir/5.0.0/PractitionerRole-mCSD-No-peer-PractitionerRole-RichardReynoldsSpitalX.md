# mCSD-No-peer-PractitionerRole-RichardReynoldsSpitalX - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD-No-peer-PractitionerRole-RichardReynoldsSpitalX**

## Example PractitionerRole: mCSD-No-peer-PractitionerRole-RichardReynoldsSpitalX

Profile: [CH mCSD PractitionerRole](StructureDefinition-CH.mCSD.PractitionerRole.md)

**identifier**: [LDAP](NamingSystem-Ldap.md)/CN=CommunityA:00000001006,OU=Relationship,DC=HPD,O=BAG,C=ch

**active**: true

**practitioner**: [Practitioner Ann Andrews](Practitioner-mCSD-No-peer-Practitioner-DrAndrews.md)

**organization**: [Organization Spital X - Osteopathie](Organization-mCSD-No-peer-Organization-SpitalX-Osteopathie.md)

**code**: Physician

**specialty**: General internal medicine



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "mCSD-No-peer-PractitionerRole-RichardReynoldsSpitalX",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.PractitionerRole"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:4514",
      "value" : "CN=CommunityA:00000001006,OU=Relationship,DC=HPD,O=BAG,C=ch"
    }
  ],
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/mCSD-No-peer-Practitioner-DrAndrews"
  },
  "organization" : {
    "reference" : "Organization/mCSD-No-peer-Organization-SpitalX-Osteopathie"
  },
  "code" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "309343006",
          "display" : "Physician"
        }
      ]
    }
  ],
  "specialty" : [
    {
      "coding" : [
        {
          "system" : "urn:oid:2.16.756.5.30.1.127.3.5",
          "code" : "1051",
          "display" : "General internal medicine"
        }
      ]
    }
  ]
}

```
