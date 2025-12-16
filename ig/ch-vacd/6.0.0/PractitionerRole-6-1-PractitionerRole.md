# 6.1 Practitioner Role - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **6.1 Practitioner Role**

## PractitionerRole: 6.1 Practitioner Role

Profile: [CH Core PractitionerRole EPR](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole-epr.html)

**active**: true

**practitioner**: [Practitioner Allzeit Bereit](Practitioner-4-1-Practitioner.md)

**organization**: [Organization Gruppenpraxis CH](Organization-5-1-Organization.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "6-1-PractitionerRole",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr"
    ]
  },
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/4-1-Practitioner"
  },
  "organization" : {
    "reference" : "Organization/5-1-Organization"
  }
}

```
