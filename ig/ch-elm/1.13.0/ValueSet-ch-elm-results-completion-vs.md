# CH ELM Results Completion Vs - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Completion Vs**

## ValueSet: CH ELM Results Completion Vs 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-completion-vs | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmResultsCompletionVs |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM value set includes the value set URLs as codes to map in the concept maps the leading codes, which must be completed with additional codes. 

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
  "id" : "ch-elm-results-completion-vs",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-completion-vs",
  "version" : "1.13.0",
  "name" : "ChElmResultsCompletionVs",
  "title" : "CH ELM Results Completion Vs",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-25T09:47:06+00:00",
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
  "description" : "This CH ELM value set includes the value set URLs as codes to map in the concept maps the leading codes, which must be completed with additional codes.",
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
        "system" : "http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-results-completion-vs",
        "concept" : [
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-bot-spec"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-complete-spec"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-diph-spec"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-geni-spec"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-lis-spec"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sterile-spec"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-tub-spec"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-bot-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-bru-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-camp-diar-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-camp-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-chol-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-cjd-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-diph-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-ebol-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-ehec-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-ehec-tox-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-haem-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-hanta-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-hiv-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-inf-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-influenza-hxny-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-leg-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-lis-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-mal-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-maldi-tof-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-mea-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-men-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-mpox-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-mpx-ctng"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-mpx-sash"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-mpx-sashec"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-pneu-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sal-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sal-org-complete"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-shi-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-tub-gen-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-tub-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-tul-org"
          },
          {
            "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-virus-cult-org"
          }
        ]
      }
    ]
  }
}

```
