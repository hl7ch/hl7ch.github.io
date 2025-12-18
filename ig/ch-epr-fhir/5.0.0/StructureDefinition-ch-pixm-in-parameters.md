# CH PIXm IN Parameters - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PIXm IN Parameters**

## Resource Profile: CH PIXm IN Parameters 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-in-parameters | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:PIXm_IN_Parameters_CH |
| **Copyright/Legal**: CC0-1.0 | |

 
The StructureDefinition defines the Input Parameters for the $ihe-pix operation: - Input: sourceIdentifier, targetSystem 

**Usages:**

* Examples for this Profile: [Parameters/ParametersPIXmInput](Parameters-ParametersPIXmInput.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-pixm-in-parameters)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-pixm-in-parameters.csv), [Excel](StructureDefinition-ch-pixm-in-parameters.xlsx), [Schematron](StructureDefinition-ch-pixm-in-parameters.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-pixm-in-parameters",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-in-parameters",
  "version" : "5.0.0",
  "name" : "PIXm_IN_Parameters_CH",
  "title" : "CH PIXm IN Parameters",
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
  "description" : "The StructureDefinition defines the Input Parameters for the $ihe-pix operation: - Input: sourceIdentifier, targetSystem",
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
  "baseDefinition" : "https://profiles.ihe.net/ITI/PIXm/StructureDefinition/IHE.PIXm.Query.Parameters.In",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Parameters",
        "path" : "Parameters"
      },
      {
        "id" : "Parameters.parameter",
        "path" : "Parameters.parameter",
        "min" : 2
      },
      {
        "id" : "Parameters.parameter:targetSystem",
        "path" : "Parameters.parameter",
        "sliceName" : "targetSystem",
        "min" : 1,
        "max" : "2"
      }
    ]
  }
}

```
