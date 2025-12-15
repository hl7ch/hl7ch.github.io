# eCH-0046 Phone Category to FHIR Mapping - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-0046 Phone Category to FHIR Mapping**

## ConceptMap: eCH-0046 Phone Category to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ConceptMap/ech-46-phonecategory-to-fhir | *Version*:3.3.0 |
| Active as of 2023-03-10 | *Computable Name*:ECH46PhoneCategoryToFHIRMapping |
| **Copyright/Legal**: CC0-1.0 | |

 
ConceptMap to show the mapping from eCH-0046 phone category to FHIR 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ech-46-phonecategory-to-fhir",
  "url" : "http://fhir.ch/ig/ch-core/ConceptMap/ech-46-phonecategory-to-fhir",
  "version" : "3.3.0",
  "name" : "ECH46PhoneCategoryToFHIRMapping",
  "title" : "eCH-0046 Phone Category to FHIR Mapping",
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
  "description" : "ConceptMap to show the mapping from eCH-0046 phone category to FHIR",
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
  "sourceUri" : "http://fhir.ch/ig/ch-core/ValueSet/ech-46-phonecategory",
  "targetUri" : "http://hl7.org/fhir/ValueSet/contact-point-use",
  "group" : [
    {
      "source" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-phonecategory",
      "target" : "http://hl7.org/fhir/contact-point-use",
      "element" : [
        {
          "code" : "1",
          "display" : "PrivatePhone",
          "target" : [
            {
              "code" : "home",
              "display" : "Home",
              "equivalence" : "subsumes"
            }
          ]
        },
        {
          "code" : "2",
          "display" : "PrivateMobile",
          "target" : [
            {
              "code" : "home",
              "display" : "Home",
              "equivalence" : "subsumes"
            },
            {
              "code" : "mobile",
              "display" : "Mobile",
              "equivalence" : "subsumes"
            }
          ]
        },
        {
          "code" : "3",
          "display" : "PrivateFax",
          "target" : [
            {
              "code" : "home",
              "display" : "Home",
              "equivalence" : "subsumes"
            }
          ]
        },
        {
          "code" : "4",
          "display" : "PrivateInternetVoice",
          "target" : [
            {
              "code" : "home",
              "display" : "Home",
              "equivalence" : "subsumes"
            }
          ]
        },
        {
          "code" : "5",
          "display" : "BusinessCentral",
          "target" : [
            {
              "code" : "work",
              "display" : "Work",
              "equivalence" : "subsumes"
            }
          ]
        },
        {
          "code" : "6",
          "display" : "BusinessDirect",
          "target" : [
            {
              "code" : "work",
              "display" : "Work",
              "equivalence" : "subsumes"
            }
          ]
        },
        {
          "code" : "7",
          "display" : "BusinessMobile",
          "target" : [
            {
              "code" : "work",
              "display" : "Work",
              "equivalence" : "subsumes"
            },
            {
              "code" : "mobile",
              "display" : "Mobile",
              "equivalence" : "subsumes"
            }
          ]
        },
        {
          "code" : "8",
          "display" : "BusinessFax",
          "target" : [
            {
              "code" : "work",
              "display" : "Work",
              "equivalence" : "subsumes"
            }
          ]
        },
        {
          "code" : "9",
          "display" : "BusinessInternetVoice",
          "target" : [
            {
              "code" : "work",
              "display" : "Work",
              "equivalence" : "subsumes"
            }
          ]
        },
        {
          "code" : "10",
          "display" : "Pager",
          "target" : [
            {
              "code" : "mobile",
              "display" : "Mobile",
              "equivalence" : "equivalent"
            }
          ]
        }
      ]
    }
  ]
}

```
