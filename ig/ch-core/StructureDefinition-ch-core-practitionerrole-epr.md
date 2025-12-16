# CH Core PractitionerRole EPR - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core PractitionerRole EPR**

## Resource Profile: CH Core PractitionerRole EPR 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCorePractitionerRoleEpr |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the PractitionerRole resource for use in the context of the electronic patient record (EPR). 

 
Core PractitionerRole EPR data which can be shared 

**Usages:**

* Refer to this Profile: [CH Core Composition EPR](StructureDefinition-ch-core-composition-epr.md)
* Examples for this Profile: [PractitionerRole/HPWengerRole](PractitionerRole-HPWengerRole.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-practitionerrole-epr)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-practitionerrole-epr.csv), [Excel](StructureDefinition-ch-core-practitionerrole-epr.xlsx), [Schematron](StructureDefinition-ch-core-practitionerrole-epr.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-practitionerrole-epr",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr",
  "version" : "6.0.0",
  "name" : "CHCorePractitionerRoleEpr",
  "title" : "CH Core PractitionerRole EPR",
  "status" : "active",
  "date" : "2025-12-16T08:02:49+00:00",
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
  "description" : "Definition of the PractitionerRole resource for use in the context of the electronic patient record (EPR).",
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
  "purpose" : "Core PractitionerRole EPR data which can be shared",
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
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "PractitionerRole",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "PractitionerRole",
        "path" : "PractitionerRole"
      },
      {
        "id" : "PractitionerRole.practitioner",
        "path" : "PractitionerRole.practitioner",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr"
            ]
          }
        ]
      },
      {
        "id" : "PractitionerRole.organization",
        "path" : "PractitionerRole.organization",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"
            ]
          }
        ]
      },
      {
        "id" : "PractitionerRole.code",
        "path" : "PractitionerRole.code",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcProfession"
        }
      },
      {
        "id" : "PractitionerRole.specialty",
        "path" : "PractitionerRole.specialty",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcSpecialisation"
        }
      }
    ]
  }
}

```
