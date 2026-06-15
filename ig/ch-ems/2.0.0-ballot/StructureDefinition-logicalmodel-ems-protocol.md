# EMS Protocol - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMS Protocol**

## Logical Model: EMS Protocol 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:LogicalModelEmsProtocol |
| **Copyright/Legal**: CC0-1.0 | |

 
The logical model represents the Emergency Medical Service protocol as an abstract data model. The data elements defined in this model are mapped to the FHIR document structure. 

**Usages:**

* This Logical Model is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-logicalmodel-ems-protocol.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-logicalmodel-ems-protocol.csv), [Excel](StructureDefinition-logicalmodel-ems-protocol.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "logicalmodel-ems-protocol",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
  "version" : "2.0.0-ballot",
  "name" : "LogicalModelEmsProtocol",
  "title" : "EMS Protocol",
  "status" : "active",
  "date" : "2026-06-15T08:00:21+00:00",
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
  "description" : "The logical model represents the Emergency Medical Service protocol as an abstract data model. The data elements defined in this model are mapped to the FHIR document structure.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "http://fhir.ch/ig/ch-ems/StructureDefinition/EMSProtocol",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "EMSProtocol",
      "path" : "EMSProtocol",
      "short" : "Einsatzprotokoll für Rettungsdienste",
      "definition" : "The logical model represents the Emergency Medical Service protocol as an abstract data model. The data elements defined in this model are mapped to the FHIR document structure."
    },
    {
      "id" : "EMSProtocol.mission",
      "path" : "EMSProtocol.mission",
      "short" : "Einsatz",
      "definition" : "Einsatz",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.mission.date",
      "path" : "EMSProtocol.mission.date",
      "short" : "Einsatzdatum",
      "definition" : "Einsatzdatum",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "date"
      }]
    },
    {
      "id" : "EMSProtocol.mission.number",
      "path" : "EMSProtocol.mission.number",
      "short" : "Einsatznummer SNZ (Sanitätsnotrufzentrale)",
      "definition" : "Einsatznummer SNZ (Sanitätsnotrufzentrale)",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "EMSProtocol.mission.type",
      "path" : "EMSProtocol.mission.type",
      "short" : "Einsatzart",
      "definition" : "Einsatzart",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-missionType"
      }
    },
    {
      "id" : "EMSProtocol.mission.transportReason",
      "path" : "EMSProtocol.mission.transportReason",
      "short" : "Transportgrund",
      "definition" : "Transportgrund",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-transReason"
      }
    },
    {
      "id" : "EMSProtocol.mission.urgency",
      "path" : "EMSProtocol.mission.urgency",
      "short" : "Dringlichkeit",
      "definition" : "Dringlichkeit",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-urgency"
      }
    },
    {
      "id" : "EMSProtocol.mission.urgency.adequacy",
      "path" : "EMSProtocol.mission.urgency.adequacy",
      "short" : "Angemessenheit der Dringlichkeit",
      "definition" : "Angemessenheit der Dringlichkeit",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-urgency-adequate"
      }
    },
    {
      "id" : "EMSProtocol.mission.requestingOrganisation",
      "path" : "EMSProtocol.mission.requestingOrganisation",
      "short" : "Aufbietende Organisation",
      "definition" : "Aufbietende Organisation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.mission.requestingOrganisation.name",
      "path" : "EMSProtocol.mission.requestingOrganisation.name",
      "short" : "Name",
      "definition" : "Name",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.mission.requestingOrganisation.gln",
      "path" : "EMSProtocol.mission.requestingOrganisation.gln",
      "short" : "GLN (Global Location Number)",
      "definition" : "GLN (Global Location Number)",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "EMSProtocol.mission.respondingOrganisation",
      "path" : "EMSProtocol.mission.respondingOrganisation",
      "short" : "Aufgebotene Organisation",
      "definition" : "Aufgebotene Organisation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.mission.respondingOrganisation.name",
      "path" : "EMSProtocol.mission.respondingOrganisation.name",
      "short" : "Name",
      "definition" : "Name",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.mission.respondingOrganisation.gln",
      "path" : "EMSProtocol.mission.respondingOrganisation.gln",
      "short" : "GLN (Global Location Number)",
      "definition" : "GLN (Global Location Number)",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "EMSProtocol.mission.respondingOrganisation.team",
      "path" : "EMSProtocol.mission.respondingOrganisation.team",
      "short" : "Einsatzteam",
      "definition" : "Einsatzteam",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.mission.respondingOrganisation.team.name",
      "path" : "EMSProtocol.mission.respondingOrganisation.team.name",
      "short" : "Name",
      "definition" : "Name",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.mission.respondingOrganisation.team.gln",
      "path" : "EMSProtocol.mission.respondingOrganisation.team.gln",
      "short" : "GLN (Global Location Number) der aufgebotenen Organisation",
      "definition" : "GLN (Global Location Number) der aufgebotenen Organisation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "EMSProtocol.mission.respondingOrganisation.team.member",
      "path" : "EMSProtocol.mission.respondingOrganisation.team.member",
      "short" : "Teammitglied",
      "definition" : "Teammitglied",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.mission.respondingOrganisation.team.member.role",
      "path" : "EMSProtocol.mission.respondingOrganisation.team.member.role",
      "short" : "Rolle",
      "definition" : "Rolle",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-teamRole"
      }
    },
    {
      "id" : "EMSProtocol.mission.respondingOrganisation.team.member.name",
      "path" : "EMSProtocol.mission.respondingOrganisation.team.member.name",
      "short" : "Name",
      "definition" : "Name",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "HumanName"
      }]
    },
    {
      "id" : "EMSProtocol.mission.respondingOrganisation.team.member.name.firstName",
      "path" : "EMSProtocol.mission.respondingOrganisation.team.member.name.firstName",
      "short" : "Vorname",
      "definition" : "Vorname",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.mission.respondingOrganisation.team.member.name.lastName",
      "path" : "EMSProtocol.mission.respondingOrganisation.team.member.name.lastName",
      "short" : "Nachname",
      "definition" : "Nachname",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.mission.respondingOrganisation.team.member.gln",
      "path" : "EMSProtocol.mission.respondingOrganisation.team.member.gln",
      "short" : "Persönliche GLN (Global Location Number)",
      "definition" : "Persönliche GLN (Global Location Number)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "EMSProtocol.mission.respondingOrganisation.team.member.formation",
      "path" : "EMSProtocol.mission.respondingOrganisation.team.member.formation",
      "short" : "Ausbildung",
      "definition" : "Ausbildung",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-formation"
      }
    },
    {
      "id" : "EMSProtocol.mission.location",
      "path" : "EMSProtocol.mission.location",
      "short" : "Einsatzort",
      "definition" : "Einsatzort",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.mission.location.address",
      "path" : "EMSProtocol.mission.location.address",
      "short" : "Adresse",
      "definition" : "Adresse",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "EMSProtocol.mission.location.address.street",
      "path" : "EMSProtocol.mission.location.address.street",
      "short" : "Strasse",
      "definition" : "Strasse",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.mission.location.address.zipCode",
      "path" : "EMSProtocol.mission.location.address.zipCode",
      "short" : "PLZ",
      "definition" : "PLZ",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.mission.location.address.city",
      "path" : "EMSProtocol.mission.location.address.city",
      "short" : "Ort",
      "definition" : "Ort",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.mission.location.position",
      "path" : "EMSProtocol.mission.location.position",
      "short" : "Koordinaten",
      "definition" : "Koordinaten",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.mission.location.position.longitude",
      "path" : "EMSProtocol.mission.location.position.longitude",
      "short" : "Längengrad",
      "definition" : "Längengrad",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "decimal"
      }]
    },
    {
      "id" : "EMSProtocol.mission.location.position.latitude",
      "path" : "EMSProtocol.mission.location.position.latitude",
      "short" : "Breitengrad",
      "definition" : "Breitengrad",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "decimal"
      }]
    },
    {
      "id" : "EMSProtocol.mission.location.name",
      "path" : "EMSProtocol.mission.location.name",
      "short" : "Ortsname",
      "definition" : "Ortsname",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.mission.location.type",
      "path" : "EMSProtocol.mission.location.type",
      "short" : "Ortstyp",
      "definition" : "Ortstyp",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-locationType"
      }
    },
    {
      "id" : "EMSProtocol.mission.destination",
      "path" : "EMSProtocol.mission.destination",
      "short" : "Zielort",
      "definition" : "Zielort",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.mission.destination.address",
      "path" : "EMSProtocol.mission.destination.address",
      "short" : "Adresse",
      "definition" : "Adresse",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "EMSProtocol.mission.destination.address.street",
      "path" : "EMSProtocol.mission.destination.address.street",
      "short" : "Strasse",
      "definition" : "Strasse",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.mission.destination.address.zipCode",
      "path" : "EMSProtocol.mission.destination.address.zipCode",
      "short" : "PLZ",
      "definition" : "PLZ",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.mission.destination.address.city",
      "path" : "EMSProtocol.mission.destination.address.city",
      "short" : "Ort",
      "definition" : "Ort",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.mission.destination.position",
      "path" : "EMSProtocol.mission.destination.position",
      "short" : "Koordinaten",
      "definition" : "Koordinaten",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.mission.destination.position.longitude",
      "path" : "EMSProtocol.mission.destination.position.longitude",
      "short" : "Längengrad",
      "definition" : "Längengrad",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "decimal"
      }]
    },
    {
      "id" : "EMSProtocol.mission.destination.position.latitude",
      "path" : "EMSProtocol.mission.destination.position.latitude",
      "short" : "Breitengrad",
      "definition" : "Breitengrad",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "decimal"
      }]
    },
    {
      "id" : "EMSProtocol.mission.destination.name",
      "path" : "EMSProtocol.mission.destination.name",
      "short" : "Ortsname",
      "definition" : "Ortsname",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.mission.destination.type",
      "path" : "EMSProtocol.mission.destination.type",
      "short" : "Ortstyp",
      "definition" : "Ortstyp",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-locationType"
      }
    },
    {
      "id" : "EMSProtocol.mission.destination.gln",
      "path" : "EMSProtocol.mission.destination.gln",
      "short" : "GLN (Global Location Number)",
      "definition" : "GLN (Global Location Number)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "EMSProtocol.mission.statusTime",
      "path" : "EMSProtocol.mission.statusTime",
      "short" : "Statuszeit",
      "definition" : "Statuszeit",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.mission.statusTime.time",
      "path" : "EMSProtocol.mission.statusTime.time",
      "short" : "Zeitpunkt",
      "definition" : "Zeitpunkt",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "EMSProtocol.mission.statusTime.meaning",
      "path" : "EMSProtocol.mission.statusTime.meaning",
      "short" : "Bedeutung der Statuszeit",
      "definition" : "Bedeutung der Statuszeit",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-missionTimeRole"
      }
    },
    {
      "id" : "EMSProtocol.mission.valuablesPatient",
      "path" : "EMSProtocol.mission.valuablesPatient",
      "short" : "Wertsachen Patient",
      "definition" : "Wertsachen Patient",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-valType"
      }
    },
    {
      "id" : "EMSProtocol.mission.emergencyDoctorSystem",
      "path" : "EMSProtocol.mission.emergencyDoctorSystem",
      "short" : "Notarzt/Notärtzin System",
      "definition" : "Notarzt/Notärtzin System",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-emergDoctSystem"
      }
    },
    {
      "id" : "EMSProtocol.mission.violence",
      "path" : "EMSProtocol.mission.violence",
      "short" : "Gewalt gegen Rettungskräfte",
      "definition" : "Gewalt gegen Rettungskräfte",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.mission.violence.offender",
      "path" : "EMSProtocol.mission.violence.offender",
      "short" : "Tatperson",
      "definition" : "Tatperson",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-offender"
      }
    },
    {
      "id" : "EMSProtocol.mission.violence.form",
      "path" : "EMSProtocol.mission.violence.form",
      "short" : "Form der Gewalt",
      "definition" : "Form der Gewalt",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-violenceForm"
      }
    },
    {
      "id" : "EMSProtocol.mission.violence.result",
      "path" : "EMSProtocol.mission.violence.result",
      "short" : "Folgen der Gewalt",
      "definition" : "Folgen der Gewalt",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-violenceResult"
      }
    },
    {
      "id" : "EMSProtocol.mission.precautionsInfection",
      "path" : "EMSProtocol.mission.precautionsInfection",
      "short" : "Vorsichtsmassnahme für das Personal bei infektiösen Einsätzen/Transporten",
      "definition" : "Vorsichtsmassnahme für das Personal bei infektiösen Einsätzen/Transporten",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-InfectPersPrecaution"
      }
    },
    {
      "id" : "EMSProtocol.mission.transportation",
      "path" : "EMSProtocol.mission.transportation",
      "short" : "Transport",
      "definition" : "Transport",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.mission.transportation.bedding",
      "path" : "EMSProtocol.mission.transportation.bedding",
      "short" : "Lagerung",
      "definition" : "Lagerung",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-bedding"
      }
    },
    {
      "id" : "EMSProtocol.mission.transportation.recoveryAid",
      "path" : "EMSProtocol.mission.transportation.recoveryAid",
      "short" : "Bergungshilfsmittel",
      "definition" : "Bergungshilfsmittel",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-actRecovAid"
      }
    },
    {
      "id" : "EMSProtocol.mission.ambulance",
      "path" : "EMSProtocol.mission.ambulance",
      "short" : "Ambulanz",
      "definition" : "Ambulanz",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.mission.ambulance.type",
      "path" : "EMSProtocol.mission.ambulance.type",
      "short" : "Typ",
      "definition" : "Typ",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-ambulanceType"
      }
    },
    {
      "id" : "EMSProtocol.mission.ambulance.disinfection",
      "path" : "EMSProtocol.mission.ambulance.disinfection",
      "short" : "Desinfektion",
      "definition" : "Desinfektion",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-transDisinfection"
      }
    },
    {
      "id" : "EMSProtocol.mission.device",
      "path" : "EMSProtocol.mission.device",
      "short" : "Hilfsmittel",
      "definition" : "Hilfsmittel",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.mission.device.name",
      "path" : "EMSProtocol.mission.device.name",
      "short" : "Benennung",
      "definition" : "Benennung",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.mission.device.owner",
      "path" : "EMSProtocol.mission.device.owner",
      "short" : "Eigentümer/Eigentümerin",
      "definition" : "Eigentümer/Eigentümerin",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-actRespiOwner"
      }
    },
    {
      "id" : "EMSProtocol.patient",
      "path" : "EMSProtocol.patient",
      "short" : "Patient",
      "definition" : "Patient",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.patient.name",
      "path" : "EMSProtocol.patient.name",
      "short" : "Name",
      "definition" : "Name",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "HumanName"
      }]
    },
    {
      "id" : "EMSProtocol.patient.name.firstName",
      "path" : "EMSProtocol.patient.name.firstName",
      "short" : "Vorname",
      "definition" : "Vorname",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.patient.name.lastName",
      "path" : "EMSProtocol.patient.name.lastName",
      "short" : "Nachname",
      "definition" : "Nachname",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.patient.placeOfOrigin",
      "path" : "EMSProtocol.patient.placeOfOrigin",
      "short" : "Bürgerort",
      "definition" : "Bürgerort",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.patient.citizenship",
      "path" : "EMSProtocol.patient.citizenship",
      "short" : "Nationalität",
      "definition" : "Nationalität",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.patient.birthDate",
      "path" : "EMSProtocol.patient.birthDate",
      "short" : "Geburtsdatum",
      "definition" : "Geburtsdatum",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "date"
      }]
    },
    {
      "id" : "EMSProtocol.patient.gender",
      "path" : "EMSProtocol.patient.gender",
      "short" : "Administratives Geschlecht",
      "definition" : "Administratives Geschlecht",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "binding" : {
        "strength" : "required",
        "description" : "HL7 VS with obligatory values",
        "valueSet" : "http://hl7.org/fhir/ValueSet/administrative-gender"
      }
    },
    {
      "id" : "EMSProtocol.patient.insurance",
      "path" : "EMSProtocol.patient.insurance",
      "short" : "Krankenkasse",
      "definition" : "Krankenkasse",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.patient.insuranceCardNumber",
      "path" : "EMSProtocol.patient.insuranceCardNumber",
      "short" : "VeKa-Nummer (Versichertenkartennummer)",
      "definition" : "VeKa-Nummer (Versichertenkartennummer)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "EMSProtocol.patient.oasiNumber",
      "path" : "EMSProtocol.patient.oasiNumber",
      "short" : "AHV-Nummer",
      "definition" : "AHV-Nummer",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "EMSProtocol.patient.plsId",
      "path" : "EMSProtocol.patient.plsId",
      "short" : "PLS-ID (Patientenleitsystem)",
      "definition" : "PLS-ID (Patientenleitsystem)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "EMSProtocol.patient.identification",
      "path" : "EMSProtocol.patient.identification",
      "short" : "Identifikation des Patienten",
      "definition" : "Identifikation des Patienten",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.patient.identification.medium",
      "path" : "EMSProtocol.patient.identification.medium",
      "short" : "Identifikationsmedium",
      "definition" : "Identifikationsmedium",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-idMedium"
      }
    },
    {
      "id" : "EMSProtocol.patient.identification.source",
      "path" : "EMSProtocol.patient.identification.source",
      "short" : "Identifikationsquelle",
      "definition" : "Identifikationsquelle",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-idSource"
      }
    },
    {
      "id" : "EMSProtocol.patient.address",
      "path" : "EMSProtocol.patient.address",
      "short" : "Adresse",
      "definition" : "Adresse",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "EMSProtocol.patient.address.street",
      "path" : "EMSProtocol.patient.address.street",
      "short" : "Strasse",
      "definition" : "Strasse",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.patient.address.zipCode",
      "path" : "EMSProtocol.patient.address.zipCode",
      "short" : "PLZ",
      "definition" : "PLZ",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.patient.address.city",
      "path" : "EMSProtocol.patient.address.city",
      "short" : "Ort",
      "definition" : "Ort",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.administrative",
      "path" : "EMSProtocol.administrative",
      "short" : "Administrativ",
      "definition" : "Administrativ",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.administrative.involvedParticipant",
      "path" : "EMSProtocol.administrative.involvedParticipant",
      "short" : "Beteiligte Person",
      "definition" : "Beteiligte Person",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.administrative.involvedParticipant.role",
      "path" : "EMSProtocol.administrative.involvedParticipant.role",
      "short" : "Rolle",
      "definition" : "Rolle",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-personRole"
      }
    },
    {
      "id" : "EMSProtocol.administrative.involvedParticipant.name",
      "path" : "EMSProtocol.administrative.involvedParticipant.name",
      "short" : "Name",
      "definition" : "Name",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "HumanName"
      }]
    },
    {
      "id" : "EMSProtocol.administrative.involvedParticipant.name.firstName",
      "path" : "EMSProtocol.administrative.involvedParticipant.name.firstName",
      "short" : "Vorname",
      "definition" : "Vorname",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.administrative.involvedParticipant.name.lastName",
      "path" : "EMSProtocol.administrative.involvedParticipant.name.lastName",
      "short" : "Nachname",
      "definition" : "Nachname",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.pretreatment",
      "path" : "EMSProtocol.pretreatment",
      "short" : "Vorbehandlung",
      "definition" : "Vorbehandlung",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.pretreatment.type",
      "path" : "EMSProtocol.pretreatment.type",
      "short" : "Behandlungart",
      "definition" : "Behandlungart",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-preTreatType"
      }
    },
    {
      "id" : "EMSProtocol.pretreatment.performer",
      "path" : "EMSProtocol.pretreatment.performer",
      "short" : "Vorbehandelnde Person",
      "definition" : "Vorbehandelnde Person",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-preTreatment"
      }
    },
    {
      "id" : "EMSProtocol.anamnesis",
      "path" : "EMSProtocol.anamnesis",
      "short" : "Anamnese",
      "definition" : "Anamnese",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.event",
      "path" : "EMSProtocol.anamnesis.event",
      "short" : "Ereignis",
      "definition" : "Ereignis",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.event.code",
      "path" : "EMSProtocol.anamnesis.event.code",
      "short" : "Ereignis codiert",
      "definition" : "Ereignis codiert",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-event"
      }
    },
    {
      "id" : "EMSProtocol.anamnesis.event.freeText",
      "path" : "EMSProtocol.anamnesis.event.freeText",
      "short" : "Ereignis Freitext",
      "definition" : "Ereignis Freitext",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.symptom",
      "path" : "EMSProtocol.anamnesis.symptom",
      "short" : "Symptom",
      "definition" : "Symptom",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.symptom.code",
      "path" : "EMSProtocol.anamnesis.symptom.code",
      "short" : "Symptom codiert",
      "definition" : "Symptom codiert",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-symptom"
      }
    },
    {
      "id" : "EMSProtocol.anamnesis.symptom.freeText",
      "path" : "EMSProtocol.anamnesis.symptom.freeText",
      "short" : "Symptome Freitext",
      "definition" : "Symptome Freitext",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.allergyIntolerance",
      "path" : "EMSProtocol.anamnesis.allergyIntolerance",
      "short" : "Allergie / Unverträglichkeit",
      "definition" : "Allergie / Unverträglichkeit",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.allergyIntolerance.type",
      "path" : "EMSProtocol.anamnesis.allergyIntolerance.type",
      "short" : "Differenzierung Allergie / Unverträglichkeit (falls bekannt)",
      "definition" : "Differenzierung Allergie / Unverträglichkeit (falls bekannt)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "binding" : {
        "strength" : "required",
        "description" : "HL7 VS with obligatory values",
        "valueSet" : "http://hl7.org/fhir/ValueSet/allergy-intolerance-type"
      }
    },
    {
      "id" : "EMSProtocol.anamnesis.allergyIntolerance.code",
      "path" : "EMSProtocol.anamnesis.allergyIntolerance.code",
      "short" : "Allergy / Unverträglichkeit codiert",
      "definition" : "Allergy / Unverträglichkeit codiert",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "HL7.ch VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceValueSet"
      }
    },
    {
      "id" : "EMSProtocol.anamnesis.medicationStatement",
      "path" : "EMSProtocol.anamnesis.medicationStatement",
      "short" : "Bestehende Medikation",
      "definition" : "Bestehende Medikation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.medicationStatement.medication",
      "path" : "EMSProtocol.anamnesis.medicationStatement.medication",
      "short" : "Medikament",
      "definition" : "Medikament",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.medicationStatement.medication.product",
      "path" : "EMSProtocol.anamnesis.medicationStatement.medication.product",
      "short" : "Präparat",
      "definition" : "Präparat",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.medicationStatement.medication.product.gtin",
      "path" : "EMSProtocol.anamnesis.medicationStatement.medication.product.gtin",
      "short" : "GTIN (Global Trade Item Number (GS1)) für Schweizer Produkte",
      "definition" : "GTIN (Global Trade Item Number (GS1)) für Schweizer Produkte",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Coding"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.medicationStatement.medication.product.atc",
      "path" : "EMSProtocol.anamnesis.medicationStatement.medication.product.atc",
      "short" : "ATC (Anatomical Therapeutic Chemical Classification) für ausländische Produkte",
      "definition" : "ATC (Anatomical Therapeutic Chemical Classification) für ausländische Produkte",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Coding"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.medicationStatement.medication.product.freeText",
      "path" : "EMSProtocol.anamnesis.medicationStatement.medication.product.freeText",
      "short" : "Präparatenname",
      "definition" : "Präparatenname",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.medicationStatement.medication.ingredient",
      "path" : "EMSProtocol.anamnesis.medicationStatement.medication.ingredient",
      "short" : "Wirkstoff",
      "definition" : "Wirkstoff",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "description" : "HL7.ch VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/ActivePharmaceuticalIngredient"
      }
    },
    {
      "id" : "EMSProtocol.anamnesis.medicationStatement.dosePerUnit",
      "path" : "EMSProtocol.anamnesis.medicationStatement.dosePerUnit",
      "short" : "Dosis pro Einheit",
      "definition" : "Dosis pro Einheit",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.medicationStatement.dosage",
      "path" : "EMSProtocol.anamnesis.medicationStatement.dosage",
      "short" : "Dosierung",
      "definition" : "Dosierung",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.medicationStatement.dosage.scheme",
      "path" : "EMSProtocol.anamnesis.medicationStatement.dosage.scheme",
      "short" : "1-1-1-1 Schema",
      "definition" : "1-1-1-1 Schema",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.medicationStatement.dosage.freeText",
      "path" : "EMSProtocol.anamnesis.medicationStatement.dosage.freeText",
      "short" : "Freitext Instruktion",
      "definition" : "Freitext Instruktion",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.medicationStatement.asNeeded",
      "path" : "EMSProtocol.anamnesis.medicationStatement.asNeeded",
      "short" : "Reservemedikation",
      "definition" : "Reservemedikation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }]
    },
    {
      "id" : "EMSProtocol.anamnesis.medicationStatement.reason",
      "path" : "EMSProtocol.anamnesis.medicationStatement.reason",
      "short" : "Behandlungsgrund",
      "definition" : "Behandlungsgrund",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.findings",
      "path" : "EMSProtocol.findings",
      "short" : "Befund",
      "definition" : "Befund",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.findings.time",
      "path" : "EMSProtocol.findings.time",
      "short" : "Zeitpunkt",
      "definition" : "Zeitpunkt",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "EMSProtocol.findings.airway",
      "path" : "EMSProtocol.findings.airway",
      "short" : "A: Atemwege",
      "definition" : "A: Atemwege",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.findings.airway.respiratoryStatus",
      "path" : "EMSProtocol.findings.airway.respiratoryStatus",
      "short" : "Zustand der Atemwege",
      "definition" : "Zustand der Atemwege",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-findingsAirway"
      }
    },
    {
      "id" : "EMSProtocol.findings.breathing",
      "path" : "EMSProtocol.findings.breathing",
      "short" : "B: Atmung",
      "definition" : "B: Atmung",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.findings.breathing.respiratoryFunction",
      "path" : "EMSProtocol.findings.breathing.respiratoryFunction",
      "short" : "Zustand der Atmung",
      "definition" : "Zustand der Atmung",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-respirationObservation"
      }
    },
    {
      "id" : "EMSProtocol.findings.circulation",
      "path" : "EMSProtocol.findings.circulation",
      "short" : "C: Kreislauf",
      "definition" : "C: Kreislauf",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.findings.circulation.cardiacArrest",
      "path" : "EMSProtocol.findings.circulation.cardiacArrest",
      "short" : "Herz-Kreislauf Stillstand",
      "definition" : "Herz-Kreislauf Stillstand",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }]
    },
    {
      "id" : "EMSProtocol.findings.circulation.heartRate",
      "path" : "EMSProtocol.findings.circulation.heartRate",
      "short" : "Herzfrequenz",
      "definition" : "Herzfrequenz",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.findings.circulation.heartRate.rate",
      "path" : "EMSProtocol.findings.circulation.heartRate.rate",
      "short" : "Anzahl Herzschläge pro Minute",
      "definition" : "Anzahl Herzschläge pro Minute",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "EMSProtocol.findings.circulation.heartRate.arrhythmia",
      "path" : "EMSProtocol.findings.circulation.heartRate.arrhythmia",
      "short" : "Arrhythmie",
      "definition" : "Arrhythmie",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-pulesResult"
      }
    },
    {
      "id" : "EMSProtocol.findings.circulation.heartRate.intensity",
      "path" : "EMSProtocol.findings.circulation.heartRate.intensity",
      "short" : "Intensität",
      "definition" : "Intensität",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-intensity"
      }
    },
    {
      "id" : "EMSProtocol.findings.circulation.heartRate.measurementMethod",
      "path" : "EMSProtocol.findings.circulation.heartRate.measurementMethod",
      "short" : "Messmethode",
      "definition" : "Messmethode",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-pulseMethod"
      }
    },
    {
      "id" : "EMSProtocol.findings.circulation.bloodPressure",
      "path" : "EMSProtocol.findings.circulation.bloodPressure",
      "short" : "Blutdruck",
      "definition" : "Blutdruck",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.findings.circulation.bloodPressure.systolic",
      "path" : "EMSProtocol.findings.circulation.bloodPressure.systolic",
      "short" : "Systolischer Blutdruck",
      "definition" : "Systolischer Blutdruck",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "EMSProtocol.findings.circulation.bloodPressure.diastolic",
      "path" : "EMSProtocol.findings.circulation.bloodPressure.diastolic",
      "short" : "Diastolischer Blutdruck",
      "definition" : "Diastolischer Blutdruck",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "EMSProtocol.findings.circulation.bloodPressure.measurementMethod",
      "path" : "EMSProtocol.findings.circulation.bloodPressure.measurementMethod",
      "short" : "Messmethode",
      "definition" : "Messmethode",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-pressureMethod"
      }
    },
    {
      "id" : "EMSProtocol.findings.circulation.bloodPressure.measurementMethod.bodySite",
      "path" : "EMSProtocol.findings.circulation.bloodPressure.measurementMethod.bodySite",
      "short" : "Körperstelle",
      "definition" : "Körperstelle",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "example",
        "description" : "HL7 VS (SCT)",
        "valueSet" : "http://hl7.org/fhir/ValueSet/body-site"
      }
    },
    {
      "id" : "EMSProtocol.findings.disability",
      "path" : "EMSProtocol.findings.disability",
      "short" : "D: Defizit, neurologisches",
      "definition" : "D: Defizit, neurologisches",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.findings.disability.gcs",
      "path" : "EMSProtocol.findings.disability.gcs",
      "short" : "Glasgow Coma Scale (GCS)",
      "definition" : "Glasgow Coma Scale (GCS)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.findings.disability.gcs.total",
      "path" : "EMSProtocol.findings.disability.gcs.total",
      "short" : "Gesamtscore",
      "definition" : "Gesamtscore",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    },
    {
      "id" : "EMSProtocol.findings.disability.gcs.eyeOpening",
      "path" : "EMSProtocol.findings.disability.gcs.eyeOpening",
      "short" : "Augenöffnung",
      "definition" : "Augenöffnung",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.findings.disability.gcs.eyeOpening.score",
      "path" : "EMSProtocol.findings.disability.gcs.eyeOpening.score",
      "short" : "Score",
      "definition" : "Score",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    },
    {
      "id" : "EMSProtocol.findings.disability.gcs.eyeOpening.description",
      "path" : "EMSProtocol.findings.disability.gcs.eyeOpening.description",
      "short" : "Beschreibung",
      "definition" : "Beschreibung",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcs-augenoeffnung"
      }
    },
    {
      "id" : "EMSProtocol.findings.disability.gcs.verbalResponse",
      "path" : "EMSProtocol.findings.disability.gcs.verbalResponse",
      "short" : "verbale Kommunikation",
      "definition" : "verbale Kommunikation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.findings.disability.gcs.verbalResponse.score",
      "path" : "EMSProtocol.findings.disability.gcs.verbalResponse.score",
      "short" : "Score",
      "definition" : "Score",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    },
    {
      "id" : "EMSProtocol.findings.disability.gcs.verbalResponse.description",
      "path" : "EMSProtocol.findings.disability.gcs.verbalResponse.description",
      "short" : "Beschreibung",
      "definition" : "Beschreibung",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcsVerbal"
      }
    },
    {
      "id" : "EMSProtocol.findings.disability.gcs.motorResponse",
      "path" : "EMSProtocol.findings.disability.gcs.motorResponse",
      "short" : "motorische Reaktion",
      "definition" : "motorische Reaktion",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.findings.disability.gcs.motorResponse.score",
      "path" : "EMSProtocol.findings.disability.gcs.motorResponse.score",
      "short" : "Score",
      "definition" : "Score",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    },
    {
      "id" : "EMSProtocol.findings.disability.gcs.motorResponse.description",
      "path" : "EMSProtocol.findings.disability.gcs.motorResponse.description",
      "short" : "Beschreibung",
      "definition" : "Beschreibung",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcsMotoric"
      }
    },
    {
      "id" : "EMSProtocol.findings.disability.levelOfResponsiveness",
      "path" : "EMSProtocol.findings.disability.levelOfResponsiveness",
      "short" : "Bewusstseinslage nach AVPU-Schema",
      "definition" : "Bewusstseinslage nach AVPU-Schema",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-vigilanzAvpu"
      }
    },
    {
      "id" : "EMSProtocol.findings.disability.pupilShape",
      "path" : "EMSProtocol.findings.disability.pupilShape",
      "short" : "Pupillenform",
      "definition" : "Pupillenform",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-eyeForm"
      }
    },
    {
      "id" : "EMSProtocol.findings.disability.pupilSize",
      "path" : "EMSProtocol.findings.disability.pupilSize",
      "short" : "Pupillenform",
      "definition" : "Pupillenform",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-size"
      }
    },
    {
      "id" : "EMSProtocol.findings.disability.fast",
      "path" : "EMSProtocol.findings.disability.fast",
      "short" : "Verletzungsgrad mittels FAST-Test",
      "definition" : "Verletzungsgrad mittels FAST-Test",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.findings.disability.fast.face",
      "path" : "EMSProtocol.findings.disability.fast.face",
      "short" : "F: Gesichtslähmung",
      "definition" : "F: Gesichtslähmung",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-yesNoUnknown"
      }
    },
    {
      "id" : "EMSProtocol.findings.disability.fast.face.laterality",
      "path" : "EMSProtocol.findings.disability.fast.face.laterality",
      "short" : "Betroffene Seite",
      "definition" : "Betroffene Seite",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-laterality"
      }
    },
    {
      "id" : "EMSProtocol.findings.disability.fast.arm",
      "path" : "EMSProtocol.findings.disability.fast.arm",
      "short" : "A: Armschwäche",
      "definition" : "A: Armschwäche",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-yesNoUnknown"
      }
    },
    {
      "id" : "EMSProtocol.findings.disability.fast.arm.laterality",
      "path" : "EMSProtocol.findings.disability.fast.arm.laterality",
      "short" : "Betroffene Seite",
      "definition" : "Betroffene Seite",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-laterality"
      }
    },
    {
      "id" : "EMSProtocol.findings.disability.fast.speech",
      "path" : "EMSProtocol.findings.disability.fast.speech",
      "short" : "S: Sprachschwierigkeiten",
      "definition" : "S: Sprachschwierigkeiten",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-yesNoUnknown"
      }
    },
    {
      "id" : "EMSProtocol.findings.disability.fast.time",
      "path" : "EMSProtocol.findings.disability.fast.time",
      "short" : "T: Zeit",
      "definition" : "T: Zeit",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "EMSProtocol.findings.exposure",
      "path" : "EMSProtocol.findings.exposure",
      "short" : "E: Exposition",
      "definition" : "E: Exposition",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.findings.exposure.heat",
      "path" : "EMSProtocol.findings.exposure.heat",
      "short" : "Hitzeexposition",
      "definition" : "Hitzeexposition",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-heatExposure"
      }
    },
    {
      "id" : "EMSProtocol.findings.exposure.cold",
      "path" : "EMSProtocol.findings.exposure.cold",
      "short" : "Kälteexposition",
      "definition" : "Kälteexposition",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-coldExposure"
      }
    },
    {
      "id" : "EMSProtocol.diagnosis",
      "path" : "EMSProtocol.diagnosis",
      "short" : "Diagnose",
      "definition" : "Diagnose",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.diagnosis.type",
      "path" : "EMSProtocol.diagnosis.type",
      "short" : "Diagnosetyp",
      "definition" : "Diagnosetyp",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-diagType"
      }
    },
    {
      "id" : "EMSProtocol.diagnosis.author",
      "path" : "EMSProtocol.diagnosis.author",
      "short" : "Diagnosesteller",
      "definition" : "Diagnosesteller",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.diagnosis.author.name",
      "path" : "EMSProtocol.diagnosis.author.name",
      "short" : "Name",
      "definition" : "Name",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "HumanName"
      }]
    },
    {
      "id" : "EMSProtocol.diagnosis.author.name.firstName",
      "path" : "EMSProtocol.diagnosis.author.name.firstName",
      "short" : "Vorname",
      "definition" : "Vorname",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.diagnosis.author.name.lastName",
      "path" : "EMSProtocol.diagnosis.author.name.lastName",
      "short" : "Nachname",
      "definition" : "Nachname",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.diagnosis.author.gln",
      "path" : "EMSProtocol.diagnosis.author.gln",
      "short" : "GLN (Global Location Number)",
      "definition" : "GLN (Global Location Number)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "EMSProtocol.diagnosis.author.formation",
      "path" : "EMSProtocol.diagnosis.author.formation",
      "short" : "Ausbildung",
      "definition" : "Ausbildung",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "see EmsProtocol.mission.respondingOrganisation.team.member.formation",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-formation"
      }
    },
    {
      "id" : "EMSProtocol.diagnosis.icd10",
      "path" : "EMSProtocol.diagnosis.icd10",
      "short" : "ICD-10-Code",
      "definition" : "ICD-10-Code",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "EMSProtocol.procedures",
      "path" : "EMSProtocol.procedures",
      "short" : "Massnahmen",
      "definition" : "Massnahmen",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration",
      "path" : "EMSProtocol.procedures.medicationAdministration",
      "short" : "Verabreichung von Medikamenten",
      "definition" : "Verabreichung von Medikamenten",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.medication",
      "path" : "EMSProtocol.procedures.medicationAdministration.medication",
      "short" : "Medikament",
      "definition" : "Medikament",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.medication.product",
      "path" : "EMSProtocol.procedures.medicationAdministration.medication.product",
      "short" : "Präparat",
      "definition" : "Präparat",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.medication.product.gtin",
      "path" : "EMSProtocol.procedures.medicationAdministration.medication.product.gtin",
      "short" : "GTIN (Global Trade Item Number (GS1)) für Schweizer Produkte",
      "definition" : "GTIN (Global Trade Item Number (GS1)) für Schweizer Produkte",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Coding"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.medication.product.atc",
      "path" : "EMSProtocol.procedures.medicationAdministration.medication.product.atc",
      "short" : "ATC (Anatomical Therapeutic Chemical Classification) für ausländische Produkte",
      "definition" : "ATC (Anatomical Therapeutic Chemical Classification) für ausländische Produkte",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Coding"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.medication.product.freeText",
      "path" : "EMSProtocol.procedures.medicationAdministration.medication.product.freeText",
      "short" : "Präparatenname",
      "definition" : "Präparatenname",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.medication.ingredient",
      "path" : "EMSProtocol.procedures.medicationAdministration.medication.ingredient",
      "short" : "Wirkstoff",
      "definition" : "Wirkstoff",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "description" : "HL7.ch VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/ActivePharmaceuticalIngredient"
      }
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.medication.galenicForm",
      "path" : "EMSProtocol.procedures.medicationAdministration.medication.galenicForm",
      "short" : "Galenische Form",
      "definition" : "Galenische Form",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "description" : "HL7.ch VS (EDQM)",
        "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-pharmaceuticaldoseform"
      }
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.medication.packageSize",
      "path" : "EMSProtocol.procedures.medicationAdministration.medication.packageSize",
      "short" : "Packungsgrösse",
      "definition" : "Packungsgrösse",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "description" : "HL7.ch VS (EDQM)",
        "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-pharmaceuticaldoseform"
      }
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.dose",
      "path" : "EMSProtocol.procedures.medicationAdministration.dose",
      "short" : "Dosis",
      "definition" : "Dosis",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.timing",
      "path" : "EMSProtocol.procedures.medicationAdministration.timing",
      "short" : "Zeitangabe zur Verabreichung",
      "definition" : "Zeitangabe zur Verabreichung",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.timing.time",
      "path" : "EMSProtocol.procedures.medicationAdministration.timing.time",
      "short" : "Verabreichungszeitpunkt",
      "definition" : "Verabreichungszeitpunkt",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.timing.period",
      "path" : "EMSProtocol.procedures.medicationAdministration.timing.period",
      "short" : "Verabreichungszeitraum",
      "definition" : "Verabreichungszeitraum",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Period"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.routeOfAdministration",
      "path" : "EMSProtocol.procedures.medicationAdministration.routeOfAdministration",
      "short" : "Verabreichungsweg",
      "definition" : "Verabreichungsweg",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "description" : "HL7.ch VS (EDQM)",
        "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-routeofadministration"
      }
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.methodOfAdministration",
      "path" : "EMSProtocol.procedures.medicationAdministration.methodOfAdministration",
      "short" : "Verabreichungsmethode",
      "definition" : "Verabreichungsmethode",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-administrationmethod"
      }
    },
    {
      "id" : "EMSProtocol.procedures.medicationAdministration.reason",
      "path" : "EMSProtocol.procedures.medicationAdministration.reason",
      "short" : "Behandlungsgrund",
      "definition" : "Behandlungsgrund",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.woundTreatment",
      "path" : "EMSProtocol.procedures.woundTreatment",
      "short" : "Wundbehandlung",
      "definition" : "Wundbehandlung",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-woundTreat"
      }
    },
    {
      "id" : "EMSProtocol.procedures.airway",
      "path" : "EMSProtocol.procedures.airway",
      "short" : "A: Atemwege",
      "definition" : "A: Atemwege",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.airway.intervention",
      "path" : "EMSProtocol.procedures.airway.intervention",
      "short" : "Atemwegsintervention",
      "definition" : "Atemwegsintervention",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-procAirType"
      }
    },
    {
      "id" : "EMSProtocol.procedures.breathing",
      "path" : "EMSProtocol.procedures.breathing",
      "short" : "B: Atmung",
      "definition" : "B: Atmung",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.breathing.intervention",
      "path" : "EMSProtocol.procedures.breathing.intervention",
      "short" : "Beatmung",
      "definition" : "Beatmung",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-ventilation"
      }
    },
    {
      "id" : "EMSProtocol.procedures.circulation",
      "path" : "EMSProtocol.procedures.circulation",
      "short" : "C: Kreislauf",
      "definition" : "C: Kreislauf",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.circulation.intervention",
      "path" : "EMSProtocol.procedures.circulation.intervention",
      "short" : "Intervention bei Kreislaufproblematik",
      "definition" : "Intervention bei Kreislaufproblematik",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.disability",
      "path" : "EMSProtocol.procedures.disability",
      "short" : "D: Defizit, neurologisches",
      "definition" : "D: Defizit, neurologisches",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.disability.intervention",
      "path" : "EMSProtocol.procedures.disability.intervention",
      "short" : "Intervention bei neurologischer Beeinträchtigung",
      "definition" : "Intervention bei neurologischer Beeinträchtigung",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.exposure",
      "path" : "EMSProtocol.procedures.exposure",
      "short" : "E: Exposition",
      "definition" : "E: Exposition",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.procedures.exposure.intervention",
      "path" : "EMSProtocol.procedures.exposure.intervention",
      "short" : "Intervention bei Exposition",
      "definition" : "Intervention bei Exposition",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "EMSProtocol.eventOfDeath",
      "path" : "EMSProtocol.eventOfDeath",
      "short" : "Todesfall",
      "definition" : "Todesfall",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.eventOfDeath.deathManner",
      "path" : "EMSProtocol.eventOfDeath.deathManner",
      "short" : "Todesart",
      "definition" : "Todesart",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-deathManner"
      }
    },
    {
      "id" : "EMSProtocol.transport",
      "path" : "EMSProtocol.transport",
      "short" : "Transport",
      "definition" : "Transport",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "EMSProtocol.handover",
      "path" : "EMSProtocol.handover",
      "short" : "Übergabe",
      "definition" : "Übergabe",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.handover.priority",
      "path" : "EMSProtocol.handover.priority",
      "short" : "Priorität",
      "definition" : "Priorität",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-hospitalPriority"
      }
    },
    {
      "id" : "EMSProtocol.handover.conditionChange",
      "path" : "EMSProtocol.handover.conditionChange",
      "short" : "Zustandsveränderung",
      "definition" : "Zustandsveränderung",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-result"
      }
    },
    {
      "id" : "EMSProtocol.handover.injurySeverity",
      "path" : "EMSProtocol.handover.injurySeverity",
      "short" : "Verletzungsschwere gemäss NACA-Score",
      "definition" : "Verletzungsschwere gemäss NACA-Score",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-NACA"
      }
    },
    {
      "id" : "EMSProtocol.handover.gcs",
      "path" : "EMSProtocol.handover.gcs",
      "short" : "Glasgow Coma Scale (GCS)",
      "definition" : "Glasgow Coma Scale (GCS)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.handover.gcs.total",
      "path" : "EMSProtocol.handover.gcs.total",
      "short" : "Gesamtscore",
      "definition" : "Gesamtscore",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    },
    {
      "id" : "EMSProtocol.handover.gcs.eyeOpening",
      "path" : "EMSProtocol.handover.gcs.eyeOpening",
      "short" : "Augenöffnung",
      "definition" : "Augenöffnung",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.handover.gcs.eyeOpening.score",
      "path" : "EMSProtocol.handover.gcs.eyeOpening.score",
      "short" : "Score",
      "definition" : "Score",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    },
    {
      "id" : "EMSProtocol.handover.gcs.eyeOpening.description",
      "path" : "EMSProtocol.handover.gcs.eyeOpening.description",
      "short" : "Beschreibung",
      "definition" : "Beschreibung",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcs-augenoeffnung"
      }
    },
    {
      "id" : "EMSProtocol.handover.gcs.verbalResponse",
      "path" : "EMSProtocol.handover.gcs.verbalResponse",
      "short" : "verbale Kommunikation",
      "definition" : "verbale Kommunikation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.handover.gcs.verbalResponse.score",
      "path" : "EMSProtocol.handover.gcs.verbalResponse.score",
      "short" : "Score",
      "definition" : "Score",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    },
    {
      "id" : "EMSProtocol.handover.gcs.verbalResponse.description",
      "path" : "EMSProtocol.handover.gcs.verbalResponse.description",
      "short" : "Beschreibung",
      "definition" : "Beschreibung",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcsVerbal"
      }
    },
    {
      "id" : "EMSProtocol.handover.gcs.motorResponse",
      "path" : "EMSProtocol.handover.gcs.motorResponse",
      "short" : "motorische Reaktion",
      "definition" : "motorische Reaktion",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.handover.gcs.motorResponse.score",
      "path" : "EMSProtocol.handover.gcs.motorResponse.score",
      "short" : "Score",
      "definition" : "Score",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    },
    {
      "id" : "EMSProtocol.handover.gcs.motorResponse.description",
      "path" : "EMSProtocol.handover.gcs.motorResponse.description",
      "short" : "Beschreibung",
      "definition" : "Beschreibung",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "IVR VS (SCT & IVR)",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcsMotoric"
      }
    },
    {
      "id" : "EMSProtocol.handover.recipient",
      "path" : "EMSProtocol.handover.recipient",
      "short" : "Übergabe an",
      "definition" : "Übergabe an",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "EMSProtocol.handover.recipient.organisation",
      "path" : "EMSProtocol.handover.recipient.organisation",
      "short" : "Organisation (Zielort)",
      "definition" : "Organisation (Zielort)",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Organization"
      }]
    },
    {
      "id" : "EMSProtocol.handover.recipient.practitioner",
      "path" : "EMSProtocol.handover.recipient.practitioner",
      "short" : "Verantwortliche Person",
      "definition" : "Verantwortliche Person",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Practitioner"
      }]
    },
    {
      "id" : "EMSProtocol.annotation",
      "path" : "EMSProtocol.annotation",
      "short" : "Bemerkungen",
      "definition" : "Bemerkungen",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
