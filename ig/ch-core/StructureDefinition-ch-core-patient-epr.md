# CH Core Patient EPR - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Patient EPR**

## Resource Profile: CH Core Patient EPR 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCorePatientEPR |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the Patient resource for use in the context of the electronic patient record (EPR). It is used to include the patient in an EPR document (referenced in Composition/DocumentReference). 

 
Core patient demographics which can be shared 

**Usages:**

* Refer to this Profile: [CH Core Composition EPR](StructureDefinition-ch-core-composition-epr.md)
* Examples for this Profile: [Patient/MaxMuster](Patient-MaxMuster.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-patient-epr)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-patient-epr.csv), [Excel](StructureDefinition-ch-core-patient-epr.xlsx), [Schematron](StructureDefinition-ch-core-patient-epr.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-patient-epr",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
  "version" : "6.0.0",
  "name" : "CHCorePatientEPR",
  "title" : "CH Core Patient EPR",
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
  "description" : "Definition of the Patient resource for use in the context of the electronic patient record (EPR). It is used to include the patient in an EPR document (referenced in Composition/DocumentReference).",
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient",
        "short" : "CH Core Patient EPR (to include the patient in an EPR document)",
        "constraint" : [
          {
            "key" : "ch-pat-1-epr",
            "severity" : "error",
            "human" : "At least one human name shall have a family name.",
            "expression" : "name.where(family.exists()).count()>0",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr"
          }
        ]
      },
      {
        "id" : "Patient.identifier",
        "path" : "Patient.identifier",
        "min" : 1
      },
      {
        "id" : "Patient.identifier:EPR-SPID",
        "path" : "Patient.identifier",
        "sliceName" : "EPR-SPID",
        "max" : "0"
      },
      {
        "id" : "Patient.identifier:AHVN13",
        "path" : "Patient.identifier",
        "sliceName" : "AHVN13",
        "max" : "0"
      },
      {
        "id" : "Patient.name",
        "path" : "Patient.name",
        "min" : 1
      },
      {
        "id" : "Patient.gender",
        "path" : "Patient.gender",
        "min" : 1
      },
      {
        "id" : "Patient.birthDate",
        "path" : "Patient.birthDate",
        "min" : 1
      }
    ]
  }
}

```
