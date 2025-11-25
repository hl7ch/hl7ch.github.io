# Status of the processing of the document - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Status of the processing of the document**

## Extension: Status of the processing of the document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-ext-elm-status | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChExtElmStatus |
| **Copyright/Legal**: CC0-1.0 | |

Extension to define the status of the processing of the document

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [DocumentReference for Publish Response](StructureDefinition-PublishDocumentReferenceResponse.md)
* Examples for this Extension: [Bundle/ex-findDocumentReferencesResponse](Bundle-ex-findDocumentReferencesResponse.md), [DocumentReference/1-DocumentReferenceResponseCompleted](DocumentReference-1-DocumentReferenceResponseCompleted.md), [DocumentReference/1-DocumentReferenceResponseFailed](DocumentReference-1-DocumentReferenceResponseFailed.md) and [DocumentReference/1-DocumentReferenceResponseInProgress](DocumentReference-1-DocumentReferenceResponseInProgress.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-ext-elm-status)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-elm-status.csv), [Excel](StructureDefinition-ch-ext-elm-status.xlsx), [Schematron](StructureDefinition-ch-ext-elm-status.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-elm-status",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-ext-elm-status",
  "version" : "1.13.0",
  "name" : "ChExtElmStatus",
  "title" : "Status of the processing of the document",
  "status" : "active",
  "date" : "2025-11-25T09:58:53+00:00",
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
  "description" : "Extension to define the status of the processing of the document",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "DocumentReference"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "Status of the processing of the document",
        "definition" : "Extension to define the status of the processing of the document"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 1
      },
      {
        "id" : "Extension.extension:status",
        "path" : "Extension.extension",
        "sliceName" : "status",
        "short" : "Status of the processing of the document",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:status.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:status.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "status"
      },
      {
        "id" : "Extension.extension:status.value[x]",
        "path" : "Extension.extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Extension.extension:status.value[x]:valueCode",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueCode",
        "short" : "Code to indicate the status of the processing of the document",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-status"
        }
      },
      {
        "id" : "Extension.extension:outcome",
        "path" : "Extension.extension",
        "sliceName" : "outcome",
        "short" : "Timestamp of the authorship/data input",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:outcome.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:outcome.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "outcome"
      },
      {
        "id" : "Extension.extension:outcome.value[x]",
        "path" : "Extension.extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Extension.extension:outcome.value[x]:valueReference",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueReference",
        "short" : "reference to contained OperationOutcome if processing failed",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/OperationOutcome"],
            "aggregation" : ["contained"]
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-ext-elm-status"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "max" : "0"
      }
    ]
  }
}

```
