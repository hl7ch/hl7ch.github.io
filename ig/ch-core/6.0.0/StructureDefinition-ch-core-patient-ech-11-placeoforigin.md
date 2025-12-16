# Place of Origin according to eCH-0011 - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Place of Origin according to eCH-0011**

## Extension: Place of Origin according to eCH-0011 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-ech-11-placeoforigin | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChCorePatientEch11PlaceOfOrigin |
| **Copyright/Legal**: CC0-1.0 | |

The place of origin of the patient.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Patient](StructureDefinition-ch-core-patient.md)
* Examples for this Extension: [Patient/FranzMuster](Patient-FranzMuster.md), [Patient/ManuelaMuster](Patient-ManuelaMuster.md) and [Patient/MarvinMuster](Patient-MarvinMuster.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-patient-ech-11-placeoforigin)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-patient-ech-11-placeoforigin.csv), [Excel](StructureDefinition-ch-core-patient-ech-11-placeoforigin.xlsx), [Schematron](StructureDefinition-ch-core-patient-ech-11-placeoforigin.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-patient-ech-11-placeoforigin",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-ech-11-placeoforigin",
  "version" : "6.0.0",
  "name" : "ChCorePatientEch11PlaceOfOrigin",
  "title" : "Place of Origin according to eCH-0011",
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
  "description" : "The place of origin of the patient.",
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
      "expression" : "Patient"
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
        "short" : "Place of origin for patient according to eCH-0011",
        "definition" : "The registered place of origin of the patient."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-ech-11-placeoforigin"
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
        "id" : "Extension.value[x]:valueAddress",
        "path" : "Extension.value[x]",
        "sliceName" : "valueAddress",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Address",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address-ech-11-placeoforigin"
            ]
          }
        ]
      }
    ]
  }
}

```
