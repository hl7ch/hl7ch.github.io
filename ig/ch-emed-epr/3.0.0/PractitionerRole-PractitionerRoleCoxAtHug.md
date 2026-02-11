# PractitionerRole: Perry Cox @ HUG - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRole: Perry Cox @ HUG**

## Example PractitionerRole: PractitionerRole: Perry Cox @ HUG

Profile: [CH EMED EPR PractitionerRole](StructureDefinition-ch-emed-epr-practitionerrole.md)

**practitioner**: [Practitioner Perry Cox ](Bundle-BundleUtc6bPml.md#urn-uuid-9fc8530b-b77d-4b53-8a21-fc786b697edf)

**organization**: [Organization Hôpitaux universitaires de Genève](Bundle-BundleUtc6bPml.md#urn-uuid-580fbe82-8734-4edf-ad4b-48124cdd03c6)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "PractitionerRoleCoxAtHug",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "urn:uuid:9fc8530b-b77d-4b53-8a21-fc786b697edf"
  },
  "organization" : {
    "reference" : "urn:uuid:580fbe82-8734-4edf-ad4b-48124cdd03c6"
  }
}

```
