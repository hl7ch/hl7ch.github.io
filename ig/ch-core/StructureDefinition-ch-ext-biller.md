# Biller - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Biller**

## Extension: Biller 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-biller | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:Biller |
| **Copyright/Legal**: CC0-1.0 | |

Extension to reference the biller in the case of a professional service or poduct provided.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Claim](StructureDefinition-ch-core-claim.md)
* Examples for this Extension: [Claim/ClaimInpatientTreatmentPsychiatry](Claim-ClaimInpatientTreatmentPsychiatry.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-ext-biller)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-biller.csv), [Excel](StructureDefinition-ch-ext-biller.xlsx), [Schematron](StructureDefinition-ch-ext-biller.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-biller",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-biller",
  "version" : "6.0.0",
  "name" : "Biller",
  "title" : "Biller",
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
  "description" : "Extension to reference the biller in the case of a professional service or poduct provided.",
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
      "expression" : "Claim"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-biller"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      }
    ]
  }
}

```
