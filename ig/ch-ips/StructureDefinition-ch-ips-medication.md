# CH IPS Medication - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IPS Medication**

## Resource Profile: CH IPS Medication 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChIpsMedication |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH IPS profile for the resource Medication is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. 

**Usages:**

* Use this Profile: [CH IPS Document](StructureDefinition-ch-ips-document.md)
* Refer to this Profile: [CH IPS MedicationRequest](StructureDefinition-ch-ips-medicationrequest.md) and [CH IPS MedicationStatement](StructureDefinition-ch-ips-medicationstatement.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-ips|current/StructureDefinition/ch-ips-medication)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ips-medication.csv), [Excel](StructureDefinition-ch-ips-medication.xlsx), [Schematron](StructureDefinition-ch-ips-medication.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ips-medication",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Medication-uv-ips"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication",
  "version" : "2.0.0",
  "name" : "ChIpsMedication",
  "title" : "CH IPS Medication",
  "status" : "active",
  "date" : "2025-12-16T12:02:17+00:00",
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
  "description" : "This CH IPS profile for the resource Medication is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "script10.6",
      "uri" : "http://ncpdp.org/SCRIPT10_6",
      "name" : "Mapping to NCPDP SCRIPT 10.6"
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
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Medication",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Medication",
        "path" : "Medication",
        "short" : "CH IPS Medication"
      }
    ]
  }
}

```
