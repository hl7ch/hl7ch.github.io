# TC HCP3 ORG1 Role Author in C1 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC HCP3 ORG1 Role Author in C1**

## PractitionerRole: TC HCP3 ORG1 Role Author in C1

Profile: [CH Core PractitionerRole EPR](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole-epr.html)

**active**: true

**practitioner**: [Practitioner Macht Gesund](Practitioner-TC-HCP3-C1.md)

**organization**: [Organization Gruppenpraxis Müller](Organization-TC-ORG1.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "TC-HCP3-ORG1-ROLE-author",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr"
    ]
  },
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/TC-HCP3-C1"
  },
  "organization" : {
    "reference" : "Organization/TC-ORG1"
  }
}

```
