# Modality that created the series - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modality that created the series**

## ValueSet: Modality that created the series (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-acquisition-modality | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderAcquisitionModality |
| **Copyright/Legal**: CC0-1.0 | |

 
Valuset for the Type of equipment, or function or technique of that equipment, that created the data 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

No Expansion for this valueset (not supported by Publication Tooling)

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
  "id" : "ch-rad-order-acquisition-modality",
  "url" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-acquisition-modality",
  "version" : "2.0.1",
  "name" : "ChRadOrderAcquisitionModality",
  "title" : "Modality that created the series",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-12-17T07:17:47+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "description" : "Valuset for the Type of equipment, or function or technique of that equipment, that created the data",
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
        "system" : "https://dicom.nema.org/medical/dicom/current/output/chtml/part16/sect_CID_33.html"
      },
      {
        "system" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-dicom-unknown"
      }
    ]
  }
}

```
