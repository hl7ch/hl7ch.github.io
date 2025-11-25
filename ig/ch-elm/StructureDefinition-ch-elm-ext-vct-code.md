# CH ELM Extension: VCT code - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Extension: VCT code**

## Extension: CH ELM Extension: VCT code 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-vct-code | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmExtVctCode |
| **Copyright/Legal**: CC0-1.0 | |

This CH ELM extension enables to provide the VCT Code.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Human Name](StructureDefinition-ch-elm-humanname.md)
* Examples for this Extension: [Bundle/2Doc-ChlamydiaTrachomatis-Vct](Bundle-2Doc-ChlamydiaTrachomatis-Vct.md), [DocumentReference/2-DocumentReferenceVctStrict](DocumentReference-2-DocumentReferenceVctStrict.md), [DocumentReference/Publish-2Doc-ChlamydiaTrachomatis-Vct](DocumentReference-Publish-2Doc-ChlamydiaTrachomatis-Vct.md) and [Patient/Pat-VCT](Patient-Pat-VCT.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-ext-vct-code)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-ext-vct-code.csv), [Excel](StructureDefinition-ch-elm-ext-vct-code.xlsx), [Schematron](StructureDefinition-ch-elm-ext-vct-code.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-ext-vct-code",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-vct-code",
  "version" : "1.13.0",
  "name" : "ChElmExtVctCode",
  "title" : "CH ELM Extension: VCT code",
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
  "description" : "This CH ELM extension enables to provide the VCT Code.",
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
      "expression" : "HumanName"
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
        "short" : "CH ELM Extension: VCT Code",
        "definition" : "This CH ELM extension enables to provide the VCT Code."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-vct-code"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "short" : "Name of the VCT Code",
        "min" : 1,
        "type" : [
          {
            "code" : "string"
          }
        ],
        "maxLength" : 20
      }
    ]
  }
}

```
