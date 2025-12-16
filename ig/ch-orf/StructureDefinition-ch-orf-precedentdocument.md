# CH ORF Precedent Document - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Precedent Document**

## Extension: CH ORF Precedent Document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-precedentdocument | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfPrecedentDocument |
| **Copyright/Legal**: CC0-1.0 | |

Identifier of the document which precedes this document in a thread.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH ORF Composition](StructureDefinition-ch-orf-composition.md)
* Examples for this Extension: [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md) and [Composition/spitex-order](Composition-spitex-order.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-precedentdocument)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-precedentdocument.csv), [Excel](StructureDefinition-ch-orf-precedentdocument.xlsx), [Schematron](StructureDefinition-ch-orf-precedentdocument.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-precedentdocument",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-precedentdocument",
  "version" : "3.0.2",
  "name" : "ChOrfPrecedentDocument",
  "title" : "CH ORF Precedent Document",
  "status" : "active",
  "date" : "2025-12-16T09:36:47+00:00",
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
    }
  ],
  "description" : "Identifier of the document which precedes this document in a thread.",
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
        "short" : "CH ORF Precedent Document",
        "definition" : "Identifier of the document which precedes this document in a thread."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-precedentdocument"
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
        "id" : "Extension.value[x]:valueIdentifier",
        "path" : "Extension.value[x]",
        "sliceName" : "valueIdentifier",
        "short" : "valueIdentifier",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ]
      }
    ]
  }
}

```
