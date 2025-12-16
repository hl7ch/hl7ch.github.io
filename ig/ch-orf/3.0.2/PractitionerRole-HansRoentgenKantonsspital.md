# Hans Röntgen @ Kantonsspital - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hans Röntgen @ Kantonsspital**

## Example PractitionerRole: Hans Röntgen @ Kantonsspital

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**practitioner**: [Practitioner Hans Röntgen](Practitioner-HansRoentgen.md)

**organization**: [Organization Kantonsspital](Organization-Kantonsspital.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "HansRoentgenKantonsspital",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/HansRoentgen"
  },
  "organization" : {
    "reference" : "Organization/Kantonsspital"
  }
}

```
