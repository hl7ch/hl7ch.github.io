# UC 1.1: Familien Hausarzt @ Hausarzt - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.1: Familien Hausarzt @ Hausarzt**

## Example PractitionerRole: UC 1.1: Familien Hausarzt @ Hausarzt

Profile: [CH IPS PractitionerRole](StructureDefinition-ch-ips-practitionerrole.md)

**practitioner**: [Practitioner Familien Hausarzt](Practitioner-FamilienHausarzt.md)

**organization**: [Organization Hausarzt](Organization-Hausarzt.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "FamilienHausarztAtHausarzt",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitionerrole"
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
