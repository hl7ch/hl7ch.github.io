# EDQM - Combination Packaging - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EDQM - Combination Packaging**

## ValueSet: EDQM - Combination Packaging 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/ValueSet/edqm-combination-packaging | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:EdqmCombinationPackagingVS |
| *Other Identifiers:*OID:0.4.0.127.0.16.1.1.2.5 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
Value Set for the Combination Packaging from EDQM used by SMC 

 **References** 

* Included into [ChSMCAuthorisedPharmaceuticalDoseFormVS](ValueSet-ch-SMC-authorised-pharmaceutical-dose-form.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R5/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "edqm-combination-packaging",
  "url" : "http://fhir.ch/ig/ch-epl/ValueSet/edqm-combination-packaging",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:0.4.0.127.0.16.1.1.2.5"
    }
  ],
  "version" : "1.0.0",
  "name" : "EdqmCombinationPackagingVS",
  "title" : "EDQM - Combination Packaging",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-11T12:29:57+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "Value Set for the Combination Packaging from EDQM used by SMC",
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
        "system" : "http://standardterms.edqm.eu",
        "concept" : [
          {
            "code" : "14001000",
            "display" : "Cream + pessary"
          },
          {
            "code" : "14002000",
            "display" : "Cutaneous solution + medicated sponge"
          },
          {
            "code" : "14003000",
            "display" : "Gastro-resistant tablet + rectal suspension"
          },
          {
            "code" : "14004000",
            "display" : "Vaginal capsule, soft + vaginal cream"
          },
          {
            "code" : "14005000",
            "display" : "Vaginal cream + vaginal tablet"
          },
          {
            "code" : "14006000",
            "display" : "Effervescent granules + film-coated tablet"
          },
          {
            "code" : "14007000",
            "display" : "Effervescent tablet + film-coated tablet"
          },
          {
            "code" : "14008000",
            "display" : "Tablet + vaginal tablet"
          },
          {
            "code" : "14009000",
            "display" : "Cream + vaginal capsule, soft"
          },
          {
            "code" : "14010000",
            "display" : "Cream + vaginal tablet"
          },
          {
            "code" : "14011000",
            "display" : "Film-coated tablet + pessary"
          },
          {
            "code" : "14012000",
            "display" : "Capsule, soft + tablet"
          },
          {
            "code" : "14013000",
            "display" : "Capsule, hard + tablet"
          },
          {
            "code" : "14014000",
            "display" : "Film-coated tablet + tablet"
          },
          {
            "code" : "14015000",
            "display" : "Ointment + vaginal tablet"
          },
          {
            "code" : "14016000",
            "display" : "Effervescent granules + gastro-resistant tablet"
          },
          {
            "code" : "14017000",
            "display" : "Eye drops, solution + eye ointment"
          }
        ]
      }
    ]
  }
}

```
