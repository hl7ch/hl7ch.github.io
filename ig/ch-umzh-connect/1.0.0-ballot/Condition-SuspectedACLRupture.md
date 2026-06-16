# Suspected ACL Rupture - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Suspected ACL Rupture**

## Example Condition: Suspected ACL Rupture

Profile: [CH eTOC Primary Diagnosis Condition](http://fhir.ch/ig/ch-etoc/3.0.1/StructureDefinition-ch-etoc-primary-diagnosis.html)

**category**: Primary Diagnosis

**code**: Rupture left ACL

**subject**: [Petra Meier Female, DoB: 1992-03-26 ( Medical record number)](Patient-PetraMeier.md)

**note**: 

> 

* Suspected rupture of the left anterior cruciate ligament after an accident.
* Clinical examination reveals pain, swelling and subjective instability of the left knee, with a clearly positive Lachman test indicating anterior cruciate ligament insufficiency.




## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "SuspectedACLRupture",
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
    "text" : "Rupture left ACL"
  },
  "subject" : {
    "reference" : "Patient/PetraMeier"
  },
  "note" : [{
    "text" : "- Suspected rupture of the left anterior cruciate ligament after an accident.\n- Clinical examination reveals pain, swelling and subjective instability of the left knee, with a clearly positive Lachman test indicating anterior cruciate ligament insufficiency."
  }]
}

```
