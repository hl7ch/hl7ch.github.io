# TC1 Immunization by HCP1 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC1 Immunization by HCP1**

## Example Immunization: TC1 Immunization by HCP1

Language: fr-CH

Profile: [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md)

**Author of the content**: [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-author.md)

**CH VACD Extension Immunization Medication Reference**: [Medication FSME-IMMUN CC Inj Susp sep Nadel](Medication-TC-IMMUN-MEDIC-FSMEIMMCC.md)

**CH VACD Extension verificationStatus**: [SNOMED CT: 59156000](http://snomed.info/id/59156000) (confirmé)

**identifier**: `urn:oid:2.999.1.2.3.4`/urn:uuid:4386ca26-6866-4322-a203-b488b84ab499

**status**: Completed

**vaccineCode**: FSME-Immun CC

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**occurrence**: 2021-06-22

**recorded**: 2021-06-22 11:00:00+0200

**lotNumber**: 12-34244

**route**: Intramuscular use

### Performers

| | |
| :--- | :--- |
| - | **Actor** |
| * | [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-performer.md) |

### ProtocolApplieds

| | | |
| :--- | :--- | :--- |
| - | **TargetDisease** | **DoseNumber[x]** |
| * | encéphalite à tiques | 1 |



## Resource Content

```json
{
  "resourceType" : "Immunization",
  "id" : "TCE01-IMMUN1-fr",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
    ]
  },
  "language" : "fr-CH",
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author",
      "valueReference" : {
        "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-author"
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
        "display" : "confirmé"
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "urn:uuid:4386ca26-6866-4322-a203-b488b84ab499"
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
  "occurrenceDateTime" : "2021-06-22",
  "recorded" : "2021-06-22T11:00:00.390+02:00",
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
        "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-performer"
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
              "code" : "712986001",
              "display" : "encéphalite à tiques"
            }
          ]
        }
      ],
      "doseNumberPositiveInt" : 1
    }
  ]
}

```
