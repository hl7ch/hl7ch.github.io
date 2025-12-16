# CH Core Location - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Location**

## Resource Profile: CH Core Location 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-location | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreLocation |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the Location resource for use in Swiss specific use cases. 

**Usages:**

* Use this Profile: [CH Core Document](StructureDefinition-ch-core-document.md)
* Refer to this Profile: [CH Core Encounter](StructureDefinition-ch-core-encounter.md), [CH Core PractitionerRole](StructureDefinition-ch-core-practitionerrole.md) and [CH Core ServiceRequest](StructureDefinition-ch-core-servicerequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-location)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-location.csv), [Excel](StructureDefinition-ch-core-location.xlsx), [Schematron](StructureDefinition-ch-core-location.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-location",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-location",
  "version" : "6.0.0",
  "name" : "CHCoreLocation",
  "title" : "CH Core Location",
  "status" : "active",
  "date" : "2025-12-16T08:02:49+00:00",
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
  "description" : "Base definition of the Location resource for use in Swiss specific use cases.",
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
  "type" : "Location",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Location",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Location",
        "path" : "Location",
        "short" : "CH Core Location"
      },
      {
        "id" : "Location.telecom",
        "path" : "Location.telecom",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: Contact"
          }
        ]
      },
      {
        "id" : "Location.telecom.system",
        "path" : "Location.telecom.system",
        "min" : 1
      },
      {
        "id" : "Location.telecom.value",
        "path" : "Location.telecom.value",
        "min" : 1
      },
      {
        "id" : "Location.telecom:email",
        "path" : "Location.telecom",
        "sliceName" : "email",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-email"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: email"
          }
        ]
      },
      {
        "id" : "Location.telecom:phone",
        "path" : "Location.telecom",
        "sliceName" : "phone",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-phone"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: phone"
          }
        ]
      },
      {
        "id" : "Location.telecom:internet",
        "path" : "Location.telecom",
        "sliceName" : "internet",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-internet"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: internet"
          }
        ]
      },
      {
        "id" : "Location.address",
        "path" : "Location.address",
        "type" : [
          {
            "code" : "Address",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address-ech-10"
            ]
          }
        ]
      },
      {
        "id" : "Location.managingOrganization",
        "path" : "Location.managingOrganization",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      }
    ]
  }
}

```
