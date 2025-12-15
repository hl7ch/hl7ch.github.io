# eCH-0046 Email Category to FHIR Mapping - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-0046 Email Category to FHIR Mapping**

## ConceptMap: eCH-0046 Email Category to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ConceptMap/ech-46-emailcategory-to-fhir | *Version*:3.3.0 |
| Active as of 2023-03-10 | *Computable Name*:ECH46EmailCategoryToFHIRMapping |
| **Copyright/Legal**: CC0-1.0 | |

 
ConceptMap to show the mapping from eCH-0046 e-mail category to FHIR 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ech-46-emailcategory-to-fhir",
  "url" : "http://fhir.ch/ig/ch-core/ConceptMap/ech-46-emailcategory-to-fhir",
  "version" : "3.3.0",
  "name" : "ECH46EmailCategoryToFHIRMapping",
  "title" : "eCH-0046 Email Category to FHIR Mapping",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-03-10",
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
  "description" : "ConceptMap to show the mapping from eCH-0046 e-mail category to FHIR",
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
  "sourceUri" : "http://fhir.ch/ig/ch-core/ValueSet/ech-46-emailcategory",
  "targetUri" : "http://hl7.org/fhir/ValueSet/contact-point-use",
  "group" : [
    {
      "source" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-emailcategory",
      "target" : "http://hl7.org/fhir/contact-point-use",
      "element" : [
        {
          "code" : "1",
          "display" : "private",
          "target" : [
            {
              "code" : "home",
              "display" : "Home",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "2",
          "display" : "business",
          "target" : [
            {
              "code" : "work",
              "display" : "Work",
              "equivalence" : "equal"
            }
          ]
        }
      ]
    }
  ]
}

```
