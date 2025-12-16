# Spitex - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Spitex**

## Example PractitionerRole: Spitex

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**practitioner**: [Practitioner Samuel Itex](Practitioner-ChOrfPractitionerSPitex.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "ChOrfPractitionerRoleSPitex",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/ChOrfPractitionerSPitex"
  }
}

```
