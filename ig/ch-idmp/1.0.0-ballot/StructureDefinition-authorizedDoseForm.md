# CH SMC - Authorized Dose Form - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH SMC - Authorized Dose Form**

## Extension: CH SMC - Authorized Dose Form 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/StructureDefinition/authorizedDoseForm | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:CHIDMPAuthorizedDoseForm |
| **Copyright/Legal**: CC0-1.0 | |

Extension for representing the authorized dose form

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md)
* Examples for this Extension: [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md), [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md)... Show 4 more, [MedicinalProductDefinition/Comprehensive-Sample-Combipack](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md), [MedicinalProductDefinition/Padcev-20mg-Powder](MedicinalProductDefinition-Padcev-20mg-Powder.md), [MedicinalProductDefinition/Padcev-30mg-Powder](MedicinalProductDefinition-Padcev-30mg-Powder.md) and [MedicinalProductDefinition/Xospata-Filmcoatedtablet](MedicinalProductDefinition-Xospata-Filmcoatedtablet.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-idmp|current/StructureDefinition/StructureDefinition-authorizedDoseForm.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-authorizedDoseForm.csv), [Excel](StructureDefinition-authorizedDoseForm.xlsx), [Schematron](StructureDefinition-authorizedDoseForm.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "authorizedDoseForm",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-bind"
  }],
  "url" : "http://fhir.ch/ig/ch-idmp/StructureDefinition/authorizedDoseForm",
  "version" : "1.0.0-ballot",
  "name" : "CHIDMPAuthorizedDoseForm",
  "title" : "CH SMC - Authorized Dose Form",
  "status" : "active",
  "date" : "2026-06-12T16:14:23+00:00",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "Extension for representing the authorized dose form",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "MedicinalProductDefinition"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "CH SMC - Authorized Dose Form",
      "definition" : "Extension for representing the authorized dose form"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-idmp/StructureDefinition/authorizedDoseForm"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/ch-SMC-authorised-pharmaceutical-dose-form"
      }
    }]
  }
}

```
