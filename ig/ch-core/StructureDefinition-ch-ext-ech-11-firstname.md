# First Name - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **First Name**

## Extension: First Name 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-firstname | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ECH011FirstName |
| **Copyright/Legal**: CC0-1.0 | |

eCH-0011: Extension to define first name type

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Human Name](StructureDefinition-ch-core-humanname.md)
* Examples for this Extension: [Bundle/1-ZuweisungZurRadiologischenDiagnostik-FHIR](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md), [Bundle/2-ResourceCrossReferencesDokument](Bundle-2-ResourceCrossReferencesDokument.md), [Patient/MaxMuster](Patient-MaxMuster.md) and [Patient/PersonEch011](Patient-PersonEch011.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-ext-ech-11-firstname)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-ech-11-firstname.csv), [Excel](StructureDefinition-ch-ext-ech-11-firstname.xlsx), [Schematron](StructureDefinition-ch-ext-ech-11-firstname.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-ech-11-firstname",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-firstname",
  "version" : "6.0.0",
  "name" : "ECH011FirstName",
  "title" : "First Name",
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
  "description" : "eCH-0011: Extension to define first name type",
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
      "expression" : "HumanName.given"
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
        "short" : "Extension",
        "definition" : "eCH-0011: Extension to define first name type"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-firstname"
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
          "strength" : "required",
          "description" : "A set of codes advising a system or user which name in a set of names to select for a\r\n         given purpose.",
          "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-firstnamedatatype"
        }
      }
    ]
  }
}

```
