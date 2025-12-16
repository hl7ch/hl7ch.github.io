# Marital Data - Separation Type - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Marital Data - Separation Type**

## Extension: Marital Data - Separation Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-maritaldata-separation | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ECH011MaritalDataSeparation |
| **Copyright/Legal**: CC0-1.0 | |

eCH-0011: Extension to define the separation type. For married but separated persons and for persons in a registered partnership but living separately.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Patient](StructureDefinition-ch-core-patient.md)
* Examples for this Extension: [Patient/PersonEch011](Patient-PersonEch011.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-ext-ech-11-maritaldata-separation)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-ech-11-maritaldata-separation.csv), [Excel](StructureDefinition-ch-ext-ech-11-maritaldata-separation.xlsx), [Schematron](StructureDefinition-ch-ext-ech-11-maritaldata-separation.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-ech-11-maritaldata-separation",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-maritaldata-separation",
  "version" : "6.0.0",
  "name" : "ECH011MaritalDataSeparation",
  "title" : "Marital Data - Separation Type",
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
  "description" : "eCH-0011: Extension to define the separation type. For married but separated persons and for persons in a registered partnership but living separately.",
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
      "expression" : "Patient.maritalStatus"
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
        "definition" : "Extension for eCH-0011 - MaritalData - separation"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-maritaldata-separation"
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
        "definition" : "CodeableConcept for separation type",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "extensible",
          "description" : "ValueSet separation type",
          "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-maritaldata-separation"
        }
      }
    ]
  }
}

```
