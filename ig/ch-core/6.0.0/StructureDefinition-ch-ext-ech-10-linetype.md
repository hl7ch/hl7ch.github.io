# Address Line Type - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Address Line Type**

## Extension: Address Line Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ECH0010AddressLineType |
| **Copyright/Legal**: CC0-1.0 | |

eCH-0010: Extension to define line types for addresses

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Address](StructureDefinition-ch-core-address.md)
* Examples for this Extension: [Patient/PersonEch011](Patient-PersonEch011.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-ext-ech-10-linetype)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-ech-10-linetype.csv), [Excel](StructureDefinition-ch-ext-ech-10-linetype.xlsx), [Schematron](StructureDefinition-ch-ext-ech-10-linetype.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-ech-10-linetype",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype",
  "version" : "6.0.0",
  "name" : "ECH0010AddressLineType",
  "title" : "Address Line Type",
  "status" : "active",
  "date" : "2025-12-16T07:58:48+00:00",
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
  "description" : "eCH-0010: Extension to define line types for addresses",
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
      "expression" : "Address.line"
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
        "definition" : "eCH-0010: Extension to define line types for an address"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype"
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
        "id" : "Extension.value[x]:valueCode",
        "path" : "Extension.value[x]",
        "sliceName" : "valueCode",
        "definition" : "Value of extension - may be a resource or one of a constrained set of the data types (see\r\n       Extensibility in the spec for list).",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "binding" : {
          "strength" : "extensible",
          "description" : "A set of codes advising a system or user which name in a set of names to select for a\r\n         given purpose.",
          "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/ech-10-linetype"
        }
      }
    ]
  }
}

```
