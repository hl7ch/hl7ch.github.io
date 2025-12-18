# mCSD Organization Praxis P - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD Organization Praxis P**

## Example Organization: mCSD Organization Praxis P

Profile: [CH mCSD Organization](StructureDefinition-CH.mCSD.Organization.md)

**identifier**: [LDAP](NamingSystem-Ldap.md)/uid=CommunityA:00000001001,OU=HCRegulatedOrganization,DC=HPD,O=BAG,C=ch, [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:oid:2.16.10.89.210

**active**: true

**type**: Ambulatory care site, General medicine

**name**: Praxis P

**telecom**: fax: +41 71 271 22 99, [+41 71 271 22 33](tel:+41712712233)

**address**: Praxis P 47 Langgasse St. Gallen SG 9000 CH (work)



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "PraxisP",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:4514",
      "value" : "uid=CommunityA:00000001001,OU=HCRegulatedOrganization,DC=HPD,O=BAG,C=ch"
    },
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.10.89.210"
    }
  ],
  "active" : true,
  "type" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "35971002",
          "display" : "Ambulatory care site"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "394802001",
          "display" : "General medicine"
        }
      ]
    }
  ],
  "name" : "Praxis P",
  "telecom" : [
    {
      "system" : "fax",
      "value" : "+41 71 271 22 99"
    },
    {
      "system" : "phone",
      "value" : "+41 71 271 22 33"
    }
  ],
  "address" : [
    {
      "use" : "work",
      "line" : ["Praxis P", "47 Langgasse"],
      "city" : "St. Gallen",
      "state" : "SG",
      "postalCode" : "9000",
      "country" : "CH"
    }
  ]
}

```
