# Haemoglobin - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Haemoglobin**

## Example Observation: Haemoglobin

Profile: [CH eTOC Lab Observation](StructureDefinition-ch-etoc-lab-observation.md)

**status**: Final

**code**: Hb: 112 g/l

**subject**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "Hemoglobin",
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
    "text" : "Hb: 112 g/l"
  },
  "subject" : {
    "reference" : "Patient/SUfferer"
  }
}

```
