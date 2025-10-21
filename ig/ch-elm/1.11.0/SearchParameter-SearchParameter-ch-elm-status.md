# SearchParameter-ch-elm-status - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SearchParameter-ch-elm-status**

## SearchParameter: SearchParameter-ch-elm-status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/SearchParameter/SearchParameter-ch-elm-status | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:elmstatus |
| **Copyright/Legal**: CC0-1.0 | |

 
Status of the processing of the document referenced by the DocumentReference 

## elmstatus

Parameter `elm-status`:`token`

Status of the processing of the document referenced by the DocumentReference

| | |
| :--- | :--- |
| Resource | [DocumentReference](http://hl7.org/fhir/R4/documentreference.html) |
| Expression | `DocumentReference.extension.where(url='http://fhir.ch/ig/ch-elm/StructureDefinition/ch-ext-elm-status').value` |
| Processing Mode | Normal |
| Multiples | * multipleAnd: The parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "SearchParameter-ch-elm-status",
  "url" : "http://fhir.ch/ig/ch-elm/SearchParameter/SearchParameter-ch-elm-status",
  "version" : "1.12.0",
  "name" : "elmstatus",
  "status" : "active",
  "date" : "2025-10-21T11:37:53+00:00",
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
