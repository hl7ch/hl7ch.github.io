# Author of the content - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Author of the content**

## Extension: Author of the content 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:Author |
| **Copyright/Legal**: CC0-1.0 | |

Extension to reference the person (and her/his organization) who is responsible for the content (e.g. an author of an eMedication document or a recorder of an immunization). This extension is used to differentiate on entry level between the author of the content (represented with this extension) and the author of the medical decision or the performer of an event (represented e.g. with Resource.performer/informationSource).

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Immunization](StructureDefinition-ch-core-immunization.md)
* Examples for this Extension: [Immunization/CHCoreImmunizationExample](Immunization-CHCoreImmunizationExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-ext-author)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-author.csv), [Excel](StructureDefinition-ch-ext-author.xlsx), [Schematron](StructureDefinition-ch-ext-author.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-author",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author",
  "version" : "6.0.0",
  "name" : "Author",
  "title" : "Author of the content",
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
  "description" : "Extension to reference the person (and her/his organization) who is responsible for the content \n    (e.g. an author of an eMedication document or a recorder of an immunization). \n    This extension is used to differentiate on entry level between the author of the content (represented with this extension) and \n    the author of the medical decision or the performer of an event (represented e.g. with Resource.performer/informationSource).",
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
      "expression" : "MedicationStatement"
    },
    {
      "type" : "element",
      "expression" : "MedicationDispense"
    },
    {
      "type" : "element",
      "expression" : "MedicationAdministration"
    },
    {
      "type" : "element",
      "expression" : "MedicationRequest"
    },
    {
      "type" : "element",
      "expression" : "Observation"
    },
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
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "short" : "Author of the content",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Extension.value[x].extension:time",
        "path" : "Extension.value[x].extension",
        "sliceName" : "time",
        "short" : "Timestamp of the authorship/data input",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-time"
            ]
          }
        ]
      },
      {
        "id" : "Extension.value[x].reference",
        "path" : "Extension.value[x].reference",
        "min" : 1
      }
    ]
  }
}

```
