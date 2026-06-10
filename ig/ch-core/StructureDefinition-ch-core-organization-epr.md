# CH Core Organization EPR - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Organization EPR**

## Resource Profile: CH Core Organization EPR 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr | *Version*:7.0.0-ballot |
| Active as of 2026-06-10 | *Computable Name*:CHCoreOrganizationEPR |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the Organization resource for use in the context of the electronic patient record (EPR). 

**Usages:**

* Refer to this Profile: [CH Core Composition EPR](StructureDefinition-ch-core-composition-epr.md) and [CH Core PractitionerRole EPR](StructureDefinition-ch-core-practitionerrole-epr.md)
* Examples for this Profile: [Gruppenpraxis CH](Organization-GruppenpraxisCH.md), [Physiotherapie CH](Organization-PhysiotherapieCH.md), [RoDiag Radiologieinstitut](Organization-Radiologieinstitut.md) and [Spital Seeblick](Organization-SpitalSeeblick.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-core|current/StructureDefinition/StructureDefinition-ch-core-organization-epr.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-organization-epr.csv), [Excel](StructureDefinition-ch-core-organization-epr.xlsx), [Schematron](StructureDefinition-ch-core-organization-epr.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-organization-epr",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr",
  "version" : "7.0.0-ballot",
  "name" : "CHCoreOrganizationEPR",
  "title" : "CH Core Organization EPR",
  "status" : "active",
  "date" : "2026-06-10T15:05:01+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "Definition of the Organization resource for use in the context of the electronic patient record (EPR).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "eCH",
    "uri" : "https://www.ech.ch/",
    "name" : "eCH Standards"
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Organization",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Organization",
      "path" : "Organization",
      "short" : "CH Core Organization EPR"
    },
    {
      "id" : "Organization.type",
      "path" : "Organization.type",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.healthcareFacilityTypeCode"
      }
    },
    {
      "id" : "Organization.address",
      "path" : "Organization.address",
      "max" : "1"
    }]
  }
}

```
