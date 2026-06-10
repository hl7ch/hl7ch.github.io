# Radiologieinstitut - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Radiologieinstitut**

## Example Organization: Radiologieinstitut

Profiles: [CH Core Organization](StructureDefinition-ch-core-organization.md), [CH Core Organization EPR](StructureDefinition-ch-core-organization-epr.md)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601000618627

**type**: Diagnostic institution

**name**: RoDiag Radiologieinstitut

**address**: Röntgenstr. 1 Musterhausen 8888 CH (work)



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "Radiologieinstitut",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
    "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601000618627"
  }],
  "type" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "722171005",
      "display" : "Diagnostic institution"
    }]
  }],
  "name" : "RoDiag Radiologieinstitut",
  "address" : [{
    "use" : "work",
    "line" : ["Röntgenstr.", "1"],
    "city" : "Musterhausen",
    "postalCode" : "8888",
    "country" : "CH"
  }]
}

```
