# CH ORF Requested Encounter - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Requested Encounter**

## Resource Profile: CH ORF Requested Encounter 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-encounter | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfRequestedEncounter |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile to describe which details are represented at the requested encounter for the fulfillment of the service request. These are, for example, the status of the encounter or the class and the desired accomodation during the encounter. 

**Usages:**

* Refer to this Profile: [CH ORF Requested Encounter Details](StructureDefinition-ch-orf-requestedencounterdetails.md)
* Examples for this Profile: [Encounter/EncounterMusterfrau](Encounter-EncounterMusterfrau.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-encounter)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-encounter.csv), [Excel](StructureDefinition-ch-orf-encounter.xlsx), [Schematron](StructureDefinition-ch-orf-encounter.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-encounter",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-encounter",
  "version" : "3.0.2",
  "name" : "ChOrfRequestedEncounter",
  "title" : "CH ORF Requested Encounter",
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
  "description" : "Profile to describe which details are represented at the requested encounter for the fulfillment of the service request. \nThese are, for example, the status of the encounter or the class and the desired accomodation during the encounter.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Encounter",
        "path" : "Encounter",
        "short" : "CH ORF Requested Encounter"
      },
      {
        "id" : "Encounter.extension",
        "path" : "Encounter.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Encounter.extension:desiredAccomodation",
        "path" : "Encounter.extension",
        "sliceName" : "desiredAccomodation",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-desiredaccommodation"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Encounter.status",
        "path" : "Encounter.status",
        "mustSupport" : true
      },
      {
        "id" : "Encounter.class",
        "path" : "Encounter.class",
        "short" : "AMB | IMP | EMER",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-orf/ValueSet/ch-orf-vs-encounterclass"
        }
      },
      {
        "id" : "Encounter.subject",
        "path" : "Encounter.subject",
        "mustSupport" : true
      }
    ]
  }
}

```
