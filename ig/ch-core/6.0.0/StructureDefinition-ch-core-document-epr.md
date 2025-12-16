# CH Core Document EPR - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Document EPR**

## Resource Profile: CH Core Document EPR 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document-epr | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreDocumentEPR |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the Bundle resource for use in the context of the electronic patient record (EPR). 

**Usages:**

* Examples for this Profile: [Bundle/1-ZuweisungZurRadiologischenDiagnostik-FHIR](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md) and [Bundle/DocumentContainingOriginalRepresentationAsPdfA](Bundle-DocumentContainingOriginalRepresentationAsPdfA.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-document-epr)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-document-epr.csv), [Excel](StructureDefinition-ch-core-document-epr.xlsx), [Schematron](StructureDefinition-ch-core-document-epr.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-document-epr",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document-epr",
  "version" : "6.0.0",
  "name" : "CHCoreDocumentEPR",
  "title" : "CH Core Document EPR",
  "status" : "active",
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
  "description" : "Definition of the Bundle resource for use in the context of the electronic patient record (EPR).",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "short" : "CH Core Document EPR"
      },
      {
        "id" : "Bundle.identifier.system",
        "path" : "Bundle.identifier.system",
        "fixedUri" : "urn:ietf:rfc:3986"
      },
      {
        "id" : "Bundle.identifier.value",
        "path" : "Bundle.identifier.value",
        "example" : [
          {
            "label" : "CH Core",
            "valueString" : "urn:uuid:daa8cd41-34a1-4a9c-9a6d-cd3f850142e9"
          }
        ],
        "constraint" : [
          {
            "key" : "ch-core-doc-2",
            "severity" : "error",
            "human" : "The identifier must be an UUID",
            "expression" : "startsWith('urn:uuid:')",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document-epr"
          }
        ]
      },
      {
        "id" : "Bundle.entry:Composition",
        "path" : "Bundle.entry",
        "sliceName" : "Composition"
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Composition",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition-epr"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Binary",
        "path" : "Bundle.entry",
        "sliceName" : "Binary",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Binary.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/Binary"]
          }
        ]
      }
    ]
  }
}

```
