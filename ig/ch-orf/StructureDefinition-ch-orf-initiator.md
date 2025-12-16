# CH ORF Initiator - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Initiator**

## Extension: CH ORF Initiator 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-initiator | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfInitiator |
| **Copyright/Legal**: CC0-1.0 | |

Initiator and his realtion to the patient

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH ORF Composition](StructureDefinition-ch-orf-composition.md)
* Examples for this Extension: [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md) and [Composition/spitex-order](Composition-spitex-order.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-initiator)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-initiator.csv), [Excel](StructureDefinition-ch-orf-initiator.xlsx), [Schematron](StructureDefinition-ch-orf-initiator.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-initiator",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-initiator",
  "version" : "3.0.2",
  "name" : "ChOrfInitiator",
  "title" : "CH ORF Initiator",
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
  "description" : "Initiator and his realtion to the patient",
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
        "short" : "Extension",
        "definition" : "Extension to define person/organization who initated this order (may or may not receive a copy)"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 3
      },
      {
        "id" : "Extension.extension:ch-orf-personalrelation",
        "path" : "Extension.extension",
        "sliceName" : "ch-orf-personalrelation",
        "short" : "Personal relation between initiator and patient",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Extension.extension:ch-orf-personalrelation.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:ch-orf-personalrelation.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "ch-orf-personalrelation"
      },
      {
        "id" : "Extension.extension:ch-orf-personalrelation.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-orf/ValueSet/ch-orf-vs-personalrelation"
        }
      },
      {
        "id" : "Extension.extension:ch-orf-legalrelation",
        "path" : "Extension.extension",
        "sliceName" : "ch-orf-legalrelation",
        "short" : "Legal relation between initator and patient",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Extension.extension:ch-orf-legalrelation.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:ch-orf-legalrelation.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "ch-orf-legalrelation"
      },
      {
        "id" : "Extension.extension:ch-orf-legalrelation.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-orf/ValueSet/ch-orf-vs-legalrelation"
        }
      },
      {
        "id" : "Extension.extension:ch-orf-personorganization",
        "path" : "Extension.extension",
        "sliceName" : "ch-orf-personorganization",
        "short" : "Initiator person or organization",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Extension.extension:ch-orf-personorganization.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:ch-orf-personorganization.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "ch-orf-personorganization"
      },
      {
        "id" : "Extension.extension:ch-orf-personorganization.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-initiator"
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
