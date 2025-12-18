# Identifier for XDSDocumentEntry.uniqueId - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Identifier for XDSDocumentEntry.uniqueId**

## Data Type Profile: Identifier for XDSDocumentEntry.uniqueId 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-atc-uniqueid-identifier | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:UniqueidIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier holding the XDSDocumentEntry.uniqueId 

**Usages:**

* Use this DataType Profile: [DocumentAuditEvent](StructureDefinition-DocumentAuditEvent.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-atc-uniqueid-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-atc-uniqueid-identifier.csv), [Excel](StructureDefinition-ch-atc-uniqueid-identifier.xlsx), [Schematron](StructureDefinition-ch-atc-uniqueid-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-atc-uniqueid-identifier",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-atc-uniqueid-identifier",
  "version" : "5.0.0",
  "name" : "UniqueidIdentifier",
  "title" : "Identifier for XDSDocumentEntry.uniqueId",
  "status" : "active",
  "date" : "2025-12-18T15:42:00+00:00",
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
  "description" : "Identifier holding the XDSDocumentEntry.uniqueId",
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
        "id" : "Identifier",
        "path" : "Identifier"
      },
      {
        "id" : "Identifier.system",
        "path" : "Identifier.system",
        "min" : 1,
        "fixedUri" : "urn:ihe:iti:xds:2013:uniqueId"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "min" : 1,
        "example" : [
          {
            "label" : "General",
            "valueString" : "2.999.1.2.3.4"
          }
        ],
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "XDSDocumentEntry.uniqueId"
          }
        ]
      }
    ]
  }
}

```
