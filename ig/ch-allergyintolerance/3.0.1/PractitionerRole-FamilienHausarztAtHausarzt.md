# Familien Hausarzt @ Hausarzt - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Familien Hausarzt @ Hausarzt**

## Example PractitionerRole: Familien Hausarzt @ Hausarzt

Profile: [CH Core PractitionerRole EPR](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole-epr.html)

**practitioner**: [Practitioner Familien Hausarzt](Practitioner-FamilienHausarzt.md)

**organization**: [Organization Hausarzt](Organization-Hausarzt.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "FamilienHausarztAtHausarzt",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/FamilienHausarzt"
  },
  "organization" : {
    "reference" : "Organization/Hausarzt"
  }
}

```
