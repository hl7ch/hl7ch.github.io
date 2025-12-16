# Hb-A1c - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hb-A1c**

## Example Observation: Hb-A1c

Profile: [CH eTOC Lab Observation](StructureDefinition-ch-etoc-lab-observation.md)

**status**: Final

**code**: HHb-A1c: 5.4 %

**subject**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "HbA1c",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-lab-observation"
    ]
  },
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "26436-6",
        "display" : "Laboratory studies (set)"
      }
    ],
    "text" : "HHb-A1c: 5.4 %"
  },
  "subject" : {
    "reference" : "Patient/SUfferer"
  }
}

```
