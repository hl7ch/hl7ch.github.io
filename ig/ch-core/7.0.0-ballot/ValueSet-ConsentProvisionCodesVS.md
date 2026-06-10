# ConsentProvisionCodesVS - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ConsentProvisionCodesVS**

## ValueSet: ConsentProvisionCodesVS 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ValueSet/ConsentProvisionCodesVS | *Version*:7.0.0-ballot |
| Active as of 2026-06-10 | *Computable Name*:ConsentProvisionCodesVS |
| **Copyright/Legal**: CC0-1.0 | |

 
ValueSet of all used codes for Consent.provision.code 

 **References** 

* [CH Core Consent](StructureDefinition-CHCoreConsent.md)

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
  "id" : "ConsentProvisionCodesVS",
  "url" : "http://fhir.ch/ig/ch-core/ValueSet/ConsentProvisionCodesVS",
  "version" : "7.0.0-ballot",
  "name" : "ConsentProvisionCodesVS",
  "title" : "ConsentProvisionCodesVS",
  "status" : "active",
  "date" : "2026-06-10T14:59:48+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "ValueSet of all used codes for Consent.provision.code",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ConsentProvisionCodesCS",
      "concept" : [{
        "code" : "GC",
        "display" : "General Consent"
      },
      {
        "code" : "PATPORTAL",
        "display" : "Patient Portal"
      }]
    }]
  }
}

```
