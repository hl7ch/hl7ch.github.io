# CH PPQm Policy Set Template ID - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PPQm Policy Set Template ID**

## CodeSystem: CH PPQm Policy Set Template ID 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CodeSystem/PpqmPolicySetTemplateId | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:PpqmPolicySetTemplateId |
| **Copyright/Legal**: CC0-1.0 | |

 
Code system for Policy Set Template IDs 

 This Code system is referenced in the content logical definition of the following value sets: 

* [PpqmPolicySetTemplateId](ValueSet-PpqmPolicySetTemplateId.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "PpqmPolicySetTemplateId",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CodeSystem/PpqmPolicySetTemplateId",
  "version" : "5.0.0",
  "name" : "PpqmPolicySetTemplateId",
  "title" : "CH PPQm Policy Set Template ID",
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
  "description" : "Code system for Policy Set Template IDs",
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
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 7,
  "concept" : [
    {
      "code" : "201",
      "display" : "201",
      "definition" : "Template 201 -- Full access for the patient"
    },
    {
      "code" : "202",
      "display" : "202",
      "definition" : "Template 202 -- Read access in emergency mode"
    },
    {
      "code" : "203",
      "display" : "203",
      "definition" : "Template 203 -- Default provision level"
    },
    {
      "code" : "301",
      "display" : "301",
      "definition" : "Template 301 -- Read access for a healthcare professional without delegation"
    },
    {
      "code" : "302",
      "display" : "302",
      "definition" : "Template 302 -- Read access for a group of healthcare professionals"
    },
    {
      "code" : "303",
      "display" : "303",
      "definition" : "Template 303 -- Full access for a representative"
    },
    {
      "code" : "304",
      "display" : "304",
      "definition" : "Template 304 -- Read access for a healthcare professional with delegation"
    }
  ]
}

```
