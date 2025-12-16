# CH eTOC Device - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH eTOC Device**

## Resource Profile: CH eTOC Device 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-device | *Version*:3.0.1 |
| Active as of 2025-12-16 | *Computable Name*:ChEtocDevice |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the Device resource in the context of electronic transition of care. 

**Usages:**

* Refer to this Profile: [CH eTOC Composition](StructureDefinition-ch-etoc-composition.md) and [CH eTOC Service Request](StructureDefinition-ch-etoc-servicerequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-etoc|current/StructureDefinition/ch-etoc-device)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-etoc-device.csv), [Excel](StructureDefinition-ch-etoc-device.xlsx), [Schematron](StructureDefinition-ch-etoc-device.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-etoc-device",
  "url" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-device",
  "version" : "3.0.1",
  "name" : "ChEtocDevice",
  "title" : "CH eTOC Device",
  "status" : "active",
  "date" : "2025-12-16T15:56:55+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "description" : "Definition for the Device resource in the context of electronic transition of care.",
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
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "udi",
      "uri" : "http://fda.gov/UDI",
      "name" : "UDI Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Device",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Device",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Device",
        "path" : "Device",
        "short" : "CH eTOC Device"
      },
      {
        "id" : "Device.deviceName",
        "path" : "Device.deviceName",
        "mustSupport" : true
      },
      {
        "id" : "Device.deviceName.name",
        "path" : "Device.deviceName.name",
        "mustSupport" : true
      },
      {
        "id" : "Device.deviceName.type",
        "path" : "Device.deviceName.type",
        "mustSupport" : true
      }
    ]
  }
}

```
