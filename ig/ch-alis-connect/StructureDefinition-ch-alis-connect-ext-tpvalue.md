# CH ALIS Extension TPValue - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Extension TPValue**

## Extension: CH ALIS Extension TPValue 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-tpvalue | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisExtensionTPValue |
| **Copyright/Legal**: CC0-1.0 | |

This extension describes the TPValue.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH ALIS ChargeItem Profile](StructureDefinition-ch-alis-connect-chargeitem.md)
* Examples for this Extension: [ChargeItem/ChargeItemPauschaleKomplett](ChargeItem-ChargeItemPauschaleKomplett.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-ch-alis-connect-ext-tpvalue.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-alis-connect-ext-tpvalue.csv), [Excel](StructureDefinition-ch-alis-connect-ext-tpvalue.xlsx), [Schematron](StructureDefinition-ch-alis-connect-ext-tpvalue.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-alis-connect-ext-tpvalue",
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-tpvalue",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisExtensionTPValue",
  "title" : "CH ALIS Extension TPValue",
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
  "description" : "This extension describes the TPValue.",
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
    "expression" : "ChargeItem"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "CH ALIS Extension TPValue",
      "definition" : "This extension describes the TPValue."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-tpvalue"
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
      "id" : "Extension.value[x]:valueDecimal",
      "path" : "Extension.value[x]",
      "sliceName" : "valueDecimal",
      "short" : "TPValue",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "decimal"
      }]
    }]
  }
}

```
