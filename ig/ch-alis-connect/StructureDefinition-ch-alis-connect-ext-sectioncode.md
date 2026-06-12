# CH ALIS Extension SectionCode - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Extension SectionCode**

## Extension: CH ALIS Extension SectionCode 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sectioncode | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisExtensionSectionCode |
| **Copyright/Legal**: CC0-1.0 | |

This extension describes the SectionCode.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH ALIS ChargeItem Profile](StructureDefinition-ch-alis-connect-chargeitem.md)
* Examples for this Extension: [ChargeItem/ChargeItemLKAATIcd-45679](ChargeItem-ChargeItemLKAATIcd-45679.md), [ChargeItem/ChargeItemLKAATIcd-45680](ChargeItem-ChargeItemLKAATIcd-45680.md), [ChargeItem/ChargeItemLKAATIcd](ChargeItem-ChargeItemLKAATIcd.md), [ChargeItem/ChargeItemLabServiceAssignment](ChargeItem-ChargeItemLabServiceAssignment.md) and [ChargeItem/ChargeItemPauschaleKomplett](ChargeItem-ChargeItemPauschaleKomplett.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-ch-alis-connect-ext-sectioncode.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-alis-connect-ext-sectioncode.csv), [Excel](StructureDefinition-ch-alis-connect-ext-sectioncode.xlsx), [Schematron](StructureDefinition-ch-alis-connect-ext-sectioncode.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-alis-connect-ext-sectioncode",
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sectioncode",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisExtensionSectionCode",
  "title" : "CH ALIS Extension SectionCode",
  "status" : "active",
  "date" : "2026-06-12T18:37:15+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "This extension describes the SectionCode.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "alis",
    "uri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Service",
    "name" : "ALIS Mapping",
    "comment" : "ALIS Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "ChargeItem"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "CH ALIS Extension SectionCode",
      "definition" : "This extension describes the SectionCode."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sectioncode"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Extension.value[x]:valueCoding",
      "path" : "Extension.value[x]",
      "sliceName" : "valueCoding",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Coding"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-alis-connect/ValueSet/SwissMedicalSpecialities"
      },
      "mapping" : [{
        "identity" : "alis",
        "map" : "SectionCode"
      }]
    }]
  }
}

```
