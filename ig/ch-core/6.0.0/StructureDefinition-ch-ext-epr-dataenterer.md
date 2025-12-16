# EPR Data Enterer - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EPR Data Enterer**

## Extension: EPR Data Enterer 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-dataenterer | *Version*:6.0.0 |
| Retired as of 2025-12-16 | *Computable Name*:EPRDataEnterer |
| **Copyright/Legal**: CC0-1.0 | |

Extension to define the information about the person and organization that entered data and the time of the data input. **Note:** This extension has its origin from CDA and is deprecated. It will be removed in a future version.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Composition EPR](StructureDefinition-ch-core-composition-epr.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-ext-epr-dataenterer)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-epr-dataenterer.csv), [Excel](StructureDefinition-ch-ext-epr-dataenterer.xlsx), [Schematron](StructureDefinition-ch-ext-epr-dataenterer.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-epr-dataenterer",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-dataenterer",
  "version" : "6.0.0",
  "name" : "EPRDataEnterer",
  "title" : "EPR Data Enterer",
  "status" : "retired",
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
  "description" : "Extension to define the information about the person and organization that entered data and the time of the data input. **Note:** This extension has its origin from CDA and is deprecated. It will be removed in a future version.",
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
      "expression" : "Composition"
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
        "definition" : "Extension to define the information about the person and organization that entered data and the time of the data input. This extension has its origin from CDA and is deprecated."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 1
      },
      {
        "id" : "Extension.extension:enterer",
        "path" : "Extension.extension",
        "sliceName" : "enterer",
        "short" : "Information about the person and organization that entered data",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:enterer.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:enterer.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "enterer"
      },
      {
        "id" : "Extension.extension:enterer.value[x]",
        "path" : "Extension.extension.value[x]",
        "short" : "Person other than the author",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
            ]
          }
        ]
      },
      {
        "id" : "Extension.extension:timestamp",
        "path" : "Extension.extension",
        "sliceName" : "timestamp",
        "short" : "Timestamp of the authorship/data input",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-time"
            ]
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-dataenterer"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "max" : "0"
      }
    ]
  }
}

```
