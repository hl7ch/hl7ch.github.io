# mCSD-Peer-to-peer-Organization-Fuchur-Klinik - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD-Peer-to-peer-Organization-Fuchur-Klinik**

## Example Organization: mCSD-Peer-to-peer-Organization-Fuchur-Klinik

Profile: [CH mCSD Organization](StructureDefinition-CH.mCSD.Organization.md)

**identifier**: [LDAP](NamingSystem-Ldap.md)/uid=CommunityA:00000003001,OU=HCRegulatedOrganization,DC=HPD,O=BAG,C=ch, [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:oid:2.16.10.89.214

**active**: false

**type**: Hospital

**name**: Fuchur-Klinik



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "mCSD-Peer-to-peer-Organization-Fuchur-Klinik",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:4514",
      "value" : "uid=CommunityA:00000003001,OU=HCRegulatedOrganization,DC=HPD,O=BAG,C=ch"
    },
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.10.89.214"
    }
  ],
  "active" : false,
  "type" : [
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
  "name" : "Fuchur-Klinik"
}

```
