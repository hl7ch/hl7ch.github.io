# CH Core Immunization - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Immunization**

## Resource Profile: CH Core Immunization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-immunization | *Version*:7.0.0-ballot |
| Active as of 2026-06-10 | *Computable Name*:CHCoreImmunization |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the Immunization resource for use in Swiss specific use cases. 

### Vaccine Code Bindings

#### Default

The [CH VACD All Swiss Vaccine Codes](https://fhir.ch/ig/ch-term/ValueSet/ch-vacd-vaccines-vs) is the default binding for Immunization.vaccineCode. The ValueSet contains the codes for from the CodeSystems [CH VACD Swissmedic Authorized Vaccines](http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs) and [CH VACD Old Swiss Vaccines (Swiss Legacy)](http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-myvaccines-cs).

#### Additional

As additional binding there are further ValueSets defined:

* **SNOMED-CT**:
 The ValueSet [CH VACD Snomed CT for VaccineCode](https://fhir.ch/ig/ch-term/ValueSet-ch-vacd-vaccines-snomedct-vs.html) which contains the codes in context of vaccines from the CodeSystem [SNOMED-CT](http://www.snomed.org/).
* **Immunoglobulin**:
 Immunoglobulins are no vaccinations but could protect patients for a short term of time. The ValueSet [CH VACD Swissmedic Authorized Immunoglobulin Codes](https://fhir.ch/ig/ch-term/ValueSet-ch-vacd-swissmedic-immunoglobulin-vs.html) which contains immunoglobulin codes from the CodeSystem [CH VACD Swissmedic Authorized Immunoglobulin Codes](https://fhir.ch/ig/ch-term/CodeSystem-ch-vacd-swissmedic-immunoglobulin-cs.html).
* **Immunsera**:
 Immune sera are purified antibodies derived from the blood serum of immunized humans or animals, which are used for passive immunization (immediate protection). The ValueSet [CH VACD Swissmedic Authorized Immunsera Codes](https://fhir.ch/ig/ch-term/ValueSet-ch-vacd-swissmedic-immunesera-vs.html) which contains immunoglobulin codes from the CodeSystem [CH VACD Swissmedic Authorized Immunsera Codes](https://fhir.ch/ig/ch-term/CodeSystem-ch-vacd-swissmedic-immunesera-cs.html).
* **NUVA**:
 The ValueSet [NUVA](https://smt.esante.gouv.fr/fhir/ValueSet/vs-nuva-all) which contains the codes from the CodeSystem [Terminologie - NUVA](https://smt.esante.gouv.fr/terminologie-nuva) defined by the [International Vaccine Codes Initiative (IVC)](https://ivci.org).

**Usages:**

* Refer to this Profile: [CH Core Immunization Recommendation](StructureDefinition-ch-core-immunization-recommendation.md)
* Examples for this Profile: [Immunization/CHCoreImmunizationExample](Immunization-CHCoreImmunizationExample.md) and [Immunization/CHCoreImmunizationExampleNUVA](Immunization-CHCoreImmunizationExampleNUVA.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-core|current/StructureDefinition/StructureDefinition-ch-core-immunization.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-immunization.csv), [Excel](StructureDefinition-ch-core-immunization.xlsx), [Schematron](StructureDefinition-ch-core-immunization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-immunization",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-immunization",
  "version" : "7.0.0-ballot",
  "name" : "CHCoreImmunization",
  "title" : "CH Core Immunization",
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
  "description" : "Base definition of the Immunization resource for use in Swiss specific use cases.",
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
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Immunization",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Immunization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Immunization",
      "path" : "Immunization",
      "short" : "CH Core Immunization"
    },
    {
      "id" : "Immunization.extension",
      "path" : "Immunization.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Immunization.extension:recorder",
      "path" : "Immunization.extension",
      "sliceName" : "recorder",
      "definition" : "The recorder Reference of the immunization. May be a Practitioner or a Patient",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author"]
      }]
    },
    {
      "id" : "Immunization.extension:indicationCode",
      "path" : "Immunization.extension",
      "sliceName" : "indicationCode",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epl-regulated-authorization-limitation-indication-code"]
      }]
    },
    {
      "id" : "Immunization.vaccineCode",
      "path" : "Immunization.vaccineCode",
      "binding" : {
        "extension" : [{
          "extension" : [{
            "url" : "key",
            "valueId" : "snomedct"
          },
          {
            "url" : "purpose",
            "valueCode" : "candidate"
          },
          {
            "url" : "valueSet",
            "valueCanonical" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-vaccines-snomedct-vs"
          },
          {
            "url" : "documentation",
            "valueMarkdown" : "Additional conformance binding to a vaccines value set out of the SNOMED CT code system."
          },
          {
            "url" : "shortDoco",
            "valueString" : "For when SNOMED CT code system is preferred"
          }],
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/additional-binding"
        },
        {
          "extension" : [{
            "url" : "key",
            "valueId" : "swissmedic"
          },
          {
            "url" : "purpose",
            "valueCode" : "candidate"
          },
          {
            "url" : "valueSet",
            "valueCanonical" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-immunoglobulin-vs"
          },
          {
            "url" : "documentation",
            "valueMarkdown" : "Additional conformance binding to a vaccines value set out of the Swissmedic Immunoglobulin code system."
          },
          {
            "url" : "shortDoco",
            "valueString" : "For when Swissmedic Immunoglobulin code system is preferred"
          }],
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/additional-binding"
        },
        {
          "extension" : [{
            "url" : "key",
            "valueId" : "swissmedic"
          },
          {
            "url" : "purpose",
            "valueCode" : "candidate"
          },
          {
            "url" : "valueSet",
            "valueCanonical" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-immunesera-vs"
          },
          {
            "url" : "documentation",
            "valueMarkdown" : "Additional conformance binding to a vaccines value set out of the Swissmedic Immunsera code system."
          },
          {
            "url" : "shortDoco",
            "valueString" : "For when Swissmedic Immunsera code system is preferred"
          }],
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/additional-binding"
        },
        {
          "extension" : [{
            "url" : "key",
            "valueId" : "nuva"
          },
          {
            "url" : "purpose",
            "valueCode" : "candidate"
          },
          {
            "url" : "valueSet",
            "valueCanonical" : "https://smt.esante.gouv.fr/terminologie-nuva?vs"
          },
          {
            "url" : "documentation",
            "valueMarkdown" : "Additional conformance binding to the NUVA vaccines value set."
          },
          {
            "url" : "shortDoco",
            "valueString" : "For usage of NUVA codes."
          }],
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/additional-binding"
        }],
        "strength" : "preferred",
        "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-vaccines-vs"
      }
    },
    {
      "id" : "Immunization.patient",
      "path" : "Immunization.patient",
      "short" : "Patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"]
      }]
    },
    {
      "id" : "Immunization.encounter",
      "path" : "Immunization.encounter",
      "short" : "Encounter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter"]
      }]
    },
    {
      "id" : "Immunization.route",
      "path" : "Immunization.route",
      "short" : "How vaccine entered body.",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-route-of-administration-vs"
      }
    },
    {
      "id" : "Immunization.performer.actor",
      "path" : "Immunization.performer.actor",
      "short" : "The performer who applied the vaccine",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"]
      }]
    },
    {
      "id" : "Immunization.protocolApplied.targetDisease",
      "path" : "Immunization.protocolApplied.targetDisease",
      "binding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
          "valueString" : "Disease"
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-isCommonBinding",
          "valueBoolean" : true
        }],
        "strength" : "preferred",
        "description" : "The code for disease.",
        "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs"
      }
    }]
  }
}

```
