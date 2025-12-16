# 7.1 Immunization - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **7.1 Immunization**

## Example Immunization: 7.1 Immunization

Profile: [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md)

**Author of the content**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-3-1-Patient.md)

**CH VACD Extension verificationStatus**: [SNOMED CT: 76104008](http://snomed.info/id/76104008) (Not confirmed)

**identifier**: `urn:oid:2.999.1.2.3.4`/1829774

**status**: Completed

**vaccineCode**: No known immunizations

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-3-1-Patient.md)

**occurrence**: 2017-09-15 09:12:56+0200

**recorded**: 2017-09-15 09:12:56+0200

**lotNumber**: 12-34244

**route**: Intramuscular use

### Performers

| | |
| :--- | :--- |
| - | **Actor** |
| * | [PractitionerRole](PractitionerRole-6-1-PractitionerRole.md) |

> **protocolApplied****targetDisease**:Diphtheria caused by Corynebacterium diphtheriae (disorder),Tetanus (disorder),Pertussis (disorder)**doseNumber**: 1



## Resource Content

```json
{
  "resourceType" : "Immunization",
  "id" : "7-1-Immunization2",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author",
      "valueReference" : {
        "reference" : "Patient/3-1-Patient"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-verification-status",
      "valueCoding" : {
        "system" : "http://snomed.info/sct",
        "code" : "76104008",
        "display" : "Not confirmed"
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "1829774"
    }
  ],
  "status" : "completed",
  "vaccineCode" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "787482006"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/3-1-Patient"
  },
  "occurrenceDateTime" : "2017-09-15T09:12:56+02:00",
  "_occurrenceDateTime" : {
    "extension" : [
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
        "valueCode" : "unknown"
      }
    ]
  },
  "recorded" : "2017-09-15T09:12:56+02:00",
  "lotNumber" : "12-34244",
  "route" : {
    "coding" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "code" : "20035000",
        "display" : "Intramuscular use"
      }
    ]
  },
  "performer" : [
    {
      "actor" : {
        "reference" : "PractitionerRole/6-1-PractitionerRole"
      }
    }
  ],
  "protocolApplied" : [
    {
      "targetDisease" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)"
            }
          ]
        },
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "76902006",
              "display" : "Tetanus (disorder)"
            }
          ]
        },
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "27836007",
              "display" : "Pertussis (disorder)"
            }
          ]
        }
      ],
      "doseNumberPositiveInt" : 1
    }
  ]
}

```
