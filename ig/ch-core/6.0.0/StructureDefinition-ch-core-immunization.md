# CH Core Immunization - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Immunization**

## Resource Profile: CH Core Immunization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-immunization | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreImmunization |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the Immunization resource for use in Swiss specific use cases. 

**Usages:**

* Refer to this Profile: [CH Core Immunization Recommendation](StructureDefinition-ch-core-immunization-recommendation.md)
* Examples for this Profile: [Immunization/CHCoreImmunizationExample](Immunization-CHCoreImmunizationExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-immunization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-immunization.csv), [Excel](StructureDefinition-ch-core-immunization.xlsx), [Schematron](StructureDefinition-ch-core-immunization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-immunization",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-immunization",
  "version" : "6.0.0",
  "name" : "CHCoreImmunization",
  "title" : "CH Core Immunization",
  "status" : "active",
  "date" : "2025-12-16T07:58:48+00:00",
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
  "description" : "Base definition of the Immunization resource for use in Swiss specific use cases.",
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Immunization",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Immunization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Immunization",
        "path" : "Immunization",
        "short" : "CH Core Immunization"
      },
      {
        "id" : "Immunization.extension",
        "path" : "Immunization.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
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
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author"
            ]
          }
        ]
      },
      {
        "id" : "Immunization.vaccineCode",
        "path" : "Immunization.vaccineCode",
        "binding" : {
          "extension" : [
            {
              "extension" : [
                {
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
                }
              ],
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/additional-binding"
            },
            {
              "extension" : [
                {
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
                }
              ],
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/additional-binding"
            }
          ],
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-vaccines-vs"
        }
      },
      {
        "id" : "Immunization.patient",
        "path" : "Immunization.patient",
        "short" : "Patient",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ]
      },
      {
        "id" : "Immunization.encounter",
        "path" : "Immunization.encounter",
        "short" : "Encounter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter"
            ]
          }
        ]
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
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "Immunization.protocolApplied.targetDisease",
        "path" : "Immunization.protocolApplied.targetDisease",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "Disease"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-isCommonBinding",
              "valueBoolean" : true
            }
          ],
          "strength" : "preferred",
          "description" : "The code for disease.",
          "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs"
        }
      }
    ]
  }
}

```
