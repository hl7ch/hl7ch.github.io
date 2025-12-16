# CH ORF Episode of Care - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Episode of Care**

## Resource Profile: CH ORF Episode of Care 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-episodeofcare | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfEpisodeOfCare |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile to document the antecedent episode of care e.g hospitalisation in case of care transfer between instituitons e.g. hospitals, rehab. clinics, retirement homes etc. 

**Usages:**

* Refer to this Profile: [CH ORF Episode of Care](StructureDefinition-ch-orf-antecedentepisodeofcare.md)
* Examples for this Profile: [EpisodeOfCare/ChOrfEpisodeOfCareSUfferer](EpisodeOfCare-ChOrfEpisodeOfCareSUfferer.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-episodeofcare)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-episodeofcare.csv), [Excel](StructureDefinition-ch-orf-episodeofcare.xlsx), [Schematron](StructureDefinition-ch-orf-episodeofcare.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-episodeofcare",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-episodeofcare",
  "version" : "3.0.2",
  "name" : "ChOrfEpisodeOfCare",
  "title" : "CH ORF Episode of Care",
  "status" : "active",
  "date" : "2025-12-16T09:36:47+00:00",
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
    }
  ],
  "description" : "Profile to document the antecedent episode of  care e.g hospitalisation in case of care transfer between instituitons e.g. hospitals, rehab. clinics, retirement homes etc.",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "EpisodeOfCare",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/EpisodeOfCare",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "EpisodeOfCare",
        "path" : "EpisodeOfCare",
        "short" : "CH ORF EpisodeOfCare"
      },
      {
        "id" : "EpisodeOfCare.status",
        "path" : "EpisodeOfCare.status",
        "mustSupport" : true
      },
      {
        "id" : "EpisodeOfCare.statusHistory",
        "path" : "EpisodeOfCare.statusHistory",
        "mustSupport" : true
      },
      {
        "id" : "EpisodeOfCare.statusHistory.status",
        "path" : "EpisodeOfCare.statusHistory.status",
        "mustSupport" : true
      },
      {
        "id" : "EpisodeOfCare.statusHistory.period",
        "path" : "EpisodeOfCare.statusHistory.period",
        "mustSupport" : true
      },
      {
        "id" : "EpisodeOfCare.statusHistory.period.start",
        "path" : "EpisodeOfCare.statusHistory.period.start",
        "mustSupport" : true
      },
      {
        "id" : "EpisodeOfCare.statusHistory.period.end",
        "path" : "EpisodeOfCare.statusHistory.period.end",
        "mustSupport" : true
      },
      {
        "id" : "EpisodeOfCare.managingOrganization",
        "path" : "EpisodeOfCare.managingOrganization",
        "mustSupport" : true
      }
    ]
  }
}

```
