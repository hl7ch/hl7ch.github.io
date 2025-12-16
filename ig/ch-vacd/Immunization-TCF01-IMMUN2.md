# TCF1 Immunization 2 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TCF1 Immunization 2**

## Example Immunization: TCF1 Immunization 2

Profile: [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md)

**Author of the content**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**CH VACD Extension Immunization Medication Reference**: [Medication HAVRIX 1440 Inj Susp](Medication-TC-IMMUN-MEDIC-HAVRIX1440.md)

**CH VACD Extension verificationStatus**: [SNOMED CT: 76104008](http://snomed.info/id/76104008) (Not confirmed)

> **Entry Resource Cross References**
* entry: Identifier: `urn:oid:2.999.1.2.3.4`/855bdd69-0a39-4241-b208-9b248a62fb76
* container: Identifier: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:e2233a2f-d1c2-459d-b4fe-4920c35339e7
* relationcode: replaces

**identifier**: `urn:oid:2.999.1.2.3.4`/e2233a2f-d1c2-459d-b4fe-4920c35339e7

**status**: Completed

**vaccineCode**: Havrix 1440

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**occurrence**: 2021-05-27

**recorded**: 2021-05-27 00:00:00+0200

**lotNumber**: AHAVB946A

**route**: Intramuscular use

### Performers

| | |
| :--- | :--- |
| - | **Actor** |
| * | [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-performer.md) |

**note**: By Practitioner/TC-HCP1-C1 @2021-06-02

> 

Der Patient hat diese Impfung ohne jegliche Nebenwirkungen gut vertragen.


### ProtocolApplieds

| | | |
| :--- | :--- | :--- |
| - | **TargetDisease** | **DoseNumber[x]** |
| * | Viral hepatitis, type A (disorder) | 1 |



## Resource Content

```json
{
  "resourceType" : "Immunization",
  "id" : "TCF01-IMMUN2",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author",
      "valueReference" : {
        "reference" : "Patient/TC-patient"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-immunization-medication-reference",
      "valueReference" : {
        "reference" : "Medication/TC-IMMUN-MEDIC-HAVRIX1440"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-verification-status",
      "valueCoding" : {
        "system" : "http://snomed.info/sct",
        "code" : "76104008",
        "display" : "Not confirmed"
      }
    },
    {
      "extension" : [
        {
          "url" : "entry",
          "valueReference" : {
            "type" : "Immunization",
            "identifier" : {
              "system" : "urn:oid:2.999.1.2.3.4",
              "value" : "855bdd69-0a39-4241-b208-9b248a62fb76"
            }
          }
        },
        {
          "url" : "container",
          "valueReference" : {
            "type" : "Composition",
            "identifier" : {
              "system" : "urn:ietf:rfc:3986",
              "value" : "urn:uuid:e2233a2f-d1c2-459d-b4fe-4920c35339e7"
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
      "value" : "e2233a2f-d1c2-459d-b4fe-4920c35339e7"
    }
  ],
  "status" : "completed",
  "vaccineCode" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
        "code" : "558",
        "display" : "Havrix 1440"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/TC-patient"
  },
  "occurrenceDateTime" : "2021-05-27",
  "recorded" : "2021-05-27T00:00:00.390+02:00",
  "lotNumber" : "AHAVB946A",
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
        "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-performer"
      }
    }
  ],
  "note" : [
    {
      "authorReference" : {
        "reference" : "Practitioner/TC-HCP1-C1"
      },
      "time" : "2021-06-02",
      "text" : "Der Patient hat diese Impfung ohne jegliche Nebenwirkungen gut vertragen."
    }
  ],
  "protocolApplied" : [
    {
      "targetDisease" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "40468003",
              "display" : "Viral hepatitis, type A (disorder)"
            }
          ]
        }
      ],
      "doseNumberPositiveInt" : 1
    }
  ]
}

```
