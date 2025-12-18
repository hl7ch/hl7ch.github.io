# IHE XCPD Codesystem more attributes requested - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IHE XCPD Codesystem more attributes requested**

## CodeSystem: IHE XCPD Codesystem more attributes requested 

| | |
| :--- | :--- |
| *Official URL*:urn:oid:1.3.6.1.4.1.19376.1.2.27.1 | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:IheXcpdMoreAttributesRequested |
| **Copyright/Legal**: CC0-1.0 | |

 
Codes for indicating which additional attributes are requested to lower the results number. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChPdqmMoreAttributesRequested](ValueSet-ChPdqmMoreAttributesRequested.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "1.3.6.1.4.1.19376.1.2.27.1",
  "url" : "urn:oid:1.3.6.1.4.1.19376.1.2.27.1",
  "version" : "5.0.0",
  "name" : "IheXcpdMoreAttributesRequested",
  "title" : "IHE XCPD Codesystem more attributes requested",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-18T15:54:33+00:00",
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
  "description" : "Codes for indicating which additional attributes are requested to lower the results number.",
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
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "LivingSubjectAdministrativeGenderRequested",
      "display" : "LivingSubjectAdministrativeGenderRequested"
    },
    {
      "code" : "PatientAddressRequested",
      "display" : "PatientAddressRequested"
    },
    {
      "code" : "LivingSubjectBirthPlaceNameRequested",
      "display" : "LivingSubjectBirthPlaceNameRequested"
    }
  ]
}

```
