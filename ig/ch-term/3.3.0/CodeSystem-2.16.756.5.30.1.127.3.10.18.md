# ch-ehealth-codesystem-eprdeletionstatus - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ch-ehealth-codesystem-eprdeletionstatus**

## CodeSystem: ch-ehealth-codesystem-eprdeletionstatus 

| | |
| :--- | :--- |
| *Official URL*:urn:oid:2.16.756.5.30.1.127.3.10.18 | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:ChEhealthCodesystemEprDeletionStatus |
| **Copyright/Legal**: CC0-1.0 | |

 
Deletion codes as per supplement 1 to Annex 5 EPRO-FDHA. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DocumentEntryExtEprDeletionStauts](ValueSet-DocumentEntry.Ext.EprDeletionStatus.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "2.16.756.5.30.1.127.3.10.18",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.15.3--20230531200428"
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2023-05-31T20:04:28+02:00"
      }
    }
  ],
  "url" : "urn:oid:2.16.756.5.30.1.127.3.10.18",
  "version" : "3.3.0",
  "name" : "ChEhealthCodesystemEprDeletionStatus",
  "title" : "ch-ehealth-codesystem-eprdeletionstatus",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:36:18+00:00",
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
  "description" : "Deletion codes as per supplement 1 to Annex 5 EPRO-FDHA.",
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
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "urn:e-health-suisse:2019:deletionStatus:deletionProhibited",
      "display" : "Deletion prohibited"
    },
    {
      "code" : "urn:e-health-suisse:2019:deletionStatus:deletionRequested",
      "display" : "Deletion requested"
    },
    {
      "code" : "urn:e-health-suisse:2019:deletionStatus:deletionNotRequested",
      "display" : "Deletion not Requested"
    }
  ]
}

```
