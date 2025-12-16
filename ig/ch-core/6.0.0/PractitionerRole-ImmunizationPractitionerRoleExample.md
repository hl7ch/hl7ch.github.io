# PractitionerRole example for immunization - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRole example for immunization**

## Example PractitionerRole: PractitionerRole example for immunization

Profile: [CH Core PractitionerRole](StructureDefinition-ch-core-practitionerrole.md)

**active**: true

**practitioner**: [Practitioner Allzeit Bereit](Practitioner-ImmunizationAuthorExample.md)

**organization**: [Organization Gruppenpraxis CH](Organization-ImmunizationOrganizationExample.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "ImmunizationPractitionerRoleExample",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/ImmunizationAuthorExample"
  },
  "organization" : {
    "reference" : "Organization/ImmunizationOrganizationExample"
  }
}

```
