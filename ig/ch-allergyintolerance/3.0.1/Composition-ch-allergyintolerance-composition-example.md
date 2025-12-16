# CH-AllergyIntolerance-Composition-Example - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-AllergyIntolerance-Composition-Example**

## Example Composition: CH-AllergyIntolerance-Composition-Example

Language: de-CH

Profile: [CH AllergyIntolerance Composition](StructureDefinition-ch-allergyintolerance-composition-epr.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.2.0/NamingSystem-uri.html)/urn:uuid:4356b15f-4061-49d9-80bf-b84d23113a6a

**status**: Final

**type**: Allergy record (record artifact)

**date**: 2022-01-12 17:00:00+0100

**author**: [PractitionerRole](PractitionerRole-FamilienHausarztAtHausarzt.md)

**title**: Allergies and adverse reactions Document

**confidentiality**: normal

**custodian**: [Organization Hausarzt](Organization-Custodian.md)



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "ch-allergyintolerance-composition-example",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-composition-epr"
    ]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:4356b15f-4061-49d9-80bf-b84d23113a6a"
  },
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "722446000",
        "display" : "Allergy record (record artifact)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/ElisabethBroennimannByBFH"
  },
  "date" : "2022-01-12T17:00:00+01:00",
  "author" : [
    {
      "extension" : [
        {
          "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-time",
          "valueDateTime" : "2012-02-04T14:00:00+01:00"
        }
      ],
      "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
    }
  ],
  "title" : "Allergies and adverse reactions Document",
  "confidentiality" : "N",
  "_confidentiality" : {
    "extension" : [
      {
        "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode",
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "17621005",
              "display" : "Normal"
            }
          ]
        }
      }
    ]
  },
  "custodian" : {
    "reference" : "Organization/Custodian"
  },
  "section" : [
    {
      "title" : "Allergy Intolerance",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "48765-2",
            "display" : "Allergies and adverse reactions Document"
          }
        ]
      },
      "entry" : [
        {
          "reference" : "AllergyIntolerance/CH-AllergyIntolerance-IPAG-Recommendation-Table-1"
        }
      ]
    }
  ]
}

```
