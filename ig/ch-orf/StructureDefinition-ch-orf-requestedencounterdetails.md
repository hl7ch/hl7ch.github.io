# CH ORF Requested Encounter Details - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Requested Encounter Details**

## Extension: CH ORF Requested Encounter Details 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-requestedencounterdetails | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfRequestedEncounterDetails |
| **Copyright/Legal**: CC0-1.0 | |

Requested Encounter Details for ServiceRequest Fulfillment.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH ORF ServiceRequest](StructureDefinition-ch-orf-servicerequest.md)
* Examples for this Extension: [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md) and [ServiceRequest/sr-order-referral-form](ServiceRequest-sr-order-referral-form.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-requestedencounterdetails)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-requestedencounterdetails.csv), [Excel](StructureDefinition-ch-orf-requestedencounterdetails.xlsx), [Schematron](StructureDefinition-ch-orf-requestedencounterdetails.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-requestedencounterdetails",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-requestedencounterdetails",
  "version" : "3.0.2",
  "name" : "ChOrfRequestedEncounterDetails",
  "title" : "CH ORF Requested Encounter Details",
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
  "description" : "Requested Encounter Details for ServiceRequest Fulfillment.",
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
      "expression" : "ServiceRequest"
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
        "short" : "CH ORF Requested Encounter Details",
        "definition" : "Requested Encounter Details for ServiceRequest Fulfillment."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-requestedencounterdetails"
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
        "short" : "Requested Encounter Details for ServiceRequest Fulfillment",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-encounter"
            ]
          }
        ]
      }
    ]
  }
}

```
