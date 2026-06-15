# CH EMS Encounter - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Encounter**

## Resource Profile: CH EMS Encounter 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-encounter | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsEncounter |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Encounter resource for representing the mission with its details. 

**Usages:**

* Use this Profile: [CH EMS Document](StructureDefinition-ch-ems-document.md)
* Refer to this Profile: [CH EMS AllergyIntolerance](StructureDefinition-ch-ems-allergyintolerance.md), [CH EMS Composition](StructureDefinition-ch-ems-composition.md), [CH EMS MedicationAdministration](StructureDefinition-ch-ems-medicationadministration.md), [CH EMS MedicationStatement](StructureDefinition-ch-ems-medicationstatement.md)... Show 3 more, [CH EMS Observation (Base)](StructureDefinition-ch-ems-observation.md), [CH EMS Procedure (Base)](StructureDefinition-ch-ems-procedure.md) and [CH EMS ServiceRequest](StructureDefinition-ch-ems-servicerequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-encounter.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-encounter.csv), [Excel](StructureDefinition-ch-ems-encounter.xlsx), [Schematron](StructureDefinition-ch-ems-encounter.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-encounter",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-encounter",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsEncounter",
  "title" : "CH EMS Encounter",
  "status" : "active",
  "date" : "2026-06-15T08:07:03+00:00",
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
  "description" : "This profile constrains the Encounter resource for representing the mission with its details.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Encounter",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Encounter",
      "path" : "Encounter",
      "short" : "CH EMS Encounter"
    },
    {
      "id" : "Encounter.extension",
      "path" : "Encounter.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Encounter.extension:valuablesPatient",
      "path" : "Encounter.extension",
      "sliceName" : "valuablesPatient",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-valuablespatient"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Encounter.extension:emergencyDoctorSystem",
      "path" : "Encounter.extension",
      "sliceName" : "emergencyDoctorSystem",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-emergencydoctorsystem"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Encounter.extension:violence",
      "path" : "Encounter.extension",
      "sliceName" : "violence",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-violence"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Encounter.extension:violence.extension:offender",
      "path" : "Encounter.extension.extension",
      "sliceName" : "offender",
      "short" : "Tatperson"
    },
    {
      "id" : "Encounter.extension:violence.extension:form",
      "path" : "Encounter.extension.extension",
      "sliceName" : "form",
      "short" : "Form der Gewalt"
    },
    {
      "id" : "Encounter.extension:violence.extension:result",
      "path" : "Encounter.extension.extension",
      "sliceName" : "result",
      "short" : "Folge der Gewalt"
    },
    {
      "id" : "Encounter.identifier",
      "path" : "Encounter.identifier",
      "min" : 1
    },
    {
      "id" : "Encounter.identifier:missionNumber",
      "path" : "Encounter.identifier",
      "sliceName" : "missionNumber",
      "short" : "Mission number (Einsatznummer)",
      "min" : 1,
      "max" : "1",
      "patternIdentifier" : {
        "type" : {
          "coding" : [{
            "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
            "code" : "MN"
          }]
        }
      },
      "mustSupport" : true
    },
    {
      "id" : "Encounter.identifier:missionNumber.system",
      "path" : "Encounter.identifier.system",
      "short" : "OID of organization (intermediate care (IMC))",
      "min" : 1
    },
    {
      "id" : "Encounter.identifier:missionNumber.value",
      "path" : "Encounter.identifier.value",
      "short" : "Mission number intermediate care (IMC)",
      "min" : 1
    },
    {
      "id" : "Encounter.serviceType",
      "path" : "Encounter.serviceType",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-missionType"
      }
    },
    {
      "id" : "Encounter.priority",
      "path" : "Encounter.priority",
      "short" : "Urgency of the mission",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-urgency"
      }
    },
    {
      "id" : "Encounter.priority.extension:urgencyAdequate",
      "path" : "Encounter.priority.extension",
      "sliceName" : "urgencyAdequate",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-urgencyadequate"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Encounter.subject",
      "path" : "Encounter.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Encounter.subject.reference",
      "path" : "Encounter.subject.reference",
      "min" : 1
    },
    {
      "id" : "Encounter.basedOn",
      "path" : "Encounter.basedOn",
      "short" : "Requesting organisation (intermediate care (IMC))",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-servicerequest"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Encounter.basedOn.reference",
      "path" : "Encounter.basedOn.reference",
      "min" : 1
    },
    {
      "id" : "Encounter.participant",
      "path" : "Encounter.participant",
      "short" : "Team"
    },
    {
      "id" : "Encounter.participant.extension",
      "path" : "Encounter.participant.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Encounter.participant.extension:teamRole",
      "path" : "Encounter.participant.extension",
      "sliceName" : "teamRole",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-teamrole"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Encounter.participant.individual",
      "path" : "Encounter.participant.individual",
      "short" : "Team member",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitioner"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Encounter.participant.individual.reference",
      "path" : "Encounter.participant.individual.reference",
      "min" : 1
    },
    {
      "id" : "Encounter.period",
      "path" : "Encounter.period",
      "short" : "The date (and time) of the mission",
      "min" : 1
    },
    {
      "id" : "Encounter.period.start",
      "path" : "Encounter.period.start",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Encounter.reasonCode",
      "path" : "Encounter.reasonCode",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-transReason"
      }
    },
    {
      "id" : "Encounter.hospitalization",
      "path" : "Encounter.hospitalization",
      "short" : "Destination of the mission"
    },
    {
      "id" : "Encounter.hospitalization.destination",
      "path" : "Encounter.hospitalization.destination",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-location-locationdestination"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Encounter.hospitalization.destination.reference",
      "path" : "Encounter.hospitalization.destination.reference",
      "min" : 1
    },
    {
      "id" : "Encounter.location",
      "path" : "Encounter.location",
      "short" : "Location of mission",
      "max" : "1"
    },
    {
      "id" : "Encounter.location.location",
      "path" : "Encounter.location.location",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-location-locationdestination"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Encounter.location.location.reference",
      "path" : "Encounter.location.location.reference",
      "min" : 1
    }]
  }
}

```
