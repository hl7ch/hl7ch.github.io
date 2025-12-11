# CH IG Designations - CH IG (R4) v1.2.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IG Designations**

## CodeSystem: CH IG Designations 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ig/CodeSystem/example | *Version*:1.2.3 |
| Draft as of 2025-12-11 | *Computable Name*:DesignationsCS |
| **Copyright/Legal**: CC0-1.0 | |

 
Example code system including own defined codes with multilingual designations. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DesignationsVS](ValueSet-example.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "example",
  "url" : "http://fhir.ch/ig/ch-ig/CodeSystem/example",
  "version" : "1.2.3",
  "name" : "DesignationsCS",
  "title" : "CH IG Designations",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-12-11T10:31:14+00:00",
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
  "description" : "Example code system including own defined codes with multilingual designations.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "example-1",
      "display" : "Example 1",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Beispiel 1"
        },
        {
          "language" : "fr-CH",
          "value" : "Exemple 1"
        },
        {
          "language" : "it-CH",
          "value" : "Esempio 1"
        }
      ]
    },
    {
      "code" : "example-2",
      "display" : "Example 2",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Beispiel 2"
        },
        {
          "language" : "fr-CH",
          "value" : "Exemple 2"
        },
        {
          "language" : "it-CH",
          "value" : "Esempio 2"
        }
      ]
    },
    {
      "code" : "example-3",
      "display" : "Example 3",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Beispiel 3"
        },
        {
          "language" : "fr-CH",
          "value" : "Exemple 3"
        },
        {
          "language" : "it-CH",
          "value" : "Esempio 3"
        }
      ]
    }
  ]
}

```
