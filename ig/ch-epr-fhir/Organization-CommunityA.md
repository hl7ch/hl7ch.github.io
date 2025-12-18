# mCSD Organization Community A - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD Organization Community A**

## Example Organization: mCSD Organization Community A

**Note:** The Care Services Selective Supplier of an EPR community is not required to return the community itself as an Organization, this is optional.

Profile: [CH mCSD Organization](StructureDefinition-CH.mCSD.Organization.md)

**identifier**: [LDAP](NamingSystem-Ldap.md)/uid=CommunityA,OU=CHCommunity,DC=CPI,O=BAG,C=ch, [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:oid:2.16.10.89

**active**: true

**type**: Community Group

**name**: Community A



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "CommunityA",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:4514",
      "value" : "uid=CommunityA,OU=CHCommunity,DC=CPI,O=BAG,C=ch"
    },
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.10.89"
    }
  ],
  "active" : true,
  "type" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/organization-type",
          "code" : "cg",
          "display" : "Community Group"
        }
      ]
    }
  ],
  "name" : "Community A"
}

```
