# CH ALIS Extension ServiceAssignment - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Extension ServiceAssignment**

## Extension: CH ALIS Extension ServiceAssignment 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-serviceassignment | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisExtensionServiceAssignment |
| **Copyright/Legal**: CC0-1.0 | |

This extension describes ServiceAssignment

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH ALIS ChargeItem Profile](StructureDefinition-ch-alis-connect-chargeitem.md)
* Examples for this Extension: [ChargeItem/ChargeItemLabServiceAssignment](ChargeItem-ChargeItemLabServiceAssignment.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-ch-alis-connect-ext-serviceassignment.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-alis-connect-ext-serviceassignment.csv), [Excel](StructureDefinition-ch-alis-connect-ext-serviceassignment.xlsx), [Schematron](StructureDefinition-ch-alis-connect-ext-serviceassignment.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-alis-connect-ext-serviceassignment",
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-serviceassignment",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisExtensionServiceAssignment",
  "title" : "CH ALIS Extension ServiceAssignment",
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
  "description" : "This extension describes ServiceAssignment",
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
    "uri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ServiceAssignment",
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
      "short" : "CH ALIS Extension ServiceAssignment",
      "definition" : "This extension describes ServiceAssignment"
    },
    {
      "id" : "Extension.extension:OrderingProviderID",
      "path" : "Extension.extension",
      "sliceName" : "OrderingProviderID",
      "short" : "OrderingProviderID",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:OrderingProviderID.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:OrderingProviderID.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "OrderingProviderID"
    },
    {
      "id" : "Extension.extension:OrderingProviderID.value[x]",
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
      "id" : "Extension.extension:OrderingProviderID.value[x]:valueString",
      "path" : "Extension.extension.value[x]",
      "sliceName" : "valueString",
      "short" : "OrderingProviderID",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "OrderingProviderID"
      }]
    },
    {
      "id" : "Extension.extension:OrderSectionCode",
      "path" : "Extension.extension",
      "sliceName" : "OrderSectionCode",
      "short" : "OrderSectionCode",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:OrderSectionCode.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:OrderSectionCode.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "OrderSectionCode"
    },
    {
      "id" : "Extension.extension:OrderSectionCode.value[x]",
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
      "id" : "Extension.extension:OrderSectionCode.value[x]:valueCoding",
      "path" : "Extension.extension.value[x]",
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
        "map" : "OrderSectionCode"
      }]
    },
    {
      "id" : "Extension.extension:OrderDate",
      "path" : "Extension.extension",
      "sliceName" : "OrderDate",
      "short" : "OrderDate",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:OrderDate.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:OrderDate.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "OrderDate"
    },
    {
      "id" : "Extension.extension:OrderDate.value[x]",
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
      "id" : "Extension.extension:OrderDate.value[x]:valueDateTime",
      "path" : "Extension.extension.value[x]",
      "sliceName" : "valueDateTime",
      "short" : "OrderDate",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "OrderDate"
      }]
    },
    {
      "id" : "Extension.extension:FollowUpOrder",
      "path" : "Extension.extension",
      "sliceName" : "FollowUpOrder",
      "short" : "FollowUpOrder",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:FollowUpOrder.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:FollowUpOrder.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "FollowUpOrder"
    },
    {
      "id" : "Extension.extension:FollowUpOrder.value[x]",
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
      "id" : "Extension.extension:FollowUpOrder.value[x]:valueBoolean",
      "path" : "Extension.extension.value[x]",
      "sliceName" : "valueBoolean",
      "short" : "FollowUpOrder",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "FollowUpOrder"
      }]
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-serviceassignment"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
