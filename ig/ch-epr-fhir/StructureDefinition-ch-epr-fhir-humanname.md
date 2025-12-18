# CH EPR FHIR HumanName - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPR FHIR HumanName**

## Data Type Profile: CH EPR FHIR HumanName 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-epr-fhir-humanname | *Version*:5.0.0 |
| Active as of 2020-07-27 | *Computable Name*:ChEprFhirHumanName |
| **Copyright/Legal**: CC0-1.0 | |

 
The human name WITHOUT the ISO 21090 qualifier https://www.hl7.org/fhir/extension-iso21090-en-qualifier.html BR 

**Usages:**

* Use this DataType Profile: [CH PDQm Patient Profile for $match Input](StructureDefinition-CHPDQmMatchInput.md) and [CH PDQm Patient](StructureDefinition-ch-pdqm-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-epr-fhir-humanname)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epr-fhir-humanname.csv), [Excel](StructureDefinition-ch-epr-fhir-humanname.xlsx), [Schematron](StructureDefinition-ch-epr-fhir-humanname.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epr-fhir-humanname",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-epr-fhir-humanname",
  "version" : "5.0.0",
  "name" : "ChEprFhirHumanName",
  "title" : "CH EPR FHIR HumanName",
  "status" : "active",
  "date" : "2020-07-27T00:00:00+10:00",
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
  "description" : "The human name WITHOUT the ISO 21090 qualifier https://www.hl7.org/fhir/extension-iso21090-en-qualifier.html BR",
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
        "constraint" : [
          {
            "key" : "ch-epr-fhir-1",
            "severity" : "error",
            "human" : "For birth name (iso21090-EN-qualifier BR) use slice 'name:BirthName'",
            "expression" : "family.extension.where(url='http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier' and value='BR').exists()=false"
          }
        ]
      }
    ]
  }
}

```
