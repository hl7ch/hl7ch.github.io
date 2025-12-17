# Otto Rderfiller (Role) - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Otto Rderfiller (Role)**

## Example PractitionerRole: Otto Rderfiller (Role)

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**practitioner**: [Practitioner Otto Rderfiller (official)](Practitioner-PractORderfiller.md)

**organization**: [Organization Radiologie Klinik Happy Hospital](Organization-OrgRadHappyHospital.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "RoleORderfiller",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/PractORderfiller"
  },
  "organization" : {
    "reference" : "Organization/OrgRadHappyHospital"
  }
}

```
