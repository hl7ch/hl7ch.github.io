# Verification Status Codes - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Verification Status Codes**

## ValueSet: Verification Status Codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-verification-status-vs | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHVACDVerificationStatusVS |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition the verification status codes for the extension ch-vacd-ext-verification-status. 

 **References** 

* [CH VACD Extension verificationStatus](StructureDefinition-ch-vacd-ext-verification-status.md)

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
  "id" : "ch-vacd-verification-status-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-verification-status-vs",
  "version" : "6.0.0",
  "name" : "CHVACDVerificationStatusVS",
  "title" : "Verification Status Codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T09:56:56+00:00",
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
  "description" : "Definition the verification status codes for the extension ch-vacd-ext-verification-status.",
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
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "59156000",
            "display" : "Confirmed by (contextual qualifier) (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bestätigt"
              },
              {
                "language" : "fr-CH",
                "value" : "confirmé"
              },
              {
                "language" : "it-CH",
                "value" : "confermato"
              },
              {
                "language" : "rm-CH",
                "value" : "Bestätigt"
              },
              {
                "language" : "en-US",
                "value" : "Confirmed"
              }
            ]
          },
          {
            "code" : "76104008",
            "display" : "Not confirmed by (contextual qualifier) (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nicht Bestätigt"
              },
              {
                "language" : "fr-CH",
                "value" : "non confirmé"
              },
              {
                "language" : "it-CH",
                "value" : "Non confermato"
              },
              {
                "language" : "rm-CH",
                "value" : "Nicht Bestätigt"
              },
              {
                "language" : "en-US",
                "value" : "Not confirmed"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
