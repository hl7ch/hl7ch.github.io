# CH Core Practitioner EPR - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Practitioner EPR**

## Resource Profile: CH Core Practitioner EPR 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCorePractitionerEPR |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the Practitioner resource for use in the context of the electronic patient record (EPR). 

 
Core practitioner data which can be shared 

**Usages:**

* Refer to this Profile: [CH Core Composition EPR](StructureDefinition-ch-core-composition-epr.md) and [CH Core PractitionerRole EPR](StructureDefinition-ch-core-practitionerrole-epr.md)
* Examples for this Profile: [Practitioner/AllzeitBereit](Practitioner-AllzeitBereit.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-practitioner-epr)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-practitioner-epr.csv), [Excel](StructureDefinition-ch-core-practitioner-epr.xlsx), [Schematron](StructureDefinition-ch-core-practitioner-epr.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-practitioner-epr",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr",
  "version" : "6.0.0",
  "name" : "CHCorePractitionerEPR",
  "title" : "CH Core Practitioner EPR",
  "status" : "active",
  "date" : "2025-12-16T07:58:48+00:00",
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
  "description" : "Definition of the Practitioner resource for use in the context of the electronic patient record (EPR).",
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
  "purpose" : "Core practitioner data which can be shared",
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
        "short" : "CH Core Practitioner EPR"
      },
      {
        "id" : "Practitioner.identifier",
        "path" : "Practitioner.identifier",
        "min" : 1
      },
      {
        "id" : "Practitioner.identifier:GLN",
        "path" : "Practitioner.identifier",
        "sliceName" : "GLN",
        "min" : 1
      },
      {
        "id" : "Practitioner.name",
        "path" : "Practitioner.name",
        "min" : 1
      }
    ]
  }
}

```
