# TCA1 Immunization by patient - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TCA1 Immunization by patient**

## Example Immunization: TCA1 Immunization by patient

Profile: [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md)

**Author of the content**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**CH VACD Extension Immunization Medication Reference**: [Medication HAVRIX 1440 Inj Susp](Medication-TC-IMMUN-MEDIC-HAVRIX1440.md)

**CH VACD Extension verificationStatus**: [SNOMED CT: 76104008](http://snomed.info/id/76104008) (Not confirmed)

**identifier**: `urn:oid:2.999.1.2.3.4`/acc1f090-5e0c-45ae-b283-521d57c3aa2f

**status**: Completed

**vaccineCode**: Havrix 1440

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**occurrence**: 2021-06-01

**recorded**: 2021-06-02 00:00:00+0200

**lotNumber**: AHAVB946A

**route**: Intramuscular use

### Performers

| | |
| :--- | :--- |
| - | **Actor** |
| * | [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-performer.md) |

**note**: By Practitioner/TC-HCP1-C1 @2021-06-01

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
  "id" : "TCA01-IMMUN1-patient",
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
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "acc1f090-5e0c-45ae-b283-521d57c3aa2f"
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
  "occurrenceDateTime" : "2021-06-01",
  "recorded" : "2021-06-02T00:00:00.390+02:00",
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
      "time" : "2021-06-01",
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
