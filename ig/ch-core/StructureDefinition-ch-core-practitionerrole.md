# CH Core PractitionerRole - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core PractitionerRole**

## Resource Profile: CH Core PractitionerRole 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCorePractitionerRole |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the PractitionerRole resource for use in Swiss specific use cases. 

 
Core PractitionerRole data which can be shared 

**Usages:**

* Derived from this Profile: [CH Core PractitionerRole EPR](StructureDefinition-ch-core-practitionerrole-epr.md)
* Use this Profile: [CH Core Document](StructureDefinition-ch-core-document.md)
* Refer to this Profile: [CH Core AllergyIntolerance](StructureDefinition-ch-core-allergyintolerance.md), [CH Core Claim](StructureDefinition-ch-core-claim.md), [CH Core Composition](StructureDefinition-ch-core-composition.md), [CH Core Condition](StructureDefinition-ch-core-condition.md)...Show 13 more,[CH Core DocumentReference](StructureDefinition-ch-core-documentreference.md),[CH Core Encounter](StructureDefinition-ch-core-encounter.md),[CH Core EPR-Consent](StructureDefinition-ch-core-epr-consent.md),[CH Core Immunization](StructureDefinition-ch-core-immunization.md),[CH Core MedicationAdministration](StructureDefinition-ch-core-medicationadministration.md),[CH Core MedicationDispense](StructureDefinition-ch-core-medicationdispense.md),[CH Core MedicationRequest](StructureDefinition-ch-core-medicationrequest.md),[CH Core MedicationStatement](StructureDefinition-ch-core-medicationstatement.md),[CH Core ServiceRequest](StructureDefinition-ch-core-servicerequest.md),[Author of the content](StructureDefinition-ch-ext-author.md),[Biller](StructureDefinition-ch-ext-biller.md),[EPR Data Enterer](StructureDefinition-ch-ext-epr-dataenterer.md)and[Responsible](StructureDefinition-ch-ext-responsible.md)
* Examples for this Profile: [PractitionerRole/ImmunizationPractitionerRoleExample](PractitionerRole-ImmunizationPractitionerRoleExample.md) and [PractitionerRole/SchreibKraftAtGruppenpraxisCH](PractitionerRole-SchreibKraftAtGruppenpraxisCH.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-practitionerrole)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-practitionerrole.csv), [Excel](StructureDefinition-ch-core-practitionerrole.xlsx), [Schematron](StructureDefinition-ch-core-practitionerrole.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-practitionerrole",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
  "version" : "6.0.0",
  "name" : "CHCorePractitionerRole",
  "title" : "CH Core PractitionerRole",
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
  "description" : "Base definition of the PractitionerRole resource for use in Swiss specific use cases.",
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
  "purpose" : "Core PractitionerRole data which can be shared",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/PractitionerRole",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "PractitionerRole",
        "path" : "PractitionerRole",
        "short" : "CH Core PractitionerRole"
      },
      {
        "id" : "PractitionerRole.practitioner",
        "path" : "PractitionerRole.practitioner",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
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
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "PractitionerRole.code",
        "path" : "PractitionerRole.code",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcProfession"
        }
      },
      {
        "id" : "PractitionerRole.specialty",
        "path" : "PractitionerRole.specialty",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcSpecialisation"
        }
      },
      {
        "id" : "PractitionerRole.location",
        "path" : "PractitionerRole.location",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-location"
            ]
          }
        ]
      }
    ]
  }
}

```
