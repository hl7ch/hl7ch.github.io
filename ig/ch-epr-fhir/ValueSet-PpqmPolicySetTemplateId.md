# CH PPQm Policy Set Template ID - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PPQm Policy Set Template ID**

## ValueSet: CH PPQm Policy Set Template ID 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/ValueSet/PpqmPolicySetTemplateId | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:PpqmPolicySetTemplateId |
| **Copyright/Legal**: CC0-1.0 | |

 
IDs of policy set templates 

 **References** 

* [CH PPQm Consent](StructureDefinition-PpqmConsent.md)

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
  "id" : "PpqmPolicySetTemplateId",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/PpqmPolicySetTemplateId",
  "version" : "5.0.0",
  "name" : "PpqmPolicySetTemplateId",
  "title" : "CH PPQm Policy Set Template ID",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-18T15:54:33+00:00",
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
  "description" : "IDs of policy set templates",
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
        "system" : "http://fhir.ch/ig/ch-epr-fhir/CodeSystem/PpqmPolicySetTemplateId"
      }
    ]
  }
}

```
