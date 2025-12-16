# CH IPS AllergyIntolerance - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IPS AllergyIntolerance**

## Resource Profile: CH IPS AllergyIntolerance 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-allergyintolerance | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChIpsAllergyIntolerance |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH IPS profile for the resource AllergyIntolerance is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. 

**Usages:**

* Use this Profile: [CH IPS Document](StructureDefinition-ch-ips-document.md)
* Refer to this Profile: [CH IPS Composition](StructureDefinition-ch-ips-composition.md)
* Examples for this Profile: [AllergyIntolerance/27da84cc-526a-4098-afb5-f08c7836d893](AllergyIntolerance-27da84cc-526a-4098-afb5-f08c7836d893.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-ips|current/StructureDefinition/ch-ips-allergyintolerance)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ips-allergyintolerance.csv), [Excel](StructureDefinition-ch-ips-allergyintolerance.xlsx), [Schematron](StructureDefinition-ch-ips-allergyintolerance.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ips-allergyintolerance",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ips/StructureDefinition/AllergyIntolerance-uv-ips"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-allergyintolerance",
  "version" : "2.0.0",
  "name" : "ChIpsAllergyIntolerance",
  "title" : "CH IPS AllergyIntolerance",
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
  "description" : "This CH IPS profile for the resource AllergyIntolerance is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "AllergyIntolerance",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-allergyintolerance",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "AllergyIntolerance",
        "path" : "AllergyIntolerance",
        "short" : "CH IPS AllergyIntolerance"
      },
      {
        "id" : "AllergyIntolerance.patient",
        "path" : "AllergyIntolerance.patient",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"
            ]
          }
        ]
      }
    ]
  }
}

```
