# 6.3 Practitioner Role - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **6.3 Practitioner Role**

## PractitionerRole: 6.3 Practitioner Role

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**active**: true

**practitioner**: [Practitioner Max Muster](Practitioner-4-3-Practitioner.md)

**organization**: [Organization Praxis Muster](Organization-5-3-Organization.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "6-3-PractitionerRole",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/4-3-Practitioner"
  },
  "organization" : {
    "reference" : "Organization/5-3-Organization"
  }
}

```
