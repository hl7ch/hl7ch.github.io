# Sex eCH-011 to FHIR mapping - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sex eCH-011 to FHIR mapping**

## ConceptMap: Sex eCH-011 to FHIR mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ConceptMap/sex-ech11-to-fhir | *Version*:3.3.0 |
| Active as of 2018-11-26 | *Computable Name*:SexECH011ToFHIRMapping |
| **Copyright/Legal**: CC0-1.0 | |

 
Sex eCH-011 to FHIR mapping 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "sex-ech11-to-fhir",
  "url" : "http://fhir.ch/ig/ch-core/ConceptMap/sex-ech11-to-fhir",
  "version" : "3.3.0",
  "name" : "SexECH011ToFHIRMapping",
  "title" : "Sex eCH-011 to FHIR mapping",
  "status" : "active",
  "experimental" : false,
  "date" : "2018-11-26",
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
  "description" : "Sex eCH-011 to FHIR mapping",
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
  "sourceUri" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-sex",
  "targetUri" : "http://hl7.org/fhir/ValueSet/administrative-gender",
  "group" : [
    {
      "source" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-sex",
      "target" : "http://hl7.org/fhir/administrative-gender",
      "element" : [
        {
          "code" : "1",
          "display" : "männlich",
          "target" : [
            {
              "code" : "male",
              "display" : "Male",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "2",
          "display" : "weiblich",
          "target" : [
            {
              "code" : "female",
              "display" : "female",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "3",
          "display" : "unbestimmt",
          "target" : [
            {
              "code" : "other",
              "display" : "Other",
              "equivalence" : "equivalent"
            }
          ]
        }
      ]
    }
  ]
}

```
