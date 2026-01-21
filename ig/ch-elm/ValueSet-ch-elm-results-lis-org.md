# CH ELM Results Lis Org - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Lis Org**

## ValueSet: CH ELM Results Lis Org 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-lis-org | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmResultsLisOrg |
| **Copyright/Legal**: CC0-1.0 | |

 
The "CH ELM Results Lis Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Lis Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

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
  "id" : "ch-elm-results-lis-org",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-lis-org",
  "version" : "1.13.1",
  "name" : "ChElmResultsLisOrg",
  "title" : "CH ELM Results Lis Org",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-21T11:21:00+00:00",
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
  "description" : "The \"CH ELM Results Lis Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Lis Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
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
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "450542001",
            "display" : "Listeria monocytogenes serotype 3c (organism)"
          },
          {
            "code" : "258381003",
            "display" : "Group 4 (qualifier value)"
          },
          {
            "code" : "450536000",
            "display" : "Listeria monocytogenes serotype 1/2a (organism)"
          },
          {
            "code" : "450547007",
            "display" : "Listeria monocytogenes serotype 4e (organism)"
          },
          {
            "code" : "36094007",
            "display" : "Listeria monocytogenes (organism)"
          },
          {
            "code" : "450541008",
            "display" : "Listeria monocytogenes serotype 3b (organism)"
          },
          {
            "code" : "450539007",
            "display" : "Listeria monocytogenes serotype 4b (organism)"
          },
          {
            "code" : "450548002",
            "display" : "Listeria monocytogenes serotype 7 (organism)"
          },
          {
            "code" : "450540009",
            "display" : "Listeria monocytogenes serotype 3a (organism)"
          },
          {
            "code" : "258366009",
            "display" : "Group 1 (qualifier value)"
          },
          {
            "code" : "450538004",
            "display" : "Listeria monocytogenes serotype 1/2c (organism)"
          },
          {
            "code" : "450537009",
            "display" : "Listeria monocytogenes serotype 1/2b (organism)"
          },
          {
            "code" : "450546003",
            "display" : "Listeria monocytogenes serotype 4d (organism)"
          },
          {
            "code" : "258370001",
            "display" : "Group 2 (qualifier value)"
          },
          {
            "code" : "258374005",
            "display" : "Group 3 (qualifier value)"
          }
        ]
      }
    ]
  }
}

```
