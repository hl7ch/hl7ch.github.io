# CH PDQm ValueSet More Attributes Requested - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PDQm ValueSet More Attributes Requested**

## ValueSet: CH PDQm ValueSet More Attributes Requested 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/ValueSet/ChPdqmMoreAttributesRequested | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:ChPdqmMoreAttributesRequested |
| **Copyright/Legal**: CC0-1.0 | |

 
Coded Values for indicating which additional attributes are requested to lower the results number. 

 **References** 

* [CH PDQm OperationOutcome More Attributes Requested](StructureDefinition-ch-pdqm-moreattributesrequested.md)

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
  "id" : "ChPdqmMoreAttributesRequested",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/ChPdqmMoreAttributesRequested",
  "version" : "5.0.0",
  "name" : "ChPdqmMoreAttributesRequested",
  "title" : "CH PDQm ValueSet More Attributes Requested",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-18T15:42:00+00:00",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Coded Values for indicating which additional attributes are requested to lower the results number.",
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
        "system" : "urn:oid:1.3.6.1.4.1.19376.1.2.27.1",
        "concept" : [
          {
            "code" : "LivingSubjectAdministrativeGenderRequested"
          },
          {
            "code" : "PatientAddressRequested"
          },
          {
            "code" : "LivingSubjectBirthPlaceNameRequested"
          }
        ]
      },
      {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.10.17",
        "concept" : [
          {
            "code" : "BirthNameRequested"
          }
        ]
      }
    ]
  }
}

```
