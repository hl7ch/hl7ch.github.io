# ch-ehealth-codesystem-language - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ch-ehealth-codesystem-language**

## CodeSystem: ch-ehealth-codesystem-language 

| | |
| :--- | :--- |
| *Official URL*:urn:oid:2.16.756.5.30.1.127.3.10.12 | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:ChEhealthCodesystemLanguage |
| **Copyright/Legal**: CC0-1.0 | |

 
Document language as per Annex 3 EPRO-FDHA. Defines the language in which the document was written. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DocumentEntryLanguageCode](ValueSet-DocumentEntry.languageCode.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "2.16.756.5.30.1.127.3.10.12",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.1.13--20230522173732"
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2023-05-22T17:37:32+02:00"
      }
    }
  ],
  "url" : "urn:oid:2.16.756.5.30.1.127.3.10.12",
  "version" : "3.3.0",
  "name" : "ChEhealthCodesystemLanguage",
  "title" : "ch-ehealth-codesystem-language",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:47:47+00:00",
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
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Document language as per Annex 3 EPRO-FDHA. Defines the language in which the document was written.",
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
  "concept" : [
    {
      "code" : "OTHER",
      "display" : "Other language",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Andere Sprache"
        },
        {
          "language" : "fr-CH",
          "value" : "Autre langue"
        },
        {
          "language" : "it-CH",
          "value" : "Altra lingua"
        },
        {
          "language" : "en-US",
          "value" : "Other language"
        },
        {
          "language" : "rm-CH",
          "value" : "Autras linguas"
        }
      ]
    }
  ]
}

```
