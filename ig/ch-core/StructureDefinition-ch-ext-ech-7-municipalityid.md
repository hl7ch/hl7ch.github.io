# eCH-0007 Municipality Id – BFS Gemeindenummer - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-0007 Municipality Id – BFS Gemeindenummer**

## Extension: eCH-0007 Municipality Id – BFS Gemeindenummer 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-7-municipalityid | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ECH007MunicipalityId |
| **Copyright/Legal**: CC0-1.0 | |

eCH-0007: Extension to define a BFS Number for a municipality

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Address](StructureDefinition-ch-core-address.md)
* Examples for this Extension: [Patient/UpiEprTestKrcmarevic](Patient-UpiEprTestKrcmarevic.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-ext-ech-7-municipalityid)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-ech-7-municipalityid.csv), [Excel](StructureDefinition-ch-ext-ech-7-municipalityid.xlsx), [Schematron](StructureDefinition-ch-ext-ech-7-municipalityid.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-ech-7-municipalityid",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-7-municipalityid",
  "version" : "6.0.0",
  "name" : "ECH007MunicipalityId",
  "title" : "eCH-0007 Municipality Id – BFS Gemeindenummer",
  "status" : "active",
  "date" : "2025-12-16T08:02:49+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "eCH-0007: Extension to define a BFS Number for a municipality",
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
      "expression" : "Address.city"
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
        "definition" : "Extension for eCH-0011 - bfs number (ministry of statistics number)"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-7-municipalityid"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
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
        "id" : "Extension.value[x]:valueString",
        "path" : "Extension.value[x]",
        "sliceName" : "valueString",
        "definition" : "BFS number",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ]
      }
    ]
  }
}

```
