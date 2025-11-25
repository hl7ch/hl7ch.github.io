# CH ELM PractitionerRole: Orderer - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM PractitionerRole: Orderer**

## Resource Profile: CH ELM PractitionerRole: Orderer 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitionerrole-orderer | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmPractitionerRoleOrderer |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the PractitionerRole resource for the orderer: 
* orderer organization and/or practitioner must be present
* a postalCode and city must be present from organization and/or practitioner
 

**Usages:**

* Use this Profile: [CH ELM Document: Laboratory Report](StructureDefinition-ch-elm-document.md)
* Refer to this Profile: [CH ELM ServiceRequest: Laboratory Order](StructureDefinition-ch-elm-servicerequest-laboratory-order.md) and [CH ELM ServiceRequest: Laboratory Order](StructureDefinition-ch-elm-servicerequest-previous-laboratory-order.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-practitionerrole-orderer)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-practitionerrole-orderer.csv), [Excel](StructureDefinition-ch-elm-practitionerrole-orderer.xlsx), [Schematron](StructureDefinition-ch-elm-practitionerrole-orderer.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-practitionerrole-orderer",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/PractitionerRole-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitionerrole-orderer",
  "version" : "1.13.0",
  "name" : "ChElmPractitionerRoleOrderer",
  "title" : "CH ELM PractitionerRole: Orderer",
  "status" : "active",
  "date" : "2025-11-25T09:47:06+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "This profile constrains the PractitionerRole resource for the orderer: \n- orderer organization and/or practitioner must be present\n- a postalCode and city must be present from organization and/or practitioner",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-practitionerrole",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "PractitionerRole",
        "path" : "PractitionerRole",
        "short" : "CH ELM PractitionerRole: Orderer",
        "constraint" : [
          {
            "key" : "ch-elm-practrole",
            "severity" : "error",
            "human" : "Must have at least a practitioner or an organization. Practitioner or organization must have at least a postalCode and a city defined.",
            "expression" : "(practitioner.exists() and practitioner.resolve().address.city.exists() and practitioner.resolve().address.postalCode.exists()) or (organization.exists() and organization.resolve().address.city.exists() and organization.resolve().address.postalCode.exists())",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitionerrole-orderer"
          },
          {
            "key" : "ch-elm-practrole-organizaton-name-exists",
            "severity" : "error",
            "human" : "Must provide an organization name in case there is no practitioner.",
            "expression" : "practitioner.exists().not() implies (organization.exists() and organization.resolve().name.exists())",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitionerrole-orderer"
          }
        ]
      },
      {
        "id" : "PractitionerRole.practitioner",
        "path" : "PractitionerRole.practitioner",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitioner-orderer"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "PractitionerRole.organization",
        "path" : "PractitionerRole.organization",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-orderer"
            ]
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
