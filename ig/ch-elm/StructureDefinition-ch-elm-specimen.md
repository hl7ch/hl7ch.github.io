# CH ELM Specimen: Laboratory - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Specimen: Laboratory**

## Resource Profile: CH ELM Specimen: Laboratory 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-specimen | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmSpecimen |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM base profile constrains the Specimen resource for the purpose of laboratory test reports. 

**Usages:**

* Use this Profile: [CH ELM Document: Laboratory Report](StructureDefinition-ch-elm-document.md)
* Refer to this Profile: [CH ELM DiagnosticReport: Laboratory Report](StructureDefinition-ch-elm-diagnosticreport.md), [CH ELM Observation Results: Laboratory](StructureDefinition-ch-elm-observation-results-laboratory.md) and [CH ELM ServiceRequest: Laboratory Order](StructureDefinition-ch-elm-servicerequest-laboratory-order.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-specimen)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-specimen.csv), [Excel](StructureDefinition-ch-elm-specimen.xlsx), [Schematron](StructureDefinition-ch-elm-specimen.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-specimen",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Specimen-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-specimen",
  "version" : "1.12.0",
  "name" : "ChElmSpecimen",
  "title" : "CH ELM Specimen: Laboratory",
  "status" : "active",
  "date" : "2025-10-21T11:52:21+00:00",
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
  "description" : "This CH ELM base profile constrains the Specimen resource for the purpose of laboratory test reports.",
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
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Specimen",
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-specimen",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Specimen",
        "path" : "Specimen",
        "short" : "CH Lab Specimen: Laboratory"
      },
      {
        "id" : "Specimen.type",
        "path" : "Specimen.type",
        "short" : "The mechanism to declare the collection material is described under 'Guidance - Laboratory Result'"
      },
      {
        "id" : "Specimen.type.coding",
        "path" : "Specimen.type.coding",
        "max" : "1",
        "type" : [
          {
            "code" : "Coding",
            "profile" : ["http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-coding"]
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-complete-spec"
        }
      },
      {
        "id" : "Specimen.subject",
        "path" : "Specimen.subject",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-patient"
            ]
          }
        ]
      },
      {
        "id" : "Specimen.collection",
        "path" : "Specimen.collection",
        "mustSupport" : true
      },
      {
        "id" : "Specimen.collection.collected[x]",
        "path" : "Specimen.collection.collected[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Specimen.collection.collected[x]:collectedDateTime",
        "path" : "Specimen.collection.collected[x]",
        "sliceName" : "collectedDateTime",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ],
        "constraint" : [
          {
            "key" : "ch-elm-dateTime",
            "severity" : "error",
            "human" : "At least the format YYYY-MM-DD is required.",
            "expression" : "$this.toString().length() >= 10",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-specimen"
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
