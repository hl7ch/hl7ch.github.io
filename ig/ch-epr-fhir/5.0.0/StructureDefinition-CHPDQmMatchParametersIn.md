# CH PDQm Match Input Parameters Profile - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PDQm Match Input Parameters Profile**

## Resource Profile: CH PDQm Match Input Parameters Profile 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CHPDQmMatchParametersIn | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHPDQmMatchParametersIn |
| **Copyright/Legal**: CC0-1.0 | |

 
The PDQm Match Input Parameters Profile describes the Parameters Resource that is to be posted to the $match endpoint when invoking ITI-119. This profile is consistent with the exceptions of the[Patient-match operation in FHIR core](http://hl7.org/fhir/R4/patient-operation-match.html), except the input resource SHALL be an instance of the[PDQm Patient Profile for $match Input](StructureDefinition-CHPDQmMatchInput.md). 
Note that the only REQUIRED parameter is the Patient Resource. When only the Patient is supplied, it can be POSTed directly to the $match endpoint without being wrapped in a Parameters Resource, as long as it conforms to the[PDQm Patient Profile for $match Input](StructureDefinition-CHPDQmMatchInput.md). 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/CHPDQmMatchParametersIn)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-CHPDQmMatchParametersIn.csv), [Excel](StructureDefinition-CHPDQmMatchParametersIn.xlsx), [Schematron](StructureDefinition-CHPDQmMatchParametersIn.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "CHPDQmMatchParametersIn",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CHPDQmMatchParametersIn",
  "version" : "5.0.0",
  "name" : "CHPDQmMatchParametersIn",
  "title" : "CH PDQm Match Input Parameters Profile",
  "status" : "active",
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
  "description" : "The PDQm Match Input Parameters Profile describes the Parameters Resource that is to be posted to the $match endpoint when invoking ITI-119.\nThis profile is consistent with the exceptions of the [Patient-match operation in FHIR core](http://hl7.org/fhir/R4/patient-operation-match.html),\nexcept the input resource SHALL be an instance of the [PDQm Patient Profile for $match Input](StructureDefinition-CHPDQmMatchInput.html).\n\nNote that the only REQUIRED parameter is the Patient Resource. When only the Patient is supplied, it can be POSTed directly to the $match endpoint\nwithout being wrapped in a Parameters Resource, as long as it conforms to the [PDQm Patient Profile for $match Input](StructureDefinition-CHPDQmMatchInput.html).",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Parameters",
  "baseDefinition" : "https://profiles.ihe.net/ITI/PDQm/StructureDefinition/IHE.PDQm.MatchParametersIn",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Parameters",
        "path" : "Parameters"
      },
      {
        "id" : "Parameters.parameter:resource",
        "path" : "Parameters.parameter",
        "sliceName" : "resource"
      },
      {
        "id" : "Parameters.parameter:resource.resource",
        "path" : "Parameters.parameter.resource",
        "type" : [
          {
            "code" : "Patient",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CHPDQmMatchInput"
            ]
          }
        ]
      }
    ]
  }
}

```
