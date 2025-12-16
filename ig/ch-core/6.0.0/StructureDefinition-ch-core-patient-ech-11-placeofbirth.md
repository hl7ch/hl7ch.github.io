# Place of Birth according to eCH-0011 - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Place of Birth according to eCH-0011**

## Extension: Place of Birth according to eCH-0011 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-ech-11-placeofbirth | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChCorePatientEch11PlaceOfBirth |
| **Copyright/Legal**: CC0-1.0 | |

The registered place of birth of the patient.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Patient](StructureDefinition-ch-core-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-patient-ech-11-placeofbirth)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-patient-ech-11-placeofbirth.csv), [Excel](StructureDefinition-ch-core-patient-ech-11-placeofbirth.xlsx), [Schematron](StructureDefinition-ch-core-patient-ech-11-placeofbirth.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-patient-ech-11-placeofbirth",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
      "valueCode" : "can-bind"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-ech-11-placeofbirth",
  "version" : "6.0.0",
  "name" : "ChCorePatientEch11PlaceOfBirth",
  "title" : "Place of Birth according to eCH-0011",
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
  "description" : "The registered place of birth of the patient.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/patient-birthPlace|5.3.0-ballot-tc1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "Place of birth for patient according to eCH-0011",
        "definition" : "The registered place of birth of the patient."
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "type" : [
          {
            "code" : "Address",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address-ech-11-placeofbirth"
            ]
          }
        ]
      }
    ]
  }
}

```
