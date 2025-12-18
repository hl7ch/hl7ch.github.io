# CH PIXm Feed Organization - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PIXm Feed Organization**

## Resource Profile: CH PIXm Feed Organization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-feed-organization | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHPIXmFeedOrganization |
| **Copyright/Legal**: CC0-1.0 | |

 
The organization information which can be provided in the PIXm Feed according to the EPR. The organization identifier SHALL be expressed as an ISO OID. The organization SHALL have at least one of telecom, address, or contact person to be present. 

**Usages:**

* Refer to this Profile: [CH PIXm Patient Feed](StructureDefinition-ch-pixm-patient-feed.md)
* Examples for this Profile: [PDQm Provider Organization Gruppenpraxis](Organization-GruppenpraxisCH.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-pixm-feed-organization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-pixm-feed-organization.csv), [Excel](StructureDefinition-ch-pixm-feed-organization.xlsx), [Schematron](StructureDefinition-ch-pixm-feed-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-pixm-feed-organization",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-feed-organization",
  "version" : "5.0.0",
  "name" : "CHPIXmFeedOrganization",
  "title" : "CH PIXm Feed Organization",
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
  "description" : "The organization information which can be provided in the PIXm Feed according to the EPR. The organization identifier SHALL be expressed as an ISO OID. The organization SHALL have at least one of telecom, address, or contact person to be present.",
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
      "identity" : "eCH",
      "uri" : "https://www.ech.ch/",
      "name" : "eCH Standards"
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
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Organization",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Organization",
        "path" : "Organization",
        "short" : "CH PIXm Feed Organization",
        "constraint" : [
          {
            "key" : "ch-epr-fhir-org-1",
            "severity" : "error",
            "human" : "The organization SHALL have at least one of telecom, address, or contact person to be present.",
            "expression" : "(telecom.count() + address.count() + contact.name.count()) > 0",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-feed-organization"
          }
        ]
      },
      {
        "id" : "Organization.identifier",
        "path" : "Organization.identifier",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Organization.identifier:OID",
        "path" : "Organization.identifier",
        "sliceName" : "OID",
        "min" : 0,
        "max" : "1",
        "patternIdentifier" : {
          "system" : "urn:ietf:rfc:3986"
        }
      },
      {
        "id" : "Organization.identifier:OID.system",
        "path" : "Organization.identifier.system",
        "min" : 1
      },
      {
        "id" : "Organization.identifier:OID.value",
        "path" : "Organization.identifier.value",
        "short" : "The value SHALL be expressed as an ISO OID (e.g., 'urn:oid:2.999.1.2.3.4')",
        "min" : 1,
        "mustSupport" : true
      }
    ]
  }
}

```
