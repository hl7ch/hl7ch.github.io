# mCSD Organization Spital X Dept. 3 - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mCSD Organization Spital X Dept. 3**

## Example Organization: mCSD Organization Spital X Dept. 3

Profile: [CH mCSD Organization](StructureDefinition-CH.mCSD.Organization.md)

**identifier**: [LDAP](NamingSystem-Ldap.md)/uid=CommunityA:00000001004,OU=HCRegulatedOrganization,DC=HPD,O=BAG,C=ch, [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:oid:2.16.10.89.203

**active**: true

**type**: Accident and Emergency department, Hospital

**name**: Dept. 3

**telecom**: fax: +41 71 111 22 27, [+41 71 111 22 19](tel:+41711112219)

**address**: Spital X - Medicina d'urgenza e di salvataggio 95 Rorschacher Strasse St. Gallen SG 9007 CH (work)

**partOf**: [Organization Spital X](Organization-SpitalX.md)



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "SpitalXDept3",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:4514",
      "value" : "uid=CommunityA:00000001004,OU=HCRegulatedOrganization,DC=HPD,O=BAG,C=ch"
    },
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.10.89.203"
    }
  ],
  "active" : true,
  "type" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "225728007",
          "display" : "Accident and Emergency department"
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
  "name" : "Dept. 3",
  "telecom" : [
    {
      "system" : "fax",
      "value" : "+41 71 111 22 27"
    },
    {
      "system" : "phone",
      "value" : "+41 71 111 22 19"
    }
  ],
  "address" : [
    {
      "use" : "work",
      "line" : [
        "Spital X - Medicina d'urgenza e di salvataggio",
        "95 Rorschacher Strasse"
      ],
      "city" : "St. Gallen",
      "state" : "SG",
      "postalCode" : "9007",
      "country" : "CH"
    }
  ],
  "partOf" : {
    "reference" : "Organization/SpitalX"
  }
}

```
