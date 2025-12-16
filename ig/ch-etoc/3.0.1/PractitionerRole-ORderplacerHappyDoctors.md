# Ottilie Rderplacer@Happy Doctors - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ottilie Rderplacer@Happy Doctors**

## Example PractitionerRole: Ottilie Rderplacer@Happy Doctors

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**practitioner**: [Practitioner Ottilie Rderplacer (official)](Practitioner-ORderplacer.md)

**organization**: [Organization Praxis Happy Docotors](Organization-HappyDoctors.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "ORderplacerHappyDoctors",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/ORderplacer"
  },
  "organization" : {
    "reference" : "Organization/HappyDoctors"
  }
}

```
