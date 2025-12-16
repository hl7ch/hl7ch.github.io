# Allergy / Intolerance - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Allergy / Intolerance**

## Example AllergyIntolerance: Allergy / Intolerance

Profile: [CH eTOC Allergy Intolerance](StructureDefinition-ch-etoc-allergyintolerance.md)

**clinicalStatus**: Active

**code**: Anamnestisch Penicillinallergie

**patient**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "AllergyIntolerance",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-allergyintolerance"
    ]
  },
  "clinicalStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-clinical",
        "code" : "active"
      }
    ]
  },
  "code" : {
    "text" : "Anamnestisch Penicillinallergie"
  },
  "patient" : {
    "reference" : "Patient/SUfferer"
  }
}

```
