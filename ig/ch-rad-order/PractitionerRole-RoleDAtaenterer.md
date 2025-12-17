# Doris Ataenterer (Role) - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Doris Ataenterer (Role)**

## Example PractitionerRole: Doris Ataenterer (Role)

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**practitioner**: [Practitioner Doris Ataenterer](Practitioner-PractDAtaenterer.md)

**organization**: [Organization Praxis Happy Doctors](Organization-OrgHappyDoctors.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "RoleDAtaenterer",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/PractDAtaenterer"
  },
  "organization" : {
    "reference" : "Organization/OrgHappyDoctors"
  }
}

```
