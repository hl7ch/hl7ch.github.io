# CH ORF Desired Accommodation - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Desired Accommodation**

## Extension: CH ORF Desired Accommodation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-desiredaccommodation | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfDesiredAccommodation |
| **Copyright/Legal**: CC0-1.0 | |

Desired Accommodation during the Requested Encounter.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH ORF Requested Encounter](StructureDefinition-ch-orf-encounter.md)
* Examples for this Extension: [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md) and [Encounter/EncounterMusterfrau](Encounter-EncounterMusterfrau.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-desiredaccommodation)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-desiredaccommodation.csv), [Excel](StructureDefinition-ch-orf-desiredaccommodation.xlsx), [Schematron](StructureDefinition-ch-orf-desiredaccommodation.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-desiredaccommodation",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-desiredaccommodation",
  "version" : "3.0.2",
  "name" : "ChOrfDesiredAccommodation",
  "title" : "CH ORF Desired Accommodation",
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
  "description" : "Desired Accommodation during the Requested Encounter.",
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
      "expression" : "Encounter"
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
        "short" : "CH ORF Desired Accommodation",
        "definition" : "Desired Accommodation during the Requested Encounter."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-desiredaccommodation"
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
        "id" : "Extension.value[x]:valueCoding",
        "path" : "Extension.value[x]",
        "sliceName" : "valueCoding",
        "short" : "Desired Accommodation during the Requested Encounter",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-orf/ValueSet/ch-orf-vs-desiredaccommodation"
        }
      }
    ]
  }
}

```
