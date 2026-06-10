# CH Core Consent - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Consent**

## Resource Profile: CH Core Consent 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/CHCoreConsent | *Version*:7.0.0-ballot |
| Active as of 2026-06-10 | *Computable Name*:CHCoreConsent |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the Consent resource for use in Swiss specific use cases. Uses the cross-version profile from hl7.fhir.uv.xver-r5.r4 to expose R5 Consent fields (grantor, manager, controller, decision, …) as extensions on R4 Consent. 

**Usages:**

* Derived from this Profile: [CH Core General Consent](StructureDefinition-CHCoreGeneralConsent.md)
* Examples for this Profile: [Consent/PatPortalParticipation-accepted](Consent-PatPortalParticipation-accepted.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-core|current/StructureDefinition/StructureDefinition-CHCoreConsent.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-CHCoreConsent.csv), [Excel](StructureDefinition-CHCoreConsent.xlsx), [Schematron](StructureDefinition-CHCoreConsent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "CHCoreConsent",
  "extension" : [{
    "extension" : [{
      "url" : "packageId",
      "valueId" : "hl7.fhir.uv.xver-r5.r4"
    },
    {
      "url" : "version",
      "valueString" : "0.1.0"
    }],
    "url" : "http://hl7.org/fhir/StructureDefinition/package-source"
  }],
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/CHCoreConsent",
  "version" : "7.0.0-ballot",
  "name" : "CHCoreConsent",
  "title" : "CH Core Consent",
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
  "description" : "Base definition of the Consent resource for use in Swiss specific use cases. Uses the cross-version profile from hl7.fhir.uv.xver-r5.r4 to expose R5 Consent fields (grantor, manager, controller, decision, ...) as extensions on R4 Consent.",
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Consent",
  "baseDefinition" : "http://hl7.org/fhir/5.0/StructureDefinition/profile-Consent",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Consent",
      "path" : "Consent"
    },
    {
      "id" : "Consent.extension:grantor",
      "path" : "Consent.extension",
      "sliceName" : "grantor"
    },
    {
      "id" : "Consent.extension:grantor.extension",
      "path" : "Consent.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Consent.extension:grantor.value[x]",
      "path" : "Consent.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Patient",
        "http://hl7.org/fhir/StructureDefinition/RelatedPerson",
        "http://hl7.org/fhir/StructureDefinition/Organization"]
      }]
    },
    {
      "id" : "Consent.extension:manager",
      "path" : "Consent.extension",
      "sliceName" : "manager"
    },
    {
      "id" : "Consent.extension:manager.extension",
      "path" : "Consent.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Consent.extension:manager.value[x]",
      "path" : "Consent.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/HealthcareService"]
      }]
    },
    {
      "id" : "Consent.extension:controller",
      "path" : "Consent.extension",
      "sliceName" : "controller"
    },
    {
      "id" : "Consent.extension:controller.extension",
      "path" : "Consent.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Consent.extension:controller.value[x]",
      "path" : "Consent.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Organization"]
      }]
    },
    {
      "id" : "Consent.category",
      "path" : "Consent.category",
      "short" : "Initial classification of consent, used with provision.code to identify consent types",
      "definition" : "Provides the initial classification of the consent. In combination with provision.code, it enables distinct identification of different consent types.",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/ConsentCategoriesVS"
      }
    },
    {
      "id" : "Consent.patient",
      "path" : "Consent.patient",
      "short" : "The patient to whom this consent applies to",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Patient"]
      }]
    },
    {
      "id" : "Consent.performer",
      "path" : "Consent.performer",
      "short" : "Grantee (Organization). For HealthcareService grantees, use the alternate-reference extension on performer.",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Organization"]
      }]
    },
    {
      "id" : "Consent.provision",
      "path" : "Consent.provision",
      "short" : "Exeptions/Constraints to the base decision",
      "min" : 1
    },
    {
      "id" : "Consent.provision.code",
      "path" : "Consent.provision.code",
      "short" : "Additional classification of consent, used with category to identify consent types",
      "definition" : "Provides additional classification of the consent. In combination with category, it enables distinct identification of different consent types.",
      "min" : 1,
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/ConsentProvisionCodesVS"
      }
    }]
  }
}

```
