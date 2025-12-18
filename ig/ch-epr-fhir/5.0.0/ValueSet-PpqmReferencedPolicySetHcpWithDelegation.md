# CH PPQm Referenced Policy Set for Healthcare Professionals with Delegation (304) template - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PPQm Referenced Policy Set for Healthcare Professionals with Delegation (304) template**

## ValueSet: CH PPQm Referenced Policy Set for Healthcare Professionals with Delegation (304) template 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/ValueSet/PpqmReferencedPolicySetHcpWithDelegation | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:PpqmReferencedPolicySetHcpWithDelegation |
| **Copyright/Legal**: CC0-1.0 | |

 
IDs of basis policy sets that may be referenced from template 304 

 **References** 

* [EPR policy set based on template 304](StructureDefinition-PpqmConsentTemplate304.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "PpqmReferencedPolicySetHcpWithDelegation",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/PpqmReferencedPolicySetHcpWithDelegation",
  "version" : "5.0.0",
  "name" : "PpqmReferencedPolicySetHcpWithDelegation",
  "title" : "CH PPQm Referenced Policy Set for Healthcare Professionals with Delegation (304) template",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-18T15:42:00+00:00",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "IDs of basis policy sets that may be referenced from template 304",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "urn:ietf:rfc:3986",
        "concept" : [
          {
            "code" : "urn:e-health-suisse:2015:policies:access-level:delegation-and-normal",
            "display" : "Read normal with delegation"
          },
          {
            "code" : "urn:e-health-suisse:2015:policies:access-level:delegation-and-restricted",
            "display" : "Read restricted with delegation"
          }
        ]
      }
    ]
  }
}

```
