# CH PDQm Match Output Bundle Profile - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PDQm Match Output Bundle Profile**

## Resource Profile: CH PDQm Match Output Bundle Profile 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pdqm-matchparametersout | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHPDQmMatchParametersOut |
| **Copyright/Legal**: CC0-1.0 | |

 
A profile on the Query Patient Resource Response message for ITI-119 

**Usages:**

* Examples for this Profile: [Bundle/PDQm-QueryResponse](Bundle-PDQm-QueryResponse.md) and [Bundle/PDQm-QueryResponseTooManyResults](Bundle-PDQm-QueryResponseTooManyResults.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-pdqm-matchparametersout)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-pdqm-matchparametersout.csv), [Excel](StructureDefinition-ch-pdqm-matchparametersout.xlsx), [Schematron](StructureDefinition-ch-pdqm-matchparametersout.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-pdqm-matchparametersout",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pdqm-matchparametersout",
  "version" : "5.0.0",
  "name" : "CHPDQmMatchParametersOut",
  "title" : "CH PDQm Match Output Bundle Profile",
  "status" : "active",
  "date" : "2025-12-18T15:54:33+00:00",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "A profile on the Query Patient Resource Response message for ITI-119",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Bundle",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle"
      },
      {
        "id" : "Bundle.type",
        "path" : "Bundle.type",
        "fixedCode" : "searchset"
      },
      {
        "id" : "Bundle.total",
        "path" : "Bundle.total",
        "min" : 1
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "resource"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Bundle.entry.fullUrl",
        "path" : "Bundle.entry.fullUrl",
        "min" : 1
      },
      {
        "id" : "Bundle.entry:Patient",
        "path" : "Bundle.entry",
        "sliceName" : "Patient",
        "short" : "Patient",
        "min" : 0,
        "max" : "5"
      },
      {
        "id" : "Bundle.entry:Patient.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Patient",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pdqm-patient"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Patient.search",
        "path" : "Bundle.entry.search",
        "min" : 1
      },
      {
        "id" : "Bundle.entry:Patient.search.extension",
        "path" : "Bundle.entry.search.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Bundle.entry:Patient.search.extension:MatchGrade",
        "path" : "Bundle.entry.search.extension",
        "sliceName" : "MatchGrade",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/match-grade|5.3.0-ballot-tc1"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Patient.search.mode",
        "path" : "Bundle.entry.search.mode",
        "min" : 1,
        "patternCode" : "match"
      },
      {
        "id" : "Bundle.entry:Patient.search.score",
        "path" : "Bundle.entry.search.score",
        "min" : 1
      },
      {
        "id" : "Bundle.entry:OperationOutcome",
        "path" : "Bundle.entry",
        "sliceName" : "OperationOutcome",
        "short" : "OperationOutcome",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:OperationOutcome.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "OperationOutcome"
          }
        ]
      }
    ]
  }
}

```
