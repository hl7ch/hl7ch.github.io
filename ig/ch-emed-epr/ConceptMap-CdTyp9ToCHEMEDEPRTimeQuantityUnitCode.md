# CdTyp9 -> CHEMEDEPRTimeQuantityUnitCode - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CdTyp9 -> CHEMEDEPRTimeQuantityUnitCode**

## ConceptMap: CdTyp9 -> CHEMEDEPRTimeQuantityUnitCode (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/ConceptMap/CdTyp9ToCHEMEDEPRTimeQuantityUnitCode | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CdTyp9ToCHEMEDEPRTimeQuantityUnitCode |
| **Copyright/Legal**: CC0-1.0 | |

 
Mapping from HCI CdTyp9 unit codes to CHEMEDEPRTimeQuantityUnitCode codes. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "CdTyp9ToCHEMEDEPRTimeQuantityUnitCode",
  "url" : "http://fhir.ch/ig/ch-emed-epr/ConceptMap/CdTyp9ToCHEMEDEPRTimeQuantityUnitCode",
  "version" : "3.0.0",
  "name" : "CdTyp9ToCHEMEDEPRTimeQuantityUnitCode",
  "title" : "CdTyp9 -> CHEMEDEPRTimeQuantityUnitCode",
  "status" : "draft",
  "experimental" : true,
  "date" : "2026-02-11T07:11:04+00:00",
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
  "description" : "Mapping from HCI CdTyp9 unit codes to CHEMEDEPRTimeQuantityUnitCode codes.",
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
  "sourceUri" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=9",
  "targetCanonical" : "http://fhir.ch/ig/ch-emed-epr/ValueSet/ch-emed-epr-time-quantity-unit-code",
  "group" : [
    {
      "source" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=9",
      "target" : "http://unitsofmeasure.org",
      "element" : [
        {
          "code" : "h",
          "target" : [
            {
              "code" : "h",
              "display" : "Hour",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "Jahr",
          "target" : [
            {
              "code" : "a",
              "display" : "Year",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "Monat",
          "target" : [
            {
              "code" : "mo",
              "display" : "Month",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "Tag",
          "target" : [
            {
              "code" : "d",
              "display" : "Day",
              "equivalence" : "equal"
            }
          ]
        }
      ]
    }
  ]
}

```
