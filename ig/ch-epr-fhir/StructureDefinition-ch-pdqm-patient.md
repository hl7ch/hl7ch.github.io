# CH PDQm Patient - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PDQm Patient**

## Resource Profile: CH PDQm Patient 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pdqm-patient | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHPDQmPatient |
| **Copyright/Legal**: CC0-1.0 | |

 
The patient demographics and identifier information which can be provided in the PDQm response according to the EPR. If the patient is already registered in a community, the MPI-PID SHALL be provided as an identifier. The EPR-SPID as an identifier MAY be added. The birthname can be added with the ISO 21090 qualifier extension. 

**Usages:**

* Derived from this Profile: [CH PIXm Patient Feed](StructureDefinition-ch-pixm-patient-feed.md)
* Use this Profile: [CH PDQm Match Output Bundle Profile](StructureDefinition-ch-pdqm-matchparametersout.md)
* Examples for this Profile: [Patient/FranzMusterNeedsAbsoluteUrl](Patient-FranzMusterNeedsAbsoluteUrl.md)
* CapabilityStatements using this Profile: [PDQm Consumer (client)](CapabilityStatement-CH.PDQm.Consumer.md) and [PDQm Supplier (server)](CapabilityStatement-CH.PDQm.Supplier.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-pdqm-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-pdqm-patient.csv), [Excel](StructureDefinition-ch-pdqm-patient.xlsx), [Schematron](StructureDefinition-ch-pdqm-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-pdqm-patient",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pdqm-patient",
  "version" : "5.0.0",
  "name" : "CHPDQmPatient",
  "title" : "CH PDQm Patient",
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
  "description" : "The patient demographics and identifier information which can be provided in the PDQm response according to the EPR. If the patient is already registered in a community, the MPI-PID SHALL be provided as an identifier. The EPR-SPID as an identifier MAY be added. The birthname can be added with the ISO 21090 qualifier extension.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient.extension:religion",
        "path" : "Patient.extension",
        "sliceName" : "religion",
        "max" : "0"
      },
      {
        "id" : "Patient.identifier",
        "path" : "Patient.identifier",
        "min" : 1
      },
      {
        "id" : "Patient.identifier:EPR-SPID",
        "path" : "Patient.identifier",
        "sliceName" : "EPR-SPID",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Patient.identifier:LocalPid",
        "path" : "Patient.identifier",
        "sliceName" : "LocalPid",
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
        },
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Patient.name:HumanName",
        "path" : "Patient.name",
        "sliceName" : "HumanName",
        "min" : 1,
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
        "id" : "Patient.contact",
        "path" : "Patient.contact",
        "max" : "0"
      },
      {
        "id" : "Patient.contact:contact",
        "path" : "Patient.contact",
        "sliceName" : "contact",
        "max" : "0"
      },
      {
        "id" : "Patient.contact:nameOfParent",
        "path" : "Patient.contact",
        "sliceName" : "nameOfParent",
        "max" : "0"
      }
    ]
  }
}

```
