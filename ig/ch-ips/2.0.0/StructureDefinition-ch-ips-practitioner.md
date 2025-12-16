# CH IPS Practitioner - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IPS Practitioner**

## Resource Profile: CH IPS Practitioner 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitioner | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChIpsPractitioner |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH IPS profile for the resource Practitioner is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. 

**Usages:**

* Use this Profile: [CH IPS Document](StructureDefinition-ch-ips-document.md)
* Refer to this Profile: [CH IPS PractitionerRole](StructureDefinition-ch-ips-practitionerrole.md)
* Examples for this Profile: [Practitioner/4d4e3587-42eb-4921-8c87-8bbf89b7eb4b](Practitioner-4d4e3587-42eb-4921-8c87-8bbf89b7eb4b.md) and [Practitioner/FamilienHausarzt](Practitioner-FamilienHausarzt.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-ips|current/StructureDefinition/ch-ips-practitioner)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ips-practitioner.csv), [Excel](StructureDefinition-ch-ips-practitioner.xlsx), [Schematron](StructureDefinition-ch-ips-practitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ips-practitioner",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Practitioner-uv-ips"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitioner",
  "version" : "2.0.0",
  "name" : "ChIpsPractitioner",
  "title" : "CH IPS Practitioner",
  "status" : "active",
  "date" : "2025-12-16T11:58:36+00:00",
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
  "description" : "This CH IPS profile for the resource Practitioner is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
      "identity" : "eCH",
      "uri" : "http://www.ech.ch/",
      "name" : "eCH-Standards"
    },
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
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Practitioner",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Practitioner",
        "path" : "Practitioner",
        "short" : "CH IPS Practitioner"
      }
    ]
  }
}

```
