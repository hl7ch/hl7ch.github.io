# CH ALIS Patient Profile - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Patient Profile**

## Resource Profile: CH ALIS Patient Profile 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-patient | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisPatient |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition for the Patient resource in the context of ALIS-Connect. 

**Usages:**

* Refer to this Profile: [CH ALIS ChargeItem Profile](StructureDefinition-ch-alis-connect-chargeitem.md), [CH ALIS Condition Profile](StructureDefinition-ch-alis-connect-condition.md) and [CH ALIS Encounter Profile](StructureDefinition-ch-alis-connect-encounter.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-ch-alis-connect-patient.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-alis-connect-patient.csv), [Excel](StructureDefinition-ch-alis-connect-patient.xlsx), [Schematron](StructureDefinition-ch-alis-connect-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-alis-connect-patient",
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-patient",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisPatient",
  "title" : "CH ALIS Patient Profile",
  "status" : "active",
  "date" : "2026-06-12T18:35:48+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "Base definition for the Patient resource in the context of ALIS-Connect.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "alis",
    "uri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Visit",
    "name" : "ALIS Mapping",
    "comment" : "ALIS Mapping"
  },
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
      "short" : "CH ALIS Patient"
    },
    {
      "id" : "Patient.identifier",
      "path" : "Patient.identifier",
      "min" : 1
    },
    {
      "id" : "Patient.identifier:LocalPid",
      "path" : "Patient.identifier",
      "sliceName" : "LocalPid",
      "min" : 1
    },
    {
      "id" : "Patient.identifier:LocalPid.value",
      "path" : "Patient.identifier.value",
      "short" : "PatientID",
      "mapping" : [{
        "identity" : "alis",
        "map" : "PatientID"
      }]
    },
    {
      "id" : "Patient.name",
      "path" : "Patient.name",
      "max" : "1"
    },
    {
      "id" : "Patient.name.family",
      "path" : "Patient.name.family",
      "short" : "PatientName",
      "mapping" : [{
        "identity" : "alis",
        "map" : "PatientName"
      }]
    },
    {
      "id" : "Patient.name.given",
      "path" : "Patient.name.given",
      "short" : "PatientGivenName",
      "max" : "1",
      "mapping" : [{
        "identity" : "alis",
        "map" : "PatientGivenName"
      }]
    },
    {
      "id" : "Patient.gender",
      "path" : "Patient.gender",
      "short" : "PatientGender",
      "mapping" : [{
        "identity" : "alis",
        "map" : "PatientGender"
      }]
    },
    {
      "id" : "Patient.birthDate",
      "path" : "Patient.birthDate",
      "short" : "PatientBirthDate",
      "mapping" : [{
        "identity" : "alis",
        "map" : "PatientBirthDate"
      }]
    }]
  }
}

```
