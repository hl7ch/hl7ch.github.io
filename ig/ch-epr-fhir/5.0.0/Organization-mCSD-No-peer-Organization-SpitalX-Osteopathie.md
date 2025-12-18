# mCSD-No-peer-mcsd-Organization-SpitalX-Osteopathie - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD-No-peer-mcsd-Organization-SpitalX-Osteopathie**

## Example Organization: mCSD-No-peer-mcsd-Organization-SpitalX-Osteopathie

Profile: [CH mCSD Organization](StructureDefinition-CH.mCSD.Organization.md)

**identifier**: [LDAP](NamingSystem-Ldap.md)/uid=CommunityA:00000001007,OU=HCRegulatedOrganization,DC=HPD,O=BAG,C=ch, [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:oid:2.16.10.89.202

**active**: true

**type**: Osteopathic manipulative medicine, Hospital

**name**: Spital X - Osteopathie

**telecom**: [+41 71 111 23 24](tel:+41711112324)

**address**: Spital X - Osteopathie 95 Rorschacher Strasse St. Gallen SG 9007 CH (work)

**partOf**: [Organization Spital X](Organization-mCSD-No-peer-Organization-SpitalX.md)



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "mCSD-No-peer-Organization-SpitalX-Osteopathie",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:4514",
      "value" : "uid=CommunityA:00000001007,OU=HCRegulatedOrganization,DC=HPD,O=BAG,C=ch"
    },
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.10.89.202"
    }
  ],
  "active" : true,
  "type" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "416304004",
          "display" : "Osteopathic manipulative medicine"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "22232009",
          "display" : "Hospital"
        }
      ]
    }
  ],
  "name" : "Spital X - Osteopathie",
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+41 71 111 23 24"
    }
  ],
  "address" : [
    {
      "use" : "work",
      "line" : ["Spital X - Osteopathie", "95 Rorschacher Strasse"],
      "city" : "St. Gallen",
      "state" : "SG",
      "postalCode" : "9007",
      "country" : "CH"
    }
  ],
  "partOf" : {
    "reference" : "Organization/mCSD-No-peer-Organization-SpitalX"
  }
}

```
