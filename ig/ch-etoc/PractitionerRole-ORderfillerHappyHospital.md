# Otto Rderfiller@Happy Hospital - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Otto Rderfiller@Happy Hospital**

## Example PractitionerRole: Otto Rderfiller@Happy Hospital

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**practitioner**: [Practitioner Otto Rderfiller (official)](Practitioner-ORderfiller.md)

**organization**: [Organization Innere Medizin Klinik Happy Hospital](Organization-HappyHospital.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "ORderfillerHappyHospital",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/ORderfiller"
  },
  "organization" : {
    "reference" : "Organization/HappyHospital"
  }
}

```
