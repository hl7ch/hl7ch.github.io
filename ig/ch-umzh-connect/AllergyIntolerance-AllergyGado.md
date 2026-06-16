# AllergyGado - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AllergyGado**

## Example AllergyIntolerance: AllergyGado

Profile: [CH Core AllergyIntolerance](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-allergyintolerance.html)

**clinicalStatus**: Active

**type**: Allergy

**category**: Medication

**code**: Komplexbildner-Allergie (Gadotersäure-Typ)

**patient**: [Petra Meier Female, DoB: 1992-03-26 ( Medical record number)](Patient-PetraMeier.md)



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "AllergyGado",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-allergyintolerance"]
  },
  "clinicalStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-clinical",
      "code" : "active",
      "display" : "Active"
    }]
  },
  "type" : "allergy",
  "category" : ["medication"],
  "code" : {
    "text" : "Komplexbildner-Allergie (Gadotersäure-Typ)"
  },
  "patient" : {
    "reference" : "Patient/PetraMeier"
  }
}

```
