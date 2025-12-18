# CH PIXm OUT Parameters - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PIXm OUT Parameters**

## Resource Profile: CH PIXm OUT Parameters 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-out-parameters | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:IHE_PIXm_OUT_Parameters_CH |
| **Copyright/Legal**: CC0-1.0 | |

 
The StructureDefinition defines the Output Parameters for the $ihe-pix operation: 

**Usages:**

* Examples for this Profile: [Parameters/ParametersPIXmOutput](Parameters-ParametersPIXmOutput.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-pixm-out-parameters)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-pixm-out-parameters.csv), [Excel](StructureDefinition-ch-pixm-out-parameters.xlsx), [Schematron](StructureDefinition-ch-pixm-out-parameters.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-pixm-out-parameters",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-out-parameters",
  "version" : "5.0.0",
  "name" : "IHE_PIXm_OUT_Parameters_CH",
  "title" : "CH PIXm OUT Parameters",
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
  "description" : "The StructureDefinition defines the Output Parameters for the $ihe-pix operation: ",
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
  "baseDefinition" : "https://profiles.ihe.net/ITI/PIXm/StructureDefinition/IHE.PIXm.Query.Parameters.Out",
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
        "max" : "2"
      },
      {
        "id" : "Parameters.parameter:targetIdentifier",
        "path" : "Parameters.parameter",
        "sliceName" : "targetIdentifier",
        "max" : "2"
      },
      {
        "id" : "Parameters.parameter:targetId",
        "path" : "Parameters.parameter",
        "sliceName" : "targetId",
        "short" : "targetId",
        "max" : "0"
      }
    ]
  }
}

```
