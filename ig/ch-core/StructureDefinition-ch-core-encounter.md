# CH Core Encounter - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Encounter**

## Resource Profile: CH Core Encounter 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreEncounter |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the Encounter resource for use in Swiss specific use cases. 

 
Core patient demographics which can be shared 

**Usages:**

* Use this Profile: [CH Core Document](StructureDefinition-ch-core-document.md)
* Refer to this Profile: [CH Core Composition](StructureDefinition-ch-core-composition.md), [CH Core DocumentReference](StructureDefinition-ch-core-documentreference.md), [CH Core Encounter](StructureDefinition-ch-core-encounter.md), [CH Core EPR-Consent](StructureDefinition-ch-core-epr-consent.md)...Show 2 more,[CH Core Immunization](StructureDefinition-ch-core-immunization.md)and[CH Core ServiceRequest](StructureDefinition-ch-core-servicerequest.md)
* Examples for this Profile: [Encounter/EncounterAccidentBroennimann](Encounter-EncounterAccidentBroennimann.md) and [Encounter/EncounterAmbulantBroennimann](Encounter-EncounterAmbulantBroennimann.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-encounter)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-encounter.csv), [Excel](StructureDefinition-ch-core-encounter.xlsx), [Schematron](StructureDefinition-ch-core-encounter.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-encounter",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter",
  "version" : "6.0.0",
  "name" : "CHCoreEncounter",
  "title" : "CH Core Encounter",
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
  "description" : "Base definition of the Encounter resource for use in Swiss specific use cases.",
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
  "purpose" : "Core patient demographics which can be shared",
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
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Encounter",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Encounter",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Encounter",
        "path" : "Encounter",
        "short" : "CH Core Encounter",
        "definition" : "This is basic constraint on Encounter for use in CH Core resources."
      },
      {
        "id" : "Encounter.identifier",
        "path" : "Encounter.identifier",
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
        "id" : "Encounter.identifier:VisitNumber",
        "path" : "Encounter.identifier",
        "sliceName" : "VisitNumber",
        "short" : "Visit number (Fallnummer)",
        "min" : 0,
        "max" : "*",
        "patternIdentifier" : {
          "type" : {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                "code" : "VN"
              }
            ]
          }
        }
      },
      {
        "id" : "Encounter.identifier:VisitNumber.system",
        "path" : "Encounter.identifier.system",
        "min" : 1
      },
      {
        "id" : "Encounter.identifier:VisitNumber.value",
        "path" : "Encounter.identifier.value",
        "min" : 1
      },
      {
        "id" : "Encounter.class",
        "path" : "Encounter.class",
        "short" : "AMB | IMP : See mapping from BFS Medizinische Statistik BFS Encounter Class to FHIR",
        "definition" : "See mapping from BFS Medizinische Statistik [BFS Encounter Class to FHIR mapping](http://fhir.ch/ig/ch-term/ConceptMap-bfs-encounter-class-to-fhir.html)"
      },
      {
        "id" : "Encounter.priority",
        "path" : "Encounter.priority",
        "short" : "BFS Medizinische Statistik - Eintrittsart / Mode d’admission / Genere di ricovero",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-18-admittype"
        }
      },
      {
        "id" : "Encounter.subject",
        "path" : "Encounter.subject",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://hl7.org/fhir/StructureDefinition/Group"
            ]
          }
        ]
      },
      {
        "id" : "Encounter.participant.type",
        "path" : "Encounter.participant.type",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/ch-core-encounter-participation-type"
        }
      },
      {
        "id" : "Encounter.participant.individual",
        "path" : "Encounter.participant.individual",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Encounter.hospitalization.extension",
        "path" : "Encounter.hospitalization.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Encounter.hospitalization.extension:BfsAdmitRole",
        "path" : "Encounter.hospitalization.extension",
        "sliceName" : "BfsAdmitRole",
        "short" : "BFS Medizinische Statistik - Einweisende Instanz",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-admitrole"
            ]
          }
        ]
      },
      {
        "id" : "Encounter.hospitalization.extension:accident",
        "path" : "Encounter.hospitalization.extension",
        "sliceName" : "accident",
        "short" : "Flag if hospitalization was due to an accident",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-accident"
            ]
          }
        ]
      },
      {
        "id" : "Encounter.hospitalization.extension:readmission",
        "path" : "Encounter.hospitalization.extension",
        "sliceName" : "readmission",
        "short" : "Flag to indicate if it is a suspected readmission",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-encounter-susp-readmission"
            ]
          }
        ]
      },
      {
        "id" : "Encounter.hospitalization.extension:BfsDischargeDecision",
        "path" : "Encounter.hospitalization.extension",
        "sliceName" : "BfsDischargeDecision",
        "short" : "BFS Medizinische Statistik - Entscheid für Austritt",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-dischargedecision"
            ]
          }
        ]
      },
      {
        "id" : "Encounter.hospitalization.extension:BfsDischargeDestination",
        "path" : "Encounter.hospitalization.extension",
        "sliceName" : "BfsDischargeDestination",
        "short" : "BFS Medizinische Statistik - Aufenthalt nach Austritt",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-dischargedestination"
            ]
          }
        ]
      },
      {
        "id" : "Encounter.hospitalization.origin",
        "path" : "Encounter.hospitalization.origin",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-location",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "Encounter.hospitalization.admitSource",
        "path" : "Encounter.hospitalization.admitSource",
        "short" : "BFS Medizinische Statistik - Aufenthaltsort vor dem Eintritt / Séjour avant l’admission / Luogo di soggiorno prima dell’ammissione",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-17-admitsource"
        }
      },
      {
        "id" : "Encounter.hospitalization.destination",
        "path" : "Encounter.hospitalization.destination",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-location",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "Encounter.hospitalization.dischargeDisposition",
        "path" : "Encounter.hospitalization.dischargeDisposition",
        "short" : "BFS Medizinische Statistik - Behandlung nach Austritt",
        "binding" : {
          "strength" : "preferred",
          "description" : "BFS Medizinische Statistik - Behandlung nach Austritt",
          "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-29-dischargeencounter"
        }
      },
      {
        "id" : "Encounter.location.location",
        "path" : "Encounter.location.location",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-location"
            ]
          }
        ]
      },
      {
        "id" : "Encounter.serviceProvider",
        "path" : "Encounter.serviceProvider",
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
        "id" : "Encounter.partOf",
        "path" : "Encounter.partOf",
        "type" : [
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-hierarchy",
                "valueBoolean" : true
              }
            ],
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter"
            ]
          }
        ]
      }
    ]
  }
}

```
