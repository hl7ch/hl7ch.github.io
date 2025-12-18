# EPR policy set based on template 304 - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EPR policy set based on template 304**

## Resource Profile: EPR policy set based on template 304 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsentTemplate304 | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:PpqmConsentTemplate304 |
| **Copyright/Legal**: CC0-1.0 | |

 
EPR policy set based on template 304 – gives a particular healthcare professional read access to the patient's EPR, with delegation rights. 

**Usages:**

* Examples for this Profile: [Consent/PpqmConsentTemplate304Example](Consent-PpqmConsentTemplate304Example.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/PpqmConsentTemplate304)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-PpqmConsentTemplate304.csv), [Excel](StructureDefinition-PpqmConsentTemplate304.xlsx), [Schematron](StructureDefinition-PpqmConsentTemplate304.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "PpqmConsentTemplate304",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsentTemplate304",
  "version" : "5.0.0",
  "name" : "PpqmConsentTemplate304",
  "title" : "EPR policy set based on template 304",
  "status" : "active",
  "date" : "2025-12-18T15:42:00+00:00",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "EPR policy set based on template 304 -- gives a particular healthcare professional read access to the patient's EPR, with delegation rights.",
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
      "identity" : "ppqm-consent-xacml20-mapping",
      "uri" : "http://docs.oasis-open.org/xacml/2.0",
      "name" : "CH:PPQ XACML 2.0 Policy Set"
    },
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Consent",
  "baseDefinition" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsent",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Consent",
        "path" : "Consent"
      },
      {
        "id" : "Consent.identifier:templateId",
        "path" : "Consent.identifier",
        "sliceName" : "templateId"
      },
      {
        "id" : "Consent.identifier:templateId.value",
        "path" : "Consent.identifier.value",
        "patternString" : "304"
      },
      {
        "id" : "Consent.policyRule.coding",
        "path" : "Consent.policyRule.coding",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/PpqmReferencedPolicySetHcpWithDelegation"
        }
      },
      {
        "id" : "Consent.provision.period",
        "path" : "Consent.provision.period",
        "min" : 1
      },
      {
        "id" : "Consent.provision.actor.role.coding",
        "path" : "Consent.provision.actor.role.coding",
        "patternCoding" : {
          "system" : "urn:oid:2.16.756.5.30.1.127.3.10.6",
          "code" : "HCP"
        }
      },
      {
        "id" : "Consent.provision.actor.reference",
        "path" : "Consent.provision.actor.reference",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Practitioner"]
          }
        ]
      },
      {
        "id" : "Consent.provision.actor.reference.identifier",
        "path" : "Consent.provision.actor.reference.identifier",
        "min" : 1,
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-gln-identifier"
            ]
          }
        ]
      },
      {
        "id" : "Consent.provision.actor.reference.identifier.type.coding",
        "path" : "Consent.provision.actor.reference.identifier.type.coding",
        "patternCoding" : {
          "system" : "urn:ietf:rfc:3986",
          "code" : "urn:gs1:gln"
        }
      },
      {
        "id" : "Consent.provision.actor.reference.display",
        "path" : "Consent.provision.actor.reference.display",
        "max" : "0"
      },
      {
        "id" : "Consent.provision.purpose",
        "path" : "Consent.provision.purpose",
        "min" : 1,
        "max" : "1",
        "patternCoding" : {
          "system" : "urn:oid:2.16.756.5.30.1.127.3.10.5",
          "code" : "NORM"
        }
      }
    ]
  }
}

```
