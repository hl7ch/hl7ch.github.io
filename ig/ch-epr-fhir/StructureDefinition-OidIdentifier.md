# Oid Identifier - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Oid Identifier**

## Data Type Profile: Oid Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/OidIdentifier | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:OidIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier with an oid 

**Usages:**

* Use this DataType Profile: [CH mCSD Organization](StructureDefinition-CH.mCSD.Organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/OidIdentifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-OidIdentifier.csv), [Excel](StructureDefinition-OidIdentifier.xlsx), [Schematron](StructureDefinition-OidIdentifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "OidIdentifier",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/OidIdentifier",
  "version" : "5.0.0",
  "name" : "OidIdentifier",
  "title" : "Oid Identifier",
  "status" : "active",
  "date" : "2025-12-18T15:54:33+00:00",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Identifier with an oid",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Identifier",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Identifier",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Identifier.system",
        "path" : "Identifier.system",
        "min" : 1,
        "fixedUri" : "urn:ietf:rfc:3986"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "min" : 1,
        "constraint" : [
          {
            "key" : "oid-start",
            "severity" : "error",
            "human" : "This value must start with `urn:oid:`",
            "expression" : "value.startsWith('urn:oid:')",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/OidIdentifier"
          }
        ]
      }
    ]
  }
}

```
