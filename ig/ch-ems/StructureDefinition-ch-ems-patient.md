# CH EMS Patient - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Patient**

## Resource Profile: CH EMS Patient 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsPatient |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Patient resource for representing patient information and information about any participants involved. 

**Usages:**

* Use this Profile: [CH EMS Document](StructureDefinition-ch-ems-document.md)
* Refer to this Profile: [CH EMS AllergyIntolerance](StructureDefinition-ch-ems-allergyintolerance.md), [CH EMS Composition](StructureDefinition-ch-ems-composition.md), [CH EMS Coverage](StructureDefinition-ch-ems-coverage.md), [CH EMS Encounter](StructureDefinition-ch-ems-encounter.md)... Show 5 more, [CH EMS MedicationAdministration](StructureDefinition-ch-ems-medicationadministration.md), [CH EMS MedicationStatement](StructureDefinition-ch-ems-medicationstatement.md), [CH EMS Observation (Base)](StructureDefinition-ch-ems-observation.md), [CH EMS Procedure (Base)](StructureDefinition-ch-ems-procedure.md) and [CH EMS ServiceRequest](StructureDefinition-ch-ems-servicerequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-patient.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-patient.csv), [Excel](StructureDefinition-ch-ems-patient.xlsx), [Schematron](StructureDefinition-ch-ems-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-patient",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsPatient",
  "title" : "CH EMS Patient",
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
  "description" : "This profile constrains the Patient resource for representing patient information and information about any participants involved.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Patient",
      "path" : "Patient",
      "short" : "CH EMS Patient",
      "constraint" : [{
        "key" : "ch-ems-epr-patient",
        "severity" : "warning",
        "human" : "Warning that the resource is not conform to the CH Core EPR restrictions",
        "expression" : "conformsTo('http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr')",
        "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient"
      }]
    },
    {
      "id" : "Patient.extension:placeOfOrigin",
      "path" : "Patient.extension",
      "sliceName" : "placeOfOrigin",
      "mustSupport" : true
    },
    {
      "id" : "Patient.extension:citizenship",
      "path" : "Patient.extension",
      "sliceName" : "citizenship",
      "mustSupport" : true
    },
    {
      "id" : "Patient.extension:identification",
      "path" : "Patient.extension",
      "sliceName" : "identification",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-identification"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Patient.extension:identification.extension:medium",
      "path" : "Patient.extension.extension",
      "sliceName" : "medium",
      "short" : "Medium der Identifikation"
    },
    {
      "id" : "Patient.extension:identification.extension:source",
      "path" : "Patient.extension.extension",
      "sliceName" : "source",
      "short" : "Quelle der Identifikation"
    },
    {
      "id" : "Patient.identifier:AHVN13",
      "path" : "Patient.identifier",
      "sliceName" : "AHVN13",
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Patient.identifier:LocalPid",
      "path" : "Patient.identifier",
      "sliceName" : "LocalPid",
      "short" : "Local patient identifier: PLS-ID (Number from the patient guidance system (PLS) for temporary identification)",
      "mustSupport" : true
    },
    {
      "id" : "Patient.name",
      "path" : "Patient.name",
      "mustSupport" : true
    },
    {
      "id" : "Patient.name.family",
      "path" : "Patient.name.family",
      "short" : "Nachname"
    },
    {
      "id" : "Patient.name.given",
      "path" : "Patient.name.given",
      "short" : "Vorname"
    },
    {
      "id" : "Patient.gender",
      "path" : "Patient.gender",
      "mustSupport" : true
    },
    {
      "id" : "Patient.birthDate",
      "path" : "Patient.birthDate",
      "mustSupport" : true
    },
    {
      "id" : "Patient.address",
      "path" : "Patient.address",
      "mustSupport" : true
    },
    {
      "id" : "Patient.address.line",
      "path" : "Patient.address.line",
      "short" : "Strasse"
    },
    {
      "id" : "Patient.address.city",
      "path" : "Patient.address.city",
      "short" : "Ort"
    },
    {
      "id" : "Patient.address.postalCode",
      "path" : "Patient.address.postalCode",
      "short" : "PLZ"
    },
    {
      "id" : "Patient.contact:involvedParticipant",
      "path" : "Patient.contact",
      "sliceName" : "involvedParticipant",
      "short" : "Involved Participant",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Patient.contact:involvedParticipant.extension",
      "path" : "Patient.contact.extension",
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
      "id" : "Patient.contact:involvedParticipant.extension:personRole",
      "path" : "Patient.contact.extension",
      "sliceName" : "personRole",
      "short" : "Role of the involved participant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-personrole"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Patient.contact:involvedParticipant.relationship",
      "path" : "Patient.contact.relationship",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
          "code" : "thirdParty"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Patient.contact:involvedParticipant.name",
      "path" : "Patient.contact.name",
      "short" : "Name of the involved participant",
      "type" : [{
        "code" : "HumanName",
        "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname"]
      }],
      "mustSupport" : true
    }]
  }
}

```
