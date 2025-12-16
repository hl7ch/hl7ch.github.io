# Schreib Kraft - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Schreib Kraft**

## Example Practitioner: Schreib Kraft

Profile: [CH Core Practitioner](StructureDefinition-ch-core-practitioner.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/0812763

**name**: Schreib Kraft (Official)



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "SchreibKraft",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "0812763"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "family" : "Kraft",
      "given" : ["Schreib"]
    }
  ]
}

```
