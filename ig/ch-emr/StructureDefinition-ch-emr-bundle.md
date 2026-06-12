# CH Emergency Record Bundle - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Emergency Record Bundle**

## Resource Profile: CH Emergency Record Bundle 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-bundle | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChEmrDocument |
| **Copyright/Legal**: CC0-1.0 | |

 
Bundle profile for Emergency Record. 

**Usages:**

* Examples for this Profile: [Bundle/EX-Bundle](Bundle-EX-Bundle.md), [Bundle/UC1-Bundle-emr-MusterMax](Bundle-UC1-Bundle-emr-MusterMax.md), [Bundle/UC2-Bundle-emr-WalterSchmid](Bundle-UC2-Bundle-emr-WalterSchmid.md), [Bundle/UC3-Bundle-emr-LaraKeller](Bundle-UC3-Bundle-emr-LaraKeller.md)... Show 2 more, [Bundle/UC4-Bundle-emr-BeatFrei](Bundle-UC4-Bundle-emr-BeatFrei.md) and [Bundle/UC5-Bundle-emr-AnnaMeier](Bundle-UC5-Bundle-emr-AnnaMeier.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-emr|current/StructureDefinition/StructureDefinition-ch-emr-bundle.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emr-bundle.csv), [Excel](StructureDefinition-ch-emr-bundle.xlsx), [Schematron](StructureDefinition-ch-emr-bundle.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emr-bundle",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
    "valueCanonical" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Bundle-uv-ips"
  }],
  "url" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-bundle",
  "version" : "1.0.0-ballot",
  "name" : "ChEmrDocument",
  "title" : "CH Emergency Record Bundle",
  "status" : "active",
  "date" : "2026-06-12T17:22:41+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "Bundle profile for Emergency Record.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-document",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Bundle",
      "path" : "Bundle"
    },
    {
      "id" : "Bundle.entry:Composition",
      "path" : "Bundle.entry",
      "sliceName" : "Composition"
    },
    {
      "id" : "Bundle.entry:Composition.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Composition",
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition"]
      }]
    },
    {
      "id" : "Bundle.entry:Patient",
      "path" : "Bundle.entry",
      "sliceName" : "Patient"
    },
    {
      "id" : "Bundle.entry:Patient.resource.communication.language",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:populate-if-known"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Creator"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      },
      {
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:handle"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Consumer"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      },
      {
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHOULD:display"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Consumer"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "Bundle.entry.resource.communication.language",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:RelatedPerson",
      "path" : "Bundle.entry",
      "sliceName" : "RelatedPerson"
    },
    {
      "id" : "Bundle.entry:RelatedPerson.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "RelatedPerson",
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"]
      }]
    }]
  }
}

```
