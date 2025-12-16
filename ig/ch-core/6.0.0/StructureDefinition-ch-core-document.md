# CH Core Document - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Document**

## Resource Profile: CH Core Document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreDocument |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the Bundle resource for use in Swiss specific use cases. 

**Usages:**

* Derived from this Profile: [CH Core Document EPR](StructureDefinition-ch-core-document-epr.md)
* Examples for this Profile: [Bundle/1-ZuweisungZurRadiologischenDiagnostik-FHIR](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md), [Bundle/2-ResourceCrossReferencesDokument](Bundle-2-ResourceCrossReferencesDokument.md) and [Bundle/DocumentContainingOriginalRepresentationAsPdfA](Bundle-DocumentContainingOriginalRepresentationAsPdfA.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-document.csv), [Excel](StructureDefinition-ch-core-document.xlsx), [Schematron](StructureDefinition-ch-core-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-document",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document",
  "version" : "6.0.0",
  "name" : "CHCoreDocument",
  "title" : "CH Core Document",
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
  "description" : "Base definition of the Bundle resource for use in Swiss specific use cases.",
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
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Bundle",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "short" : "CH Core Document"
      },
      {
        "id" : "Bundle.identifier",
        "path" : "Bundle.identifier",
        "min" : 1
      },
      {
        "id" : "Bundle.identifier.system",
        "path" : "Bundle.identifier.system",
        "min" : 1
      },
      {
        "id" : "Bundle.identifier.value",
        "path" : "Bundle.identifier.value",
        "min" : 1
      },
      {
        "id" : "Bundle.type",
        "path" : "Bundle.type",
        "short" : "document",
        "fixedCode" : "document"
      },
      {
        "id" : "Bundle.timestamp",
        "path" : "Bundle.timestamp",
        "min" : 1
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resource"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Bundle.entry.fullUrl",
        "path" : "Bundle.entry.fullUrl",
        "min" : 1,
        "constraint" : [
          {
            "key" : "ch-core-doc-1",
            "severity" : "error",
            "human" : "The fullUrl must be an absolute URL server address or an UUID",
            "expression" : "startsWith('http') or startsWith('urn:uuid:') = true",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document"
          }
        ]
      },
      {
        "id" : "Bundle.entry:Composition",
        "path" : "Bundle.entry",
        "sliceName" : "Composition",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Patient",
        "path" : "Bundle.entry",
        "sliceName" : "Patient",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Patient.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Practitioner",
        "path" : "Bundle.entry",
        "sliceName" : "Practitioner",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Practitioner.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:PractitionerRole",
        "path" : "Bundle.entry",
        "sliceName" : "PractitionerRole",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:PractitionerRole.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Organization",
        "path" : "Bundle.entry",
        "sliceName" : "Organization",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Organization.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:RelatedPerson",
        "path" : "Bundle.entry",
        "sliceName" : "RelatedPerson",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:RelatedPerson.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Device",
        "path" : "Bundle.entry",
        "sliceName" : "Device",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Device.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/Device"]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Encounter",
        "path" : "Bundle.entry",
        "sliceName" : "Encounter",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Encounter.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Location",
        "path" : "Bundle.entry",
        "sliceName" : "Location",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Location.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-location"
            ]
          }
        ]
      }
    ]
  }
}

```
