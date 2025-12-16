# Schreib Kraft @ Gruppenpraxis CH - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Schreib Kraft @ Gruppenpraxis CH**

## Example PractitionerRole: Schreib Kraft @ Gruppenpraxis CH

Profile: [CH Core PractitionerRole](StructureDefinition-ch-core-practitionerrole.md)

**practitioner**: [Practitioner Schreib Kraft (official)](Practitioner-SchreibKraft.md)

**organization**: [Organization Gruppenpraxis CH](Organization-GruppenpraxisCH.md)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "SchreibKraftAtGruppenpraxisCH",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/SchreibKraft"
  },
  "organization" : {
    "reference" : "Organization/GruppenpraxisCH"
  }
}

```
