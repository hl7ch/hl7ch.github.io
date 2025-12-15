# IHE Pharmaceutical Advice Status List - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IHE Pharmaceutical Advice Status List**

## ValueSet: IHE Pharmaceutical Advice Status List 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/ihe-pharmaceuticaladvicestatuslist | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:IHEPharmaceuticalAdviceStatusList |
| *Other Identifiers:*OID:2.16.756.5.30.1.1.11.4 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
IHE Pharmaceutical Advice Status List 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ihe-pharmaceuticaladvicestatuslist) via the XIG (Cross-IG) index for FHIR specifications. 

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ihe-pharmaceuticaladvicestatuslist",
  "meta" : {
    "lastUpdated" : "2023-01-26T15:08:34Z",
    "source" : "https://art-decor.org/fhir/4.0/ch-pharm-",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2023-01-26T10:55:04+01:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/ihe-pharmaceuticaladvicestatuslist",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.1.11.4"
    }
  ],
  "version" : "3.3.0",
  "name" : "IHEPharmaceuticalAdviceStatusList",
  "title" : "IHE Pharmaceutical Advice Status List",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:47:47+00:00",
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
  "immutable" : false,
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "urn:oid:1.3.6.1.4.1.19376.1.9.2.1",
        "concept" : [
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
                "valueString" : "Usage in case when this Pharmaceutical Advice references a Medication Treatment Plan Item:Medication Treatment Plan Item is active (allow to document complementary information).Usage in case when this Pharmaceutical Advice references a Prescription Item:Prescription Item is active (e.g., can be dispensed, no change expected but allowed if recommended medication given).Usage in case when this Pharmaceutical Advice references a Dispense Item:Dispense Item is active (e.g., resumed from being suspended)."
              }
            ],
            "code" : "OK",
            "display" : "OK"
          },
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
                "valueString" : "Usage in case when this Pharmaceutical Advice references a Medication Treatment Plan Item:Change of planning.Usage in case when this Pharmaceutical Advice references a Prescription Item:Dispense with change expected.Usage in case when this Pharmaceutical Advice references a Dispense Item:Change in any information element of the Dispense Item except the medication (e.g., dosageinstructions, patient instructions, etc.). The original Medicine Entry Item referenced by the Dispense Item shall be unchanged."
              }
            ],
            "code" : "CHANGE",
            "display" : "CHANGE"
          },
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
                "valueString" : "Usage in case when this Pharmaceutical Advice references a Medication Treatment Plan Item:Change of planning.Usage in case when this Pharmaceutical Advice references a Prescription Item:Dispense with change expected.Usage in case when this Pharmaceutical Advice references a Dispense Item:Change in any information element of the Dispense Item except the medication (e.g., dosageinstructions, patient instructions, etc.). The original Medicine Entry Item referenced by the Dispense Item shall be unchanged."
              }
            ],
            "code" : "REFUSE",
            "display" : "REFUSE"
          },
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
                "valueString" : "Usage in case when this Pharmaceutical Advice references a Medication Treatment Plan Item:Definite cancelation of the Medication Treatment Plan Item (item will not be part of the treatment plan any more).Usage in case when this Pharmaceutical Advice references a Prescription Item:Definite cancelation of the Prescription Item (item will not be dispensed).Usage in case when this Pharmaceutical Advice references a Dispense item:Definite stopping of the dispensed medication (patient stops intake of the medication)."
              }
            ],
            "code" : "CANCEL",
            "display" : "CANCEL"
          },
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
                "valueString" : "Usage in case when this Pharmaceutical Advice references a Medication Treatment Plan Item: Medication Treatment Plan Item is temporarily set to suspended with the decision on how to continue postponed to a later point of time (e.g., release it again by setting it to OK, finally cancel it by setting to CANCEL, etc.). The item shall not be part of the active treatment plan during set to suspended.Usage in case when this Pharmaceutical Advice references a Prescription Item:Prescription Item is temporarily set to suspended with the decision on how to continue postponed to a later point of time (e.g., release it again by setting it to OK, finally cancel it by setting to CANCEL, etc.). The item shall not be dispensed during set to suspended.Usage in case when this Pharmaceutical Advice references a Dispense item:Dispense item is temporarily set to suspended with the decision on how to continue postponed to a later point of time (e.g., release it again by setting it to OK, finally cancel it by setting to CANCEL, etc.). The medication shall not be taken by the patient during set to suspended."
              }
            ],
            "code" : "SUSPEND",
            "display" : "SUSPEND"
          },
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
                "valueString" : "General usage: Comment on the referenced item."
              }
            ],
            "code" : "COMMENT",
            "display" : "COMMENT"
          }
        ]
      }
    ]
  }
}

```
