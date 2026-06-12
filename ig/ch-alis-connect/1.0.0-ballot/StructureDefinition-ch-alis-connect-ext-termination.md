# CH ALIS Extension Termination - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Extension Termination**

## Extension: CH ALIS Extension Termination 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-termination | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisExtensionTermination |
| **Copyright/Legal**: CC0-1.0 | |

This extension describes the TerminationVisit and TerminationReason.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH ALIS Encounter Profile](StructureDefinition-ch-alis-connect-encounter.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-ch-alis-connect-ext-termination.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-alis-connect-ext-termination.csv), [Excel](StructureDefinition-ch-alis-connect-ext-termination.xlsx), [Schematron](StructureDefinition-ch-alis-connect-ext-termination.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-alis-connect-ext-termination",
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-termination",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisExtensionTermination",
  "title" : "CH ALIS Extension Termination",
  "status" : "active",
  "date" : "2026-06-12T18:35:48+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "This extension describes the TerminationVisit and TerminationReason.",
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
    "uri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Visit",
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
    "expression" : "Encounter"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "CH ALIS Extension Termination",
      "definition" : "This extension describes the TerminationVisit and TerminationReason."
    },
    {
      "id" : "Extension.extension:TerminationVisit",
      "path" : "Extension.extension",
      "sliceName" : "TerminationVisit",
      "short" : "TerminationVisit",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:TerminationVisit.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:TerminationVisit.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "TerminationVisit"
    },
    {
      "id" : "Extension.extension:TerminationVisit.value[x]",
      "path" : "Extension.extension.value[x]",
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
      "id" : "Extension.extension:TerminationVisit.value[x]:valueDate",
      "path" : "Extension.extension.value[x]",
      "sliceName" : "valueDate",
      "short" : "TerminationVisit",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "date"
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "TerminationVisit"
      }]
    },
    {
      "id" : "Extension.extension:TerminationReason",
      "path" : "Extension.extension",
      "sliceName" : "TerminationReason",
      "short" : "TerminationReason",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:TerminationReason.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:TerminationReason.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "TerminationReason"
    },
    {
      "id" : "Extension.extension:TerminationReason.value[x]",
      "path" : "Extension.extension.value[x]",
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
      "id" : "Extension.extension:TerminationReason.value[x]:valueString",
      "path" : "Extension.extension.value[x]",
      "sliceName" : "valueString",
      "short" : "TerminationReason",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "TerminationReason"
      }]
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-termination"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
