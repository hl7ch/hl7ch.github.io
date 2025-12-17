# Ottilie Rderplacer (Role) - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ottilie Rderplacer (Role)**

## Example PractitionerRole: Ottilie Rderplacer (Role)

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**practitioner**: [Practitioner Ottilie Rderplacer (official)](Practitioner-PractORderplacer.md)

**organization**: [Organization Praxis Happy Doctors](Organization-OrgHappyDoctors.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "RoleORderplacer",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/PractORderplacer"
  },
  "organization" : {
    "reference" : "Organization/OrgHappyDoctors"
  }
}

```
