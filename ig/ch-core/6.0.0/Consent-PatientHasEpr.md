# Consent for Swiss EPR - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Consent for Swiss EPR**

## Example Consent: Consent for Swiss EPR

Profile: [CH Core EPR-Consent](StructureDefinition-ch-core-epr-consent.md)

**status**: Active

**scope**: Privacy Consent

**category**: information disclosure

**patient**: [Franz Muster](Patient-FranzMuster.md)

**dateTime**: 2020-12-28

**organization**: Stammgemeinschaft XYZ

### Policies

| | |
| :--- | :--- |
| - | **Authority** |
| * | [https://www.admin.ch/opc/de/classified-compilation/20111795/index.html](https://www.admin.ch/opc/de/classified-compilation/20111795/index.html) |

**policyRule**: CH EPR Consent



## Resource Content

```json
{
  "resourceType" : "Consent",
  "id" : "PatientHasEpr",
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
    "reference" : "Patient/FranzMuster",
    "display" : "Franz Muster"
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
  }
}

```
