# Blood CBC Sample - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Blood CBC Sample**

## Example Specimen: Blood CBC Sample

Profile: [CH LAB-Report Specimen](StructureDefinition-ch-lab-specimen.md)

**status**: Available

**type**: Blood specimen



## Resource Content

```json
{
  "resourceType" : "Specimen",
  "id" : "BloodCBC",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-specimen"
    ]
  },
  "status" : "available",
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "119297000",
        "display" : "Blood specimen"
      }
    ]
  }
}

```
