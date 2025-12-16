# TC1 Immunization by HCP2 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC1 Immunization by HCP2**

## Example Immunization: TC1 Immunization by HCP2

Profile: [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md)

**Author of the content**: [PractitionerRole](PractitionerRole-TC-HCP2-ORG2-ROLE-author.md)

**CH VACD Extension Immunization Medication Reference**: [Medication FSME-IMMUN CC Inj Susp sep Nadel](Medication-TC-IMMUN-MEDIC-FSMEIMMCC.md)

**CH VACD Extension verificationStatus**: [SNOMED CT: 59156000](http://snomed.info/id/59156000) (Confirmed)

**identifier**: `urn:oid:2.999.1.2.3.4`/7f7a308a-63f7-4be1-a329-0a33e08b4645

**status**: Completed

**vaccineCode**: FSME-Immun CC

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**occurrence**: 2021-08-01

**recorded**: 2021-08-02 00:00:00+0200

**lotNumber**: 12-34244

**route**: Intramuscular use

### Performers

| | |
| :--- | :--- |
| - | **Actor** |
| * | [PractitionerRole](PractitionerRole-TC-HCP2-ORG2-ROLE-performer.md) |

**note**: By Practitioner/TC-HCP2-C2 @2021-08-01

> 

Der Patient hatte keinerlei Nebenwirkungen.


### ProtocolApplieds

| | | |
| :--- | :--- | :--- |
| - | **TargetDisease** | **DoseNumber[x]** |
| * | Tickborne encephalitis | 1 |



## Resource Content

```json
{
  "resourceType" : "Immunization",
  "id" : "TCA01-IMMUN3-HCP2-ORG2-ROLE",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author",
      "valueReference" : {
        "reference" : "PractitionerRole/TC-HCP2-ORG2-ROLE-author"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-immunization-medication-reference",
      "valueReference" : {
        "reference" : "Medication/TC-IMMUN-MEDIC-FSMEIMMCC"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-verification-status",
      "valueCoding" : {
        "system" : "http://snomed.info/sct",
        "code" : "59156000",
        "display" : "Confirmed"
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "7f7a308a-63f7-4be1-a329-0a33e08b4645"
    }
  ],
  "status" : "completed",
  "vaccineCode" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
        "code" : "450",
        "display" : "FSME-Immun CC"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/TC-patient"
  },
  "occurrenceDateTime" : "2021-08-01",
  "recorded" : "2021-08-02T00:00:00.390+02:00",
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
        "reference" : "PractitionerRole/TC-HCP2-ORG2-ROLE-performer"
      }
    }
  ],
  "note" : [
    {
      "authorReference" : {
        "reference" : "Practitioner/TC-HCP2-C2"
      },
      "time" : "2021-08-01",
      "text" : "Der Patient hatte keinerlei Nebenwirkungen."
    }
  ],
  "protocolApplied" : [
    {
      "targetDisease" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "712986001",
              "display" : "Tickborne encephalitis"
            }
          ]
        }
      ],
      "doseNumberPositiveInt" : 1
    }
  ]
}

```
