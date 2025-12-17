# Olga Rderplacer-Junior (Role) - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Olga Rderplacer-Junior (Role)**

## Example PractitionerRole: Olga Rderplacer-Junior (Role)

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**practitioner**: [Practitioner Olga Rderplacer-Junior (official)](Practitioner-PractORderplacerJunior.md)

**organization**: [Organization Spital Small Hospital](Organization-OrgSmallHospital.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "RoleORderplacerJunior",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/PractORderplacerJunior"
  },
  "organization" : {
    "reference" : "Organization/OrgSmallHospital"
  }
}

```
