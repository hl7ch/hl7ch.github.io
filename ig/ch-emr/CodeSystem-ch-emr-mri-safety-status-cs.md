# CH EMR MRI Safety Status - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMR MRI Safety Status**

## CodeSystem: CH EMR MRI Safety Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/CodeSystem/ch-emr-mri-safety-status-cs | *Version*:1.0.0-ballot |
| Active as of 2026-05-26 | *Computable Name*:ChEmrMriSafetyStatusCS |
| **Copyright/Legal**: CC0-1.0 | |

 
Safety classification of a medical device in the magnetic resonance imaging (MRI) environment. Semantics aligned with ASTM F2503 (Standard Practice for Marking Medical Devices and Other Items for Safety in the Magnetic Resonance Environment). Defined locally because SNOMED CT International does not currently publish dedicated qualifier-value concepts for these classifications. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChEmrMriSafetyStatusVS](ValueSet-ch-emr-mri-safety-status-vs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-emr-mri-safety-status-cs",
  "url" : "http://fhir.ch/ig/ch-emr/CodeSystem/ch-emr-mri-safety-status-cs",
  "version" : "1.0.0-ballot",
  "name" : "ChEmrMriSafetyStatusCS",
  "title" : "CH EMR MRI Safety Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-05-26",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "Safety classification of a medical device in the magnetic resonance imaging (MRI) environment. Semantics aligned with ASTM F2503 (Standard Practice for Marking Medical Devices and Other Items for Safety in the Magnetic Resonance Environment). Defined locally because SNOMED CT International does not currently publish dedicated qualifier-value concepts for these classifications.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 3,
  "concept" : [{
    "code" : "mr-safe",
    "display" : "MR Safe",
    "definition" : "An item that poses no known hazards resulting from exposure to any MR environment (ASTM F2503)."
  },
  {
    "code" : "mr-conditional",
    "display" : "MR Conditional",
    "definition" : "An item that has been demonstrated to pose no known hazards in a specified MR environment with specified conditions of use (ASTM F2503)."
  },
  {
    "code" : "mr-unsafe",
    "display" : "MR Unsafe",
    "definition" : "An item that poses unacceptable risks to the patient, medical staff, or other persons within the MR environment (ASTM F2503)."
  }]
}

```
