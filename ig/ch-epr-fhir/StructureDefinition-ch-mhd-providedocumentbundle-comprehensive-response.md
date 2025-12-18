# CH MHD Provide Document Bundle Comprehensive Response - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH MHD Provide Document Bundle Comprehensive Response**

## Resource Profile: CH MHD Provide Document Bundle Comprehensive Response 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-providedocumentbundle-comprehensive-response | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:IHE_MHD_ProvideDocumentBundle_Comprehensive_Response_CH |
| **Copyright/Legal**: CC0-1.0 | |

 
IHE MHD profile on Response of Provide Document Bundle (ITI-65) transaction with Comprehensive Metadata. 

**Usages:**

* Examples for this Profile: [Bundle/BundleProvideDocument-Response](Bundle-BundleProvideDocument-Response.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-mhd-providedocumentbundle-comprehensive-response)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-mhd-providedocumentbundle-comprehensive-response.csv), [Excel](StructureDefinition-ch-mhd-providedocumentbundle-comprehensive-response.xlsx), [Schematron](StructureDefinition-ch-mhd-providedocumentbundle-comprehensive-response.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-mhd-providedocumentbundle-comprehensive-response",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-providedocumentbundle-comprehensive-response",
  "version" : "5.0.0",
  "name" : "IHE_MHD_ProvideDocumentBundle_Comprehensive_Response_CH",
  "title" : "CH MHD Provide Document Bundle Comprehensive Response",
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
  "description" : "IHE MHD profile on Response of Provide Document Bundle (ITI-65) transaction with Comprehensive Metadata.",
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
        "fixedCode" : "transaction-response",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.link",
        "path" : "Bundle.link",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.link.url",
        "path" : "Bundle.link.url",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "short" : "One entry for each entry in the request, in the same order as received",
        "min" : 2,
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry.response",
        "path" : "Bundle.entry.response",
        "short" : "Indicating the results of processing the entry",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry.response.status",
        "path" : "Bundle.entry.response.status",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry.response.location",
        "path" : "Bundle.entry.response.location",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry.response.etag",
        "path" : "Bundle.entry.response.etag",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry.response.outcome",
        "path" : "Bundle.entry.response.outcome",
        "mustSupport" : true
      }
    ]
  }
}

```
