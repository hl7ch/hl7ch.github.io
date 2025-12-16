# 6.2 Practitioner Role - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **6.2 Practitioner Role**

## PractitionerRole: 6.2 Practitioner Role

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**active**: true

**practitioner**: [Practitioner Detlef Demo](Practitioner-4-2-Practitioner.md)

**organization**: [Organization Praxis Demo](Organization-5-2-Organization.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "6-2-PractitionerRole",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/4-2-Practitioner"
  },
  "organization" : {
    "reference" : "Organization/5-2-Organization"
  }
}

```
