# CH ALIS Leistungsschnittstelle - ParameterV40 - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Leistungsschnittstelle - ParameterV40**

## Logical Model: CH ALIS Leistungsschnittstelle - ParameterV40 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ParameterV40 | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisLeistungsschnittstelleParameterV40 |
| **Copyright/Legal**: CC0-1.0 | |

 
This logical model describes the ParameterV40 of 'Leistungsschnittstelle ALIS Version 5.1'. 

**Usages:**

* Use this Logical Model: [CH ALIS Leistungsschnittstelle - Service](StructureDefinition-Service.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-ParameterV40.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ParameterV40.csv), [Excel](StructureDefinition-ParameterV40.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ParameterV40",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-namespace",
    "valueUri" : "noNamespace"
  }],
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ParameterV40",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisLeistungsschnittstelleParameterV40",
  "title" : "CH ALIS Leistungsschnittstelle - ParameterV40",
  "status" : "active",
  "date" : "2026-06-12T18:37:15+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "This logical model describes the ParameterV40 of 'Leistungsschnittstelle ALIS Version 5.1'.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ParameterV40",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "ParameterV40",
      "path" : "ParameterV40",
      "short" : "CH ALIS Leistungsschnittstelle - ParameterV40",
      "definition" : "4, ParameterV40, Optional (0,N)"
    },
    {
      "id" : "ParameterV40.ParamTyp",
      "path" : "ParameterV40.ParamTyp",
      "representation" : ["xmlAttr"],
      "short" : "4.1, ParamTyp, Alphanum., Obligatorisch",
      "definition" : "4.1, ParamTyp, Alphanum., Obligatorisch",
      "comment" : "Most ParamTyp values are carried in the generic ParameterV40 extension on ChargeItem. Some values are instead mapped to dedicated FHIR elements: BMI -> ChargeItem.supportingInformation, Billable -> ChargeItem.status, Amount -> ChargeItem.priceOverride.value, SLIndicationCode -> the CH Core indication-code extension. See the ParamTyp code system and the ParameterV40 Concept Map.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "ParameterV40.ParamValue",
      "path" : "ParameterV40.ParamValue",
      "short" : "4.2, ParamValue, Alphanum., Obligatorisch",
      "definition" : "4.2, ParamValue, Alphanum., Obligatorisch",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    }]
  }
}

```
