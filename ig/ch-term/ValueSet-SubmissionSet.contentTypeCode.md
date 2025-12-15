# SubmissionSet.contentTypeCode - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SubmissionSet.contentTypeCode**

## ValueSet: SubmissionSet.contentTypeCode 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/SubmissionSet.contentTypeCode | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:SubmissionSetContentTypeCode |
| *Other Identifiers:*OID:2.16.756.5.30.1.127.3.10.1.40 (use: official, ) | |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
SubmissionSet.contentTypeCode 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/SubmissionSet.contentTypeCode) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "SubmissionSet.contentTypeCode",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.1.40--20230522175544",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2023-05-22T17:55:44+02:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/SubmissionSet.contentTypeCode",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.127.3.10.1.40"
    }
  ],
  "version" : "3.3.0",
  "name" : "SubmissionSetContentTypeCode",
  "title" : "SubmissionSet.contentTypeCode",
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
  "description" : "SubmissionSet.contentTypeCode",
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
  "copyright" : "This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org.",
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "71388002",
            "display" : "Procedure (procedure)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Prozedur"
              },
              {
                "language" : "fr-CH",
                "value" : "Procédure"
              },
              {
                "language" : "it-CH",
                "value" : "Procedura"
              },
              {
                "language" : "en-US",
                "value" : "Procedure"
              },
              {
                "language" : "rm-CH",
                "value" : "Procedura"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
