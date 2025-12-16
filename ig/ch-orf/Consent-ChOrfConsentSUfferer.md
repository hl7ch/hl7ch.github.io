# Consent - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Consent**

## Example Consent: Consent

Profile: [CH ORF Consent](StructureDefinition-ch-orf-consent.md)

**CH ORF Consent Code**: [SNOMED CT: 373068000](http://snomed.info/id/373068000) (Undetermined (qualifier value))

**CH ORF Consent Note**: Tochter wird die Spitexunterstützung beim nächsten Besuch thematisieren

**status**: Active

**scope**: Privacy Consent

**category**: Consent Document

**policyRule**: 



## Resource Content

```json
{
  "resourceType" : "Consent",
  "id" : "ChOrfConsentSUfferer",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-consent"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-consentcode",
      "valueCoding" : {
        "system" : "http://snomed.info/sct",
        "code" : "373068000",
        "display" : "Undetermined (qualifier value)"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-consentnote",
      "valueString" : "Tochter wird die Spitexunterstützung beim nächsten Besuch thematisieren"
    }
  ],
  "status" : "active",
  "scope" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/consentscope",
        "code" : "patient-privacy"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://loinc.org",
          "code" : "59284-0"
        }
      ]
    }
  ],
  "policyRule" : {
    "extension" : [
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
        "valueCode" : "not-applicable"
      }
    ]
  }
}

```
