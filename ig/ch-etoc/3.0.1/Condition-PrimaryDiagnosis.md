# Primary Diagnosis - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Primary Diagnosis**

## Example Condition: Primary Diagnosis

Profile: [CH eTOC Primary Diagnosis Condition](StructureDefinition-ch-etoc-primary-diagnosis.md)

**category**: Primary Diagnosis

**code**: St. nach Bypass 2007

**subject**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "PrimaryDiagnosis",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-primary-diagnosis"
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://fhir.ch/ig/ch-etoc/CodeSystem/ch-etoc-conditioncategory",
          "code" : "primary-diagnosis",
          "display" : "Primary Diagnosis"
        }
      ]
    }
  ],
  "code" : {
    "text" : "St. nach Bypass 2007"
  },
  "subject" : {
    "reference" : "Patient/SUfferer"
  }
}

```
