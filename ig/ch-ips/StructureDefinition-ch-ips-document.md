# CH IPS Document - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IPS Document**

## Resource Profile: CH IPS Document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-document | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChIpsDocument |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH IPS profile for the resource Bundle is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. 

**Usages:**

* Derived from this Profile: [CH IPS Document EPR](StructureDefinition-ch-ips-document-epr.md)
* Examples for this Profile: [Bundle/UC1-SwissIpsDocument1](Bundle-UC1-SwissIpsDocument1.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-ips|current/StructureDefinition/ch-ips-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ips-document.csv), [Excel](StructureDefinition-ch-ips-document.xlsx), [Schematron](StructureDefinition-ch-ips-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ips-document",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Bundle-uv-ips"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-document",
  "version" : "2.0.0",
  "name" : "ChIpsDocument",
  "title" : "CH IPS Document",
  "status" : "active",
  "date" : "2025-12-16T12:02:17+00:00",
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
  "description" : "This CH IPS profile for the resource Bundle is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "short" : "CH IPS Document"
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resource"
            },
            {
              "type" : "type",
              "path" : "resource"
            }
          ],
          "rules" : "open"
        },
        "min" : 2
      },
      {
        "id" : "Bundle.entry:Composition",
        "path" : "Bundle.entry",
        "sliceName" : "Composition"
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Composition",
            "profile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-composition"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Patient",
        "path" : "Bundle.entry",
        "sliceName" : "Patient",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Bundle.entry:Patient.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Patient",
            "profile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Practitioner",
        "path" : "Bundle.entry",
        "sliceName" : "Practitioner"
      },
      {
        "id" : "Bundle.entry:Practitioner.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Practitioner",
            "profile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitioner"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:PractitionerRole",
        "path" : "Bundle.entry",
        "sliceName" : "PractitionerRole"
      },
      {
        "id" : "Bundle.entry:PractitionerRole.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "PractitionerRole",
            "profile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitionerrole"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Organization",
        "path" : "Bundle.entry",
        "sliceName" : "Organization"
      },
      {
        "id" : "Bundle.entry:Organization.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Organization",
            "profile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-organization"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Device",
        "path" : "Bundle.entry",
        "sliceName" : "Device"
      },
      {
        "id" : "Bundle.entry:Device.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Device",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/Device"]
          }
        ]
      },
      {
        "id" : "Bundle.entry:AllergyIntolerance",
        "path" : "Bundle.entry",
        "sliceName" : "AllergyIntolerance",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:AllergyIntolerance.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "AllergyIntolerance",
            "profile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-allergyintolerance"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Condition",
        "path" : "Bundle.entry",
        "sliceName" : "Condition",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Condition.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Condition",
            "profile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:DeviceUseStatement",
        "path" : "Bundle.entry",
        "sliceName" : "DeviceUseStatement",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:DeviceUseStatement.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "DeviceUseStatement",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/DeviceUseStatement-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:DiagnosticReport",
        "path" : "Bundle.entry",
        "sliceName" : "DiagnosticReport",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:DiagnosticReport.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "DiagnosticReport",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/DiagnosticReport-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:ImagingStudy",
        "path" : "Bundle.entry",
        "sliceName" : "ImagingStudy",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:ImagingStudy.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "ImagingStudy",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/ImagingStudy-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Immunization",
        "path" : "Bundle.entry",
        "sliceName" : "Immunization",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Immunization.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Immunization",
            "profile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-immunization"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Medication",
        "path" : "Bundle.entry",
        "sliceName" : "Medication",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Medication.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Medication",
            "profile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:MedicationRequest",
        "path" : "Bundle.entry",
        "sliceName" : "MedicationRequest",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:MedicationRequest.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "MedicationRequest",
            "profile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationrequest"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:MedicationStatement",
        "path" : "Bundle.entry",
        "sliceName" : "MedicationStatement",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:MedicationStatement.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "MedicationStatement",
            "profile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Procedure",
        "path" : "Bundle.entry",
        "sliceName" : "Procedure",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Procedure.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Procedure",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Procedure-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:ObservationPregnancyEdd",
        "path" : "Bundle.entry",
        "sliceName" : "ObservationPregnancyEdd",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:ObservationPregnancyEdd.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Observation",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-pregnancy-edd-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:ObservationPregnancyOutcome",
        "path" : "Bundle.entry",
        "sliceName" : "ObservationPregnancyOutcome",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:ObservationPregnancyOutcome.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Observation",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-pregnancy-outcome-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:ObservationPregnancyStatus",
        "path" : "Bundle.entry",
        "sliceName" : "ObservationPregnancyStatus",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:ObservationPregnancyStatus.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Observation",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-pregnancy-status-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:ObservationAlcoholUse",
        "path" : "Bundle.entry",
        "sliceName" : "ObservationAlcoholUse",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:ObservationAlcoholUse.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Observation",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-alcoholuse-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:ObservationTobaccoUse",
        "path" : "Bundle.entry",
        "sliceName" : "ObservationTobaccoUse",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:ObservationTobaccoUse.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Observation",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-tobaccouse-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:ObservationResultsLaboratoryPathology",
        "path" : "Bundle.entry",
        "sliceName" : "ObservationResultsLaboratoryPathology",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:ObservationResultsLaboratoryPathology.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Observation",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-results-laboratory-pathology-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:observationResultsRadiology",
        "path" : "Bundle.entry",
        "sliceName" : "observationResultsRadiology",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:observationResultsRadiology.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Observation",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-results-radiology-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:ObservationVitalSigns",
        "path" : "Bundle.entry",
        "sliceName" : "ObservationVitalSigns",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:ObservationVitalSigns.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Observation",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/vitalsigns"]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Specimen",
        "path" : "Bundle.entry",
        "sliceName" : "Specimen",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Specimen.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Specimen",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Specimen-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Flag",
        "path" : "Bundle.entry",
        "sliceName" : "Flag",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Flag.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Flag",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Flag-alert-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:ClinicalImpression",
        "path" : "Bundle.entry",
        "sliceName" : "ClinicalImpression",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:ClinicalImpression.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "ClinicalImpression"
          }
        ]
      },
      {
        "id" : "Bundle.entry:CarePlan",
        "path" : "Bundle.entry",
        "sliceName" : "CarePlan",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:CarePlan.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "CarePlan"
          }
        ]
      },
      {
        "id" : "Bundle.entry:Consent",
        "path" : "Bundle.entry",
        "sliceName" : "Consent",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Consent.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Consent"
          }
        ]
      },
      {
        "id" : "Bundle.entry:DocumentReference",
        "path" : "Bundle.entry",
        "sliceName" : "DocumentReference",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:DocumentReference.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "DocumentReference"
          }
        ]
      }
    ]
  }
}

```
