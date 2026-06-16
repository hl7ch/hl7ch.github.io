# SarcomaKnee - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SarcomaKnee**

## Example Condition: SarcomaKnee

Profile: [CH eTOC Primary Diagnosis Condition](http://fhir.ch/ig/ch-etoc/3.0.1/StructureDefinition-ch-etoc-primary-diagnosis.html)

**category**: Primary Diagnosis

**code**: Synovial sarcoma of the right knee

**subject**: [Petra Meier Female, DoB: 1992-03-26 ( Medical record number)](Patient-PetraMeier.md)

**note**: 

> 

* Histologically confirmed synovial sarcoma.




## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "SarcomaKnee",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-primary-diagnosis"]
  },
  "category" : [{
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-etoc/CodeSystem/ch-etoc-conditioncategory",
      "code" : "primary-diagnosis"
    }]
  }],
  "code" : {
    "text" : "Synovial sarcoma of the right knee"
  },
  "subject" : {
    "reference" : "Patient/PetraMeier"
  },
  "note" : [{
    "text" : "- Histologically confirmed synovial sarcoma."
  }]
}

```
