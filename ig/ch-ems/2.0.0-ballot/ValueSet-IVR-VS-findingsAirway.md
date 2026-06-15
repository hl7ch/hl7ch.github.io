# IVR Findings Airway - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Findings Airway**

## ValueSet: IVR Findings Airway 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-findingsAirway | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSfindingsAirway |
| **Copyright/Legal**: CC0-1.0 | |

 
List of findings on the condition of the airways. 

 **References** 

* [CH EMS Observation: Airways](StructureDefinition-ch-ems-observation-airways.md)
* [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md)

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
  "id" : "IVR-VS-findingsAirway",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-findingsAirway",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSfindingsAirway",
  "title" : "IVR Findings Airway",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-06-15T08:00:21+00:00",
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
  "description" : "List of findings on the condition of the airways.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "23875004",
        "display" : "No pathologic finding",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Atemwege frei"
        },
        {
          "language" : "fr-CH",
          "value" : "Voies aériennes libres"
        },
        {
          "language" : "it-CH",
          "value" : "Vie aeree pervie"
        }]
      },
      {
        "code" : "263821009",
        "display" : "Obstructed",
        "designation" : [{
          "language" : "de-CH",
          "value" : "obstruiert"
        },
        {
          "language" : "fr-CH",
          "value" : "Obstrué"
        },
        {
          "language" : "it-CH",
          "value" : "Ostruito"
        }]
      },
      {
        "code" : "68052005",
        "display" : "Pulmonary aspiration",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Aspiration"
        },
        {
          "language" : "fr-CH",
          "value" : "Bronchoaspiration"
        },
        {
          "language" : "it-CH",
          "value" : "Broncoaspirazione"
        }]
      },
      {
        "code" : "52765003",
        "display" : "Intubation",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Intubation"
        },
        {
          "language" : "fr-CH",
          "value" : "Intubation"
        },
        {
          "language" : "it-CH",
          "value" : "Intubazione"
        }]
      },
      {
        "code" : "48387007",
        "display" : "Tracheostomy",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Tracheostomie"
        },
        {
          "language" : "fr-CH",
          "value" : "Tracheostomie"
        },
        {
          "language" : "it-CH",
          "value" : "Tracheostomia"
        }]
      },
      {
        "code" : "301287002",
        "display" : "Expiratory stridor",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Stridor exspirtatorisch"
        },
        {
          "language" : "fr-CH",
          "value" : "Stridor expiratoire"
        },
        {
          "language" : "it-CH",
          "value" : "Stridore espiratorio"
        }]
      },
      {
        "code" : "58596002",
        "display" : "Inspiratory stridor",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Stridor inspiratorisch"
        },
        {
          "language" : "fr-CH",
          "value" : "Stridor inspiratoire"
        },
        {
          "language" : "it-CH",
          "value" : "Stridor inspiratorio"
        }]
      },
      {
        "code" : "17621005",
        "display" : "Normal",
        "designation" : [{
          "language" : "de-CH",
          "value" : "unauffällig"
        },
        {
          "language" : "fr-CH",
          "value" : "Normal"
        },
        {
          "language" : "it-CH",
          "value" : "Normale"
        }]
      }]
    }]
  }
}

```
