# Hans Muster Role - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hans Muster Role**

## Example PractitionerRole: Hans Muster Role

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-practitionerrole.html)

**practitioner**: [Practitioner Hans Muster ](Practitioner-HansMuster.md)

**organization**: [http://registry.example.org/fhir/Organization/Placer](http://registry.example.org/fhir/Organization/Placer)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "HansMusterRole",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"]
  },
  "practitioner" : {
    "reference" : "Practitioner/HansMuster"
  },
  "organization" : {
    "reference" : "http://registry.example.org/fhir/Organization/Placer"
  }
}

```
