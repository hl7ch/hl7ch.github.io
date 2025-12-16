# Secondary Diagnosis 2 - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Secondary Diagnosis 2**

## Example Condition: Secondary Diagnosis 2

Profile: [CH eTOC Secondary Diagnosis Condition](StructureDefinition-ch-etoc-secondary-diagnosis.md)

**category**: Secondary Diagnosis

**code**: Hypercholesterinämie

**subject**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "SecondaryDiagnosis2",
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
    "text" : "Hypercholesterinämie"
  },
  "subject" : {
    "reference" : "Patient/SUfferer"
  }
}

```
