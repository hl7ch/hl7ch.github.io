# mCSD-No-peer-Organization-SpitalX - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD-No-peer-Organization-SpitalX**

## Example Organization: mCSD-No-peer-Organization-SpitalX

Profile: [CH mCSD Organization](StructureDefinition-CH.mCSD.Organization.md)

**identifier**: [LDAP](NamingSystem-Ldap.md)/uid=CommunityA:00000001000,OU=HCRegulatedOrganization,DC=HPD,O=BAG,C=ch, [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:oid:2.16.10.89.201

**active**: true

**type**: General medicine, Hospital

**name**: Spital X

**telecom**: [test@test.fr](mailto:test@test.fr), [+41 71 111 22 33](tel:+41711112233)

**address**: Spital X 95 Rorschacher Strasse St. Gallen SG 9007 CH (work)



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "mCSD-No-peer-Organization-SpitalX",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:4514",
      "value" : "uid=CommunityA:00000001000,OU=HCRegulatedOrganization,DC=HPD,O=BAG,C=ch"
    },
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.10.89.201"
    }
  ],
  "active" : true,
  "type" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "394802001",
          "display" : "General medicine"
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
  "name" : "Spital X",
  "telecom" : [
    {
      "system" : "email",
      "value" : "test@test.fr"
    },
    {
      "system" : "phone",
      "value" : "+41 71 111 22 33"
    }
  ],
  "address" : [
    {
      "use" : "work",
      "line" : ["Spital X", "95 Rorschacher Strasse"],
      "city" : "St. Gallen",
      "state" : "SG",
      "postalCode" : "9007",
      "country" : "CH"
    }
  ]
}

```
