# CH ORF Patient Consent - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Patient Consent**

## Extension: CH ORF Patient Consent 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-patientconsent | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfPatientConsent |
| **Copyright/Legal**: CC0-1.0 | |

Patient Consent to this Order

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH ORF Composition](StructureDefinition-ch-orf-composition.md)
* Examples for this Extension: [Composition/spitex-order](Composition-spitex-order.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-patientconsent)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-patientconsent.csv), [Excel](StructureDefinition-ch-orf-patientconsent.xlsx), [Schematron](StructureDefinition-ch-orf-patientconsent.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-patientconsent",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-patientconsent",
  "version" : "3.0.2",
  "name" : "ChOrfPatientConsent",
  "title" : "CH ORF Patient Consent",
  "status" : "active",
  "date" : "2025-12-16T09:33:08+00:00",
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
  "description" : "Patient Consent to this Order",
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
        "short" : "CH ORF Patient Consent",
        "definition" : "Patient Consent to this Order"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-patientconsent"
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
        "short" : "valueReference",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-consent"
            ]
          }
        ]
      }
    ]
  }
}

```
