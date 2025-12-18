# CH MHD Find Document References Comprehensive Response message - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH MHD Find Document References Comprehensive Response message**

## Resource Profile: CH MHD Find Document References Comprehensive Response message 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-documentreference-comprehensive-bundle | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:ChFindDocumentReferencesComprehensiveResponse |
| **Copyright/Legal**: CC0-1.0 | |

 
A profile on the Find Document References Comprehensive Response message for ITI-68 

**Usages:**

* Examples for this Profile: [Bundle/Bundle-FindDocumentReferences](Bundle-Bundle-FindDocumentReferences.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-mhd-documentreference-comprehensive-bundle)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-mhd-documentreference-comprehensive-bundle.csv), [Excel](StructureDefinition-ch-mhd-documentreference-comprehensive-bundle.xlsx), [Schematron](StructureDefinition-ch-mhd-documentreference-comprehensive-bundle.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-mhd-documentreference-comprehensive-bundle",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-documentreference-comprehensive-bundle",
  "version" : "5.0.0",
  "name" : "ChFindDocumentReferencesComprehensiveResponse",
  "title" : "CH MHD Find Document References Comprehensive Response message",
  "status" : "active",
  "date" : "2025-12-18T15:54:33+00:00",
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
  "description" : "A profile on the Find Document References Comprehensive Response message for ITI-68",
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
        "path" : "Bundle"
      },
      {
        "id" : "Bundle.type",
        "path" : "Bundle.type",
        "fixedCode" : "searchset"
      },
      {
        "id" : "Bundle.total",
        "path" : "Bundle.total",
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
        }
      },
      {
        "id" : "Bundle.entry.fullUrl",
        "path" : "Bundle.entry.fullUrl",
        "min" : 1,
        "constraint" : [
          {
            "key" : "ch-mhd-bdl-1",
            "severity" : "error",
            "human" : "The fullUrl must be an absolute URL server address or an URI for UUID/OID",
            "expression" : "startsWith('http') or startsWith('urn:uuid:') = true",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-documentreference-comprehensive-bundle"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:DocumentReference",
        "path" : "Bundle.entry",
        "sliceName" : "DocumentReference",
        "short" : "DocumentReference",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:DocumentReference.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "DocumentReference",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-documentreference-comprehensive"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:OperationOutcome",
        "path" : "Bundle.entry",
        "sliceName" : "OperationOutcome",
        "short" : "OperationOutcome",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Bundle.entry:OperationOutcome.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "OperationOutcome",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/OperationOutcome"]
          }
        ]
      }
    ]
  }
}

```
