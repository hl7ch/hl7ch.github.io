# CH mCSD Feed Practitioner - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH mCSD Feed Practitioner**

## Resource Profile: CH mCSD Feed Practitioner 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Feed.Practitioner | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHmCSDFeedPractitioner |
| **Copyright/Legal**: CC0-1.0 | |

 
CH mCSD profile on Practitioner Feed 

**Usages:**

* CapabilityStatements using this Profile: [mCSD Data Source (client)](CapabilityStatement-CH.mCSD.DataSource.md)
* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/CH.mCSD.Feed.Practitioner)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-CH.mCSD.Feed.Practitioner.csv), [Excel](StructureDefinition-CH.mCSD.Feed.Practitioner.xlsx), [Schematron](StructureDefinition-CH.mCSD.Feed.Practitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "CH.mCSD.Feed.Practitioner",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Feed.Practitioner",
  "version" : "5.0.0",
  "name" : "CHmCSDFeedPractitioner",
  "title" : "CH mCSD Feed Practitioner",
  "status" : "active",
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
  "description" : "CH mCSD profile on Practitioner Feed",
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
      "identity" : "CHmCSDPractitionerToHCProfessional",
      "uri" : "https://www.bag.admin.ch/epra",
      "name" : "LDAP schema"
    },
    {
      "identity" : "eCH",
      "uri" : "http://www.ech.ch/",
      "name" : "eCH-Standards"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Practitioner",
  "baseDefinition" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH.mCSD.Practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Practitioner",
        "path" : "Practitioner"
      },
      {
        "id" : "Practitioner.gender",
        "path" : "Practitioner.gender",
        "short" : "male | female",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/ch-mcsd-practitioner-gender-vs"
        }
      }
    ]
  }
}

```
