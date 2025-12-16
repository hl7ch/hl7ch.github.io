# Thx ap / seitl. - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Thx ap / seitl.**

## Example Observation: Thx ap / seitl.

Profile: [CH eTOC Radiology Observation](StructureDefinition-ch-etoc-radiology-observation.md)

**status**: Final

**code**: Thorax ap / seitl. vom 12.05.23: unauffällig

**subject**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "Imaging",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-radiology-observation"
    ]
  },
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "75490-3",
        "display" : "Radiology Note"
      }
    ],
    "text" : "Thorax ap / seitl. vom 12.05.23: unauffällig"
  },
  "subject" : {
    "reference" : "Patient/SUfferer"
  }
}

```
