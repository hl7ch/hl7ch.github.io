# CH ELM FOPH Patient Name Representation - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM FOPH Patient Name Representation**

## CodeSystem: CH ELM FOPH Patient Name Representation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-foph-patient-name-representation | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmFophPatientNameRepresentation |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM resource defines the codes which identify possible patient name schemas to be used. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChElmFophPatientNameRepresentation](ValueSet-ch-elm-foph-patient-name-representation.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-elm-foph-patient-name-representation",
  "url" : "http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-foph-patient-name-representation",
  "version" : "1.13.1",
  "name" : "ChElmFophPatientNameRepresentation",
  "title" : "CH ELM FOPH Patient Name Representation",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-21T11:05:32+00:00",
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
  "description" : "This CH ELM resource defines the codes which identify possible patient name schemas to be used.",
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
  "caseSensitive" : false,
  "content" : "complete",
  "concept" : [
    {
      "code" : "full-name",
      "display" : "Full Name",
      "definition" : "Full name of the patient (given name and family name)."
    },
    {
      "code" : "initials",
      "display" : "Initials",
      "definition" : "The first letter of the given name and family name. For compound names, only include the first part of the name."
    },
    {
      "code" : "hiv-code",
      "display" : "HIV Code",
      "definition" : "An HIV-specific code representing the patient. Consult the 'Guidance - Personal Data (Patient Name)' for details on constructing the HIV patient identification code."
    },
    {
      "code" : "initials-or-vctcode",
      "display" : "Initials or VCT-Code",
      "definition" : "Initials of the patient name (given name and family name) or VCT-Code (voluntary counselling and testing code)."
    },
    {
      "code" : "conditional",
      "display" : "Conditional",
      "definition" : "The leading code (Observation.code) does not define a patient-anonymization, it is dependent on further specification of the organism. Consult the Ordinance SR 818.101.126 (https://www.fedlex.admin.ch/eli/cc/2015/892/de) to determine the required patient-anonymization depending on the organism reported."
    }
  ]
}

```
