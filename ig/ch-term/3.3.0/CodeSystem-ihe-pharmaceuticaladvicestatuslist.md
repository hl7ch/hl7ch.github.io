# IHE Pharmaceutical Advice Status List - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IHE Pharmaceutical Advice Status List**

## CodeSystem: IHE Pharmaceutical Advice Status List 

| | |
| :--- | :--- |
| *Official URL*:urn:oid:1.3.6.1.4.1.19376.1.9.2.1 | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:IHEPharmaceuticalAdviceStatusList |
| **Copyright/Legal**: CC0-1.0 | |

 
IHE Pharmaceutical Advice Status List 

 This Code system is referenced in the content logical definition of the following value sets: 

* [IHEPharmaceuticalAdviceStatusList](ValueSet-ihe-pharmaceuticaladvicestatuslist.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ihe-pharmaceuticaladvicestatuslist",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.1.11.4--20230126105504"
  },
  "url" : "urn:oid:1.3.6.1.4.1.19376.1.9.2.1",
  "version" : "3.3.0",
  "name" : "IHEPharmaceuticalAdviceStatusList",
  "title" : "IHE Pharmaceutical Advice Status List",
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
  "description" : "IHE Pharmaceutical Advice Status List",
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
      "code" : "OK",
      "display" : "OK"
    },
    {
      "code" : "CHANGE",
      "display" : "CHANGE"
    },
    {
      "code" : "REFUSE",
      "display" : "REFUSE"
    },
    {
      "code" : "CANCEL",
      "display" : "CANCEL"
    },
    {
      "code" : "SUSPEND",
      "display" : "SUSPEND"
    },
    {
      "code" : "COMMENT",
      "display" : "COMMENT"
    }
  ]
}

```
