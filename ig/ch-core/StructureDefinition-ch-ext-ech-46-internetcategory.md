# eCH-0046 Internet Category - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-0046 Internet Category**

## Extension: eCH-0046 Internet Category 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-46-internetcategory | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ECH46InternetCategory |
| **Copyright/Legal**: CC0-1.0 | |

Extension to define the internet category according to eCH-0046

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core ContactPoint eCH-0046 Internet](StructureDefinition-ch-core-contactpoint-ech-46-internet.md)
* Examples for this Extension: [Bundle/1-ZuweisungZurRadiologischenDiagnostik-FHIR](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md), [Bundle/2-ResourceCrossReferencesDokument](Bundle-2-ResourceCrossReferencesDokument.md) and [Patient/MaxMuster](Patient-MaxMuster.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-ext-ech-46-internetcategory)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-ech-46-internetcategory.csv), [Excel](StructureDefinition-ch-ext-ech-46-internetcategory.xlsx), [Schematron](StructureDefinition-ch-ext-ech-46-internetcategory.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-ech-46-internetcategory",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-46-internetcategory",
  "version" : "6.0.0",
  "name" : "ECH46InternetCategory",
  "title" : "eCH-0046 Internet Category",
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
  "description" : "Extension to define the internet category according to eCH-0046",
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
      "expression" : "ContactPoint.use"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-46-internetcategory"
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
        "id" : "Extension.value[x]:valueCodeableConcept",
        "path" : "Extension.value[x]",
        "sliceName" : "valueCodeableConcept",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/ech-46-internetcategory"
        }
      },
      {
        "id" : "Extension.value[x]:valueCodeableConcept.coding",
        "path" : "Extension.value[x].coding",
        "short" : "Predefined category"
      },
      {
        "id" : "Extension.value[x]:valueCodeableConcept.text",
        "path" : "Extension.value[x].text",
        "short" : "Category as free text should only be used if none of the predefined categories apply"
      }
    ]
  }
}

```
