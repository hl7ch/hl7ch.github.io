# TC HCP2 G2 ORG2 Role Author - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC HCP2 G2 ORG2 Role Author**

## PractitionerRole: TC HCP2 G2 ORG2 Role Author

Profile: [CH Core PractitionerRole EPR](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole-epr.html)

**active**: true

**practitioner**: [Practitioner Gabriela Meier](Practitioner-TC-HCP2-C2.md)

**organization**: [Organization Praxis Dr. G. Meier](Organization-TC-ORG2.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "TC-HCP2-ORG2-ROLE-author",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr"
    ]
  },
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/TC-HCP2-C2"
  },
  "organization" : {
    "reference" : "Organization/TC-ORG2"
  }
}

```
