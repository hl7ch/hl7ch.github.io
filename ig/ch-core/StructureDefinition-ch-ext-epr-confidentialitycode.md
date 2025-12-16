# EPR Confidentiality Code - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EPR Confidentiality Code**

## Extension: EPR Confidentiality Code 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:EPRConfidentialityCode |
| **Copyright/Legal**: CC0-1.0 | |

Extension for the confidentiality code according to the Swiss EPR regulation

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Composition EPR](StructureDefinition-ch-core-composition-epr.md)
* Examples for this Extension: [Bundle/1-ZuweisungZurRadiologischenDiagnostik-FHIR](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md), [Bundle/2-ResourceCrossReferencesDokument](Bundle-2-ResourceCrossReferencesDokument.md), [Bundle/DocumentContainingOriginalRepresentationAsPdfA](Bundle-DocumentContainingOriginalRepresentationAsPdfA.md), [Composition/ResourceCrossReferencesDokumentComposition](Composition-ResourceCrossReferencesDokumentComposition.md) and [Composition/ZuweisungZurRadiologischenDiagnostik](Composition-ZuweisungZurRadiologischenDiagnostik.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-ext-epr-confidentialitycode)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-epr-confidentialitycode.csv), [Excel](StructureDefinition-ch-ext-epr-confidentialitycode.xlsx), [Schematron](StructureDefinition-ch-ext-epr-confidentialitycode.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-epr-confidentialitycode",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode",
  "version" : "6.0.0",
  "name" : "EPRConfidentialityCode",
  "title" : "EPR Confidentiality Code",
  "status" : "active",
  "date" : "2025-12-16T08:02:49+00:00",
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
  "description" : "Extension for the confidentiality code according to the Swiss EPR regulation",
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
      "expression" : "Composition.confidentiality"
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
        "definition" : "Extension to define the confidentiality code of the document"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode"
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
        "id" : "Extension.value[x]:valueCodeableConcept",
        "path" : "Extension.value[x]",
        "sliceName" : "valueCodeableConcept",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.confidentialityCode"
        }
      },
      {
        "id" : "Extension.value[x]:valueCodeableConcept.coding",
        "path" : "Extension.value[x].coding",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.value[x]:valueCodeableConcept.coding.system",
        "path" : "Extension.value[x].coding.system",
        "min" : 1
      },
      {
        "id" : "Extension.value[x]:valueCodeableConcept.coding.code",
        "path" : "Extension.value[x].coding.code",
        "min" : 1
      }
    ]
  }
}

```
