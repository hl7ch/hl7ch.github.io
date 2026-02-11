# PractitionerRole: John Doe @ PharmaSI - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRole: John Doe @ PharmaSI**

## Example PractitionerRole: PractitionerRole: John Doe @ PharmaSI

Profile: [CH EMED EPR PractitionerRole](StructureDefinition-ch-emed-epr-practitionerrole.md)

**practitioner**: [Practitioner John Doe ](Bundle-DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription.md#urn-uuid-37310437-d3bb-48a2-b2f2-a3f0e41440c7)

**organization**: [Organization Pharma SI](Bundle-DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription.md#urn-uuid-7ba4c339-2731-4ac9-9fe2-8eabcce3d9eb)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "PractitionerRoleDoeAtPharmaSI",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "urn:uuid:37310437-d3bb-48a2-b2f2-a3f0e41440c7"
  },
  "organization" : {
    "reference" : "urn:uuid:7ba4c339-2731-4ac9-9fe2-8eabcce3d9eb"
  }
}

```
