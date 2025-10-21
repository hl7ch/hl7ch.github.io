# CH ELM Coding - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Coding**

## Data Type Profile: CH ELM Coding 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-coding | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmCoding |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile represents the constraints applied to the Coding data type by this IG used in the 'CH ELM Coding' data type profile. 

**Usages:**

* Use this DataType Profile: [CH ELM CodeableConcept](StructureDefinition-ch-elm-codeableconcept.md) and [CH ELM Specimen: Laboratory](StructureDefinition-ch-elm-specimen.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-coding)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-coding.csv), [Excel](StructureDefinition-ch-elm-coding.xlsx), [Schematron](StructureDefinition-ch-elm-coding.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-coding",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-coding",
  "version" : "1.12.0",
  "name" : "ChElmCoding",
  "title" : "CH ELM Coding",
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
  "description" : "This profile represents the constraints applied to the Coding data type by this IG used in the 'CH ELM Coding' data type profile.",
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
      "identity" : "orim",
      "uri" : "http://hl7.org/orim",
      "name" : "Ontological RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Coding",
  "baseDefinition" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Coding-uv-ips",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Coding.system",
        "path" : "Coding.system",
        "min" : 1
      },
      {
        "id" : "Coding.code",
        "path" : "Coding.code",
        "min" : 1
      }
    ]
  }
}

```
