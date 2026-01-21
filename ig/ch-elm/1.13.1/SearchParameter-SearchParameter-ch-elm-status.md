# SearchParameter-ch-elm-status - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SearchParameter-ch-elm-status**

## SearchParameter: SearchParameter-ch-elm-status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/SearchParameter/SearchParameter-ch-elm-status | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:elmstatus |
| **Copyright/Legal**: CC0-1.0 | |

 
Status of the processing of the document referenced by the DocumentReference 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "SearchParameter-ch-elm-status",
  "url" : "http://fhir.ch/ig/ch-elm/SearchParameter/SearchParameter-ch-elm-status",
  "version" : "1.13.1",
  "name" : "elmstatus",
  "status" : "active",
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
  "description" : "Status of the processing of the document referenced by the DocumentReference",
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
  "code" : "elm-status",
  "base" : ["DocumentReference"],
  "type" : "token",
  "expression" : "DocumentReference.extension.where(url='http://fhir.ch/ig/ch-elm/StructureDefinition/ch-ext-elm-status').value",
  "xpathUsage" : "normal",
  "multipleAnd" : true
}

```
