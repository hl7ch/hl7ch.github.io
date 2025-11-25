# IDN Identifier - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IDN Identifier**

## Data Type Profile: IDN Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-idn-identifier | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:IdnIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier holding the IDN Liechtenstein. It is a 13-digit number without check digit and without special characters. 

**Usages:**

* Use this DataType Profile: [CH ELM Patient](StructureDefinition-ch-elm-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-idn-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-idn-identifier.csv), [Excel](StructureDefinition-ch-elm-idn-identifier.xlsx), [Schematron](StructureDefinition-ch-elm-idn-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-idn-identifier",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-idn-identifier",
  "version" : "1.13.0",
  "name" : "IdnIdentifier",
  "title" : "IDN Identifier",
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
  "description" : "Identifier holding the IDN Liechtenstein. It is a 13-digit number without check digit and without special characters.",
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
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Identifier",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Identifier",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Identifier.system",
        "path" : "Identifier.system",
        "min" : 1,
        "fixedUri" : "urn:oid:2.16.438.10.20.10.10.1.2.1"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "min" : 1,
        "constraint" : [
          {
            "key" : "idn-length",
            "severity" : "error",
            "human" : "IDN must be 13 digits long",
            "expression" : "value.matches('^[0-9]{13}$')",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-idn-identifier"
          }
        ]
      }
    ]
  }
}

```
