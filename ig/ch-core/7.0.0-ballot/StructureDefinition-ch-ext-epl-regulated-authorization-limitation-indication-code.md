# Indication Code - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indication Code**

## Extension: Indication Code 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epl-regulated-authorization-limitation-indication-code | *Version*:7.0.0-ballot |
| Active as of 2026-06-10 | *Computable Name*:ChEplRegulatedAuthorizationLimitationIndicationCode |
| **Copyright/Legal**: CC0-1.0 | |

Indication Code, as defined by the [FOPH list of healthcare benefits](https://fhir.ch/ig/ch-epl/index.html) to be conveyed when referring to prescription/dispense/billing of medicinal products subject to a price model as defined by the FOPH.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Immunization Recommendation](StructureDefinition-ch-core-immunization-recommendation.md), [CH Core Immunization](StructureDefinition-ch-core-immunization.md), [CH Core MedicationAdministration](StructureDefinition-ch-core-medicationadministration.md), [CH Core MedicationDispense](StructureDefinition-ch-core-medicationdispense.md)... Show 2 more, [CH Core MedicationRequest](StructureDefinition-ch-core-medicationrequest.md) and [CH Core MedicationStatement](StructureDefinition-ch-core-medicationstatement.md)
* Examples for this Extension: [MedicationDispense/MedDisAbirateron](MedicationDispense-MedDisAbirateron.md), [MedicationRequest/MedReqAbirateron](MedicationRequest-MedReqAbirateron.md) and [MedicationStatement/MedicationStatementAbirateron](MedicationStatement-MedicationStatementAbirateron.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-core|current/StructureDefinition/StructureDefinition-ch-ext-epl-regulated-authorization-limitation-indication-code.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-epl-regulated-authorization-limitation-indication-code.csv), [Excel](StructureDefinition-ch-ext-epl-regulated-authorization-limitation-indication-code.xlsx), [Schematron](StructureDefinition-ch-ext-epl-regulated-authorization-limitation-indication-code.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-epl-regulated-authorization-limitation-indication-code",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epl-regulated-authorization-limitation-indication-code",
  "version" : "7.0.0-ballot",
  "name" : "ChEplRegulatedAuthorizationLimitationIndicationCode",
  "title" : "Indication Code",
  "status" : "active",
  "date" : "2026-06-10T14:59:48+00:00",
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
  "description" : "Indication Code, as defined by the [FOPH list of healthcare benefits](https://fhir.ch/ig/ch-epl/index.html) to be conveyed when referring to prescription/dispense/billing of medicinal products subject to a price model as defined by the FOPH.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "ChargeItem"
  },
  {
    "type" : "element",
    "expression" : "Immunization"
  },
  {
    "type" : "element",
    "expression" : "ImmunizationRecommendation.recommendation"
  },
  {
    "type" : "element",
    "expression" : "MedicationAdministration"
  },
  {
    "type" : "element",
    "expression" : "MedicationDispense"
  },
  {
    "type" : "element",
    "expression" : "MedicationRequest"
  },
  {
    "type" : "element",
    "expression" : "MedicationStatement"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epl-regulated-authorization-limitation-indication-code"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "short" : "The indication code assigned by the FOPH for this medicinal product and indication.",
      "definition" : "The [indication code assigned by the FOPH for this medicinal product and indication](https://fhir.ch/ig/ch-epl/StructureDefinition-regulatedAuthorization-limitation.html). Normally a code that looks like XXXXX.XX with the first 5 digits being the FOPH dossier number, followed by a dot and then by two digits which are a sequence of defined indications by the FOPH.",
      "min" : 1,
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
