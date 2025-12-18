# CH Codesystem PDQ More Attributes Requested - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Codesystem PDQ More Attributes Requested**

## CodeSystem: CH Codesystem PDQ More Attributes Requested 

| | |
| :--- | :--- |
| *Official URL*:urn:oid:2.16.756.5.30.1.127.3.10.17 | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:ChEhealthCodesystemPqdMoreAttributesRequested |
| **Copyright/Legal**: CC0-1.0 | |

 
Codes for indicating which additional attributes are requested to lower the results number. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChPdqmMoreAttributesRequested](ValueSet-ChPdqmMoreAttributesRequested.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "2.16.756.5.30.1.127.3.10.17",
  "url" : "urn:oid:2.16.756.5.30.1.127.3.10.17",
  "version" : "5.0.0",
  "name" : "ChEhealthCodesystemPqdMoreAttributesRequested",
  "title" : "CH Codesystem PDQ More Attributes Requested",
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
  "description" : "Codes for indicating which additional attributes are requested to lower the results number.",
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
  "count" : 1,
  "concept" : [
    {
      "code" : "BirthNameRequested",
      "display" : "BirthNameRequested"
    }
  ]
}

```
