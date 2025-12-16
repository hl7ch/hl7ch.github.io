# CH AllergyIntolerance Composition - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH AllergyIntolerance Composition**

## Resource Profile: CH AllergyIntolerance Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-composition-epr | *Version*:3.0.1 |
| Active as of 2025-12-16 | *Computable Name*:CHAllergyIntoleranceCompositionEPR |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the composition for the allergy intolerance document 

**Usages:**

* Use this Profile: [CH AllergyIntolerance Document](StructureDefinition-ch-allergyintolerance-document-epr.md)
* Examples for this Profile: [Composition/ch-allergyintolerance-composition-example](Composition-ch-allergyintolerance-composition-example.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-allergyintolerance|current/StructureDefinition/ch-allergyintolerance-composition-epr)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-allergyintolerance-composition-epr.csv), [Excel](StructureDefinition-ch-allergyintolerance-composition-epr.xlsx), [Schematron](StructureDefinition-ch-allergyintolerance-composition-epr.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-allergyintolerance-composition-epr",
  "url" : "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-composition-epr",
  "version" : "3.0.1",
  "name" : "CHAllergyIntoleranceCompositionEPR",
  "title" : "CH AllergyIntolerance Composition",
  "status" : "active",
  "date" : "2025-12-16T16:31:02+00:00",
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
  "description" : "Definition of the composition for the allergy intolerance document",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "fhirdocumentreference",
      "uri" : "http://hl7.org/fhir/documentreference",
      "name" : "FHIR DocumentReference"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Composition",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition-epr",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition",
        "path" : "Composition",
        "short" : "CH AllergyIntolerance Composition"
      },
      {
        "id" : "Composition.language",
        "path" : "Composition.language",
        "short" : "Language of the document"
      },
      {
        "id" : "Composition.extension:dataEnterer",
        "path" : "Composition.extension",
        "sliceName" : "dataEnterer",
        "short" : "Person who entered information into this document if it is a person other than the author"
      },
      {
        "id" : "Composition.identifier",
        "path" : "Composition.identifier",
        "short" : "Identification number of the document"
      },
      {
        "id" : "Composition.status",
        "path" : "Composition.status",
        "fixedCode" : "final"
      },
      {
        "id" : "Composition.type",
        "path" : "Composition.type",
        "short" : "Document type",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "722446000"
            }
          ]
        }
      },
      {
        "id" : "Composition.subject",
        "path" : "Composition.subject",
        "short" : "A patient for whom this document instance was created"
      },
      {
        "id" : "Composition.date",
        "path" : "Composition.date",
        "short" : "The document's creation date and time"
      },
      {
        "id" : "Composition.author",
        "path" : "Composition.author",
        "short" : "The author of the document (person or device)"
      },
      {
        "id" : "Composition.author.extension",
        "path" : "Composition.author.extension",
        "short" : "Timestamp of the authorship/data input",
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
        "id" : "Composition.title",
        "path" : "Composition.title",
        "short" : "'Allergie Intoleranzen' in german or 'allergie intolérance' in french or 'allergie intolleranze' in italian or 'Allergy Intolerance' in english or titles in other languages are also allowed"
      },
      {
        "id" : "Composition.confidentiality.extension:confidentialityCode",
        "path" : "Composition.confidentiality.extension",
        "sliceName" : "confidentialityCode",
        "short" : "Swiss realm of confidentiality code according to the Swiss EPR regulation"
      },
      {
        "id" : "Composition.custodian",
        "path" : "Composition.custodian",
        "short" : "The organization in whose name the document has been created"
      },
      {
        "id" : "Composition.section",
        "path" : "Composition.section",
        "min" : 1
      },
      {
        "id" : "Composition.section:allergyIntolerance",
        "path" : "Composition.section",
        "sliceName" : "allergyIntolerance",
        "short" : "Allergy Intolerance",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Composition.section:allergyIntolerance.extension",
        "path" : "Composition.section.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:allergyIntolerance.title",
        "path" : "Composition.section.title",
        "short" : "'Allergie und Intoleranzen' in german or 'alergie et intolérance' in french or 'allergia e intolleranze' in talian or 'Allergy Intolerance' in english                         or titles in other languages are also allowed",
        "min" : 1
      },
      {
        "id" : "Composition.section:allergyIntolerance.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "48765-2"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:allergyIntolerance.author",
        "path" : "Composition.section.author",
        "short" : "The author of the section (person or device) if different from the author/timestamp of the document"
      },
      {
        "id" : "Composition.section:allergyIntolerance.author.extension",
        "path" : "Composition.section.author.extension",
        "short" : "Timestamp of the authorship/data input",
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
        "id" : "Composition.section:allergyIntolerance.author.reference",
        "path" : "Composition.section.author.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:allergyIntolerance.text",
        "path" : "Composition.section.text",
        "short" : "Human readable text of this section"
      },
      {
        "id" : "Composition.section:allergyIntolerance.entry",
        "path" : "Composition.section.entry",
        "short" : "Allergy Intolerance",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:allergyIntolerance.entry.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:allergyIntolerance.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:annotation",
        "path" : "Composition.section",
        "sliceName" : "annotation",
        "short" : "Annotation",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:annotation.title",
        "path" : "Composition.section.title",
        "short" : "'Kommentar' in german or 'Commentaire' in french or 'Osservazione' in italian or 'Comment' in english                         or titles in other languages are also allowed",
        "min" : 1
      },
      {
        "id" : "Composition.section:annotation.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "48767-8"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:annotation.text",
        "path" : "Composition.section.text",
        "short" : "Human readable text of this section",
        "min" : 1
      }
    ]
  }
}

```
