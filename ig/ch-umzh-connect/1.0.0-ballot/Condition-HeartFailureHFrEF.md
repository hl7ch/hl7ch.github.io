# Heart Failure HFrEF - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Heart Failure HFrEF**

## Example Condition: Heart Failure HFrEF

Profile: [CH eTOC Secondary Diagnosis Condition](http://fhir.ch/ig/ch-etoc/3.0.1/StructureDefinition-ch-etoc-secondary-diagnosis.html)

**category**: Secondary Diagnosis

**code**: Chronic heart failure with reduced left ventricular ejection fraction (HFrEF) with moderately limited exercise tolerance, NYHA class II, LVEF <35%.

**subject**: [Petra Meier Female, DoB: 1992-03-26 ( Medical record number)](Patient-PetraMeier.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "HeartFailureHFrEF",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-secondary-diagnosis"]
  },
  "category" : [{
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-etoc/CodeSystem/ch-etoc-conditioncategory",
      "code" : "secondary-diagnosis"
    }]
  }],
  "code" : {
    "coding" : [{
      "system" : "http://fhir.de/CodeSystem/bfarm/icd-10-gm",
      "code" : "I50.22",
      "display" : "Chronic systolic (congestive) heart failure"
    }],
    "text" : "Chronic heart failure with reduced left ventricular ejection fraction (HFrEF) with moderately limited exercise tolerance, NYHA class II, LVEF <35%."
  },
  "subject" : {
    "reference" : "Patient/PetraMeier"
  }
}

```
