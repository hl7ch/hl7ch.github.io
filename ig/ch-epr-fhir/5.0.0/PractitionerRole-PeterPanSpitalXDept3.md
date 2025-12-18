# mCSD PractitionerRole Dr. Peter Pan at Spital X Dept. 3 - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD PractitionerRole Dr. Peter Pan at Spital X Dept. 3**

## Example PractitionerRole: mCSD PractitionerRole Dr. Peter Pan at Spital X Dept. 3

Profile: [CH mCSD PractitionerRole](StructureDefinition-CH.mCSD.PractitionerRole.md)

**identifier**: [LDAP](NamingSystem-Ldap.md)/CN=CommunityA:00000001004,OU=Relationship,DC=HPD,O=BAG,C=ch

**active**: true

**practitioner**: [Practitioner Peter Pan](Practitioner-DrPeterPan.md)

**organization**: [Organization Dept. 3](Organization-SpitalXDept3.md)

**code**: Physician

**specialty**: General internal medicine



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "PeterPanSpitalXDept3",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.PractitionerRole"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:4514",
      "value" : "CN=CommunityA:00000001004,OU=Relationship,DC=HPD,O=BAG,C=ch"
    }
  ],
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/DrPeterPan"
  },
  "organization" : {
    "reference" : "Organization/SpitalXDept3"
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
