# Priska Huber @ Rettungsdienst - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Priska Huber @ Rettungsdienst**

## Example PractitionerRole: Priska Huber @ Rettungsdienst

Profile: [CH EMED PractitionerRole](StructureDefinition-ch-emed-practitionerrole.md)

**practitioner**: [Practitioner Priska Huber](Practitioner-PriskaHuber.md)

**organization**: [Organization Rettungsdienst](Organization-Rettungsdienst.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "PriskaHuberAtRettungsdienst",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/PriskaHuber"
  },
  "organization" : {
    "reference" : "Organization/Rettungsdienst"
  }
}

```
