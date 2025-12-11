# EMA - Intended Effect - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMA - Intended Effect**

## ValueSet: EMA - Intended Effect 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/ValueSet/ema-intended-effect | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:EMAIntendedEffectVS |
| **Copyright/Legal**: CC0-1.0 | |

 
Value Set for the Intended Effect from EMA used by SMC 

 **References** 

* [CH IDMP ClinicalUseDefinition Indication](StructureDefinition-ch-idmp-clinicalusedefinition-indication.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R5/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ema-intended-effect",
  "url" : "http://fhir.ch/ig/ch-epl/ValueSet/ema-intended-effect",
  "version" : "1.0.0",
  "name" : "EMAIntendedEffectVS",
  "title" : "EMA - Intended Effect",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-11T12:29:57+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "Value Set for the Intended Effect from EMA used by SMC",
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
  "compose" : {
    "include" : [
      {
        "system" : "http://spor.ema.europa.eu/v1/lists/200000003186"
      }
    ]
  }
}

```
