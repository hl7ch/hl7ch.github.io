# CH Core General Consent - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core General Consent**

## Resource Profile: CH Core General Consent 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/CHCoreGeneralConsent | *Version*:7.0.0-ballot |
| Active as of 2026-06-10 | *Computable Name*:CHCoreGeneralConsent |
| **Copyright/Legal**: CC0-1.0 | |

 
Specialization of CHCoreConsent for the Unimedsuisse Generalkonsent (GC). 

**Usages:**

* Examples for this Profile: [Consent/GC-accepted](Consent-GC-accepted.md) and [Consent/GC-denied](Consent-GC-denied.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-core|current/StructureDefinition/StructureDefinition-CHCoreGeneralConsent.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-CHCoreGeneralConsent.csv), [Excel](StructureDefinition-CHCoreGeneralConsent.xlsx), [Schematron](StructureDefinition-CHCoreGeneralConsent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "CHCoreGeneralConsent",
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
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/CHCoreGeneralConsent",
  "version" : "7.0.0-ballot",
  "name" : "CHCoreGeneralConsent",
  "title" : "CH Core General Consent",
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
  "description" : "Specialization of CHCoreConsent for the Unimedsuisse Generalkonsent (GC).",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/CHCoreConsent",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Consent",
      "path" : "Consent"
    },
    {
      "id" : "Consent.status",
      "path" : "Consent.status",
      "short" : "active | inactive (GC-specific subset of ConsentState)",
      "definition" : "active = GC granted/rejected; inactive = GC withdrawn/canceled. The absence of a Consent resource corresponds to the state 'unknown' (no GC recorded yet).",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/CHCoreGeneralConsentStateVS"
      }
    },
    {
      "id" : "Consent.scope",
      "path" : "Consent.scope",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/consentscope",
          "code" : "research"
        }]
      }
    },
    {
      "id" : "Consent.dateTime",
      "path" : "Consent.dateTime",
      "short" : "Date the consent entry was made (mandatory)",
      "definition" : "Represents the date when the entry to the system was made. Mandatory in the GC context.",
      "min" : 1
    },
    {
      "id" : "Consent.performer",
      "path" : "Consent.performer",
      "short" : "Grantee (Organization). HealthcareService grantees are NOT allowed in this profile."
    },
    {
      "id" : "Consent.performer.extension:alternateRef",
      "path" : "Consent.performer.extension",
      "sliceName" : "alternateRef",
      "short" : "Forbidden: HealthcareService as grantee is excluded in the CH Core General Consent.",
      "min" : 0,
      "max" : "0",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/alternate-reference|5.3.0"]
      }]
    },
    {
      "id" : "Consent.policy",
      "path" : "Consent.policy",
      "short" : "Backing policy (Unimedsuisse Generalkonsent)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Consent.policy.uri",
      "path" : "Consent.policy.uri",
      "min" : 1,
      "patternUri" : "https://www.unimedsuisse.ch/de/projekte/generalkonsent"
    },
    {
      "id" : "Consent.provision.purpose",
      "path" : "Consent.provision.purpose",
      "short" : "Context of activities covered by this provision (must be HRESCH)",
      "definition" : "Purpose of use is fixed to HRESCH in the Unimedsuisse Generalkonsent.",
      "min" : 1
    },
    {
      "id" : "Consent.provision.purpose.system",
      "path" : "Consent.provision.purpose.system",
      "min" : 1,
      "patternUri" : "http://terminology.hl7.org/CodeSystem/v3-ActReason"
    },
    {
      "id" : "Consent.provision.purpose.code",
      "path" : "Consent.provision.purpose.code",
      "min" : 1,
      "patternCode" : "HRESCH"
    }]
  }
}

```
