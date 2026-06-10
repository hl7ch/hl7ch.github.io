# Physiotherapie CH - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Physiotherapie CH**

## Example Organization: Physiotherapie CH

Profiles: [CH Core Organization](StructureDefinition-ch-core-organization.md), [CH Core Organization EPR](StructureDefinition-ch-core-organization-epr.md)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601002331470, [UIDB](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-uidb.html)/CHE109322551, [BER](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-ber.html)/A62088168

**name**: Physiotherapie CH



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "PhysiotherapieCH",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
    "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"]
  },
  "identifier" : [{
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
  }],
  "name" : "Physiotherapie CH"
}

```
