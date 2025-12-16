# Doris Ataenterer@Happy Doctors - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Doris Ataenterer@Happy Doctors**

## Example PractitionerRole: Doris Ataenterer@Happy Doctors

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**practitioner**: [Practitioner Doris Ataenterer](Practitioner-DAtaenterer.md)

**organization**: [Organization Praxis Happy Docotors](Organization-HappyDoctors.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "DAtaentererHappyDoctors",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/DAtaenterer"
  },
  "organization" : {
    "reference" : "Organization/HappyDoctors"
  }
}

```
