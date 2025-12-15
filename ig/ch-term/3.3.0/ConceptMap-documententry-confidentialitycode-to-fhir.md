# DocumentEntry.confidentialityCode to FHIR mapping - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DocumentEntry.confidentialityCode to FHIR mapping**

## ConceptMap: DocumentEntry.confidentialityCode to FHIR mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ConceptMap/documententry-confidentialitycode-to-fhir | *Version*:3.3.0 |
| Active as of 2019-12-27 | *Computable Name*:DocumentEntryConfidentialityCodeToFHIRMapping |
| **Copyright/Legal**: CC0-1.0 | |

 
DocumentEntry.confidentialityCode to FHIR mapping 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "documententry-confidentialitycode-to-fhir",
  "url" : "http://fhir.ch/ig/ch-core/ConceptMap/documententry-confidentialitycode-to-fhir",
  "version" : "3.3.0",
  "name" : "DocumentEntryConfidentialityCodeToFHIRMapping",
  "title" : "DocumentEntry.confidentialityCode to FHIR mapping",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-12-27",
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
  "description" : "DocumentEntry.confidentialityCode to FHIR mapping",
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
  "sourceUri" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.confidentialityCode",
  "targetUri" : "http://terminology.hl7.org/ValueSet/v3-ConfidentialityClassification",
  "group" : [
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://terminology.hl7.org/CodeSystem/v3-Confidentiality",
      "element" : [
        {
          "code" : "17621005",
          "display" : "Normal (qualifier value)",
          "target" : [
            {
              "code" : "N",
              "display" : "normal",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "263856008",
          "display" : "Restricted (qualifier value)",
          "target" : [
            {
              "code" : "R",
              "display" : "restricted",
              "equivalence" : "equivalent"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://terminology.hl7.org/CodeSystem/v3-Confidentiality",
      "element" : [
        {
          "code" : "1141000195107",
          "display" : "Secret (qualifier value)",
          "target" : [
            {
              "code" : "V",
              "display" : "very restricted",
              "equivalence" : "equivalent"
            }
          ]
        }
      ]
    }
  ]
}

```
