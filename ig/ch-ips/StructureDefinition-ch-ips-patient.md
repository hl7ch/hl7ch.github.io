# CH IPS Patient - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IPS Patient**

## Resource Profile: CH IPS Patient 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChIpsPatient |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH IPS profile for the resource Patient is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. 

**Usages:**

* Use this Profile: [CH IPS Document](StructureDefinition-ch-ips-document.md)
* Refer to this Profile: [CH IPS AllergyIntolerance](StructureDefinition-ch-ips-allergyintolerance.md), [CH IPS Composition](StructureDefinition-ch-ips-composition.md), [CH IPS Condition](StructureDefinition-ch-ips-condition.md), [CH IPS Immunization](StructureDefinition-ch-ips-immunization.md)...Show 2 more,[CH IPS MedicationRequest](StructureDefinition-ch-ips-medicationrequest.md)and[CH IPS MedicationStatement](StructureDefinition-ch-ips-medicationstatement.md)
* Examples for this Profile: [Patient/8383926c-ece1-4384-94bc-b4250b4cb71b](Patient-8383926c-ece1-4384-94bc-b4250b4cb71b.md) and [Patient/MonikaWegmueller](Patient-MonikaWegmueller.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-ips|current/StructureDefinition/ch-ips-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ips-patient.csv), [Excel](StructureDefinition-ch-ips-patient.xlsx), [Schematron](StructureDefinition-ch-ips-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ips-patient",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Patient-uv-ips"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient",
  "version" : "2.0.0",
  "name" : "ChIpsPatient",
  "title" : "CH IPS Patient",
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
  "description" : "This CH IPS profile for the resource Patient is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
      "identity" : "eCH",
      "uri" : "http://www.ech.ch/",
      "name" : "eCH-Standards"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
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
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient",
        "short" : "CH IPS Patient"
      }
    ]
  }
}

```
