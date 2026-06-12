# CH ALIS Extension ParameterV40 - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Extension ParameterV40**

## Extension: CH ALIS Extension ParameterV40 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-parameterv40 | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisExtensionParameterV40 |
| **Copyright/Legal**: CC0-1.0 | |

This extension describes the ParameterV40 with ParamTyp and ParamValue.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH ALIS ChargeItem Profile](StructureDefinition-ch-alis-connect-chargeitem.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-ch-alis-connect-ext-parameterv40.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-alis-connect-ext-parameterv40.csv), [Excel](StructureDefinition-ch-alis-connect-ext-parameterv40.xlsx), [Schematron](StructureDefinition-ch-alis-connect-ext-parameterv40.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-alis-connect-ext-parameterv40",
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-parameterv40",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisExtensionParameterV40",
  "title" : "CH ALIS Extension ParameterV40",
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
  "description" : "This extension describes the ParameterV40 with ParamTyp and ParamValue.",
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
    "uri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ParameterV40",
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
      "short" : "CH ALIS Extension ParamV40",
      "definition" : "This extension describes the ParameterV40 with ParamTyp and ParamValue.",
      "mapping" : [{
        "identity" : "alis",
        "map" : "ParameterV40"
      }]
    },
    {
      "id" : "Extension.extension:ParamTyp",
      "path" : "Extension.extension",
      "sliceName" : "ParamTyp",
      "short" : "ParamTyp",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:ParamTyp.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:ParamTyp.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "ParamTyp"
    },
    {
      "id" : "Extension.extension:ParamTyp.value[x]",
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
      "id" : "Extension.extension:ParamTyp.value[x]:valueCodeableConcept",
      "path" : "Extension.extension.value[x]",
      "sliceName" : "valueCodeableConcept",
      "short" : "ParamTyp",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "ParamTyp"
      }]
    },
    {
      "id" : "Extension.extension:ParamTyp.value[x]:valueCodeableConcept.coding",
      "path" : "Extension.extension.value[x].coding",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-alis-connect/ValueSet/ch-alis-connect-paramtyp"
      }
    },
    {
      "id" : "Extension.extension:ParamTyp.value[x]:valueCodeableConcept.coding.system",
      "path" : "Extension.extension.value[x].coding.system",
      "min" : 1
    },
    {
      "id" : "Extension.extension:ParamTyp.value[x]:valueCodeableConcept.coding.code",
      "path" : "Extension.extension.value[x].coding.code",
      "min" : 1
    },
    {
      "id" : "Extension.extension:ParamValue",
      "path" : "Extension.extension",
      "sliceName" : "ParamValue",
      "short" : "ParamValue",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:ParamValue.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:ParamValue.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "ParamValue"
    },
    {
      "id" : "Extension.extension:ParamValue.value[x]",
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
      "id" : "Extension.extension:ParamValue.value[x]:valueString",
      "path" : "Extension.extension.value[x]",
      "sliceName" : "valueString",
      "short" : "ParamValue",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "ParamValue"
      }]
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-parameterv40"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
