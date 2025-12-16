# CH Core Practitioner - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Practitioner**

## Resource Profile: CH Core Practitioner 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCorePractitioner |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the Practitioner resource for use in Swiss specific use cases. 

 
Core practitioner data which can be shared 

**Usages:**

* Derived from this Profile: [CH Core Practitioner EPR](StructureDefinition-ch-core-practitioner-epr.md)
* Use this Profile: [CH Core Document](StructureDefinition-ch-core-document.md)
* Refer to this Profile: [CH Core AllergyIntolerance](StructureDefinition-ch-core-allergyintolerance.md), [CH Core Claim](StructureDefinition-ch-core-claim.md), [CH Core Composition](StructureDefinition-ch-core-composition.md), [CH Core Condition](StructureDefinition-ch-core-condition.md)...Show 13 more,[CH Core DocumentReference](StructureDefinition-ch-core-documentreference.md),[CH Core Encounter](StructureDefinition-ch-core-encounter.md),[CH Core EPR-Consent](StructureDefinition-ch-core-epr-consent.md),[CH Core Immunization](StructureDefinition-ch-core-immunization.md),[CH Core MedicationAdministration](StructureDefinition-ch-core-medicationadministration.md),[CH Core MedicationDispense](StructureDefinition-ch-core-medicationdispense.md),[CH Core MedicationRequest](StructureDefinition-ch-core-medicationrequest.md),[CH Core MedicationStatement](StructureDefinition-ch-core-medicationstatement.md),[CH Core PractitionerRole](StructureDefinition-ch-core-practitionerrole.md),[CH Core ServiceRequest](StructureDefinition-ch-core-servicerequest.md),[Biller](StructureDefinition-ch-ext-biller.md),[EPR Information Recipient](StructureDefinition-ch-ext-epr-informationrecipient.md)and[Responsible](StructureDefinition-ch-ext-responsible.md)
* Examples for this Profile: [Practitioner/AgparMarc](Practitioner-AgparMarc.md), [Practitioner/AllzeitBereit](Practitioner-AllzeitBereit.md), [Practitioner/HanspeterWengerByBFH](Practitioner-HanspeterWengerByBFH.md), [Practitioner/ImmunizationAuthorExample](Practitioner-ImmunizationAuthorExample.md) and [Practitioner/SchreibKraft](Practitioner-SchreibKraft.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-practitioner)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-practitioner.csv), [Excel](StructureDefinition-ch-core-practitioner.xlsx), [Schematron](StructureDefinition-ch-core-practitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-practitioner",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
  "version" : "6.0.0",
  "name" : "CHCorePractitioner",
  "title" : "CH Core Practitioner",
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
  "description" : "Base definition of the Practitioner resource for use in Swiss specific use cases.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Practitioner",
        "path" : "Practitioner",
        "short" : "CH Core Practitioner",
        "definition" : "The CH Core Practitioner is based upon the core FHIR Practitioner Resource and designed to meet the applicable practitioner demographic data elements in Switzerland. See also https://www.bfs.admin.ch/bfs/de/home/register/personenregister/registerharmonisierung/nomenklaturen.html for further information",
        "constraint" : [
          {
            "key" : "ch-pract-1",
            "severity" : "error",
            "human" : "If a HumanName is provided, at least one HumanName must have a family name.",
            "expression" : "name.where(family.exists()).count()>0 or name.empty()",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
          },
          {
            "key" : "ch-pract-2",
            "severity" : "warning",
            "human" : "gender unknown is currently not used in Switzerland in eCH and the EPR",
            "expression" : "gender.empty() or gender!='unknown'",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
          }
        ]
      },
      {
        "id" : "Practitioner.identifier",
        "path" : "Practitioner.identifier",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Practitioner.identifier:GLN",
        "path" : "Practitioner.identifier",
        "sliceName" : "GLN",
        "short" : "GLN (Global Location Number)",
        "definition" : "See [GLN](http://fhir.ch/ig/ch-term/NamingSystem/gln)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-gln-identifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:oid:2.51.1.3"
        }
      },
      {
        "id" : "Practitioner.identifier:ZSR",
        "path" : "Practitioner.identifier",
        "sliceName" : "ZSR",
        "short" : "ZSR (Zahlstellenregister), RCC (Registre des codes-créanciers), RCC (Registro dei codici creditori)",
        "definition" : "The [ZSR/RCC](http://fhir.ch/ig/ch-term/NamingSystem/zsr) number is issued to self-employed, natural or legal persons (organisations) who can and want to work at the expense of health insurance.",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-zsr-identifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1"
        }
      },
      {
        "id" : "Practitioner.name",
        "path" : "Practitioner.name",
        "type" : [
          {
            "code" : "HumanName",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: nameData"
          }
        ]
      },
      {
        "id" : "Practitioner.telecom",
        "path" : "Practitioner.telecom",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: Contact"
          }
        ]
      },
      {
        "id" : "Practitioner.telecom.system",
        "path" : "Practitioner.telecom.system",
        "min" : 1
      },
      {
        "id" : "Practitioner.telecom.value",
        "path" : "Practitioner.telecom.value",
        "min" : 1
      },
      {
        "id" : "Practitioner.telecom:email",
        "path" : "Practitioner.telecom",
        "sliceName" : "email",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-email"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: email"
          }
        ]
      },
      {
        "id" : "Practitioner.telecom:phone",
        "path" : "Practitioner.telecom",
        "sliceName" : "phone",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-phone"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: phone"
          }
        ]
      },
      {
        "id" : "Practitioner.telecom:internet",
        "path" : "Practitioner.telecom",
        "sliceName" : "internet",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-internet"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: internet"
          }
        ]
      },
      {
        "id" : "Practitioner.address",
        "path" : "Practitioner.address",
        "type" : [
          {
            "code" : "Address",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address"
            ]
          }
        ]
      },
      {
        "id" : "Practitioner.gender",
        "path" : "Practitioner.gender",
        "short" : "male | female | other",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: sex. sexType, BFS-33, see ConceptMap http://fhir.ch/ig/ch-core/ConceptMap/sex-ech11-to-fhir"
          }
        ]
      },
      {
        "id" : "Practitioner.birthDate",
        "path" : "Practitioner.birthDate",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: birthData, BFS-31"
          }
        ]
      },
      {
        "id" : "Practitioner.communication",
        "path" : "Practitioner.communication",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: languageOfCorrespondance: de, fr, it, rm = Rhaeto-Romance, en, other languages ISO 639-1"
          }
        ]
      }
    ]
  }
}

```
