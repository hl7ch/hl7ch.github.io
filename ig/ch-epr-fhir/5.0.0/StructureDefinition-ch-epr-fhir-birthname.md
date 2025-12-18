# CH EPR FHIR BirthName - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPR FHIR BirthName**

## Data Type Profile: CH EPR FHIR BirthName 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-epr-fhir-birthname | *Version*:5.0.0 |
| Active as of 2020-07-07 | *Computable Name*:ChEprFhirBirthName |
| **Copyright/Legal**: CC0-1.0 | |

 
The birthname with the ISO 21090 qualifier https://www.hl7.org/fhir/extension-iso21090-en-qualifier.html BR 

**Usages:**

* Use this DataType Profile: [CH PDQm Patient Profile for $match Input](StructureDefinition-CHPDQmMatchInput.md) and [CH PDQm Patient](StructureDefinition-ch-pdqm-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-epr-fhir-birthname)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epr-fhir-birthname.csv), [Excel](StructureDefinition-ch-epr-fhir-birthname.xlsx), [Schematron](StructureDefinition-ch-epr-fhir-birthname.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epr-fhir-birthname",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-epr-fhir-birthname",
  "version" : "5.0.0",
  "name" : "ChEprFhirBirthName",
  "title" : "CH EPR FHIR BirthName",
  "status" : "active",
  "date" : "2020-07-07T00:00:00+10:00",
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
  "description" : "The birthname with the ISO 21090 qualifier https://www.hl7.org/fhir/extension-iso21090-en-qualifier.html BR",
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
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "HumanName",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "HumanName",
        "path" : "HumanName",
        "short" : "BirthName"
      },
      {
        "id" : "HumanName.family",
        "path" : "HumanName.family",
        "short" : "The birthname of the patient",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "HumanName.family.extension",
        "path" : "HumanName.family.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "rules" : "closed"
        },
        "min" : 1,
        "max" : "2"
      },
      {
        "id" : "HumanName.family.extension:iso21090-EN-qualifier",
        "path" : "HumanName.family.extension",
        "sliceName" : "iso21090-EN-qualifier",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier|5.3.0-ballot-tc1"
            ]
          }
        ]
      },
      {
        "id" : "HumanName.family.extension:iso21090-EN-qualifier.valueCode",
        "path" : "HumanName.family.extension.valueCode",
        "short" : "BR (Birth)",
        "min" : 1,
        "max" : "1",
        "fixedCode" : "BR"
      }
    ]
  }
}

```
