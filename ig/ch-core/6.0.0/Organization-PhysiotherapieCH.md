# Physiotherapie CH - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Physiotherapie CH**

## Example Organization: Physiotherapie CH

Profiles: [CH Core Organization](StructureDefinition-ch-core-organization.md), [CH Core Organization EPR](StructureDefinition-ch-core-organization-epr.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470, `urn:oid:2.16.756.5.35`/CHE109322551, `urn:oid:2.16.756.5.45`/A62088168

**name**: Physiotherapie CH



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "PhysiotherapieCH",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601002331470"
    },
    {
      "system" : "urn:oid:2.16.756.5.35",
      "value" : "CHE109322551"
    },
    {
      "system" : "urn:oid:2.16.756.5.45",
      "value" : "A62088168"
    }
  ],
  "name" : "Physiotherapie CH"
}

```
