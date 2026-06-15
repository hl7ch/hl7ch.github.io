# CH EMS Extension: Identification - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Extension: Identification**

## Extension: CH EMS Extension: Identification 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-identification | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsExtIdentification |
| **Copyright/Legal**: CC0-1.0 | |

Extension to define the medium and the source for the identification of the patient.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH EMS Patient](StructureDefinition-ch-ems-patient.md)
* Examples for this Extension: [Patient/PatientExample](Patient-PatientExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-ext-identification.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-ext-identification.csv), [Excel](StructureDefinition-ch-ems-ext-identification.xlsx), [Schematron](StructureDefinition-ch-ems-ext-identification.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-ext-identification",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-identification",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsExtIdentification",
  "title" : "CH EMS Extension: Identification",
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
  "description" : "Extension to define the medium and the source for the identification of the patient.",
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
    "expression" : "Patient"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "CH EMS Extension: Identification",
      "definition" : "Extension to define the medium and the source for the identification of the patient."
    },
    {
      "id" : "Extension.extension:medium",
      "path" : "Extension.extension",
      "sliceName" : "medium",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Extension.extension:medium.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:medium.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "medium"
    },
    {
      "id" : "Extension.extension:medium.value[x]",
      "path" : "Extension.extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-idMedium"
      }
    },
    {
      "id" : "Extension.extension:source",
      "path" : "Extension.extension",
      "sliceName" : "source",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Extension.extension:source.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:source.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "source"
    },
    {
      "id" : "Extension.extension:source.value[x]",
      "path" : "Extension.extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-idSource"
      }
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-identification"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
