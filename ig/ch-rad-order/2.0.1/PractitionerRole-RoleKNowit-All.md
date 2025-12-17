# Kurt NowIt-All (Role) - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kurt NowIt-All (Role)**

## Example PractitionerRole: Kurt NowIt-All (Role)

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**practitioner**: [Practitioner Kurt Nowit-All (official)](Practitioner-PractKNowit-All.md)

**organization**: [Organization Radiologie Klinik Happy Hospital](Organization-OrgRadHappyHospital.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "RoleKNowit-All",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/PractKNowit-All"
  },
  "organization" : {
    "reference" : "Organization/OrgRadHappyHospital"
  }
}

```
