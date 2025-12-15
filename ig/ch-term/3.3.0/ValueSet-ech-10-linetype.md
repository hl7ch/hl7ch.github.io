# eCH-010 Address Line Type - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-010 Address Line Type**

## ValueSet: eCH-010 Address Line Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ValueSet/ech-10-linetype | *Version*:3.3.0 |
| Active as of 2018-11-27 | *Computable Name*:ECH10AddressLine |
| **Copyright/Legal**: CC0-1.0 | |

 
eCH-010 defines different address lines (addressLine1,2 and street) 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ech-10-linetype) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ech-10-linetype",
  "url" : "http://fhir.ch/ig/ch-core/ValueSet/ech-10-linetype",
  "version" : "3.3.0",
  "name" : "ECH10AddressLine",
  "title" : "eCH-010 Address Line Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2018-11-27",
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
  "description" : "eCH-010 defines different address lines (addressLine1,2 and street)",
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
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-10",
        "concept" : [
          {
            "code" : "addressLine1",
            "display" : "addressLine1",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Adresszeile 1 (optional)"
              },
              {
                "language" : "fr-CH",
                "value" : "Ligne d’adresse 1 (facultatif)"
              }
            ]
          },
          {
            "code" : "addressLine2",
            "display" : "addressLine2",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Adresszeile 2 (optional)"
              },
              {
                "language" : "fr-CH",
                "value" : "Ligne d’adresse 2 (facultatif)"
              }
            ]
          },
          {
            "code" : "street",
            "display" : "street",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Adressierung Strasse / Wohnung (optional)"
              },
              {
                "language" : "fr-CH",
                "value" : "Adressage rue / appartement (facultatif)"
              }
            ]
          },
          {
            "code" : "postOfficeBoxText",
            "display" : "postOfficeBoxText",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Adressierung Postfach (optional)"
              },
              {
                "language" : "fr-CH",
                "value" : "Adressage case postale (facultatif)"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
