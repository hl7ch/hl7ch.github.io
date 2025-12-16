# Sabine Meier @ Praxis Seeblick - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sabine Meier @ Praxis Seeblick**

## Example PractitionerRole: Sabine Meier @ Praxis Seeblick

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**practitioner**: [Practitioner Sabine Meier](Practitioner-SabineMeier.md)

**organization**: [Organization Praxis Seeblick](Organization-PraxisSeeblick.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "SabineMeierPraxisSeeblick",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/SabineMeier"
  },
  "organization" : {
    "reference" : "Organization/PraxisSeeblick"
  }
}

```
