# CH EMED UUID Identifier - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED UUID Identifier**

## Data Type Profile: CH EMED UUID Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-uuid-identifier | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDUUIDIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
An Identifier profile enforcing CH EMED rules for UUID-based identifiers. 
* `system` SHALL be `urn:ietf:rfc:3986`
* `value` SHALL be a UUID in URN format (`urn:uuid:[uuid]`)
 
See also[Relationship between Documents](relationship-between-documents.md#identifier-format)for more information. 

**Usages:**

* Use this DataType Profile: [CH EMED Medication Card Composition](StructureDefinition-ch-emed-composition-medicationcard.md), [CH EMED Medication Dispense Composition](StructureDefinition-ch-emed-composition-medicationdispense.md), [CH EMED Medication List Composition](StructureDefinition-ch-emed-composition-medicationlist.md), [CH EMED Medication Prescription Composition](StructureDefinition-ch-emed-composition-medicationprescription.md)...Show 18 more,[CH EMED Medication Treatment Plan Composition](StructureDefinition-ch-emed-composition-medicationtreatmentplan.md),[CH EMED Pharmaceutical Advice Composition](StructureDefinition-ch-emed-composition-pharmaceuticaladvice.md),[CH EMED Medication Card Document](StructureDefinition-ch-emed-document-medicationcard.md),[CH EMED Medication Dispense Document](StructureDefinition-ch-emed-document-medicationdispense.md),[CH EMED Medication List Document](StructureDefinition-ch-emed-document-medicationlist.md),[CH EMED Medication Prescription Document](StructureDefinition-ch-emed-document-medicationprescription.md),[CH EMED Medication Treatment Plan Document](StructureDefinition-ch-emed-document-medicationtreatmentplan.md),[CH EMED Pharmaceutical Advice Document](StructureDefinition-ch-emed-document-pharmaceuticaladvice.md),[CH EMED Extension Dispense](StructureDefinition-ch-emed-ext-dispense.md),[CH EMED Extension Last Considered Document](StructureDefinition-ch-emed-ext-last-considered-document.md),[CH EMED Extension Pharmaceutical Advice](StructureDefinition-ch-emed-ext-pharmaceuticaladvice.md),[CH EMED Extension Prescription](StructureDefinition-ch-emed-ext-prescription.md),[CH EMED Extension Treatment Plan](StructureDefinition-ch-emed-ext-treatmentplan.md),[CH EMED MedicationAdministration (DIS)](StructureDefinition-ch-emed-medicationadministration.md),[CH EMED MedicationDispense (DIS)](StructureDefinition-ch-emed-medicationdispense.md),[CH EMED MedicationRequest (PRE)](StructureDefinition-ch-emed-medicationrequest.md),[CH EMED MedicationStatement](StructureDefinition-ch-emed-medicationstatement.md)and[CH EMED Observation (PADV)](StructureDefinition-ch-emed-observation.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-uuid-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-uuid-identifier.csv), [Excel](StructureDefinition-ch-emed-uuid-identifier.xlsx), [Schematron](StructureDefinition-ch-emed-uuid-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-uuid-identifier",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-uuid-identifier",
  "version" : "6.0.0",
  "name" : "CHEMEDUUIDIdentifier",
  "title" : "CH EMED UUID Identifier",
  "status" : "active",
  "date" : "2025-12-16T11:14:15+00:00",
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
  "description" : "An Identifier profile enforcing CH EMED rules for UUID-based identifiers.     \n- `system` SHALL be `urn:ietf:rfc:3986`\n- `value` SHALL be a UUID in URN format (`urn:uuid:[uuid]`)     \n\nSee also [Relationship between Documents](relationship-between-documents.html#identifier-format) for more information.",
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
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Identifier",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Identifier",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Identifier.system",
        "path" : "Identifier.system",
        "min" : 1,
        "fixedUri" : "urn:ietf:rfc:3986"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "definition" : "A UUID expressed as a URN according to RFC 4122 and RFC 3986.",
        "min" : 1,
        "example" : [
          {
            "label" : "CH EMED",
            "valueString" : "urn:uuid:daa8cd41-34a1-4a9c-9a6d-cd3f850142e9"
          }
        ],
        "constraint" : [
          {
            "key" : "uuid-format",
            "severity" : "error",
            "human" : "The value SHALL start with 'urn:uuid:' followed by a valid UUID.",
            "expression" : "matches('^urn:uuid:[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$')",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-uuid-identifier"
          }
        ]
      }
    ]
  }
}

```
