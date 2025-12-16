# Exposition Risk "Bat researcher or guard" (Condition) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Exposition Risk "Bat researcher or guard" (Condition)**

## Example Condition: Exposition Risk "Bat researcher or guard" (Condition)

Profile: [CH VACD Medical Problems](StructureDefinition-ch-vacd-medical-problems.md)

> **Entry Resource Cross References**
* entry: Identifier: `urn:oid:2.999.1.2.3.4`/dc168f1f-967c-4ff2-95ef-f8c468d67b45
* container: Identifier: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:9686dae0-448c-49f8-9c78-2db1aa95b921
* relationcode: replaces

**identifier**: `urn:oid:2.999.1.2.3.4`/dc168f1f-967c-4ff2-95ef-f8c468d67b45

**clinicalStatus**: Inactive

**verificationStatus**: Refuted

**category**: Problem List Item

**code**: Animal health occupation (occupation)

**subject**: [Lea Knecht Female, DoB: 1992-05-14 ( Medical record number)](Patient-TC-patient2.md)

**onset**: 2021-08-20

**abatement**: 2021-09-10

**recordedDate**: 2021-09-10

**recorder**: [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-author.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "TCC04-EXPRISK2",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
    ]
  },
  "extension" : [
    {
      "extension" : [
        {
          "url" : "entry",
          "valueReference" : {
            "type" : "Condition",
            "identifier" : {
              "system" : "urn:oid:2.999.1.2.3.4",
              "value" : "dc168f1f-967c-4ff2-95ef-f8c468d67b45"
            }
          }
        },
        {
          "url" : "container",
          "valueReference" : {
            "type" : "Composition",
            "identifier" : {
              "system" : "urn:ietf:rfc:3986",
              "value" : "urn:uuid:9686dae0-448c-49f8-9c78-2db1aa95b921"
            }
          }
        },
        {
          "url" : "relationcode",
          "valueCode" : "replaces"
        }
      ],
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ext-entry-resource-cross-references"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "dc168f1f-967c-4ff2-95ef-f8c468d67b45"
    }
  ],
  "clinicalStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
        "code" : "inactive",
        "display" : "Inactive"
      }
    ]
  },
  "verificationStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
        "code" : "refuted",
        "display" : "Refuted"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
          "code" : "problem-list-item",
          "display" : "Problem List Item"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "265940000",
        "display" : "Animal health occupation (occupation)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/TC-patient2"
  },
  "onsetDateTime" : "2021-08-20",
  "abatementDateTime" : "2021-09-10",
  "recordedDate" : "2021-09-10",
  "recorder" : {
    "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-author"
  }
}

```
