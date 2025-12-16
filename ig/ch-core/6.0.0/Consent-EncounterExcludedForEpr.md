# Consent for Swiss EPR with Encounter exclusions - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Consent for Swiss EPR with Encounter exclusions**

## Example Consent: Consent for Swiss EPR with Encounter exclusions

Profile: [CH Core EPR-Consent](StructureDefinition-ch-core-epr-consent.md)

**status**: Active

**scope**: Privacy Consent

**category**: information disclosure

**patient**: [Elisabeth Broennimann](Patient-ElisabethBroennimannByBFH.md)

**dateTime**: 2020-12-28

**organization**: Stammgemeinschaft XYZ

### Policies

| | |
| :--- | :--- |
| - | **Authority** |
| * | [https://www.admin.ch/opc/de/classified-compilation/20111795/index.html](https://www.admin.ch/opc/de/classified-compilation/20111795/index.html) |

**policyRule**: CH EPR Consent

> **provision****type**: Opt Out

### Data

| | | |
| :--- | :--- | :--- |
| - | **Meaning** | **Reference** |
| * | Instance | [Encounter: identifier = Visit number: 12345; status = finished; class = inpatient encounter (ActCode#IMP); priority = Notfall (Behandlung innerhalb von 12 Std. unabdingbar); period = 2020-12-20 16:00:00+0200 --> 2020-12-22 16:15:00+0200](Encounter-EncounterAccidentBroennimann.md) |




## Resource Content

```json
{
  "resourceType" : "Consent",
  "id" : "EncounterExcludedForEpr",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-epr-consent"
    ]
  },
  "status" : "active",
  "scope" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/consentscope",
        "code" : "patient-privacy",
        "display" : "Privacy Consent"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
          "code" : "IDSCL",
          "display" : "information disclosure"
        }
      ]
    }
  ],
  "patient" : {
    "reference" : "Patient/ElisabethBroennimannByBFH",
    "display" : "Elisabeth Broennimann"
  },
  "dateTime" : "2020-12-28",
  "organization" : [
    {
      "display" : "Stammgemeinschaft XYZ"
    }
  ],
  "policy" : [
    {
      "authority" : "https://www.admin.ch/opc/de/classified-compilation/20111795/index.html"
    }
  ],
  "policyRule" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/consentpolicycodes",
        "code" : "ch-epr"
      }
    ]
  },
  "provision" : {
    "type" : "deny",
    "data" : [
      {
        "meaning" : "instance",
        "reference" : {
          "reference" : "Encounter/EncounterAccidentBroennimann",
          "type" : "Encounter"
        }
      }
    ]
  }
}

```
