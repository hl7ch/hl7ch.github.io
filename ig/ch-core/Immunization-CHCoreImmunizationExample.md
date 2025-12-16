# CH Core Immunization Example - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Immunization Example**

## Example Immunization: CH Core Immunization Example

Profile: [CH Core Immunization](StructureDefinition-ch-core-immunization.md)

**Author of the content**: [PractitionerRole](PractitionerRole-ImmunizationPractitionerRoleExample.md)

**status**: Completed

**vaccineCode**: Boostrix

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-ImmunizationPatientExample.md)

**occurrence**: 2017-09-15 09:12:56+0200

**recorded**: 2017-09-15 09:12:56+0200

**lotNumber**: 12-34244

**route**: Intramuscular use

### Performers

| | |
| :--- | :--- |
| - | **Actor** |
| * | [PractitionerRole](PractitionerRole-ImmunizationPractitionerRoleExample.md) |

> **protocolApplied****targetDisease**:Diphtheria caused by Corynebacterium diphtheriae (disorder),Tetanus (disorder),Pertussis (disorder)**doseNumber**: 1



## Resource Content

```json
{
  "resourceType" : "Immunization",
  "id" : "CHCoreImmunizationExample",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-immunization"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author",
      "valueReference" : {
        "reference" : "PractitionerRole/ImmunizationPractitionerRoleExample"
      }
    }
  ],
  "status" : "completed",
  "vaccineCode" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
        "code" : "637",
        "display" : "Boostrix"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/ImmunizationPatientExample"
  },
  "occurrenceDateTime" : "2017-09-15T09:12:56+02:00",
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
        "reference" : "PractitionerRole/ImmunizationPractitionerRoleExample"
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
