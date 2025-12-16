# CH AllergyIntolerance - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH AllergyIntolerance**

## Resource Profile: CH AllergyIntolerance 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance | *Version*:3.0.1 |
| Active as of 2025-12-16 | *Computable Name*:CHAllergyIntolerance |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile represents the constraints applied to the AllergyIntolerance resource in the Swiss context (based on CH IPS). A record of an allergy or intolerance is represented in the Swiss EPR, in a TransitionOfCare transaction or similar as an instance of an AllergyIntolerance resource constrained by this profile. It documents the relevant allergies or intolerances for a patient, describing the kind of reaction (e.g. rash, anaphylaxis,..); preferably the agents that cause it; and optionally the criticality and the certainty of the allergy. 

 
This profile constrains the representation of a record of an allergy or intolerance of the patient, in the context of a Swiss patient in adaption of the one specified by the IPS project of HL7 International. 

**Usages:**

* Refer to this Profile: [CH AllergyIntolerance Composition](StructureDefinition-ch-allergyintolerance-composition-epr.md)
* Examples for this Profile: [AllergyIntolerance/CH-AllergyIntolerance-MultipleManifestationEntries](AllergyIntolerance-CH-AllergyIntolerance-MultipleManifestationEntries.md), [AllergyIntolerance/CH-AllergyIntolerance-MultipleReactionEntries](AllergyIntolerance-CH-AllergyIntolerance-MultipleReactionEntries.md) and [AllergyIntolerance/ExAllergy](AllergyIntolerance-ExAllergy.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-allergyintolerance|current/StructureDefinition/ch-allergyintolerance)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-allergyintolerance.csv), [Excel](StructureDefinition-ch-allergyintolerance.xlsx), [Schematron](StructureDefinition-ch-allergyintolerance.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-allergyintolerance",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ips/StructureDefinition/AllergyIntolerance-uv-ips"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance",
  "version" : "3.0.1",
  "name" : "CHAllergyIntolerance",
  "title" : "CH AllergyIntolerance",
  "status" : "active",
  "date" : "2025-12-16T16:31:02+00:00",
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
  "description" : "This profile represents the constraints applied to the AllergyIntolerance resource in the Swiss context (based on CH IPS). A record of an allergy or intolerance is represented in the Swiss EPR, in a TransitionOfCare transaction or similar as an instance of an AllergyIntolerance resource constrained by this profile.\r\nIt documents the relevant allergies or intolerances for a patient, describing the kind of reaction (e.g. rash, anaphylaxis,..); preferably the agents that cause it; and optionally the criticality and the certainty of the allergy.",
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
  "purpose" : "This profile constrains the representation of a record of an allergy or intolerance of the patient, in the context of a Swiss patient in adaption of the one specified by the IPS project of HL7 International.",
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "AllergyIntolerance",
  "baseDefinition" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-allergyintolerance",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "AllergyIntolerance",
        "path" : "AllergyIntolerance",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.extension",
        "path" : "AllergyIntolerance.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "AllergyIntolerance.extension:abatement-datetime",
        "path" : "AllergyIntolerance.extension",
        "sliceName" : "abatement-datetime",
        "short" : "Abatement datetime",
        "definition" : "The date or estimated date that the condition resolved or went into remission.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/allergyintolerance-abatement|5.3.0-ballot-tc1"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.clinicalStatus",
        "path" : "AllergyIntolerance.clinicalStatus",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.verificationStatus",
        "path" : "AllergyIntolerance.verificationStatus",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.type",
        "path" : "AllergyIntolerance.type",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.category",
        "path" : "AllergyIntolerance.category",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.criticality",
        "path" : "AllergyIntolerance.criticality",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.code",
        "path" : "AllergyIntolerance.code",
        "min" : 1,
        "mustSupport" : true,
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceValueSet"
        }
      },
      {
        "id" : "AllergyIntolerance.onset[x]",
        "path" : "AllergyIntolerance.onset[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "AllergyIntolerance.onset[x]:onsetDateTime",
        "path" : "AllergyIntolerance.onset[x]",
        "sliceName" : "onsetDateTime",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.reaction",
        "path" : "AllergyIntolerance.reaction",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.reaction.extension:certainty",
        "path" : "AllergyIntolerance.reaction.extension",
        "sliceName" : "certainty",
        "short" : "Statement about the degree of clinical certainty that the specific substance was the cause of the manifestation in this reaction event."
      },
      {
        "id" : "AllergyIntolerance.reaction.extension:duration",
        "path" : "AllergyIntolerance.reaction.extension",
        "sliceName" : "duration",
        "short" : "The amount of time that the Adverse Reaction persisted"
      },
      {
        "id" : "AllergyIntolerance.reaction.extension:location",
        "path" : "AllergyIntolerance.reaction.extension",
        "sliceName" : "location",
        "short" : "The anatomical location / body site(s) where the symptoms manifested"
      },
      {
        "id" : "AllergyIntolerance.reaction.extension:exposureDate",
        "path" : "AllergyIntolerance.reaction.extension",
        "sliceName" : "exposureDate",
        "short" : "Record of the date and/or time of the first exposure to the Substance for this Reaction Event."
      },
      {
        "id" : "AllergyIntolerance.reaction.extension:exposureDuration",
        "path" : "AllergyIntolerance.reaction.extension",
        "sliceName" : "exposureDuration",
        "short" : "The amount of time the individual was exposed to the Substance"
      },
      {
        "id" : "AllergyIntolerance.reaction.extension:management",
        "path" : "AllergyIntolerance.reaction.extension",
        "sliceName" : "management",
        "short" : "Text description about the clinical management provided."
      },
      {
        "id" : "AllergyIntolerance.reaction.substance",
        "path" : "AllergyIntolerance.reaction.substance",
        "mustSupport" : true,
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceReactionSubstanceValueSet"
        }
      },
      {
        "id" : "AllergyIntolerance.reaction.manifestation",
        "path" : "AllergyIntolerance.reaction.manifestation",
        "mustSupport" : true,
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceReactionManifestationValueSet"
        }
      },
      {
        "id" : "AllergyIntolerance.reaction.onset",
        "path" : "AllergyIntolerance.reaction.onset",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.reaction.severity",
        "path" : "AllergyIntolerance.reaction.severity",
        "mustSupport" : true
      }
    ]
  }
}

```
