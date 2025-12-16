# Secondary Diagnosis 1 - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Secondary Diagnosis 1**

## Example Condition: Secondary Diagnosis 1

Profile: [CH eTOC Secondary Diagnosis Condition](StructureDefinition-ch-etoc-secondary-diagnosis.md)

**category**: Secondary Diagnosis

**code**: Hypertonie (Syst um 180 mm HG)

**subject**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "SecondaryDiagnosis1",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-secondary-diagnosis"
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://fhir.ch/ig/ch-etoc/CodeSystem/ch-etoc-conditioncategory",
          "code" : "secondary-diagnosis",
          "display" : "Secondary Diagnosis"
        }
      ]
    }
  ],
  "code" : {
    "text" : "Hypertonie (Syst um 180 mm HG)"
  },
  "subject" : {
    "reference" : "Patient/SUfferer"
  }
}

```
