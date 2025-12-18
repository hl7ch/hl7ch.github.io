# CH PIXm Patient Feed - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PIXm Patient Feed**

## Resource Profile: CH PIXm Patient Feed 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-patient-feed | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHPIXmPatientFeed |
| **Copyright/Legal**: CC0-1.0 | |

 
The patient demographics and identifier information which can be provided in the PIXm Feed according to the EPR. The EPR-SPID as an identifier SHALL be added. The birthname can be added with the ISO 21090 qualifier extension. 

**Usages:**

* Examples for this Profile: [Patient/PatientPIXmFeed](Patient-PatientPIXmFeed.md)
* CapabilityStatements using this Profile: [PIXm Patient Identifier Cross-reference Manager (server)](CapabilityStatement-CH.PIXm.Manager.md) and [PIXm Patient Identity Source (client)](CapabilityStatement-CH.PIXm.Source.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-pixm-patient-feed)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-pixm-patient-feed.csv), [Excel](StructureDefinition-ch-pixm-patient-feed.xlsx), [Schematron](StructureDefinition-ch-pixm-patient-feed.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-pixm-patient-feed",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-patient-feed",
  "version" : "5.0.0",
  "name" : "CHPIXmPatientFeed",
  "title" : "CH PIXm Patient Feed",
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
  "description" : "The patient demographics and identifier information which can be provided in the PIXm Feed according to the EPR. The EPR-SPID as an identifier SHALL be added. The birthname can be added with the ISO 21090 qualifier extension.",
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
      "identity" : "eCH",
      "uri" : "http://www.ech.ch/",
      "name" : "eCH-Standards"
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
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pdqm-patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient"
      },
      {
        "id" : "Patient.identifier",
        "path" : "Patient.identifier",
        "min" : 2
      },
      {
        "id" : "Patient.managingOrganization",
        "path" : "Patient.managingOrganization",
        "short" : "Provider organization of the patient",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-feed-organization"
            ]
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
