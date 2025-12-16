# CH EPREG Patient: Child - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Patient: Child**

## Resource Profile: CH EPREG Patient: Child 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-child | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregPatientChild |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Patient resource to represent the child (fetus/newborn). (See also the[IBCM Fetal Record Profile](https://hl7.org/fhir/uv/ibcm/2024Sep/StructureDefinition-ibcm-fetal-record.html).) 

**Usages:**

* Refer to this Profile: [CH EPREG Encounter: Child](StructureDefinition-ch-epreg-encounter-child.md), [CH EPREG Observation (Child): Fetal Heart Feature](StructureDefinition-ch-epreg-observation-fetal-heart-feature.md), [CH EPREG Observation (Child): Fetal Movement](StructureDefinition-ch-epreg-observation-fetal-movement.md), [CH EPREG Observation (Child): Fetal Position](StructureDefinition-ch-epreg-observation-fetal-position.md)...Show 3 more,[CH EPREG Observation (Base): Pregnancy Progress](StructureDefinition-ch-epreg-observation-preg-progress.md),[CH EPREG RelatedPerson: Mother](StructureDefinition-ch-epreg-relatedperson-mother.md)and[CH EPREG RelatedPerson: Parent](StructureDefinition-ch-epreg-relatedperson-parent.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-patient-child)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-patient-child.csv), [Excel](StructureDefinition-ch-epreg-patient-child.xlsx), [Schematron](StructureDefinition-ch-epreg-patient-child.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-patient-child",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-child",
  "version" : "1.0.0",
  "name" : "ChEpregPatientChild",
  "title" : "CH EPREG Patient: Child",
  "status" : "active",
  "date" : "2025-12-16T12:22:20+00:00",
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
  "description" : "This profile constrains the Patient resource to represent the child (fetus/newborn). (See also the [IBCM Fetal Record Profile](https://hl7.org/fhir/uv/ibcm/2024Sep/StructureDefinition-ibcm-fetal-record.html).)",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "concept-pregnancy-passport",
      "uri" : "https://www.e-health-suisse.ch/upload/documents/eSchwangerschaftspass_Konzept_de.pdf",
      "name" : "Concept Pregnancy Passport",
      "comment" : "This mapping illustrates the relationship between the CH EPREG profile and the concept of the pregnancy passport."
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
        "short" : "CH EPREG Patient: Child"
      },
      {
        "id" : "Patient.identifier:LocalPid",
        "path" : "Patient.identifier",
        "sliceName" : "LocalPid",
        "short" : "Medical record number; as soon as the child is born, a record is created in the (hospital) information system"
      },
      {
        "id" : "Patient.identifier:internalPid",
        "path" : "Patient.identifier",
        "sliceName" : "internalPid",
        "short" : "Patient internal identifier; used to distinguish the children in the case of multiple pregnancy (e.g. A/B)",
        "min" : 0,
        "max" : "*",
        "patternIdentifier" : {
          "type" : {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                "code" : "PI"
              }
            ]
          }
        },
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Identifikation | Identification"
          }
        ]
      },
      {
        "id" : "Patient.identifier:internalPid.system",
        "path" : "Patient.identifier.system",
        "min" : 1
      },
      {
        "id" : "Patient.identifier:internalPid.value",
        "path" : "Patient.identifier.value",
        "min" : 1
      }
    ]
  }
}

```
