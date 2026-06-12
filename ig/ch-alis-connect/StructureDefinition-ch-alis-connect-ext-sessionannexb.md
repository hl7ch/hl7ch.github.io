# CH ALIS Extension SessionAnnexB - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Extension SessionAnnexB**

## Extension: CH ALIS Extension SessionAnnexB 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sessionannexb | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisExtensionSessionAnnexB |
| **Copyright/Legal**: CC0-1.0 | |

This extension describes SessionAnnexB

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH ALIS ChargeItem Profile](StructureDefinition-ch-alis-connect-chargeitem.md)
* Examples for this Extension: [ChargeItem/ChargeItemLKAATIcdSessionB-45679](ChargeItem-ChargeItemLKAATIcdSessionB-45679.md), [ChargeItem/ChargeItemLKAATIcdSessionB-45680](ChargeItem-ChargeItemLKAATIcdSessionB-45680.md) and [ChargeItem/ChargeItemLKAATIcdSessionB](ChargeItem-ChargeItemLKAATIcdSessionB.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-ch-alis-connect-ext-sessionannexb.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-alis-connect-ext-sessionannexb.csv), [Excel](StructureDefinition-ch-alis-connect-ext-sessionannexb.xlsx), [Schematron](StructureDefinition-ch-alis-connect-ext-sessionannexb.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-alis-connect-ext-sessionannexb",
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sessionannexb",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisExtensionSessionAnnexB",
  "title" : "CH ALIS Extension SessionAnnexB",
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
  "description" : "This extension describes SessionAnnexB",
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
    "uri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/SessionSectionB",
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
      "definition" : "This extension describes SessionAnnexB"
    },
    {
      "id" : "Extension.extension:SessionIDSectionB",
      "path" : "Extension.extension",
      "sliceName" : "SessionIDSectionB",
      "short" : "SessionIDSectionB",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:SessionIDSectionB.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:SessionIDSectionB.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "SessionIDSectionB"
    },
    {
      "id" : "Extension.extension:SessionIDSectionB.value[x]",
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
      "id" : "Extension.extension:SessionIDSectionB.value[x]:valueUuid",
      "path" : "Extension.extension.value[x]",
      "sliceName" : "valueUuid",
      "short" : "SessionIDSectionB",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "uuid"
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "SessionIDSectionB"
      }]
    },
    {
      "id" : "Extension.extension:AssignedSessionSectionB",
      "path" : "Extension.extension",
      "sliceName" : "AssignedSessionSectionB",
      "short" : "AssignedSessionSectionB",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:AssignedSessionSectionB.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:AssignedSessionSectionB.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "AssignedSessionSectionB"
    },
    {
      "id" : "Extension.extension:AssignedSessionSectionB.value[x]",
      "path" : "Extension.extension.value[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Extension.extension:AssignedSessionSectionB.value[x]:valueUuid",
      "path" : "Extension.extension.value[x]",
      "sliceName" : "valueUuid",
      "short" : "AssignedSessionSectionB",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "uuid"
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "AssignedSessionSectionB"
      }]
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sessionannexb"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
