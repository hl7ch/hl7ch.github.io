# CH ORF Urgent Notification Contact For This Documet - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Urgent Notification Contact For This Documet**

## Extension: CH ORF Urgent Notification Contact For This Documet 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-urgentnoficationcontactforthisdocument | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfUrgentNotificiationContactForThisDocument |
| **Copyright/Legal**: CC0-1.0 | |

An information recipient to notify for urgent matters (e.g. in a radiology service, the radiologist has to be called by phone right away at the time the doucment is received).

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH ORF Composition](StructureDefinition-ch-orf-composition.md)
* Examples for this Extension: [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md), [Bundle/external-diagnostics-order](Bundle-external-diagnostics-order.md) and [Composition/comp-order-referral-form](Composition-comp-order-referral-form.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-urgentnoficationcontactforthisdocument)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-urgentnoficationcontactforthisdocument.csv), [Excel](StructureDefinition-ch-orf-urgentnoficationcontactforthisdocument.xlsx), [Schematron](StructureDefinition-ch-orf-urgentnoficationcontactforthisdocument.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-urgentnoficationcontactforthisdocument",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-urgentnoficationcontactforthisdocument",
  "version" : "3.0.2",
  "name" : "ChOrfUrgentNotificiationContactForThisDocument",
  "title" : "CH ORF Urgent Notification Contact For This Documet",
  "status" : "active",
  "date" : "2025-12-16T09:36:47+00:00",
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
    }
  ],
  "description" : "An information recipient to notify for urgent matters (e.g. in a radiology service, the radiologist has to be called by phone right away at the time the doucment is received).",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Composition"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "CH ORF Urgent Notification Contact For This Documet",
        "definition" : "An information recipient to notify for urgent matters (e.g. in a radiology service, the radiologist has to be called by phone right away at the time the doucment is received)."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-urgentnoficationcontactforthisdocument"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Extension.value[x]:valueReference",
        "path" : "Extension.value[x]",
        "sliceName" : "valueReference",
        "short" : "valueReference",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
            ]
          }
        ]
      }
    ]
  }
}

```
