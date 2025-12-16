# EKG - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EKG**

## Example Observation: EKG

Profile: [CH eTOC Cardiology Observation](StructureDefinition-ch-etoc-cardiology-observation.md)

**status**: Final

**code**: EKG vom 12.5.23: unauffällig

**subject**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "Electrocardiogram",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-cardiology-observation"
    ]
  },
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "77412-5",
        "display" : "cardiology History and physical note"
      }
    ],
    "text" : "EKG vom 12.5.23: unauffällig"
  },
  "subject" : {
    "reference" : "Patient/SUfferer"
  }
}

```
