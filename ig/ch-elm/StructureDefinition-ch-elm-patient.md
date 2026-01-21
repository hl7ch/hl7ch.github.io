# CH ELM Patient - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Patient**

## Resource Profile: CH ELM Patient 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-patient | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmPatient |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM base profile constrains the Patient resource for the purpose of laboratory orders and test reports. 

**Usages:**

* Derived from this Profile: [CH ELM Patient HIV](StructureDefinition-ChElmPatientHIV.md), [CH ELM Patient Initials](StructureDefinition-ChElmPatientInitials.md) and [CH ELM Patient VCT](StructureDefinition-ChElmPatientVCT.md)
* Use this Profile: [CH ELM Document: Laboratory Report](StructureDefinition-ch-elm-document.md)
* Refer to this Profile: [CH ELM Composition: Laboratory Report](StructureDefinition-ch-elm-composition.md), [CH ELM DiagnosticReport: Laboratory Report](StructureDefinition-ch-elm-diagnosticreport.md), [CH ELM Observation Results: Laboratory](StructureDefinition-ch-elm-observation-results-laboratory.md), [CH ELM ServiceRequest: Laboratory Order](StructureDefinition-ch-elm-servicerequest-laboratory-order.md)... Show 2 more, [CH ELM ServiceRequest: Laboratory Order](StructureDefinition-ch-elm-servicerequest-previous-laboratory-order.md) and [CH ELM Specimen: Laboratory](StructureDefinition-ch-elm-specimen.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-patient.csv), [Excel](StructureDefinition-ch-elm-patient.xlsx), [Schematron](StructureDefinition-ch-elm-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-patient",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Patient-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-patient",
  "version" : "1.13.1",
  "name" : "ChElmPatient",
  "title" : "CH ELM Patient",
  "status" : "active",
  "date" : "2026-01-21T11:21:00+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "This CH ELM base profile constrains the Patient resource for the purpose of laboratory orders and test reports.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient",
        "short" : "CH ELM Patient"
      },
      {
        "id" : "Patient.identifier",
        "path" : "Patient.identifier",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Patient.identifier:EPR-SPID",
        "path" : "Patient.identifier",
        "sliceName" : "EPR-SPID",
        "max" : "0"
      },
      {
        "id" : "Patient.identifier:AHVN13",
        "path" : "Patient.identifier",
        "sliceName" : "AHVN13",
        "short" : "OASI Number Switzerland",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Patient.identifier:LocalPid",
        "path" : "Patient.identifier",
        "sliceName" : "LocalPid",
        "max" : "0"
      },
      {
        "id" : "Patient.identifier:insuranceCardNumber",
        "path" : "Patient.identifier",
        "sliceName" : "insuranceCardNumber",
        "max" : "0"
      },
      {
        "id" : "Patient.identifier:IDN",
        "path" : "Patient.identifier",
        "sliceName" : "IDN",
        "short" : "IDN Liechtenstein",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-idn-identifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:oid:2.16.438.10.20.10.10.1.2.1"
        },
        "mustSupport" : true
      },
      {
        "id" : "Patient.name",
        "path" : "Patient.name",
        "short" : "Whether the personal data is transmitted by using initials, full name or a special combination is described under 'Guidance - Personal Data (Patient Name)'",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "HumanName",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-humanname"
            ]
          }
        ]
      },
      {
        "id" : "Patient.name.family",
        "path" : "Patient.name.family",
        "short" : "masked when using HIV/VCT-extensions (see IG guidance).",
        "min" : 1,
        "maxLength" : 100
      },
      {
        "id" : "Patient.name.given",
        "path" : "Patient.name.given",
        "short" : "masked when using HIV/VCT-extensions (see IG guidance).",
        "min" : 1,
        "max" : "1",
        "maxLength" : 100
      },
      {
        "id" : "Patient.telecom:phone",
        "path" : "Patient.telecom",
        "sliceName" : "phone",
        "max" : "1"
      },
      {
        "id" : "Patient.telecom:phone.value",
        "path" : "Patient.telecom.value",
        "example" : [
          {
            "label" : "CH ELM",
            "valueString" : "+41 79 999 55 66"
          }
        ],
        "maxLength" : 25
      },
      {
        "id" : "Patient.gender",
        "path" : "Patient.gender",
        "min" : 1
      },
      {
        "id" : "Patient.birthDate",
        "path" : "Patient.birthDate",
        "min" : 1,
        "constraint" : [
          {
            "key" : "ch-elm-dateTime",
            "severity" : "error",
            "human" : "At least the format YYYY-MM-DD is required.",
            "expression" : "$this.toString().length() >= 10",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-patient"
          }
        ]
      },
      {
        "id" : "Patient.address",
        "path" : "Patient.address",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "use"
            }
          ],
          "rules" : "open"
        },
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Patient.address:home",
        "path" : "Patient.address",
        "sliceName" : "home",
        "short" : "Residential address",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Patient.address:home.use",
        "path" : "Patient.address.use",
        "min" : 1,
        "patternCode" : "home"
      },
      {
        "id" : "Patient.address:home.line",
        "path" : "Patient.address.line",
        "max" : "1"
      },
      {
        "id" : "Patient.address:home.line.extension:streetName",
        "path" : "Patient.address.line.extension",
        "sliceName" : "streetName"
      },
      {
        "id" : "Patient.address:home.line.extension:streetName.value[x]",
        "path" : "Patient.address.line.extension.value[x]",
        "maxLength" : 100
      },
      {
        "id" : "Patient.address:home.line.extension:houseNumber",
        "path" : "Patient.address.line.extension",
        "sliceName" : "houseNumber"
      },
      {
        "id" : "Patient.address:home.line.extension:houseNumber.value[x]",
        "path" : "Patient.address.line.extension.value[x]",
        "maxLength" : 10
      },
      {
        "id" : "Patient.address:home.city",
        "path" : "Patient.address.city",
        "maxLength" : 50,
        "mustSupport" : true
      },
      {
        "id" : "Patient.address:home.state",
        "path" : "Patient.address.state",
        "short" : "sub-unit of country. canton-abbreviation is expected for a Swiss or Liechtenstein address.",
        "mustSupport" : true
      },
      {
        "id" : "Patient.address:home.postalCode",
        "path" : "Patient.address.postalCode",
        "maxLength" : 10,
        "mustSupport" : true
      },
      {
        "id" : "Patient.address:home.country",
        "path" : "Patient.address.country",
        "mustSupport" : true
      },
      {
        "id" : "Patient.address:home.country.extension",
        "path" : "Patient.address.country.extension",
        "min" : 1
      },
      {
        "id" : "Patient.address:home.country.extension:countrycode",
        "path" : "Patient.address.country.extension",
        "sliceName" : "countrycode",
        "min" : 1
      },
      {
        "id" : "Patient.address:home.country.extension:countrycode.value[x]",
        "path" : "Patient.address.country.extension.value[x]",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/bfs-country-codes"
        }
      }
    ]
  }
}

```
