# CHEMEDEPRTimeQuantityUnitCode -> CdTyp9 - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CHEMEDEPRTimeQuantityUnitCode -> CdTyp9**

## ConceptMap: CHEMEDEPRTimeQuantityUnitCode -> CdTyp9 (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/ConceptMap/CHEMEDEPRTimeQuantityUnitCodeToCdTyp9 | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRTimeQuantityUnitCodeToCdTyp9 |
| **Copyright/Legal**: CC0-1.0 | |

 
Mapping from CHEMEDEPRTimeQuantityUnitCode codes to HCI CdTyp9 unit codes. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "CHEMEDEPRTimeQuantityUnitCodeToCdTyp9",
  "url" : "http://fhir.ch/ig/ch-emed-epr/ConceptMap/CHEMEDEPRTimeQuantityUnitCodeToCdTyp9",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRTimeQuantityUnitCodeToCdTyp9",
  "title" : "CHEMEDEPRTimeQuantityUnitCode -> CdTyp9",
  "status" : "draft",
  "experimental" : true,
  "date" : "2026-02-11T07:01:54+00:00",
  "publisher" : "CARA",
  "contact" : [
    {
      "name" : "CARA",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.cara.ch"
        }
      ]
    }
  ],
  "description" : "Mapping from CHEMEDEPRTimeQuantityUnitCode codes to HCI CdTyp9 unit codes.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH",
          "display" : "Switzerland"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "sourceCanonical" : "http://fhir.ch/ig/ch-emed-epr/ValueSet/ch-emed-epr-time-quantity-unit-code",
  "targetUri" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=9",
  "group" : [
    {
      "source" : "http://unitsofmeasure.org",
      "target" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=9",
      "element" : [
        {
          "code" : "s",
          "display" : "Second",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "min",
          "display" : "Minute",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "h",
          "display" : "Hour",
          "target" : [
            {
              "code" : "h",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "d",
          "display" : "Day",
          "target" : [
            {
              "code" : "Tag",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "mo",
          "display" : "Month",
          "target" : [
            {
              "code" : "Monat",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "a",
          "display" : "Year",
          "target" : [
            {
              "code" : "Jahr",
              "equivalence" : "equal"
            }
          ]
        }
      ]
    }
  ]
}

```
