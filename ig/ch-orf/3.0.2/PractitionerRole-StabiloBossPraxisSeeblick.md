# Stabilo Boss @ Praxis Seeblick - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Stabilo Boss @ Praxis Seeblick**

## Example PractitionerRole: Stabilo Boss @ Praxis Seeblick

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**practitioner**: [Practitioner Stabilo Boss](Practitioner-StabiloBoss.md)

**organization**: [Organization Praxis Seeblick](Organization-PraxisSeeblick.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "StabiloBossPraxisSeeblick",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/StabiloBoss"
  },
  "organization" : {
    "reference" : "Organization/PraxisSeeblick"
  }
}

```
