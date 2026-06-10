# EPR Time - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EPR Time**

## Extension: EPR Time 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-time | *Version*:7.0.0-ballot |
| Retired as of 2026-06-10 | *Computable Name*:EPRTime |
| **Copyright/Legal**: CC0-1.0 | |

Additional timestamp for the author or other elements. **Note:** This extension has its origin from CDA and is deprecated. It will be removed in a future version.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Composition EPR](StructureDefinition-ch-core-composition-epr.md), [Author of the content](StructureDefinition-ch-ext-author.md) and [EPR Data Enterer](StructureDefinition-ch-ext-epr-dataenterer.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-core|current/StructureDefinition/StructureDefinition-ch-ext-epr-time.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-epr-time.csv), [Excel](StructureDefinition-ch-ext-epr-time.xlsx), [Schematron](StructureDefinition-ch-ext-epr-time.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-epr-time",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-time",
  "version" : "7.0.0-ballot",
  "name" : "EPRTime",
  "title" : "EPR Time",
  "status" : "retired",
  "date" : "2026-06-10T14:59:48+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "Additional timestamp for the author or other elements. **Note:** This extension has its origin from CDA and is deprecated. It will be removed in a future version.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "Composition.author"
  },
  {
    "type" : "element",
    "expression" : "Composition.section.author"
  },
  {
    "type" : "extension",
    "expression" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author"
  },
  {
    "type" : "extension",
    "expression" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-dataenterer"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "definition" : "Extension to define the timestamp of the authorship/data input. This extension has its origin from CDA and is deprecated."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-time"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "dateTime"
      }]
    }]
  }
}

```
