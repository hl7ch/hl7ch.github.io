# CH IDMP DocumentReference - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IDMP DocumentReference**

## Resource Profile: CH IDMP DocumentReference 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-documentreference | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:CHIDMPDocumentReference |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the DocumentReference resource for representing professional information and patient information as attachments. 

**Usages:**

* Use this Profile: [IDMP Bundle](StructureDefinition-ch-idmp-bundle.md)
* Refer to this Profile: [IDMP MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md)
* Examples for this Profile: [DocumentReference/DocRef-FI-Abrilada](DocumentReference-DocRef-FI-Abrilada.md), [DocumentReference/DocRef-FI-Cuprior](DocumentReference-DocRef-FI-Cuprior.md), [DocumentReference/DocRef-FI-Entocort](DocumentReference-DocRef-FI-Entocort.md), [DocumentReference/DocRef-FI-Estalis](DocumentReference-DocRef-FI-Estalis.md)...Show 9 more,[DocumentReference/DocRef-FI-Keytruda](DocumentReference-DocRef-FI-Keytruda.md),[DocumentReference/DocRef-FI-Paxlovid](DocumentReference-DocRef-FI-Paxlovid.md),[DocumentReference/DocRef-FI-Triogen](DocumentReference-DocRef-FI-Triogen.md),[DocumentReference/DocRef-PI-Abrilada](DocumentReference-DocRef-PI-Abrilada.md),[DocumentReference/DocRef-PI-Cuprior](DocumentReference-DocRef-PI-Cuprior.md),[DocumentReference/DocRef-PI-Entocort](DocumentReference-DocRef-PI-Entocort.md),[DocumentReference/DocRef-PI-Estalis](DocumentReference-DocRef-PI-Estalis.md),[DocumentReference/DocRef-PI-Paxlovid](DocumentReference-DocRef-PI-Paxlovid.md)and[DocumentReference/DocRef-PI-Triogen](DocumentReference-DocRef-PI-Triogen.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/ch-idmp-documentreference)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-documentreference.csv), [Excel](StructureDefinition-ch-idmp-documentreference.xlsx), [Schematron](StructureDefinition-ch-idmp-documentreference.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-documentreference",
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-documentreference",
  "version" : "1.0.0",
  "name" : "CHIDMPDocumentReference",
  "title" : "CH IDMP DocumentReference",
  "status" : "active",
  "date" : "2025-12-11T12:29:57+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "Profile of the DocumentReference resource for representing professional information and patient information as attachments.",
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
  "fhirVersion" : "5.0.0",
  "mapping" : [
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "fhircomposition",
      "uri" : "http://hl7.org/fhir/composition",
      "name" : "FHIR Composition"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "xds",
      "uri" : "http://ihe.net/xds",
      "name" : "XDS metadata equivalent"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 V2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DocumentReference",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DocumentReference",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DocumentReference",
        "path" : "DocumentReference",
        "short" : "CH IDMP DocumentReference"
      },
      {
        "id" : "DocumentReference.content.attachment.url",
        "path" : "DocumentReference.content.attachment.url",
        "min" : 1
      }
    ]
  }
}

```
