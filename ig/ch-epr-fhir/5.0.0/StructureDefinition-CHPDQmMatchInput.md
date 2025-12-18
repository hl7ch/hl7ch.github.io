# CH PDQm Patient Profile for $match Input - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PDQm Patient Profile for $match Input**

## Resource Profile: CH PDQm Patient Profile for $match Input 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CHPDQmMatchInput | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHPDQmMatchInput |
| **Copyright/Legal**: CC0-1.0 | |

 
The PDQm Patient Profile for $match Input SHALL be provided as input to the ITI-119 transaction. 
* While it is not REQUIRED that the input to $match be a valid FHIR instance, it is RECOMMENDED to supply as many elements as possible to facilitate matching.
* modifierExtension and implicitRules SHALL not be specified.
* The ChEprFhirBirthName profile is available to hold the mother's maiden name
 

**Usages:**

* Use this Profile: [CH PDQm Match Input Parameters Profile](StructureDefinition-CHPDQmMatchParametersIn.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/CHPDQmMatchInput)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-CHPDQmMatchInput.csv), [Excel](StructureDefinition-CHPDQmMatchInput.xlsx), [Schematron](StructureDefinition-CHPDQmMatchInput.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "CHPDQmMatchInput",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CHPDQmMatchInput",
  "version" : "5.0.0",
  "name" : "CHPDQmMatchInput",
  "title" : "CH PDQm Patient Profile for $match Input",
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
  "description" : "The PDQm Patient Profile for $match Input SHALL be provided as input to the ITI-119 transaction.\n- While it is not REQUIRED that the input to $match be a valid FHIR instance, it is RECOMMENDED to supply as many elements as possible to facilitate matching.\n- modifierExtension and implicitRules SHALL not be specified.\n- The ChEprFhirBirthName profile is available to hold the mother's maiden name",
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
  "baseDefinition" : "https://profiles.ihe.net/ITI/PDQm/StructureDefinition/IHE.PDQm.MatchInputPatient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient"
      },
      {
        "id" : "Patient.identifier",
        "path" : "Patient.identifier",
        "mustSupport" : true
      },
      {
        "id" : "Patient.name",
        "path" : "Patient.name",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Patient.name:HumanName",
        "path" : "Patient.name",
        "sliceName" : "HumanName",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "HumanName",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-epr-fhir-humanname"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Patient.name:BirthName",
        "path" : "Patient.name",
        "sliceName" : "BirthName",
        "short" : "The birthname of the patient",
        "comment" : "The birthname is added with the ISO 21090 qualifier https://www.hl7.org/fhir/extension-iso21090-en-qualifier.html BR",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "HumanName",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-epr-fhir-birthname"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Patient.telecom",
        "path" : "Patient.telecom",
        "max" : "0"
      },
      {
        "id" : "Patient.gender",
        "path" : "Patient.gender",
        "mustSupport" : true
      },
      {
        "id" : "Patient.birthDate",
        "path" : "Patient.birthDate",
        "mustSupport" : true
      },
      {
        "id" : "Patient.address",
        "path" : "Patient.address",
        "mustSupport" : true
      }
    ]
  }
}

```
