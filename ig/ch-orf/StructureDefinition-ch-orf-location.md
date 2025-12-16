# CH ORF Location - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Location**

## Resource Profile: CH ORF Location 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-location | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfLocation |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile to define the details of the location of the appointment. 

**Usages:**

* Refer to this Profile: [CH ORF Appointment](StructureDefinition-ch-orf-appointment.md)
* Examples for this Profile: [Appointment-Location](Location-LocationOfAppointment.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-location)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-location.csv), [Excel](StructureDefinition-ch-orf-location.xlsx), [Schematron](StructureDefinition-ch-orf-location.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-location",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-location",
  "version" : "3.0.2",
  "name" : "ChOrfLocation",
  "title" : "CH ORF Location",
  "status" : "active",
  "date" : "2025-12-16T09:36:47+00:00",
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
    }
  ],
  "description" : "Profile to define the details of the location of the appointment.",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "eCH",
      "uri" : "https://www.ech.ch/",
      "name" : "eCH Standards"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Location",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-location",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Location",
        "path" : "Location",
        "short" : "CH ORF Location"
      },
      {
        "id" : "Location.name",
        "path" : "Location.name",
        "mustSupport" : true
      },
      {
        "id" : "Location.telecom:email",
        "path" : "Location.telecom",
        "sliceName" : "email",
        "mustSupport" : true
      },
      {
        "id" : "Location.telecom:phone",
        "path" : "Location.telecom",
        "sliceName" : "phone",
        "mustSupport" : true
      },
      {
        "id" : "Location.address",
        "path" : "Location.address",
        "mustSupport" : true
      }
    ]
  }
}

```
