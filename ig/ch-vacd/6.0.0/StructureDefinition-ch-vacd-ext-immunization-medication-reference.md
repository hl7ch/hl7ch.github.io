# CH VACD Extension Immunization Medication Reference - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Extension Immunization Medication Reference**

## Extension: CH VACD Extension Immunization Medication Reference 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-immunization-medication-reference | *Version*:6.0.0 |
| Draft as of 2021-05-10 | *Computable Name*:CHVACDExtensionImmunizationMedicationReference |
| **Copyright/Legal**: CC0-1.0 | |

Extension to make a reference to the medication for the immunization.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md)
* Examples for this Extension: [Bundle/A-D1-P-C1](Bundle-A-D1-P-C1.md), [Bundle/A-D3-HCP2-C2](Bundle-A-D3-HCP2-C2.md), [Bundle/A-D4-HCP2-C2](Bundle-A-D4-HCP2-C2.md), [Bundle/A-D5-P-C1](Bundle-A-D5-P-C1.md)...Show 46 more,[Bundle/A-D6-HCP1-C1](Bundle-A-D6-HCP1-C1.md),[Bundle/B-D1-HCP1-C1](Bundle-B-D1-HCP1-C1.md),[Bundle/C-D1-P-C1](Bundle-C-D1-P-C1.md),[Bundle/C-D2-HCP1-C1](Bundle-C-D2-HCP1-C1.md),[Bundle/D-D1-HCP1-C1](Bundle-D-D1-HCP1-C1.md),[Bundle/D-D2-HCP2-C2](Bundle-D-D2-HCP2-C2.md),[Bundle/D-D3-HCP1-C1](Bundle-D-D3-HCP1-C1.md),[Bundle/D-D4-HCP2-C2](Bundle-D-D4-HCP2-C2.md),[Bundle/E-D1-HCP1-C1](Bundle-E-D1-HCP1-C1.md),[Bundle/F-D1-HCP1-C1](Bundle-F-D1-HCP1-C1.md),[Bundle/F-D2-HCP1-C1](Bundle-F-D2-HCP1-C1.md),[Bundle/RDA01](Bundle-RDA01.md),[Bundle/RDA01b](Bundle-RDA01b.md),[Bundle/RDA02](Bundle-RDA02.md),[Bundle/RDA02b](Bundle-RDA02b.md),[Bundle/RDA03](Bundle-RDA03.md),[Bundle/RDA03b](Bundle-RDA03b.md),[Bundle/RDA04](Bundle-RDA04.md),[Bundle/RDA04b](Bundle-RDA04b.md),[Bundle/RDB01](Bundle-RDB01.md),[Bundle/RDB01b](Bundle-RDB01b.md),[Bundle/RDB02](Bundle-RDB02.md),[Bundle/RDB02b](Bundle-RDB02b.md),[Bundle/RDB03](Bundle-RDB03.md),[Bundle/RDB03b](Bundle-RDB03b.md),[Bundle/RDB04](Bundle-RDB04.md),[Bundle/RDB04b](Bundle-RDB04b.md),[Bundle/RDB05](Bundle-RDB05.md),[Bundle/RDB05b](Bundle-RDB05b.md),[Bundle/RDC01](Bundle-RDC01.md),[Bundle/RDC01b](Bundle-RDC01b.md),[Bundle/RDC02](Bundle-RDC02.md),[Bundle/RDC02b](Bundle-RDC02b.md),[Bundle/RDC03](Bundle-RDC03.md),[Bundle/RDC03b](Bundle-RDC03b.md),[Bundle/RDD01](Bundle-RDD01.md),[Bundle/RDD01b](Bundle-RDD01b.md),[Bundle/RDD02](Bundle-RDD02.md),[Bundle/RDD02b](Bundle-RDD02b.md),[Bundle/RDE01](Bundle-RDE01.md),[Bundle/RDE01b](Bundle-RDE01b.md),[Bundle/RDF01](Bundle-RDF01.md),[Bundle/RDF01b](Bundle-RDF01b.md),[Immunization/TCA01-IMMUN1-patient](Immunization-TCA01-IMMUN1-patient.md),[Immunization/TCA01-IMMUN3-HCP2-ORG2-ROLE](Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.md)and[Immunization/TCA02-IMMUN4-HCP2-ORG2-ROLE](Immunization-TCA02-IMMUN4-HCP2-ORG2-ROLE.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-ext-immunization-medication-reference)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-ext-immunization-medication-reference.csv), [Excel](StructureDefinition-ch-vacd-ext-immunization-medication-reference.xlsx), [Schematron](StructureDefinition-ch-vacd-ext-immunization-medication-reference.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-ext-immunization-medication-reference",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-immunization-medication-reference",
  "version" : "6.0.0",
  "name" : "CHVACDExtensionImmunizationMedicationReference",
  "title" : "CH VACD Extension Immunization Medication Reference",
  "status" : "draft",
  "date" : "2021-05-10T00:00:00+00:00",
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
  "description" : "Extension to make a reference to the medication for the immunization.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
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
      "expression" : "Immunization"
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
        "short" : "Extension to reference immunization medication resource",
        "definition" : "Extension",
        "mustSupport" : true
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-immunization-medication-reference"
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
        "id" : "Extension.value[x]:valueReference",
        "path" : "Extension.value[x]",
        "sliceName" : "valueReference",
        "short" : "The Reference to the medication belonging to the immunization.",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medication-for-immunization"
            ]
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
