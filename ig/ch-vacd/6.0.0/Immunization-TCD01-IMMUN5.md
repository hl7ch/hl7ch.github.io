# TC1 Immunization by HCP2 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC1 Immunization by HCP2**

## Example Immunization: TC1 Immunization by HCP2

Profile: [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md)

**Author of the content**: [PractitionerRole](PractitionerRole-TC-HCP2-ORG2-ROLE-author.md)

**CH VACD Extension Immunization Medication Reference**: [Medication GARDASIL 9 Inj Susp Fertspr](Medication-TC-IMMUN-MEDIC-GARDASIL9.md)

**CH VACD Extension verificationStatus**: [SNOMED CT: 59156000](http://snomed.info/id/59156000) (Confirmed)

**identifier**: `urn:oid:2.999.1.2.3.4`/urn:uuid:cc632c23-ffb4-4cd9-a090-61afd0746aff

**status**: Completed

**vaccineCode**: Gardasil 9

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**occurrence**: 2021-03-29

**recorded**: 2021-03-29 11:00:00+0200

**lotNumber**: 12435

**route**: Intramuscular use

### Performers

| | |
| :--- | :--- |
| - | **Actor** |
| * | [PractitionerRole](PractitionerRole-TC-HCP2-ORG2-ROLE-performer.md) |

### ProtocolApplieds

| | | |
| :--- | :--- | :--- |
| - | **TargetDisease** | **DoseNumber[x]** |
| * | Human papillomavirus infection (disorder) | 1 |



## Resource Content

```json
{
  "resourceType" : "Immunization",
  "id" : "TCD01-IMMUN5",
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
        "reference" : "Medication/TC-IMMUN-MEDIC-GARDASIL9"
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
      "value" : "urn:uuid:cc632c23-ffb4-4cd9-a090-61afd0746aff"
    }
  ],
  "status" : "completed",
  "vaccineCode" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
        "code" : "65387",
        "display" : "Gardasil 9"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/TC-patient"
  },
  "occurrenceDateTime" : "2021-03-29",
  "recorded" : "2021-03-29T11:00:00.390+02:00",
  "lotNumber" : "12435",
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
  "protocolApplied" : [
    {
      "targetDisease" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "240532009",
              "display" : "Human papillomavirus infection (disorder)"
            }
          ]
        }
      ],
      "doseNumberPositiveInt" : 1
    }
  ]
}

```
