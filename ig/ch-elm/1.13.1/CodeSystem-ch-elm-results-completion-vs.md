# CH ELM Results Completion Vs - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Completion Vs**

## CodeSystem: CH ELM Results Completion Vs 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-results-completion-vs | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmResultsCompletionVs |
| **Copyright/Legal**: CC0-1.0 | |

 
The codes contained in this code system represent URLs of value sets that can be used as target codes in ConceptMaps. These value sets define the codes that are permitted for specifying the organism or specimen in relation to the leading code. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChElmResultsCompletionVs](ValueSet-ch-elm-results-completion-vs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-elm-results-completion-vs",
  "url" : "http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-results-completion-vs",
  "version" : "1.13.1",
  "name" : "ChElmResultsCompletionVs",
  "title" : "CH ELM Results Completion Vs",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-21T11:05:32+00:00",
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
  "description" : "The codes contained in this code system represent URLs of value sets that can be used as target codes in ConceptMaps. These value sets define the codes that are permitted for specifying the organism or specimen in relation to the leading code.",
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
  "caseSensitive" : false,
  "content" : "complete",
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

```
