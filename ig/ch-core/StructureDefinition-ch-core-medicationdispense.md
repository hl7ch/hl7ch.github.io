# CH Core MedicationDispense - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core MedicationDispense**

## Resource Profile: CH Core MedicationDispense 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationdispense | *Version*:7.0.0-ballot |
| Active as of 2026-06-10 | *Computable Name*:CHCoreMedicationDispense |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the MedicationDispense resource for use in Swiss specific use cases. 

**Usages:**

* Examples for this Profile: [MedicationDispense/2-4-MedDispBeloczok](MedicationDispense-2-4-MedDispBeloczok.md) and [MedicationDispense/MedDisAbirateron](MedicationDispense-MedDisAbirateron.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-core|current/StructureDefinition/StructureDefinition-ch-core-medicationdispense.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-medicationdispense.csv), [Excel](StructureDefinition-ch-core-medicationdispense.xlsx), [Schematron](StructureDefinition-ch-core-medicationdispense.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-medicationdispense",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationdispense",
  "version" : "7.0.0-ballot",
  "name" : "CHCoreMedicationDispense",
  "title" : "CH Core MedicationDispense",
  "status" : "active",
  "date" : "2026-06-10T15:05:01+00:00",
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
  "description" : "Base definition of the MedicationDispense resource for use in Swiss specific use cases.",
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
    "identity" : "rx-dispense-rmim",
    "uri" : "http://www.hl7.org/v3/PORX_RM020070UV",
    "name" : "V3 Pharmacy Dispense RMIM"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "MedicationDispense",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/MedicationDispense",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "MedicationDispense",
      "path" : "MedicationDispense",
      "short" : "CH Core MedicationDispense"
    },
    {
      "id" : "MedicationDispense.extension",
      "path" : "MedicationDispense.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "MedicationDispense.extension:treatmentReason",
      "path" : "MedicationDispense.extension",
      "sliceName" : "treatmentReason",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentreason"]
      }]
    },
    {
      "id" : "MedicationDispense.extension:indicationCode",
      "path" : "MedicationDispense.extension",
      "sliceName" : "indicationCode",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epl-regulated-authorization-limitation-indication-code"]
      }]
    },
    {
      "id" : "MedicationDispense.medication[x]",
      "path" : "MedicationDispense.medication[x]",
      "type" : [{
        "code" : "CodeableConcept"
      },
      {
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication"]
      }]
    },
    {
      "id" : "MedicationDispense.subject",
      "path" : "MedicationDispense.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
        "http://hl7.org/fhir/StructureDefinition/Group"]
      }]
    },
    {
      "id" : "MedicationDispense.performer.actor",
      "path" : "MedicationDispense.performer.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
        "http://hl7.org/fhir/StructureDefinition/Device",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"]
      }]
    },
    {
      "id" : "MedicationDispense.dosageInstruction",
      "path" : "MedicationDispense.dosageInstruction",
      "type" : [{
        "code" : "Dosage",
        "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-dosage"]
      }]
    },
    {
      "id" : "MedicationDispense.substitution",
      "path" : "MedicationDispense.substitution",
      "constraint" : [{
        "key" : "ch-meddis-1",
        "severity" : "warning",
        "human" : "If no substitution was performed, no type is expected.",
        "expression" : "wasSubstituted = true or (wasSubstituted = false and type.exists().not())",
        "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationdispense"
      }]
    },
    {
      "id" : "MedicationDispense.substitution.wasSubstituted",
      "path" : "MedicationDispense.substitution.wasSubstituted",
      "short" : "Whether a substitution was (true) or was not (false) performed on the dispense"
    },
    {
      "id" : "MedicationDispense.substitution.type",
      "path" : "MedicationDispense.substitution.type",
      "short" : "If 'wasSubstituted = true', the type can be defined in addition (optional). If 'wasSubstituted = false', no type is expected.",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/ActSubstanceAdminSubstitutionCode"
      }
    }]
  }
}

```
