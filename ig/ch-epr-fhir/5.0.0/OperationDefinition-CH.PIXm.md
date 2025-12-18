# PIXm Find patient matches - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PIXm Find patient matches**

## OperationDefinition: PIXm Find patient matches 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/OperationDefinition/CH.PIXm | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CH_PIXm |
| **Copyright/Legal**: CC0-1.0 | |

 
Find patient matches using IHE-PIXm Profile 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "CH.PIXm",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/OperationDefinition/CH.PIXm",
  "version" : "5.0.0",
  "name" : "CH_PIXm",
  "title" : "PIXm Find patient matches",
  "status" : "active",
  "kind" : "operation",
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
  "description" : "Find patient matches using IHE-PIXm Profile",
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
  "affectsState" : false,
  "code" : "ihe-pix",
  "base" : "http://fhir.ch/ig/ch-epr-fhir/OperationDefinition/CH.PIXm",
  "resource" : ["Patient"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [
    {
      "name" : "sourceIdentifier",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "documentation" : "The Patient identifier search parameter that will be used by the Patient Identifier Cross-reference Manager to find cross matching identifiers associated with the Patient Resource. See Section 3.83.4.1.2.1",
      "type" : "string",
      "searchType" : "token"
    },
    {
      "name" : "targetSystem",
      "use" : "in",
      "min" : 1,
      "max" : "2",
      "documentation" : "The Assigning Authorities for the Patient Identity Domains from which the returned identifiers shall be selected. See Section 3.83.4.1.2.2.",
      "type" : "string",
      "searchType" : "uri"
    },
    {
      "name" : "_format",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "documentation" : "The requested format of the response from the mime-type value set. See ITI TF-2: Appendix Z.6",
      "type" : "string",
      "searchType" : "token"
    },
    {
      "name" : "targetIdentifier",
      "use" : "out",
      "min" : 0,
      "max" : "2",
      "documentation" : "The identifier found. Constraints to include the assigning authority as specified in ITI TF-2: Appendix E.3",
      "type" : "Identifier"
    }
  ]
}

```
