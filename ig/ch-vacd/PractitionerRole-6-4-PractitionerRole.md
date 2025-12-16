# 6.4 Practitioner Role (Recommendation Request/Response) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **6.4 Practitioner Role (Recommendation Request/Response)**

## Example PractitionerRole: 6.4 Practitioner Role (Recommendation Request/Response)

Profile: [CH Core PractitionerRole](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html)

**active**: true

**practitioner**: [Practitioner Max Muster](Practitioner-4-4-Practitioner.md)

**organization**: [Organization CDSS Requesting Org](Organization-5-4-Organization.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "6-4-PractitionerRole",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/4-4-Practitioner"
  },
  "organization" : {
    "reference" : "Organization/5-4-Organization"
  }
}

```
