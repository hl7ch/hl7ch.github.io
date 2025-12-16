# CH IPS Document EPR - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IPS Document EPR**

## Resource Profile: CH IPS Document EPR 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-document-epr | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChIpsDocumentEPR |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH IPS EPR profile for the resource Bundle is derived from the CH IPS Document profile and additionally ensures Swiss EPR conformity via the CH Core Document EPR profile referenced by the imposeProfile extension. 

**Usages:**

* Examples for this Profile: [Bundle/UC1-SwissIpsDocument2](Bundle-UC1-SwissIpsDocument2.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-ips|current/StructureDefinition/ch-ips-document-epr)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ips-document-epr.csv), [Excel](StructureDefinition-ch-ips-document-epr.xlsx), [Schematron](StructureDefinition-ch-ips-document-epr.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ips-document-epr",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document-epr"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-document-epr",
  "version" : "2.0.0",
  "name" : "ChIpsDocumentEPR",
  "title" : "CH IPS Document EPR",
  "status" : "active",
  "date" : "2025-12-16T12:02:17+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "This CH IPS EPR profile for the resource Bundle is derived from the CH IPS Document profile and additionally ensures Swiss EPR conformity via the CH Core Document EPR profile referenced by the imposeProfile extension.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
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
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-document",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "short" : "CH IPS Document EPR"
      }
    ]
  }
}

```
