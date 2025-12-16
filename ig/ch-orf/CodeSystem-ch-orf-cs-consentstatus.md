# Consent Status - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Consent Status**

## CodeSystem: Consent Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-consentstatus | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfConsentStatus |
| **Copyright/Legal**: CC0-1.0 | |

 
Value Set for CH ORF Consent Status 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChOrfConsentStatus](ValueSet-ch-orf-vs-consentstatus.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-orf-cs-consentstatus",
  "url" : "http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-consentstatus",
  "version" : "3.0.2",
  "name" : "ChOrfConsentStatus",
  "title" : "Consent Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T09:36:47+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    }
  ],
  "description" : "Value Set for CH ORF Consent Status",
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
  "count" : 2,
  "concept" : [
    {
      "code" : "ExplicitAgreement",
      "display" : "Patient is informed and has explicitly agreed"
    },
    {
      "code" : "Other",
      "display" : "Other situation such as 'implicit agreement', 'agreed by legal guardian' etc."
    }
  ]
}

```
