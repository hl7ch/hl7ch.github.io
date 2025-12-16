# Familien Hausarzt @ Hausarzt - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Familien Hausarzt @ Hausarzt**

## Example PractitionerRole: Familien Hausarzt @ Hausarzt

Profile: [CH EMED PractitionerRole](StructureDefinition-ch-emed-practitionerrole.md)

**practitioner**: [Practitioner Familien Hausarzt](Practitioner-FamilienHausarzt.md)

**organization**: [Organization Hausarzt](Organization-Hausarzt.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "FamilienHausarztAtHausarzt",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitionerrole"
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
