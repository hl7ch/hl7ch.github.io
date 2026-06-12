# SwissMedicalSpecialities - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SwissMedicalSpecialities**

## ValueSet: SwissMedicalSpecialities 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/ValueSet/SwissMedicalSpecialities | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:SwissMedicalSpecialities |
| **Copyright/Legal**: CC0-1.0 | |

 
ValueSet for Swiss medical specialty areas (Fachbereiche) used in ambulatory care settings. Based on the regulation document 'Reglement Fachbereiche inkl. Liste der Fachbereiche' valid from January 1, 2026. Declared as fragment: only the codes actually referenced in this IG are listed here. 

 **References** 

* [CH ALIS Extension SectionCode](StructureDefinition-ch-alis-connect-ext-sectioncode.md)
* [CH ALIS Extension ServiceAssignment](StructureDefinition-ch-alis-connect-ext-serviceassignment.md)

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
  "id" : "SwissMedicalSpecialities",
  "url" : "http://fhir.ch/ig/ch-alis-connect/ValueSet/SwissMedicalSpecialities",
  "version" : "1.0.0-ballot",
  "name" : "SwissMedicalSpecialities",
  "title" : "SwissMedicalSpecialities",
  "status" : "active",
  "date" : "2026-06-12T18:35:48+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "ValueSet for Swiss medical specialty areas (Fachbereiche) used in ambulatory care settings. Based on the regulation document 'Reglement Fachbereiche inkl. Liste der Fachbereiche' valid from January 1, 2026. Declared as fragment: only the codes actually referenced in this IG are listed here.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://fhir.ch/ig/ch-alis-connect/CodeSystem/swiss-medical-specialties"
    }],
    "exclude" : [{
      "system" : "http://fhir.ch/ig/ch-alis-connect/CodeSystem/swiss-medical-specialties",
      "filter" : [{
        "property" : "notSelectable",
        "op" : "=",
        "value" : "true"
      }]
    }]
  }
}

```
