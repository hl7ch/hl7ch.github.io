# Past History of Illnesses - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Past History of Illnesses**

## Example Condition: Past History of Illnesses

Profile: [CH eTOC Past History of Illnesses Condition](StructureDefinition-ch-etoc-illness.md)

**category**: Illness

**code**: Endokarditis 1999

**subject**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "PastHistoryofIllnessesConditionEtoc",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-illness"
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://fhir.ch/ig/ch-etoc/CodeSystem/ch-etoc-conditioncategory",
          "code" : "illness"
        }
      ]
    }
  ],
  "code" : {
    "text" : "Endokarditis 1999"
  },
  "subject" : {
    "reference" : "Patient/SUfferer"
  }
}

```
